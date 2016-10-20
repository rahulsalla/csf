<?
error_reporting(E_ALL);
ini_set("display_errors", 1);

if( !function_exists('apache_request_headers') ) {
  function apache_request_headers(){
    $arh = array();
    $rx_http = '/\AHTTP_/';

    foreach($_SERVER as $key => $val){
      if(preg_match($rx_http, $key)){
	$arh_key = preg_replace($rx_http, '', $key);
	$rx_matches = array();
	$rx_matches = explode('_', $arh_key);
	if(count($rx_matches) > 0 and strlen($arh_key) > 2){
	  foreach($rx_matches as $ak_key => $ak_val){
	    $rx_matches[$ak_key] = ucfirst($ak_val);
	  }
	}
	$arh[$arh_key] = $val;
      }
    }
    return $arh;
  }
}

$user_timeout = $parameters['session_timeout'];

$ajax = new PHPLiveX(array("checkauthx"));
$ajax->Run("components/csf/phplivex/phplivex.js");

function cidr_match($ip, $range)
{
  list ($subnet, $bits) = explode('/', $range);
  $ip = ip2long($ip);
  $subnet = ip2long($subnet);
  $mask = -1 << (32 - $bits);
  $subnet &= $mask; 
  return ($ip & $mask) == $subnet;
}

function access_denied($message = 'Access denied') {
  echo $message;
  die();
}

function checkauthx($region){
  global $user_timeout;
  global $parameters;
  $headers = apache_request_headers();
  $pass = false;
  if($parameters['use_forwarded_ip']=='true' and isset($headers["X-Forwarded-For"])) $ip=$headers["X-Forwarded-For"];
  else $ip=$_SERVER['REMOTE_ADDR'];
  if(isset($_SESSION['user']) and isset($_SESSION['timeout']) and (($_SESSION['timeout']-time())>0)) {
    if(authx($_SESSION['user'], $ip, $region)) {
      $_SESSION[base64_encode($region)]=true;
      $_SESSION['login_count']=1;
      $_SESSION['timeout'] = time()+ $user_timeout;
      $pass = true;
    }
  }
  return($pass);
}

function authx($name, $ip, $region) {
  global $db;
  $pass = false;
  $region = explode('=', $region);
  if($region[0]=='') access_denied();
  $result = $db->fetchAll("select * from users where ((username='everyone') or (username='".$name."')) and (region like '%".$region[0]."%')");
  #	var_dump($result);
  #	die();
  foreach($result as $value)
  {
    if(cidr_match($ip, $value['network'])) {
      switch($region[0]) {
      case 'dashboard':
	$dboard = explode(',',$value['region']);
	foreach($dboard as $search) {
	  $dashboards = explode('=',$search);
	  if($dashboards[0]=='dashboard') break;
	}
	$dashboards = explode('+',$dashboards[1]);
	foreach($dashboards as $dash)
	{
	  $check = explode('-',$dash);
	  #			    echo $region[1].'='.$check[0].'='.$check[1];
	  if(($region[1]>=$check[0]) and ($region[1]<=$check[1])) {
	    $pass = true;
	    break;
	  }
	}
	break;
      default:
	#			echo 'default<br>';
	$pass = true;
	break;
      }
    }
  }
  return($pass);
}

function log_csf($name,$ip,$region,$message) {
  global $db;
  try {
    $result = $db->fetchAll("insert into log (\"time\",\"user\",\"ip\",\"region\",\"message\") values (now(),'$name','$ip','$region','$message');");
  } catch (Zend_Db_Adapter_Exception $e) {
    header('Location: install/install.php');
  } catch (Zend_Exception $e) {
    header('Location: install/install.php');	
    die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
  }
}

function auth($name, $pw, $ip, $region1) {

  global $db;
  $pass = false;
  $region = explode('=', $region1);
  if($region[0]=='') access_denied();
  $result = $db->fetchAll("select * from users where ((username='everyone') or (username='".$name."') and (pw=md5('".$pw."'))) and (region like '%".$region[0]."%')");
  foreach($result as $value)
  {
    if(cidr_match($ip, $value['network'])) {
      switch($region[0]) {
      case 'dashboard':
	$dboard = explode(',',$value['region']);
	foreach($dboard as $search) {
	  $dashboards = explode('=',$search);
	  if($dashboards[0]=='dashboard') break;
	}
	$dashboards = explode('+',$dashboards[1]);
	foreach($dashboards as $dash)
	{
	  $check = explode('-',$dash);
	  if(($region[1]>=$check[0]) and ($region[1]<=$check[1])) {
	    $pass = true;
	    log_csf($name,$ip,$region1,'login');
	    break;
	  }
	}
	break;
      default:
	$pass = true;
	log_csf($name,$ip,$region1,'login');
	break;
      }
    }
  }
  return($pass);
}

function ask_password($name, $pw, $region) {
  global $configuration;
  global $parameters;
  $headers = apache_request_headers();
  unset($_SESSION['timeout']);
  unset($_SESSION['user']);

  if($parameters['use_forwarded_ip']=='true' and isset($headers["X-Forwarded-For"])) $ip=$headers["X-Forwarded-For"];
  else $ip=$_SERVER['REMOTE_ADDR'];
  if($_SERVER['QUERY_STRING']!='') $q='?';
  else $q='';
  if(isset($_SESSION['login_count'])) {
    sleep(($_SESSION['login_count']-1)*3);
    $_SESSION['login_count']++;
    if($_SESSION['login_count']>1) $_SESSION['login_count']=1;
  }
  else $_SESSION['login_count'] = 1;

  $ajax = new PHPLiveX(array("checkauthx"));
  $ajax->Run('components/csf/phplivex/phplivex.js');
  echo '
    <html><head>

    <script language="JavaScript" type="text/javascript">
function refresh_window()
{
  window.location.href = window.location.href;
}

var delaytime 	= 1000;
timerId = setTimeout("checkauthx(\''.$region.'\',{\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\', \'onUpdate\': function(response){checkauthx_js(response);}})",delaytime);

function timedout()
{
  document.getElementById("timedoutmarker").style.visibility="visible";
}

function checkauthx_js(response)
{
  //			    alert(response);
  if(response==true) {
    refresh_window();
}
timerId = setTimeout("checkauthx(\''.$region.'\',{\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\', \'onUpdate\': function(response){checkauthx_js(response);}})",delaytime);
}
		</script>
	    </head><body>
	    <div id="timedoutmarker" style="position:absolute; top:10; left:10; width:10; height:10; background-color:red; visibility:hidden;"></div>
	    <form action="'.$_SERVER['PHP_SELF'].$q.$_SERVER['QUERY_STRING'].'" method="post">
		<table>
		    <tr><td>User</td><td><input type="text" name="name" value="'.$name.'"></td></tr>
		    <tr><td>Password</td><td><input type="password" name="pw" value="'.$pw.'"></td></tr>
		    <tr><td></td><td><input type="submit"></td></tr>
		    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		    <tr><td>Your IP</td><td>'.$ip.'</td></tr>
		</table>
	    </form>
	    </body></html>';
	    die();
    }

    function checkauth($region) {

	global $user_timeout;
	global $parameters;
	$headers = apache_request_headers();

	if($parameters['use_forwarded_ip']=='true' and isset($headers["X-Forwarded-For"])) $ip=$headers["X-Forwarded-For"];
	else $ip=$_SERVER['REMOTE_ADDR'];

	if(!isset($region)) access_denied('Access denied. Region on set.');

	if(isset($_SESSION['user'])) $name = $_SESSION['user'];
	else 
		if(isset($_POST['name'])) $name = $_POST['name'];
		else $name = '';

	if(isset($_POST['pw'])) $pw = $_POST['pw'];
	else $pw = '';

#	echo $region;
#	echo $_SERVER['REMOTE_ADDR'].$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
#	var_dump($_SESSION);
#	echo "<br>timeout: >".($_SESSION['timeout']-time())."<<br>";
#	echo "<br>region: ".$_SESSION[base64_encode($region)]."<br>";
	if(!isset($_SESSION[base64_encode($region)]) or !isset($_SESSION['user']) or
	  ($_SESSION[base64_encode($region)]!=true) or (!isset($_SESSION['timeout'])) or 
	  (($_SESSION['timeout']-time())<0)) {

	    #echo 'region: ' . $region . '<br>';
	    #echo 'user: ' . $_SESSION['user'] . '<br>';
	    #echo 'timeout: ' . $_SESSION['timeout']-time() . '<br>';

	    if(isset($_SESSION['user']) and (($_SESSION['timeout']-time())>0)) {
		if(authx($_SESSION['user'], $ip, $region)) {
		    $_SESSION[base64_encode($region)]=true;
		    $_SESSION['login_count']=1;
		    $_SESSION['timeout'] = time()+ $user_timeout;
		}
		else ask_password($name, $pw, $region);
	    } else {
		if(isset($_POST['name']) and isset ($_POST['pw'])) {
		    if(auth($name, $pw, $ip, $region)) {
			$_SESSION[base64_encode($region)]=true;
			$_SESSION['user']=$name;
			$_SESSION['login_count']=1;
		    }
		    else ask_password($name, $pw, $region);
		}
		else
		    if(auth('', '', $ip, $region)) {
			$_SESSION[base64_encode($region)]=true;
			$_SESSION['user']=$name;
			$_SESSION['login_count']=1;
		    }
		    else
			ask_password($name, $pw, $region);
	    }
	}
	$_SESSION['timeout'] = time()+ $user_timeout;
    }

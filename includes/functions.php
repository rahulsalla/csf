<?php
require_once("environment.php");

require_once($configuration['phplivex_path'].'/PHPLiveX.php');
require_once("includes/optionFunctions.php");

if(array_key_exists('delete', $_GET)){
  $deleteFile = $_GET["delete"];
  if($deleteFile){
    delete_file($deleteFile);
  } 
}


$viz_modules = scandir($configuration['visualization_path']);
foreach($viz_modules as $viz_module)
  if(pathinfo($viz_module,PATHINFO_EXTENSION)=='php')
    require_once($configuration['visualization_path'].'/'.$viz_module);

$time = time();
if(isset($_SESSION['timeout']) and ($_SESSION['timeout']>$time)) $_SESSION['timeout'] = $time + $config['configuration parameters']['parameters']['session_timeout'];

$ajax = new PHPLiveX(array("validate_multi_select", "validate_image_unusual","validate_slidertest","validate_sliderOld","validate_textarea","validate_viewtable","validate_imageselector","validate_crime_button","validate_multimap","validate_radio", "validate_image", "validate_button","validate_integer","validate_text","validate_textfield","validate_float","validate_checkbox","validate_dropdown","validate_dropdown_multiple","validate_dropdown_date","validate_dropdowntable","validate_editabletable","validate_map","validate_timer","place_input","place_inputs", "validate", "place_viz","workflow_done", "write_coordinates","set_move","copy_element_to", "get_options", "update_options","place_vizs","validate_slider","report_copyDashboard","report_mode","validate_enhanced_maps","validate_upload_button"));
$ajax->Run($configuration['phplivex_path'].'/phplivex.js');
$movableObjects = array();
function rm_url_param($param_rm, $query=''){
  empty($query)? $query=$_SERVER['QUERY_STRING'] : '';
  parse_str($query, $params);
  unset($params[$param_rm]);
  $newquery = '';
  foreach($params as $k => $v){
    $newquery .= '&'.$k.'='.$v;
  }
  return substr($newquery, 1);
}

function delete_file($dashboard){

  if(file_exists("includes/dashboardBGs/dashboard".$dashboard.".png")){
    unlink("includes/dashboardBGs/dashboard".$dashboard.".png");
  }
  $url = rm_url_param('delete');
  header("location:index.php?$url");
}


# input changed....
function workflow_input($sid)
{
  #echo 'Marking';
  workflow_recurse($sid);
  #echo ', Executing';
  workflow_execute($sid);
  #echo ', Done.';
}

# mark all that should be updated....
function workflow_recurse($sid)
{
  global $db;
  $schema = '';

  #select the svid containint the link between modules 
  #I.E. state tied to City
  $sql = "select * from ".$schema."station_variables where (sid='".$sid."') and (name like 'connect%');";
  $result			= $db->fetchAll($sql);


  foreach($result as $variable)
  {
    #take value (which will be the linked module- I.E. for country it will be state), and rerun function 
    #to get its links (I.E. for state it will be city)
    workflow_recurse($variable['value']);
    workflow_setrequest($variable['value'],'update');
    workflow_execute1($variable['value'],1);
  }
}

function workflow_setstatus($sid,$status)
{
  global $db;
  $columns['status']	= $status;

  #update status in station table to "update" and sid with passed in sid
  $db->update("station",$columns, '"sid"=\''.$sid.'\'');
}

function workflow_setrequest($sid,$request)
{
  global $db;
  $columns['request']	= $request;
  $db->update("station",$columns, '"sid"=\''.$sid.'\'');
}

# mark all modules as ready
function workflow_reset()
{
  global $db;

  $columns['status']	= 'ready';
  $columns['request'] = 'done';
  $db->update("station",$columns);
}
function report_copyDashboard($from,$to,$sid)
{	// Select the options from the station_variables combine with a copy of module and call the validate function to validate.
  global $db;
  $msg='ok';
  $success='ok';
  $json=array();
  //$result=json_decode($result,true);
  //$get_from=$result.$from; 
  $result = $db->fetchAll("SELECT value from station_variables where sid='".$sid."' and name='options'");
  // get options of selected copy dashboard.
  //
  $i=0;
  foreach ($result as $value) {
    $msg= $value;
    $data[]=json_decode($msg["value"],true);
    $i++;
  }
  $original=$msg["value"];
  $msg=json_decode($original,true);

  if(!isset($jsonValue[$to]))
  {


    $new =$msg[$from];
    //$new=json_decode($new,true);
    $test[]=array($to => $new);
    $copyValue= substr(json_encode($test,true), 2, -2);
    $newstring = substr_replace($original, $copyValue.',', 1, 0);

    //$encoded_value= json_encode($data,true);
    //$encoded_value=substr($encoded_value, 1, -1);
    //$encoded_value=  preg_replace('/}}/','}',$encoded_value,1);
    //$encoded_value=  preg_replace('/,{"/',',"',$encoded_value,1);
    $newstring=str_replace("'","\'",$newstring);
    $result = $db->fetchAll("UPDATE station_variables SET value='".$newstring."' where sid='".$sid."' and name='options'");
  }else{$success='failed';}
  return $success;

}

function show_dashboardlist()
{
  #query all the modules options
  global $db;
  $result = $db->fetchAll("select station.sid, value, station_variables.name as name from station, station_variables where (station_variables.name='options' or station_variables.name='name') and station.sid = station_variables.sid");

  #encode moduels into array
  foreach ($result as $value) {
    $modules[$value['sid']][$value['name']] = $value['value'];
  }

  #find backgrounds
  foreach(glob('includes/dashboardBGs/dashboard*.png') as $filename) {
    $dashboard = substr($filename,31,(strrpos($filename,'.')-31));
    if(is_numeric($dashboard)) 
      $dashboardlist[$dashboard][0]='Background';
  }

  #find all the dashboards that are used in a specific modules
  if(isset($modules)){
    foreach ($modules as $sid => $value) {
      $option_field = json_decode($value['options'], true);
      if(isset($option_field)) {
	foreach ($option_field as $dashboard => $options) {
	  if(is_int($dashboard)) {
	    $dashboardlist[$dashboard][$sid]=$value['name'];
	  }
	}
      }
    }
  }
  $content  = '<html><head><title>CSF Dashboard List</title>';
  $content .= '<link rel="stylesheet" href="css/base.css" type="text/css" />';
  $content.='<meta name="google" value="notranslate">';
  $content .= '</head><body>';
  #list all the dashboards with their respective 
  if(isset($dashboardlist))
  {
    ksort($dashboardlist);

    $content .= '<table class="dashboardlist">';
    $content .= '<tr><th>Dashboards</th><th></th><th>Modules</th>';
    foreach ($dashboardlist as $dashboard => $value)
    {
      $content .= '<tr onClick="location.href=\'index.php?dashboard='.$dashboard.'\'" onMouseOver="this.style.backgroundColor=\'#E1EAFE\';this.style.cursor=\'pointer\'"; onMouseOut="this.style.backgroundColor=\'transparent\'"
	><td class="dashboardlist" align="center" valign="top">'.$dashboard .'<td class="dashboardlist "valign="top"> -> </td><td class="dashboardlist" valign="top">';
      $i = 0;
      foreach($value as $sid => $name)
      {
	#if($i!=0) $content .= ", ";
	$i++;
	$content .= $name.'<br>';
      }
      $content .= '</td></tr>';
    }
  }
  else
  {
    $content .= '<table class="dashboardlist">';
    $content .= '<tr><th>You do not have any dashboards set.</th></th></tr>';
  }
  $content .= '</table></body></html>';

  echo $content;
}
function report_mode()
{
  #query all the modules options
  $allSid=array();
  $currentDashboard=$GLOBALS['dashboard'];
  global $db;
  $result = $db->fetchAll("select station.sid, value, station_variables.name as name from station, station_variables where (station_variables.name='options' or station_variables.name='name') and station.sid = station_variables.sid");

  #encode moduels into array
  foreach ($result as $value) {
    $modules[$value['sid']][$value['name']] = $value['value'];
  }

  #find all the dashboards that are used in a specific modules
  if(isset($modules)){
    foreach ($modules as $sid => $value) {

      //var_dump($option_field);
      $option_field = json_decode($value['options'], true);
      if(isset($option_field)) 
      {
	foreach ($option_field as $dashboard => $options)
	{
	  if(is_int($dashboard))
	  {
	    $dashboardlist[$dashboard][$sid]=$value['name'];
	  }
	}
      }
    }
  }
  $i = 0;$k=0;
  if(isset($dashboardlist))
  {
    ksort($dashboardlist);


    foreach ($dashboardlist as $dashboard => $value)
    {
      $i = 0;
      if($dashboard==$currentDashboard)
      {
	foreach($value as $sid => $name)
	{
	  $allSid[$i]=$sid;
	  $i++;
	}
      }
      $k++;

    }
  }


  $jsonValue='';
  $start_Y=50;$space=50;$new_X=150;
  $index=0;
  $string_test='';
  $hashMap=array();
  for($index=0;$index<count($allSid);$index++){
    $result=$db->fetchAll("SELECT value from station_variables where sid='".$allSid[$index]."' and name='options'");
    foreach ($result as $value) {
      $jsonValue= $value;

      $original=$jsonValue["value"];
      $jsonValue=json_decode($original,true);
      if(isset($jsonValue[$currentDashboard]))

      {	
	$new =$jsonValue[$currentDashboard];
	$elementHeight=$new["height"];

	//$new["x"]=$new_X;
	//$new["y"]= $start_Y;
	$check=$new["y"];
	while(isset($hashMap[$check]))
	{$check++;
	}

	$hashMap[$check]=$allSid[$index];

	$jsonValue[$currentDashboard]=$new;
	$temp=$jsonValue["value"];
	$data[]=$jsonValue;
	$start_Y+=$new_Y_Cordinate+$space+$elementHeight;
      }
      //else {$data[]=json_decode($jsonValue["value"],true);}
      $newValue=substr(json_encode($data), 1, -1);
      $newstring=str_replace("'","\'",$newValue);
      //$result = $db->fetchAll("UPDATE station_variables SET value='".$newstring."' where sid='".$allSid[$index]."' and name='options'");

    }

    $data=null;
  }
  // Map with y-cordinate as key and value as sid
  ksort($hashMap);
  $start_Y=50;$space=50;$new_X=50;
  $data=null;

  foreach ($hashMap as $k => $v){
    $result=$db->fetchAll("SELECT value from station_variables where sid='".$v."' and name='options'");
    foreach ($result as $value) {
      $jsonValue= $value;

      $original=$jsonValue["value"];
      $jsonValue=json_decode($original,true);
      if(isset($jsonValue[$currentDashboard]))

      {	
	$new =$jsonValue[$currentDashboard];
	$elementHeight=$new["height"];

	$new["x"]=$new_X;
	$new["y"]= $start_Y;

	$jsonValue[$currentDashboard]=$new;
	$temp=$jsonValue["value"];
	$data[]=$jsonValue;
	$start_Y+=$new_Y_Cordinate+$space+$elementHeight;
      }
      //else {$data[]=json_decode($jsonValue["value"],true);}
      $newValue=substr(json_encode($data), 1, -1);
      $newstring=str_replace("'","\'",$newValue);
      $result = $db->fetchAll("UPDATE station_variables SET value='".$newstring."' where sid='".$v."' and name='options'");

    }

    $data=null;
  }
  return 'Success->Refresh ';

}
function start_dashboard()
{
  global $setup;
  global $dashboard;
  global $configuration;
  echo '<html><head>
    <script src="'.$configuration['prototype_path'].'/prototype.js" type="text/javascript"></script>
<script src="'.$configuration['protomenu_path'].'/proto.menu.js" type="text/javascript"></script>
<script type="text/javascript">
//execute html script
function ExecuteScript(text) {
  var scripts = "";
  var cleaned = text.replace(/<script[^>]*>([\s\S]*?)<\/script>/gi, function(){
    scripts += arguments[1] + "\n";
    return "";
});
//    alert(scripts);


//    if (window.execScript){
//        window.execScript(scripts);
//    } else {
//        var head = document.getElementsByTagName("head")[0];
//        var scriptElement = document.createElement("script");
//	alert("trying to run script");
//        scriptElement.setAttribute("type", "text/javascript");
//        scriptElement.innerText = scripts;
//        head.appendChild(scriptElement);
//        head.removeChild(scriptElement);
//    }
//    return cleaned;
};

</script>



';

	if($setup==1)
	{

	echo '  <script src="'.$configuration['scriptaculous_path'].'/scriptaculous.js" type="text/javascript"></script>';
	echo '	<script type="text/javascript">
	  //var nodeOptionClicked = null;

	  //Function to test if type "tag" (i.e. Div) exists with id.
	  function testForObject(Id, Tag)
	  {
	    var o = document.getElementById(Id);
	    if (o)
	    {
	      if (Tag)
	      {
		if (o.tagName.toLowerCase() == Tag.toLowerCase())
		{
		  return o;

	}
	}
	else
	{
	  return o;
	}
	}
	return null;
	}






	//Moves the element or velement eValue in the desired direction.

	function shiftElement( eDirection, eValue){
	  var o = testForObject("element"+nodeOptionClicked);
	  var divRefName;
	  var celement;

	  if (o){
	    divRefName = "element"+nodeOptionClicked;}
	  else{ divRefName = "velement"+nodeOptionClicked;}
	celement = "celement"+nodeOptionClicked;


	$("elementmove"+nodeOptionClicked).style.boxShadow = "7px 7px 8px #CCCCC";

	switch (eDirection){
	case "left":

	  $("elementmove"+nodeOptionClicked).style.left=  parseInt($("elementmove"+nodeOptionClicked).style.left)-eValue;
	  $("elementinfo"+nodeOptionClicked).style.left=  parseInt($("elementinfo"+nodeOptionClicked).style.left)-eValue;          
	  $(divRefName).style.left = parseInt($(divRefName).style.left) - eValue;
	  $(celement).style.left = parseInt($(celement).style.left) - eValue
	    break;
	case "right":

	  $("elementmove"+nodeOptionClicked).style.left=  parseInt($("elementmove"+nodeOptionClicked).style.left)+eValue;
	  $("elementinfo"+nodeOptionClicked).style.left=  parseInt($("elementinfo"+nodeOptionClicked).style.left)+eValue;
	  $(divRefName).style.left = parseInt($(divRefName).style.left) + eValue;                                                                 
	  $(celement).style.left = parseInt($(celement).style.left) + eValue;
	  break;

	case "up":
	  $("elementmove"+nodeOptionClicked).style.top=  parseInt($("elementmove"+nodeOptionClicked).style.top)-eValue;
	  $("elementinfo"+nodeOptionClicked).style.top=  parseInt($("elementinfo"+nodeOptionClicked).style.top)+20;
	  $(divRefName).style.top = parseInt($(divRefName).style.top) - eValue;                                                                   
	  $(celement).style.top = parseInt($(celement).style.top) - eValue;
	  break;
	case "down":
	  $("elementmove"+nodeOptionClicked).style.top=  parseInt($("elementmove"+nodeOptionClicked).style.top)+eValue;
	  $("elementinfo"+nodeOptionClicked).style.top=  parseInt($("elementinfo"+nodeOptionClicked).style.top)+20;
	  $(divRefName).style.top = parseInt($(divRefName).style.top) + eValue;                                                                 
	  $(celement).style.top = parseInt($(celement).style.top) + eValue;  
	  break;
	}

	//    $(divRefName).style.top = "0px";
	}


	$(document).observe(\'keydown\', function (e) {
	  switch (e.keyCode) {
	  case Event.KEY_LEFT:
	    shiftElement ("left", 5);
	    Event.stop(e);
	    break;
	  case Event.KEY_RIGHT:
	    shiftElement ("right", 5);            
	    //prem changed it...................
	    Event.stop(e);
	    break;
	  case Event.KEY_UP:
	    shiftElement ("up", 5);
	    Event.stop(e);
	    break;
	  case Event.KEY_DOWN:
	    shiftElement ("down", 5);
	    Event.stop(e);
	    break;
	  case Event.KEY_RETURN:
	    $("elementmove"+nodeOptionClicked).style.boxShadow = "0px 0px 0px #CCCCCC";
	    $("elementmove"+nodeOptionClicked).style.border = "1px solid red";
	    $("elementmove"+nodeOptionClicked).style.height = 5;
	    $("elementmove"+nodeOptionClicked).style.width = 5;
	    nodeOptionClicked = null;

	    break;
	}
	});


	$(document).observe(\'keyup\', function(e){
	  if (e.keyCode == Event.KEY_LEFT ||
	    e.keyCode == Event.KEY_RIGHT ||
	    e.keyCode == Event.KEY_UP ||
	    e.keyCode == Event.KEY_DOWN){
	      write_coordinates('.$dashboard.',$("elementmove"+nodeOptionClicked).style.left, $("elementmove"+nodeOptionClicked).style.top,nodeSVID,{} );
	}    
	});

/*
  function moveElement(key, type, direction)
{ 
alert("move");
    if(type=="viz"){
	switch(direction){
	    case ("left"):
alert("move left");

	}
    }
return;
}
 */
	function click(e) {
	  // In Internet Explorer you should use the global variable `event`  
	  e = e || event; 

	  // In Internet Explorer you need `srcElement`
	  var target = e.target || e.srcElement;

	  var id = target.id;

	}

	function updateOptionsBox(options,svid,close)
	{   
	  validate("variable_"+svid, options,"text", {"content_type": "JSON",  "onUpdate": function(response,xmlhttp){var $data = response;updateOptions($openOptionsSVID, $openOptionsSID);make_update("variable_"+svid,$data);}});        

	  if(close){
	    document.getElementById("options_div").style.visibility = "hidden";
	    $("elementmove"+nodeOptionClicked).style.border = "1px solid red";
	    $("elementmove"+nodeOptionClicked).style.height = 5;
	    $("elementmove"+nodeOptionClicked).style.width = 5;
	    nodeOptionClicked = null;
	}

	}
	function closeOptionsDiv(){

	}


	function sendData(theData)
	{
	  var svid = $openOptionsSVID;
	  document.getElementById("options_div").value = theData ;


	  updateOptionsBox(theData,$openOptionsSVID, false);
	  openOptions($openOptionsSVID, $openOptionsSID);
	  //document.forms["hiddenForm"].submit();
	}

	function deleteDashboard(dashboard)
	{
	  var data;
	  data = combine();
	  delete data[dashboard];

	  sendData(JSON.stringify(data));
	  //openOptions($openOptionsSVID,$openOptionsSID);
	}

	function copyDashboard(fromDashboard, toDashboard)
	{
	  var data;
	  data = combine();
	  if( data[toDashboard] == undefined )
	  {
	    data[toDashboard] = data[fromDashboard];
	}
	sendData(JSON.stringify(data));
	}

	function newDashboard(dashboard)
	{

	  var data;
	  data = combine();
	  if( data[dashboard] == undefined )
	  {
	    data[dashboard] = "";
	}		
	sendData(JSON.stringify(data));
	}

	function combine()
	{
	  console.log("here"+options);
	  console.log(document.getElementById("csv").value);	
	  var result	= new Object;
	  var options_setup	= options;
	  for(var o in options_setup)
	  {
	    if((options_setup[o].perdashboard=="no") && (options_setup[o].type!="Descriptor"))
	    {
	      if(options_setup[o].repeatable=="no")
	      {
		if(options_setup[o].type=="Json") {
		  result[options_setup[o].name] = eval(\'(\' + document.getElementById(options_setup[o].name).value +\')\');
	} else {
	  result[options_setup[o].name] = document.getElementById(options_setup[o].name).value;
	}
	}
	else
	{
	  var i;
	  i=1;
	  //alert(i);
	  // alert(options_setup[o].name + i + options_setup[o].repeatable);
	  while (document.getElementById(document.getElementById(options_setup[o].name + i).value) != null)
	  {
	    result[options_setup[o].name][i] = document.getElementById(options_setup[o].name+i).value;
	    i++;
	}
	}
	}
	}

	var i;
	i=1;
	while(document.getElementById("dashboard"+i) != null)
	{
	  var m = new Object;

	  for(var o in options_setup)
	  {
	    if((options_setup[o].perdashboard=="yes") && (options_setup[o].type!="Descriptor"))
	    {
	      if(options_setup[o].type=="Json") {
		m[options_setup[o].name] = eval(\'(\' + document.getElementById(options_setup[o].name + "+" +document.getElementById("dashboard"+i).value).value +\')\');
	} else {
	  m[options_setup[o].name] = document.getElementById(options_setup[o].name + "+" +document.getElementById("dashboard"+i).value).value;
	}
	}
	}
	result[document.getElementById("dashboard"+i).value] = m;
	i++;
	}
	return(result);
	}


	function openOptions(svid, sid)
	{
	  $openOptionsSVID = svid;
	  $openOptionsSID = sid;

	  document.getElementById("options_div").style.visibility = "visible";

	  get_options(sid,
	{"content_type": "JSON",  
	"onFinish": function(response, json)
	{
	  var data = eval(\'(\' + response + \')\');
	  document.getElementById("options_div").innerHTML= data[1];
	  window["options"] = data[2]; 
	  jscolor.init();
	}
	});
	}



	function reloadOptions(svid, sid){
	  get_options(sid,
	{"content_type": "JSON",  
	"onFinish": function(response, json)
	{
	  var data = eval(\'(\' + response + \')\');
	  document.getElementById("options_div").innerHTML= data[1];
	  window["options"] = data[2]; 
	}
	});
	}

			</script>';
	}

$googlekey['matinee.dt.asu.edu']='ABQIAAAAIUv_G80PdIoEPaauIs3BgxTiS_wA1QlT4DMZA8bZyAaoOxaAohTIZJc8xC_HpYDX1RBNHCo7rW-Q9g';
$googlekey['dp.emo-it.com']='ABQIAAAAIUv_G80PdIoEPaauIs3BgxR0aX8_06jU4CaAcNA-VpvxtXLC9RQvjmlUqy8WVthoSENu6dZgx9_NFQ';
$googlekey['dev.dt.asu.edu']='ABQIAAAAIUv_G80PdIoEPaauIs3BgxRLFSd8kLvH1H7SeDIOp9M-4YNOfRRbYu7l2DK5aug5t4xOEKHGOWA-Gw';
$googlekey['localhost']='ABQIAAAAIUv_G80PdIoEPaauIs3BgxT2yXp_ZAY8_ufC3CFXhHIE1NvwkxS9bKyGwZL_hk7mob3_yNP-dpZyLg';
#	echo '	<script src="https://maps.google.com/maps?file=api&amp;v=3&amp;key='.$googlekey[$_SERVER['SERVER_NAME']].'" type="text/javascript"></script>';
	echo '	<script src="https://maps.google.com/maps?file=api&amp;v=3&amp;key=" type="text/javascript"></script>';
	//echo ' <script type=\'text/javascript\'>alert("'.$host.','.$googlekey[$host].'");</script>';
	echo '		<script src="'.$configuration['openlayers_path'].'/lib/OpenLayers.js"></script>
			<script src="'.$configuration['d3_path'].'/d3.min.js"></script>
			<script src="'.$configuration['cubism_path'].'/cubism.v1.min.js"></script>
			<script src="'.$configuration['jscolor_path'].'/jscolor.js"></script>
			<script type=\'text/javascript\' src=\'https://www.google.com/jsapi\'></script>';
	echo "	<script type='text/javascript'>
	function checkidvalue(idinfo)
	{
	  var vars = [], hash;
	  var hashes	= window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	  var idvalue	= true;
	  for(var i = 0; i < hashes.length; i++)
	  {
	    hash = hashes[i].split('=');
	    vars.push(hash[0]);
	    vars[hash[0]] = hash[1];
	    if(hash[0]==idinfo) idvalue=false;
}
return idvalue;
}
</script>";
	echo ' <title>Dashboard '.$dashboard.'</title>';
	echo '<link rel="stylesheet" href="css/base.css" type="text/css" />
	      <link rel="stylesheet" href="css/style.css" type="text/css" />
			<link rel="stylesheet" href="css/proto.menu.css" type="text/css"">
			<link rel="stylesheet" href="'.$configuration['openlayers_path'].'/theme/default/style.css" type="text/css" />
<!--			<link rel="stylesheet" type="text/css" href="https://yui.yahooapis.com/2.8.1/build/carousel/assets/skins/sam/carousel.css">
			<script type="text/javascript" src="https://yui.yahooapis.com/2.8.1/build/yahoo-dom-event/yahoo-dom-event.js"></script>
			<script type="text/javascript" src="https://yui.yahooapis.com/2.8.1/build/element/element-min.js"></script>
			<script type="text/javascript" src="https://yui.yahooapis.com/2.8.1/build/carousel/carousel-min.js"></script> -->
			</head><body class="desc" style="background-color:#FFFFFF;"';
	echo 'onload="if(checkidvalue(\'id\')) { window.location.href = window.location.href+\'&id=\'+(new Date().getTime());}';

 if($setup==1)
	    {
		echo '" ';
	echo '<div id="mainelement">';
	  echo "<div  id=\"importBackground\">
	       <form id=\"uploadform\"  enctype=\"multipart/form-data\" action=\"includes/uploadFile.php?dashboard=".$dashboard."\" method=\"POST\">
    Send this file: <input name=\"userfile\" type=\"file\" accept=\"image/png\" id=\"chooseFile\" onChange=\"uploadFile(this.value);\" />
    <input type=\"submit\" value=\"Send File\" id=\"submitFileUpload\" />
   <span id=\"status\" style =\"display:none\">uploading...</span>
   <iframe id=\"target_iframe\" name=\"target_iframe\" src=\"\" style=\"width:0;height:0;border:0px\"></iframe>
</form>
	       </div>";	
	 echo "
<script type='text/javascript'>

function initUpload() {

  // set the target of the form to the iframe and display the status
  //  message on form submit.

  document.getElementById('uploadform').onsubmit=function() {
    document.getElementById('uploadform').target = 'target_iframe';
    document.getElementById('status').style.display=\"block\"; 

	    }
	    }
 //This function will be called when the upload completes.
 function uploadComplete(){
   alert(\"uploadComplete\");
   //set the status message to that returned by the server
   //document.getElementById('status').innerHTML=status;
   window.location.href = window.location.href;
	    }

 window.onload=initUpload();

 function uploadFile(fileLoc){
   document.getElementById(\"submitFileUpload\").click();

	    }

 document.observe('dom:loaded', function(){

   var myMenuItems = [
 {
   name: 'Help',
     className: 'new',
     callback: function(e) {
       window.open('help/help_dashboard_setup.html');              
	    }
	    },
 {
   separator: true
	    },
 {
   name: 'Import Background Image',
     className: 'new',
     callback: function(e) {

       document.getElementById(\"chooseFile\").click();

	    }
	    },
 {                                                                                                                         
   name: 'Delete Background Image',                                                                                        
     className: 'new',                                                                                                       
     callback: function(e) {                                                           window.location.href = window.location.href+'&delete=".$dashboard."';                                        
	    }                                                                                                                       
	    },
 {
   name: 'Node Options',
     className: 'new',
     callback: function(e) {

       openOptions(nodeSVID, nodeOptionClicked);

	    }
	    },


 {
   separator: true
	    },{
	      name: 'Refresh Page',
		className: 'new', 
		callback: function() {
		  window.location.href = window.location.href;
	    }
	    },{
	      name: 'Dashboard list',
		className: 'edit',
		callback: function() {
		  window.location.href = 'index.php';
	    }
	    },{
	      name: 'Exit Setup',
		className: 'edit', 
		callback: function() {
		  window.location.href=window.location.href.replace(\"&setup=1\",\"\");
	    }
	    }
 ]

   new Proto.Menu({
     selector: '.redbox',
       className: 'menu desktop',
       menuItems: myMenuItems
	    })
	    var myMenuItems = [
 {
   name: 'Help',
     className: 'new',
     callback: function(e) {
       window.open('help/help_dashboard_setup.html');              
	    }
	    },
 {
   separator: true
	    },

 {
   name: 'Import Background Image',
     className: 'new',
     callback: function(e) {

       document.getElementById(\"chooseFile\").click();

	    }
	    },
 {                                                                                                                         
   name: 'Delete Background Image',                                                                                        
     className: 'new',                                                                                                       
     callback: function(e) {                                                           window.location.href = window.location.href+'&delete=".$dashboard."';                                        
	    }                                                                                                                       
	    },
 {                                                                                                                         
   name: 'Download Background Image',                                                                                        
     className: 'new',                                                                                                       
     callback: function(e) {                                                           window.location.href = 'includes/dashboardBGs/dashboard".$dashboard.".png';                                        
	    }                                                                                                                       
	    },
 {
   separator: true
	    },

 {
   name: 'Refresh Page',
     className: 'new', 
     callback: function() {
       window.location.href = window.location.href;
	    }
	    },
 {
   separator: true
	    },
 {
   name: 'Copy Dashboards',
     className: 'new', 
     callback: function() {
       document.getElementById('copy_div').style.visibility = 'visible';
	    }
	    },
 {
   separator: true
	    },
	/*		  
 {
	    name: 'Align',
	    className: 'edit',
	    callback: function() {
	      report_mode({'target':'msg','preloader':'pr'});
			 }

	},*/

 {
   name: 'Dashboard list',
     className: 'edit',
     callback: function() {
       window.location.href = 'index.php';
	    }
	    },{
	      name: 'Exit Setup',
		className: 'edit', 
		callback: function() {
		  window.location.href=window.location.href.replace(\"&setup=1\",\"\");
	    }
	    }
 ]

   new Proto.Menu({
     selector: '.desc',
       className: 'menu desktop',
       menuItems: myMenuItems

	    })
	    });
		</script>
		";
	    }


	if($setup!=1)
	{
	echo '" ';
	echo 'id="mainelement">';

	  echo "<span id='pr' style='visibility:hidden;'><i>Aligning...</i></span> 
<span id='msg' ></span> 
<script type=\"text/javascript\">


document.observe('dom:loaded', function(){
  var myMenuItems = [
	{
	  name: 'Help',
	    className: 'new',
	    callback: function(e) {
	      window.open('help/help_dashboard.html');              
	}
	},
	{
	  separator: true
	},

	{
	  name: 'Refresh Page',
	    className: 'new', 
	    callback: function() {
	      window.location.href = window.location.href;
	}
	},{
	  name: 'Dashboard list',
	    className: 'edit',
	    callback: function() {
	      window.location.href = 'index.php';
	}
	},
	{
	  name: 'Print',
	    className: 'edit',
	    callback: function() {
	      window.print() ;
	}
	},{
	  name: 'Setup',
	    className: 'edit', 
	    callback: function() {
	      window.location.href = window.location.href+'&setup=1';
	}
	}
      ]

	new Proto.Menu({
	  selector: '.desc',
	    className: 'menu desktop',
	    menuItems: myMenuItems
	})
	});
	</script>
		";
	}	

	if($setup==1)
	{ $csv='{"csv":"[[\'Dashboard Number\',\'Sid:Modules\',\'Header Notes\',\'Footer Notes\'],[\'46\',\'72:Time_monthly\',\'hello\',\'Bye\']]"';
	global $db;
	/*
	$sql='INSERT INTO "public"."station_variables" ("uid","sid","file_name","file_location") VALUES (nextval(\''.$tablename.'_uid_seq\'::regclass),\''.$sid.'\',\''.$fn.'\',\'files/uploads\')';
				$insert = $db->fetchAll($sql);
			*/	
		echo '<div src ="" id="options_div" style="border: .2em dotted #900; position:fixed; overflow : auto; background: #DDDDDD; visibility:hidden; position:fixed; top:50px;left:50px;right:50px;bottom:50px;z-index:9500"></div>';
		$copy='';
		$copy= '<div src ="" id="copy_div" style="border: .2em dotted #900; position:fixed; overflow : auto; background: #DDDDDD; visibility:hidden; position:fixed; top:50px;left:50px;right:50px;bottom:50px;z-index:9500">

			<div style="cursor:hand; position:fixed; right:65px; top:55px;" id="close"  onmouseup="document.getElementById(\'copy_div\').style.visibility = \'hidden\';"><img src="images/close_button_new.png" position=relative width="40px" align="right"></div>

<div style="cursor:hand; position:fixed; right:65px; top:100px;" id="save" onmouseup=""><img src="images/save_button.png" position=absolute width="40px" align="right"></div><br><font size="5" color="#2F4F4F"><b> Copy To Dashboard Number:'.$dashboard.'</b></font><br><br>
	'.start_options_javascript().'
	'.get_options_report($dashboard).'

		</div>';
		echo $copy;

		//'.place_input_dependencies("csv", "csv","","Dashboard Number|Sid:Modules|Header Notes|Footer Notes","").'
#		echo '<div onClick="document.getElementById(\'background\').style.display = (document.getElementById(\'background\').style.display != \'none\' ? \'none\' : \'\' );" style="z-index:100; border: 1px solid blue; position:absolute; top:0; left:0; width:5; height:5;"></div>'; 
		echo '		
		<div id="background" style="z-index:100;display:none; position:absolute; top:5; left:5; background-color:#99FF66;">
			<table>
				<tr><td onmouseover="style.backgroundColor=\'#84DFC1\';" onmouseout="style.backgroundColor=\'#99FF66\';">
					<form>
						<div style="display: inline; border: solid 1px #7FAAFF; background-color: #C5D9FF; padding: 2px;">
								<span id="spanButtonPlaceholder"></span>
						</div>
					</form>
					<div id="divFileProgressContainer" style="height: 10px;"></div>
				</td></tr>
				<tr><td onmouseover="style.backgroundColor=\'#84DFC1\';" onmouseout="style.backgroundColor=\'#99FF66\';" ><span onmouseup=\'alert("funcion not implemented");\'> Copy '.$dashboard.' to </span> <input type="text" size="1" maxlength="60" /></td></tr>
				<tr><td onmouseover="style.backgroundColor=\'#84DFC1\';" onmouseout="style.backgroundColor=\'#99FF66\';" onmouseup=\'window.location.href=window.location.href.replace("&setup=1","");\'>&nbsp;Exit Setup</td></tr>
			</table>
		</div>'; 
	}

	if(file_exists("includes/dashboardBGs/dashboard".$dashboard.".png"))
	    echo "<img class=\"desc\" src=\"includes/dashboardBGs/dashboard".$dashboard.".png?".filemtime ("includes/dashboardBGs/dashboard".$dashboard.".png")."\" style=\"position:absolute; top:0; left:0;\">";
	echo '<div id="timedoutmarker" style="position:absolute; top:10; left:10; width:10; height:10; background-color:red; visibility:hidden;"></div>';
}

function stop_dashboard()
{
	echo '</body></html>';
}




function set_move($move)
{
	$_SESSION['move'] = $move-1;
}

function expand_options($option_field)
{
	$option_field	= explode('|',$option_field);
	foreach($option_field as $key => $option_field1)
	{
		$option_field[$key]	= explode(';',$option_field1);
		foreach($option_field[$key] as $key1 => $option_field2)
			$option_field[$key][$key1]	= explode(',',$option_field2);

	}
	return($option_field);
}

function collapse_options($option_field, $option_setup, $dashboards)
{
	$dashcount	= count($dashboards);
	$result		= '';

	foreach($option_setup as $x => $valuex)
	{
		for($y=0; $y<=$dashcount; $y++)
		{
			if(($option_setup[$x]['perdashboard']=="yes")  or (($option_setup[$x]['perdashboard']!="yes") and ($y==0)))
			{
				if($option_setup[$x]['type'] == "suboptions")
				{
					foreach($option_setup[$x]['s'] as $z => $valuez)
					{
						if(!isset($option_field[$x][$y][$z])) $option_field[$x][$y][$z]	= $option_field[$x][0][$z];
						$result .= $option_field[$x][$y][$z];
						if($z!=(count($option_setup[$x]['s'])-1)) $result .= ",";
					}
				}
				else
				{
					if(!isset($option_field[$x][$y][0])) $option_field[$x][$y][0]	= $option_field[$x][0][0];
					$result .= $option_field[$x][$y][0];
				}
				if(($y!=($dashcount)) && ($option_setup[$x]['perdashboard']=="yes")) $result .= ";";
			}
		}
		if($x!=(count($option_setup)-1)) $result .= "|";
	}
	return($result);
}


function copy_element_from($option_field, $dashboards, $options_setup, $from)
{
	$dashnum_from	= array_search($from,$dashboards);
	$dashnum_to		= count($dashboards);
	$option_field	= expand_options($option_field);

	foreach($options_setup as $key => $option_setup)
	{
		if($option_setup['perdashboard']== 'yes')
			if($option_setup['type']=='suboptions')
			{
				foreach($option_setup['s'] as $subkey => $suboption_setup)
				{
					$option_field[$key][$dashnum_to][$subkey]	= $option_field[$key][$dashnum_from][$subkey];
				}
			}
			else $option_field[$key][$dashnum_to][0]	= $option_field[$key][$dashnum_from][0];
	}
	//echo "<br><pre>";
	//var_dump($option_field);
	//echo "</pre><br>";
	return(collapse_options($option_field, $options_setup, $dashboards));
}

function copy_element_to($sid, $from, $to)
{
	$to	= intval($to);
	if($to=='0') $content = 'Invalid target dashboard';
	else
	{
		global $db;
		$sql	= "select svid,name,value from station_variables where sid=".$sid." and (name='show' or name='xc' or name='yc' or name='options' or name='type' or name='moduletype')";
		$result	= $db->fetchAll($sql);
		foreach($result as $value)
		{
			if(($value['name']=='options') or ($value['name']=='type') or ($value['name']=='moduletype'))	$values[$value['name']]['data']	= $value['value'];
			else $values[$value['name']]['data']	= explode(';',$value['value']);
			$values[$value['name']]['svid']	= $value['svid'];
		}
		$dashcount = count($values['show']['data']);
		if(array_search($to,$values['show']['data'])!==false) $content = 'Element already exists on dashboard.';
		else
		{
			if(function_exists("getsetup_".$values['moduletype']['data']."_".$values['type']['data']))
			{
				$optio	= call_user_func("getsetup_".$values['moduletype']['data']."_".$values['type']['data']);
				$options	= copy_element_from($values['options']['data'], $values['show']['data'], call_user_func("getsetup_".$values['moduletype']['data']."_".$values['type']['data']), $from, $to);
				$values['show']['data'][count($values['show']['data'])]	= $to;
				###################
				for($i=0;$i<=$dashcount;$i++)
				{
					$show	.= $values['show']['data'][$i];
					#xc and yc have to be copied from the right dashboard!!
					$loc	= array_search($from,$values['show']['data']);
					//$content=$to;
					if($i == $dashcount)
					{
						$values['xc']['data'][$i]	= $values['xc']['data'][$loc];
						$values['yc']['data'][$i]	= $values['yc']['data'][$loc];
					}
					if($values['xc']['data'][$i]=='') $values['xc']['data'][$i]	= $values['xc']['data'][0];
					if($values['yc']['data'][$i]=='') $values['yc']['data'][$i]	= $values['yc']['data'][0];
					$xc		.= $values['xc']['data'][$i];
					$yc		.= $values['yc']['data'][$i];
					if($i != $dashcount)
					{
						$show	.= ';';
						$xc		.= ';';
						$yc		.= ';';
					}
				}
				$sql = "update station_variables set value='".$show."' where svid=".$values['show']['svid'];
				$result	= $db->fetchAll($sql);
				$sql = "update station_variables set value='".$xc."' where svid=".$values['xc']['svid'];
				$result	= $db->fetchAll($sql);
				$sql = "update station_variables set value='".$yc."' where svid=".$values['yc']['svid'];
				$result	= $db->fetchAll($sql);
				$sql = "update station_variables set value='".$options."' where svid=".$values['options']['svid'];
				$result	= $db->fetchAll($sql);

				$content	.= "Sucessfully copied. (".$show.' - '.$xc.' - '.$yc.' - '.$values['options']['data'] . ' - ' . $options.")";
			}
			else $content='Setup function for this moduletype does not exist.';
		}
	}
	return($content);
}

function write_coordinates($dashboard, $x, $y, $oid)
{
	global $db;
	$sql		= "select value from station_variables where svid='".$oid."'";
	$result		= $db->fetchAll($sql);
	$options	= json_decode($result[0]['value'],true);

	$options[$dashboard][x]	= $x;
	$options[$dashboard][y]	= $y;

	$columns['value']	= json_encode($options);
	$db->update("station_variables",$columns, '"svid"=\''.$oid.'\'');
}

function put_javascript()
{
	global $dashboard;
	global $uid;
	global $setup;
	global $idvalue;

	 echo '  
<script language="JavaScript" type="text/javascript">
nodeOptionClicked = null;
nodeOptionSVID = null;	
function getCookie(c_name)
{
  if (document.cookie.length>0)
  {
    c_start=document.cookie.indexOf(c_name + "=");
    if (c_start!=-1)
    {
      c_start=c_start + c_name.length+1;
      c_end=document.cookie.indexOf(";",c_start);
      if (c_end==-1) c_end=document.cookie.length;
      return unescape(document.cookie.substring(c_start,c_end));
}
}
return "";
}
function setCookie(c_name,value,expireseconds)
{
  document.cookie=c_name+ "=" + escape(value) + ((expireseconds==null) ? "" : ";expires="+expireseconds+";path=/");
}

function refresh_window()
{
  window.location.href = window.location.href;
}

function run_check() {
  PLX.Request({
    \'url\': \'includes/checkchange.php\', 
      \'timeout\': 7000, 
      \'onTimeout\': function(){ timedout(); }, 
      \'content_type\': \'json\', 
      \'params\' : {
	\'dashboard\' : \''.$dashboard.'\',
	  \'setup\' : \''.$setup.'\',
	  \'id\' : \''.$idvalue.'\',
	  \'uid\' : \''.$uid.'\'
},
\'onUpdate\': function(response){check_change(response);}});
}
setCookie("csfuser","'.$_SESSION['user'].'",86400);

var delaytime 	= 1000;
timerId = setTimeout("run_check()",delaytime);

function timedout()
{
  document.getElementById("timedoutmarker").style.visibility="visible";
}

function check_change(response)
{
  document.getElementById("timedoutmarker").style.visibility="hidden";
  if(response!=false)
  {
    if(response.length > 0)
    {
/*						if(response.length>3)
    { 
//							alert(response.length);
							for(i=0; i< response.length; i++)
							{
								//alert(response[i].fun+" "+response[i].sid+" "+response[i].timestamp);
							}
}*/
      for(responsecount=0; responsecount< response.length; responsecount++)
      {	
	//alert(response[responsecount].fun + "  " +responsecount + "  " + response.length);
	switch(response[responsecount].fun)
	{
	case "update":
	  if(response[responsecount].name==\'value\')
	  {
	    try
	    {
	      eval("update"+response[responsecount].sid+"('.$dashboard.',response[responsecount])");
}
catch(err)
{
}
}
if(response[responsecount].name==\'options\')
{
  if($("cover"+response[responsecount].sid) == undefined) {
    //alert("create "+response[responsecount].sid);
    //place_inputs(response[responsecount].sid);
    place_inputs(response[responsecount].sid, {"content_type": "JSON", \'onUpdate\': function(response){
      $(document.body).insert(response);
      try {
	//alert("init");
	window[ "init" + response[responsecount].sid ]();
}
catch(err) {
}
}} );

place_vizs(response[responsecount].sid, {"content_type": "JSON", \'onUpdate\': function(response){$(document.body).insert(response);}} );
}
try
{
  eval("reload"+response[responsecount].sid+"('.$dashboard.',response[responsecount])");
}
catch(err)
{
}
}
break;
case "reload":
  try
  {
    eval("reload"+response[responsecount].sid+"('.$dashboard.',response[responsecount])");
}
catch(err)
{
}
break;
case "delete":
  try {
    $("cover"+response[responsecount].sid).remove();
}
catch(err) {
}
break;
case "mark":
  try
  {
    eval("mark"+response[responsecount].sid+"('.$dashboard.',response[responsecount])");
}
catch(err)
{
}
break;
case "refresh":
  try
  {
    set_move(response[responsecount].value, {\'onUpdate\': function(response){refresh_window();}} );
}
catch(err)
{
}
break;
case "refresh_target":
  try {
    var exdate=new Date();
    exdate.setDate(exdate.getDate()+180);
    var target_info = eval(\'(\' + response[responsecount].value +\')\');
    if((target_info["uid"]!="'.$uid.'") && (target_info["uid"]!="") && (target_info["id"]=="'.$idvalue.'") && (target_info["old_dashboard"]=='.$dashboard.')) {
      setCookie("UID", target_info["uid"], exdate.toUTCString());
      setCookie("EXP", exdate.toUTCString(), exdate.toUTCString());
      window.location.href = window.location.href;
}

if((target_info["old_dashboard"]=='.$dashboard.')) {
  if((target_info["uid"]=="'.$uid.'") && (target_info["id"]=="'.$idvalue.'")) {
    window.location.href = window.location.href.replace("dashboard="+target_info["old_dashboard"],"dashboard="+target_info["dashboard"]);
}
}

if((target_info["old_dashboard"]=='.$dashboard.')) {
  if(target_info["mod"]=="go") {
    window.location.href = window.location.href.replace("dashboard="+target_info["old_dashboard"],"dashboard="+target_info["dashboard"]);
}
}

}
catch(err)
{
}
break;
}
}
/*						if(response.length>3)
						{
							//alert(response.length);
} */
}
}
timerId = setTimeout("run_check()",delaytime);
}
		</script>';

	echo '
<script type="text/javascript">  
function make_update(id,val)
{
  var element=document.getElementById(id);
  element.value = val;
}
</script>
		';
}

function place_vizs()
{

	global $db;
	global $dashboard;
	global $setup;
	global $idvalue;
	$schema = '';
	$str = '';
	$sql="select now()::timestamp without time zone as timestamp";
	$result					= $db->fetchAll($sql);
	$_SESSION['timestamp'.$dashboard.$setup.$idvalue]	= $result[0]['timestamp'];


	$sql="select ".$schema."station.sid as sid, ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station join ".$schema."station_variables on ".$schema."station.sid=".$schema."station_variables.sid where ".$schema."station.name='New Visualization' and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='value' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype') order by ".$schema."station.sid, ".$schema."station_variables.name";
	$result			= $db->fetchAll($sql);

	if(count($result)>0)
	{
		foreach($result as $variable)
		{
			$inputs[$variable['sid']][$variable['name']] = $variable['value'];
			$ids[$variable['sid']][$variable['name']] 	 = $variable['svid'];
		}

		foreach ($inputs as $key => $value)
		{	$str .= "<script type='text/javascript'>
		 /*      
		 document.observe('dom:loaded', function() {
		    $(\"elementmove".$key."\").observe(\"click\", function() { 
			nodeOptionClicked = $key;

		    });
		 });*/
		      </script>";
			$options = json_decode($value['options'],true);
			if (!isset($options[$dashboard])) unset($inputs[$key]);
			else
			{
				foreach($options as $key1=>$value1)

					if(is_integer($key1))
					{
						if ($key1==$dashboard)
						{
							$options['dashboard_options']	= $options[$dashboard];
						}
						unset($options[$key1]);
					}
				$inputs[$key]['options'] = $options;
			}
		}

		foreach($inputs as $key => $value)
		{
			if($setup==1)
			{


				$setup_location['dashboard']	= $dashboard;
				$setup_location['svid']			= $ids[$key]['options'];
			}
			else $setup_location = false;

			$str.=call_user_func("place_viz_".$value['type'],$key, $value['value'], $value['options'], $setup_location);

			if($setup==1)
			{
			  global $db;
			  $result = $db->fetchAll("select svid from station_variables where name='options' and sid=".$key);
			  $options_svid=$result[0]['svid'];
			  // Shrijal changed this ..changed the z-index from 9000 to 100
				$str.= '<div id="elementmove'.$key.'" class="redbox" oncontextmenu ="$(\'elementinfo'.$key.'\').style.display = \'none\';$(\'elementcontext'.$key.'\').style.display = \'\';" onmouseout="$(\'elementinfo'.$key.'\').style.display = \'none\';" onmouseover="$(\'elementinfo'.$key.'\').style.display = \'\'" onmousedown = "" style="z-index:100; border: 1px solid red; position:absolute; top:'.($value['options']['dashboard_options']['y']).'; left:'.($value['options']['dashboard_options']['x']).'; width:5; height:5;"></div>';


				//The following chunk echoes the viz (not type!)
				//module's name
				$str.= '<div id="elementinfo'.$key.'" style="z-index: 9000; background-color:#FFFFFF; display: none;  position:absolute;top: '.($value['options']['dashboard_options']['y']+20).'; left:'.($value['options']['dashboard_options']['x']).';">'.$value['name'].'</div>';

				$str.="<script  language=\"JavaScript\" type=\"text/javascript\">
				  document.observe('dom:loaded', function() {
				    $(\"elementmove".$key."\").observe(\"mousedown\", function(e) { 
				      //$('elementmove".$key."').style.border='1px solid #CCCCCC ';    

				      if(nodeOptionClicked)
				      {
					//alert('elementmove'+nodeOptionClicked);
					$('elementmove'+nodeOptionClicked).style.border = '1px solid red';
					$('elementmove'+nodeOptionClicked).style.height = 5;
					$('elementmove'+nodeOptionClicked).style.width = 5;
			}
			$('elementmove".$key."').style.border='1px solid #CCCCCC ';
			$('elementmove".$key."').style.width = $('velement".$key."').style.width;
			$('elementmove".$key."').style.height = $('velement".$key."').style.height;
			nodeOptionClicked = ".$key.";
			nodeSVID = ".$options_svid.";
			//alert($key);

			});
			});


			//var yLoc = parseInt(\$('elementmove".$key."').style.top);
			//yLoc+=10;


			//alert(yLoc);

			var vizWidth = \$('velement".$key."').style.width;
			var vizHeight = \$('velement".$key."').style.height;
			//var inputWidth = $('element".$key."').style.width;                                            
			//var inputHeight = $('element".$key."').style.height;
			new Draggable('elementmove".$key."',{snap: [5, 5],onStart:function(){\$('elementmove".$key."').style.width = vizWidth;\$('elementmove".$key."').style.height = vizHeight;}, change:function() {\$('elementmove".$key."').style.width=$('velement".$key."').style.width;\$('elementmove".$key."').style.height=$('velement".$key."').style.height;}, onEnd:function() {\$('elementmove".$key."').style.height=5;\$('elementmove".$key."').style.width =5;\$('velement".$key."').style.left=\$('elementmove".$key."').style.left;\$('velement".$key."').style.top=\$('elementmove".$key."').style.top;write_coordinates(".$dashboard.",$('elementmove".$key."').style.left, $('elementmove".$key."').style.top,'".$options_svid."',{} );$('elementinfo".$key."').style.left=\$('elementmove".$key."').style.left;$('elementinfo".$key."').style.top=parseInt(\$('elementmove".$key."').style.top)+20;}});//**********NEEDS SVID

			</script>";




//change:function() {$('velement".$key."').style.left=$('elementmove".$key."').style.left;$('velement".$key."').style.top=$('elementmove".$key."').style.top;},				
			}
		}
	}
	return($str);
}

function place_viz($dashboard, $sid)
{
  //array_push($movableObjects, $sid);
	global $db;
	global $setup;
	$schema='';

	$sql="select ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station_variables where ".$schema."station_variables.sid='".$sid."' and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='value' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype')";
	$result			= $db->fetchAll($sql);

    foreach($result as $variable)
	{
		$value[$variable['name']] = $variable['value'];
		if($variable['name']=='value') $svid=$variable['svid'];
	}
	$options	= json_decode($value['options'],true);

	foreach($options as $key1=>$value1)
		if(is_integer($key1))
		{
			if ($key1==$dashboard)	$options['dashboard_options']	= $options[$dashboard];
			unset($options[$key1]);
		}

	if($setup==1)
	{
		$setup_location['dashboard']	= $dashboard;
		$setup_location['svid']			= $svid;
	}
	if(!isset($setup_location)) $setup_location='';

	$content = call_user_func("reload_viz_".$value['type'],$sid, $value['value'], $options, $setup_location);

    workflow_done($sid);
	return $content;	
}

function place_inputs($sid = false)
{

	global $db;
	global $dashboard;
	global $setup;
	global $idvalue;
	$schema = '';
	$str = '';
	$where = '';

	$sql="select now()::timestamp without time zone as timestamp";
	$result					= $db->fetchAll($sql);
	$_SESSION['timestamp'.$dashboard.$setup.$idvalue]	= $result[0]['timestamp'];

	if($sid) $where = ' and (station_variables.sid='.$sid.')';
	$sql="select ".$schema."station.sid as sid, ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station join ".$schema."station_variables on ".$schema."station.sid=".$schema."station_variables.sid where (".$schema."station.name='New Input')".$where." and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='value' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype') order by ".$schema."station.sid, ".$schema."station_variables.name";
	$result			= $db->fetchAll($sql);

	if(count($result)>0)
	{
		foreach($result as $variable)
		{


		  $inputs[$variable['sid']][$variable['name']] = $variable['value'];
			$ids[$variable['sid']][$variable['name']] 	 = $variable['svid'];
		}

		foreach ($inputs as $key => $value)
		{
		$str .= "<script type='text/javascript'>
		 /*      
		 document.observe('dom:loaded', function() {
		    $(\"elementmove".$key."\").observe(\"click\", function() { 
			nodeOptionClicked = $key;

		    });
			});*/
		      </script>";	
		  $options = json_decode($value['options'],true);
			if (!isset($options[$dashboard])) unset($inputs[$key]);
			else
			{
				foreach($options as $key1=>$value1)
					if(is_integer($key1))
					{
						if ($key1==$dashboard)
						{
							$options['dashboard_options']	= $options[$dashboard];
						}
						unset($options[$key1]);
					}
				$inputs[$key]['options'] = $options;
			}
		}

		foreach($inputs as $key => $value)
		{

			if($setup==1) 	$setup_location['enabled']		= true;
			else				$setup_location['enabled']		= false; 
			$setup_location['dashboard']	= $dashboard;
			$setup_location['svid']			= $ids[$key]['options'];
			$setup_location['value_svid']	= $ids[$key]['value'];

			$str .= call_user_func("place_input_".$value['type'],$key, $value['value'], $value['options'], $setup_location);

			if($setup==1){
			  global $db;
			  $result = $db->fetchAll("select svid from station_variables where name='options' and sid=".$key);
			  $options_svid=$result[0]['svid'];


				$str .= '<div id="elementmove'.$key.'" class="redbox" oncontextmenu ="$(\'elementinfo'.$key.'\').style.display = \'none\';$(\'elementcontext'.$key.'\').style.display = \'\';" onmouseout="$(\'elementinfo'.$key.'\').style.display = \'none\';" onmouseover="$(\'elementinfo'.$key.'\').style.display = \'\'" onmousedown = "" style="z-index:9000; border: 1px solid red; position:absolute; top:'.($value['options']['dashboard_options']['y']).'; left:'.($value['options']['dashboard_options']['x']).'; width:5; height:5;"></div>';

				//The following chunk echoes a div containing the
				//name of the input (not visualization) module 
				$str .= '<div id="elementinfo'.$key.'" style="z-index: 9000; background-color:#FFFFFF; display: none;  position:absolute;top: '.($value['options']['dashboard_options']['y']+20).'; left:'.($value['options']['dashboard_options']['x']).';">'.$value['name'].'</div>';

				$str .= "<script  language=\"JavaScript\" type=\"text/javascript\">
				  document.observe('dom:loaded', function() {
				    $(\"elementmove".$key."\").observe(\"mousedown\", function(e) { 










				      if(nodeOptionClicked)
				      {
					//alert('elementmove'+nodeOptionClicked);
					$('elementmove'+nodeOptionClicked).style.border = '1px solid red';
					$('elementmove'+nodeOptionClicked).style.height = 5;
					$('elementmove'+nodeOptionClicked).style.width = 5;
			}
			$('elementmove".$key."').style.border='1px solid #CCCCCC ';
			$('elementmove".$key."').style.width = $('element".$key."').style.width;
			$('elementmove".$key."').style.height = $('element".$key."').style.height;
			nodeOptionClicked = $key;
			nodeSVID = ".$options_svid.";

			//alert($key);


			});

			});

			var inputWidth = $('element".$key."').style.width;
			var inputHeight = $('element".$key."').style.height;

			new Draggable('elementmove".$key."',{snap: [5, 5],onStart:function(){\$('elementmove".$key."').style.width=inputWidth;\$('elementmove".$key."').style.height=inputHeight;}, change:function() {\$('elementmove".$key."').style.width=$('element".$key."').style.width;\$('elementmove".$key."').style.height=$('element".$key."').style.height;}, onEnd:function() {\$('elementmove".$key."').style.width=5;\$('elementmove".$key."').style.height=5;\$('element".$key."').style.left=\$('elementmove".$key."').style.left;\$('element".$key."').style.top=\$('elementmove".$key."').style.top;write_coordinates(".$dashboard.",$('elementmove".$key."').style.left, $('elementmove".$key."').style.top,'".$options_svid."',{} );$('elementinfo".$key."').style.left=\$('elementmove".$key."').style.left;$('elementinfo".$key."').style.top=parseInt(\$('elementmove".$key."').style.top)+20;}});//**********NEEDS SVID

			</script>";


//change:function() {$('velement".$key."').style.left=$('elementmove".$key."').style.left;$('velement".$key."').style.top=$('elementmove".$key."').style.top;},				
			}
		}
	}
	return ($str);
}

function place_input($dashboard, $sid)
{

  //array_push($movableObjects, $sid);
	global $db;
	global $setup;
	$schema='';

	$sql="select ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station_variables where ".$schema."station_variables.sid='".$sid."' and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='value' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype')";
	$result			= $db->fetchAll($sql);


	foreach($result as $variable)
	{
		$value[$variable['name']] = $variable['value'];
		if($variable['name']=='options') $svid=$variable['svid'];
		if($variable['name']=='value') $svid_value=$variable['svid'];
	}

	$options	= json_decode($value['options'],true);

	foreach($options as $key1=>$value1)
		if(is_integer($key1))
		{
			if ($key1==$dashboard)	$options['dashboard_options']	= $options[$dashboard];
			unset($options[$key1]);
		}

	if($setup==1)	$setup_location['enabled']		= true;
	else				$setup_location['enabled']		= false; 
	$setup_location['dashboard']	= $dashboard;
	$setup_location['svid']			= $svid;
	$setup_location['value_svid']	= $svid_value;

	$content = call_user_func("reload_input_".$value['type'],$sid, $value['value'], $options, $setup_location);

	workflow_done($sid);
	return $content;	
}

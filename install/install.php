<?php
# safety check
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['delete'])) unlink ('INSTALL_ENABLED');

if(isset($_POST['reset'])) 
  if(!copy('../includes/config.ini.php.sample','../includes/config.ini.php'))
    die('<br>Please make the directory includes writable');

if(!file_exists('INSTALL_ENABLED'))
  die('Please create the file INSTALL_ENABLED in your installation directory');

require_once('Zend/Db.php');

echo '<html><head><style type="text/css">';
echo 'TD.bad { background-color:red;}';
echo 'TD.ok  { background-color:green;}';
echo 'TD.med { background-color:orange;}';
echo '</style></head>';

echo '<body>Welcome to the CSF installation.<br><br>';

#insallation checks
if(!is_writable('../install'))
  die('<br>Please make sure that the directory \'install\' is writable.');

if(!file_exists('../includes/config.ini.php'))
  if(!copy('../includes/config.ini.php.sample','../includes/config.ini.php'))
    die('<br>Please make sure that the directory \'includes\' is writable');

if(!is_writable('../includes/config.ini.php'))
  die('<br>Please make sure that the file includes/config.ini.php is writable.');

if(!is_writable('../install/INSTALL_ENABLED'))
  die('<br>Please make sure that the file install/INSTALL_ENABLED is writable.');

if(!is_writable('../includes/dashboardBGs'))
  die('<br>Please make sure that the directory includes/dashboardBGs can be written.');

if(!is_writable('../modules/operators'))
  die('<br>Please make sure that the directory modules/operators is writable.');

$max_upload = (int)(ini_get('upload_max_filesize'));
$max_post = (int)(ini_get('post_max_size'));
$memory_limit = (int)(ini_get('memory_limit'));
$upload_mb = min($max_upload, $max_post, $memory_limit);
echo 'Maximum upload size: '.$upload_mb.'MB';
#phpinfo();
#writing setup data
function write_ini_file($assoc_arr, $path, $has_sections=FALSE) { 
  $content = "<?
"; 
if ($has_sections) { 
  foreach ($assoc_arr as $key=>$elem) { 
    $content .= "[".$key."]\n"; 
    foreach ($elem as $key2=>$elem2) { 
      if(is_array($elem2)) { 
	foreach ($elem2 as $key3=>$elem3) { 
	  $content .= $key2."['".$key3."'] = \"".$elem3."\"\n"; 
	} 
      } 
      else 
	if($elem2=="") $content .= $key2." = \n"; 
	else $content .= $key2." = \"".$elem2."\"\n"; 
    } 
  } 
} 
else { 
  foreach ($assoc_arr as $key=>$elem) { 
    if(is_array($elem)) { 
      for($i=0;$i<count($elem);$i++)  
	$content .= $key."[] = \"".$elem[$i]."\"\n"; 
    } 
    else
      if($elem=="") $content .= $key." = \n"; 
      else $content .= $key." = \"".$elem."\"\n"; 
  } 
} 

if (!$handle = fopen($path, 'w')) { 
  return false; 
} 
if (!fwrite($handle, $content)) { 
  return false; 
} 
fclose($handle); 
return true; 
}

$config = parse_ini_file('../includes/config.ini.php',true);
$database=$config['database configuration']['database'];
$configuration=$config['path configuration']['configuration'];
$parameters=$config['configuration parameters']['parameters'];

if(isset($_POST['submit'])) {
  foreach($database as $key => $value)
    $database[$key] = $_POST[$key];	
  foreach($configuration as $key => $value)
    $configuration[$key] = $_POST[$key];	
  foreach($parameters as $key => $value)
    $parameters[$key] = $_POST[$key];	
  $config['database configuration']['database'] = $database;
  $config['path configuration']['configuration'] = $configuration;
  $config['configuration parameters']['parameters'] = $parameters;
  if(!write_ini_file($config,'../includes/config.ini.php',true))
    die('Cound not write config file includes/config.php');
}

if(isset($_POST['createdb'])) {
  try {
    $database1 = $database;
    $database1['dbname'] = 'postgres';
    $db1 = Zend_Db::factory('pdo_pgsql', $database1);
    $db1->getConnection();
    $dbcheck['host'] = 'ok';
    $dbcheck['username'] = 'ok';
    $dbcheck['password'] = 'ok';
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['host'] = 'bad';
    $dbcheck['username'] = 'bad';
    $dbcheck['password'] = 'bad';
  } catch (Zend_Exception $e) {
    die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
  }

  try {
    $db = Zend_Db::factory('pdo_pgsql', $database);
    $db->getConnection();
    $dbcheck['dbname'] = 'ok';
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'bad';
    unset($db);
  } catch (Zend_Exception $e) {
    die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
  }

  if(($dbcheck['host']=='ok') and ($dbcheck['dbname']=='bad')) {
    $sql = 'CREATE DATABASE '.$database['dbname']. " WITH ENCODING='UTF8' CONNECTION LIMIT=-1;";
    $db1->fetchAll($sql);
  }
}

if(isset($_POST['load_tables'])) {
  try {
    $db = Zend_Db::factory('pdo_pgsql', $database);
    $db->getConnection();
    $dbcheck['dbname'] = 'ok';
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'bad';
    unset($db);
  } catch (Zend_Exception $e) {
    die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
  }

  if($dbcheck['dbname']=='ok') {
    $sql = file_get_contents('tables.sql'); 
    $connection_string = 	'dbname='.$database['dbname'].
      ' host='.$database['host'].
      ' user='.$database['username'].
      ' password='.$database['password'];
    if($conn = pg_pconnect($connection_string)) {
      pg_query($conn, $sql);
    }
  }
}


if(isset($_POST['load_client'])) {
  try {
    $db = Zend_Db::factory('pdo_pgsql', $database);
    $db->getConnection();
    $dbcheck['dbname'] = 'ok';
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'bad';
    unset($db);
  } catch (Zend_Exception $e) {
    die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
  }

  if($dbcheck['dbname']=='ok') {
    $sql = file_get_contents('cleanup/load_client.sql'); 
    $connection_string = 	'dbname='.$database['dbname'].
      ' host='.$database['host'].
      ' user='.$database['username'].
      ' password='.$database['password'];
    if($conn = pg_pconnect($connection_string)) {
      pg_query($conn, $sql);
    }
  }
}

if(isset($_POST['load_user'])) {
  try {
    $db = Zend_Db::factory('pdo_pgsql', $database);
    $db->getConnection();
    $dbcheck['dbname'] = 'ok';
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'bad';
    unset($db);
  } catch (Zend_Exception $e) {
    die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
  }

  if($dbcheck['dbname']=='ok') {
    $sql = file_get_contents('cleanup/load_user.sql'); 
    $connection_string = 	'dbname='.$database['dbname'].
      ' host='.$database['host'].
      ' user='.$database['username'].
      ' password='.$database['password'];
    if($conn = pg_pconnect($connection_string)) {
      pg_query($conn, $sql);
    }
  }
}

if(isset($_POST['load_log'])) {
  try {
    $db = Zend_Db::factory('pdo_pgsql', $database);
    $db->getConnection();
    $dbcheck['dbname'] = 'ok';
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'bad';
    unset($db);
  } catch (Zend_Exception $e) {
    die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
  }

  if($dbcheck['dbname']=='ok') {
    $sql = file_get_contents('cleanup/load_log.sql'); 
    $connection_string = 	'dbname='.$database['dbname'].
      ' host='.$database['host'].
      ' user='.$database['username'].
      ' password='.$database['password'];
    if($conn = pg_pconnect($connection_string)) {
      pg_query($conn, $sql);
    }
  }
}


if(isset($_POST['load_postgis'])) {
  try {
    $db = Zend_Db::factory('pdo_pgsql', $database);
    $db->getConnection();
    $dbcheck['dbname'] = 'ok';
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'bad';
    unset($db);
  } catch (Zend_Exception $e) {
    die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
  }

  if($dbcheck['dbname']=='ok') {
    if(file_exists('/usr/share/pgsql/contrib/postgis-64.sql'))
      $sql = file_get_contents('/usr/share/pgsql/contrib/postgis-64.sql');
    elseif(file_exists('/usr/share/pgsql/contrib/postgis.sql'))
      $sql = file_get_contents('/usr/share/pgsql/contrib/postgis.sql');
    elseif(file_exists('/opt/local/share/postgresql91/contrib/postgis-2.0/postgis.sql'))
      $sql = file_get_contents('/opt/local/share/postgresql91/contrib/postgis-2.0/postgis.sql');
    else
      die('<br>PostGIS error. Please make sure PostGIS is properly installed.');

    $connection_string =       'dbname='.$database['dbname'].
      ' host='.$database['host'].
      ' user='.$database['username'].
      ' password='.$database['password'];

    try {
      $db->fetchAll('CREATE OR REPLACE LANGUAGE plpgsql');
    } catch (Zend_Db_Adapter_Exception $e) {
      echo('<br>Language exists.<br>');
    } catch (Zend_Exception $e) {
      echo('<br>Language exists.<br>'. $e);
    }
    if($conn = pg_pconnect($connection_string)) {
      pg_query($conn, $sql);
      if(file_exists('/usr/share/pgsql/contrib/spatial_ref_sys.sql'))
	$sql = file_get_contents('/usr/share/pgsql/contrib/spatial_ref_sys.sql');
      elseif (file_exists('/opt/local/share/postgresql91/contrib/postgis-2.0/spatial_ref_sys.sql'))
	$sql = file_get_contents('/opt/local/share/postgresql91/contrib/postgis-2.0/spatial_ref_sys.sql');
      elseif (file_exists('/usr/share/pgsql/contrib/spatial_ref_sys.sql'))
	$sql = file_get_contents('/usr/share/pgsql/contrib/spatial_ref_sys.sql');
      else
	die('<br>Cannot load spatial_ref_sys.sql. Please make sure PostGIS is properly installed.');
      pg_query($conn, $sql);
    }
  }
}



$root_path = substr($_SERVER['PHP_SELF'],0,strpos($_SERVER['PHP_SELF'],'install/install.php'));
#setup checks
# database
try {
  $database1 = $database;
  $database1['dbname'] = 'postgres';
  $db1 = Zend_Db::factory('pdo_pgsql', $database1);
  $db1->getConnection();
  $dbcheck['host'] = 'ok';
  $dbcheck['username'] = 'ok';
  $dbcheck['password'] = 'ok';
} catch (Zend_Db_Adapter_Exception $e) {
  $dbcheck['host'] = 'bad';
  $dbcheck['username'] = 'bad';
  $dbcheck['password'] = 'bad';
} catch (Zend_Exception $e) {
  die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
}

try {
  $db = Zend_Db::factory('pdo_pgsql', $database);
  $db->getConnection();
  $dbcheck['dbname'] = 'ok';
} catch (Zend_Db_Adapter_Exception $e) {
  $dbcheck['dbname'] = 'bad';
} catch (Zend_Exception $e) {
  die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
}

if($dbcheck['dbname']=='ok') {

  try {
    $sql = 'select * from clients limit 1';
    $db->fetchAll($sql);
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'clients';
  } catch (Zend_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'clients';
  }

  try {
    $sql = 'select * from users limit 1';
    $db->fetchAll($sql);
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'users';
  } catch (Zend_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'users';
  }

  try {
    $sql = 'select * from log limit 1';
    $db->fetchAll($sql);
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'log';
  } catch (Zend_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'log';
  }

  try {
    $sql = 'select * from station limit 1';
    $db->fetchAll($sql);
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'station';
  } catch (Zend_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'station';
  }

  try {
    $sql = 'select * from geometry_columns limit 1';
    $db->fetchAll($sql);
  } catch (Zend_Db_Adapter_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'postgis';
  } catch (Zend_Exception $e) {
    $dbcheck['dbname'] = 'med';
    $dbcheck['tables'] = 'postgis';
  }

}

if(($info=shell_exec($configuration['shp2pgsql_path']))==NULL)
  $confcheck['shp2pgsql_path'] = 'bad';
else
  $confcheck['shp2pgsql_path'] = 'ok';

if($configuration['csf_path']=='') $configuration['csf_path']=$_SERVER['DOCUMENT_ROOT'].$root_path;
if(is_readable($configuration['csf_path']))
  $confcheck['csf_path'] = 'ok';
else
  $confcheck['csf_path'] = 'bad';

if($configuration['tmp_path']=='') $configuration['tmp_path']=sys_get_temp_dir();
if(is_writable($configuration['tmp_path']))
  $confcheck['tmp_path'] = 'ok';
else
  $confcheck['tmp_path'] = 'bad';

if($configuration['tmp_path_distributed']=='') $configuration['tmp_path_distributed']=sys_get_temp_dir();
if(is_writable($configuration['tmp_path_distributed']))
  $confcheck['tmp_path_distributed'] = 'ok';
else
  $confcheck['tmp_path_distributed'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['input_path']) or 
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['input_path'])) and
  $configuration['input_path']!='')
  $confcheck['input_path'] = 'ok';
else
  $confcheck['input_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['operator_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['operator_path'])) and
  $configuration['operator_path']!='')
  $confcheck['operator_path'] = 'ok';
else
  $confcheck['operator_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['visualization_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['visualization_path'])) and
  $configuration['visualization_path']!='')
  $confcheck['visualization_path'] = 'ok';
else
  $confcheck['visualization_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['audio_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['audio_path'])) and
  $configuration['audio_path']!='')
  $confcheck['audio_path'] = 'ok';
else
  $confcheck['audio_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['video_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['video_path'])) and
  $configuration['video_path']!='')
  $confcheck['video_path'] = 'ok';
else
  $confcheck['video_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['image_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['image_path'])) and
  $configuration['image_path']!='')
  $confcheck['image_path'] = 'ok';
else
  $confcheck['image_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['media_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['media_path'])) and
  $configuration['media_path']!='')
  $confcheck['media_path'] = 'ok';
else
  $confcheck['media_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['upload_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['upload_path'])) and
  $configuration['upload_path']!='')
  $confcheck['upload_path'] = 'ok';
else
  $confcheck['upload_path'] = 'bad';

if((is_readable($configuration['phppgadmin_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['phppgadmin_path'])) and
  $configuration['phppgadmin_path']!='')
  $confcheck['phppgadmin_path'] = 'ok';
else
  $confcheck['phppgadmin_path'] = 'ok';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['openlayers_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['openlayers_path'])) and
  $configuration['openlayers_path']!='')
  $confcheck['openlayers_path'] = 'ok';
else
  $confcheck['openlayers_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['protomenu_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['protomenu_path'])) and
  $configuration['protomenu_path']!='')
  $confcheck['protomenu_path'] = 'ok';
else
  $confcheck['protomenu_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['prototype_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['prototype_path'])) and
  $configuration['prototype_path']!='')
  $confcheck['prototype_path'] = 'ok';
else
  $confcheck['prototype_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['jquery_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['jquery_path'])) and
  $configuration['jquery_path']!='')
  $confcheck['jquery_path'] = 'ok';
else
  $confcheck['jquery_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['scriptaculous_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['scriptaculous_path'])) and
  $configuration['scriptaculous_path']!='')
  $confcheck['scriptaculous_path'] = 'ok';
else
  $confcheck['scriptaculous_path'] = 'bad';


if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['phplivex_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['phplivex_path'])) and
  $configuration['phplivex_path']!='')
  $confcheck['phplivex_path'] = 'ok';
else
  $confcheck['phplivex_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['excanvas_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['excanvas_path'])) and
  $configuration['excanvas_path']!='')
  $confcheck['excanvas_path'] = 'ok';
else
  $confcheck['excanvas_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['ace_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['ace_path'])) and
  $configuration['ace_path']!='')
  $confcheck['ace_path'] = 'ok';
else
  $confcheck['ace_path'] = 'bad';


if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['d3_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['d3_path'])) and
  $configuration['d3_path']!='')
  $confcheck['d3_path'] = 'ok';
else
  $confcheck['d3_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['cubism_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['cubism_path'])) and
  $configuration['cubism_path']!='')
  $confcheck['cubism_path'] = 'ok';
else
  $confcheck['cubism_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['jscolor_path']) or
  is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['jscolor_path'])) and
  $configuration['jscolor_path']!='')
  $confcheck['jscolor_path'] = 'ok';
else
  $confcheck['jscolor_path'] = 'bad';


echo ", Root path: ".$root_path;

echo '<form action="install.php" method="post"><table><tr><td valign="top">';
echo '<br>Database setup:<br>';
echo '<table>';
foreach($database as $key => $value)
  echo '<tr><td>'.$key.'</td><td class="'.$dbcheck[$key].'"><input name="'.$key.'" value="'.$value.'"</td></tr>';
echo '</table>';

if(($dbcheck['host']=='ok') and ($dbcheck['dbname']=='bad'))
  echo '<input type="submit" name="createdb" value=" Create Database "';

if($dbcheck['dbname']=='med') {
  switch($dbcheck['tables']) {
  case 'station':	echo '<input type="submit" name="load_tables" value=" Load CSF Tables "';
  break;
  case 'clients':	echo '<input type="submit" name="load_client" value=" Load Client Table "';
  break;
  case 'users':	echo '<input type="submit" name="load_user" value=" Load Users Table "';
  break;
  case 'log':	echo '<input type="submit" name="load_log" value=" Load Log Table "';
  break;
  case 'postgis':	echo '<input type="submit" name="load_postgis" value=" Load PostGIS Tables "';
  break;
  }
}

echo '</td><td valign="top">';

echo '<br>Path setup:<br>';
echo '<table>';
foreach($configuration as $key => $value)
  echo '<tr><td>'.$key.'</td><td class="'.$confcheck[$key].'"><input name="'.$key.'" value="'.$value.'"</td></tr>';
echo '</table></td><td valign="top"><br>Parameters:<br><table>';
foreach($parameters as $key => $value)
  echo '<tr><td>'.$key.'</td><td><input name="'.$key.'" value="'.$value.'"</td></tr>';

echo '</table></td></tr></table><input type="submit" name="submit" value=" Apply Configuration "> ';
echo '<input type="submit" name="reset" value=" Reset Configuration ">';
echo '<input type="submit" name="delete" value=" Disable Configuration "></form>';

echo '</body></html>';




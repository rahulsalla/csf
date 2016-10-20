<?php
require_once('Zend/Db.php');
#setup a unique database with the asurite it
#for release versions this will be unset.
if(isset($_SERVER['REQUEST_URI']))
{
  $path = explode('/',$_SERVER['REQUEST_URI']);
  $dbname_dev=$path[1];
  if(strpos($_SERVER['REQUEST_URI'],'/modules/operators')>0) $calltype     = '../../';
  else $calltype = '';
}
else
{
  $path = explode('/',__FILE__);
  $dbname_dev=$path[2];
  $calltype      ='';
}


$config = parse_ini_file('config.ini.php',true);
if($config['path configuration']['configuration']['tmp_path']=='') $config['path configuration']['configuration']['tmp_path'] = sys_get_temp_dir();
$database=$config['database configuration']['database'];
$configuration=$config['path configuration']['configuration'];
$parameters=$config['configuration parameters']['parameters'];

$configuration['calltype']=$calltype;

if(!isset($pgconfig)) {
  try {
    $db = Zend_Db::factory('pdo_pgsql', $database);
    $db->getConnection();
  } catch (Zend_Db_Adapter_Exception $e) {
    header('Location: install/install.php');
  } catch (Zend_Exception $e) {
    header('Location: install/install.php');	
    die('Database inizialisation error. Please make sure PHP and other necessary components are correctly installed.');
  }
}

<?php
# safety check

if(isset($_POST['delete'])) unlink ('INSTALL_ENABLED');

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
    die('<br>Please make sure, that the directory install is writable.');

if(!is_writable('../includes/config.ini.php'))
    die('<br>Please make sure, that the file includes/config.ini.php is writable.');

if(!is_writable('../install/INSTALL_ENABLED'))
    die('<br>Please make sure, that the file includes/INSTALL_ENABLED is writable.');

if(!is_writable('../includes/dashboardBGs'))
    die('<br>Please make sure, that the directory includes/dashboardBGs can be written.');

#writing setup data
function write_ini_file($assoc_arr, $path, $has_sections=FALSE) { 
    $content = ""; 
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

if(isset($_POST['submit'])) {
	foreach($database as $key => $value)
		$database[$key] = $_POST[$key];	
	foreach($configuration as $key => $value)
		$configuration[$key] = $_POST[$key];	
	$config['database configuration']['database'] = $database;
	$config['path configuration']['configuration'] = $configuration;
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
		$db->fetchAll('CREATE LANGUAGE plpgsql');
                $sql = file_get_contents('/usr/share/pgsql/contrib/postgis-64.sql');
                $connection_string =       'dbname='.$database['dbname'].
                                                ' host='.$database['host'].
                                                ' user='.$database['username'].
                                                ' password='.$database['password'];
                if($conn = pg_pconnect($connection_string)) {
                        pg_query($conn, $sql);
        	        $sql = file_get_contents('/usr/share/pgsql/contrib/spatial_ref_sys.sql');
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

if($configuration['tmp_path']=='') $configuration['tmp_path']=sys_get_temp_dir();
if(is_writable($configuration['tmp_path']))
	$confcheck['tmp_path'] = 'ok';
else
	$confcheck['tmp_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['input_path']) or 
		is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['input_path'])) and
		$configuration['input_path']!='')
	$confcheck['input_path'] = 'ok';
else
	$confcheck['input_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['processor_path']) or
		is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['processor_path'])) and
		$configuration['processor_path']!='')
	$confcheck['processor_path'] = 'ok';
else
	$confcheck['processor_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['visualization_path']) or
		is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['visualization_path'])) and
		$configuration['visualization_path']!='')
	$confcheck['visualization_path'] = 'ok';
else
	$confcheck['visualization_path'] = 'bad';

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['phppgadmin_path']) or
		is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['phppgadmin_path'])) and
		$configuration['phppgadmin_path']!='')
	$confcheck['phppgadmin_path'] = 'ok';
else
	$confcheck['phppgadmin_path'] = 'bad';

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

if((is_readable($_SERVER['DOCUMENT_ROOT'].$configuration['swfupload_path']) or
		is_readable($_SERVER['DOCUMENT_ROOT'].$root_path.$configuration['swfupload_path'])) and
		$configuration['swfupload_path']!='')
	$confcheck['swfupload_path'] = 'ok';
else
	$confcheck['swfupload_path'] = 'bad';




echo $root_path;

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
		case 'postgis':	echo '<input type="submit" name="load_postgis" value=" Load PostGIS Tables "';
				break;
	}
}

echo '</td><td valign="top">';

echo '<br>Path setup:<br>';
echo '<table>';
foreach($configuration as $key => $value)
	echo '<tr><td>'.$key.'</td><td class="'.$confcheck[$key].'"><input name="'.$key.'" value="'.$value.'"</td></tr>';
echo '</table></td></tr></table><input type="submit" name="submit" value=" Update Configuration "> ';
echo '<input type="submit" name="delete" value=" Disable Configuration "></form>';

echo '</body></html>';




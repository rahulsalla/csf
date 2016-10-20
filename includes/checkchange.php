<?
session_start();
if (array_key_exists('dashboard', $_POST)) {
    $dashboard = $_POST['dashboard'];
} else {
    $dashboard = '';
}

if (array_key_exists('setup', $_POST)) {
    $setup = $_POST['setup'];
} else {
    $setup = '';
}

if (array_key_exists('id', $_POST)) {
    $idvalue = $_POST['id'];
} else {
    $idvalue = '';
}

if (array_key_exists('uid', $_POST)) {
    $uid = $_POST['uid'];
} else {
    $uid = '';
}

#----------------

$config = parse_ini_file('config.ini.php',true);
if($config['path configuration']['configuration']['tmp_path']=='') $config['path configuration']['configuration']['tmp_path'] = sys_get_temp_dir();
$database=$config['database configuration']['database'];

try {
    $dbconn = pg_connect("host=".$database['host']." port=5432 dbname=".$database['dbname']." user=".$database['username']." password=".$database['password']);
} catch (Zend_Db_Adapter_Exception $e) {
    header('Location: install/install.php');
}

$time = time();
if(isset($_SESSION['timeout']) and ($_SESSION['timeout']>$time)) $_SESSION['timeout'] = $time + $config['configuration parameters']['parameters']['session_timeout'];

#-----------------
//This function checks if there is a change in the database using a javascript timer
	$res = pg_query ($dbconn, "insert into clients (dashboard, id, uid, timestamp, login) values ('$dashboard', '$idvalue', '$uid', now(), '".$_SESSION['user']."')");
	$result = pg_fetch_all($res);

	if(isset($_SESSION['time'.$dashboard.$setup.$idvalue]) and ((time()-$_SESSION['time'.$dashboard.$setup.$idvalue])>100)) {

	    $res = pg_query ($dbconn, "delete from clients where timestamp < now()::timestamp without time zone - interval '100 seconds'");
	    $result = pg_fetch_all($res);

	    $res = pg_query ($dbconn, "delete from inter_process where timestamp < now()::timestamp without time zone - interval '100 seconds'");
	    $result = pg_fetch_all($res);
	}
	$_SESSION['time'.$dashboard.$setup.$idvalue] = time();

	if(!isset($_SESSION['timestamp'.$dashboard.$setup.$idvalue]))
	{
	    $res = pg_query ($dbconn, "select now()::timestamp without time zone as timestamp");
	    $result = pg_fetch_all($res);
	    $_SESSION['timestamp'.$dashboard.$setup.$idvalue]	= $result[0]['timestamp'];
	}

	# send data only for a specific dashboard
	$sql = 'select inter_process.function as fun, inter_process.sid, inter_process.svid, inter_process.value, inter_process.timestamp, inter_process.name, station_variables.value as dashboard from inter_process left join station_variables on (inter_process.sid = station_variables.sid) where (inter_process.timestamp>\''.$_SESSION['timestamp'.$dashboard.$setup.$idvalue].'\') and ((inter_process.function=\'refresh\') or (inter_process.function=\'refresh_target\') or ((inter_process.function=\'delete\') and (inter_process.value = \''.$dashboard.'\')) or (((inter_process.name=\'options\') or (inter_process.name=\'value\') or (inter_process.function=\'reload\') or (inter_process.function=\'mark\') or (inter_process.function=\'
	\')) and (station_variables.description like \'Options%\') and (station_variables.value like \'%"'.$dashboard.'":{%\'))) order by inter_process.timestamp';
	$res = pg_query ($dbconn, $sql);
	$result = pg_fetch_all($res);
	if($result) {
	    foreach($result as $key => $value)
	    {
		if($value['fun']=='reload')
		{
			
			if(isset($data[$value['sid']])) unset($result[$data[$value['sid']]]);
			$data[$value['sid']]=$key;
			//echo "key" . $key;
		}
		if($value['fun']=='update')
		{
			if(isset($data1[$value['sid']])) unset($result[$data1[$value['sid']]]);
			$data1[$value['sid']]=$key;
		}
		if($value['fun']=='mark')
		{
			if(isset($data1[$value['sid']])) unset($result[$data2[$value['sid']]]);
			$data2[$value['sid']]=$key;
		}
	    }
	    $result			= array_values($result);
	    $last_element	= end($result);
	    $timestamp		= $last_element['timestamp'];
	    if(isset($timestamp)) $_SESSION['timestamp'.$dashboard.$setup.$idvalue]	= $result[count($result)-1]['timestamp'];
	    echo json_encode($result);
	}
	else echo json_encode(false);


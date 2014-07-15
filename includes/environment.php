<?php

if(isset($_COOKIE['PHPSESSID']))
    $_COOKIE['PHPSESSID'] = substr($_COOKIE['PHPSESSID'],0,32).$dashboard.$setup.$idvalue;

session_start();

if(array_key_exists('move',$_SESSION)) $dashboard += $_SESSION['move'];

require_once("Zend/Db.php");
require_once("config.php");

$input_modules = scandir($configuration['calltype'].$configuration['input_path']);
foreach($input_modules as $input_module)
    if(pathinfo($input_module,PATHINFO_EXTENSION)=='php')
	require_once($configuration['calltype'].$configuration['input_path'].'/'.$input_module);

#get all the inputs
function get_inputs($db, $sid = 0) {

    $sql = 'select * from station_variables;';
    $result = $db->fetchAll($sql);

    foreach($result as $value) {
	$data1[$value['sid']][$value['name']] = $value['value'];
    }
    foreach($data1 as $key => $value) {
	if($value['moduletype'] == 'input') {
	    $data[$value['name']] = $value['value'];
	}
	if(($value['moduletype']=='module') and ($key==$sid)) {
	    $data['_OPTIONS'] = json_decode($value['options'],true);
	}
    }
    return($data);
}

#get data directly from the simple results table for convenience
function get_simple_results($db) {

    $sql = 'select * from result_simple_variables;';
    $result = $db->fetchAll($sql);

    foreach($result as $value) {
	$data[$value['name']] = $value['value'];
    }
    return($data);
}

# mark elements as changed and continue dispatch
function workflow_done($sid) {
    
    global $db;
    $sql="select * from station where sid='".$sid."'";
    $result = $db->fetchAll($sql);
#file_put_contents('/tmp/info',"In workflow done(".$sid.",".$result[0]['status'].",".$result[0]['request'].")\n",FILE_APPEND);
    if(($result[0]['status']=='running') and ($result[0]['request']=='waiting')) {
	$columns['status']	= 'ready';
	$columns['request']	= 'done';
	$db->update("station",$columns, '"sid"=\''.$sid.'\'');
#file_put_contents('/tmp/info',"Executing (".$sid.")\n",FILE_APPEND);
	workflow_execute($sid);
    }
    else
    {
	if($result[0]['request']=='update') {
	    workflow_execute1($sid);
	}
    }
}

#execute/update modules
function workflow_execute($sid) {

    global $db;

    $sql	= "select * from station";
    $result1	= $db->fetchAll($sql);

#file_put_contents('/tmp/info',"Checking Predecessors (".$sid.")\n",FILE_APPEND);

    foreach($result1 as $value) {
#set variable $stations as the value of the modules 'status' column in database
	$stations[$value['sid']]['status']	= $value['status'];
#set variable $stations as the value of the modules 'request' column in database
	$stations[$value['sid']]['request']	= $value['request'];
    }
    $sql = "select * from station_variables where (sid='".$sid."') and (name like 'connect%');";
    $result = $db->fetchAll($sql);
    foreach($result as $variable) {
	#echo '..found('.$variable['value'].')';
#file_put_contents('/tmp/info',"Found (".$variable['value'].")\n",FILE_APPEND);
	############################# only run if all required inputs are done.
	$sql	= "select * from station_variables where (value='".$variable['value']."') and (name like 'connect%');";
	$result2	= $db->fetchAll($sql);
	$go		= 0;
#file_put_contents('/tmp/info',"Preparing Check ".$variable['value']."\n",FILE_APPEND);
	foreach($result2 as $value) {
	    #echo '..checking('.$value['sid'].')';
#file_put_contents('/tmp/info',"Checking ".$variable['value']." against (".$value['sid'].")\n",FILE_APPEND);
	    if(!(($stations[$value['sid']]['status']=='ready') and ($stations[$value['sid']]['request']=='done'))) $go = 1;
#file_put_contents('/tmp/info',"Result: ".intval($go)." \n",FILE_APPEND);
	}
	if($go==0) workflow_execute1($variable['value']);
    }
}

#execute/update 1 module
function workflow_execute1($sid,$mark=0) {

    global $db;
    if($mark==0) {
	$columns['status']	= 'running';	
	$columns['request']	= 'waiting';
	$db->update("station",$columns, '"sid"=\''.$sid.'\'');
    }
    #echo '..executing('.$sid.')';
#file_put_contents('/tmp/info',"Executing (".$sid.")\n",FILE_APPEND);

    $sql = "select name from station where sid=".$sid;
    $result			= $db->fetchAll($sql);
#file_put_contents('/tmp/info',"Found Execution Name \"".$result[0]['name']."\" (".$mark.",".$sid.")\n",FILE_APPEND);
    if($result[0]['name']=="New Input") {
	if($mark==1) {
	    $sql	= 'insert into inter_process ("svid", "name", "type", "value", "sid", "description", "show", "order", "timestamp", "function") values (0,\'sid\',\'integer\',\''.$sid.'\',\''.$sid.'\',\'Reload input '.$sid.'\',0,0, now(),\'mark\')';
	    $result1	= $db->fetchAll($sql);
	} else {
	    $schema='';
# find module name
	    $sql="select ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station_variables where ".$schema."station_variables.sid='".$sid."' and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='value' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype')";
	    $result1 = $db->fetchAll($sql);

	    foreach($result1 as $variable) {
		$value[$variable['name']] = $variable['value'];
		if($variable['name']=='value') $svid=$variable['svid'];
	    }

	    $options	= json_decode($value['options'],true);

	    call_user_func($value['type']."_rtrn_default_value", $sid, $options);

	    # write value into database
	    $sql	= 'insert into inter_process ("svid", "name", "type", "value", "sid", "description", "show", "order", "timestamp", "function") values (0,\'sid\',\'integer\',\''.$sid.'\',\''.$sid.'\',\'Reload input '.$sid.'\',0,0, now(),\'reload\')';
	    $result1	= $db->fetchAll($sql);

	    workflow_done($sid);
	}
    }

#file_put_contents('/tmp/info',"Still Eaaxecuting \"".$result[0]['name']."\" (".$mark.",".$sid.")\n",FILE_APPEND);
    #echo '..narrowing begin('.$result[0]['name'].')';

    if(($result[0]['name']=="New Processing") and ($mark==0)) {
	#echo '..narrowing('.$result[0]['name'].')';
	$sql = "select * from station_variables where sid=".$sid;
	$result1			= $db->fetchAll($sql);
	foreach($result1 as $value) {
	    $module[$value['sid']][$value['name']]	= $value['value'];
	}
	#echo '..readying to run('.$module[$sid]['phpfile'].')';
	$ex	= '/usr/bin/php -f modules/processors/'.$module[$sid]['phpfile'].'.php '.$sid.' /dev/null &';
	#echo $ex;
	pclose(popen($ex,'r'));
    }
    if($result[0]['name']=="New Visualization") {
#file_put_contents('/tmp/info',"Requesting update for Vis (".$sid.")\n",FILE_APPEND);
	if($mark==1) {
	    $sql	= 'insert into inter_process ("svid", "name", "type", "value", "sid", "description", "show", "order", "timestamp", "function") values (0,\'sid\',\'integer\',\''.$sid.'\',\''.$sid.'\',\'Reload vizualization '.$sid.'\',0,0, now(),\'mark\')';
	    $result1	= $db->fetchAll($sql);
	} else {

	
	    $sql	= 'insert into inter_process ("svid", "name", "type", "value", "sid", "description", "show", "order", "timestamp", "function") values (0,\'sid\',\'integer\',\''.$sid.'\',\''.$sid.'\',\'Reload vizualization '.$sid.'\',0,0, now(),\'reload\')';
	    $result1	= $db->fetchAll($sql);
	}
    }
}

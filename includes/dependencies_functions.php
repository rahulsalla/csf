<?php
$time = time();
if(isset($_SESSION['timeout']) and ($_SESSION['timeout']>$time)) $_SESSION['timeout'] = $time + $config['configuration parameters']['parameters']['session_timeout'];

require_once('optionFunctions.php');
start_options_javascript();
### Identify and include available input modules
$input_modules = scandir($configuration['input_path']);
foreach($input_modules as $key => $input_module)
    if(pathinfo($input_module,PATHINFO_EXTENSION)=='php') {
	require_once($configuration['input_path'].'/'.$input_module);
	$input_modules[$key] = pathinfo($input_module,PATHINFO_FILENAME);
    }
    else unset($input_modules[$key]);

### Identify available processing modules
$processing_modules = scandir($configuration['operator_path']);
foreach($processing_modules as $key => $processing_module)
    if(pathinfo($processing_module,PATHINFO_EXTENSION)=='php') {
	require_once($configuration['operator_path'].'/'.$processing_module);
	$processing_modules[$key] = pathinfo($processing_module,PATHINFO_FILENAME);
    }
    else unset($processing_modules[$key]);

### Identify and include available visualization modules
$viz_modules = scandir($configuration['visualization_path']);
foreach($viz_modules as $key => $viz_module)
    if(pathinfo($viz_module,PATHINFO_EXTENSION)=='php') {
	require_once($configuration['visualization_path'].'/'.$viz_module);
	$viz_modules[$key] = pathinfo($viz_module,PATHINFO_FILENAME);
    }
    else unset($viz_modules[$key]);

### Reset the station table in case there were processing problems
function reset_table_station() {
	global $db;
	$result	= $db->fetchAll("update station set status = 'ready'");
	$result	= $db->fetchAll("update station set request = 'done'");
}

function get_templates() {
	global $db;
	global $schema;

	$select = $db->select();
	$columns['id']		= "stid";
	$columns['name']	= "name";
	
	$select->from($schema."station_template", $columns);
	$select->order(array('id'));
            
	$stmt		= $select->query();
	$result		= $stmt->fetchAll();
	return($result);
}

function get_screen_nodes($dashboard) {
	global $db;
	$sql	= 'select sid from station_variables where (name=\'options\') and (value like \'%"'.$dashboard.'":%\')';
	$result	= $db->fetchAll($sql);
	return($result);
}

function refresh_dashboards($move) {
	global $db;
	global $schema;
	$move = intval($move);
	$sql		= 'insert into inter_process ("value", "function") values (\''.$move.'\',\'refresh\');';
	$res		= $db->fetchAll($sql);
	return($move);
}

function get_station($id)
{
	global $db;
	global $schema;
	
	$sql="select ".$schema."station_variables.sid as sid, ".$schema."station.stid as stid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station_variables, ".$schema."station where station_variables.sid=".$id ." and (".$schema."station_variables.name='x' or ".$schema."station_variables.name='y' or ".$schema."station_variables.name='name' or ".$schema."station_variables.name='linkin' or ".$schema."station_variables.name='linkout') and (station.sid=station_variables.sid) order by ".$schema."station_variables.name";
	$result			= $db->fetchAll($sql);
	$sid			= -1;
	$station_count	= -1;
	foreach($result as $station)
	{ 
		if($sid!=$station['sid'])
		{
			if($station_count>-1) $stations[$station_count]	= $value;
			unset($value);
			$station_count++;
			$sid			= $station['sid'];
			$value['id']	= $sid;
			$value['tid']	= $station['stid'];
		}
		$value[$station['name']]	= $station['value'];
	}
	if($station_count>-1) $stations[$station_count]	= $value;
	return($stations[0]);
}


function get_stations_basic($type, $dashboard)
{
	global $db;
	global $schema;
	
	$sql="select ".$schema."station.sid as sid, ".$schema."station.stid as stid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station join ".$schema."station_variables on ".$schema."station.sid=".$schema."station_variables.sid where ".$schema."station_variables.name='moduletype' or ".$schema."station_variables.name='x' or ".$schema."station_variables.name='y' or ".$schema."station_variables.name='name' or ".$schema."station_variables.name='linkin' or ".$schema."station_variables.name='linkout' or ".$schema."station_variables.name='num_server' or ".$schema."station_variables.name='queue_length' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name = 'show' order by ".$schema."station.sid, ".$schema."station_variables.name";
	//we do not have any 'num_server' names in station_variables
	
	$result			= $db->fetchAll($sql);
	$sid			= -1;
	$station_count	= -1;
	foreach($result as $station)
	{ 
		if($sid!=$station['sid'])
		{
			if($station_count>-1)
			{
				##$sql = 'select sid from station_variables where description like \'Show%\' and ((value like \'%;'.$dashboard.'\') or (value like \'%;'.$dashboard.';%\') or (value like \''.$dashboard.';%\') or (value = \''.$dashboard.'\'))';

				if(strpos($value['type'],'static') === $type)
				{
					if($type===0)
						if (in_array($dashboard,explode(';',$value['show']))) $stations[$station_count]	= $value;
						else $station_count--;
					else $stations[$station_count]	= $value;
				}
				else $station_count--;
			}
			unset($value);
			$station_count++;
			$sid			= $station['sid'];
			$value['id']	= $sid;
			$value['tid']	= $station['stid'];
		}
		$value[$station['name']]	= $station['value'];
	}
	if($station_count>-1)
				if(strpos($value['type'],'static') === $type) $stations[$station_count]	= $value;
				else $station_count--;
	$data[0]=$stations;
	
	if($type===false) $data[1]=get_links();
	return($data);
}

function get_stations()
{
	return(get_stations_basic(false, false));
}

function get_static_stations($dashboard)
{
	return(get_stations_basic(0, $dashboard));
}

function delete_station($id, $from_id)
{
	global $db;
	global $schema;
	
	$result = $db->fetchAll("select station.sid, value, station_variables.name as name from station, station_variables where (station_variables.name='options') and station.sid = " . $id);

#encode moduels into array
	foreach ($result as $value) {
	    $modules[$value['sid']][$value['name']] = $value['value'];
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
#delete command for all dashboards
	if(isset($dashboardlist)) {
	    foreach ($dashboardlist as $dashboard => $value) {
		$db->fetchAll('insert into inter_process ("value", "function", "sid") values (\''.$dashboard.'\',\'delete\',\''.$id.'\');');
	    }
	}
	
	$sql = "delete from ".$schema."station where sid=".$id;
	$result			= $db->fetchAll($sql);
	$sql = "delete from ".$schema."station_variables where (sid='".$id."') or (name='connect' and value='".$id."') or (name like any (select ('connect_' || svid || '%') as svid  from ".$schema."station_variables where (name='connect') and (value='".$id."')));";
	$result			= $db->fetchAll($sql);
	
	return(get_settings($from_id));
}

function delete_link($link_id, $from_id)
{
	global $db;
	global $schema;
	
	$sql		= "delete from ".$schema."station_variables where (svid='".$link_id."') or (name like 'connect_".$link_id."%');";
	$result		= $db->fetchAll($sql);
	
	return(get_settings($from_id));
}

function get_template_name($id)
{
	global $db;
	global $schema;

	$select = $db->select();
	$columns['id']		= "stid";
	$columns['name']	= "name";
	
	$select->from($schema."station_template", $columns);
	$select->where("stid='".$id."'");
            
	$stmt		= $select->query();
	$result		= $stmt->fetchAll();

	$insert['name']	= $result[0]['name'];
	$insert['stid']	= $result[0]['id'];
	$insert['status']	= 'ready';
	$insert['request']	= 'done';
	
	$db->insert($schema.'station', $insert);
	$lid				= $db->lastInsertId($schema.'station','sid');
	$result[0]['id']	= $lid;
	
	$sql		= 'insert into '.$schema.'station_variables ("name", "type", "value", "sid", "description", "show", "order" ) select "name", "type", "value", '.$lid.', "description", "show", "order" from '.$schema.'station_variables_template where "stid"='.$id.';';
	$res		= $db->fetchAll($sql);

	return(get_station($lid));	
}

function get_settings($id) {
    global $db;
    global $schema;
    global $input_modules;
    global $viz_modules;
    global $processing_modules;

    $select = $db->select();
    $columns['svid']		= "svid";
    $columns['name']		= "name";
    $columns['description']	= "description";
    $columns['type']		= "type";
    $columns['value']		= "value";

    $select->from($schema."station_variables", $columns);
    $select->where("sid='".$id."'");
    $select->where("show=1");
    $select->where("name not like 'server_%'"); // do we even need this statement?  We don't have any servers in our db
    $select->order(array('order'));

    $stmt	 = $select->query();
    $result	 = $stmt->fetchAll();

    foreach($result as $value)
	$variables[$value['name']]	= $value['value'];

    $content	.= "<h1>Module Setup</h1>";
    $content	.= "<table>";
    $content	.= "<tr><td>Number</td><td>".$id."</td>";

    foreach($result as $variable) {
	$content	.= '<tr><td>'.$variable['description'].'</td><td>';
	switch($variable['description']) {
	    case "Input Type" :
		$content	.='<select size="1" id="variable_'.$variable['svid'].'" value=\''.$variable['value'].'\' onchange="validate(this.id, this.value,\''.$variable['type'].'\', {\'content_type\': \'JSON\', \'preloader\': \'preloader_s\', \'onUpdate\': function(response,xmlhttp){make_update(\'variable_'.$variable['svid'].'\',response)}});">';
		foreach($input_modules as $input_module) $content .= '<option '.($variable['value'] == $input_module ? 'selected' : '').'>'.$input_module.'</option>';
		$content	.='</select>';
		break;
	    case "Visualization Type" :
		$content	.='<select size="1" id="variable_'.$variable['svid'].'" value=\''.$variable['value'].'\' onchange="validate(this.id, this.value,\''.$variable['type'].'\', {\'content_type\': \'JSON\', \'preloader\': \'preloader_s\', \'onUpdate\': function(response,xmlhttp){make_update(\'variable_'.$variable['svid'].'\',response)}});">';
		foreach($viz_modules as $viz_module) $content .= '<option '.($variable['value'] == $viz_module ? 'selected' : '').'>'.$viz_module.'</option>';
		$content	.='</select>';
		break;
	    case "Processing Type" :
		$content	.='<select size="1" id="variable_'.$variable['svid'].'" value=\''.$variable['value'].'\' onchange="validate(this.id, this.value,\''.$variable['type'].'\', {\'content_type\': \'JSON\', \'preloader\': \'preloader_s\', \'onUpdate\': function(response,xmlhttp){make_update(\'variable_'.$variable['svid'].'\',response)}});">';
		foreach($processing_modules as $processing_module)
		    $content	.= '<option '.($variable['value'] == $processing_module ? 'selected' : '').'>'.$processing_module.'</option>';
		$content	.='</select>';
		$content	.= '<input type ="button" value="Add Processing Type" height=15 width=15 onclick="addprocessingmodule('.$variable['svid'].','. $id .')">';
		break;
	    case "Name":
		$content	.= '<INPUT CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" TYPE=text SIZE=8 id="variable_'.$variable['svid'].'" value=\''.$variable['value'].'\' onkeyup="$(\'node_'.$id.'\').childNodes[0].innerHTML = $(\'variable_'.$variable['svid'].'\').value;" onchange="validate(this.id, this.value,\''.$variable['type'].'\', {\'content_type\': \'JSON\', \'preloader\': \'preloader_s\', \'onUpdate\': function(response,xmlhttp){make_update(\'variable_'.$variable['svid'].'\',response)}});">';
		break;
	    case "Options":
		$content	.= '<INPUT CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" TYPE=text SIZE=8 id="variable_'.$variable['svid'].'" value=\''.$variable['value'].'\' onchange="alert(\'validate\');validate(this.id, this.value,\'option\', {\'content_type\': \'JSON\', \'preloader\': \'preloader_s\', \'onUpdate\': function(response,xmlhttp){make_update(\'variable_'.$variable['svid'].'\',response)}});">';
		$content	.= '<input type ="button" value="+" height=15 width=15 onclick="openOptions('.$variable['svid'].','. $id .')">';
		break;
	    default:
		$content	.= '<INPUT CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" TYPE=text SIZE=8 id="variable_'.$variable['svid'].'" value=\''.$variable['value'].'\' onchange="validate(this.id, this.value,\''.$variable['type'].'\', {\'content_type\': \'JSON\', \'preloader\': \'preloader_s\', \'onUpdate\': function(response,xmlhttp){make_update(\'variable_'.$variable['svid'].'\',response)}});">';
	}
	$content	.= '</td></tr>';
    }

    $content	.= "</table>";

    $content	.= "<h1>Dependencies</h1>";
    unset($variable);

    $content	.= "<table>";
    $sql 	 = "select * from ".$schema."station_variables where (sid='".$id."') and (name like 'connect%');";
    $result	 = $db->fetchAll($sql);
    foreach($result as $variable) {
	if($variable['name']=='connect') $content .= '<tr><td class="link" colspan="2" onClick="removeLink('.$variable['svid'].','.$id.','.$variable['value'].');" onmouseover="this.style.cursor=\'pointer\';">Remove link to module '.$variable['value'].'</td></tr>';
	else $content .= '<tr><td>'.$variable['description'].'</td><td> <INPUT CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" TYPE=text SIZE=8 id="variable_'.$variable['svid'].'" value="'.$variable['value'].'" onchange="validate(this.id, this.value,\''.$variable['type'].'\', {\'content_type\': \'JSON\', \'preloader\': \'preloader_s\', \'onUpdate\': function(response,xmlhttp){make_update(\'variable_'.$variable['svid'].'\',response)}});"></td></tr>';
    }
    $content	.= "</table>";
    $content	.= "<h1>Functions</h1>";
    $content	.= "<p class=\"link\" onClick=\"removeStation(".$id.");\" onmouseover=\"this.style.cursor='pointer';\">Remove module</p>";

    return($content);
}

function save_coordinates($id, $value)
{
    $value = trim($value,'[]');
    $xy		 = explode(',',$value);
    global $db;
    global $schema;

    $columns['value']	 = $xy[0];

    $where[0]	 = '"sid"='.$id;
    $where[1]	 = 'name=\'x\'';

    $db->update($schema."station_variables",$columns,$where);

    $where[1]	 = 'name=\'y\'';
    $columns['value']	 = $xy[1];
    $db->update($schema."station_variables",$columns,$where);
}

function create_link($from_id, $to_id)
{
	$from	= explode('_',$from_id);
	$to		= explode('_',$to_id);
	
	global $db;
	global $schema;

	$insert['name']			= "connect";
	$insert['type']			= "integer";
	$insert['value']		= $to[1];
	$insert['sid']			= $from[1];
	$insert['description']	= "Link to module";
	$insert['show']			= 2;
	$insert['order']		= 0;
	
	$db->insert($schema.'station_variables', $insert);
	$lid				= $db->lastInsertId($schema.'station_variables','svid');
	$result['id']		= $lid;
	$result['from_id']	= $from[1];
	$result['to_id']	= $to[1];

	return($result);
}

function get_links() {
	global $db;
	global $schema;
	$sql="select ".$schema."station_variables.svid as id, ".$schema."station.sid as from_id, ".$schema."station_variables.value as to_id from ".$schema."station join ".$schema."station_variables on ".$schema."station.sid=".$schema."station_variables.sid where (".$schema."station_variables.name like 'connect') order by ".$schema."station.sid, ".$schema."station_variables.name";
	$result			= $db->fetchAll($sql);
	return($result);
}

function get_inter_process_updates() {
	global $db;
	global $schema;

	$sql="delete from inter_process where timestamp < now()::timestamp without time zone - interval '100 seconds'";
	$result	= $db->fetchAll($sql);
	
	if(!isset($_SESSION['timestamp'])) $_SESSION['timestamp']	= '2009-07-22 09:09:15.549657';
	$sql="select function as fun, timestamp, name, value, svid, sid from ".$schema."inter_process where (timestamp>'".$_SESSION['timestamp']."')";
	$result			= $db->fetchAll($sql);
	if(count($result)>0) $_SESSION['timestamp']	= $result[count($result)-1]['timestamp'];
	
	return($result);
}


function delete_file($filePath){
    unlink($filePath);
}

function add_processing_module($name) {

}

?>

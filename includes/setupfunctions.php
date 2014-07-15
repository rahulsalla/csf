<?
session_start();
require_once("Zend/Db.php");
require_once("config.php");
require_once("PHPLiveX.php");

require_once("types/integer.php");
require_once("types/float.php");
require_once("types/checkbox.php");
require_once("types/dropdown.php");
require_once("types/dropdowntable.php");
require_once("viz/dynamic.php");

$ajax = new PHPLiveX(array("validate_integer","validate_float","validate_checkbox","validate_dropdown","validate_dropdowntable","check_change_php","place_input", "place_viz","write_coordinates"));
$ajax->Run(true,'../'.$configuration['phplivex_path'].'/phplivex.js'); 

function start_dashboard()
{
	echo '<html><head>		<script src="'.$configuration['prototype_path'].'/prototype.js" type="text/javascript"></script>
		<script src="'.$configuration['scriptaculous_path'].'/scriptaculous.js" type="text/javascript"></script></head><body id="mainelement">';
}

function stop_dashboard()
{
	echo '</body></html>';
}


function put_javascript()
{
	 echo '';
}

#get all the inputs
function get_inputs($db)
{
	# get inputs
	$sql = 'select * from station_variables;';
	$result = $db->fetchAll($sql);
	
	foreach($result as $value)
	{
		$data1[$value['sid']][$value['name']]	= $value['value'];
	}
	foreach($data1 as $value)
	{
		if($value['moduletype']=='input')
		{
			$data[$value['name']]	= $value['value'];
		}
	}
	return($data);
}

function write_coordinates($dashboard, $x, $y, $xid, $yid, $show)
{
	global $db;
	$sql	= "select value from station_variables where svid='".$xid."'";
	$result	= $db->fetchAll($sql);
	$xvalue	= $result[0]['value'];
	$sql	= "select value from station_variables where svid='".$yid."'";
	$result	= $db->fetchAll($sql);
	$yvalue	= $result[0]['value'];
	
	$xvalue	= explode(',',$xvalue);
	$yvalue	= explode(',',$yvalue);
	$show	= explode(',',$show);
	foreach($show as $key => $value)
	{
		if($value==$dashboard)
		{
			$xvalue[$key]	= $x;
			$yvalue[$key]	= $y;
		}
	}
	$x	= implode(',',$xvalue);
	$y	= implode(',',$yvalue);

	$columns['value']	= $x;
	$db->update("station_variables",$columns, '"svid"=\''.$xid.'\'');
	
	$columns['value']	= $y;
	$db->update("station_variables",$columns, '"svid"=\''.$yid.'\'');
}

function place_vizs()
{
	global $db;
	global $dashboard;

	$sql="select now()::timestamp without time zone as timestamp";
	$result					= $db->fetchAll($sql);
	$_SESSION['timestamp']	= $result[0]['timestamp'];

	
	$sql="select ".$schema."station.sid as sid, ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station join ".$schema."station_variables on ".$schema."station.sid=".$schema."station_variables.sid where ".$schema."station.name='New Visualization' and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype') order by ".$schema."station.sid, ".$schema."station_variables.name";
	$result			= $db->fetchAll($sql);
	
	foreach($result as $variable)
	{
		$inputs[$variable['sid']][$variable['name']] = $variable['value'];
		$ids[$variable['sid']][$variable['name']] 	 = $variable['svid'];
	}
		
	foreach ($inputs as $key => $value)
		if (!in_array($dashboard,explode(',',$value['show']))) unset($inputs[$key]);
		else
		{
			$key1	= array_search($dashboard, explode(',',$value['show']));
			$x		= explode(',',$value['xc']);
			$y		= explode(',',$value['yc']);
			if(isset($x[$key1])) $inputs[$key]['xc']	= $x[$key1];
			if(isset($y[$key1])) $inputs[$key]['yc']	= $y[$key1];
		}

	foreach($inputs as $key => $value)
	{
		switch($value['type']):
			case "dynamic":
				place_viz_dynamic($key, $value['xc'], $value['yc'], $value['options']);
				break;
		endswitch;
		echo '<div id="elementmove'.$key.'" onmouseout="$(\'elementinfo'.$key.'\').style.display = \'none\';" onmouseover="$(\'elementinfo'.$key.'\').style.display = \'\'" style="z-index:1000; border: 1px solid red; position:absolute; top:'.($value['yc']).'; left:'.($value['xc']).'; width:5; height:5;"></div>';
		echo '<div id="elementinfo'.$key.'" style="display: none; position:absolute; top:0; left:0;">'.$value['name'].'</div>';
		echo "<script>new Draggable('elementmove".$key."',{snap: [5, 5], change:function() { $('velement".$key."').style.left=$('elementmove".$key."').style.left;$('velement".$key."').style.top=$('elementmove".$key."').style.top;}, onEnd:function() {write_coordinates(".$dashboard.",$('elementmove".$key."').style.left, $('elementmove".$key."').style.top,'".$ids[$key]['xc']."','".$ids[$key]['yc']."', '".$value['show']."',{} );}});</script>";
	}
}

function place_viz($dashboard, $sid)
{
	global $db;

	$sql="select ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station_variables where ".$schema."station_variables.sid='".$sid."' and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='value' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype')";
	$result			= $db->fetchAll($sql);

	foreach($result as $variable)
		$value[$variable['name']] = $variable['value'];
	
	if (in_array($dashboard,explode(',',$value['show'])))
	{
		$key1	= array_search($dashboard, explode(',',$value['show']));
		$x		= explode(',',$value['xc']);
		$y		= explode(',',$value['yc']);
		if(isset($x[$key1])) $value['xc']	= $x[$key1];
		if(isset($y[$key1])) $value['yc']	= $y[$key1];
	}
	
	switch($value['type']):
		case "dynamic":
			$content = reload_viz_dynamic($sid, $value['xc'], $value['yc'], $value['options']);
			break;
	endswitch;
	return $content;	
}


function place_inputs()
{
	global $db;
	global $dashboard;
	
	$sql="select now()::timestamp without time zone as timestamp";
	$result					= $db->fetchAll($sql);
	$_SESSION['timestamp']	= $result[0]['timestamp'];

	$sql="select ".$schema."station.sid as sid, ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station join ".$schema."station_variables on ".$schema."station.sid=".$schema."station_variables.sid where ".$schema."station.name='New Input' and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='value' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype') order by ".$schema."station.sid, ".$schema."station_variables.name";
	$result			= $db->fetchAll($sql);
	
	foreach($result as $variable)
	{
		$inputs[$variable['sid']][$variable['name']] = $variable['value'];
		$ids[$variable['sid']][$variable['name']] 	 = $variable['svid'];
	}
	foreach ($inputs as $key => $value)
		if (!in_array($dashboard,explode(',',$value['show']))) unset($inputs[$key]);
		else
		{
			$key1	= array_search($dashboard, explode(',',$value['show']));
			$x		= explode(',',$value['xc']);
			$y		= explode(',',$value['yc']);
			if(isset($x[$key1])) $inputs[$key]['xc']	= $x[$key1];
			if(isset($y[$key1])) $inputs[$key]['yc']	= $y[$key1];
		}
		
	foreach($inputs as $key => $value)
	{
		switch($value['type']):
			case "integer":
				place_input_integer($ids[$key]['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$key);
				break;
			case "float":
				place_input_float($ids[$key]['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$key);
				break;
			case "checkbox":
				place_input_checkbox($ids[$key]['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$key);
				break;
			case "dropdown":
				place_input_dropdown($ids[$key]['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$key);
				break;
			case "dropdowntable":
				place_input_dropdowntable($ids[$key]['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$key);
				break;
		endswitch;
		echo '<div id="elementmove'.$key.'" onmouseout="$(\'elementinfo'.$key.'\').style.display = \'none\';" onmouseover="$(\'elementinfo'.$key.'\').style.display = \'\'" style="z-index:1000; border: 1px solid red; position:absolute; top:'.($value['yc']).'; left:'.($value['xc']).'; width:5; height:5;"></div>';
		echo '<div id="elementinfo'.$key.'" style="display: none; position:absolute; top:0; left:0;">'.$value['name'].'</div>';
		echo "<script>new Draggable('elementmove".$key."',{snap: [5, 5], change:function() { $('element".$ids[$key]['value']."').style.left=$('elementmove".$key."').style.left;$('element".$ids[$key]['value']."').style.top=$('elementmove".$key."').style.top;}, onEnd:function() {write_coordinates(".$dashboard.",$('elementmove".$key."').style.left, $('elementmove".$key."').style.top,'".$ids[$key]['xc']."','".$ids[$key]['yc']."', '".$value['show']."',{} );}});</script>";
	}
}

function place_input($dashboard, $sid)
{
	global $db;

	$sql="select ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station_variables where ".$schema."station_variables.sid='".$sid."' and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='value' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype')";
	$result			= $db->fetchAll($sql);

	foreach($result as $variable)
	{
		$value[$variable['name']] = $variable['value'];
		$key[$variable['name']]   = $variable['svid'];
	}
	
		if (in_array($dashboard,explode(',',$value['show'])))
		{
			$key1	= array_search($dashboard, explode(',',$value['show']));
			$x		= explode(',',$value['xc']);
			$y		= explode(',',$value['yc']);
			if(isset($x[$key1])) $value['xc']	= $x[$key1];
			if(isset($y[$key1])) $value['yc']	= $y[$key1];
		}
		
		switch($value['type']):
			case "integer":
				$content = reload_input_integer($key['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$sid);
				break;
			case "float":
				$content = reload_input_float($key['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$sid);
				break;
			case "checkbox":
				$content = reload_input_checkbox($key['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$sid);
				break;
			case "dropdown":
				$content = reload_input_dropdown($key['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$sid);
				break;
			case "dropdowntable":
				$content = reload_input_dropdowntable($key['value'],$value['value'],$value['xc'],$value['yc'],$value['options'],$sid);
				break;
		endswitch;
	return $content;	
}

function check_change_php()
{
	global $db;
	global $schema;

	$sql="delete from inter_process where timestamp < now()::timestamp without time zone - interval '20 seconds'";
	$result					= $db->fetchAll($sql);
	
	if(!isset($_SESSION['timestamp']))
	{
		$sql="select now()::timestamp without time zone as timestamp";
		$result					= $db->fetchAll($sql);
		$_SESSION['timestamp']	= $result[0]['timestamp'];
	}
	$sql="select function as fun, sid, svid, value, timestamp from ".$schema."inter_process where (timestamp>'".$_SESSION['timestamp']."') and ((name='value') or (function='reload')) order by timestamp";
	$result			= $db->fetchAll($sql);
	foreach($result as $key => $value)
	{
		if($value['fun']=='reload')
		{
			if(isset($data[$value['sid']])) unset($result[$data[$value['sid']]]);
			$data[$value['sid']]=$key;
		}
		if($value['fun']=='update')
		{
			if(isset($data1[$value['sid']])) unset($result[$data1[$value['sid']]]);
			$data1[$value['sid']]=$key;
		}
	}
	$result			= array_values($result);
	$last_element	= end($result);
	$timestamp		= $last_element['timestamp'];
	if(isset($timestamp)) $_SESSION['timestamp']	= $result[count($result)-1]['timestamp'];
	if(count($result)>0) return($result);
	else return(false);
}
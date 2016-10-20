<?
function getsetup_input_text()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';

	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Please select the x coordinate';
	$options[10]['detail']				= 'This sets the x coordinate to place the element on the dashboard.';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[10]['default']				= '10';
	$options[10]['optional']			= 'no';
	$options[10]['repeatable']			= 'no';
	$options[10]['perdashboard']		= 'yes';
	$options[10]['dependenton']			= '';

	$options[20]['name']				= 'y';
	$options[20]['description']			= 'Please select the y coordinate';
	$options[20]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[20]['type']				= 'Integer';
	$options[20]['link']				= 'link to further information..?';
	$options[20]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[20]['default']				= '10';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';
	
	$options[30]['name']				= 'width';
	$options[30]['description']			= 'Field width';
	$options[30]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[30]['default']				= '100px';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';
	
	$options[50]['name']				= 'valuefield';
	$options[50]['description']			= 'Select this column';
	$options[50]['detail']				= 'This is column that has the value to read';
	$options[50]['type']				= 'Text';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'no';
	$options[50]['dependenton']			= '';

	$options[55]['name']				= 'tablename';
	$options[55]['description']			= 'From this table';
	$options[55]['detail']				= 'This is the table name';
	$options[55]['type']				= 'Table';
	$options[55]['link']				= 'link to further information..?';
	$options[55]['lookup']				= ''; 
	$options[55]['default']				= '';
	$options[55]['optional']			= 'no';
	$options[55]['repeatable']			= 'no';
	$options[55]['perdashboard']		= 'no';
	$options[55]['dependenton']			= '';
	
	$options[60]['name']				= 'queryfield';
	$options[60]['description']			= 'Where column value';
	$options[60]['detail']				= 'This is column that has the value to query';
	$options[60]['type']				= 'Text';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= '';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'no';
	$options[60]['dependenton']			= '';

	$options[70]['name']				= 'idnumber';
	$options[70]['description']			= 'Equals this value';
	$options[70]['detail']				= 'This is the id that you are looking for';
	$options[70]['type']				= 'Integer';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']				= '';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'no';
	$options[70]['dependenton']			= '';	
	
	$options[320]['name']				= 'height';
	$options[320]['description']			= 'Field height (if left blank, the field will be as high as the text)';
	$options[320]['detail']				= 'Default: 20';
	$options[320]['type']				= 'Integer';
	$options[320]['link']				= 'link to further information..?';
	$options[320]['lookup']				= ''; 
	$options[320]['default']				= '20px';
	$options[320]['optional']			= 'no';
	$options[320]['repeatable']			= 'no';
	$options[320]['perdashboard']		= 'yes';
	$options[320]['dependenton']			= '';
	
	$options[290]['name']				= 'loadingHighlightColor';
	$options[290]['description']		= 'Color of the highlight box that is shown when a module is loading';
	$options[290]['detail']				= 'This is the color of the highlight box that is shown when a module is loading. Default: red';
	$options[290]['type']				= 'Color';
	$options[290]['link']				= 'link to further information..?';
	$options[290]['lookup']				= ''; 
	$options[290]['default']			= 'red';
	$options[290]['optional']			= 'no';
	$options[290]['repeatable']			= 'no';
	$options[290]['perdashboard']		= 'yes';
	$options[290]['dependenton']		= '';
	
	$options[300]['name']				= 'loadingHighlightThickness';
	$options[300]['description']		= 'Thickness of the highlight box that is shown when a module is loading (in pixels)';
	$options[300]['detail']				= 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
	$options[300]['type']				= 'Text';
	$options[300]['link']				= 'link to further information..?';
	$options[300]['lookup']				= ''; 
	$options[300]['default']			= '2';
	$options[300]['optional']			= 'no';
	$options[300]['repeatable']			= 'no';
	$options[300]['perdashboard']		= 'yes';
	$options[300]['dependenton']		= '';
	
	return($options);
}

function validate_text($id, $value)
{  
	//value == the changed input text
	//id==sid
	//echo "<script type='text/javascript'>alert('$value')</script>";
	global $db;

	$select = $db->select();
	$columns['value']	= $value;
	
	//svid==sid????
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');

	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;
}



function place_input_text($sid, $value, $options, $setup)	//function place_input_text($name, $value, $x, $y, $options, $sid)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	echo '<div id="cover'.$sid.'">';
	echo '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:20; top:'.($dashboard_options['y']+3).'px; left:'.($dashboard_options['x']+4).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	echo '</div>';
	echo reload_input_text($sid, $value, $options, $setup);
	echo '</div>';
	
	//echo "<script type='text/javascript'>alert('$sid')</script>";
	//echo $sid;
	

		  
	echo '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
				function update'.$sid.'(dashboard, response)
				{
					place_input(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function reload'.$sid.'(dashboard, response)
				{
					place_input(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
				}
				function reload_update'.$sid.'(response)
				{	document.getElementById("cover'.$sid.'").innerHTML = response;
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				}
			</script>';
}

function reload_input_text($sid, $value, $options, $setup)	//function reload_input_text($name, $value, $x, $y, $options, $sid)
{
	global $db;
	//echo "<script type='text/javascript'>alert('$sid')</script>";	
	$dashboard_options = $options['dashboard_options'];
	
	if(isset($options['tablename']) and ($options['tablename']!='') and isset($options['valuefield']) and ($options['valuefield']!='') and isset($options['queryfield']) and ($options['queryfield']!='') and isset($options['idnumber']) and ($options['idnumber']!='') )
	{
		$sql = "select ".$options['valuefield']." as value from ".$options['tablename']." where \"".$options['queryfield']."\" = '".$options['idnumber']."'";
		$result	= $db->fetchAll($sql);
		#var_dump($result);
		$value = $result[0]['value'];
	}
		$content = '<div id="element'.$sid.'" style="z-index:2; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:150; height:10;">
			<INPUT CLASS=SmallInput STYLE="text-align: left; width:'.$dashboard_options['width'].'px;height:'.$dashboard_options['height'].'px; margin-left: 4px; margin-top: 4px;" TYPE=text SIZE=10 id="'.$setup['value_svid'].'" value="'.$value.'" onchange="validate_text(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
			</div>';
	
	return($content);
}
function text_rtrn_default_value($sid, $options)
{
	global $db;
	if(isset($options['tablename']) and ($options['tablename']!='') and isset($options['valuefield']) and ($options['valuefield']!='') and isset($options['queryfield']) and ($options['queryfield']!='') and isset($options['idnumber']) and ($options['idnumber']!='') )
	{
		$sql = "select ".$options['valuefield']." as value from ".$options['tablename']." where \"".$options['queryfield']."\" = '".$options['idnumber']."'";
		$result	= $db->fetchAll($sql);
		#var_dump($result);
		$sql	= 'update station_variables set value=\''.$result[0]['value'].'\' where sid='.$sid.' and name=\'value\';';
		$result	= $db->fetchAll($sql);
	}
}

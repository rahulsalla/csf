<?
function getsetup_input_checkboxtable()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION']		= 'This module will create a checkbox input. The once the checkbox is triggered the generated values are yes and no.';

	$options[0]['name']					= 'css';
	$options[0]['description']			= 'Please select the CSS';
	$options[0]['detail']				= 'This is the css number that influences the layout';
	$options[0]['type']					= 'Integer';
	$options[0]['link']					= 'link to further information..?';
	$options[0]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[0]['default']				= '001';
	$options[0]['optional']				= 'no';
	$options[0]['perdashboard']			= 'yes';
	$options[0]['dependenton']			= '';
	
	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Please select the x coordinate';
	$options[10]['detail']				= 'This sets the x coordinate to place the element on the dashboard.';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= '';
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
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '10';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';

	
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

function validate_checkboxtable($id, $value)
{  
	global $db;
	if($value=="yes") $value="no";
	else $value="yes";

	$select = $db->select();
	$columns['value']	= $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;  
} 

function place_input_checkboxtable($sid, $value, $options, $setup)
{

	$dashboard_options = $options['dashboard_options'];
	if ($dashboard_options['loadingHighlightThickness']>6)
		$dashboard_options['loadingHighlightThickness']==6;
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	echo '<div id="cover'.$sid.'">';
	
	//echo '<div id="celement'.$sid.'" style="position:absolute;z-index:10000; top:'.($dashboard_options['y']+3).'px; left:'.($dashboard_options['x']+4).'px; width:'.(13-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.(13-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	echo '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:20; top:'.($dashboard_options['y']+3).'px; left:'.($dashboard_options['x']+4).'px; width:'.(13-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.(13-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	echo '</div>';
	echo reload_input_checkboxtable($sid, $value, $options, $setup);
	echo '</div>';
	
	
		  
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
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				}
			</script>';
}

function reload_input_checkboxtable($sid, $value, $options, $setup)
{
global $send;
	$dashboard_options = $options['dashboard_options'];
	if($value=='yes') $val='CHECKED';
	else $val='';
	$content = '<div id="element'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:20; height:20;">
			<INPUT CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" TYPE="checkbox" SIZE=3 '.$val.' id="'.$setup['value_svid'].'" value="'.$value.'" onchange="validate_checkboxtable(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
                  </div>';
	return($content);
}

function checkboxtable_rtrn_default_value($sid, $options)
{
  	
}

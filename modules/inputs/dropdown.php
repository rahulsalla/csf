<?
function getsetup_input_dropdown()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION']		= 'This module will create a dropdown input. It will take a list of values that are used to generate the dropdown. Once the dropdown is selected the generated value is the selected value of the list.';

	$options[0]['name']					= 'css';
	$options[0]['description']			= 'Please select the CSS';
	$options[0]['detail']				= 'This is the css number that influences the layout';
	$options[0]['type']					= 'Integer';
	$options[0]['link']					= 'link to further information..?';
	$options[0]['lookup']				= ''; 
	$options[0]['default']				= '';
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
	
	$options[40]['name']			= 'dropdown_values';
	$options[40]['description']	= 'Please enter the values to appear in the dropdown box. Seperate each item with a | character.';
	$options[40]['detail']		= 'This is the list of values that will show up in the dropdown box.';
	$options[40]['type']			= 'Text';
	$options[40]['link']			= 'link to further information..?';
	$options[40]['lookup']		= ''; 
	$options[40]['default']		= '';
	$options[40]['optional']		= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']	= 'no';
	$options[40]['dependenton']	= '';
	
		
	$options[50]['name']				= 'width';
	$options[50]['description']			= 'Field width (if left blank, the field will be as wide as the text)';
	$options[50]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[50]['type']				= 'Integer';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[50]['default']				= '100';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';
	
	$options[60]['name']				= 'height';
	$options[60]['description']			= 'Field height (if left blank, the field will be as high as the text)';
	$options[60]['detail']				= 'Default: 20';
	$options[60]['type']				= 'Integer';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= '20';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'yes';
	$options[60]['dependenton']			= '';
	
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
function validate_dropdown($id, $value)
{  
	global $db;

	$select = $db->select();
	$columns['value']	= $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;  
} 

function place_input_dropdown($sid, $value, $options, $setup)
{

	$dashboard_options = $options['dashboard_options'];
	
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	echo '<div id="cover'.$sid.'">';
	echo '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	echo '</div>';
	echo '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:20; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	echo '</div>';
	echo reload_input_dropdown($sid, $value, $options, $setup);
	echo '</div>';
	

	
	
		echo '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
				function update'.$sid.'(dashboard, response)
				{
					make_update(response.svid, response.value);
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

function reload_input_dropdown($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	//var_dump($options);
	$list = explode('|',$options['dropdown_values']);
	//echo "<script type='text/javascript'>alert(this.id)</script>";
	//echo $options."<br>";
	//var_dump($list);
	if ($dashboard_options['height']=='' && $dashboard_options['width']=='')
	{
		$content = '<div id="element'.$sid.'" style="z-index:2; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:150; height:10;">
			<select CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$value.'" onchange="validate_dropdown(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
			';
	}
	else
	{
		$content = '<div id="element'.$sid.'" style="z-index:2; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';width:'.($dashboard_options['width']).';height:'.($dashboard_options['height']).';">
			<select CLASS=SmallInput STYLE="text-align: left; width:'.($dashboard_options['width']).';height:'.($dashboard_options['height']).'; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$value.'" onchange="validate_dropdown(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
			';
	}
	foreach($list as $item)
	{
		$content .= '<option';
		if($item==$value) $content .= ' selected';
		$content .= '>'.$item.'</option>';
	}
	
	$content .= '</select>
	</div>';
	return($content);
}
function dropdown_rtrn_default_value($sid, $options)
{

}

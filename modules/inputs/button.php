<?
function getsetup_input_button()
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
	
	$options[30]['name']				= 'buttonName';
	$options[30]['description']			= 'Please enter the name of the button';
	$options[30]['detail']				= 'This sets the button name.';
	$options[30]['type']				= 'Text';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[30]['default']				= 'Default';
	$options[30]['optional']			= 'yes';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';
	
	$options[40]['name']				= 'width';
	$options[40]['description']			= 'Field width (if left blank, the field will be as wide as the text)';
	$options[40]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[40]['default']				= '100';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';
	
	$options[50]['name']				= 'height';
	$options[50]['description']			= 'Field height (if left blank, the field will be as high as the text)';
	$options[50]['detail']				= 'Default: 25';
	$options[50]['type']				= 'Integer';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '25';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';

	$options[90]['name']				= 'cssstyle';
	$options[90]['description']			= 'Direct CSS style';
	$options[90]['detail']				= 'Enter a direct CSS style tag, to modify the text properties';
	$options[90]['type']				= 'Text';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= ''; 
	$options[90]['default']				= '';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']			= 'yes';
	$options[90]['dependenton']			= '';

	$options[100]['name']				= 'link';
	$options[100]['description']			= 'Please enter the url ';
	$options[100]['detail']				= 'This sets the link to a different webpage.';
	$options[100]['type']				= 'Text';
	$options[100]['link']				= 'link to further information..?';
	$options[100]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[100]['default']				= '';
	$options[100]['optional']			= 'no';
	$options[100]['repeatable']			= 'no';
	$options[100]['perdashboard']		= 'no';
	$options[100]['dependenton']			= '';

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

function validate_button($id, $value)
{  
	global $db;
	
	$select = $db->select();
	$columns['value'] = $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;  
} 

function place_input_button($sid, $value, $options, $setup)
{	
	$dashboard_options = $options['dashboard_options'];

	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	$str = '<div id="cover'.$sid.'">';
#	$str .= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; border:\'5px green\'top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str .= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';

#	$str .= '<div id="celement'.$sid.'" style="position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str .= '</div>';
	$str .= reload_input_button($sid, $value, $options, $setup);
	$str .= '</div>';
	
		  
	$str .= '	<script language="JavaScript" type="text/javascript">
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
					//document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'\';
				}
				function reload_update'.$sid.'(response)
				{	
					
					document.getElementById("cover'.$sid.'").innerHTML = response;
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					//document.getElementById("celement'.$sid.'").style.border=\'none\';	
				}
			</script>';
	$str .= '</div>';

    return($str);
}

function reload_input_button($sid, $value, $options, $setup)
{	
	$dashboard_options = $options['dashboard_options'];
	if (isset($dashboard_options['buttonName']) and (!isset($value) or ($value=='')))
	{
		$value=$dashboard_options['buttonName'];
	}

	if(!isset($dashboard_options['height']) or !isset($dashboard_options['width']) or ($dashboard_options['height']=='') or ( $dashboard_options['width']==''))
	{
		$content = '<div id="element'.$sid.'" style="z-index:0; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
			<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['cssstyle']).'" TYPE="button" SIZE=3 id="'.$setup['value_svid'].'" value="'.$value.'" onclick="validate_button(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){';
		if(isset($options['link']) and ($options['link']!=''))
	 	    $content .= 'window.location.href=\''.$options['link'].'\';';
		$content .= '}});">
			</div>';
	}
	else
	{
		$content = '<div id="element'.$sid.'" style="z-index:0; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
			<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['cssstyle']).';width:'.$dashboard_options['width'].'px;height:'.$dashboard_options['height'].'px;" TYPE="button" SIZE=3 id="'.$setup['value_svid'].'" value="'.$value.'" onclick="validate_button(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){';
		if(isset($options['link']) and ($options['link']!=''))
	 	    $content .= 'window.location.href=\''.$options['link'].'\';';
		$content .= '}});">
			</div>';
	}
	return($content);
	
}

function button_rtrn_default_value($sid, $options)
{
}

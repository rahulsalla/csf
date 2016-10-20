<?
function getsetup_input_image()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle.';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';

	$options[0]['name']			= 'css';
	$options[0]['description']	= 'Please write css style commands';
	$options[0]['detail']		= 'These are regular css commands that influece the layout of this button.';
	$options[0]['type']			= 'Text';
	$options[0]['link']			= 'link to further information..?';
	$options[0]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
	$options[0]['default']		= 'width:100;';
	$options[0]['optional']		= 'no';
	$options[0]['perdashboard']	= 'yes';
	$options[0]['dependenton']	= '';
	
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
	
	$options[30]['name']				= 'image';
	$options[30]['description']			= 'Please enter the href if the image';
	$options[30]['detail']				= 'This sets the link to the image.';
	$options[30]['type']				= 'Text';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[30]['default']				= '';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'no';
	$options[30]['dependenton']			= '';
	
	$options[40]['name']				= 'link';
	$options[40]['description']			= 'Please enter the url ';
	$options[40]['detail']				= 'This sets the link to a different webpage.';
	$options[40]['type']				= 'Text';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[40]['default']				= '';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'no';
	$options[40]['dependenton']			= '';

	return($options);
}

function validate_image($id, $value)
{  
	global $db;

	$select = $db->select();
	$columns['value'] = $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;  
} 

function place_input_image($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];

	echo '<div id="cover'.$sid.'">';
	echo reload_input_image($sid, $value, $options, $setup);
	echo '</div>';
	
		  
	echo '	<script language="JavaScript" type="text/javascript">
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
					document.getElementById("'.$setup['value_svid'].'").style.border=\'1px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
				}
			</script>';
}

function reload_input_image($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	 $content = '<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">';
	 $content .= '<INPUT STYLE="'.($dashboard_options['css']).'" TYPE="image" src="'.$options['image'].'" id="'.$setup['value_svid'].'" value="'.$value.'" onclick="validate_image(this.id, 1, {\'onUpdate\': function(response,xmlhttp){';
	 if(isset($options['link']) and ($options['link']!=''))
	 	$content .= 'window.location.href=\''.$options['link'].'\'';

	 $content .= '}});">';
	 $content .= ' </div>';
	return($content);
}

function image_rtrn_default_value($sid, $options)
{
}

<?php
function getsetup_input_integer()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a>.<br>';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';

	$options[0]['name']					= 'css';
	$options[0]['description']			= 'Please set the style';
	$options[0]['detail']				= 'This is the css number that influences the layout';
 	$options[0]['type']					= 'Text';
	$options[0]['link']					= 'link to further information..?';
	$options[0]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[0]['default']				= '';
	$options[0]['optional']				= 'yes';
	$options[0]['perdashboard']			= 'yes';
	$options[0]['dependenton']			= '';
	
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

	return($options);
}

function validate_integer($id, $value)
{  
	global $db;

	$value=intval($value);

	$select = $db->select();
	$columns['value']	= $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');

	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;
}



function place_input_integer($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];	
	
	echo '<div id="cover'.$sid.'">';
	echo reload_input_integer($sid, $value, $options, $setup);
	echo '</div>';
	

		  
		  //make sure dashboard is passed in here(check map for example)
		  //also make sure at the top of this file, we have all setup information
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

function reload_input_integer($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	  $content = '<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
			<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['css']).'text-align: left; padding-left: 5px" TYPE=text  id="'.$setup['value_svid'].'" value="'.$value.'" onchange="validate_integer(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
		  </div>';
	return($content);
}
function integer_rtrn_default_value($sid, $options)
{

}
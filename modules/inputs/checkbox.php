<?
function getsetup_input_checkbox()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a>.<br>';
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
	
	
	
	return($options);
}

function validate_checkbox($id, $value)
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

function place_input_checkbox($sid, $value, $options, $setup)
{

	$dashboard_options = $options['dashboard_options'];
	echo '<div id="cover'.$sid.'">';
	echo reload_input_checkbox($sid, $value, $options, $setup);
	echo '</div>';
	
	
		  
	echo '	<script language="JavaScript" type="text/javascript">
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
					document.getElementById("element'.$setup['value_svid'].'").style.border=\'1px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
				}
			</script>';
}

function reload_input_checkbox($sid, $value, $options, $setup)
{

	$dashboard_options = $options['dashboard_options'];
	//Problem here?? --Jaycen (undefined variable when unchecked)
	if($value=='yes') $val='CHECKED';
	else $val='';
	
	$content = '<div id="element'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:20; height:20;">
			<INPUT CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" TYPE="checkbox" SIZE=3 '.$val.' id="'.$setup['value_svid'].'" value="'.$value.'" onchange="validate_checkbox(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
		  </div>';
	return($content);
}

function checkbox_rtrn_default_value($sid, $options)
{
  	
}
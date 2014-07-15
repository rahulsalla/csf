<?
function getsetup_input_text()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a>.<br>';
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
	//workflow_input($result[0]['sid']);
	
	return $value;
}



function place_input_text($sid, $value, $options, $setup)	//function place_input_text($name, $value, $x, $y, $options, $sid)
{
	echo '<div id="cover'.$sid.'">';
	echo reload_input_text($sid, $value, $options, $setup);
	echo '</div>';
	
	//echo "<script type='text/javascript'>alert('$sid')</script>";
	//echo $sid;
	

		  
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
					document.getElementById("'.$setup['value_svid'].'").style.border=\'1px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
				}
			</script>';
}

function reload_input_text($sid, $value, $options, $setup)	//function reload_input_text($name, $value, $x, $y, $options, $sid)
{
	global $db;
	//echo "<script type='text/javascript'>alert('$sid')</script>";
	
	$dashboard_options = $options['dashboard_options'];
	$content = '<div id="element'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:150; height:10;">
			<INPUT CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" TYPE=text SIZE=10 id="'.$setup['value_svid'].'" value="'.$value.'" onchange="validate_text(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
		  </div>';
	return($content);
}
function text_rtrn_default_value($sid, $options)
{

}

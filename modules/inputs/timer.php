<?php
function getsetup_input_timer()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle.';
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
	$options[10]['perdashboard']			= 'yes';
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
	$options[20]['perdashboard']			= 'yes';
	$options[20]['dependenton']			= '';

	$options[30]['name']				= 'updatedelay';
	$options[30]['description']			= 'Please select the time to trigger updates in seconds';
	$options[30]['detail']				= 'This sets the trigger in seconds. Please make sure this value is large enough.';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[30]['default']				= '100';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'no';
	$options[30]['dependenton']			= '';

	return($options);
}

function validate_timer($id, $value) {
	global $db;

	$result = $db->fetchAll('select value, sid from station_variables where "svid"=\''.$id.'\'');

	if($result[0]['value']+$value<=time())
	{
	    $value=time();

	    $select = $db->select();
	    $columns['value']	= $value;

	    $db->update("station_variables",$columns,'"svid"=\''.$id.'\'');

	    workflow_input($result[0]['sid']);
	}
}

function place_input_timer($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];

	echo '<div id="cover'.$sid.'">';
	echo reload_input_timer($sid, $value, $options, $setup);
	echo '</div>';
	echo '	<script language="JavaScript" type="text/javascript">

				new PeriodicalExecuter(function(pe){validate_timer('.$setup['value_svid'].','.$options['updatedelay'].',{})},'.$options['updatedelay'].');

	
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

function reload_input_timer($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	  $content = '<div id="element'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; "></div>';
	return($content);
}

function timer_rtrn_default_value($sid, $options)
{
}
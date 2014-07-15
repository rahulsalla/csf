<?
function getsetup_viz_text()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a>.<br>';
	$options['_MODULEDESCRIPTION']		= 'Any column format is accepted. You will have to specify the value of the column.';
	
	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Placement x coordinate';
	$options[10]['detail']				= 'Default: 10';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= ''; 
	$options[10]['default']				= '10';
	$options[10]['optional']			= 'no';
	$options[10]['repeatable']			= 'no';
	$options[10]['perdashboard']		= 'yes';
	$options[10]['dependenton']			= '';

	$options[20]['name']				= 'y';
	$options[20]['description']			= 'Placement y coordinate';
	$options[20]['detail']				= 'Default: 10';
	$options[20]['type']				= 'Integer';
	$options[20]['link']				= 'link to further information..?';
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '10';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';

	$options[30]['name']				= 'css';
	$options[30]['description']			= 'Please select the CSS';
	$options[30]['detail']				= 'This is the css number that influences the layout. Default: 001';
	$options[30]['type']				= 'Text';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '001';
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
	$options[55]['type']				= 'Text';
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
	
	$options[80]['name']				= 'test';
	$options[80]['description']			= 'test';
	$options[80]['detail']				= 'This is the id that you are looking for';
	$options[80]['type']				= 'Text';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'yes';
	$options[80]['dependenton']			= '';		
	
	

	return($options);
}

function place_viz_text($sid, $value, $options, $setup)
{
	echo '<div id="cover'.$sid.'">';
	echo reload_viz_text($sid, $value, $options, $setup);
	echo '</div>';
	
	echo '	<script language="JavaScript" type="text/javascript">
				function reload'.$sid.'(dashboard, response)
				{
					place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("elementm'.$sid.'").style.borderLeft=\'2px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
				}
			</script>';
}

function reload_viz_text($sid, $value, $options, $setup)
#function reload_viz_text($sid, $value, $options)
{
	global $db;
	$dashboard_options = $options['dashboard_options'];
#	echo "test";
	$content = '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:480px; height: 20px;"><div id="text'.$dashboard_options['css'].'" style="margin:0px; padding:0px;"><p id="elementm'.$sid.'" style="margin:0px; padding:0px;">';
	if(isset($options['tablename']) and ($options['tablename']!=''))
	{
		$sql = "select ".$options['valuefield']." as value from ".$options['tablename']." where \"".$options['queryfield']."\" = '".$options['idnumber']."'";
		$result	= $db->fetchAll($sql);
		$content .= str_replace('#',$result[0]['value'],$value);
	}
	else
	{
		$content .= $value;
	}
	//$content .= '-'.$setup['dashboard'];
	
	$content .= '</p></div></div>';
	
	 
	  
	
	
	return($content);
}

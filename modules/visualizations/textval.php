<?
function getsetup_viz_textval()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle.';
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
	$options[30]['default']				= 'not used';
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

	$options[71]['name']				= 'lookupinputmodulesid';
	$options[71]['description']			= 'Lookup from this Input';
	$options[71]['detail']				= 'This is the lookupinputmodulename';
	$options[71]['type']				= 'InputModule';
	$options[71]['link']				= 'link to further information..?';
	$options[71]['lookup']				= ''; 
	$options[71]['default']				= '';
	$options[71]['optional']			= 'no';
	$options[71]['repeatable']			= 'no';
	$options[71]['perdashboard']			= 'no';
	$options[71]['dependenton']			= '';

	$options[73]['name']				= 'lookupidcolumnname';
	$options[73]['description']			= 'From this lookup-id-column';
	$options[73]['detail']				= 'This is the lookup-id-column name';
	$options[73]['type']				= 'Text';
	$options[73]['link']				= 'link to further information..?';
	$options[73]['lookup']				= ''; 
	$options[73]['default']				= '';
	$options[73]['optional']			= 'no';
	$options[73]['repeatable']			= 'no';
	$options[73]['perdashboard']			= 'no';
	$options[73]['dependenton']			= '';

	$options[75]['name']				= 'lookuptablename';
	$options[75]['description']			= 'From this lookup-table';
	$options[75]['detail']				= 'This is the lookup-table name';
	$options[75]['type']				= 'Table';
	$options[75]['link']				= 'link to further information..?';
	$options[75]['lookup']				= ''; 
	$options[75]['default']				= '';
	$options[75]['optional']			= 'no';
	$options[75]['repeatable']			= 'no';
	$options[75]['perdashboard']			= 'no';
	$options[75]['dependenton']			= '';

	$options[85]['name']				= 'lookupcolumnname';
	$options[85]['description']			= 'From this lookup-column';
	$options[85]['detail']				= 'This is the lookup-column name';
	$options[85]['type']				= 'Text';
	$options[85]['link']				= 'link to further information..?';
	$options[85]['lookup']				= ''; 
	$options[85]['default']				= '';
	$options[85]['optional']			= 'no';
	$options[85]['repeatable']			= 'no';
	$options[85]['perdashboard']			= 'no';
	$options[85]['dependenton']			= '';

	$options[90]['name']				= 'cssstyle';
	$options[90]['description']			= 'Direct CSS style';
	$options[90]['detail']				= 'Enter a direct CSS style tag, to modify the text properties';
	$options[90]['type']				= 'Text';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= ''; 
	$options[90]['default']				= 'color:black;font-size:32px;font-family:Arial, Helvetica, sans-serif;';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']			= 'yes';
	$options[90]['dependenton']			= '';

	$options[100]['name']				= 'zindex';
	$options[100]['description']			= 'Z-Index';
	$options[100]['detail']				= 'Enter a number representing the order of elements on the dashboard';
	$options[100]['type']				= 'Integer';
	$options[100]['link']				= 'link to further information..?';
	$options[100]['lookup']				= ''; 
	$options[100]['default']			= '100';
	$options[100]['optional']			= 'no';
	$options[100]['repeatable']			= 'no';
	$options[100]['perdashboard']			= 'yes';
	$options[100]['dependenton']			= '';

	return($options);
}

function place_viz_textval($sid, $value, $options, $setup)
{	$str='';
	$str.= '<div id="cover'.$sid.'">';
	$str.= reload_viz_textval($sid, $value, $options, $setup);
	$str.= '</div>';
	
	$str.= '	<script language="JavaScript" type="text/javascript">
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
		return($str);
}

function reload_viz_textval($sid, $value, $options, $setup)
#function reload_viz_textval($sid, $value, $options)
{
	global $db;
	$dashboard_options = $options['dashboard_options'];
#	echo "test";
	if(!isset($dashboard_options['zindex'])) $dashboard_options['zindex']=100;
	$content = '<div id="velement'.$sid.'" style="z-index:'.$dashboard_options['zindex'].';position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';"><div id="text'.$dashboard_options['css'].'" style="'.$dashboard_options['cssstyle'].'"><p id="elementm'.$sid.'" style="margin:0px; padding:0px;">';
	if(isset($options['tablename']) and ($options['tablename']!=''))
	{
		$sql = "select \"".$options['valuefield']."\" as value from ".$options['tablename']." where \"".$options['queryfield']."\" = '".$options['idnumber']."'";
		if(isset($options['lookuptablename']) and ($options['lookuptablename']!='')) 
		    $sql= "select \"".$options['valuefield']."\" as value from ".$options['tablename']." where \"".$options['queryfield'].'"::text =(select '.$options['lookupcolumnname'].' from '.$options['lookuptablename']." where ".$options['lookupsearchcolumnname']."=".$options['lookupsearchvalue'].')::text;';
		if(isset($options['lookupinputmodulesid']) and ($options['lookupinputmodulesid']!=''))
		    $sql="select \"".$options['valuefield']."\" as value from ".$options['tablename']." where \"".$options['queryfield']."\"::text =(select value from station_variables where (name='value') and (sid=".$options['lookupinputmodulesid']."))::text;";



		$result	= $db->fetchAll($sql);
		
		// Changed by Shrijal
		// Format the number first and then send	
		$number = $result[0]['value'];
		$formatted_number = number_format(floatval($result[0]['value']));
		$replace_string = str_replace('#',$formatted_number,$value);
		$content .= $replace_string;




		//$content .= number_format(floatval(str_replace('#',$result[0]['value'],$value)));
	}
	else
	{
		$content .= number_format(floatval($value));
	}
	//$content .= '-'.$setup['dashboard'];
	
	$content .= '</p></div></div>';
		
	return($content);
}

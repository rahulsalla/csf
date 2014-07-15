<?php

function getsetup_input_dropdowntable()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a>.<br>';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';

	$options[0]['name']			= 'css';
	$options[0]['description']	= 'Please select the CSS';
	$options[0]['detail']		= 'This is the css number that influences the layout';
	$options[0]['type']			= 'Integer';
	$options[0]['link']			= 'link to further information..?';
	$options[0]['lookup']		= ''; 
	$options[0]['default']		= '001';
	$options[0]['optional']		= 'no';
	$options[0]['perdashboard']	= 'yes';
	$options[0]['dependenton']	= '';
	
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

	$options[45]['name']				= 'tablename';
	$options[45]['description']			= 'From this table';
	$options[45]['detail']				= 'This is the table name';
	$options[45]['type']				= 'Text';
	$options[45]['link']				= 'link to further information..?';
	$options[45]['lookup']				= ''; 
	$options[45]['default']				= '';
	$options[45]['optional']			= 'no';
	$options[45]['repeatable']			= 'no';
	$options[45]['perdashboard']			= 'no';
	$options[45]['dependenton']			= '';
	
	$options[55]['name']				= 'columnname';
	$options[55]['description']			= 'From this column';
	$options[55]['detail']				= 'This is the column name';
	$options[55]['type']				= 'Text';
	$options[55]['link']				= 'link to further information..?';
	$options[55]['lookup']				= ''; 
	$options[55]['default']				= '';
	$options[55]['optional']			= 'no';
	$options[55]['repeatable']			= 'no';
	$options[55]['perdashboard']			= 'no';
	$options[55]['dependenton']			= '';

	$options[65]['name']				= 'idcolumnname';
	$options[65]['description']			= 'From this id-column';
	$options[65]['detail']				= 'This is the id-column name';
	$options[65]['type']				= 'Text';
	$options[65]['link']				= 'link to further information..?';
	$options[65]['lookup']				= ''; 
	$options[65]['default']				= '';
	$options[65]['optional']			= 'no';
	$options[65]['repeatable']			= 'no';
	$options[65]['perdashboard']			= 'no';
	$options[65]['dependenton']			= '';
	
	$options[70]['name']				= 'lookupidcolumnname';
	$options[70]['description']			= 'From this lookup-id-column';
	$options[70]['detail']				= 'This is the lookup-id-column name';
	$options[70]['type']				= 'Text';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']				= '';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']			= 'no';
	$options[70]['dependenton']			= '';

	$options[75]['name']				= 'lookuptablename';
	$options[75]['description']			= 'From this lookup-table';
	$options[75]['detail']				= 'This is the lookup-table name';
	$options[75]['type']				= 'Text';
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

	$options[105]['name']				= 'lookupsearchcolumnname';
	$options[105]['description']			= 'From this lookup-search-column';
	$options[105]['detail']				= 'This is the lookup-search-column name';
	$options[105]['type']				= 'Text';
	$options[105]['link']				= 'link to further information..?';
	$options[105]['lookup']				= ''; 
	$options[105]['default']				= '';
	$options[105]['optional']			= 'no';
	$options[105]['repeatable']			= 'no';
	$options[105]['perdashboard']			= 'no';
	$options[105]['dependenton']			= '';

	$options[115]['name']				= 'lookupsearchvalue';
	$options[115]['description']			= 'From this lookup-search-value';
	$options[115]['detail']				= 'This is the lookup-search-value name';
	$options[115]['type']				= 'Text';
	$options[115]['link']				= 'link to further information..?';
	$options[115]['lookup']				= ''; 
	$options[115]['default']				= '';
	$options[115]['optional']			= 'no';
	$options[115]['repeatable']			= 'no';
	$options[115]['perdashboard']			= 'no';
	$options[115]['dependenton']			= '';


	return($options);
}

//This function passes in $id and value
//id==svid
function validate_dropdowntable($id, $value)
{  

	//echo "<script type='text/javascript'>alert('$id')</script>";
	global $db;

	$select = $db->select();

	
	//The following updates the column 'value' with the changed dropdown option's value 
	$columns['value']	= $value;
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');

	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	//$result[0]['sid'] == sid
	workflow_input($result[0]['sid']);
	
	return $value;  
}

function place_input_dropdowntable($sid, $value, $options, $setup)
{

	echo '<div id="cover'.$sid.'">';
	echo reload_input_dropdowntable($sid, $value, $options, $setup);
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
					document.getElementById("'.$setup['value_svid'].'").style.border=\'1px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
				}
			</script>';
}

function reload_input_dropdowntable($sid, $value, $options, $setup)
{	

/*Still some problems here	*/
	//echo "<script type='text/javascript'>alert('reload')</script>";
	global $db;
	$content = '';
	$dashboard_options = $options['dashboard_options'];	
	if($options['lookuptablename']!='') 
		//replicate this query in return_default_value
		$sql='select '.$options['columnname'].','.$options['idcolumnname'].' from '.$options['tablename'].' where '.$options['lookupidcolumnname'].'::text=(select '.$options['lookupcolumnname'].' from '.$options['lookuptablename']." where ".$options['lookupsearchcolumnname']."=".$options['lookupsearchvalue'].')::text;';
	else $sql='select '.$options['columnname'].','.$options['idcolumnname'].' from '.$options['tablename'];
	
	$content = '<div id="element'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:150; height:10;">
		<select CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$value.'" onchange="validate_dropdowntable(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
	';

	$result			= $db->fetchAll($sql);
	$selected		= false;
	foreach($result as $item)
	{
		$content .= '<option value="'.$item[$options['idcolumnname']].'"';
		if($item[$options['idcolumnname']]==$value)
		{
			$content .= ' selected';
			$selected = true;
		}
		$content .= '>'.$item[$options['columnname']].'</option>';
	}

	$content .= '</select>
	</div>';
	
	if($selected==false)
	{
		validate_dropdowntable($setup['value_svid'], $result[0][$options['idcolumnname']]);
		#$columns['value']	= $result[0][$options['idcolumnname']];
		#$db->update("station_variables",$columns,'"svid"=\''.$setup['value_svid'].'\'');
	}

		


	return($content);

}


//rtrn_default_value is a function that returns a default value. This function is used to allow workflow to operate properly even if there are missing active dashboards.
//The function accepts the paramter id (used to specify which module to update), and value (taken from the modules relational "value" property).
function dropdowntable_rtrn_default_value($sid, $options)
{
  	//Specify the database to connect to
	//use to find default value
	global $db;
	//read database, find default value

	if($options['lookuptablename']!='') {
		$sql	='select '.$options['columnname'].','.$options['idcolumnname'].' from '.$options['tablename'].' where '.$options['lookupidcolumnname'].'::text=(select '.$options['lookupcolumnname'].' from '.$options['lookuptablename']." where ".$options['lookupsearchcolumnname']."=".$options['lookupsearchvalue'].')::text;';
		$result	= $db->fetchAll($sql);

		$sql	= 'update station_variables set value=\''.$result[0][$options['idcolumnname']].'\' where sid='.$sid.' and name=\'value\';';
		$result	= $db->fetchAll($sql);
	}
	else {
		$sql	='select '.$options['columnname'].','.$options['idcolumnname'].' from '.$options['tablename'].' limit 1';
		$result	= $db->fetchAll($sql);

		$sql	= 'update station_variables set value=\''.$result[0][$options['idcolumnname']].'\' where sid='.$sid.' and name=\'value\';';
		$result	= $db->fetchAll($sql);
	}
}


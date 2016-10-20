<?php

function getsetup_input_dropdowntable()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';

	$options[0]['name']			= 'css';
	$options[0]['description']		= 'Please select the CSS';
	$options[0]['detail']			= 'This is the css number that influences the layout';
	$options[0]['type']			= 'Integer';
	$options[0]['link']			= 'link to further information..?';
	$options[0]['lookup']			= ''; 
	$options[0]['default']			= '';
	$options[0]['optional']			= 'no';
	$options[0]['perdashboard']		= 'yes';
	$options[0]['dependenton']		= '';

	$options[5]['name']			= 'style';
	$options[5]['description']		= 'Direct CSS style';
	$options[5]['detail']			= 'Enter direct CSS style tags to modify the select properties';
	$options[5]['type']			= 'Text';
	$options[5]['link']			= 'link to further information..?';
	$options[5]['lookup']			= ''; 
	$options[5]['default']			= '';
	$options[5]['optional']			= 'yes';
	$options[5]['perdashboard']		= 'yes';
	$options[5]['dependenton']		= '';
	
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
	$options[45]['type']				= 'Table';
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

	$options[68]['name']				= 'lookupinputmodulesid';
	$options[68]['description']			= 'Lookup from this Input';
	$options[68]['detail']				= 'This is the lookupinputmodulename';
	$options[68]['type']				= 'InputModule';
	$options[68]['link']				= 'link to further information..?';
	$options[68]['lookup']				= ''; 
	$options[68]['default']				= '';
	$options[68]['optional']			= 'no';
	$options[68]['repeatable']			= 'no';
	$options[68]['perdashboard']			= 'no';
	$options[68]['dependenton']			= '';

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

	$options[290]['name']				= 'loadingHighlightColor';
	$options[290]['description']		= 'Color of the highlight box that is shown when a module is loading';
	$options[290]['detail']				= 'This is the color of the highlight box that is shown when a module is loading. Default: red';
	$options[290]['type']				= 'Color';
	$options[290]['link']				= 'link to further information..?';
	$options[290]['lookup']				= ''; 
	$options[290]['default']			= 'FF0000';
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
	
	$options[310]['name']				= 'width';
	$options[310]['description']			= 'Field width (if left blank, the field will be as wide as the text)';
	$options[310]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[310]['type']				= 'Integer';
	$options[310]['link']				= 'link to further information..?';
	$options[310]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[310]['default']				= '100';
	$options[310]['optional']			= 'no';
	$options[310]['repeatable']			= 'no';
	$options[310]['perdashboard']		= 'yes';
	$options[310]['dependenton']			= '';
	
	$options[320]['name']				= 'height';
	$options[320]['description']			= 'Field height (if left blank, the field will be as high as the text)';
	$options[320]['detail']				= 'Default: 20';
	$options[320]['type']				= 'Integer';
	$options[320]['link']				= 'link to further information..?';
	$options[320]['lookup']				= ''; 
	$options[320]['default']				= '20';
	$options[320]['optional']			= 'no';
	$options[320]['repeatable']			= 'no';
	$options[320]['perdashboard']		= 'yes';
	$options[320]['dependenton']			= '';

	$options[400]['name']				= 'zindex';
	$options[400]['description']			= 'Z-Index';
	$options[400]['detail']				= 'Enter a number representing the order of elements on the dashboard';
	$options[400]['type']				= 'Integer';
	$options[400]['link']				= 'link to further information..?';
	$options[400]['lookup']				= ''; 
	$options[400]['default']			= '100';
	$options[400]['optional']			= 'no';
	$options[400]['repeatable']			= 'no';
	$options[400]['perdashboard']			= 'yes';
	$options[400]['dependenton']			= '';


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
	$dashboard_options = $options['dashboard_options'];
	if(!isset($dashboard_options['zindex'])) $dashboard_options['zindex']=100;
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);

    $str  = '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].'px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:'.($dashboard_options['zindex']+2).'; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str .= '</div>';
	$str .= '<div id="cover'.$sid.'">';
	$str .= reload_input_dropdowntable($sid, $value, $options, $setup);
	$str .= '</div>';
	
	
	
		$str .= '	<script language="JavaScript" type="text/javascript">
//				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
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
					document.getElementById("celement'.$sid.'").style.visibility="visible";
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
					document.getElementById("celement'.$sid.'").style.width=(document.getElementById("element'.$sid.'").firstElementChild.offsetWidth-('.($dashboard_options["loadingHighlightThickness"] * 2).'))+"px";
					document.getElementById("celement'.$sid.'").style.height=(document.getElementById("element'.$sid.'").firstElementChild.offsetHeight-('.($dashboard_options["loadingHighlightThickness"] * 2).'))+"px";
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				}
			</script>';
	return($str);
}

function reload_input_dropdowntable($sid, $value, $options, $setup)
{	

/*Still some problems here	*/
	//echo "<script type='text/javascript'>alert('reload')</script>";
	global $db;
	$content = '';
	$dashboard_options = $options['dashboard_options'];
	if(!isset($dashboard_options['zindex'])) $dashboard_options['zindex']=100;
	$sql='select "'.$options['columnname'].'","'.$options['idcolumnname'].'" from "'.$options['tablename'].'"';
	if($options['lookuptablename']!='') 
		$sql='select "'.$options['columnname'].'","'.$options['idcolumnname'].'" from "'.$options['tablename'].'" where "'.$options['lookupidcolumnname'].'"::text=(select "'.$options['lookupcolumnname'].'" from "'.$options['lookuptablename']."\" where \"".$options['lookupsearchcolumnname']."\"=".$options['lookupsearchvalue'].')::text;';
	if($options['lookupinputmodulesid']!='')
		$sql='select "'.$options['columnname'].'","'.$options['idcolumnname'].'" from "'.$options['tablename'].'" where "'.$options['lookupidcolumnname']."\"::text=(select value from station_variables where (name='value') and (sid=".$options['lookupinputmodulesid']."))::text;";
		$content .= '<div id="celement'.$sid.'" style="visibility:hidden; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute; z-index:'.($dashboard_options['zindex']+2).';  width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
		$content .=  '</div>';
		
	if ($dashboard_options['height']=='' && $dashboard_options['width']=='')
	{
		$content .= '<div id="element'.$sid.'" style="z-index:'.$dashboard_options['zindex'].';position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';width:'.($dashboard_options['width']).';height:'.($dashboard_options['height']).';">
			<select CLASS=SmallInput STYLE="text-align: left; width:'.($dashboard_options['width']).';height:'.($dashboard_options['height']).'; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$value.'" onchange="validate_dropdown(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
			';
	}
	else
	{
		$content .= '<div id="element'.$sid.'" style="z-index:'.$dashboard_options['zindex'].';position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';width:'.($dashboard_options['width']).';height:'.($dashboard_options['height']).';">
			<select CLASS=SmallInput STYLE="'.($dashboard_options['style']).';text-align: left; width:'.($dashboard_options['width']).';height:'.($dashboard_options['height']).'; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$value.'" onchange="validate_dropdown(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response);}});">
			';
	}

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
		if(isset($result[0][$options['idcolumnname']]))
		    validate_dropdowntable($setup['value_svid'], $result[0][$options['idcolumnname']]);
		else
		    validate_dropdowntable($setup['value_svid'], '');
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

	$sql	= 'select value from station_variables where sid='.$sid.' and name=\'value\';';
	$result1 = $db->fetchAll($sql);

	$sql='select "'.$options['columnname'].'","'.$options['idcolumnname'].'" from "'.$options['tablename'].'"';
	if($options['lookuptablename']!='') 
		$sql='select "'.$options['columnname'].'","'.$options['idcolumnname'].'" from "'.$options['tablename'].'" where "'.$options['lookupidcolumnname'].'"::text=(select "'.$options['lookupcolumnname'].'" from "'.$options['lookuptablename']."\" where \"".$options['lookupsearchcolumnname']."\"=".$options['lookupsearchvalue'].')::text;';
	if($options['lookupinputmodulesid']!='')
		$sql='select "'.$options['columnname'].'","'.$options['idcolumnname'].'" from "'.$options['tablename'].'" where "'.$options['lookupidcolumnname']."\"::text=(select value from station_variables where (name='value') and (sid=".$options['lookupinputmodulesid']."))::text;";
#file_put_contents('/var/www/tmp/info','dropdowntable return default value ('.$sid.'): '.$sql."\n",FILE_APPEND);
	$result	= $db->fetchAll($sql);

	$selector = 0;
	foreach($result as $key => $value)
	    if ($value[$options['idcolumnname']]==$result1[0]['value'])
		$selector = $key;


	$sql	= 'update station_variables set value=\''.$result[$selector][$options['idcolumnname']].'\' where sid='.$sid.' and name=\'value\';';
	$result	= $db->fetchAll($sql);
}


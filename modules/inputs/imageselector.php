<?php

function getsetup_input_imageselector()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION']			= 'More info will follow.';

	$options[0]['name']				= 'css';
	$options[0]['description']			= 'Please select the CSS';
	$options[0]['detail']				= 'This is the css number that influences the layout';
	$options[0]['type']				= 'Integer';
	$options[0]['link']				= 'link to further information..?';
	$options[0]['lookup']				= ''; 
	$options[0]['default']				= '';
	$options[0]['optional']				= 'no';
	$options[0]['perdashboard']			= 'yes';
	$options[0]['dependenton']			= '';

	$options[5]['name']				= 'style';
	$options[5]['description']			= 'Direct CSS style';
	$options[5]['detail']				= 'Enter direct CSS style tags to modify the select properties';
	$options[5]['type']				= 'Text';
	$options[5]['link']				= 'link to further information..?';
	$options[5]['lookup']				= ''; 
	$options[5]['default']				= '';
	$options[5]['optional']				= 'yes';
	$options[5]['perdashboard']			= 'yes';
	$options[5]['dependenton']			= '';
	
	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Please select the x coordinate';
	$options[10]['detail']				= 'This sets the x coordinate to place the element on the dashboard.';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= '';
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
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '10';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']			= 'yes';
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

	$options[50]['name']				= 'idcolumnname';
	$options[50]['description']			= 'From this id-column';
	$options[50]['detail']				= 'This is the id-column name';
	$options[50]['type']				= 'Text';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']			= 'no';
	$options[50]['dependenton']			= '';

	$options[55]['name']				= 'urlcolumnname';
	$options[55]['description']			= 'From this url column';
	$options[55]['detail']				= 'This is the url column name';
	$options[55]['type']				= 'Text';
	$options[55]['link']				= 'link to further information..?';
	$options[55]['lookup']				= ''; 
	$options[55]['default']				= '';
	$options[55]['optional']			= 'no';
	$options[55]['repeatable']			= 'no';
	$options[55]['perdashboard']			= 'no';
	$options[55]['dependenton']			= '';

	$options[60]['name']				= 'desccolumnname';
	$options[60]['description']			= 'From this description column';
	$options[60]['detail']				= 'This is the column name for the description';
	$options[60]['type']				= 'Text';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= '';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']			= 'no';
	$options[60]['dependenton']			= '';

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
	$options[105]['default']			= '';
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
	$options[115]['default']			= '';
	$options[115]['optional']			= 'no';
	$options[115]['repeatable']			= 'no';
	$options[115]['perdashboard']			= 'no';
	$options[115]['dependenton']			= '';

	$options[290]['name']				= 'loadingHighlightColor';
	$options[290]['description']			= 'Color of the highlight box that is shown when a module is loading';
	$options[290]['detail']				= 'This is the color of the highlight box that is shown when a module is loading. Default: red';
	$options[290]['type']				= 'Color';
	$options[290]['link']				= 'link to further information..?';
	$options[290]['lookup']				= ''; 
	$options[290]['default']			= 'FF0000';
	$options[290]['optional']			= 'no';
	$options[290]['repeatable']			= 'no';
	$options[290]['perdashboard']			= 'yes';
	$options[290]['dependenton']			= '';

	$options[300]['name']				= 'loadingHighlightThickness';
	$options[300]['description']			= 'Thickness of the highlight box that is shown when a module is loading (in pixels)';
	$options[300]['detail']				= 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
	$options[300]['type']				= 'Text';
	$options[300]['link']				= 'link to further information..?';
	$options[300]['lookup']				= ''; 
	$options[300]['default']			= '2';
	$options[300]['optional']			= 'no';
	$options[300]['repeatable']			= 'no';
	$options[300]['perdashboard']			= 'yes';
	$options[300]['dependenton']			= '';
	
	$options[310]['name']				= 'width';
	$options[310]['description']			= 'Overall height of the selector';
	$options[310]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[310]['type']				= 'Integer';
	$options[310]['link']				= 'link to further information..?';
	$options[310]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[310]['default']			= '100';
	$options[310]['optional']			= 'no';
	$options[310]['repeatable']			= 'no';
	$options[310]['perdashboard']			= 'yes';
	$options[310]['dependenton']			= '';

	$options[320]['name']				= 'height';
	$options[320]['description']			= 'Overall height of the selector';
	$options[320]['detail']				= 'Default: 150';
	$options[320]['type']				= 'Integer';
	$options[320]['link']				= 'link to further information..?';
	$options[320]['lookup']				= ''; 
	$options[320]['default']			= '150';
	$options[320]['optional']			= 'no';
	$options[320]['repeatable']			= 'no';
	$options[320]['perdashboard']			= 'yes';
	$options[320]['dependenton']			= '';

	$options[340]['name']				= 'heightadjust';
	$options[340]['description']			= 'Adjust image height';
	$options[340]['detail']				= 'Default: 30';
	$options[340]['type']				= 'Integer';
	$options[340]['link']				= 'link to further information..?';
	$options[340]['lookup']				= ''; 
	$options[340]['default']			= '30';
	$options[340]['optional']			= 'no';
	$options[340]['repeatable']			= 'no';
	$options[340]['perdashboard']			= 'yes';
	$options[340]['dependenton']			= '';

	$options[350]['name']				= 'textsize';
	$options[350]['description']			= 'Text Size';
	$options[350]['detail']				= 'Default: 10';
	$options[350]['type']				= 'Integer';
	$options[350]['link']				= 'link to further information..?';
	$options[350]['lookup']				= ''; 
	$options[350]['default']			= '10';
	$options[350]['optional']			= 'no';
	$options[350]['repeatable']			= 'no';
	$options[350]['perdashboard']			= 'yes';
	$options[350]['dependenton']			= '';

	$options[390]['name']				= 'textColor';
	$options[390]['description']			= 'Color of the text';
	$options[390]['detail']				= 'This is the color of the description text';
	$options[390]['type']				= 'Color';
	$options[390]['link']				= 'link to further information..?';
	$options[390]['lookup']				= ''; 
	$options[390]['default']			= '000000';
	$options[390]['optional']			= 'no';
	$options[390]['repeatable']			= 'no';
	$options[390]['perdashboard']			= 'yes';
	$options[390]['dependenton']			= '';

	$options[490]['name']				= 'selectionColor';
	$options[490]['description']			= 'Color of the selected image';
	$options[490]['detail']				= 'If a image image is selected it gets highlighted with this color.';
	$options[490]['type']				= 'Color';
	$options[490]['link']				= 'link to further information..?';
	$options[490]['lookup']				= ''; 
	$options[490]['default']			= 'BBBBBB';
	$options[490]['optional']			= 'no';
	$options[490]['repeatable']			= 'no';
	$options[490]['perdashboard']			= 'yes';
	$options[490]['dependenton']			= '';

	return($options);
}

function validate_imageselector($id, $value)
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

function place_input_imageselector($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);

        $str  = '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].'px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';

	$str .= '</div>';
	$str .= '<div id="cover'.$sid.'">';
	$str .= reload_input_imageselector($sid, $value, $options, $setup);
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

function reload_input_imageselector($sid, $value, $options, $setup)
{	
	//echo "<script type='text/javascript'>alert('reload')</script>";
	global $db;
	$content = '';
	$dashboard_options = $options['dashboard_options'];
	$sql='select '.$options['desccolumnname'].' as description,'.$options['urlcolumnname'].' as url,'.$options['idcolumnname'].' as id from '.$options['tablename'];
	if($options['lookuptablename']!='') 
		$sql='select '.$options['desccolumnname'].' as description,'.$options['urlcolumnname'].' as url,'.$options['idcolumnname'].' as id  from '.$options['tablename'].' where '.$options['lookupidcolumnname'].'::text=(select '.$options['lookupcolumnname'].' from '.$options['lookuptablename']." where ".$options['lookupsearchcolumnname']."=".$options['lookupsearchvalue'].')::text;';
	if($options['lookupinputmodulesid']!='')
		$sql='select '.$options['desccolumnname'].' as description,'.$options['urlcolumnname'].' as url,'.$options['idcolumnname'].' as id  from '.$options['tablename'].' where '.$options['lookupidcolumnname']."::text=(select value from station_variables where (name='value') and (sid=".$options['lookupinputmodulesid']."))::text;";
		$content .= '<div id="celement'.$sid.'" style="visibility:hidden; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute; z-index:2;  width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
		$content .= '</div>';
		
		$content .= '<div id="element'.$sid.'" style="outline:0;padding:0;margin:0;position:absolute; top:'.($dashboard_options['y']).';left:'.($dashboard_options['x']).';overflow:auto;overflow-y:hidden;width:'.($dashboard_options['width']).';height:'.($dashboard_options['height']).';">
			<ul style="outline:0;padding:0;margin:0;z-index:0;float:left;margin-right:-999em;white-space:nowrap;list-style:none;">
			';

	$result		= $db->fetchAll($sql);
	$selected	= false;
	foreach($result as $item)
	{
		$content .= '<li id="'.$setup['value_svid'].'" onclick="validate_imageselector(this.id, '.$item['id'].', {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});" style="background-color:';
		if($item['id']==$value) $content .= $dashboard_options['selectionColor'];
		else $content .= 'none';
		$content .= ';padding:3px;text-align:center;float:left;display:inline;">';
		$content .= '<div style="text-decoration:none;color:'.($dashboard_options['textColor']).';">';
		$content .= '<img style="border:0;display:block;height:'.($dashboard_options['height']-$dashboard_options['heightadjust']).'px;" src="'.$item['url'].'" alt="">';
		$content .= '<span style="font-size:'.($dashboard_options['textsize']).'px;padding:2px 0 0;display:block;">'.$item['description'].'</span>';
		if($item['id']==$value)
		{
//			$content .= ' selected';
//			$selected = true;
		}
		$content .= '</div></li>';
	}

	$content .= '</ul>
	</div>';
	
	if($selected==false)
	{
//		validate_imageselector($setup['value_svid'], $result[0][$options['idcolumnname']]);
//		$columns['value']	= $result[0][$options['idcolumnname']];
//		$db->update("station_variables",$columns,'"svid"=\''.$setup['value_svid'].'\'');
	}

		


	return($content);

}


//rtrn_default_value is a function that returns a default value. This function is used to allow workflow to operate properly even if there are missing active dashboards.
//The function accepts the paramter id (used to specify which module to update), and value (taken from the modules relational "value" property).
function imageselector_rtrn_default_value($sid, $options)
{
	//Specify the database to connect to
	//use to find default value
	global $db;
	//read database, find default value

	$sql='select '.$options['desccolumnname'].' as description,'.$options['urlcolumnname'].' as url,'.$options['idcolumnname'].' as id from '.$options['tablename'];
	if($options['lookuptablename']!='') 
		$sql='select '.$options['desccolumnname'].' as description,'.$options['urlcolumnname'].' as url,'.$options['idcolumnname'].' as id  from '.$options['tablename'].' where '.$options['lookupidcolumnname'].'::text=(select '.$options['lookupcolumnname'].' from '.$options['lookuptablename']." where ".$options['lookupsearchcolumnname']."=".$options['lookupsearchvalue'].')::text;';
	if($options['lookupinputmodulesid']!='')
		$sql='select '.$options['desccolumnname'].' as description,'.$options['urlcolumnname'].' as url,'.$options['idcolumnname'].' as id  from '.$options['tablename'].' where '.$options['lookupidcolumnname']."::text=(select value from station_variables where (name='value') and (sid=".$options['lookupinputmodulesid']."))::text;";

	$result		= $db->fetchAll($sql);

	$sql	= 'update station_variables set value=\''.$result[0]['id'].'\' where sid='.$sid.' and name=\'value\';';
	$result	= $db->fetchAll($sql);
}


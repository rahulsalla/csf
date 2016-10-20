<?
function getsetup_viz_Table()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION']		= 'Each column must be of the same data type, and all standard visualization data types are supported (string, boolean, number, etc).
	
	For more detailed information, please, refer to <a href="https://developers.google.com/chart/interactive/docs/gallery/table">Google Visualizations Table</a>';

	$options[10]['name']			    = 'x';
	$options[10]['description']			= 'Placement x coordinate';
	$options[10]['detail']				= 'Default: 500';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= ''; 
	$options[10]['default']				= '500';
	$options[10]['optional']			= 'no';
	$options[10]['repeatable']			= 'no';
	$options[10]['perdashboard']		= 'yes';
	$options[10]['dependenton']			= '';

	$options[20]['name']				= 'y';
	$options[20]['description']			= 'Placement y coordinate';
	$options[20]['detail']				= 'Default: 500';
	$options[20]['type']				= 'Integer';
	$options[20]['link']				= 'link to further information..?';
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '500';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';	
	
	$options[30]['name']				= 'fontsize';
	$options[30]['description']			= 'Please select the font size';
	$options[30]['detail']				= 'Default: 15';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '15';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';	
	
	$options[40]['name']				= 'fontName';
	$options[40]['description']			= 'Please select the font type';
	$options[40]['detail']				= 'Default: Verdana';
	$options[40]['type']				= 'Text';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; 
	$options[40]['default']				= 'Verdana';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';	
	
	$options[50]['name']				= 'width';
	$options[50]['description']			= 'Width of the chart';
	$options[50]['detail']				= 'Default: 500';
	$options[50]['type']				= 'Integer';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '500';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';		

	$options[60]['name']				= 'height';
	$options[60]['description']			= 'Height of the chart';
	$options[60]['detail']				= 'Default: 500';
	$options[60]['type']				= 'Integer';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= '500';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'yes';
	$options[60]['dependenton']			= '';	
	
	$options[70]['name']				= 'tablename';
	$options[70]['description']			= 'From this table';
	$options[70]['detail']				= 'This is the table name';
	$options[70]['type']				= 'Table';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']				= '';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'no';
	$options[70]['dependenton']			= '';
	
	$options[80]['name']				= 'showRowNumber';
	$options[80]['description']			= 'Shows the row number as the first column of the table';
	$options[80]['detail']				= 'Select true if you want to see the row numbers as the first column. Default: true';
	$options[80]['type']				= 'Dropdown';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= '|true|false'; 
	$options[80]['default']				= 'true';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']		= '';
	
	$options[90]['name']				= 'firstRowNumber';
	$options[90]['description']		= 'The row number for the first row in the data table';
	$options[90]['detail']				= 'enter the number that will be the first one in the row in the data table. Default: 1';
	$options[90]['type']				= 'Integer';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= ''; 
	$options[90]['default']			= '1';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']		= 'no';
	$options[90]['dependenton']		= '';
	
	$options[100]['name']				= 'sort';
	$options[100]['description']		= 'If and how to sort columns when the user clicks a column heading';
	$options[100]['detail']				= 'Choose one of the following values: enable-click on the header, and it will be sorted automatically, and the rows will be automatically sorted; event-the sort will be triggered,but the rows will not be automatically sorted; disable-clicking on a column header will have no effect.      Default: enable';
	$options[100]['type']				= 'Dropdown';
	$options[100]['link']				= 'link to further information..?';
	$options[100]['lookup']				= 'enable|event|disable'; 
	$options[100]['default']			= 'enable';
	$options[100]['optional']			= 'no';
	$options[100]['repeatable']			= 'no';
	$options[100]['perdashboard']		= 'no';
	$options[100]['dependenton']		= '';
	
	$options[110]['name']				= 'sortAscending';
	$options[110]['description']		= 'the order of which the sort column is sorted';
	$options[110]['detail']				= 'true for ascending; false for descending. Default: true';
	$options[110]['type']				= 'Dropdown';
	$options[110]['link']				= 'link to further information..?';
	$options[110]['lookup']				= 'true|false'; 
	$options[110]['default']			= 'true';
	$options[110]['optional']			= 'yes';
	$options[110]['repeatable']			= 'no';
	$options[110]['perdashboard']		= 'no';
	$options[110]['dependenton']		= '';
	
	$options[120]['name']				= 'sortColumn';
	$options[120]['description']		= 'the index of a column by the table is initially sorted';
	$options[120]['detail']				= 'enter the index of a column. Default: -1';
	$options[120]['type']				= 'Integer';
	$options[120]['link']				= 'link to further information..?';
	$options[120]['lookup']				= ''; 
	$options[120]['default']			= '-1';
	$options[120]['optional']			= 'yes';
	$options[120]['repeatable']			= 'no';
	$options[120]['perdashboard']		= 'no';
	$options[120]['dependenton']		= '';
	
	$options[130]['name']				= 'allowHtml';
	$options[130]['description']		= 'Allows html formatting in the talbe';
	$options[130]['detail']				= 'Select true if you want to allow html formatting. Default: true';
	$options[130]['type']				= 'Dropdown';
	$options[130]['link']				= 'link to further information..?';
	$options[130]['lookup']				= 'true|false'; 
	$options[130]['default']			= 'true';
	$options[130]['optional']			= 'no';
	$options[130]['repeatable']			= 'no';
	$options[130]['perdashboard']		= 'no';
	$options[130]['dependenton']		= '';
	
	$options[290]['name']				= 'loadingHighlightColor';
	$options[290]['description']		= 'Color of the highlight box that is shown when a module is loading';
	$options[290]['detail']				= 'This is the color of the highlight box that is shown when a module is loading. Default: red';
	$options[290]['type']				= 'Color';
	$options[290]['link']				= 'link to further information..?';
	$options[290]['lookup']				= ''; 
	$options[290]['default']			= 'red';
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

        $options[365]['name']                            = 'idcolumnname';
        $options[365]['description']                     = 'From this id-column';
        $options[365]['detail']                          = 'This is the id-column name';
        $options[365]['type']                            = 'Text';
        $options[365]['link']                            = 'link to further information..?';
        $options[365]['lookup']                          = '';
        $options[365]['default']                         = '';
        $options[365]['optional']                        = 'no';
        $options[365]['repeatable']                      = 'no';
        $options[365]['perdashboard']                    = 'no';
        $options[365]['dependenton']                     = '';

        $options[368]['name']                            = 'lookupinputmodulesid';
        $options[368]['description']                     = 'Lookup from this Input';
        $options[368]['detail']                          = 'This is the lookupinputmodulename';
        $options[368]['type']                            = 'InputModule';
        $options[368]['link']                            = 'link to further information..?';
        $options[368]['lookup']                          = '';
        $options[368]['default']                         = '';
        $options[368]['optional']                        = 'no';
        $options[368]['repeatable']                      = 'no';
        $options[368]['perdashboard']                    = 'no';
        $options[368]['dependenton']                     = '';



	return($options);
}

function place_viz_Table($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	$str='';
	$str.= '<div id="cover'.$sid.'">';
	$str.= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str.= '</div>';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str.= '</div>';
	$str.= '</div>';
	
	
	if(isset($options['tablename']))
	{
		$content = '
		<script type="text/javascript">
			var table_chart'.$sid.';
			var data'.$sid.';
			google.load(\'visualization\', \'1\', {\'packages\':[\'table\']});
			google.setOnLoadCallback(drawChart'.$sid.');
			function drawChart'.$sid.'()
			{';
				$content .= reload_viz_Table($sid, $value, $options, $setup);
				$content .= 'table_chart'.$sid.' = new google.visualization.Table(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {';
				$content .= 'fontSize:\''.($dashboard_options['fontsize']).'\','; 
				$content .= 'fontName:\''.($dashboard_options['fontName']).'\',';
				$content .= 'showRowNumber:'.($options['showRowNumber']).',';
				$content .= 'sortAscending:\''.($options['sortAscending']).'\',';
				if($options['sortColumn']!='') $content .= 'sortColumn:'.($options['sortColumn']).',';
				$content .= 'width:'.($dashboard_options['width']).',';
				$content .= 'height:'.($dashboard_options['height']).',';
				$content .= 'allowHtml:'.($options['allowHtml']).',';
				$content .= 'sort:\''.($options['sort']).'\'});
			}
		</script>';
		
        }

	$str.= $content;
	//#$str.= '</div>';
	
	$content = '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
				function reload'.$sid.'(dashboard, response)
				{
					place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
				}
				function reload_update'.$sid.'(response)
				{
					eval(response);';
					$content .= 'table_chart'.$sid.' = new google.visualization.Table(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {';
					$content .= 'fontSize:\''.($dashboard_options['fontsize']).'\','; 
					$content .= 'fontName:\''.($dashboard_options['fontName']).'\',';
					$content .= 'showRowNumber:'.($options['showRowNumber']).',';
					$content .= 'sortAscending:\''.($options['sortAscending']).'\',';
					if($options['sortColumn']!='') $content .= 'sortColumn:'.($options['sortColumn']).',';
					$content .= 'width:'.($dashboard_options['width']).',';
					$content .= 'height:'.($dashboard_options['height']).',';
					$content .= 'allowHtml:'.($options['allowHtml']).',';
					$content .= 'sort:\''.($options['sort']).'\'});';

	$content .=			'document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
						//document.getElementById("velement'.$sid.'").style.border=\'0px none\';
				}
			</script>';
	$str.= $content;
	return($str);
}



function reload_viz_Table($sid, $value, $options, $setup)
{
	global $db;
	
	$dashboard_options = $options['dashboard_options'];
	
	if(false)
	{
		$name_type = explode(',',$options[4]);
		for($i=0; $i<count($name_type); $i++)
		{
			$name_type1[$i] = explode(':',$name_type[$i]);
		}
	}
	else
	{
		$result3 = $db->fetchAll("select column_name from information_schema.columns where table_name ='"  .$options['tablename']."'");
		for($i=0; $i<count($result3); $i++)
		{
			$name_type1[$i][0] = $result3[$i]['column_name'];
			$name_type1[$i][1] = $result3[$i]['column_name'];
			$name_type1[$i][2] = 'string';
		}
	}
	#create sql command to get the data from the table
	$sql = "select ";
	for($i=0; $i<count($name_type1);$i++)
		if($i==0) $sql .= ' "'.$name_type1[$i][0].'"';
		else $sql .= ' ,"'.$name_type1[$i][0].'"';
	$sql .= ' from "'.$options['tablename'].'" where "'.$options['idcolumnname'].'"::text=(select value from station_variables where ("name"=\'value\') and ("sid"=\''.$options['lookupinputmodulesid'].'\'))::text';
	$result	= $db->fetchAll($sql);

	#create string with data embedded into the html page
	
	$content = '
	data'.$sid.' = new google.visualization.DataTable(     {
	cols: [';
	for($i=0; $i<count($name_type1);$i++)
	{
		if($i>0) $content .= ',';
		$content .=	'{id: \''.$name_type1[$i][0].'\', label: \''.$name_type1[$i][1].'\', pattern:\'\' , type: \''.$name_type1[$i][2].'\'}';
	}
    $content .= '],	rows: [';
	$i=0;
	
	foreach($result as $value)
	{
		if($i>0) $content .= ",";
		$content .= "{c:[";
		for($j=0;$j<count($value);$j++)
		{
			if($j>0) $content.=',';
			if($name_type1[$j][2]=="number") $content .=  "{v: ".$value[$name_type1[$j][0]].", f:null}";
			else $content .=  "{v: '".$value[$name_type1[$j][0]]."', f:null}";
		}
		$content .= "]}";
		$i++;
	}
	$content .= '],p:null});';

	return($content);
}

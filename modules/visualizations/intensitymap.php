<?
function getsetup_viz_IntensityMap()
{
	$options['_CREDITS']				= 'Main Developters: Erzhena Soktoeva.';
	$options['_MODULEDESCRIPTION']		= 'Table Format:
	<ul>
	<li>Column 0: string (<a href="http://en.wikipedia.org/wiki/ISO_3166-1">country ISO codes</a> or <a href="http://en.wikipedia.org/wiki/ISO_3166-2:US">USA state codes</a>  )</li>
	<li>Column 1: number</li>
	<li>Column ..</li>
	<li>Column N: number</li>
	</ul>
	
	<p>For more detailed information, please, refer to <a href="https://developers.google.com/chart/interactive/docs/gallery/intensitymap">Google Charts IntensityMap</a> </p>';

	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Placement x coordinate';
	$options[10]['detail']				= 'Default: 100';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= ''; 
	$options[10]['default']				= '100';
	$options[10]['optional']			= 'no';
	$options[10]['repeatable']			= 'no';
	$options[10]['perdashboard']		= 'yes';
	$options[10]['dependenton']			= '';

	$options[20]['name']				= 'y';
	$options[20]['description']			= 'Placement y coordinate';
	$options[20]['detail']				= 'Default: 100';
	$options[20]['type']				= 'Integer';
	$options[20]['link']				= 'link to further information..?';
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '100';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';	
	
	$options[30]['name']				= 'width';
	$options[30]['description']			= 'Width of the chart';
	$options[30]['detail']				= 'Default: 440';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '440';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';		

	$options[40]['name']				= 'height';
	$options[40]['description']			= 'Height of the chart';
	$options[40]['detail']				= 'Default: 220';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; 
	$options[40]['default']				= '220';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';	
	
	$options[50]['name']				= 'region';
	$options[50]['description']			= 'which region will be displayed';
	$options[50]['detail']				= 'Default: usa';
	$options[50]['type']				= 'Dropdown';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= '|world|africa|asia|europe|middle_east|south_america|usa'; 
	$options[50]['default']				= 'usa';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';
	
	$options[60]['name']				= 'showOneTab';
	$options[60]['description']			= 'Determines if all the numeric columns will be used';
	$options[60]['detail']				= 'If set to true, the map will display only one tab, pertaining to the first numeric column. Default: False';
	$options[60]['type']				= 'Dropdown';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= '|true|false'; 
	$options[60]['default']				= 'False';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'yes';
	$options[60]['dependenton']			= '';	
	
	$options[80]['name']				= 'tablename';
	$options[80]['description']			= 'From this table';
	$options[80]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[80]['type']				= 'Table';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';
	
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
	
	return($options);
	
}


function place_viz_IntensityMap($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	
	$content = '';
	
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	$str='';
	$str.= '<div id="cover'.$sid.'">';
	$str.= '<div id="velement'.$sid.'" style="position:absolute;z-index:; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str.= '<div id="aelement'.$sid.'" style="position:absolute;z-index:2;>';
	$str.= '</div>';
	$str.= '</div>';
	$str.= '<div id="celement'.$sid.'" style="position:absolute;z-index:3; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str.= '</div>';
	$str.= '</div>';
	
	if(isset($options['tablename']))
	{
		$content .= '
		<script type="text/javascript">
			var intensity_map'.$sid.';
			var data'.$sid.';
			google.load(\'visualization\', \'1\', {\'packages\':[\'intensitymap\']});
			google.setOnLoadCallback(drawChart'.$sid.');';

		$content .= '
			function drawChart'.$sid.'()
			{';
		$content .= reload_viz_IntensityMap($sid, $value, $options, $setup);
		
		$content .=
		  'intensity_map'.$sid.' = new google.visualization.IntensityMap(document.getElementById(\'aelement'.$sid.'\')).draw(data'.$sid.', 
                 { 
                region:\''.($dashboard_options['region']).'\', 
            	showOneTab:'.($dashboard_options['showOneTab']).', 
                width:'.($dashboard_options['width']).', 
                height:'.($dashboard_options['height']).'});';

		$content .=	'}
		</script>';

}

$str.= $content;
	$str.= '</div>';
	
	$str.= '	<script language="JavaScript" type="text/javascript">
				function reload'.$sid.'(dashboard, response)
				{

					place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'\';
				}
				function reload_update'.$sid.'(response)
				{
					eval(response);
					intensity_map'.$sid.' = new google.visualization.IntensityMap(document.getElementById(\'aelement'.$sid.'\')).draw(data'.$sid.', 
				{
				 region:\''.($dashboard_options['region']).'\', 
            	showOneTab:'.($dashboard_options['showOneTab']).', 
                width:'.($dashboard_options['width']).', 
                height:'.($dashboard_options['height']).'
                });
				document.getElementById("celement'.$sid.'").style.border=\'none\';	
			}
			</script>';
		return($str);
}



function reload_viz_IntensityMap($sid, $value, $options, $setup)
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
		for($i=0; $i<count($result3); $i++) //ERZHENA LAST CHANGE
		
		{
			$name_type1[$i][0] = $result3[$i]['column_name'];
			$name_type1[$i][1] = $result3[$i]['column_name'];
			if($i==0) $name_type1[$i][2] = 'string';
			else  $name_type1[$i][2] = 'number';
		}
	}
	
	
	
	$sql = "select ";
	for($i=0; $i<count($name_type1);$i++)
		if($i==0) $sql .= ' "'.$name_type1[$i][0].'"';
		else $sql .= ' ,"'.$name_type1[$i][0].'"';
	$sql .= ' from "'.$options['tablename'].'"';
	$result	= $db->fetchAll($sql);
	
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
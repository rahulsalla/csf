<?
function getsetup_viz_GeoMap()
{
	$options['_CREDITS']				= 'Main Developers: Erzhena Soktoeva.';
	$options['_MODULEDESCRIPTION']		= '
	<ol>
<li>Table Format 1:</li>
Only when dataMode = "markers". 

<ul>
	<li>Column 1 (REQUIRED): Number (A latitude)</li>
	<li>Column 2 (REQUIRED): Number (A longitude)</li>
	<li>Column 3 (optional, only when Column 4 is used): Number (value displayed when the user hovers over this region)</li>
	<li>Column 4 (optional): String (text displayed when hovering over this region)</li>
</ul>
     
<li>Table Format 2: Address, country name, region name locations, or US metropolitan area codes. Works when dataMode = "markers" or "regions". </li>
    <ul>
    <li>Column 1 (REQUIRED): String (A map location).</li>
    Accepted formats:
    <ul>
       <li>address (example: "1600 Pennsylvania Ave").</li>
        <li>country name (for example, "England" or ISO-3166 code)</li>
        <li><a href="http://en.wikipedia.org/wiki/ISO_3166-2:US">ISO 3166-2:US</a> metropolitan area code.</li>
    </ul>    
    <li>Column 2 (optional, used only when Column 3 is used): Number (numeric value displayed when the user hovers over this region) </li>
    <li>Column 3 (optional): string (text displayed when hovering over this region)</li>
    
    </ol>
    
    For more detailed information, please, refer to <a href="https://developers.google.com/search?q=geomap">Google Visualizations GeoMap</a>';
   
	$options[10]['name']				= 'x';
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
	
	$options[30]['name']				= 'width';
	$options[30]['description']			= 'Width of the chart';
	$options[30]['detail']				= 'Default: 556';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '556px';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';		

	$options[40]['name']				= 'height';
	$options[40]['description']			= 'Height of the chart';
	$options[40]['detail']				= 'Default: 347';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; 
	$options[40]['default']				= '347px';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';	
	
	$options[80]['name']				= 'tablename';
	$options[80]['description']			= 'From this table';
	$options[80]['detail']				= "choose the table you want to graph. refer to the module description for table format";
	$options[80]['type']				= 'Table';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';
	
	$options[90]['name']				= 'region';
	$options[90]['description']			= 'Please select The area you want to display on the map';
	$options[90]['detail']				= 'the options are: world, us_metro, 005 (South America), 013(Central America), 021 (North America), 017 (Central Africa), 015 (Northern Africa), 018 (Southern Africa), 030 (Eastern Asia), 034 (Southern Asia), 035 (Asia/Pacific region), 143 (Central Asia), 145 (Middle east), 151 (Northern Asia), 154 (Northern Europe), 155 (Western Europe), 039 (Southern Europe).         Default: world';
	$options[90]['type']				= 'Dropdown';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= '|world|US_metro|005|013|021|002|017|015|018|030|034|035|143|145|151|154|155|039';
	$options[90]['default']				= 'world';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']		= 'yes';
	$options[90]['dependenton']			= '';	
	
	$options[100]['name']				= 'dataMode';
	$options[100]['description']		= 'choose how to display values on the map';
	$options[100]['detail']				= 'The options are regions or markers. Default: regions';
	$options[100]['type']				= 'Dropdown';
	$options[100]['link']				= 'link to further information..?';
	$options[100]['lookup']				= '|regions|markers';
	$options[100]['default']			= 'regions';
	$options[100]['optional']			= 'no';
	$options[100]['repeatable']			= 'no';
	$options[100]['perdashboard']		= 'yes';
	$options[100]['dependenton']		= '';	
	
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


function place_viz_GeoMap($sid, $value, $options, $setup)
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
	
	$content = '';
	
	if(isset($options['tablename']))
	{
		$content .= '
		<script type="text/javascript">
			var geo_map'.$sid.';
			var data'.$sid.';
			google.load(\'visualization\', \'1\', {\'packages\':[\'geomap\']});
			google.setOnLoadCallback(drawChart'.$sid.');';

		$content .= '
			function drawChart'.$sid.'()
			{';
		$content .= reload_viz_GeoMap($sid, $value, $options, $setup);
		
		$content .=
		  'geo_map'.$sid.' = new google.visualization.GeoMap(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', 
                 { 
                region:\''.($dashboard_options['region']).'\', 
            	dataMode:\''.($dashboard_options['dataMode']).'\', 
                width:\''.($dashboard_options['width']).'\', 
                height:\''.($dashboard_options['height']).'\'});';

		$content .=	'}
		</script>';

}

$str.= $content;
	$str.= '</div>';
	
	$str.= '	<script language="JavaScript" type="text/javascript">
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
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					eval(response);
					geo_map'.$sid.' = new google.visualization.GeoMap(document.getElementById(\'element'.$sid.'\')).draw(data'.$sid.', 
					{
					region:\''.($dashboard_options['region']).'\', 
					dataMode:'.($dashboard_options['dataMode']).', 
					width:\''.($dashboard_options['width']).'\', 
					height:\''.($dashboard_options['height']).'\'
					});
						

			}
			</script>';
		return($str);
}



function reload_viz_GeoMap($sid, $value, $options, $setup)
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
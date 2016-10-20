<?
function getsetup_viz_Gauge()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Rahul Salla, Jaycen Horton, Erzhena Soktoeva.';
	$options['_MODULEDESCRIPTION']		= 'Each numeric value is displayed as a gauge. Two alternative data formats are supported:
	<ol>
	<li>Table Format 1:</li>
	<ul>
	<li>Column 1: String (labels of the gauges)</li>
	<li>Column 2: Number (gauge value)</li></ul>
<li>Table Format 2:</li>
	<ul>
	<li>Column 1...N: Number</li>
	<li>The label of the column is the label of the gauge</li>
		</ol>
	For more detailed information, please, refer to <a href="https://developers.google.com/chart/interactive/docs/gallery/gauge">Google Charts Gauge</a>';
	
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
	
	$options[30]['name']				= 'minorTicks';
	$options[30]['description']			= 'The number of minor tick section in each major tick section, Default: 2';
	$options[30]['detail']				= 'enter the number of minor ticks you want in between the major ticks';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '2';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';	

	$options[50]['name']				= 'width';
	$options[50]['description']			= 'Width of the chart';
	$options[50]['detail']				= 'Default: 600';
	$options[50]['type']				= 'Integer';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '600';
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
	$options[70]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[70]['type']				= 'Table';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']			    = '';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'no';
	$options[70]['dependenton']			= '';
	
	$options[80]['name']				= 'redFrom';
	$options[80]['description']			= 'The lowest value for a range marked by a red color';
	$options[80]['detail']				= 'Enter the number that will be the lowest number marked by red color.';
	$options[80]['type']				= 'Integer';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '0';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'yes';
	$options[80]['dependenton']			= '';

	$options[85]['name']				= 'redTo';
	$options[85]['description']			= 'Enter the number that will serve as the highest value for a range marked by red color';
	$options[85]['detail']				= 'The highest value for a range marked by a red color';
	$options[85]['type']				= 'Integer';
	$options[85]['link']				= 'link to further information..?';
	$options[85]['lookup']				= ''; 
	$options[85]['default']				= '4';
	$options[85]['optional']			= 'no';
	$options[85]['repeatable']			= 'no';
	$options[85]['perdashboard']		= 'yes';
	$options[85]['dependenton']			= '';	
	
	$options[90]['name']				= 'yellowFrom';
	$options[90]['description']			= 'The lowest value for a range marked by a yellow color';
	$options[90]['detail']				= 'Enter the number that will be the lowest number marked by yellow color';
	$options[90]['type']				= 'Integer';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= ''; 
	$options[90]['default']				= '5';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']		= 'yes';
	$options[90]['dependenton']			= '';

	$options[95]['name']				= 'yellowTo';
	$options[95]['description']			= 'Enter the number that will serve as the highest value for a range marked by yellow color';
	$options[95]['detail']				= 'The highest value for a range marked by a yellow color';
	$options[95]['type']				= 'Integer';
	$options[95]['link']				= 'link to further information..?';
	$options[95]['lookup']				= ''; 
	$options[95]['default']				= '10';
	$options[95]['optional']			= 'no';
	$options[95]['repeatable']			= 'no';
	$options[95]['perdashboard']		= 'yes';
	$options[95]['dependenton']			= '';	
	
	$options[100]['name']				= 'greenFrom';
	$options[100]['description']		= 'The lowest value for a range marked by green color';
	$options[100]['detail']				= 'Enter the number that will be the lowest number marked by green color';
	$options[100]['type']				= 'Integer';
	$options[100]['link']				= 'link to further information..?';
	$options[100]['lookup']				= ''; 
	$options[100]['default']			= '11';
	$options[100]['optional']			= 'no';
	$options[100]['repeatable']			= 'no';
	$options[100]['perdashboard']		= 'yes';
	$options[100]['dependenton']		= '';

	$options[105]['name']				= 'greenTo';
	$options[105]['description']		= 'Enter the number that will serve as the highest value for a range marked by green color';
	$options[105]['detail']				= 'The highest value for a range marked by a green color';
	$options[105]['type']				= 'Integer';
	$options[105]['link']				= 'link to further information..?';
	$options[105]['lookup']				= ''; 
	$options[105]['default']			= '100';
	$options[105]['optional']			= 'no';
	$options[105]['repeatable']			= 'no';
	$options[105]['perdashboard']		= 'yes';
	$options[105]['dependenton']		= '';	
	
	$options[110]['name']				= 'min';
	$options[110]['description']		= 'Enter the number that will serve as the lowest value';
	$options[110]['detail']				= 'The lowest value for the overall range';
	$options[110]['type']				= 'Integer';
	$options[110]['link']				= 'link to further information..?';
	$options[110]['lookup']				= ''; 
	$options[110]['default']			= '0';
	$options[110]['optional']			= 'no';
	$options[110]['repeatable']			= 'no';
	$options[110]['perdashboard']		= 'yes';
	$options[110]['dependenton']		= '';

	$options[120]['name']				= 'max';
	$options[120]['description']		= 'Enter the number that will serve as the highest value';
	$options[120]['detail']				= 'The highest value for the overall range';
	$options[120]['type']				= 'Integer';
	$options[120]['link']				= 'link to further information..?';
	$options[120]['lookup']				= ''; 
	$options[120]['default']			= '1000000';
	$options[120]['optional']			= 'no';
	$options[120]['repeatable']			= 'no';
	$options[120]['perdashboard']		= 'yes';
	$options[120]['dependenton']		= '';
	
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

function place_viz_Gauge($sid, $value, $options, $setup)
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
			var gauge'.$sid.';
			var data'.$sid.';
			google.load(\'visualization\', \'1\', {\'packages\':[\'gauge\']});
			google.setOnLoadCallback(drawChart'.$sid.');
			function drawChart'.$sid.'()
			{';
				$content .= reload_viz_Gauge($sid, $value, $options, $setup);
				$content .= ' gauge'.$sid.' = new google.visualization.Gauge(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {width:\''.($dashboard_options['width']).'\', height:\''.($dashboard_options['height']);
				$content .= '\',redFrom:\''.($dashboard_options['redFrom']).'\',redTo:\''.($dashboard_options['redTo']);
				$content .= '\',yellowFrom:\''.($dashboard_options['yellowFrom']).'\',yellowTo:\''.($dashboard_options['yellowTo']);
				$content .= '\',greenFrom:\''.($dashboard_options['greenFrom']).'\',greenTo:\''.($dashboard_options['greenTo']);
				$content .= '\',min:\''.($dashboard_options['min']).'\',max:\''.($dashboard_options['max']);
                $content .= '\',minorTicks:\''.($dashboard_options['minorTicks']).'\'});
			}
		</script>';
		
		

    }

	$str.= $content;
	$str.= '</div>';
	$content ='';
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
					eval(response);
					//gauge'.$sid.' = new google.visualization.Gauge(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.',';
				$content .= reload_viz_Gauge($sid, $value, $options, $setup);
				$content .= ' gauge'.$sid.' = new google.visualization.Gauge(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {width:\''.($dashboard_options['width']).'\', height:\''.($dashboard_options['height']);
				$content .= '\',redFrom:\''.($dashboard_options['redFrom']).'\',redTo:\''.($dashboard_options['redTo']);
				$content .= '\',yellowFrom:\''.($dashboard_options['yellowFrom']).'\',yellowTo:\''.($dashboard_options['yellowTo']);
				$content .= '\',greenFrom:\''.($dashboard_options['greenFrom']).'\',greenTo:\''.($dashboard_options['greenTo']);
				$content .= '\',min:\''.($dashboard_options['min']).'\',max:\''.($dashboard_options['max']);
        		        $content .= '\',minorTicks:\''.($dashboard_options['minorTicks']).'\'});
			//});
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				}
			</script>';
			$str.= $content;
			return($str);
}



function reload_viz_Gauge($sid, $value, $options, $setup)
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
		for($i=0; $i<2; $i++)
		{
			$name_type1[$i][0] = $result3[$i]['column_name'];
			$name_type1[$i][1] = $result3[$i]['column_name'];
			if($i==0) $name_type1[$i][2] = 'string';
			else  $name_type1[$i][2] = 'number';
		}
	}
	#create sql command to get the data from the table
	$sql = "select ";
	for($i=0; $i<count($name_type1);$i++)
		if($i==0) $sql .= ' "'.$name_type1[$i][0].'"';
		else $sql .= ' ,"'.$name_type1[$i][0].'"';
	$sql .= ' from "'.$options['tablename'].'"';
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
	$content .= '],p:null},0.6);';
	
	return($content);
}

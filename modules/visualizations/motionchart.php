<?
function getsetup_viz_motionchart()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a> based on the Google Chart API.<br>';
	$options['_MODULEDESCRIPTION']		= '<ul>
	<li>Column 1: String</li>
	<li>Column 2: time values</li>
		<ul>
		<li>Year</li>
		<li>Month, day and year</li>
		<li>Week number (values should use the pattern YYYYWww; Example: "2008W03")</li>
		<li>Quarter (values should have the pattern YYYYQq; Example: "2008Q3"</li>
		</ul>
	<li>Columns N: number or string</li>
	</ul>

	For more detailed information, please, refer to <a href="https://developers.google.com/chart/interactive/docs/gallery/motionchart">Google Charts MotionChart</a>';
	
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
	$options[30]['detail']				= 'Default: 300';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '300';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';		

	$options[40]['name']				= 'height';
	$options[40]['description']			= 'Height of the chart';
	$options[40]['detail']				= 'Default: 500';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; 
	$options[40]['default']				= '500';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';	
	
	$options[50]['name']				= 'state';
	$options[50]['description']			= 'An initial display state for the chart. This is a serialized JSON object that describes zoom level, selected dimensions, selected bubbles/entities, and other state descriptions';
	$options[50]['detail']				= 'The initial display state for the chart';
	$options[50]['type']				= 'Text';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';	
	
	$options[60]['name']				= 'showChartButtons';
	$options[60]['description']			= 'false hides the buttons that control the chart type (bubbles / lines / columns) at top right corner. Default: true';
	$options[60]['detail']				= 'Show or hide chart buttons';
	$options[60]['type']				= 'Dropdown';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= '|true|false'; 
	$options[60]['default']				= 'true';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'yes';
	$options[60]['dependenton']			= '';	
	
	$options[70]['name']				= 'showHeader';
	$options[70]['description']			= 'false hides the title label of the entities (derived from the label of the first column in the data table). Default: true';
	$options[70]['detail']				= 'Show or hide the chart header';
	$options[70]['type']				= 'Dropdown';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= '|true|false'; 
	$options[70]['default']				= 'true';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'yes';
	$options[70]['dependenton']			= '';	
	
	$options[80]['name']				= 'showSelectListComponent';
	$options[80]['description']			= 'false hides the list of visible entities.';
	$options[80]['detail']				= 'Show or hide the list of visible entities. False hides the list of visible entities. Default: true. ';
	$options[80]['type']				= 'Dropdown';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= '|true|false'; 
	$options[80]['default']				= 'true';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'yes';
	$options[80]['dependenton']			= '';

	$options[90]['name']				= 'showSidePanel';
	$options[90]['description']			= 'false hides the right hand panel.';
	$options[90]['detail']				= 'Show or hide the side panel. False hides the right hand panel. Default: true';
	$options[90]['type']				= 'Dropdown';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= '|true|false'; 
	$options[90]['default']				= 'true';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']		= 'yes';
	$options[90]['dependenton']			= '';
	
	
	$options[110]['name']				= 'showXMetricPicker';
	$options[110]['description']		= 'false hides the metric picker for x.';
	$options[110]['detail']				= 'Show or hide the X metrick picker. False hides the metric picker for x. Default: true';
	$options[110]['type']				= 'Dropdown';
	$options[110]['link']				= 'link to further information..?';
	$options[110]['lookup']				= '|true|false'; 
	$options[110]['default']			= 'true';
	$options[110]['optional']			= 'no';
	$options[110]['repeatable']			= 'no';
	$options[110]['perdashboard']		= 'yes';
	$options[110]['dependenton']		= '';	
	
	$options[120]['name']				= 'showYMetricPicker';
	$options[120]['description']		= 'false hides the metric picker for y.';
	$options[120]['detail']				= 'Show or hide the Y metric picker. false hides the metric picker for y. Default: true';
	$options[120]['type']				= 'Dropdown';
	$options[120]['link']				= 'link to further information..?';
	$options[120]['lookup']				= '|true|false'; 
	$options[120]['default']			= 'true';
	$options[120]['optional']			= 'no';
	$options[120]['repeatable']			= 'no';
	$options[120]['perdashboard']		= 'yes';
	$options[120]['dependenton']		= '';	
	
	
	$options[130]['name']				= 'showXScalePicker';
	$options[130]['description']		= 'false hides the scale picker for x.';
	$options[130]['detail']				= 'Show or hide the X scale picker. False hides the scale picker for x. Default: true';
	$options[130]['type']				= 'Dropdown';
	$options[130]['link']				= 'link to further information..?';
	$options[130]['lookup']				= '|true|false';
	$options[130]['default']			= 'true';
	$options[130]['optional']			= 'no';
	$options[130]['repeatable']			= 'no';
	$options[130]['perdashboard']		= 'yes';
	$options[130]['dependenton']		= '';	
	
	
	$options[140]['name']				= 'showYScalePicker';
	$options[140]['description']		= 'false hides the scale picker for y.';
	$options[140]['detail']				= 'Show or hide the Y scale picker. False hides the scale picker for y. Default: true';
	$options[140]['type']				= 'Dropdown';
	$options[140]['link']				= 'link to further information..?';		
	$options[140]['lookup']				= '|true|false';
	$options[140]['default']			= 'true';
	$options[140]['optional']			= 'no';
	$options[140]['repeatable']			= 'no';
	$options[140]['perdashboard']		= 'yes';
	$options[140]['dependenton']		= '';
	
	
	$options[150]['name']				= 'showAdvancedPanel';
	$options[150]['description']		= 'false disables the options compartment in the settings panel.';
	$options[150]['detail']				= 'Show or hide the advanced panel. False disables the options compartment in the setting panel. Default: true.';
	$options[150]['type']				= 'Dropdown';
	$options[150]['link']				= 'link to further information..?';
	$options[150]['lookup']				= '|true|false'; 
	$options[150]['default']			= 'true';
	$options[150]['optional']			= 'no';
	$options[150]['repeatable']			= 'no';
	$options[150]['perdashboard']		= 'yes';
	$options[150]['dependenton']		= '';	
	
	
	$options[180]['name']				= 'tablename';
	$options[180]['description']		= 'From this table';
	$options[180]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[180]['type']				= 'Text';
	$options[180]['link']				= 'link to further information..?';
	$options[180]['lookup']				= ''; 
	$options[180]['default']			= '';
	$options[180]['optional']			= 'no';
	$options[180]['repeatable']			= 'no';
	$options[180]['perdashboard']		= 'no';
	$options[180]['dependenton']		= '';
	
	return($options);
}


function place_viz_MotionChart($sid, $value, $options, $setup)
{
	global $db;
	$dashboard_options = $options['dashboard_options'];
	
	echo '<div id="cover'.$sid.'">';
	echo '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	echo '</div>';
	
	$content='';
	if(isset($dashboard_options['height']))
	{
		$content .= '
		<script type="text/javascript">
			var MotionChart'.$sid.';
			var data'.$sid.';
			google.load(\'visualization\', \'1\', {\'packages\':[\'MotionChart\']});
			google.setOnLoadCallback(drawChart'.$sid.');
			function drawChart'.$sid.'()
			{';
				$content .= reload_viz_MotionChart($sid, $value, $options, $setup);
				$content .= '
				MotionChart'.$sid.' = new google.visualization.MotionChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {width:'.($dashboard_options['width']).', height:'.($dashboard_options['height']).'});
			}
		</script>';
    }
	echo $content;
	echo '</div>';
	
	echo '	<script language="JavaScript" type="text/javascript">
				function reload'.$sid.'(dashboard, response)
				{
					place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("velement'.$sid.'").style.border=\'2px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					eval(response);
					MotionChart'.$sid.' = new google.visualization.MotionChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {width:'.($dashboard_options['width']).', height:'.($dashboard_options['height']).'});
					document.getElementById("velement'.$sid.'").style.border=\'0px none\';
				}
			</script>';
}

function reload_viz_MotionChart($sid, $value, $options, $setup)
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
		//From Jaycen: changed i<2 to i<count($result3)
		for($i=0; $i<count($result3); $i++)
		{
			//var_dump($result3);
			
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
	//var_dump($result);
	
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
			//var_dump($value);
			//echo $value[$name_type1[0][0]];
		}
		$content .= "]}";
		$i++;
	} 
	$content .= '],p:null},0.6);';
	
	return($content);
}
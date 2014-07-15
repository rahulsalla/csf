<?
function getsetup_viz_barchart()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a> based on the Google Chart API.<br>';
	$options['_MODULEDESCRIPTION']		= '<p>Each row in the table represents a group of bars.</p>
	<p>Columns:</p>
		<ul>
		<li>Column 0: string</li>
		<li>Column 1: number</li>
		<li>Column ..</li>
		<li>Column N: number</li>
		</ul>
		
		
		For more detailed information, please, refer to <a href="https://developers.google.com/chart/interactive/docs/gallery/barchart">Google Charts BarChart</a>';
	
	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Placement x coordinate';
	$options[10]['detail']				= 'This sets the x coordinate to place the element on the dashboard. Default: 500';
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
	$options[20]['detail']				= 'This sets the y coordinate to place the element on the dashboard. Default: 500';
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
	$options[30]['detail']				= 'This is the width of the chart in pixels. Default: 500';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '500';
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
	
	$options[50]['name']				= 'backgroundColor';
	$options[50]['description']			= 'background color of the chart';
	$options[50]['detail']				= 'Default: black';
	$options[50]['type']				= 'Text';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= 'black';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';	
	
	$options[60]['name']				= 'fontSize';
	$options[60]['description']			= 'Please select the font size';
	$options[60]['detail']				= 'Default: 12';
	$options[60]['type']				= 'Dropdown';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[60]['default']				= '12';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'yes';
	$options[60]['dependenton']			= '';	
	
	$options[70]['name']				= 'fontName';
	$options[70]['description']			= 'Please select the font type';
	$options[70]['detail']				= 'Default: Verdana';
	$options[70]['type']				= 'Dropdown';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= '|Verdana|Arial Narrow|Arial'; 
	$options[70]['default']				= 'Verdana';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'yes';
	$options[70]['dependenton']			= '';	
	
	$options[80]['name']				= 'tablename';
	$options[80]['description']			= 'From this table';
	$options[80]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[80]['type']				= 'Text';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';

	$options[90]['name']				= 'title';
	$options[90]['description']			= 'Please select the title of the graph';
	$options[90]['detail']				= 'This is the table that will be graphed.';
	$options[90]['type']				= 'Text';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= ''; 
	$options[90]['default']				= '';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']		= 'no';
	$options[90]['dependenton']			= '';
	
	$options[100]['name']				= 'titleTextColor';
	$options[100]['description']		= 'Please select the color the chart title';
	$options[100]['detail']				= 'Default: white';
	$options[100]['type']				= 'Text';
	$options[100]['link']				= 'link to further information..?';
	$options[100]['lookup']				= ''; 
	$options[100]['default']			= 'white';
	$options[100]['optional']			= 'no';
	$options[100]['repeatable']			= 'no';
	$options[100]['perdashboard']		= 'yes';
	$options[100]['dependenton']		= '';	
	
	$options[110]['name']				= 'titleTextSize';
	$options[110]['description']		= 'Please select the font size for the chart title';
	$options[110]['detail']				= 'Default: 15';
	$options[110]['type']				= 'Dropdown';
	$options[110]['link']				= 'link to further information..?';
	$options[110]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[110]['default']			= '15';
	$options[110]['optional']			= 'no';
	$options[110]['repeatable']			= 'no';
	$options[110]['perdashboard']		= 'yes';
	$options[110]['dependenton']		= '';	
	
	$options[120]['name']				= 'titlefontName';
	$options[120]['description']		= 'Please select the font type for the chart title';
	$options[120]['detail']				= 'Default: Verdana';
	$options[120]['type']				= 'Dropdown';
	$options[120]['link']				= 'link to further information..?';
	$options[120]['lookup']				= '|Verdana|Arial Narrow|Arial'; 
	$options[120]['default']			= 'Verdana';
	$options[120]['optional']			= 'no';
	$options[120]['repeatable']			= 'no';
	$options[120]['perdashboard']		= 'yes';
	$options[120]['dependenton']		= '';	
	
	
	$options[130]['name']				= 'legendlocation';
	$options[130]['description']		= 'Please select the legend placement';
	$options[130]['detail']				= 'Default: none ';
	$options[130]['type']				= 'Dropdown';
	$options[130]['link']				= 'link to further information..?';
	$options[130]['lookup']				= '|right|top|bottom|none';
	$options[130]['default']			= 'none';
	$options[130]['optional']			= 'no';
	$options[130]['repeatable']			= 'no';
	$options[130]['perdashboard']		= 'yes';
	$options[130]['dependenton']		= '';	
	
	
	$options[140]['name']				= 'legendTextColor';
	$options[140]['description']		= 'color of the legend font';
	$options[140]['detail']				= 'Default: black';
	$options[140]['type']				= 'Text';
	$options[140]['link']				= 'link to further information..?';		
	$options[140]['lookup']				= '';
	$options[140]['default']			= 'black';
	$options[140]['optional']			= 'no';
	$options[140]['repeatable']			= 'no';
	$options[140]['perdashboard']		= 'yes';
	$options[140]['dependenton']		= '';
	
	
	$options[150]['name']				= 'legendfontName';
	$options[150]['description']		= 'Please select the font type of the legend';
	$options[150]['detail']				= 'Default: Verdana';
	$options[150]['type']				= 'Dropdown';
	$options[150]['link']				= 'link to further information..?';
	$options[150]['lookup']				= '|Verdana|Arial Narrow|Arial'; 
	$options[150]['default']			= 'Verdana';
	$options[150]['optional']			= 'no';
	$options[150]['repeatable']			= 'no';
	$options[150]['perdashboard']		= 'yes';
	$options[150]['dependenton']		= '';	
	
	$options[160]['name']				= 'legendTextSize';
	$options[160]['description']		= 'Please select the text size for the legend';
	$options[160]['detail']				= 'Default: 10';
	$options[160]['type']				= 'Dropdown';
	$options[160]['link']				= 'link to further information..?';
	$options[160]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[160]['default']			= '10';
	$options[160]['optional']			= 'no';
	$options[160]['repeatable']			= 'no';
	$options[160]['perdashboard']		= 'yes';
	$options[160]['dependenton']		= '';	
	
	$options[170]['name']				= 'tooltipTextColor';
	$options[170]['description']		= 'color of the tooltip';
	$options[170]['detail']				= 'Default: black';
	$options[170]['type']				= 'Text';
	$options[170]['link']				= 'link to further information..?';
	$options[170]['lookup']				= ''; 
	$options[170]['default']			= 'black';
	$options[170]['optional']			= 'no';
	$options[170]['repeatable']			= 'no';
	$options[170]['perdashboard']		= 'yes';
	$options[170]['dependenton']		= '';	

	$options[180]['name']				= 'tooltipfontName';
	$options[180]['description']		= 'font name of the tooltip';
	$options[180]['detail']				= 'Default: Arial Narrow';
	$options[180]['type']				= 'Dropdown';
	$options[180]['link']				= 'link to further information..?';
	$options[180]['lookup']				= '|Verdana|Arial Narrow|Arial'; 
	$options[180]['default']			= 'Arial Narrow';
	$options[180]['optional']			= 'no';
	$options[180]['repeatable']			= 'no';
	$options[180]['perdashboard']		= 'yes';
	$options[180]['dependenton']		= '';
	
	$options[190]['name']				= 'tooltipTextSize';
	$options[190]['description']		= 'font size of the tooltip';
	$options[190]['detail']				= 'Default: 9';
	$options[190]['type']				= 'Dropdown';
	$options[190]['link']				= 'link to further information..?';
	$options[190]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[190]['default']			= '9';
	$options[190]['optional']			= 'no';
	$options[190]['repeatable']			= 'no';
	$options[190]['perdashboard']		= 'yes';
	$options[190]['dependenton']		= '';
	
	$options[200]['name']				= 'isStacked';
	$options[200]['description']		= 'If set to true, series elements are stacked.';
	$options[200]['detail']				= 'The chart elements will be stacked if set to true, not, if false. Default: False';
	$options[200]['type']				= 'Dropdown';
	$options[200]['link']				= 'link to further information..?';
	$options[200]['lookup']				= '|True|False'; 
	$options[200]['default']			= 'False';
	$options[200]['optional']			= 'no';
	$options[200]['repeatable']			= 'no';
	$options[200]['perdashboard']		= 'yes';
	$options[200]['dependenton']		= '';
	
	$options[230]['name']				= 'hAxis';
	$options[230]['description']		= 'font color of the horizontal axis title';
	$options[230]['detail']				= 'This is the font color of the horizontal axis title in the chart. Default: black';
	$options[230]['type']				= 'Text';
	$options[230]['link']				= 'link to further information..?';
	$options[230]['lookup']				= ''; 
	$options[230]['default']			= 'black';
	$options[230]['optional']			= 'no';
	$options[230]['repeatable']			= 'no';
	$options[230]['perdashboard']		= 'yes';
	$options[230]['dependenton']		= '';
	
	$options[240]['name']				= 'hAxisTitle';
	$options[240]['description']		= 'Title of the horizontal axis';
	$options[240]['detail']				= 'This is the title of the horizontal axis in the chart';
	$options[240]['type']				= 'Text';
	$options[240]['link']				= 'link to further information..?';
	$options[240]['lookup']				= ''; 
	$options[240]['default']			= '';
	$options[240]['optional']			= 'no';
	$options[240]['repeatable']			= 'no';
	$options[240]['perdashboard']		= 'yes';
	$options[240]['dependenton']		= '';
	
	$options[250]['name']				= 'hAxisColor';
	$options[250]['description']		= 'Color of the horizontal axis text';
	$options[250]['detail']				= 'This is the color of the horizontal axis text. Default: black';
	$options[250]['type']				= 'Text';
	$options[250]['link']				= 'link to further information..?';
	$options[250]['lookup']				= ''; 
	$options[250]['default']			= 'black';
	$options[250]['optional']			= 'no';
	$options[250]['repeatable']			= 'no';
	$options[250]['perdashboard']		= 'yes';
	$options[250]['dependenton']		= '';
	
	$options[260]['name']				= 'vAxis';
	$options[260]['description']		= 'font color of the vertical axis title';
	$options[260]['detail']				= 'This is the font color of the vertical axis of the chart. Default: black';
	$options[260]['type']				= 'Text';
	$options[260]['link']				= 'link to further information..?';
	$options[260]['lookup']				= ''; 
	$options[260]['default']			= 'black';
	$options[260]['optional']			= 'no';
	$options[260]['repeatable']			= 'no';
	$options[260]['perdashboard']		= 'yes';
	$options[260]['dependenton']		= '';
	
	$options[270]['name']				= 'vAxisTitle';
	$options[270]['description']		= 'Title of the vertical axis';
	$options[270]['detail']				= 'This is the title of the vertical axis of the chart';
	$options[270]['type']				= 'Text';
	$options[270]['link']				= 'link to further information..?';
	$options[270]['lookup']				= ''; 
	$options[270]['default']			= '';
	$options[270]['optional']			= 'no';
	$options[270]['repeatable']			= 'no';
	$options[270]['perdashboard']		= 'yes';
	$options[270]['dependenton']		= '';
	
	$options[280]['name']				= 'vAxisColor';
	$options[280]['description']		= 'Color of the vertical axis text';
	$options[280]['detail']				= 'This is the color of the vertical axis text. Default: black';
	$options[280]['type']				= 'Text';
	$options[280]['link']				= 'link to further information..?';
	$options[280]['lookup']				= ''; 
	$options[280]['default']			= 'black';
	$options[280]['optional']			= 'no';
	$options[280]['repeatable']			= 'no';
	$options[280]['perdashboard']		= 'yes';
	$options[280]['dependenton']		= '';
	
	return($options);
}

function place_viz_barchart($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	//added isStacked --Jaycen
	echo '<div id="cover'.$sid.'">';
	echo '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	echo '</div>';
	
	$content = '';
	if(isset($options['tablename']))
	{
		$content .= '
		<script type="text/javascript">
			var bar_chart'.$sid.';
			var data'.$sid.';
			google.load(\'visualization\', \'1\', {\'packages\':[\'corechart\']});
			google.setOnLoadCallback(drawChart'.$sid.');
			function drawChart'.$sid.'()
			{';
				$content .= reload_viz_barchart($sid, $value, $options, $setup);
				$content .= '
				bar_chart'.$sid.' = new google.visualization.BarChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {backgroundColor:\''.($dashboard_options['backgroundColor']).'\',
				fontSize:\''.($dashboard_options['fontSize']).'\', 
				fontName:\''.($dashboard_options['fontName']).'\', 
				legendTextStyle:{color:\''.($dashboard_options['legendTextColor']).'\',fontName:\''.($dashboard_options['legendfontName']).'\',fontsize:\''.($dashboard_options['legendTextSize']).'\'}, 
				titleTextStyle:{color:\''.($dashboard_options['titleTextColor']).'\', 
				fontName:\''.($dashboard_options['titlefontName']).'\',
				fontSize:\''.($dashboard_options['titleTextSize']).'\'},
				tooltipTextStyle:{color:\''.($dashboard_options['tooltipTextColor']).'\',
				fontName:\''.($dashboard_options['tooltipfontName']).'\',
				fontSize:\''.($dashboard_options['tooltipTextSize']).'\'}, 
				hAxis:{title: \''.($dashboard_options['hAxisTitle']).'\', textStyle:{color: \''.($dashboard_options['hAxisColor']).'\'},titleTextStyle:{color: \''.($dashboard_options['hAxis']).'\'}}, 
				vAxis:{title: \''.($dashboard_options['vAxisTitle']).'\', textStyle:{color: \''.($dashboard_options['vAxisColor']).'\'}, titleTextStyle:{color: \''.($dashboard_options['vAxis']).'\'}},   
				legend:\''.($dashboard_options['legendlocation']).'\',
				isStacked:\''.($dashboard_options['isStacked']).'\',
				width:'.($dashboard_options['width']).', 
				height:'.($dashboard_options['height']).', 
				title:\''.$options['title'].'\'});
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
					bar_chart'.$sid.' = new google.visualization.barChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {backgroundColor:\''.($dashboard_options['backgroundColor']).'\',
				fontSize:\''.($dashboard_options['fontSize']).'\', 
				fontName:\''.($dashboard_options['fontName']).'\', 
				legendTextStyle:{color:\''.($dashboard_options['legendTextColor']).'\',fontName:\''.($dashboard_options['legendfontName']).'\',fontsize:\''.($dashboard_options['legendTextSize']).'\'}, 
				titleTextStyle:{color:\''.($dashboard_options['titleTextColor']).'\', 
				fontName:\''.($dashboard_options['titlefontName']).'\',
				fontSize:\''.($dashboard_options['titleTextSize']).'\'},
				tooltipTextStyle:{color:\''.($dashboard_options['tooltipTextColor']).'\',
				fontName:\''.($dashboard_options['tooltipfontName']).'\',
				fontSize:\''.($dashboard_options['tooltipTextSize']).'\'}, 
				hAxis:{title: \''.($dashboard_options['hAxisTitle']).'\', textStyle:{color: \''.($dashboard_options['hAxisColor']).'\'},titleTextStyle:{color: \''.($dashboard_options['hAxis']).'\'}}, 
				vAxis:{title: \''.($dashboard_options['vAxisTitle']).'\', textStyle:{color: \''.($dashboard_options['vAxisColor']).'\'}, titleTextStyle:{color: \''.($dashboard_options['vAxis']).'\'}},  
				legend:\''.($dashboard_options['legendlocation']).'\',
				isStacked:\''.($dashboard_options['isStacked']).'\',
				width:'.($dashboard_options['width']).', 
				height:'.($dashboard_options['height']).', 
				title:\''.$options['title'].'\'});
				
				}
			</script>';
}



function reload_viz_barchart($sid, $value, $options, $setup)
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
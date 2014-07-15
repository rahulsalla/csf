<?
function getsetup_viz_columnchart()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a> based on the Google Chart API.<br>';
	$options['_MODULEDESCRIPTION']		= 'Each row in the table represents a group of adjacent bars.
	<p>Columns:</p>
		<ul>
		<li>Column 0: string</li>
		<li>Column 1: number</li>
		<li>Column ..</li>
		<li>Column N: number</li>
		</ul>
		
		For more detailed information, please, refer to <a href="https://developers.google.com/chart/interactive/docs/gallery/columnchart">Google Charts ColumnChart</a>';

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
	$options[30]['detail']				= 'Default: 400';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '400';
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
	$options[60]['detail']				= 'Default: 15';
	$options[60]['type']				= 'Dropdown';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[60]['default']				= '15';
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
	$options[130]['detail']				= 'Default: none';
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
	$options[140]['detail']				= 'Default: white';
	$options[140]['type']				= 'Text';
	$options[140]['link']				= 'link to further information..?';		
	$options[140]['lookup']				= '';
	$options[140]['default']			= 'white';
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
	$options[170]['detail']				= 'Default: blue';
	$options[170]['type']				= 'Text';
	$options[170]['link']				= 'link to further information..?';
	$options[170]['lookup']				= ''; 
	$options[170]['default']			= 'blue';
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
	$options[190]['detail']				= 'Default: 8';
	$options[190]['type']				= 'Dropdown';
	$options[190]['link']				= 'link to further information..?';
	$options[190]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[190]['default']			= '8';
	$options[190]['optional']			= 'no';
	$options[190]['repeatable']			= 'no';
	$options[190]['perdashboard']		= 'yes';
	$options[190]['dependenton']		= '';
	
	$options[200]['name']				= 'hAxis';
	$options[200]['description']		= 'font color of the horizontal axis title';
	$options[200]['detail']				= 'This is the font color of the horizontal axis title in the chart. Default: black';
	$options[200]['type']				= 'Text';
	$options[200]['link']				= 'link to further information..?';
	$options[200]['lookup']				= ''; 
	$options[200]['default']			= 'black';
	$options[200]['optional']			= 'no';
	$options[200]['repeatable']			= 'no';
	$options[200]['perdashboard']		= 'yes';
	$options[200]['dependenton']		= '';
	
	$options[210]['name']				= 'hAxisTitle';
	$options[210]['description']		= 'Title of the horizontal axis';
	$options[210]['detail']				= 'This is the title of the horizontal axis in the chart';
	$options[210]['type']				= 'Text';
	$options[210]['link']				= 'link to further information..?';
	$options[210]['lookup']				= ''; 
	$options[210]['default']			= '';
	$options[210]['optional']			= 'no';
	$options[210]['repeatable']			= 'no';
	$options[210]['perdashboard']		= 'yes';
	$options[210]['dependenton']		= '';
	
	$options[220]['name']				= 'hAxisColor';
	$options[220]['description']		= 'Color of the horizontal axis text';
	$options[220]['detail']				= 'This is the color of the horizontal axis text. Default: black';
	$options[220]['type']				= 'Text';
	$options[220]['link']				= 'link to further information..?';
	$options[220]['lookup']				= ''; 
	$options[220]['default']			= 'black';
	$options[220]['optional']			= 'no';
	$options[220]['repeatable']			= 'no';
	$options[220]['perdashboard']		= 'yes';
	$options[220]['dependenton']		= '';
	
	$options[230]['name']				= 'titleTextColor';
	$options[230]['description']		= 'font color of the chart title';
	$options[230]['detail']				= 'This is the font color of the title of the chart. Default: black';
	$options[230]['type']				= 'Text';
	$options[230]['link']				= 'link to further information..?';
	$options[230]['lookup']				= ''; 
	$options[230]['default']			= 'black';
	$options[230]['optional']			= 'no';
	$options[230]['repeatable']			= 'no';
	$options[230]['perdashboard']		= 'yes';
	$options[230]['dependenton']		= '';
	
	$options[240]['name']				= 'vAxis';
	$options[240]['description']		= 'font color of the vertical axis title';
	$options[240]['detail']				= 'This is the font color of the vertical axis of the chart. Default: black';
	$options[240]['type']				= 'Text';
	$options[240]['link']				= 'link to further information..?';
	$options[240]['lookup']				= ''; 
	$options[240]['default']			= 'black';
	$options[240]['optional']			= 'no';
	$options[240]['repeatable']			= 'no';
	$options[240]['perdashboard']		= 'yes';
	$options[240]['dependenton']		= '';
	
	$options[250]['name']				= 'vAxisTitle';
	$options[250]['description']		= 'Title of the vertical axis';
	$options[250]['detail']				= 'This is the title of the vertical axis of the chart.';
	$options[250]['type']				= 'Text';
	$options[250]['link']				= 'link to further information..?';
	$options[250]['lookup']				= ''; 
	$options[250]['default']			= '';
	$options[250]['optional']			= 'no';
	$options[250]['repeatable']			= 'no';
	$options[250]['perdashboard']		= 'yes';
	$options[250]['dependenton']		= '';
	
	$options[260]['name']				= 'vAxisColor';
	$options[260]['description']		= 'Color of the vertical axis text';
	$options[260]['detail']				= 'This is the color of the vertical axis text. Default: black';
	$options[260]['type']				= 'Text';
	$options[260]['link']				= 'link to further information..?';
	$options[260]['lookup']				= ''; 
	$options[260]['default']			= 'black';
	$options[260]['optional']			= 'no';
	$options[260]['repeatable']			= 'no';
	$options[260]['perdashboard']		= 'yes';
	$options[260]['dependenton']		= '';
	
	
	return($options);
}

function place_viz_columnchart($sid, $value, $options, $setup)
{
	global $db;
	$dashboard_options = $options['dashboard_options'];
	
	echo '<div id="cover'.$sid.'">';
	echo '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	echo '</div>';
	
	$content='';
	if(isset($options['title']))
	{
		$content .= '
		<script type="text/javascript">
			var column_chart'.$sid.';
			var data'.$sid.';
			google.load(\'visualization\', \'1\', {\'packages\':[\'corechart\']});
			google.setOnLoadCallback(drawChart'.$sid.');
			function drawChart'.$sid.'()
			{';
				$content .= reload_viz_columnchart($sid, $value, $options, $setup);
				$content .= 
				'column_chart'.$sid.' = new google.visualization.ColumnChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {
				backgroundColor:\''.($dashboard_options['backgroundColor']).'\',
				fontSize:\''.($dashboard_options['fontSize']).'\', 
				fontName:\''.($dashboard_options['fontName']).'\', 
				legendTextStyle:{color: \''.($dashboard_options['legendTextColor']).'\',fontName:\''.($dashboard_options['legendfontName']).'\',fontsize:\''.($dashboard_options['legendTextSize']).'\'}, 
				titleTextStyle:{color:\''.($dashboard_options['titleTextColor']).'\', 
				fontName:\''.($dashboard_options['titlefontName']).'\',
				fontSize:\''.($dashboard_options['titleTextSize']).'\'},
				tooltipTextStyle:{color:\''.($dashboard_options['tooltipTextColor']).'\',
				fontName:\''.($dashboard_options['tooltipfontName']).'\',
				fontSize:\''.($dashboard_options['tooltipTextSize']).'\'}, 
				hAxis:{title: \''.($dashboard_options['hAxisTitle']).'\', textStyle:{color: \''.($dashboard_options['hAxisColor']).'\'},titleTextStyle:{color: \''.($dashboard_options['hAxis']).'\'}}, 
				vAxis:{title: \''.($dashboard_options['vAxisTitle']).'\', textStyle:{color: \''.($dashboard_options['vAxisColor']).'\'}, titleTextStyle:{color: \''.($dashboard_options['vAxis']).'\'}},   
				legend:\''.($dashboard_options['legendlocation']).'\',
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
					column_chart'.$sid.' = new google.visualization.ColumnChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {
					backgroundColor:\''.($dashboard_options['backgroundColor']).'\',
					fontSize:\''.($dashboard_options['fontSize']).'\', 
					fontName:\''.($dashboard_options['fontName']).'\', 
					legendTextStyle:{color: \''.($dashboard_options['legendTextColor']).'\',fontName:\''.($dashboard_options['legendfontName']).'\',fontsize:\''.($dashboard_options['legendTextSize']).'\'}, 
					titleTextStyle:{color:\''.($dashboard_options['titleTextColor']).'\', 
					fontName:\''.($dashboard_options['titlefontName']).'\',
					fontSize:\''.($dashboard_options['titleTextSize']).'\'},
					tooltipTextStyle:{color:\''.($dashboard_options['tooltipTextColor']).'\',
					fontName:\''.($dashboard_options['tooltipfontName']).'\',
					fontSize:\''.($dashboard_options['tooltipTextSize']).'\'}, 
					hAxis:{title: \''.($dashboard_options['hAxisTitle']).'\', textStyle:{color: \''.($dashboard_options['hAxisColor']).'\'},titleTextStyle:{color: \''.($dashboard_options['hAxis']).'\'}}, 
					vAxis:{title: \''.($dashboard_options['vAxisTitle']).'\', textStyle:{color: \''.($dashboard_options['vAxisColor']).'\'}, titleTextStyle:{color: \''.($dashboard_options['vAxis']).'\'}},   
					legend:\''.($dashboard_options['legendlocation']).'\',
					width:'.($dashboard_options['width']).', 
					height:'.($dashboard_options['height']).', 
					title:\''.$options['title'].'\'});
					
					document.getElementById("velement'.$sid.'").style.border=\'0px none\';
				}
			</script>';
}



function reload_viz_columnchart($sid, $value, $options, $setup)
{
	global $db;
	
	$dashboard_options = $options['dashboard_options'];
	var_dump($options[4]);
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

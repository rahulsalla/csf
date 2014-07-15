<?php
function getsetup_viz_imagebarchart()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a> based on the Google Chart API.<br>';
	$options['_MODULEDESCRIPTION']		= 'Columns:
		<ul>
		<li>Column 0: string</li>
		<li>Column 1: number</li>
		<li>Column ..</li>
		<li>Column N: number</li>
		</ul>
		
		<p>For more detailed information, please, refer to <a href="https://developers.google.com/chart/interactive/docs/gallery/imagebarchart">Google Charts ImageBarChart</a> </p>';

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
	$options[30]['detail']				= 'Default: 600';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '';
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
	$options[40]['default']				= '';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';	
	
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
	
	$options[130]['name']				= 'legend';
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
	
	$options[200]['name']				= 'isStacked';
	$options[200]['description']		= 'If set to true, series elements are stacked.';
	$options[200]['detail']				= 'The chart elements will be stacked if set to true, not, if false. Default: false';
	$options[200]['type']				= 'Dropdown';
	$options[200]['link']				= 'link to further information..?';
	$options[200]['lookup']				= '|true|false'; 
	$options[200]['default']			= 'false';
	$options[200]['optional']			= 'no';
	$options[200]['repeatable']			= 'no';
	$options[200]['perdashboard']		= 'yes';
	$options[200]['dependenton']		= '';
	
	$options[210]['name']				= 'isVertical';
	$options[210]['description']		= 'If set to true, series elements are vertical.';
	$options[210]['detail']				= 'The chart elements will be vertical if set to true, not, if false. Default: false';
	$options[210]['type']				= 'Dropdown';
	$options[210]['link']				= 'link to further information..?';
	$options[210]['lookup']				= '|true|false'; 
	$options[210]['default']			= 'false';
	$options[210]['optional']			= 'no';
	$options[210]['repeatable']			= 'no';
	$options[210]['perdashboard']		= 'yes';
	$options[210]['dependenton']		= '';
	
	return($options);
	
}

function place_viz_imagebarchart($sid, $value, $options, $setup)

{
	$dashboard_options = $options['dashboard_options'];
	
	echo '<div id="cover'.$sid.'">';
	echo '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	echo '</div>';
	
	$content = '';
	
	if(isset($options['tablename']))
	{
		$content .= '
		<script type="text/javascript">
			var image_barchart'.$sid.';
			var data'.$sid.';
			google.load(\'visualization\', \'1\', {\'packages\':[\'ImageBarChart\']});
			google.setOnLoadCallback(drawChart'.$sid.');';
			
		$content .= '
			function drawChart'.$sid.'()
			{';	
		$content .= reload_viz_ImageBarChart($sid, $value, $options, $setup);
				
		$content .= 
		
				'bar_chart'.$sid.' = new google.visualization.ImageBarChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {
            	isStacked:'.($dashboard_options['isStacked']).', 
            	isVertical:'.($dashboard_options['isVertical']).',
				legend:\''.($dashboard_options['legend']).'\', 
                width:'.($dashboard_options['width']).', 
                height:'.($dashboard_options['height']).'});';
                
                $content .=	'}

		
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
					image_barchart'.$sid.' = new google.visualization.ImageBarChart(document.getElementById(\'velement'.$sid.'\')).draw(data'.$sid.', {
            	isStacked:'.($dashboard_options['isStacked']).', 
            	isVertical:'.($dashboard_options['isVertical']).',
				legend:\''.($dashboard_options['legend']).'\', 
                width:'.($dashboard_options['width']).', 
                height:'.($dashboard_options['height']).'
                });
			}
			</script>';
}



function reload_viz_ImageBarChart($sid, $value, $options, $setup)
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
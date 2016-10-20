<?
function getsetup_viz_time_line()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Prem Randeria.';
	$options['_MODULEDESCRIPTION']		= '<p>Each row in the table represents an event on the time line.</p>
	<p>Table Format:</p>
		<ul>
		<li><table border=1 px solid black collapse>
		<tr><td>Column 1</td><td>gid</td><tr/>
		<tr><td>Column 2</td><td>start date (not null)</td><tr/>
		<tr><td>Column 3</td><td>end date</td><tr/>
		<tr><td>Column 4</td><td>title</td><tr/>
		<tr><td>Column 6</td><td>detail</td><tr/></table></li></ul>
		<tr><td>Column 5</td><td>section</td><tr/>
		';
	
	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Placement x coordinate';
	$options[10]['detail']				= 'This sets the x coordinate to place the element on the dashboard. Default: 500';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= ''; 
	$options[10]['default']				= '10';
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
	$options[20]['default']				= '10';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';	
	
	$options[30]['name']				= 'width';
	$options[30]['description']			= 'Width of the chart';
	$options[30]['detail']				= 'This is the width of the chart in pixels. Default: 400';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '1000';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';		

	$options[40]['name']				= 'height';
	$options[40]['description']			= 'Height of the chart';
	$options[40]['detail']				= 'Default: 400';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; 
	$options[40]['default']				= '200';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';	
	
	$options[50]['name']				= 'bar_color';
	$options[50]['description']			= 'color of the event chart';
	$options[50]['detail']				= 'This will be the color of the bar Default: #0055e1';
	$options[50]['type']				= 'Color';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '#0055e1';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';	

	$options[80]['name']				= 'tablename';
	$options[80]['description']			= 'From this table';
	$options[80]['detail']				= 'choose the table you want to map to timeline. refer to the module description for table format';
	$options[80]['type']				= 'Table';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';

	
	$options[90]['name']				= 'time_period';
	$options[90]['description']			= 'Time Period';
	$options[90]['detail']				= 'This will set the time span of the events hourly,daily,quaterly,yearly...';
	$options[90]['type']				= 'Dropdown';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= 'monthly|quaterly|yearly'; 
	$options[90]['default']				= '';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']		= 'no';
	$options[90]['dependenton']			= '';
	
	$options[190]['name']				= 'event_height';
	$options[190]['description']		= 'Height of the event on time line';
	$options[190]['detail']				= 'This will set the Height of the event on time line';
	$options[190]['type']				= 'Text';
	$options[190]['link']				= 'link to further information..?';
	$options[190]['lookup']				= ''; 
	$options[190]['default']			= '10';
	$options[190]['optional']			= 'no';
	$options[190]['repeatable']			= 'no';
	$options[190]['perdashboard']		= 'yes';
	$options[190]['dependenton']		= '';
	
	$options[100]['name']				= 'font_color';
	$options[100]['description']		= 'Please select the font color of timeline';
	$options[100]['detail']				= 'Default: #0055e1';
	$options[100]['type']				= 'Color';
	$options[100]['link']				= 'link to further information..?';
	$options[100]['lookup']				= ''; 
	$options[100]['default']			= '#0055e1';
	$options[100]['optional']			= 'no';
	$options[100]['repeatable']			= 'no';
	$options[100]['perdashboard']		= 'yes';
	$options[100]['dependenton']		= '';	
	
	$options[110]['name']				= 'font_size';
	$options[110]['description']		= 'Please select the font size for the timeline';
	$options[110]['detail']				= 'Default: 14';
	$options[110]['type']				= 'Text';
	$options[110]['link']				= 'link to further information..?';
	$options[110]['lookup']				= ''; 
	$options[110]['default']			= '14';
	$options[110]['optional']			= 'no';
	$options[110]['repeatable']			= 'no';
	$options[110]['perdashboard']		= 'yes';
	$options[110]['dependenton']		= '';	
	
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

function place_viz_time_line($sid, $value, $options, $setup)
{	global $configuration;
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	$event_height=$dashboard_options['event_height'];
	$totalheight=$dashboard_options['height']+100;
	$str='';
	$str.=  '<div id="cover'.$sid.'">';
	$str.=  '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($totalheight).'px;">';
	$str.=  '</div>';
	$str.=  '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str.=  '</div>';
	//$str.=  '</div>';
	
	$content=reload_viz_time_line($sid, $value, $options, $setup);
	if(isset($content)){
	$granularity=$content['time_span'];
	$minDate=$content['start'][0];
	
	$maxDate=$content['start'][0];
#	$startD= explode("-", $content['start'][1]);
	$str.= ' <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   
    <link rel="stylesheet" type="text/css" href="./css/jquery.qtip.min.css" />
    <script type="text/javascript" src="'.$configuration['jquery_path'].'/jquery.qtip.min.js"></script>

    <script type="text/javascript"  src="'.$configuration['jquery_path'].'/raphael-min.js"></script>

    <link rel="stylesheet" type="text/css" href="./css/chronoline.css" />
    <script type="text/javascript" src="'.$configuration['jquery_path'].'/chronoline.js" ></script>
	<script>
	jQuery.noConflict();
	
	var data'.$sid.' = [';
	
	for($i=0;$i<count($content['start']);$i++){
	if(isset($content['start'][$i])){
	    $startD= explode("-", $content['start'][$i]);
	    $startD[1]=$startD[1]-1;
	} else {
	    $detail="";
	}
	
	if($minDate>$content['start'][$i]){
	    $minDate=$content['start'][$i];
	}
	
	if($maxDate<$content['start'][$i]){
	    $maxDate=$content['start'][$i];
	}
	
	if(isset($content['end'][$i])){
	    $endD= explode("-", $content['end'][$i]);
	    $endD[1]=$endD[1]-1;
	} else {
	    $endD=$startD;
	}
	
	if(isset($content['title'][$i])){
	    $title=$content['title'][$i];
	} else {
	    $title="";
	}
	
	if(isset($content['section'][$i])){
	    $section=$content['section'][$i];
	} else {
	    $section=0;
	}
	
	if(isset($content['detail'][$i])){
	$detail=$content['detail'][$i];}else{$detail="";}
	
	$str.=  '{dates: [new Date('.$startD[0].','.$startD[1].','.$startD[2].'),new Date('.$endD[0].','.$endD[1].','.$endD[2].')], title: "'.$title.'",description: "'.$detail.'"}';
	  if($i<count($content['start'])-1){
	 $str.=  ',';}
	  
	  }
	  $str.='];';

	 $minDate= explode("-", $minDate);
	 $maxDate= explode("-", $maxDate);
	 $str.=  '  var sections'.$sid.' = [
      {dates: [new Date(2011, 2, 31), new Date(2011, 9, 28)], title: "", section: 0, attrs: {fill: "#d4e3fd"}},
      {dates: [new Date(2012, 2, 28), new Date(2012, 9, 3)], title: "", section: 1, attrs: {fill: "#d4e3fd"}},
      {dates: [new Date(2012, 1, 29), new Date(2012, 3, 4)], title: "", section: 2, attrs: {fill: "#eaf0fa"}},
      {dates: [new Date(2012, 9, 4), new Date(2012, 9, 31)], title: "", section: 3, attrs: {fill: "#eaf0fa"}}
      ];
	  function getMinDate'.$sid.'()
	  {		var date=new Date('.$minDate[0].','.$minDate[1].','.$minDate[2].');
			var newDate = new Date(date.getTime() - DAY_IN_MILLISECONDS);
    return new Date(Date.UTC(newDate.getUTCFullYear(), newDate.getUTCMonth()-1, 1));
	  }
	   function getMaxDate'.$sid.'()
	  {		var date=new Date('.$maxDate[0].','.$maxDate[1].','.$maxDate[2].');
			var newDate = new Date(date.getTime() + DAY_IN_MILLISECONDS);
    return new Date(Date.UTC(newDate.getUTCFullYear(), newDate.getUTCMonth()+1, 1));
	  }
		function draw_timeline'.$sid.'(data,sections,granularity){
		start=getMinDate'.$sid.'();
		end=getMaxDate'.$sid.'();
		if(granularity=="quaterly"){
		
      var timeline'.$sid.' = new Chronoline(document.getElementById("velement'.$sid.'"), data,
       {visibleSpan: DAY_IN_MILLISECONDS * 91,
      animated: true,
         tooltips: true,
         defaultStartDate: start,
		  endDate: end,
         sectionLabelAttrs: {\'fill\': \'#997e3d\', \'font-weight\': \'bold\'},
      labelInterval: isFifthDay,
      hashInterval: isFifthDay,
      scrollLeft: prevQuarter,
      scrollRight: nextQuarter,
      markToday: \'labelBox\',
	  eventHeight:'.$event_height.',
	  minEventsHeight: '.$dashboard_options['height'].', 
	  fontAttrs: {
            \'font-size\': '.$dashboard_options['font_size'].',
            fill: "'.$dashboard_options['font_color'].'"
        },
		eventAttrs: {  // attrs for the bars and circles of the events
            fill:"'.$dashboard_options['bar_color'].'",
            stroke: "'.$dashboard_options['bar_color'].'",
            "stroke-width": 2
        },
         draggable: true
      }); }
	  
	  if(granularity=="monthly"){var timeline'.$sid.' = new Chronoline(document.getElementById("velement'.$sid.'"), data,
        {animated: true,
         tooltips: true,
          endDate: end,
         defaultStartDate: start,
         sectionLabelAttrs: {\'fill\': \'#997e3d\', \'font-weight\': \'bold\'},
		 eventHeight:'.$event_height.',
		 minEventsHeight: '.$dashboard_options['height'].',
		 fontAttrs: {
            \'font-size\': '.$dashboard_options['font_size'].',
            fill: "'.$dashboard_options['font_color'].'"
        },
		eventAttrs: {  // attrs for the bars and circles of the events
            fill:"'.$dashboard_options['bar_color'].'",
            stroke: "'.$dashboard_options['bar_color'].'",
            "stroke-width": 2
        },
		scrollLeft: prevMonth,
        scrollRight: nextMonth,
		subSubLabelMargin: 0,
		 draggable: true
      });}
	  
	  if(granularity=="yearly"){ var timeline'.$sid.' = new Chronoline(document.getElementById("velement'.$sid.'"), data,
        {visibleSpan: DAY_IN_MILLISECONDS * 366,
      animated: true,
         tooltips: true,
       endDate: end,
         defaultStartDate: start,
		scrollLeft: prevMonth,
        scrollRight: nextMonth,
         sectionLabelAttrs: {\'fill\': \'#997e3d\', \'font-weight\': \'bold\'},
      labelInterval: isHalfMonth,
      hashInterval: isHalfMonth,
	  eventHeight:'.$event_height.',
	  minEventsHeight: '.$dashboard_options['height'].',
	  fontAttrs: {
            \'font-size\': '.$dashboard_options['font_size'].',
            fill: "'.$dashboard_options['font_color'].'"
        },
		eventAttrs: {  // attrs for the bars and circles of the events
            fill:"'.$dashboard_options['bar_color'].'",
            stroke: "'.$dashboard_options['bar_color'].'",
            "stroke-width": 2
        },
		
	  draggable: true
      });}
	  
		}
	draw_timeline'.$sid.'(data'.$sid.',sections'.$sid.',"'.$granularity.'");</script>
	';
} else {$str.="Options missing";}
	//
	$str.=  '</div>';
	
	$str.=  '	<script language="JavaScript" type="text/javascript">
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
					console.log(response);
					//draw_timeline'.$sid.'(data'.$sid.',sections'.$sid.');
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				
				}
			</script>';
			//echo $str;
			return($str);
}



function reload_viz_time_line($sid, $value, $options, $setup)
{
	global $db;

	$dashboard_options = $options['dashboard_options'];
	if($options['tablename']!=null){
	$str=Array();
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
		{	//echo $result3[$i]['column_name'];
			$str[$result3[$i]['column_name']]=Array();
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
	//$content='var data'.$sid.'=new Array(); ';
	
	$str['start']=array();
	
	$str['end']=array();
	
	$str['section']=array();
	
	$str['title']=array();
	
	$str['detail']=array();
	$i = 0;
	$str['count']=count($result)-1;
	foreach($result as $value)
	
	{
	//$content.='{'; 
	
	//$content.='data'.$sid.'['.$i.']=new Array();';
	
		$j=1;
		$str['start'][$i]=$value[$name_type1[$j++][0]];
		$str['end'][$i]=$value[$name_type1[$j++][0]];
		$str['title'][$i]=$value[$name_type1[$j++][0]];
		$str['detail'][$i]=$value[$name_type1[$j++][0]];
		$str['section'][$i]=$value[$name_type1[$j++][0]];
		/*
		$flag=0;
			if($j==0)
			{	//dates array
				//$content.='dates:[\''. $value[$name_type1[$j][0]].'\'';
				$j++;
				if($value[$name_type1[$j][0]]){
				//$content.=',\''.$value[$name_type1[$j][0]].'\'';}
				//$content.=']';
				$flag=1;
			}
			if($j==2)
			{	// integers
				if($value[$name_type1[$j][0]]){
				$content.=''.$name_type1[$j][0].':'. $value[$name_type1[$j][0]].'';}
				//else $content.=''.$name_type1[$j][0].':0';
				$flag=1;
			}
			
			if($flag==0){
			$content.='\''.$name_type1[$j][0].':'. $value[$name_type1[$j][0]].'\'';}
			if($j!=count($value)-1){
			$content.=',';}
			*/
		
		
		
	//	$content.='}';
		//if($i!=count($result)-1){$content.=',';}
		$i++;
		if($i>count($result)){break;}
	}
#	var_dump($str);
	$str['time_span']=$options['time_period'];
	//$content .='data'.$sid.'=JSON.stringify(data'.$sid.');';
	/* .
    //echo $content;
    #create sql to get year info from table
    $sqlYear = 'select distinct(extract(year from "'.$name_type1[0][0].'")) as year from "'.$options['tablename'].'" order by year';
    $yearresult = $db->fetchAll($sqlYear);
	
    $content .= 'var labels = [';
    for ($i=0;$i<count($yearresult);$i++)
    {
        $content .= $yearresult[$i]['year'].',';
    }
    $content .= '];';
	*/
	return($str);}
	else
	return null;
}

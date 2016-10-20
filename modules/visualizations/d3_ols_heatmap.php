<?
function getsetup_viz_d3_ols_heatmap()
{
     $options['_CREDITS']                = 'Main Developer: Jie Fang';
    $options['_MODULEDESCRIPTION']      = '<p>Labeltable: each row in this table represents a row of numbers shown on the heatmap.</p>    <p>Columns:</p>        <ul>        <li>Column 0: number</li>
        <li>Column...</li>        <li>Column N: number</li>        </ul>
<p>Background color table: each row in the table represents a row of color strings.</p>       <p>Columns:</p>        <ul>        
       <li>Column 0: string</li>
        <li>Column...</li>        <li>Column N: string</li> 
</ul>  
<p>Font style table: each row in the table represents a row of font style strings.</p>       <p>Columns:</p>        <ul>        
       <li>Column 0: string</li>        <li>Column...</li>        <li>Column N: string</li> </ul>  
For more information about D3 library, please, refer to <a href="http:d3js.org">Data-Driven Documents</a>';    
	
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
	$options[30]['default']				= '600';
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

	$options[50]['name']				= 'h_lbl_width';
	$options[50]['description']			= 'Width of horizontal label';
	$options[50]['detail']				= 'Default: 100';
	$options[50]['type']				= 'Integer';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '100';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';		

	$options[60]['name']				= 'v_lbl_height';
	$options[60]['description']			= 'Height of verticle label';
	$options[60]['detail']				= 'Default: 100';
	$options[60]['type']				= 'Integer';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= '100';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'yes';
	$options[60]['dependenton']			= '';	

	$options[80]['name']				= 'coeff_tablename';
	$options[80]['description']			= 'Label table';
	$options[80]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[80]['type']				= 'Table';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';

	$options[81]['name']				= 'color_tablename';
	$options[81]['description']			= 'Background color table';
	$options[81]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[81]['type']				= 'Table';
	$options[81]['link']				= 'link to further information..?';
	$options[81]['lookup']				= ''; 
	$options[81]['default']				= '';
	$options[81]['optional']			= 'no';
	$options[81]['repeatable']			= 'no';
	$options[81]['perdashboard']		= 'no';
	$options[81]['dependenton']			= '';

	$options[82]['name']				= 'style_tablename';
	$options[82]['description']			= 'Font style table';
	$options[82]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[82]['type']				= 'Table';
	$options[82]['link']				= 'link to further information..?';
	$options[82]['lookup']				= ''; 
	$options[82]['default']				= '';
	$options[82]['optional']			= 'no';
	$options[82]['repeatable']			= 'no';
	$options[82]['perdashboard']		= 'no';
	$options[82]['dependenton']			= '';
/*
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
	$options[100]['detail']				= 'Default: black';
	$options[100]['type']				= 'Color';
	$options[100]['link']				= 'link to further information..?';
	$options[100]['lookup']				= ''; 
	$options[100]['default']			= 'black';
	$options[100]['optional']			= 'no';
	$options[100]['repeatable']			= 'no';
	$options[100]['perdashboard']		= 'yes';
	$options[100]['dependenton']		= '';	
*/	
    $options[110]['name']               = 'horizontalTextSize';
    $options[110]['description']        = 'Text size in each cell';
    $options[110]['detail']             = 'Please select the font size for labels in cells';
    $options[110]['type']               = 'Dropdown';
    $options[110]['link']               = 'link to further information..?';
    $options[110]['lookup']             = '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
    $options[110]['default']            = '15';
    $options[110]['optional']           = 'no';
    $options[110]['repeatable']         = 'no';
    $options[110]['perdashboard']       = 'yes';
    $options[110]['dependenton']        = '';   
    
    $options[111]['name']               = 'verticalTextSize';
    $options[111]['description']        = 'Font size of vertical label';
    $options[111]['detail']             = 'Please select the font size for the vertical label';
    $options[111]['type']               = 'Dropdown';
    $options[111]['link']               = 'link to further information..?';
    $options[111]['lookup']             = '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
    $options[111]['default']            = '15';
    $options[111]['optional']           = 'no';
    $options[111]['repeatable']         = 'no';
    $options[111]['perdashboard']       = 'yes';
    $options[111]['dependenton']        = '';    

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
	
	$options[301]['name']				= 'loadingHighlightBGColor';
	$options[301]['description']		= 'Background color of highlight box that is shown when a module is loading';
	$options[301]['detail']				= 'This is the background color of the highlight box that is shown when a module is loading. ';
	$options[301]['type']				= 'Color';
	$options[301]['link']				= 'link to further information..?';
	$options[301]['lookup']				= ''; 
	$options[301]['default']			= 'CCCCCC';
	$options[301]['optional']			= 'no';
	$options[301]['repeatable']			= 'no';
	$options[301]['perdashboard']		= 'yes';
	$options[301]['dependenton']		= '';

	$options[302]['name']				= 'loadingHighlightTransparencyBG';
	$options[302]['description']		= 'Background transparency of highlight box that is shown when a module is loading (0~1)';
	$options[302]['detail']				= 'This is the of transparency of the highlight box that is shown when a module is loading. 0 means totally transparent and 1 means no transparency at all.';
	$options[302]['type']				= 'Text';
	$options[302]['link']				= 'link to further information..?';
	$options[302]['lookup']				= ''; 
	$options[302]['default']			= '0.95';
	$options[302]['optional']			= 'no';
	$options[302]['repeatable']			= 'no';
	$options[302]['perdashboard']		= 'yes';
	$options[302]['dependenton']		= '';

	$options[303]['name']				= 'loadingHighlightProgressIcon';
	$options[303]['description']		= 'Progress animation icon of the highlight box that is shown when a module is loading';
	$options[303]['detail']				= 'This is the progress icon of the highlight box that is shown when a module is loading. Default: yes';
	$options[303]['type']				= 'Dropdown';
	$options[303]['link']				= 'link to further information..?';
	$options[303]['lookup']				= 'yes|no'; 
	$options[303]['default']			= 'no';
	$options[303]['optional']			= 'no';
	$options[303]['repeatable']			= 'no';
	$options[303]['perdashboard']		= 'yes';
	$options[303]['dependenton']		= '';

	return($options);
}

function place_viz_d3_ols_heatmap($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y']	= str_replace('px','',$dashboard_options['y']);
	
	$str = '';
	$str .= '<div id="cover'.$sid.'">';

	$str .= '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	$str .= '</div>';
	
    //echo '<div id="celement'.$sid.'" style="position:absolute;z-index:0; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str .= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
    $str .= '</div>';

	$content = reload_viz_d3_ols_heatmap($sid,$value,$options,$setup);
    

    $str .= '
<style type="text/css">
/*not sig*/
.ols .c0{fill:#F1F1F1}
/*sig -neg*/
.ols .c1{fill:rgb(153,204,255)}
/*sig +pos*/
.ols .c2{fill:rgb(255,204,153)}
/*LM-LAG*/
.ols .c3{fill:rgb(192,192,192)}
/*LM-ERR*/
.ols .c4{fill:rgb(199,249,199)}

.RdBu .q0-11{fill:rgb(103,0,31)}
.RdBu .q1-11{fill:rgb(178,24,43)}
.RdBu .q2-11{fill:rgb(214,96,77)}
.RdBu .q3-11{fill:rgb(244,165,130)}
.RdBu .q4-11{fill:rgb(253,219,199)}
.RdBu .q5-11{fill:rgb(247,247,247)}
.RdBu .q6-11{fill:rgb(209,229,240)}
.RdBu .q7-11{fill:rgb(146,197,222)}
.RdBu .q8-11{fill:rgb(67,147,195)}
.RdBu .q9-11{fill:rgb(33,102,172)}
.RdBu .q10-11{fill:rgb(5,48,97)}
.RdYlGn .q0-11{fill:rgb(165,0,38)}
.RdYlGn .q1-11{fill:rgb(215,48,39)}
.RdYlGn .q2-11{fill:rgb(244,109,67)}
.RdYlGn .q3-11{fill:rgb(253,174,97)}
.RdYlGn .q4-11{fill:rgb(254,224,139)}
.RdYlGn .q5-11{fill:rgb(255,255,191)}
.RdYlGn .q6-11{fill:rgb(217,239,139)}
.RdYlGn .q7-11{fill:rgb(166,217,106)}
.RdYlGn .q8-11{fill:rgb(102,189,99)}
.RdYlGn .q9-11{fill:rgb(26,152,80)}
.RdYlGn .q10-11{fill:rgb(0,104,55)}
.RdYlBu .q0-11{fill:rgb(165,0,38)}
.RdYlBu .q1-11{fill:rgb(215,48,39)}
.RdYlBu .q2-11{fill:rgb(244,109,67)}
.RdYlBu .q3-11{fill:rgb(253,174,97)}
.RdYlBu .q4-11{fill:rgb(254,224,144)}
.RdYlBu .q5-11{fill:rgb(255,255,191)}
.RdYlBu .q6-11{fill:rgb(224,243,248)}
.RdYlBu .q7-11{fill:rgb(171,217,233)}
.RdYlBu .q8-11{fill:rgb(116,173,209)}
.RdYlBu .q9-11{fill:rgb(69,117,180)}
.RdYlBu .q10-11{fill:rgb(49,54,149)}
</style>

<style>
.background {
  fill: #eee;
}

line {
  stroke: #fff;
}

.hline{
  stroke: #000;
  stroke-width: 2px;
}

.vline{
  stroke: #000;
  stroke-width: 2px;
}

text{
// font-family: “HelveticaNeue-Light”, “Helvetica Neue Light”, “Helvetica Neue”, Helvetica, Arial, “Lucida Grande”, sans-serif;
}
text.active {
  fill: red;
}
</style>
<script type="text/javascript">
//var x'.$sid.',y'.$sid.',z'.$sid.',c'.$sid.';
//var svg;

function d3_ols_heatmap'.$sid.'(colnames,data2d,labels,styles){
  // data2d NxM matrix
  var matrix = [];
  var n = data2d.length;
  var m = data2d[0].length;

  for(i=0;i<n;i++) {
    var row = [];
    for(j=0;j<m;j++) {
      row[j] = {x:j,y:i,z:data2d[i][j]};
    }
    matrix[i] = row;
  }

  // color schema
  var clrname = "ols";
  var color = function(code){
    return code;
  };

  // svg 

  var margin = {top: '.$dashboard_options['v_lbl_height'].', right: 10, bottom: 20, left: '.$dashboard_options['h_lbl_width'].'},
      width = '.$dashboard_options['width'].'-'.$dashboard_options['h_lbl_width'].' - margin.right,
      height = '.$dashboard_options['height'].'-'.$dashboard_options['v_lbl_height'].' - margin.bottom;

  var x = d3.scale.ordinal().rangeBands([0, width]),
      y = d3.scale.ordinal().rangeBands([0, height]),
      z = d3.scale.linear().domain([0, 4]).clamp(true),
      c = d3.scale.category10().domain(d3.range(10));

  // The default sort order.
  x.domain(d3.range(m));
  y.domain(d3.range(n));


  d3.select("#velement'.$sid.'").select("svg").remove();
  var svg = d3.select("#velement'.$sid.'").append("svg")
      .attr("class", clrname)
      .attr("width", width + margin.left + margin.right)
      .attr("height", height + margin.top + margin.bottom)
      //.style("margin-left", -margin.left + "px")
      .append("g")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

  svg.append("rect")
   .attr("class", "background")
   .attr("width", width)
   .attr("height", height);

  var row = svg.selectAll(".row'.$sid.'")
             .data(matrix)
             .enter().append("g")
             .attr("class", "row'.$sid.'")
             .attr("transform", function(d, i) { return "translate(0," + y(i) + ")"; })
             .each(createrow);

  row.append("text")
   .attr("x", -6)
   .attr("y", y.rangeBand() / 2)
   .attr("dy", ".32em")
   .attr("text-anchor", "end")
   .attr("font-size",'.$dashboard_options['verticalTextSize'].')
   //.text(function(d, i) { return "d"; });

  row.append("line")
   .attr("x2", width);

  var column = svg.selectAll(".column")
                .data(d3.transpose(matrix))
                .enter().append("g")
                .attr("class", "column")
                .attr("transform", function(d, i) { return "translate(" + x(i) + ")rotate(-90)"; });

  column.append("line")
      .attr("x1", -height);

  column.append("text")
      .attr("x", 6)
      .attr("y", x.rangeBand() / 2)
      .attr("dy", ".32em")
      .attr("text-anchor", "start")
      .attr("font-size",'.$dashboard_options['verticalTextSize'].')
      .text(function(d, i) { return colnames[i]; });

  function createrow(row,idx) {
    var cell = d3.select(this).selectAll(".cell")
               //.data(row.filter(function(d) { return d.z; }))
               .data(row)
               .enter().append("rect")
               //.attr("class", function(d) { return "cell c"+color(d.z); })
               //.attr("class", function(d) { return "cell"; })
               .attr("x", function(d) { return x(d.x); })
               .attr("width", x.rangeBand())
               .attr("height", y.rangeBand())
               //.style("fill-opacity", function(d) { return z(d.z); })
               .style("fill", function(d) { return d.z; })
               .on("mouseover", mouseover)
               .on("mouseout", mouseout);
  d3.select(this).selectAll(".label")
      .data(row)
      .enter().append("text")
      .attr("dy", ".32em")
      .attr("text-anchor", "middle")
      .attr("font-size",'.$dashboard_options['horizontalTextSize'].')
      //.attr("font-weight",function(d,i){if(d.y==0)return "bold";return "";})
      .attr("style",function(d,i){ return styles[idx][i];})
      //.attr("transform",function(d,i){var x1=x(d.x)+x.rangeBand()/2;var y1=y.rangeBand()/2;return "translate("+x1+","+y1+")rotate(-90)";})
      .attr("transform",function(d,i){var x1=x(d.x)+x.rangeBand()/2;var y1=y.rangeBand()/2;return "translate("+x1+","+y1+")";})
      .text(function(d, i) { return labels[idx][i]; });
  }

  function mouseover(p) {
    d3.selectAll(".row'.$sid.' text").classed("active", function(d, i) {return i == p.y*(m); });
    d3.selectAll(".row'.$sid.' text").classed("active", function(d, i) {return i == (p.x + p.y*(m+1)); });
    d3.selectAll(".column text").classed("active", function(d, i) { return i == p.x; });
  }

  function mouseout() {
    d3.selectAll("text").classed("active", false);
  }
}
' .$content.'
d3_ols_heatmap'.$sid.'(colnames'.$sid.', data'.$sid.', labels'.$sid.',styles'.$sid.');
</script>';

	$str .= '</div>';
	
	$str .= '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid #'.$dashboard_options['loadingHighlightColor'].'\';
				function reload'.$sid.'(dashboard, response)
				{
					place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
					var a=document.getElementById("celement'.$sid.'");
					var o = 1; // transparency
					';

	if (isset($dashboard_options['loadingHighlightTransparencyBG']) && $dashboard_options['loadingHighlightTransparencyBG']!='')
	$str .= '   	o = '.$dashboard_options['loadingHighlightTransparencyBG'].';';

	if (isset($dashboard_options['loadingHighlightBGColor']) && $dashboard_options['loadingHighlightBGColor']!='')
	$str .= '   	var hexcolor = 	"'.$dashboard_options['loadingHighlightBGColor'].'";
					var r = parseInt(hexcolor.substring(0,2),16);
					var g = parseInt(hexcolor.substring(2,4),16);
					var b = parseInt(hexcolor.substring(4,6),16);

					a.style.backgroundColor="rgba(" + r+","+g+","+b+","+o+")";';

	if (isset($dashboard_options['loadingHighlightProgressIcon'])&&$dashboard_options['loadingHighlightProgressIcon']=='yes')
	$str .= '
					a.style.backgroundImage=\'url(./images/loading-circle.gif)\';
					a.style.backgroundPosition=\'center\';
					a.style.backgroundRepeat=\'no-repeat\';
//alert("test");
			';
	$str .= '
				}
				function reload_update'.$sid.'(response)
				{
					eval(response);
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
                    d3_ols_heatmap'.$sid.'(colnames'.$sid.', data'.$sid.', labels'.$sid.',styles'.$sid.');
				}
			</script>';
	return($str);
}

function reload_viz_d3_ols_heatmap($sid, $value, $options, $setup)
{
	global $db;
	
	$dashboard_options = $options['dashboard_options'];

    $content = 'var colnames'.$sid.'=[';

    # column names
    $results = $db->fetchAll("SELECT column_name FROM information_schema.columns WHERE table_name='".$options['coeff_tablename']."'");
    foreach($results as $row) {
        $content .= '"' . $row["column_name"]. '",';
    }
    $content .= "];";

	$n_cols = count($results);	

    # labels
    $results = $db->fetchAll('SELECT *  FROM '.$options['coeff_tablename'].';');
	$n_rows = count($results);
    $content .= 'var labels'.$sid.'=[';
    foreach($results as $row){
        $content .= "[";
        foreach($row as $item)
            $content .= "'". $item . "',";
        $content .= "],";
    }
    $content .= "];";


    # color data
    if (isset($options['color_tablename']) && $options['color_tablename'] <> ""){
	    $results = $db->fetchAll("SELECT * FROM ".$options['color_tablename'].";");    
    	$content .= 'var data'.$sid.'=[';
    	foreach($results as $row) {
        	$content .= "[";
        	foreach($row as $item)
            	$content .= "'". $item . "',";
        	$content .= "],";
    	}
    	$content .= "];";
    }
	else
	{
		$content .= 'var data'.$sid.'=[';
		for($i=0;$i<$n_rows;$i++){
			$content .= "[";
			for($j=0;$j<$n_cols;$j++)
				$content .= "'#CCC',";
		    $content .= "],";
		}
		$content .= "];";
	}

    # style data
    if (isset($options['style_tablename']) && $options['style_tablename'] <> ""){
	    $results = $db->fetchAll("SELECT * FROM ".$options['style_tablename'].";");    
    	$content .= 'var styles'.$sid.'=[';
    	foreach($results as $row) {
        	$content .= "[";
        	foreach($row as $item)
            	$content .= "'". $item . "',";
        	$content .= "],";
    	}
    	$content .= "];";
	}
	else
	{
		$content .= 'var styles'.$sid.'=[';
		for($i=0;$i<$n_rows;$i++){
			$content .= "[";
			for($j=0;$j<$n_cols;$j++)
				$content .= "'',";
		    $content .= "],";
		}
		$content .= "];";
	}

    return($content);
}

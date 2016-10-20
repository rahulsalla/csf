<?
function getsetup_viz_d3_hcluster()
{
     $options['_CREDITS']                = 'Main Developer: Jie Fang';
    $options['_MODULEDESCRIPTION']      = ' For more information about D3 library, please, refer to <a href="http:d3js.org">Data-Driven Documents</a>';    
	
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
	$options[60]['description']			= 'Height of vertical label';
	$options[60]['detail']				= 'Default: 100';
	$options[60]['type']				= 'Integer';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= '100';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'yes';
	$options[60]['dependenton']			= '';	


	$options[65]['name']				= 'treeWidth';
	$options[65]['description']			= 'Width of right tree';
	$options[65]['detail']				= 'Default: 100';
	$options[65]['type']				= 'Integer';
	$options[65]['link']				= 'link to further information..?';
	$options[65]['lookup']				= ''; 
	$options[65]['default']				= '100';
	$options[65]['optional']			= 'no';
	$options[65]['repeatable']			= 'no';
	$options[65]['perdashboard']		= 'yes';
	$options[65]['dependenton']			= '';		

	$options[70]['name']				= 'treeHeight';
	$options[70]['description']			= 'Height of top tree';
	$options[70]['detail']				= 'Default: 100';
	$options[70]['type']				= 'Integer';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']				= '100';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'yes';
	$options[70]['dependenton']			= '';	

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
	$options[110]['name']				= 'horizontalTextSize';
	$options[110]['description']		= 'Font size of horizontal label';
	$options[110]['detail']				= 'Please select the font size for the horizontal label';
	$options[110]['type']				= 'Dropdown';
	$options[110]['link']				= 'link to further information..?';
	$options[110]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[110]['default']			= '15';
	$options[110]['optional']			= 'no';
	$options[110]['repeatable']			= 'no';
	$options[110]['perdashboard']		= 'yes';
	$options[110]['dependenton']		= '';	
	
	$options[111]['name']				= 'verticalTextSize';
	$options[111]['description']		= 'Font size of vertical label';
	$options[111]['detail']				= 'Please select the font size for the vertical label';
	$options[111]['type']				= 'Dropdown';
	$options[111]['link']				= 'link to further information..?';
	$options[111]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[111]['default']			= '15';
	$options[111]['optional']			= 'no';
	$options[111]['repeatable']			= 'no';
	$options[111]['perdashboard']		= 'yes';
	$options[111]['dependenton']		= '';	
	
/*    $options[120]['name']				= 'titlefontName';
	$options[120]['description']		= 'Please select the font type for the chart title';
	$options[120]['detail']				= 'Default: Verdana';
	$options[120]['type']				= 'Dropdown';
	$options[120]['link']				= 'link to further information..?';
	$options[120]['lookup']				= '|Verdana|Arial Narrow|Arial|Helvetica Neue'; 
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
	$options[170]['detail']				= 'Default: chocolate';
	$options[170]['type']				= 'Text';
	$options[170]['link']				= 'link to further information..?';
	$options[170]['lookup']				= ''; 
	$options[170]['default']			= 'chocolate';
	$options[170]['optional']			= 'no';
	$options[170]['repeatable']			= 'no';
	$options[170]['perdashboard']		= 'yes';
	$options[170]['dependenton']		= '';	

	$options[180]['name']				= 'tooltipFontName';
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
	$options[190]['type']				= 'Text';
	$options[190]['link']				= 'link to further information..?';
	$options[190]['lookup']				= ''; 
	$options[190]['default']			= '9';
	$options[190]['optional']			= 'no';
	$options[190]['repeatable']			= 'no';
	$options[190]['perdashboard']		= 'yes';
	$options[190]['dependenton']		= '';


	$options[200]['name']				= 'lineWidth';
	$options[200]['description']		= 'The width of the line in pixels';
	$options[200]['detail']				= 'Enter zero to hide all lines. Default: 1';
	$options[200]['type']				= 'Integer';
	$options[200]['link']				= 'link to further information..?';
	$options[200]['lookup']				= ''; 
	$options[200]['default']			= '1';
	$options[200]['optional']			= 'no';
	$options[200]['repeatable']			= 'no';
	$options[200]['perdashboard']		= 'yes';
	$options[200]['dependenton']		= '';
*/
	return($options);
}

function place_viz_d3_hcluster($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y']	= str_replace('px','',$dashboard_options['y']);
	$str='';
	$str.= '<div id="cover'.$sid.'">';

	$str.= '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	$str.= '</div>';
	$content = reload_viz_d3_hcluster($sid,$value,$options,$setup);
    

    $str.= '
<style type="text/css">
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

text.active {
  fill: red;
}
</style>
<script type="text/javascript">
function d3_hcluster(data2d,rownames, colnames, clusters){
  console.log(clusters);
  // data2d NxM matrix
  // clusters dictionary "1":{"x","y"}
  // Data
  var matrix = [];
  var n = data2d.length;
  var m = data2d[0].length;
  var dataMax = -1E10,
      dataMin = 1E10;

  for(i=0;i<n;i++) {
    var row = [];
    for(j=0;j<m;j++) {
      row[j] = {x:j,y:i,z:data2d[i][j]};
      if(data2d[i][j] < dataMin) dataMin = data2d[i][j];
      if(data2d[i][j] > dataMax) dataMax = data2d[i][j];
    }
    matrix[i] = row;
  }
 
  // color schema
  var clrname = "RdYlBu";
  var color = d3.scale.quantize().domain([dataMax, dataMin]).range(d3.range(11));

  // svg 
  var treeWidth = '.$dashboard_options['treeWidth'].',
      treeHeight = '.$dashboard_options['treeHeight'].';

  var margin = {top: treeHeight, right: treeWidth, bottom: '.$dashboard_options['v_lbl_height'].', left: '.$dashboard_options['h_lbl_width'].'},
      width = '.$dashboard_options['width'].'-'.$dashboard_options['h_lbl_width'].'-treeWidth,
      height = '.$dashboard_options['height'].'-'.$dashboard_options['v_lbl_height'].'-treeHeight;

  var x = d3.scale.ordinal().rangeBands([0, width]),
      y = d3.scale.ordinal().rangeBands([0, height]),
      z = d3.scale.linear().domain([0, 4]).clamp(true),
      c = d3.scale.category10().domain(d3.range(10));

  d3.select("#velement'.$sid.'").select("svg").remove();
  var svg = d3.select("#velement'.$sid.'").append("svg")
      .attr("class", clrname)
      .attr("width", width + margin.left + margin.right)
      .attr("height", height + margin.top + margin.bottom)
      //.style("margin-left", -margin.left + "px")
      .append("g")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

  // The default sort order.
  orderx = [];
  for(i=0;i<clusters.col.order.length;i++)
    orderx[i] = clusters.col.order[i]-1;
  ordery = [];
  for(i=0;i<clusters.row.order.length;i++)
    ordery[i] = clusters.row.order[i]-1;

  x.domain(orderx);
  y.domain(ordery);

  svg.append("rect")
   .attr("class", "background")
   .attr("width", width)
   .attr("height", height);

  var row = svg.selectAll(".row")
             .data(matrix)
             .enter().append("g")
             .attr("class", "row")
             .attr("transform", function(d, i) { return "translate(0," + y(i) + ")"; })
             .each(createrow);

  row.append("text")
   .attr("x", -6)
   .attr("y", y.rangeBand() / 2)
   .attr("dy", ".32em")
   .attr("text-anchor", "end")
   .attr("font-size",'.$dashboard_options['verticalTextSize'].')
   .text(function(d, i) { return rownames[i]; });

  var column = svg.selectAll(".column")
                .data(matrix)
                .enter().append("g")
                .attr("class", "column")
                .attr("transform", function(d, i) { return "translate(" + x(i) + ")rotate(-90)"; });

  row.append("line")
   .attr("x2", width);

  column.append("line")
      .attr("x1", -height);

  column.append("text")
      .attr("x", -height-6)
      .attr("y", x.rangeBand() / 2)
      .attr("dy", ".32em")
      .attr("text-anchor", "end")
      .attr("font-size",'.$dashboard_options['horizontalTextSize'].')
      .text(function(d, i) { return colnames[i]; });

  function createrow(row) {
    var cell = d3.select(this).selectAll(".cell")
               //.data(row.filter(function(d) { return d.z; }))
               .data(row)
               .enter().append("rect")
               //.attr("class", "cell")
               .attr("class", function(d) { return "cell q"+color(d.z)+"-11"; })
               .attr("x", function(d) { return x(d.x); })
               .attr("width", x.rangeBand())
               .attr("height", y.rangeBand())
               //.style("fill-opacity", function(d) { return z(d.z); })
               //.style("fill", function(d) { return "q"+color(d.z)+"-11"; })
               .on("mouseover", mouseover)
               .on("mouseout", mouseout);
  }

  function mouseover(p) {
    d3.selectAll(".row text").classed("active", function(d, i) { return i == p.y; });
    d3.selectAll(".column text").classed("active", function(d, i) { return i == p.x; });
  }

  function mouseout() {
    d3.selectAll("text").classed("active", false);
  }

  function order(value) {
    var t = svg.transition().duration(2500);

    t.selectAll(".row")
     .delay(function(d, i) { return y(i) * 4; })
     .attr("transform", function(d, i) { return "translate(0," + y(i) + ")"; })
     .selectAll(".cell")
     .delay(function(d) { return x(d.x) * 4; })
     .attr("x", function(d) { return x(d.x); });

    t.selectAll(".column")
     .delay(function(d, i) { return x(i) * 4; })
     .attr("transform", function(d, i) { return "translate(" + x(i) + ")rotate(-90)"; });
  }

  drawdendrogram4row(clusters.row.height, clusters.row.order, clusters.row.merge, width);
  drawdendrogram4col(clusters.col.height, clusters.col.order, clusters.col.merge, 0);

  function drawdendrogram4row(hcHeight, hcOrder, hcMerge,startX) { 
    var ratio = (treeWidth-6) /Math.ceil(hcHeight[hcHeight.length-1]);
    var hcCenter = {};

    for (var idx in hcMerge) {
      var height = ratio * hcHeight[idx-1]+6;
      var pair = hcMerge[idx];
      var first = pair[0];
      var second = pair[1];

      if (first < 0) {
        first = -first;
        first_hcY = y(first-1) + y.rangeBand()/2.0;
        first_hcX = 0;
      }   
      else {
        first_hcY = hcCenter[first][0];
        first_hcX = hcCenter[first][1];
      }

      if (second < 0) {
        second = -second;
        second_hcY = y(second-1) + y.rangeBand()/2.0;
        second_hcX = 0;
      }   
      else {
        second_hcY = hcCenter[second][0];
        second_hcX = hcCenter[second][1];
      }
 
      svg.append("line")
         .attr("x1", startX + first_hcX)
         .attr("y1", first_hcY)
         .attr("x2", startX + height)
         .attr("y2", first_hcY)
         .style("stroke","rgb(0,0,0)");
      svg.append("line")
         .attr("x1", startX + height)
         .attr("y1", first_hcY)
         .attr("x2", startX + height)
         .attr("y2", second_hcY)
         .style("stroke","rgb(0,0,0)");
      svg.append("line")
         .attr("x1", startX + height)
         .attr("y1", second_hcY)
         .attr("x2", startX + second_hcX)
         .attr("y2", second_hcY)
         .style("stroke","rgb(0,0,0)");

      hcCenter[idx] = [Math.abs((first_hcY - second_hcY)/2.0) + Math.min(first_hcY,second_hcY), height];
    }
  }


  function drawdendrogram4col(hcHeight, hcOrder, hcMerge,startX) { 
    var ratio = (treeHeight-6)/Math.ceil(hcHeight[hcHeight.length-1]);
    var hcCenter = {};

    for (var idx in hcMerge) {
      var height = ratio * hcHeight[idx-1]+2;
      var pair = hcMerge[idx];
      var first = pair[0];
      var second = pair[1];

      if (first < 0) {
        first = -first;
        first_hcX = x(first-1) + x.rangeBand()/2.0;
        first_hcY = 0;
      }   
      else {
        first_hcX = hcCenter[first][0];
        first_hcY = hcCenter[first][1];
      }

      if (second < 0) {
        second = -second;
        second_hcX = x(second-1) + x.rangeBand()/2.0;
        second_hcY = 0;
      }   
      else {
        second_hcX = hcCenter[second][0];
        second_hcY = hcCenter[second][1];
      }
 
      svg.append("line")
         .attr("x1", first_hcX)
         .attr("y1", - first_hcY)
         .attr("x2", first_hcX)
         .attr("y2", - height)
         .style("stroke","rgb(0,0,0)");
      svg.append("line")
         .attr("x1", first_hcX)
         .attr("y1", - height)
         .attr("x2", second_hcX)
         .attr("y2", - height)
         .style("stroke","rgb(0,0,0)");
      svg.append("line")
         .attr("x1", second_hcX)
         .attr("y1", - height)
         .attr("x2", second_hcX)
         .attr("y2", - second_hcY)
         .style("stroke","rgb(0,0,0)");

      hcCenter[idx] = [Math.abs((first_hcX - second_hcX)/2.0) + Math.min(first_hcX,second_hcX), height];
    }
  }
}
' .$content.'
d3_hcluster(data,rownames,colnames,clusters);
</script>';

	$str.= '</div>';
	
	$str.= '	<script language="JavaScript" type="text/javascript">
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
                    console.log(response);
					eval(response);
                    
                    d3_hcluster(data,rownames,colnames,clusters);
					document.getElementById("velement'.$sid.'").style.border=\'0px none\';
					
				}
			</script>';
		return($str);
}

function reload_viz_d3_hcluster($sid, $value, $options, $setup)
{
	global $db;
	
	$dashboard_options = $options['dashboard_options'];

    $content = "";

    if (false) {	
        $file_path=  "/home/jie/public/www/lee/results/bicluster/subworld_2.txt";
        $f = fopen($file_path,"r");
        if ($f) {
            $buffer = stream_get_line($f,2048,"\n");
            $content .= "var colnames=[".$buffer."];";
            $buffer = stream_get_line($f,2048,"\n");
            $content .= "var rownames=[".$buffer."];";
            $buffer = stream_get_line($f,2048,"\n");
            $dim = explode(",",$buffer);
            $nrow = (int)$dim[0];
            $ncol = (int)$dim[1];
            $content .= "var data=[";
            for ($i=0;$i<$nrow;$i++)  {
                $buffer = stream_get_line($f,2048,"\n");
                $content .= "[" . $buffer . "],"; 
            }
            $content .= "];";
            #number of clusters
            $buffer = stream_get_line($f,2048,"\n");
            $ncluster = (int)$buffer;
            #read all clusters
            $content .= 'var clusters={';
            for ($i=0;$i<$ncluster;$i++)  {
                $buffer = stream_get_line($f,2048,"\n");
                $content .= '"'. (string)($i+1). '":{"clustery":[' . $buffer . '],'; 
                $buffer = stream_get_line($f,2048,"\n");
                $content .= '"clusterx":['.$buffer.']},';
            }
            $content .= '};';
        }
        fclose($f);
    }
    else {
        # read from database hcluster_result
        $result = $db->fetchAll("SELECT results FROM ".$options['tablename'].";");    
        $res = $result[0]["results"];
        $items = explode("\n",$res);
        $content .= "var colnames=[".$items[0]."];";
        $content .= "var rownames=[".$items[1]."];";
        $dim = explode(",",$items[2]);
        $nrow = (int)$dim[0];
        $ncol = (int)$dim[1];
        $content .= "var data=[";
        for ($i=0;$i<$nrow;$i++)  {
            $content .= "[" . $items[3+$i]. "],"; 
        }
        $content .= "];";
        # hcluster of columns
        $content .= 'var clusters={"col":{"order":[';
        $content .= $items[3+$nrow];  
        $content .= '],"height":[';
        $content .= $items[4+$nrow];
        $content .= '],"merge":{';
        for ($i=1;$i<$ncol;$i++)  {
            $content .= (string)$i.":[".$items[4+$nrow+$i]."],";
        }
        $content .= '}},"row":{"order":[';
        $content .= $items[4+$nrow+$ncol];
        $content .= '],"height":[';
        $content .= $items[5+$nrow+$ncol];
        $content .= '],"merge":{';
        for ($i=1;$i<$nrow;$i++) {
            $content .= (string)$i.":[".$items[5+$nrow+$ncol+$i]."],";
        }
        $content .= '}}};'; 
    }
    return($content);
}

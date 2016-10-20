<?
function getsetup_viz_d3_bicluster()
{
     $options['_CREDITS']                = 'Main Developer: Jie Fang';
    $options['_MODULEDESCRIPTION']      = '<p>Data table: each row in this table represents a row on the heatmap.</p>    <p>Columns:</p>        <ul>        <li>Column 0: id</li>
        <li>Column 1: number</li>
        <li>Column...</li>        <li>Column N: number</li>        </ul>
<p>Result table: each row in the table represents a bi-cluster result.</p>       <p>Columns:</p>        <ul>        
         <li>Column 0(cluster id): number</li>
         <li>Column 1(row ids): string</li>
         <li>Column 2(column ids): string</li>
         <li>Column 3(selected cluster flag): number</li>
         <li>Column 4(timestamp): number</li>
       </ul>  For more information about D3 library, please, refer to <a href="http:d3js.org">Data-Driven Documents</a>';    
	
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

	$options[80]['name']				= 'tablename';
	$options[80]['description']			= 'Data table';
	$options[80]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[80]['type']				= 'Table';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';

	$options[81]['name']				= 'result_tablename';
	$options[81]['description']			= 'Bicluster result table';
	$options[81]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[81]['type']				= 'Table';
	$options[81]['link']				= 'link to further information..?';
	$options[81]['lookup']				= ''; 
	$options[81]['default']				= '';
	$options[81]['optional']			= 'no';
	$options[81]['repeatable']			= 'no';
	$options[81]['perdashboard']		= 'no';
	$options[81]['dependenton']			= '';
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
    $options[110]['description']        = 'Font size of horizontal label';
    $options[110]['detail']             = 'Please select the font size for the horizontal label';
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
/*	
	$options[120]['name']				= 'titlefontName';
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

function place_viz_d3_bicluster($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y']	= str_replace('px','',$dashboard_options['y']);
$str='';
	$str.= '<div id="cover'.$sid.'">';

	$str.= '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	$str.= '</div>';

    //$str.= '<div id="celement'.$sid.'" style="position:absolute;z-index:0; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
    $str.= '</div>';
	
	$content = reload_viz_d3_bicluster($sid,$value,$options,$setup);
    

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

.hline'.$sid.'{
  stroke: #000;
  stroke-width: 2px;
}

.vline'.$sid.'{
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
var gtimestamp'.$sid.' = undefined;
var x'.$sid.',y'.$sid.',z'.$sid.',c'.$sid.';
var clusters'.$sid.';
var svg'.$sid.';

function d3_bicluster'.$sid.'(_timestamp, data2d,rownames, colnames, _clusters,selected_cid){
  if (gtimestamp'.$sid.' == _timestamp) {
	order'.$sid.'(selected_cid);
    return;
  }
  gtimestamp'.$sid.' = _timestamp;
  clusters'.$sid.' = _clusters;

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

  var ncluster = 0;
console.log(n,m);
  for (var id in clusters'.$sid.') {
    item = clusters'.$sid.'[id];
    ncluster++;

    for (i=0; i<item.clusterx.length;i++)
      item.clusterx[i] = item.clusterx[i]-1;

    for (i=0; i<item.clustery.length;i++)
      item.clustery[i] = item.clustery[i]-1;

    var xfull = [],
        dictx = {};
    for (i=0; i< item.clusterx.length;i++) {
      xfull[i] = item.clusterx[i];
      dictx[item.clusterx[i]] = 0;
    }
    for (j=0; j< m; j++) {
      if ( !(j in dictx))
        xfull[i++] = j;
    }

    var yfull = [],
        dicty = {};
    for (i=0; i< item.clustery.length;i++) {
      yfull[i] = item.clustery[i];
      dicty[item.clustery[i]] = 0;
    }
    for (j=0; j< n; j++) {
      if (!(j in dicty))
        yfull[i++] = j;
    }
    item["x"] = xfull;
    item["y"] = yfull;
  }

  //d3.select("#clusterid")[0][0].options.length=0;
  //for (i=0;i<ncluster;i++) {
  //  d3.select("#clusterid")[0][0].options[i] = new Option((i+1)+"",i+1);
  // }
 
  var defaultCluster= clusters'.$sid.'[""+selected_cid];
  var hCEndPos = defaultCluster.clustery[defaultCluster.clustery.length-1];
  var vCEndPos = defaultCluster.clusterx[defaultCluster.clusterx.length-1];

console.log(defaultCluster);
  // color schema
  var clrname = "RdYlBu";
  var color = d3.scale.quantize().domain([dataMax, dataMin]).range(d3.range(11));


  // svg 
  var margin = {top: '.$dashboard_options['v_lbl_height'].', right: 50, left: '.$dashboard_options['h_lbl_width'].', bottom: 50},
      width = '.$dashboard_options['width'].'-'.$dashboard_options['h_lbl_width'].' - margin.right,
      height = '.$dashboard_options['height'].'-'.$dashboard_options['v_lbl_height'].'-margin.bottom;

  x'.$sid.' = d3.scale.ordinal().rangeBands([0, width]),
      y'.$sid.' = d3.scale.ordinal().rangeBands([0, height]),
      z'.$sid.' = d3.scale.linear().domain([0, 4]).clamp(true),
      c'.$sid.' = d3.scale.category10().domain(d3.range(10));

  d3.select("#velement'.$sid.'").select("svg").remove();
  svg'.$sid.' = d3.select("#velement'.$sid.'").append("svg")
      .attr("class", clrname)
      .attr("width", width + margin.left + margin.right)
      .attr("height", height + margin.top + margin.bottom)
      //.style("margin-left", -margin.left + "px")
      .append("g")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

  // The default sort order.
  x'.$sid.'.domain(defaultCluster.x);
  y'.$sid.'.domain(defaultCluster.y);

  svg'.$sid.'.append("rect")
   .attr("class", "background")
   .attr("width", width)
   .attr("height", height);

  var row = svg'.$sid.'.selectAll(".row'.$sid.'")
             .data(matrix)
             .enter().append("g")
             .attr("class", "row'.$sid.'")
             .attr("transform", function(d, i) { return "translate(0," + y'.$sid.'(i) + ")"; })
             .each(createrow);

  row.append("text")
   .attr("x", -6)
   .attr("y", y'.$sid.'.rangeBand() / 2)
   .attr("dy", ".32em")
   .attr("font-size",'.$dashboard_options['verticalTextSize'].')
   .attr("text-anchor", "end")
   .text(function(d, i) { return rownames[i]; });

  var column = svg'.$sid.'.selectAll(".column'.$sid.'")
                .data(d3.transpose(matrix))
                .enter().append("g")
                .attr("class", "column'.$sid.'")
                .attr("transform", function(d, i) { return "translate(" + x'.$sid.'(i) + ")rotate(-90)"; });

  row.append("line")
   .attr("x2", width);

  column.append("line")
      .attr("x1", -width);

  column.append("text")
      .attr("x", 6)
      .attr("y", x'.$sid.'.rangeBand() / 2)
      .attr("dy", ".32em")
      .attr("font-size",'.$dashboard_options['horizontalTextSize'].')
      .attr("text-anchor", "start")
      .text(function(d, i) { return colnames[i]; });

  // highlight lines
  svg'.$sid.'.append("line")
   .attr("class","hline'.$sid.'")
   .attr("x2",width)
   .attr("transform","translate(0,"+(y'.$sid.'(hCEndPos)+y'.$sid.'.rangeBand())+")")

  svg'.$sid.'.append("line")
   .attr("class","vline'.$sid.'")
   .attr("x1",-height)
   .attr("transform","translate("+(x'.$sid.'(vCEndPos)+x'.$sid.'.rangeBand())+")rotate(-90)")


  function createrow(row) {
    var cell = d3.select(this).selectAll(".cell'.$sid.'")
               //.data(row.filter(function(d) { return d.z; }))
               .data(row)
               .enter().append("rect")
               //.attr("class", "cell'.$sid.'")
               .attr("class", function(d) { return "cell'.$sid.' q"+color(d.z)+"-11"; })
               .attr("x", function(d) { return x'.$sid.'(d.x); })
               .attr("width", x'.$sid.'.rangeBand())
               .attr("height", y'.$sid.'.rangeBand())
               //.style("fill-opacity", function(d) { return z'.$sid.'(d.z); })
               //.style("fill", function(d) { return "q"+color(d.z)+"-11"; })
               .on("mouseover", mouseover)
               .on("mouseout", mouseout);
  }

  function mouseover(p) {
    d3.selectAll(".row'.$sid.' text").classed("active", function(d, i) { return i == p.y; });
    d3.selectAll(".column'.$sid.' text").classed("active", function(d, i) { return i == p.x; });
  }

  function mouseout() {
    d3.selectAll("text").classed("active", false);
  }

  /* select different clusters */
  d3.select("#clusterid").on("change", function() {
    //clearTimeout(timeout);
    order(this.value);
  });

  function order'.$sid.'(value) {
    x'.$sid.'.domain(clusters'.$sid.'[value].x);
    y'.$sid.'.domain(clusters'.$sid.'[value].y);
    hCEndPos = clusters'.$sid.'[value].clustery[clusters'.$sid.'[value].clustery.length-1];
    vCEndPos = clusters'.$sid.'[value].clusterx[clusters'.$sid.'[value].clusterx.length-1];

    var t = svg'.$sid.'.transition().duration(2500);

    t.selectAll(".row'.$sid.'")
     .delay(function(d, i) { return y'.$sid.'(i) * 4; })
     .attr("transform", function(d, i) { return "translate(0," + y'.$sid.'(i) + ")"; })
     .selectAll(".cell'.$sid.'")
     .delay(function(d) { return x'.$sid.'(d.x) * 4; })
     .attr("x", function(d) { return x'.$sid.'(d.x); });

    t.selectAll(".column'.$sid.'")
     .delay(function(d, i) { return x'.$sid.'(i) * 4; })
     .attr("transform", function(d, i) { return "translate(" + x'.$sid.'(i) + ")rotate(-90)"; });

    t.selectAll(".hline'.$sid.'")
     .delay(function(d, i) { return y'.$sid.'(i) * 4; })
     .attr("transform","translate(0,"+(y'.$sid.'(hCEndPos)+y'.$sid.'.rangeBand())+")")

    t.selectAll(".vline'.$sid.'")
     .delay(function(d, i) { return x'.$sid.'(i) * 4; })
     .attr("transform","translate("+(x'.$sid.'(vCEndPos)+x'.$sid.'.rangeBand())+")rotate(-90)")
  }
  /*
  var timeout = setTimeout(function() {
    order("2");
    //d3.select("#order").property("selectedIndex", 2).node().focus();
    }, 1000);
  */
}
' .$content.'
d3_bicluster'.$sid.'(timestamp'.$sid.',data'.$sid.',rownames'.$sid.',colnames'.$sid.',clusters'.$sid.',selected_cid'.$sid.');
</script>';

	$str.= '</div>';
	
	$str.= '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid #'.$dashboard_options['loadingHighlightColor'].'\';
				function reload'.$sid.'(dashboard, response)
				{
                    console.log("reload",response);
					place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
				}
				function reload_update'.$sid.'(response)
				{
                    console.log(response);
					eval(response);
                    d3_bicluster'.$sid.'(timestamp'.$sid.',data'.$sid.',rownames'.$sid.',colnames'.$sid.',clusters'.$sid.',selected_cid'.$sid.');
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					
				}
			</script>';
		return($str);
}

function reload_viz_d3_bicluster($sid, $value, $options, $setup)
{
	global $db;
	
	$dashboard_options = $options['dashboard_options'];

    $content = "";

    if (false) {	
        # read from database bicluster_result
        $result = $db->fetchAll("SELECT results,selected_cluster,timestamp FROM ".$options['tablename'].";");    
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
        #number of clusters
        $ncluster = (int)$items[3+$nrow];
        #read all clusters
        $content .= 'var clusters={';
        for ($i=0;$i<$ncluster;$i++)  {
            $buffer = $items[4+$nrow+$i*2];
            $content .= '"'. (string)($i+1). '":{"clustery":[' . $buffer . '],'; 
            $buffer = $items[4+$nrow+$i*2+1];
            $content .= '"clusterx":['.$buffer.']},';
        }
        $content .= '};';
        $content .= 'var selected_cid='.$result[0]["selected_cluster"].';';
        $content .= 'var timestamp='.$result[0]["timestamp"].';';
    }
	else
	{
		$content .= "var colnames".$sid."=[";
		$result = $db->fetchAll("select column_name from information_schema.columns where table_name ='"  .$options['tablename']."'");
		for($i=1; $i<count($result);$i++)
			$content .= "'".$result[$i]["column_name"]."',";
		$content .= "];";
		
		$content .= "var rownames".$sid."=[";
		$result = $db->fetchAll("select * from " .$options['tablename']);
		for($i=0; $i<count($result);$i++)
			$content .= "'".$result[$i]["id"] ."',";
		$content .= "];";

		$timestamp = 0; 

	    $content .= "var data".$sid."=[";
		foreach($result as $row){
			$i=0;
	    	$content .= "[";
			foreach($row as $item)
				if($i>0)
					$content .= $item .",";
				else
					$i++;
	    	$content .= "],";
		}
		$content .= "];";
		
		$result = $db->fetchAll("select * from ". $options['result_tablename']);
		$selected_id = 0;	
        $content .= 'var clusters'.$sid.'={';
		foreach($result as $row)
		{
			$content .= "'" . $row["clusterid"] . "':{'clustery':[" .$row["row_ids"]."],'clusterx':[".$row["col_ids"]."]},";
			if ($row["selected"] == 1){
				$selected_id = $row["clusterid"];
			}
			$timestamp = $row["timestamp"];
		}
        $content .= '};';

        $content .= 'var selected_cid'.$sid.'=' . $selected_id . ";";
        $content .= 'var timestamp'.$sid.'='.$timestamp.';';
	}
    return($content);
}

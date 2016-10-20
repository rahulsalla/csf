<?
function getsetup_viz_d3_pcp()
{
     $options['_CREDITS']                = 'Main Developer: Jie Fang';
    $options['_MODULEDESCRIPTION']      = '<p>Each row in the table represents a set of data points on one line with certain color.</p>    <p>Columns:</p>
        <ul>
        <li>Column 0: id</li>
        <li>Column 1: color</li>
        <li>Column 2: number</li>
        <li>Column ..</li>
        <li>Column N: number</li>
        </ul>
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
/*	
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
*/	
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

	$options[81]['name']				= 'id_col_name';
	$options[81]['description']			= 'Id column name';
	$options[81]['detail']				= 'Input color column name';
	$options[81]['type']				= 'Text';
	$options[81]['link']				= 'link to further information..?';
	$options[81]['lookup']				= ''; 
	$options[81]['default']				= 'id';
	$options[81]['optional']			= 'no';
	$options[81]['repeatable']			= 'no';
	$options[81]['perdashboard']		= 'no';
	$options[81]['dependenton']			= '';

	$options[82]['name']				= 'color_col_name';
	$options[82]['description']			= 'Color column name';
	$options[82]['detail']				= 'Input color column name';
	$options[82]['type']				= 'Text';
	$options[82]['link']				= 'link to further information..?';
	$options[82]['lookup']				= ''; 
	$options[82]['default']				= 'color';
	$options[82]['optional']			= 'no';
	$options[82]['repeatable']			= 'no';
	$options[82]['perdashboard']		= 'no';
	$options[82]['dependenton']			= '';

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
	
	$options[110]['name']				= 'titleTextSize';
	$options[110]['description']		= 'Please select the font size for the chart title';
	$options[110]['detail']				= 'Default: 15';
	$options[110]['type']				= 'Text';
	$options[110]['link']				= 'link to further information..?';
	$options[110]['lookup']				= ''; 
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
	$options[120]['lookup']				= '|Verdana|Arial Narrow|Arial|Helvetica Neue'; 
	$options[120]['default']			= 'Verdana';
	$options[120]['optional']			= 'no';
	$options[120]['repeatable']			= 'no';
	$options[120]['perdashboard']		= 'yes';
	$options[120]['dependenton']		= '';	
	
/*	
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
*/


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

/*	
	$options[210]['name']				= 'pointSize';
	$options[210]['description']		= 'diameter of displayed points in pixels';
	$options[210]['detail']				= 'Enter zero to hide all points. Default: 2';
	$options[210]['type']				= 'Integer';
	$options[210]['link']				= 'link to further information..?';
	$options[210]['lookup']				= ''; 
	$options[210]['default']			= '2';
	$options[210]['optional']			= 'no';
	$options[210]['repeatable']			= 'no';
	$options[210]['perdashboard']		= 'yes';
	$options[210]['dependenton']		= '';
	
	$options[220]['name']				= 'curveType';
	$options[220]['description']		= 'controls the curve of the lines when the line width is not zero';
	$options[220]['detail']				= 'can be one of the following. none:straight line without curve, or function:the angles of the line will be smoothed. Default: none';
	$options[220]['type']				= 'Text';
	$options[220]['link']				= 'link to further information..?';
	$options[220]['lookup']				= ''; 
	$options[220]['default']			= 'none';
	$options[220]['optional']			= 'no';
	$options[220]['repeatable']			= 'no';
	$options[220]['perdashboard']		= 'yes';
	$options[220]['dependenton']		= '';
	
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
	

	$options[250]['name']				= 'hAxisTextSize';
	$options[250]['description']		        = 'Font size of the horizontal axis text';
	$options[250]['detail']				= 'This is the font size of the horizontal axis text. Default: black';
	$options[250]['type']				= 'Text';
	$options[250]['link']				= 'link to further information..?';
	$options[250]['lookup']				= ''; 
	$options[250]['default']			= '';
	$options[250]['optional']			= 'no';
	$options[250]['repeatable']			= 'no';
	$options[250]['perdashboard']		= 'yes';
	$options[250]['dependenton']		= '';

    $options[251]['name']               = 'hAxisTextColor';
    $options[251]['description']                = 'Font color of the horizontal axis text';
    $options[251]['detail']             = 'This is the font color of the horizontal axis text. Default: black';
    $options[251]['type']               = 'Text';
    $options[251]['link']               = 'link to further information..?';
    $options[251]['lookup']             = '';
    $options[251]['default']            = '';
    $options[251]['optional']           = 'no';
    $options[251]['repeatable']         = 'no';
    $options[251]['perdashboard']       = 'yes';
    $options[251]['dependenton']        = '';
*/	
	$options[260]['name']				= 'vAxisColor';
	$options[260]['description']		= 'Color of the vertical axis';
	$options[260]['detail']				= 'This is the color of the vertical axis of the chart. Default: black';
	$options[260]['type']				= 'Color';
	$options[260]['link']				= 'link to further information..?';
	$options[260]['lookup']				= ''; 
	$options[260]['default']			= 'black';
	$options[260]['optional']			= 'no';
	$options[260]['repeatable']			= 'no';
	$options[260]['perdashboard']		= 'yes';
	$options[260]['dependenton']		= '';
/*	
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
*/	
	$options[280]['name']				= 'vAxisTextSize';
	$options[280]['description']		= 'Font size of the vertical axis text';
	$options[280]['detail']				= 'This is the font size of the vertical axis text. Default: black';
	$options[280]['type']				= 'Text';
	$options[280]['link']				= 'link to further information..?';
	$options[280]['lookup']				= ''; 
	$options[280]['default']			= '10';
	$options[280]['optional']			= 'no';
	$options[280]['repeatable']			= 'no';
	$options[280]['perdashboard']		= 'yes';
	$options[280]['dependenton']		= '';


    $options[291]['name']               = 'vAxisTitleColor';
    $options[291]['description']        = 'Font color of the vertical axis title';
    $options[291]['detail']             = 'This is the font color of the vertical axis text. Default: black';
    $options[291]['type']               = 'Color';
    $options[291]['link']               = 'link to further information..?';
    $options[291]['lookup']             = ''; 
    $options[291]['default']            = 'black';
    $options[291]['optional']           = 'no';
    $options[291]['repeatable']         = 'no';
    $options[291]['perdashboard']       = 'yes';
    $options[291]['dependenton']        = '';
    
    $options[290]['name']               = 'vAxisTextColor';
    $options[290]['description']        = 'Font color of the vertical axis text';
    $options[290]['detail']             = 'This is the font color of the vertical axis text. Default: black';
    $options[290]['type']               = 'Color';
    $options[290]['link']               = 'link to further information..?';
    $options[290]['lookup']             = ''; 
    $options[290]['default']            = 'black';
    $options[290]['optional']           = 'no';
    $options[290]['repeatable']         = 'no';
    $options[290]['perdashboard']       = 'yes';
    $options[290]['dependenton']        = '';

	
	$options[390]['name']				= 'loadingHighlightColor';
	$options[390]['description']		= 'Color of the highlight box that is shown when a module is loading';
	$options[390]['detail']				= 'This is the color of the highlight box that is shown when a module is loading. Default: red';
	$options[390]['type']				= 'Color';
	$options[390]['link']				= 'link to further information..?';
	$options[390]['lookup']				= ''; 
	$options[390]['default']			= 'red';
	$options[390]['optional']			= 'no';
	$options[390]['repeatable']			= 'no';
	$options[390]['perdashboard']		= 'yes';
	$options[390]['dependenton']		= '';
	
	$options[400]['name']				= 'loadingHighlightThickness';
	$options[400]['description']		= 'Thickness of the highlight box that is shown when a module is loading (in pixels)';
	$options[400]['detail']				= 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
	$options[400]['type']				= 'Text';
	$options[400]['link']				= 'link to further information..?';
	$options[400]['lookup']				= ''; 
	$options[400]['default']			= '2';
	$options[400]['optional']			= 'no';
	$options[400]['repeatable']			= 'no';
	$options[400]['perdashboard']		= 'yes';
	$options[400]['dependenton']		= '';
	return($options);
}

function place_viz_d3_pcp($sid, $value, $options, $setup)
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

	$content = reload_viz_d3_pcp($sid,$value,$options,$setup);
    

$str.= '
<style type="text/css">
body {
font-family: "Helvetica Neue", Helvetica;
}

svg {
  font: 10px sans-serif;
}

.background path {
  fill: none;
  stroke: #ccc;
  stroke-opacity: .4;
  shape-rendering: crispEdges;
}

.foreground path {
  fill: none;
  //stroke: steelblue;
  stroke-opacity: .7;
}

.brush .extent {
  fill-opacity: .3;
  stroke: #fff;
  shape-rendering: crispEdges;
}

.axis line, .axis path {
  fill: none;
  stroke: #'.$dashboard_options['vAxisColor'].';
  shape-rendering: crispEdges;
}

.axis text {
//  fill:#'.$dashboard_options['vAxisTextColor'].';
  font-size: '.$dashboard_options['vAxisTextSize'].';    
  text-shadow: 0 1px 0 #fff;
}
</style>
<script type="text/javascript">
function draw_d3_pcp'.$sid.'(data,colors){
var m = [100, 80, 40, 50],
    w = '.$dashboard_options['width'].' - m[1] - m[3],
    h = '.$dashboard_options['height'].' - m[0] - m[2];

var x = d3.scale.ordinal().rangePoints([0, w], .5),
    y = {};

var line = d3.svg.line(),
    axis = d3.svg.axis().orient("left"),
    background,
    foreground;

d3.select("#velement'.$sid.'").select("svg").remove();

var svg = d3.select("#velement'.$sid.'").append("svg")
    .attr("width", w + m[1] + m[3])
    .attr("height", h + m[0] + m[2])
  .append("g")
    .attr("transform", "translate(" + m[3] + "," + m[0] + ")");

//add title
svg.append("svg:text")
.attr("x",w/2)
.attr("y",-80)
.attr("text-anchor","middle")
.attr("font-size",'.$dashboard_options['titleTextSize'].')
.attr("fill","#'.$dashboard_options['titleTextColor'].'")
.attr("font-family","'.$dashboard_options['titlefontName'].'")
.text("'.$options['title'].'");


var data = data;
var color = colors;

// Extract the list of dimensions and create a scale for each.
x.domain(dimensions = d3.keys(data[0]).filter(
    function(d) {
        return d != "'.$options['id_col_name'].'" && (y[d] = d3.scale.linear().domain(d3.extent(data, function(p) { return +p[d]; })).range([h, 0]));
}));

// Add grey background lines for context.
background = svg.append("g")
.attr("class", "background")
.selectAll("path")
.data(data)
.enter().append("path")
.attr("d", path);

var  z = d3.scale.category20c();

// Add blue foreground lines for focus.
foreground = svg.append("g")
.attr("class", "foreground")
.selectAll("path")
.data(data)
.enter().append("path")
.attr("d", path)
.attr("index_value", function(d,i){return "index-"+i;})
.attr("stroke",function(d,i){return colors[i];})
.attr("stroke-width",'.$dashboard_options['lineWidth'].')
.on("mouseover",function(d){
    var txt_lbl = d3.selectAll(".showid'.$sid.'");
    txt_lbl.text("ID: "+d.id);
    var line = d3.select(this);
    line.style("stroke-width",'.$dashboard_options['lineWidth'].'+2);
})
.on("mouseout",function(d){
    d3.selectAll(".showid'.$sid.'").text("");
    var line = d3.select(this);
    line.style("stroke-width",'.$dashboard_options['lineWidth'].');
});

// Add a group element for each dimension.
var axisObjs = svg.selectAll(".dimension")
.data(dimensions)
.enter().append("g")
.attr("class", "dimension")
.attr("transform", function(d) { return "translate(" + x(d) + ")"; });

// Add an axis and title.
var xAxisObj = axisObjs.append("g")
.attr("class", "axis")
.each(function(d) { d3.select(this).call(axis.scale(y[d])); })
.attr("fill","#'.$dashboard_options['vAxisTextColor'].'")
.append("text")
.attr("text-anchor", "middle")
.attr("y", -5)
.text(String)
.attr("fill","#'.$dashboard_options['vAxisTitleColor'].'");

// Add and store a brush for each axis.
axisObjs.append("g")
.attr("class", "brush")
.each(function(d) { d3.select(this).call(y[d].brush = d3.svg.brush().y(y[d]).on("brush", brush)); })
.selectAll("rect")
.attr("x", -8)
.attr("width", 16);

// Note: following block should be put in a common/shared .js
//       since it is shared by all D3 charts
// Rotate text on x Axis
 console.log(xAxisObj.selectAll("text")[0].parentNode);

var x_lbl_width = 0;
var x_lbl_height =0;
var x_tick_lbls = xAxisObj.selectAll("text");
var lbl_list = new Array(); 
for (i=0; i<x_tick_lbls.length; i++)
{
    lbl = x_tick_lbls[i].parentNode;
    bbox = lbl.getBBox();
    x_lbl_width += bbox.width;
    x_lbl_height = bbox.width * 1.414/2.0/2.0;
    lbl_list.push(lbl);
}
if (x_lbl_width > w * 0.85)
{
    for (i=0;i<lbl_list.length;i++)
        lbl_list[i].setAttribute("transform", "translate("+x_lbl_height+",-"+x_lbl_height+")rotate(-45)");
    d3.select(".foreground").attr("transform","translate(0,"+x_lbl_height+")");
    d3.select(".background").attr("transform","translate(0,"+x_lbl_height+")");
    axisObjs.attr("transform",function(d){return "translate("+x(d)+","+x_lbl_height+")";});
}

//Add text for id display 
svg.append("text")
.attr("class","showid'.$sid.'")
.attr("x",0)
.attr("y",-70)
.attr("fill","#'.$dashboard_options['vAxisTitleColor'].'")
.attr("font-size",15)
.text("");

// Returns the path for a given data point.
function path(d) {
  return line(dimensions.map(function(p) { return [x(p), y[p](d[p])]; }));
}

// Handles a brush event, toggling the display of foreground lines.
function brush() {
  var actives = dimensions.filter(function(p) { return !y[p].brush.empty(); }),
      extents = actives.map(function(p) { return y[p].brush.extent(); });
  foreground.style("display", function(d) {
    return actives.every(function(p, i) {
      return extents[i][0] <= d[p] && d[p] <= extents[i][1];
    }) ? null : "none";
  });
}

}
'.$content.'
draw_d3_pcp'.$sid.'(data'.$sid.',colors'.$sid.');
</script>';


	$str.= '</div>';
	
	$str.= '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid #'.$dashboard_options['loadingHighlightColor'].'\';
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
					draw_d3_pcp'.$sid.'(data'.$sid.',colors'.$sid.');
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					
				}
			</script>';
		return($str);
}



function reload_viz_d3_pcp($sid, $value, $options, $setup)
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
	#create sql command to get the data from the table

    $sql = "select ";
	for($i=0; $i<count($name_type1);$i++)
		if($i==0) {
            $sql .= ' "'.$name_type1[$i][0].'"';
        }
		else {
            $sql .= ' ,"'.$name_type1[$i][0].'"';
        }
	$sql .= ' from "'.$options['tablename'].'"';
	$result	= $db->fetchAll($sql);

    $content = 'var data'.$sid.' = [';
	$i = 0;

	$color_col_name = $options['color_col_name'];

	foreach($result as $value)
	{
		if($i>0) $content  .= ',';

		$content .= '{';
        foreach($name_type1 as $col){
    		if ($col[0]<> $color_col_name)
				$content .='"'.$col[0].'":'.$value[$col[0]].",";
		}
		$content .= '}';
		$i++;
	} 
	$content .='];';
    
    $content .= 'var colors'.$sid.' = [';

    foreach($result as $value)
    {
        $content .= '"'.$value[$color_col_name].'",';
    }

    $content .= '];';
    return($content);
	
}

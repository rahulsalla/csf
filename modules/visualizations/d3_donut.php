<?
function getsetup_viz_d3_donut()
{
    $options['_CREDITS']                = 'Main Developer: Jie Fang, Shrijal Gandhi';
    $options['_MODULEDESCRIPTION']      = '<p>the donut pie chart describes the distribution of the percentage of the given data.</p>  
					   <p>Please specify sufficient colors for the data rows</p>
        				   <ul>
        				   <li>Column 0: id</li>
       					   <li>Column 1: number</li>
       					   <li>Column ..</li>
        				   <li>Column N: number</li>
     					   </ul>
 					For more information
					 <a href="http:d3js.org">Data-Driven Documents</a>';	
	$options[1]['name']				= 'x';
	$options[1]['description']			= 'Placement x coordinate';
	$options[1]['detail']				= 'Default: 500';
	$options[1]['type']				= 'Integer';
	$options[1]['link']				= 'link to further information..?';
	$options[1]['lookup']				= ''; 
	$options[1]['default']				= '150';
	$options[1]['optional']				= 'no';
	$options[1]['repeatable']			= 'no';
	$options[1]['perdashboard']			= 'yes';
	$options[1]['dependenton']			= '';

	$options[2]['name']				= 'y';
	$options[2]['description']			= 'Placement y coordinate';
	$options[2]['detail']				= 'Default: 500';
	$options[2]['type']				= 'Integer';
	$options[2]['link']				= 'link to further information..?';
	$options[2]['lookup']				= ''; 
	$options[2]['default']				= '500';
	$options[2]['optional']				= 'no';
	$options[2]['repeatable']			= 'no';
	$options[2]['perdashboard']			= 'yes';
	$options[2]['dependenton']			= '';	
	
	

     $options[3]['name']                               = 'width';
        $options[3]['description']                     = 'Width of the chart';
        $options[3]['detail']                          = 'Default: 600';
        $options[3]['type']                            = 'Integer';
        $options[3]['link']                            = 'link to further information..?';
        $options[3]['lookup']                          = '';
        $options[3]['default']                         = '600';
        $options[3]['optional']                        = 'no';
        $options[3]['repeatable']                      = 'no';
        $options[3]['perdashboard']            	       = 'yes';
        $options[3]['dependenton']                     = '';

        $options[4]['name']                            = 'height';
        $options[4]['description']                     = 'Height of the chart';
        $options[4]['detail']                          = 'Default: 500';
        $options[4]['type']                            = 'Integer';
        $options[4]['link']                            = 'link to further information..?';
        $options[4]['lookup']                          = '';
        $options[4]['default']                         = '500';
        $options[4]['optional']                        = 'no';
        $options[4]['repeatable']                      = 'no';
        $options[4]['perdashboard']            	       = 'yes';
        $options[4]['dependenton']                     = '';


    $options[29]['name']                           = 'labelColName';
        $options[29]['description']                    = 'Please select the label column Name';
        $options[29]['detail']                         = 'This selects the column number to be set as label name ';
        $options[29]['type']                           = 'Text';
        $options[29]['link']                           = 'link to further information..?';
        $options[29]['lookup']                         = '';
        $options[29]['default']                        = '';
        $options[29]['optional']                       = 'no';
        $options[29]['repeatable']                     = 'no';
        $options[29]['perdashboard']                   = 'yes';
        $options[29]['dependenton']                    = '';




        $options[30]['name']                           = 'dataColName';
        $options[30]['description']                    = 'Please select the data column number';
        $options[30]['detail']                         = 'This selects the data column number on the Donut Chart';
        $options[30]['type']                           = 'Text';
        $options[30]['link']                           = 'link to further information..?';
        $options[30]['lookup']                         = '';
        $options[30]['default']                        = '';
        $options[30]['optional']                       = 'no';
        $options[30]['repeatable']                     = 'no';
        $options[30]['perdashboard']                   = 'yes';
        $options[30]['dependenton']                    = '';


	$options[8]['name']				= 'tablename';
	$options[8]['description']			= 'From this table';
	$options[8]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[8]['type']				= 'Table';
	$options[8]['link']				= 'link to further information..?';
	$options[8]['lookup']				= ''; 
	$options[8]['default']				= '';
	$options[8]['optional']				= 'no';
	$options[8]['repeatable']			= 'no';
	$options[8]['perdashboard']			= 'no';
	$options[8]['dependenton']			= '';

	$options[9]['name']				= 'title';
	$options[9]['description']			= 'Please select the title of the graph';
	$options[9]['detail']				= 'This is the table that will be graphed.';
	$options[9]['type']				= 'Text';
	$options[9]['link']				= 'link to further information..?';
	$options[9]['lookup']				= ''; 
	$options[9]['default']				= '';
	$options[9]['optional']				= 'no';
	$options[9]['repeatable']			= 'no';
	$options[9]['perdashboard']			= 'no';
	$options[9]['dependenton']			= '';

    	$options[5]['name']                = 'colors';
    	$options[5]['description']         = 'Set the colors';
    	$options[5]['detail']              		= 'Colors for the lines.';
    	$options[5]['type']                		= 'Json';
    	$options[5]['link']                		= 'link to further information..?';
    	$options[5]['lookup']              		= ''; 
    	$options[5]['default']             		= json_decode('[{"color":"#1f77b4"},{"color":"#ff7f0e"},{"color":"#2ca02c"},{"color":"#d62728"},{"color":"#9467bd"},{"color":"#8c564b"},{"color":"#e377c2"},{"color":"#7f7f7f"},{"color":"#bcbd22"},{"color":"#17becf"}]');
    	$options[5]['optional']            		= 'no';
    	$options[5]['repeatable']          		= 'no';
    	$options[5]['perdashboard']        		= 'yes';
    	$options[5]['dependenton']         		= '';
    
	
	$options[11]['name']				= 'titleTextColor';
	$options[11]['description']			= 'Please select the color the chart title';
	$options[11]['detail']				= 'Default: white';
	$options[11]['type']				= 'Color';
	$options[11]['link']				= 'link to further information..?';
	$options[11]['lookup']				= ''; 
	$options[11]['default']				= 'black';
	$options[11]['optional']			= 'no';
	$options[11]['repeatable']			= 'no';
	$options[11]['perdashboard']			= 'yes';
	$options[11]['dependenton']			= '';	
	
	$options[13]['name']				= 'titleTextSize';
	$options[13]['description']			= 'Please select the font size for the chart title';
	$options[13]['detail']				= 'Default: 15';
	$options[13]['type']				= 'Dropdown';
	$options[13]['link']				= 'link to further information..?';
	$options[13]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[13]['default']				= '15';
	$options[13]['optional']			= 'no';
	$options[13]['repeatable']			= 'no';
	$options[13]['perdashboard']			= 'yes';
	$options[13]['dependenton']			= '';	
	
	$options[12]['name']				= 'titlefontName';
	$options[12]['description']			= 'Please select the font type for the chart title';
	$options[12]['detail']				= 'Default: Verdana';
	$options[12]['type']				= 'Dropdown';
	$options[12]['link']				= 'link to further information..?';
	$options[12]['lookup']				= '|Verdana|Arial Narrow|Arial|Helvetica Neue'; 
	$options[12]['default']				= 'Verdana';
	$options[12]['optional']			= 'no';
	$options[12]['repeatable']			= 'no';
	$options[12]['perdashboard']			= 'yes';
	$options[12]['dependenton']			= '';	
	
	


	$options[15]['name']				= 'loadingHighlightColor';
	$options[15]['description']			= 'Color of the highlight box that is shown when a module is loading';
	$options[15]['detail']				= 'This is the color of the highlight box that is shown when a module is loading. Default: red';
	$options[15]['type']				= 'Color';
	$options[15]['link']				= 'link to further information..?';
	$options[15]['lookup']				= ''; 
	$options[15]['default']				= 'red';
	$options[15]['optional']			= 'no';
	$options[15]['repeatable']			= 'no';
	$options[15]['perdashboard']			= 'yes';
	$options[15]['dependenton']			= '';
	
	$options[14]['name']				= 'loadingHighlightThickness';
	$options[14]['description']			= 'Thickness of the highlight box that is shown when a module is loading (in pixels)';
	$options[14]['detail']				= 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
	$options[14]['type']				= 'Text';
	$options[14]['link']				= 'link to further information..?';
	$options[14]['lookup']				= ''; 
	$options[14]['default']				= '2';
	$options[14]['optional']			= 'no';
	$options[14]['repeatable']			= 'no';
	$options[14]['perdashboard']			= 'yes';
	$options[14]['dependenton']			= '';


	$options[16]['name']                            = 'RadiusX';
        $options[16]['description']                     = 'Radius x-wise of the pie-chart';
        $options[16]['detail']                          = 'Default: 130';
        $options[16]['type']                            = 'Integer';
        $options[16]['link']                            = 'link to further information..?';
        $options[16]['lookup']                          = '';
        $options[16]['default']                         = '130';
        $options[16]['optional']                        = 'yes';
        $options[16]['repeatable']                      = 'no';
        $options[16]['perdashboard']            	= 'yes';
        $options[16]['dependenton']                     = '';


	$options[17]['name']                            = 'RadiusY';
        $options[17]['description']                     = 'Radius Y-wise of the pie-chart';
        $options[17]['detail']                          = 'Default: 100';
        $options[17]['type']                            = 'Integer';
        $options[17]['link']                            = 'link to further information..?';
        $options[17]['lookup']                          = '';
        $options[17]['default']                         = '100';
        $options[17]['optional']                        = 'yes';
        $options[17]['repeatable']                      = 'no';
        $options[17]['perdashboard']                    = 'yes';
        $options[17]['dependenton']                     = '';

	$options[18]['name']                            = 'HeightOfDonut';
        $options[18]['description']                     = 'Height of the Pie';
        $options[18]['detail']                          = 'Default: 30';
        $options[18]['type']                            = 'Integer';
        $options[18]['link']                            = 'link to further information..?';
        $options[18]['lookup']                          = '';
        $options[18]['default']                         = '30';
        $options[18]['optional']                        = 'yes';
        $options[18]['repeatable']                      = 'no';
        $options[18]['perdashboard']                    = 'yes';
        $options[18]['dependenton']                     = '';

	$options[19]['name']                            = 'MidR';
        $options[19]['description']                     = 'Mid - Radius of the pie-chart';
        $options[19]['detail']                          = 'Default: 0.4';
        $options[19]['type']                            = 'Integer';
        $options[19]['link']                            = 'link to further information..?';
        $options[19]['lookup']                          = '';
        $options[19]['default']                         = '0.4';
        $options[19]['optional']                        = 'yes';
        $options[19]['repeatable']                      = 'no';
        $options[19]['perdashboard']                    = 'yes';
        $options[19]['dependenton']                     = '';


  	$options[20]['name']                           = 'legendFontColor';
        $options[20]['description']                    = 'Please select the legend font color';
        $options[20]['detail']                         = 'Default: none';
        $options[20]['type']                           = 'Color';
        $options[20]['link']                           = 'link to further information..?';
        $options[20]['lookup']                         = '';
        $options[20]['default']                        = 'none';
        $options[20]['optional']                       = 'no';
        $options[20]['repeatable']                     = 'no';
        $options[20]['perdashboard']                   = 'yes';
        $options[20]['dependenton']                    = '';


  	$options[21]['name']                           = 'legendFontSize';
        $options[21]['description']                    = 'Please select the legend font size';
        $options[21]['detail']                         = 'Default: none';
        $options[21]['type']                           = 'Dropdown';
        $options[21]['link']                           = 'link to further information..?';
        $options[21]['lookup']                         = '|8|9|10|11|12|13|14|15|16';
        $options[21]['default']                        = '16';
        $options[21]['optional']                       = 'no';
        $options[21]['repeatable']                     = 'no';
        $options[21]['perdashboard']                   = 'yes';
        $options[21]['dependenton']                    = '';


  	$options[22]['name']                           = 'labelSize';
        $options[22]['description']                    = 'Please select the label Size';
        $options[22]['detail']                         = 'Default: none';
        $options[22]['type']                           = 'Dropdown';
        $options[22]['link']                           = 'link to further information..?';
        $options[22]['lookup']                         = '|8|9|10|11|12|13|14|15|16';
        $options[22]['default']                        = 'none';
        $options[22]['optional']                       = 'no';
        $options[22]['repeatable']                     = 'no';
        $options[22]['perdashboard']                   = 'yes';
        $options[22]['dependenton']                    = '';


  	$options[23]['name']                           = 'labelColor';
        $options[23]['description']                    = 'Please select the label Color';
        $options[23]['detail']                         = 'Default: none';
        $options[23]['type']                           = 'Color';
        $options[23]['link']                           = 'link to further information..?';
        $options[23]['lookup']                         = '';
        $options[23]['default']                        = '14';
        $options[23]['optional']                       = 'no';
        $options[23]['repeatable']                     = 'no';
        $options[23]['perdashboard']                   = 'yes';
        $options[23]['dependenton']                    = '';

 	$options[24]['name']                           = 'labelFontStyle';
        $options[24]['description']                    = 'Please select the label fontstyle (on the Pie)';
        $options[24]['detail']                         = 'Default: none';
        $options[24]['type']                           = 'Dropdown';
        $options[24]['link']                           = 'link to further information..?';
        $options[24]['lookup']                         = '|normal|italic|oblique';
        $options[24]['default']                        = 'normal';
        $options[24]['optional']                       = 'no';
        $options[24]['repeatable']                     = 'no';
        $options[24]['perdashboard']                   = 'yes';
        $options[24]['dependenton']                    = '';

 	$options[25]['name']                           = 'labelFontWeight';
        $options[25]['description']                    = 'Please select the label weight';
        $options[25]['detail']                         = 'Default: none';
        $options[25]['type']                           = 'Dropdown';
        $options[25]['link']                           = 'link to further information..?';
        $options[25]['lookup']                         = '|normal|lighter|bold|bolder';
        $options[25]['default']                        = 'normal';
        $options[25]['optional']                       = 'no';
        $options[25]['repeatable']                     = 'no';
        $options[25]['perdashboard']                   = 'yes';
        $options[25]['dependenton']                    = '';

 	$options[26]['name']                           = 'labelCo';
        $options[26]['description']                    = 'Please select the label Color';
        $options[26]['detail']                         = 'Default: none';
        $options[26]['type']                           = 'Dropdown';
        $options[26]['link']                           = 'link to further information..?';
        $options[26]['lookup']                         = '8|9|10|11|12|13|14';
        $options[26]['default']                        = '14';
        $options[26]['optional']                       = 'no';
        $options[26]['repeatable']                     = 'no';
        $options[26]['perdashboard']                   = 'yes';
        $options[26]['dependenton']                    = '';

	$options[27]['name']                           = 'legendFontWeight';
        $options[27]['description']                    = 'Please select the legend weight';
        $options[27]['detail']                         = 'Default: none';
        $options[27]['type']                           = 'Dropdown';
        $options[27]['link']                           = 'link to further information..?';
        $options[27]['lookup']                         = '|normal|lighter|bold|bolder';
        $options[27]['default']                        = 'normal';
        $options[27]['optional']                       = 'no';
        $options[27]['repeatable']                     = 'no';
        $options[27]['perdashboard']                   = 'yes';
        $options[27]['dependenton']                    = '';


  	$options[28]['name']                           = 'legendFontStyle';
        $options[28]['description']                    = 'Please select the legend fontstyle';
        $options[28]['detail']                         = 'Default: none';
        $options[28]['type']                           = 'Dropdown';
        $options[28]['link']                           = 'link to further information..?';
        $options[28]['lookup']                         = '|normal|italic|oblique';
        $options[28]['default']                        = 'normal';
        $options[28]['optional']                       = 'no';
        $options[28]['repeatable']                     = 'no';
        $options[28]['perdashboard']                   = 'yes';
        $options[28]['dependenton']                    = '';

/*    	$options[29]['name']                           = 'labelColName';
        $options[29]['description']                    = 'Please select the label column Name';
        $options[29]['detail']                         = 'This selects the column number to be set as label name ';
        $options[29]['type']                           = 'Text';
        $options[29]['link']                           = 'link to further information..?';
        $options[29]['lookup']                         = '';
        $options[29]['default']                        = '';
        $options[29]['optional']                       = 'no';
        $options[29]['repeatable']                     = 'no';
        $options[29]['perdashboard']                   = 'yes';
        $options[29]['dependenton']                    = '';
	



        $options[30]['name']                           = 'dataColName';
        $options[30]['description']                    = 'Please select the data column number';
        $options[30]['detail']                         = 'This selects the data column number on the Donut Chart';
        $options[30]['type']                           = 'Text';
        $options[30]['link']                           = 'link to further information..?';
        $options[30]['lookup']                         = '';
        $options[30]['default']                        = '';
        $options[30]['optional']                       = 'no';
        $options[30]['repeatable']                     = 'no';
        $options[30]['perdashboard']                   = 'yes';
        $options[30]['dependenton']                    = '';

*/


	$options[130]['name']                           = 'legendLocation';
        $options[130]['description']            	= 'Please select the legend placement';
        $options[130]['detail']                         = 'Default: none';
        $options[130]['type']                           = 'Dropdown';
        $options[130]['link']                           = 'link to further information..?';
        $options[130]['lookup']                         = '|place|none';
        $options[130]['default']                        = 'place';
        $options[130]['optional']                       = 'no';
        $options[130]['repeatable']                     = 'no';
        $options[130]['perdashboard']           	= 'yes';
        $options[130]['dependenton']            	= '';


  	$options[160]['name']                           = 'legendTextSize';
        $options[160]['description']            	= 'Please select the text size for the legend';
        $options[160]['detail']                         = 'Default: 10';
        $options[160]['type']                           = 'Dropdown';
        $options[160]['link']                           = 'link to further information..?';
        $options[160]['lookup']                         = '|8|9|10|11|12|13|14|15|16|17|18|19|20';
        $options[160]['default']                        = '10';
        $options[160]['optional']                       = 'no';
        $options[160]['repeatable']                     = 'no';
        $options[160]['perdashboard']           	= 'yes';
        $options[160]['dependenton']            	= '';




	return($options);
}

    function place_viz_d3_donut($sid, $value, $options, $setup)
    {
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y']	= str_replace('px','',$dashboard_options['y']);
	$str='';
	$str.= '<div id="cover'.$sid.'">';

	$str.= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).';
	 left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	
	$str.= '</div>';
	
    	//$str.= '<div id="celement'.$sid.'" style="position:absolute;z-index:0; top:'.($dashboard_options['y']).'px;
	// left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px
	 solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px;
	 left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; 
	 height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
    
	$str.= '</div>';
   	$str.= '</div>';

        $content = reload_viz_d3_donut($sid,$value,$options,$setup);
	//echo $content;
    	$str.= '
    	<style type="text/css">
	body {
  	
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  	width: '.$dashboard_options['width'].'px;
  	height: '.$dashboard_options['height'].'px;
  	position: relative;
	
	}
	
	path.slice'.$sid.' {
	
	stroke-width:2px;
	
	}
	
	polyline {
	
	opacity: .3;
	stroke: black;
	stroke-width: 2px;
	fill: none;
	
	} 
	
	svg text.percent'.$sid.'{
	
	fill:white;
	text-anchor:middle;
	font-size:12px;
	
	}

    	</style>    



    	<!--button onClick="changeData()">Change Data</button-->


   	<script type="text/javascript">



    	var old_legendLabel'.$sid.', old_data'.$sid.';

    	function draw_d3_donut'.$sid.'(labels'.$sid.',data'.$sid.',redraw)
    	{
	 var legendLabel = labels'.$sid.';
         var odata       = data'.$sid.';
  



        // define dimensions of graph
       // var m = [90, 200, 140, 150]; // margins
        var m'.$sid.' = [0, 0, 0, 0]; // margins
        var w'.$sid.' = '.$dashboard_options['width'].' ;  // width
        var h'.$sid.' = '.$dashboard_options['height'].' ; // height


        old_legendLabel'.$sid.' = legendLabel;
        old_data'.$sid.'        = odata;

        var colorArray'.$sid.' = '.json_encode($dashboard_options['colors']).';
	var svg = d3.select("#velement'.$sid.'").select("svg");


        var graph'.$sid.' = d3.select("#velement'.$sid.'").append("svg:svg")
                  .attr("width", w'.$sid.')
                  .attr("height", h'.$sid.')
                  .append("svg:g")
                  .attr("transform", "translate(" + 0 + "," + 0 + ")");







	//svg.remove();

	var Donut3D'.$sid.'={};
	
	function pieTop'.$sid.'(d, rx, ry, ir ) {
	
	if(d.endAngle - d.startAngle == 0 ) return "M 0 0";
	
	var sx = rx * Math.cos(d.startAngle),
	    sy = ry * Math.sin(d.startAngle),
	    ex = rx * Math.cos(d.endAngle),
	    ey = ry * Math.sin(d.endAngle);
			
	var ret =[];
		
	ret.push("M",sx,sy,"A",rx,ry,"0",(d.endAngle-d.startAngle > Math.PI? 1: 0),"1",ex,ey,"L",ir * ex,ir * ey);
	ret.push("A",ir*rx,ir*ry,"0",(d.endAngle-d.startAngle > Math.PI? 1: 0), "0",ir * sx,ir * sy,"z");
	
	return ret.join(" ");
	
	} //  end of pieTop

	function pieOuter'.$sid.'(d, rx, ry, h'.$sid.' )
	{
	    var startAngle = (d.startAngle > Math.PI ? Math.PI : d.startAngle);
	    var endAngle = (d.endAngle > Math.PI ? Math.PI : d.endAngle);
		
	    var sx = rx * Math.cos(startAngle),
		sy = ry * Math.sin(startAngle),
		ex = rx * Math.cos(endAngle),
		ey = ry * Math.sin(endAngle);
			
	    var ret =[];
			
	    ret.push("M",sx,h'.$sid.'+sy,"A",rx,ry,"0 0 1",ex,h'.$sid.'+ey,"L",ex,ey,"A",rx,ry,"0 0 0",sx,sy,"z");
	
	    return ret.join(" ");
	} //  end of pieOuter

	function pieInner'.$sid.'(d, rx, ry, h'.$sid.', ir ) {
	
	var startAngle = (d.startAngle < Math.PI ? Math.PI : d.startAngle);
	var endAngle = (d.endAngle < Math.PI ? Math.PI : d.endAngle);
		
	var sx = ir * rx * Math.cos(startAngle),
	    sy = ir * ry * Math.sin(startAngle),
	    ex = ir * rx * Math.cos(endAngle),
	    ey = ir * ry * Math.sin(endAngle);

	var ret =[];
	
	ret.push("M",sx, sy,"A",ir*rx,ir*ry,"0 0 1",ex,ey, "L",ex,h'.$sid.'+ey,"A",ir*rx, ir*ry,"0 0 0",sx,h'.$sid.'+sy,"z");
	
	return ret.join(" ");
	
	} //  end of  pieInner

	function getPercent'.$sid.'(d)
	{
	
	return (d.endAngle-d.startAngle > 0.2 ? 
	
	Math.round(1000*(d.endAngle-d.startAngle)/(Math.PI*2))/10+\'%\' : \'\');
	
	} // end of getPercent
	
	Donut3D'.$sid.'.transition = function(id, data'.$sid.', rx, ry, h'.$sid.', ir)
	{
	
	    function arcTweenInner'.$sid.'(a) 
	    {
		var i = d3.interpolate(this._current, a);
		this._current = i(0);
		  
		return function(t) { return pieInner'.$sid.'(i(t), rx+0.5, ry+0.5, h'.$sid.', ir);  };
	    }
	
	    function arcTweenTop'.$sid.'(a) {
		  var i = d3.interpolate(this._current, a);
		  this._current = i(0);
		  return function(t) { return pieTop'.$sid.'(i(t), rx, ry, ir);  };
		}
		function arcTweenOuter'.$sid.'(a) {
		  var i = d3.interpolate(this._current, a);
		  this._current = i(0);
		  return function(t) { return pieOuter'.$sid.'(i(t), rx-.5, ry-.5, h'.$sid.');  };
		}
		function textTweenX'.$sid.'(a) {
		  var i = d3.interpolate(this._current, a);
		  this._current = i(0);
		  return function(t) { return 0.6*rx*Math.cos(0.5*(i(t).startAngle+i(t).endAngle));  };
		}
		function textTweenY'.$sid.'(a) {
		  var i = d3.interpolate(this._current, a);
		  this._current = i(0);
		  return function(t) { return 0.6*rx*Math.sin(0.5*(i(t).startAngle+i(t).endAngle));  };
		}
		
		var _data = d3.layout.pie().sort(null).value(function(d) {return d.value;})(data'.$sid.');
		


	d3.select("#"+id).selectAll(".innerSlice").data(_data)
			.transition().duration(750).attrTween("d", arcTweenInner'.$sid.'); 
			
		d3.select("#"+id).selectAll(".topSlice").data(_data)
			.transition().duration(750).attrTween("d", arcTweenTop'.$sid.'); 
			
		d3.select("#"+id).selectAll(".outerSlice").data(_data)
			.transition().duration(750).attrTween("d", arcTweenOuter'.$sid.'); 	
			
		d3.select("#"+id).selectAll(".percent'.$sid.'").data(_data).transition().duration(750)
			.attrTween("x",textTweenX).attrTween("y",textTweenY).text(getPercent'.$sid.'); 	
	} // end of Donut transition function

	Donut3D'.$sid.'.draw'.$sid.'=function(id, data'.$sid.', x /*center x*/, y/*center y*/, 
			rx/*radius x*/, ry/*radius y*/, h'.$sid.'/*height*/, ir/*inner radius*/){
	
		var _data = d3.layout.pie().sort(null).value(function(d) {return d.value;})(data'.$sid.');
		
		var slices'.$sid.' = d3.select("#"+id).append("g").attr("transform", "translate(" + x + "," + y + ")")
			.attr("class", "slices'.$sid.'");
			
		slices'.$sid.'.selectAll(".innerSlice").data(_data).enter().append("path").attr("class", "innerSlice")
			.style("fill", function(d) { return d3.hsl(d.data.color).darker(0.7); })
			.attr("d",function(d){ return pieInner'.$sid.'(d, rx+0.5,ry+0.5, h'.$sid.', ir);})
			.each(function(d){this._current=d;});
		
		slices'.$sid.'.selectAll(".topSlice").data(_data).enter().append("path").attr("class", "topSlice")
			.style("fill", function(d) { return d.data.color; })
			.style("stroke", function(d) { return d.data.color; })
			.attr("d",function(d){ return pieTop'.$sid.'(d, rx, ry, ir);})
			.each(function(d){this._current=d;});
		
		slices'.$sid.'.selectAll(".outerSlice").data(_data).enter().append("path").attr("class", "outerSlice")
			.style("fill", function(d) { return d3.hsl(d.data.color).darker(0.7); })
			.attr("d",function(d){ return pieOuter'.$sid.'(d, rx-.5,ry-.5, h'.$sid.');})
			.each(function(d){this._current=d;});

		slices'.$sid.'.selectAll(".percent'.$sid.'").data(_data).enter().append("text").attr("class", "percent'.$sid.'")
			.attr("x",function(d){ return 0.6*rx*Math.cos(0.5*(d.startAngle+d.endAngle));})
			.attr("y",function(d){ return 0.6*ry*Math.sin(0.5*(d.startAngle+d.endAngle));})

			.text(getPercent'.$sid.').each(function(d){this._current=d ;})
			.style("font-size","'.$dashboard_options['labelSize'].'px")
			.style("font-style","'.$dashboard_options['labelFontStyle'].'")
	// the style of your font , with font style (bold/ italic and underline also set your font weight)
			.style("font-weight","'.$dashboard_options['labelFontWeight'].'")
	//		.style("stroke","#FFFFFF")
			// set your color for the percentages here
			.style("fill","'.$dashboard_options['labelColor'].'")
			.append("svg:title")
			.text(function(d){return d.data.label+" is "})
			.append("svg:text")	
			.attr("font_weight","bold")
			.text(getPercent'.$sid.').each(function(d){this._current=d ;})
			;

 	//var title = graph'.$sid.'.append("svg:text")
          //  .attr("x",'.$dashboard_options['x'].'+'.$dashboard_options['RadiusX'].')
          //  .attr("y",'.$dashboard_options['y'].')
           // .attr("text-anchor","middle")
           // .attr("font-size",'.$dashboard_options['titleTextSize'].')
          //  .attr("fill",\'#'.$dashboard_options['titleTextColor'].'\')
         //  .attr("font-family","\''.$dashboard_options['titlefontName'].'\'")
         //  .attr("font-family","Verdana Bold")
         //   .text("Hello");





	if("'.$dashboard_options['legendLocation'].'"!= "none")
	{
 	    var legend'.$sid.' = d3.select("#velement'.$sid.'").select("svg").append("svg")
            .attr("class", "legend'.$sid.'")
            .selectAll("g")
      	    .data(function(d,i){return data'.$sid.';})
     	 // .attr("x",'.$dashboard_options['width'].'-'.$dashboard_options['RadiusX'].')
     	 // .attr("y", '.$dashboard_options['height'].'-'.$dashboard_options['RadiusY'].')
            .enter().append("g")
            .attr("transform", function(d, i) { return "translate(0," + i * 19 + ")"; });




            legend'.$sid.'.append("rect")
      	    .attr("width", 18)
            .attr("height", 18)
            .style("fill", function(d,i){return colorArray'.$sid.'[i].color;})
            .attr("transform", function(d, i) { return "translate(10,0)"; });
            ;	
  
	    legend'.$sid.'.append("text")
            .attr("dx", "1em")
            .attr("dy", "1em")

	// If you want to see the value you can use "value"
        // Or else the "label"

           .text(function(d,i) { return data'.$sid.'[i].label; })
	
	//legend Color
	   .style("fill","'.$dashboard_options['legendFontColor'].'")
	
	//legend Font type
	   .style("font-style","'.$dashboard_options['legendFontStyle'].'")
	
	//legend font weight
	   .style("font-weight","'.$dashboard_options['legendFontWeight'].'")
	
	//legend font-size
	   .style("font-size","'.$dashboard_options['legendFontSize'].'")
	
	// Distance of the legend value from the legend color box 
           .attr("transform", function(d, i) { return "translate(20,0)"; });

	}

    } // end of Donut draw function
	
	this.Donut3D'.$sid.' = Donut3D'.$sid.';
	
 	var colorArray'.$sid.' = '.json_encode($dashboard_options['colors']).';

//	if(redraw == true)
        {
	    var salesData'.$sid.' = new Array();


            for(var i = 0; i< data'.$sid.'.length;i++)
            {

                salesData'.$sid.'.push({label:data'.$sid.'[i]['.$dashboard_options['labelColName'].'] ,color:colorArray'.$sid.'[i].color, value:data'.$sid.'[i]['.$dashboard_options['dataColName'].']});
               // salesData'.$sid.'.push({label:data'.$sid.'[i][0] ,color:colorArray'.$sid.'[i].color, value:data'.$sid.'[i][1]});

            }

	}

    	var svg = d3.select("#velement'.$sid.'").select("svg").append("svg").attr("width",'.$dashboard_options['width'].').attr("height",'.$dashboard_options['height'].');

    	svg.append("g").attr("id","salesDonut'.$sid.'");
	
	
	Donut3D'.$sid.'.draw'.$sid.'("salesDonut'.$sid.'", randomData'.$sid.'(), '.$dashboard_options['width'].'-'.$dashboard_options['RadiusX'].'-'.$dashboard_options['HeightOfDonut'].'-200, '.$dashboard_options['height'].'-'.$dashboard_options['RadiusY'].'-'.$dashboard_options['HeightOfDonut'].'-200, '.$dashboard_options['RadiusX'].', 
	'.$dashboard_options['RadiusY'].', '.$dashboard_options['HeightOfDonut'].','. $dashboard_options['MidR'].');
	//Donut3D.draw("quotesDonut", randomData(), 450, 150, 130, 100, 30, 0);

	function changeData(){
	}

	function randomData'.$sid.'()
	{	
        	return salesData'.$sid.'.map(function(d)
		{
			
                	return {
			label:d.label, value:d.value, color:d.color
			};
	
		});
	

	}

	return;
	}
 
	'.$content.'
    	draw_d3_donut'.$sid.'(legendLabels'.$sid.',data'.$sid.');


	</script>';

	$str .='</div>';
	
	$str .='

 	<script language="JavaScript" type="text/javascript">



        document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid #'.$dashboard_options['loadingHighlightColor'].'\';
        
	// on reload enter what happens                        
	function reload'.$sid.'(dashboard, response)
        {
            place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
        }

	// when calculating the elements on the dashboards
 
        function mark'.$sid.'(dashboard, response)
        {
            document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
        }


		// comparing the array if the scenarios have changed
		// comparing the elements of the array key by key
    		function compareArray(x, y) 
		{
                    if (x === y) 
		    {
			//For reference types:returns true if x and y points to same object
                        return true;
                    }
	
                    if (x.length != y.length)
		    {
                        return false;
                    }
                    for (key in x) 
		    {
                        if (x[key] !== y[key]) 
			{
			    //!== So that the the values are not converted while comparison
                            return false;
                        }
                    }
                    return true;
                }

                function compareId(x,y)
                {
                    for (var i = 0; i<y.length; i++) 
		    {
                        if (x[i][0] != y[i][0]) return false;
                    }
                    return true;
                }



 		function reload_update'.$sid.'(response)
                {
                    eval(response);
		    var redraw;

                    if (!compareArray(old_legendLabel'.$sid.',legendLabels'.$sid.'))
		    {
			redraw = false;
		    }
			//# of columns changed or legend text changed,redraw whole chart
                    else if (old_data'.$sid.'.length != data'.$sid.'.length) 
		    {
			redraw = false;
		    }
			//# of rows changed
                    
   		    else if (!compareId(old_data'.$sid.',data'.$sid.'))
		    {
			redraw = false;
		    }//ids of rows changed
                    
		    else 

		    {
			redraw = true;
		    }//only redraw change lines and y axis
		d3.select("#velement'.$sid.'").select("svg").remove();	
	
 		//var column_location'.$sid.' = (legendLabels'.$sid.').split(",");
          	//for(var i = 0; i<(legendLabels'.$sid.'.length); i++)
            	//if(legendLabels'.$sid.'[i] == "profit")
		//document.write("Found");



		draw_d3_donut'.$sid.'(legendLabels'.$sid.',data'.$sid.',redraw);
        	document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';

               }

		</script>';





	
	return($str);
    }



	function reload_viz_d3_donut($sid, $value, $options, $setup)
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
            $content = 'var legendLabels'.$sid.' = [';

        $sql = "select ";
        for($i = 0; $i < count($name_type1); $i++)
            if($i == 0) 
	    {
                $sql .= ' "'.$name_type1[$i][0].'"';
            }
            else 
	    {
                $sql .= ' ,"'.$name_type1[$i][0].'"';
                    if ($i < count($name_type1)-1)
		  	$content .= '"'.$name_type1[$i][0].'",';
            	    else 
	 		$content .= '"'.$name_type1[$i][0].'"';
            }
    		
	$content .= '];' ;
        $sql .= ' from "'.$options['tablename'].'"' ;
        $result = $db->fetchAll($sql) ;


    	$content .= 'var data'.$sid.' = [';
        
	$i = 0;
        
	foreach($result as $value)
        {
            if( $i > 0 ) 
		$content .= ',';

            $content .= '[';
                
	    for($j = 0 ;$j < count($value); $j++)
            {
            	if($j > 0) 
		    $content .=',';
            
		if ($name_type1[$j][2] == "string")
                    $content .= "'";
                    
	        $content .= $value[$name_type1[$j][0]];
            
		if ($name_type1[$j][2] == "string")
                    $content .= "'";
            }
            
	    $content .= ']';
            $i++;
        }

        $content .='];';

        return($content);

	
    }

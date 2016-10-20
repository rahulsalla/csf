<?
function getsetup_viz_d3_Cubism()
{
    $options['_CREDITS']                = 'Main Developer: Jie Fang';
    $options['_MODULEDESCRIPTION']      = '<p>Each row in the table represents an event on one day.</p>    <p>Columns:</p>
         <ul>
         <li>Column 0: date</li>
         <li>Column 1(event): string</li>       
</ul> For more information about D3 library, please, refer to      <a href="http:d3js.org">Data-Driven Documents</a>';	
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
	$options[30]['detail']				= 'Default: 800';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '800';
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

	$options[81]['name']				= 'dateColumn';
	$options[81]['description']			= 'Date column name';
	$options[81]['detail']				= '';
	$options[81]['type']				= 'Text';
	$options[81]['link']				= 'link to further information..?';
	$options[81]['lookup']				= ''; 
	$options[81]['default']				= '';
	$options[81]['optional']			= 'no';
	$options[81]['repeatable']			= 'no';
	$options[81]['perdashboard']		= 'no';
	$options[81]['dependenton']			= '';
	
	$options[82]['name']				= 'typeColumn';
	$options[82]['description']			= 'Event column name';
	$options[82]['detail']				= '';
	$options[82]['type']				= 'Text';
	$options[82]['link']				= 'link to further information..?';
	$options[82]['lookup']				= ''; 
	$options[82]['default']				= '';
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
	$options[100]['detail']				= 'Default: white';
	$options[100]['type']				= 'Color';
	$options[100]['link']				= 'link to further information..?';
	$options[100]['lookup']				= ''; 
	$options[100]['default']			= '#000000';
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
	$options[190]['type']				= 'Dropdown';
	$options[190]['link']				= 'link to further information..?';
	$options[190]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
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
*/	
	$options[240]['name']				= 'hAxis';
	$options[240]['description']		= 'Color of the horizontal axis';
	$options[240]['detail']				= 'This is color of the horizontal axis line';
	$options[240]['type']				= 'Color';
	$options[240]['link']				= 'link to further information..?';
	$options[240]['lookup']				= ''; 
	$options[240]['default']			= '#000000';
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
	$options[250]['default']			= '15';
	$options[250]['optional']			= 'no';
	$options[250]['repeatable']			= 'no';
	$options[250]['perdashboard']		= 'yes';
	$options[250]['dependenton']		= '';

    $options[251]['name']               = 'hAxisTextColor';
    $options[251]['description']                = 'Font color of the horizontal axis text';
    $options[251]['detail']             = 'This is the font color of the horizontal axis text. Default: black';
    $options[251]['type']               = 'Color';
    $options[251]['link']               = 'link to further information..?';
    $options[251]['lookup']             = '';
    $options[251]['default']            = '#000000';
    $options[251]['optional']           = 'no';
    $options[251]['repeatable']         = 'no';
    $options[251]['perdashboard']       = 'yes';
    $options[251]['dependenton']        = '';
	
	$options[260]['name']				= 'vAxisColor';
	$options[260]['description']		= 'Color of the vertical axis';
	$options[260]['detail']				= 'This is the color of the vertical axis of the chart. Default: black';
	$options[260]['type']				= 'Color';
	$options[260]['link']				= 'link to further information..?';
	$options[260]['lookup']				= ''; 
	$options[260]['default']			= '#000000';
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
	$options[280]['default']			= '15';
	$options[280]['optional']			= 'no';
	$options[280]['repeatable']			= 'no';
	$options[280]['perdashboard']		= 'yes';
	$options[280]['dependenton']		= '';

    $options[290]['name']               = 'vAxisTextColor';
    $options[290]['description']        = 'Font color of the vertical axis text';
    $options[290]['detail']             = 'This is the font color of the vertical axis text. Default: black';
    $options[290]['type']               = 'Color';
    $options[290]['link']               = 'link to further information..?';
    $options[290]['lookup']             = ''; 
    $options[290]['default']            = '#000000';
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

function place_viz_d3_cubism($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y']	= str_replace('px','',$dashboard_options['y']);
      $str='';  
	$width_cubism=$dashboard_options['width'];
        // The number of data in the chart 
	$number_of_data_elements=4;	
	// Substracting the pixels of (text,above and below the chart contents) to fit into the chart height
        $height_cubism=($dashboard_options['height']-($number_of_data_elements*54))/$number_of_data_elements;	
       //  $str.= $height_cubism;
         $str.= '<div id="cover'.$sid.'"> ';

	$str.= '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';

	$str.= '<div id = "cubism'.$sid.'" align="center"></div>';
    $str.= '</div>';

    //$str.= '<div id="celement'.$sid.'" style="position:absolute;z-index:0; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
    $str.= '</div>';
	$content = reload_viz_d3_cubism($sid,$value,$options,$setup);

    $ajax = new phplivex(array("update_data"));
    $ajax->run();

    $str.= '
<style type="text/css">
#cubism'.$sid.' {
  font-family:"helvetica neue", helvetica, sans-serif;
  margin: 50px auto;
  width:'.$width_cubism.'px;
  position: relative; 
}

header'.$sid.' {
  padding: 6px 0;
}

.group'.$sid.' {
  margin-bottom: 1em;
}

.axis'.$sid.' {
  font: 10px sans-serif;
  //position: fixed;
  pointer-events: none;
  z-index: 2;
}

    .axis'.$sid.' text {
      -webkit-transition: fill-opacity 250ms linear;
      fill: #'.$dashboard_options['hAxisTextColor'].';
    }

    .axis'.$sid.' path {
      display: none;
		fill: none;
		stroke:#C5BFC7;
    }

    .axis'.$sid.' line {
      stroke: #'.$dashboard_options['hAxis'].';
      shape-rendering: crispedges;
    }

    .axis'.$sid.'.top {
     // background-image: linear-gradient(top, #fff 0%, rgba(255,255,255,0) 100%);
     // background-image: -o-linear-gradient(top, #fff 0%, rgba(255,255,255,0) 100%);
     // background-image: -moz-linear-gradient(top, #fff 0%, rgba(255,255,255,0) 100%);
     // background-image: -webkit-linear-gradient(top, #fff 0%, rgba(255,255,255,0) 100%);
     // background-image: -ms-linear-gradient(top, #fff 0%, rgba(255,255,255,0) 100%);
      //top: 0px;
      padding: -24px 0 0 0;
    }

    .axis'.$sid.'.bottom {
/*
      background-image: linear-gradient(bottom, #fff 0%, rgba(255,255,255,0) 100%);
      background-image: -o-linear-gradient(bottom, #fff 0%, rgba(255,255,255,0) 100%);
      background-image: -moz-linear-gradient(bottom, #fff 0%, rgba(255,255,255,0) 100%);
      background-image: -webkit-linear-gradient(bottom, #fff 0%, rgba(255,255,255,0) 100%);
      background-image: -ms-linear-gradient(bottom, #fff 0%, rgba(255,255,255,0) 100%);
*/      //bottom: 0px;
      //padding: 24px 0 0 0;
    }

.horizon'.$sid.' {
  border-bottom: solid 1px #000;
  overflow: hidden;
  position: relative;
}

.horizon'.$sid.' {
//padding-top:'.$height_cubism.'px;
border-top:solid  1px  #000; 
border-bottom:solid 1px #000;

}

.horizon'.$sid.' + .horizon {
  border-top: none;
}

.horizon'.$sid.' canvas {
  display: block;
  background-color:white;
}

.horizon'.$sid.' .title,
.horizon'.$sid.' .value {
  bottom: 0;
  line-height: 30px;
  margin: 0 6px;
  position: absolute;
  text-shadow: 0 1px 0 rgba(255,255,255,.5);
  white-space: nowrap;
}

.horizon'.$sid.' .title {
  left: 0;
}

.horizon'.$sid.' .value {
  right: 0;
}

.line {
  background: #000;
  //opacity: .2;
  z-index: 2;
}
@media all and (max-width:1439px) {
  body { margin: 0px auto; }
  .axis { position: static; }
  .axis.top, .axis.bottom { padding: 0; }
}
</style>
<body>
<script type="text/javascript">

function draw_d3_Cubism'.$sid.'(lastday,types){
	d3.select("#cubism'.$sid.'").selectAll(".horizon'.$sid.'").remove();
	d3.select("#cubism'.$sid.'").selectAll(".axis'.$sid.'").remove();
	d3.select("#cubism'.$sid.'").selectAll("span").remove();
        
	// making the width dynamic to fit in the box
	var context = cubism.context()
              .serverDelay(Date.now() - new Date(lastday)-24*60*60*1000*2)
              .step(24*60*60*1000)//one day
              .size("'.$width_cubism.'");


    d3.select("#cubism'.$sid.'").append("span")
            .style("font-size",'.$dashboard_options['titleTextSize'].')
            .style("color","#'.$dashboard_options['titleTextColor'].'")
            .style("font-family","'.$dashboard_options['titlefontName'].'")
            .text("'.$options['title'].'");

	d3.select("#cubism'.$sid.'").selectAll(".axis'.$sid.'")
    	.data(["top", "bottom"])
	  .enter().append("div")
    	.attr("class", function(d) { return d + " axis'.$sid.'"; })
    	.attr("stroke","#000")
    	.each(function(d) { d3.select(this).call(context.axis().ticks(12).orient(d)); });

	d3.select("#cubism'.$sid.'").append("div")
    	.attr("class", "rule")
	    .call(context.rule());

	d3.select("#cubism'.$sid.'").selectAll(".horizon")
    	.data(types.map(crimes'.$sid.'))
  		.enter().insert("div", ".bottom")
    	.attr("class", "horizon'.$sid.'")
  		.call(context.horizon().colors(["#08519c", "#3182bd", "#6baed6", "#bdd7e7","#FFB8B8", "#FF8F93", "#FF5257", "#FF0F0F"])
  		.format(d3.format("+,.3p")));

	context.on("focus", function(i) {
  		d3.selectAll(".horizon'.$sid.' .value").style("right", i == null ? null : context.size() - i + "px");
	});

	
    function crimes'.$sid.'(type) {
    	return context.metric(function(start, stop, step, callback) {
              // NOTE:get data from database using start,stop,step
              var format = d3.time.format("%Y-%m-%d");
              days = Math.ceil((stop-start)/(24*60*60*1000))-1;
              start = format(start);
              stop = format(stop);
              console.log("inner",start,stop,days,type);

             update_data(
                "'.$options["tablename"].'","'.$options["dateColumn"].'","'.$options["typeColumn"].'",start,stop,days,type,
                {"onFinish":
                    function(response){
                        eval(response);

                        var total = 0;
						var real_days = 0;
						
                        for(i=0;i<values.length;i++){
							if ( dates[i] > firstday)
								real_days += 1;
                            total = total + values[i];
						}

                        var average = total/real_days;
console.log(average, real_days);

                        for(i=0;i<values.length;i++){
							if ( dates[i] > firstday)
	                            values[i] = (values[i]-average)/average;
						}

                        callback(null, values.slice(-context.size()));
                    }
                });
          }, type);
        }
	}
	'.$content.'
	draw_d3_Cubism'.$sid.'(lastday'.$sid.',types'.$sid.');
</script>';


    $str.= '
</div>
    <script language="JavaScript" type="text/javascript">
		document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid #'.$dashboard_options['loadingHighlightColor'].'\';
        function reload'.$sid.'(dashboard, response)
        {
            place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response);}});
        }
        function mark'.$sid.'(dashboard, response)
        {
			document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
            document.getElementById("celement'.$sid.'").style.height=document.getElementById("velement'.$sid.'").style.height;
        }
        function reload_update'.$sid.'(response)
        {
            eval(response);
            draw_d3_Cubism'.$sid.'(lastday'.$sid.',types'.$sid.');
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
        }
    </script>';
return($str);
}

function reload_viz_d3_Cubism($sid, $value, $options, $setup)
{
	global $db;
	
    date_default_timezone_set('UTC');

    #create sql command to get the data from the table
    $sql = 'select max('.$options['dateColumn'].') as lastday from '.$options['tablename'];
    $result = $db->fetchAll($sql);
    $content = 'var lastday'.$sid.' = "'.date("Y,m,d",strtotime($result[0]['lastday'])).'"';
    $sql = 'select distinct('.$options['typeColumn'].') as type from '.$options['tablename'];
    $result = $db->fetchAll($sql);
    $content .= '; var types'.$sid.' = [';
    
    for($i=0;$i<count($result);$i++)
    {
        $content.= '"'.$result[$i]['type'].'",';
    } 
    $content .=']';
    return($content);
}


function update_data($tablename,$datecolumn,$typecolumn,$start_date,$end_date, $days, $type)
{
    global $db;

    #create sql command to get the data from the table
    $sql = "SELECT series.date, COALESCE(accum.count,0) AS count"
         . " FROM (SELECT generate_series(0,".$days.")+'".$start_date."'::date AS date) series"
         . " LEFT JOIN"
         . "   (SELECT obs.".$datecolumn." AS date, count(obs.".$datecolumn.") AS count"
         . "     FROM ".$tablename." obs"
         . "     WHERE obs.".$typecolumn."= '".$type. "'"
         . "     GROUP BY obs.".$datecolumn.") accum"
         . " ON series.date = accum.date"
         . " ORDER BY series.date;" ;
    $result = $db->fetchAll($sql);
    $content = 'var values=[';
    foreach($result as $value)
    {
        $content.= $value['count'].',';
    } 
    $content .='];';

    $content .= 'var dates=[';
    foreach($result as $value)
    {
        $content.= "'".$value['date']."',";
    } 
    $content .='];';
	
    $sql = 'select min('.$datecolumn.') as firstday from '.$tablename;
    $result = $db->fetchAll($sql);

    $content .= 'var firstday = "'.date("Y,m,d",strtotime($result[0]['firstday'])).'";';
	
    return $content; 
}

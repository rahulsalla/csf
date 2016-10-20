<?
function getsetup_viz_d3_barchart_stack_exp()
{
    $options['_CREDITS']                = 'Main Developer: Jie Fang';
    $options['_MODULEDESCRIPTION']      = '<p>Each row in the table represents a group of bars.</p>    <p>Columns:</p>
        <ul>
        <li>Column 0: id</li>
        <li>Column 1: number</li>
        <li>Column ..</li>
        <li>Column N: number</li>
        </ul>

 For more information about D3 library, please, refer to      <a href="http:d3js.org">Data-Driven Documents</a>';
	
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
	$options[40]['perdashboard']	        	= 'yes';
	$options[40]['dependenton']			= '';	



        $options[39]['name']                            = 'ticksCount';
        $options[39]['description']                     = 'Ticks of the chart';
        $options[39]['detail']                          = 'Default: 10';
        $options[39]['type']                            = 'Integer';
        $options[39]['link']                            = 'link to further information..?';
        $options[39]['lookup']                          = '';
        $options[39]['default']                         = '10';
        $options[39]['optional']                        = 'no';
        $options[39]['repeatable']                      = 'no';
        $options[39]['perdashboard']                    = 'yes';
        $options[39]['dependenton']                     = '';

	
/*	$options[50]['name']				= 'backgroundColor';
	$options[50]['description']			= 'Background color of the chart';
	$options[50]['detail']				= 'Default: black';
	$options[50]['type']				= 'Text';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= 'black';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']	        	= 'yes';
	$options[50]['dependenton']			= '';	

	$options[60]['name']				= 'barcolor';
	$options[60]['description']			= 'Filled color of bars';
	$options[60]['detail']				= 'Default: blue';
	$options[60]['type']				= 'Text';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= 'blue';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']	        	= 'yes';
	$options[60]['dependenton']			= '';	
	
	$options[70]['name']				= 'strokecolor';
	$options[70]['description']			= 'Stroke color of bars';
	$options[70]['detail']				= 'Default: black';
	$options[70]['type']				= 'Text';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']				= 'black';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']	        	= 'yes';
	$options[70]['dependenton']			= '';		
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

   	$options[81]['name']                            = 'columnname';
        $options[81]['description']                     = 'From this column';
        $options[81]['detail']                          = 'choose the column you want to graph. refer to the module description for table format';
        $options[81]['type']                            = 'Text';
        $options[81]['link']                            = 'link to further information..?';
        $options[81]['lookup']                          = '';
        $options[81]['default']                         = '';
        $options[81]['optional']                        = 'no';
        $options[81]['repeatable']                      = 'no';
        $options[81]['perdashboard']            = 'no';
        $options[81]['dependenton']                     = '';


	$options[82]['name']                            = 'columnvalue';
        $options[82]['description']                     = 'where value of column';
        $options[82]['detail']                          = 'where the value of the column equals';
        $options[82]['type']                            = 'Text';
        $options[82]['link']                            = 'link to further information..?';
        $options[82]['lookup']                          = '';
        $options[82]['default']                         = '';
        $options[82]['optional']                        = 'no';
        $options[82]['repeatable']                      = 'no';
        $options[82]['perdashboard']            	= 'no';
        $options[82]['dependenton']                     = '';


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

	$options[95]['name']				= 'colors';
	$options[95]['description']			= 'Set the colors';
	$options[95]['detail']				= 'Colors for the bars.';
	$options[95]['type']				= 'Json';
	$options[95]['link']				= 'link to further information..?';
	$options[95]['lookup']				= ''; 
	$options[95]['default']				= json_decode('[{"color":"#1f77b4"},{"color":"#ff7f0e"},{"color":"#2ca02c"},{"color":"#d62728"},{"color":"#9467bd"},{"color":"#8c564b"},{"color":"#e377c2"},{"color":"#7f7f7f"},{"color":"#bcbd22"},{"color":"#17becf"}]');
	$options[95]['optional']			= 'no';
	$options[95]['repeatable']			= 'no';
	$options[95]['perdashboard']		= 'yes';
	$options[95]['dependenton']			= '';
	
	$options[100]['name']				= 'titleTextColor';
	$options[100]['description']		= 'Please select the color of the chart title';
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
	$options[110]['description']		= 'Please select the font size of the chart title';
	$options[110]['detail']				= 'Default: 15';
	$options[110]['type']				= 'Dropdown';
	$options[110]['link']				= 'link to further information..?';
	$options[110]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[110]['default']			= '18';
	$options[110]['optional']			= 'no';
	$options[110]['repeatable']			= 'no';
	$options[110]['perdashboard']		= 'yes';
	$options[110]['dependenton']		= '';	
	
	$options[120]['name']				= 'titlefontName';
	$options[120]['description']		= 'Please select the font of the chart title';
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
	$options[130]['detail']				= 'Default: none ';
	$options[130]['type']				= 'Dropdown';
	$options[130]['link']				= 'link to further information..?';
	$options[130]['lookup']				= '|right|left|top|bottom|none';
	$options[130]['default']			= 'none';
	$options[130]['optional']			= 'no';
	$options[130]['repeatable']			= 'no';
	$options[130]['perdashboard']		= 'yes';
	$options[130]['dependenton']		= '';

  	$options[140]['name']                            = 'maxvalue';
        $options[140]['description']                     = 'Maximum value of the graph';
        $options[140]['detail']                          = 'This is the maximum value of the graph.';
        $options[140]['type']                            = 'Integer';
        $options[140]['link']                            = 'link to further information..?';
        $options[140]['lookup']                          = '';
        $options[140]['default']                         = '0';
        $options[140]['optional']                        = 'yes';
        $options[140]['repeatable']                      = 'no';
        $options[140]['perdashboard']            	 = 'yes';
        $options[140]['dependenton']                     = '';


	$options[141]['name']                            = 'yRange';
        $options[141]['description']                     = 'Width of the single value of the graph';
        $options[141]['detail']                          = 'This is the y range value of the graph.';
        $options[141]['type']                            = 'Integer';
        $options[141]['link']                            = 'link to further information..?';
        $options[141]['lookup']                          = '';
        $options[141]['default']                         = '100';
        $options[141]['optional']                        = 'yes';
        $options[141]['repeatable']                      = 'no';
        $options[141]['perdashboard']                    = 'yes';
        $options[141]['dependenton']                     = '';



	
	
/*	
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
/*	
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
*/	
	$options[200]['name']				= 'isStacked';
	$options[200]['description']		= 'If set to true, series elements are stacked.';
	$options[200]['detail']				= 'The chart elements will be stacked if set to true, not, if false. Default: False';
	$options[200]['type']				= 'Dropdown';
	$options[200]['link']				= 'link to further information..?';
	$options[200]['lookup']				= '|true|false'; 
	$options[200]['default']			= 'false';
	$options[200]['optional']			= 'no';
	$options[200]['repeatable']			= 'no';
	$options[200]['perdashboard']		= 'yes';
	$options[200]['dependenton']		= '';
	
	$options[230]['name']				= 'hAxisTitle';
	$options[230]['description']		        = 'Title of the horizontal axis';
	$options[230]['detail']				= 'This is the title of the horizontal axis in the chart.';
	$options[230]['type']				= 'Text';
	$options[230]['link']				= 'link to further information..?';
	$options[230]['lookup']				= ''; 
	$options[230]['default']			= '';
	$options[230]['optional']			= 'no';
	$options[230]['repeatable']			= 'no';
	$options[230]['perdashboard']		= 'yes';
	$options[230]['dependenton']		= '';
	
	$options[240]['name']				= 'hAxisTitleColor';
	$options[240]['description']		        = 'Color of the horizontal axis title';
	$options[240]['detail']				= 'This is the color of the horizontal axis title in the chart';
	$options[240]['type']				= 'Color';
	$options[240]['link']				= 'link to further information..?';
	$options[240]['lookup']				= ''; 
	$options[240]['default']			= 'black';
	$options[240]['optional']			= 'no';
	$options[240]['repeatable']			= 'no';
	$options[240]['perdashboard']		= 'yes';
	$options[240]['dependenton']		= '';
	

	$options[241]['name']				= 'hAxisTitleSize';
	$options[241]['description'] 	    = 'Font size of the horizontal axis title';
	$options[241]['detail']				= 'Please select the font type of the horizontal axis title';
	$options[241]['type']				= 'Dropdown';
	$options[241]['link']				= 'link to further information..?';
	$options[241]['lookup']				= '6|7|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[241]['default']			= '15';
	$options[241]['optional']			= 'no';
	$options[241]['repeatable']			= 'no';
	$options[241]['perdashboard']		        = 'yes';
	$options[241]['dependenton']		        = '';

	$options[250]['name']				= 'hAxisColor';
	$options[250]['description']		        = 'Color of the horizontal axis text';
	$options[250]['detail']				= 'This is the color of the horizontal axis text. Default: black';
	$options[250]['type']				= 'Color';
	$options[250]['link']				= 'link to further information..?';
	$options[250]['lookup']				= ''; 
	$options[250]['default']			= 'black';
	$options[250]['optional']			= 'no';
	$options[250]['repeatable']			= 'no';
	$options[250]['perdashboard']		= 'yes';
	$options[250]['dependenton']		= '';

    $options[253]['name']               = 'hAxisTextType';
    $options[253]['description']        = 'Please select the type of the horizontal axis text';
    $options[253]['detail']             = 'Please select the type of the horizontal axis text. Default: string';    
    $options[253]['type']               = 'Dropdown';
    $options[253]['link']               = 'link to further information..?';
    $options[253]['lookup']             = 'string|integer';
    $options[253]['default']            = 'string';
    $options[253]['optional']           = 'no';
    $options[253]['repeatable']         = 'no';
    $options[253]['perdashboard']       = 'yes';
    $options[253]['dependenton']        = '';

	$options[251]['name']				= 'hAxisTextSize';
	$options[251]['description'] 	        	= 'Font size of the horizontal axis text';
	$options[251]['detail']				= 'Please select the font size of the horizontal axis text. Default: 10';
	$options[251]['type']				= 'Dropdown';
	$options[251]['link']				= 'link to further information..?';
	$options[251]['lookup']				= '6|7|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
	$options[251]['default']			= '12';
	$options[251]['optional']			= 'no';
	$options[251]['repeatable']			= 'no';
	$options[251]['perdashboard']		        = 'yes';
	$options[251]['dependenton']		        = '';

    $options[252]['name']               = 'hAxisLineColor';
    $options[252]['description']                = 'Color of the horizontal axis line';
    $options[252]['detail']             = 'This is the color of the horizontal axis line. Default: black';
    $options[252]['type']               = 'Color';
    $options[252]['link']               = 'link to further information..?';
    $options[252]['lookup']             = '';  
    $options[252]['default']            = '#000000';
    $options[252]['optional']           = 'no';
    $options[252]['repeatable']         = 'no';
    $options[252]['perdashboard']       = 'yes';
    $options[252]['dependenton']        = '';
    
    
	$options[260]['name']				= 'vAxisTitle';
	$options[260]['description']		= 'Title of the vertical axis';
	$options[260]['detail']				= 'This is the title of the vertical axis of the chart';
	$options[260]['type']				= 'Text';
	$options[260]['link']				= 'link to further information..?';
	$options[260]['lookup']				= ''; 
	$options[260]['default']			= '';
	$options[260]['optional']			= 'no';
	$options[260]['repeatable']			= 'no';
	$options[260]['perdashboard']		= 'yes';
	$options[260]['dependenton']		= '';
	
	$options[270]['name']				= 'vAxisTitleColor';
	$options[270]['description']		= 'Font color of the vertical axis title';
	$options[270]['detail']				= 'This is the font color of the vertical axis of the chart. Default: black';
	$options[270]['type']				= 'Color';
	$options[270]['link']				= 'link to further information..?';
	$options[270]['lookup']				= ''; 
	$options[270]['default']			= '#000000';
	$options[270]['optional']			= 'no';
	$options[270]['repeatable']			= 'no';
	$options[270]['perdashboard']		= 'yes';
	$options[270]['dependenton']		= '';
	
    $options[271]['name']               = 'vAxisTitleSize';
    $options[271]['description']        = 'Font size of the vertical axis title';
    $options[271]['detail']             = 'Please select the font size of the vertical axis title. Defa
ult: 10';
    $options[271]['type']               = 'Dropdown';
    $options[271]['link']               = 'link to further information..?';
    $options[271]['lookup']             = '6|7|8|9|10|11|12|13|14|15|16|17|18|19|20';
    $options[271]['default']            = '15';
    $options[271]['optional']           = 'no';
    $options[271]['repeatable']         = 'no';
    $options[271]['perdashboard']       = 'yes';
    $options[271]['dependenton']        = '';
	
	$options[280]['name']				= 'vAxisColor';
	$options[280]['description']		= 'Color of the vertical axis text';
	$options[280]['detail']				= 'This is the color of the vertical axis text. Default: black';
	$options[280]['type']				= 'Color';
	$options[280]['link']				= 'link to further information..?';
	$options[280]['lookup']				= ''; 
	$options[280]['default']			= '#000000';
	$options[280]['optional']			= 'no';
	$options[280]['repeatable']			= 'no';
	$options[280]['perdashboard']		= 'yes';
	$options[280]['dependenton']		= '';
	
	$options[281]['name']               = 'vAxisTextSize';
    $options[281]['description']        = 'Font size of the vertical axis text';
    $options[281]['detail']             = 'Please select the font size of the vertical axis text. Default: 10';
    $options[281]['type']               = 'Dropdown';
    $options[281]['link']               = 'link to further information..?';
    $options[281]['lookup']             = '6|7|8|9|10|11|12|13|14|15|16|17|18|19|20';
    $options[281]['default']            = '12';
    $options[281]['optional']           = 'no';
    $options[281]['repeatable']         = 'no';
    $options[281]['perdashboard']               = 'yes';
    $options[281]['dependenton']                = '';
   

	$options[282]['name']               = 'vAxisStyle';
    $options[282]['description']        = 'Select the style of vertical axis';
    $options[282]['detail']             = 'Please select the style of the vertical axis. Default: rule';
    $options[282]['type']               = 'Dropdown';
    $options[282]['link']               = 'link to further information..?';
    $options[282]['lookup']             = 'rule|tick';
    $options[282]['default']            = 'rule';
    $options[282]['optional']           = 'no';
    $options[282]['repeatable']         = 'no';
    $options[282]['perdashboard']               = 'yes';
    $options[282]['dependenton']                = '';
   

	$options[283]['name']				= 'highlightColor';
	$options[283]['description']		= 'Color of hightlighting bars';
	$options[283]['detail']				= 'Please select the color for hightlighting bars . Default: Maroon';
	$options[283]['type']				= 'Color';
	$options[283]['link']				= 'link to further information..?';
	$options[283]['lookup']				= ''; 
	$options[283]['default']			= 'Maroon';
	$options[283]['optional']			= 'no';
	$options[283]['repeatable']			= 'no';
	$options[283]['perdashboard']		= 'yes';
	$options[283]['dependenton']		= '';


	$options[290]['name']				= 'loadingHighlightColor';
	$options[290]['description']		= 'Color of the highlight box that is shown when a module is loading';
	$options[290]['detail']				= 'This is the color of the highlight box that is shown when a module is loading. Default: red';
	$options[290]['type']				= 'Color';
	$options[290]['link']				= 'link to further information..?';
	$options[290]['lookup']				= ''; 
	$options[290]['default']			= '#FF0000';
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

function place_viz_d3_barchart_stack_exp($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	$str='';

	$content = reload_viz_d3_barchart_stack_exp($sid,$value,$options,$setup);
	
    $str.= '<div id="cover'.$sid.'">';
	//$str.= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str.= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:200px;">';
	$str.= '</div>';
	//$str.= '<div id="celement'.$sid.'" style="position:absolute;z-index:0; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	//$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:200px;">';
	$str.= '</div>';
	$str.= '</div>';

	$str.= '
<style type="text/css">
    body {
        font-family: "Helvetica Neue", Helvetica;
    }

    .y.axis'.$sid.' line, .y.axis'.$sid.' path {
        fill: none;
        stroke-width: 1;
        stroke: #'.$dashboard_options['vAxisColor'].';
    }

    .y.axis'.$sid.' text {
        font-size: '.$dashboard_options['vAxisTextSize'].';
  	fill:#'.$dashboard_options['vAxisColor'].';
    }
</style>

<script type="text/javascript">
    var old_legendLabel'.$sid.',
        old_data'.$sid.';

    function grouped_d3_barchart_stack_exp'.$sid.'(labels, data, redraw)
    {

        var legendLabel = labels;
        var odata = data;
        var n = odata.length; // number of rows
        var m = odata[0].length-1; // number of cols, ignore first item as label
        var data = new Array(m);
        for (i=0; i<m; i++) 
            data[i] = new Array();
        for (i=0; i<odata.length; i++)
        {
            var row = odata[i];
            for (j=1; j<row.length;j++)
                data[j-1][i] =row[j];
        }
       
	// Change for user-defined max values done here
	//if('.$dashboard_options['maxvalue'].' == 0)
        //var data_max = d3.max(data, function(d){return d3.max(d);});
        //else
	var data_max = '.$dashboard_options['maxvalue'].';
        old_legendLabel'.$sid.' = legendLabel;
        old_data'.$sid.' = odata;
        
        var label = new Array(n);
        for (i=0; i<n; i++) 
            label[i] = odata[i][0];
        
        var w = '.$dashboard_options['width'].',
            h = '.$dashboard_options['height'].',
            x = d3.scale.linear().domain([data_max,0]).range([h-220, 0]),
            y0 = d3.scale.ordinal().domain(d3.range(n)).rangeBands([0, w-160], .2),
            y1 = d3.scale.ordinal().domain(d3.range(m)).rangeBands([0, y0.rangeBand()]);
        
        var colorArray = '.json_encode($dashboard_options['colors']).';
        
        var svg = d3.select("#velement'.$sid.'").select("svg");
        
        if (redraw== true)
        {
            //remove y axis
            svg.select("g").selectAll("g.rule").remove();
            svg.select("g").selectAll("g.y.axis'.$sid.'").remove();
        
            if ("'.$dashboard_options['vAxisStyle'].'" == "rule"){
                // Add y-axis rules
                var rule = svg.select("g").selectAll("g.rule")
               //     .data(x.ticks(12))
                    .data(x.ticks('.$dashboard_options['ticksCount'].'))
                    .enter().append("svg:g")
                    .attr("class", "rule")
                   //.attr("transform", function(d) { return "translate(0," + (h-x(d)) + ")"; });
                    .attr("transform", function(d) { return "rotate(90)translate(150," + (0-x(d)) + ")"; });
                rule.append("svg:line")
                    //.attr("x2", w-160)
                    .attr("x2", '.$dashboard_options['yRange'].'+20)
                    .style("stroke", function(d) { return d ? "#ccc" : "#'.$dashboard_options['hAxisLineColor'].'"; })
                    .style("stroke-opacity",function(d) { return d ? .7 : null; });
                rule.append("svg:text")
                    .attr("x", -20)
                    .attr("dy", ".35em")
                    .attr("font-size",'.$dashboard_options['vAxisTextSize'].')
                    .attr("fill","#'.$dashboard_options['vAxisColor'].'")
                    .attr("transform", function(d) { return "rotate(-90)"; })
                    .text(d3.format(",d"));
            }
            else 
            {
                //add y axis ticks
                var x1        = d3.scale.linear().domain([0,data_max]).range([h-220,0]);
                var yAxisLeft = d3.svg.axis().scale(x1).ticks(6).orient("left");
                var yAxis     = svg.select("g").append("svg:g")
                    .attr("class", "y axis'.$sid.'")
                    .attr("transform", "translate(0,220)")
                    .attr("fill","#'.$dashboard_options['vAxisColor'].'")
                    .call(yAxisLeft);
            }
            //redraw bars
            var new_data = new Array();
            for (i=0;i<data.length;i++)
                for (j=0;j<data[i].length;j++)
                    new_data.push(data[i][j]);
            svg.selectAll("rect")
                .data(new_data)
                .transition()
                .duration(500)
                .attr("height", x)
                .attr("y", function(d) { return h - x(d); });
            return;
        }

        svg.remove();

        var vis = d3.select("#velement'.$sid.'")
            .append("svg:svg")
            .attr("width", w)
            .attr("height", h)
            .append("svg:g")
            .attr("transform", "translate(90,-130)");
        
        var synchronizedMouseOver = function() {
              var bar = d3.select(this);
              var indexValue = bar.attr("index_value");
              
              var barSelector = "." +"'.$sid.'bar-" + indexValue;
              var selectedbar = d3.selectAll(barSelector);
              selectedbar.style("fill","#'.$dashboard_options['highlightColor'].'");

              var bulletSelector = "." +  "'.$sid.'bar-legendBullet-" + indexValue;
              var selectedLegendBullet = d3.selectAll(bulletSelector);
              selectedLegendBullet.style("fill", "#'.$dashboard_options['highlightColor'].'");
              
              var textSelector = "." +"'.$sid.'bar-legendText-" + indexValue;
              var selectedLegendText = d3.selectAll(textSelector);
              selectedLegendText.style("fill", "#'.$dashboard_options['highlightColor'].'").style("font-weight","bolder");
            };

              var synchronizedMouseOut = function() {
              var bar = d3.select(this);
              var indexValue = bar.attr("index_value");
              
              var barSelector = "." +"'.$sid.'bar-" + indexValue;
              var selectedbar = d3.selectAll(barSelector);
              var colorValue = selectedbar.attr("color_value");
              selectedbar.style("fill", colorValue);

              var bulletSelector = "." + "'.$sid.'bar-legendBullet-" + indexValue;
              var selectedLegendBullet = d3.selectAll(bulletSelector);
              var colorValue = selectedLegendBullet.attr("color_value");
              selectedLegendBullet.style("fill", colorValue);

              var textSelector = "." + "'.$sid.'bar-legendText-" + indexValue;
              var selectedLegendText = d3.selectAll(textSelector);
              var colorValue = selectedLegendText.attr("color_value");
              selectedLegendText.style("fill", colorValue).style("font-weight","normal");
            };

        var g = vis.selectAll("g")
            .data(data)
            .enter().append("svg:g")
            .attr("fill", function(d, i) { return colorArray[i].color; })
            .attr("legendid",function(d,i){return i;})
            .attr("index_value",function(d,i){return "index-"+ i;})
            .attr("class",function(d,i){return "'.$sid.'bar-index-"+ i;})
            .attr("color_value",function(d,i){return colorArray[i].color;})
            .attr("transform", function(d, i) { return "translate(" + y1(i) + ",0)"; })
            .on("mouseover",synchronizedMouseOver)
            .on("mouseout",synchronizedMouseOut);

//Change needed here
        var rect = g.selectAll("rect")
            .data(Object)
            .enter().append("svg:rect")
           //.attr("transform", function(d, i) { return "translate(" + y0(i) + ",0)"; })
		//Translate over the Y axis, changed from -800 to -685
            .attr("transform", function(d, i) { return "rotate(90)translate(160,-685)"; })
           // .attr("width", y1.rangeBand())
	// Change here to suit the width of the graph which is rotated	
        //    .attr("width", 100)
            .attr("width", '.$dashboard_options['yRange'].')
            .attr("height",0)
            .attr("y",h)
            .attr("id",function(d,i){return i;})
            .on("mouseover",function(){
                d3.select(this)
                    .append("svg:title")
                    .text(function(d){return label[d3.select(this.parentNode).attr("id")]+"\n"+legendLabel[d3.select(this.parentNode.parentNode).attr("legendid")]+": "+d;})       
                    })
             .on("mouseout",function(){
                d3.select(this)
            })
            .transition()
            .duration(500)
            .attr("height", x)
            .attr("y", function(d) { return h - x(d); });
       
        //horizontal labels
        var text = vis.selectAll("text")
            .data(label)
            .enter().append("svg:text")
            .attr("class", "group")
            .attr("transform", function(d, i){
                xPos = y0(i) + y0.rangeBand()/2;
                yPos = h + 5;
                return "translate("+xPos+","+yPos+")"; })
            .attr("dy", ".71em")
            .attr("text-anchor", "middle")
            .attr("font-size",'.$dashboard_options['hAxisTextSize'].')
            .attr("fill","#'.$dashboard_options['hAxisColor'].'");
          //  .text(function(d) { return d;});
        
        var comma = d3.format(",");

        if ("'.$dashboard_options['hAxisTextType'].'" == "integer") 
            text.text(function(d) { return comma(d);});

        // Rotate text on x Axis
        var x_lbl_width = 0;
        var x_lbl_height =0;
        var x_tick_lbls = text[0];
        var lbl_list = new Array(); 
        for (i=0; i<x_tick_lbls.length; i++)
        {
            lbl = x_tick_lbls[i];
            bbox = lbl.getBBox();
            x_lbl_width += bbox.width;
            x_lbl_height = bbox.width * 1.414/2.0/2.0;
            lbl_list.push(lbl);
        }
        if (x_lbl_width > (w-160) * 0.85)
        {
            text.attr("transform", function(d, i){
                xPos = y0(i) + y0.rangeBand()/2-x_lbl_height;
                yPos = h + 5 + x_lbl_height;
                return "translate("+xPos+","+yPos+")rotate(-45)"; })
           
             text.attr("opacity",function(d,i){
                if(x_lbl_width/w > 2 && x_lbl_width/w < 6)
                {
                    if(i%2 != 0)
                    {
                        return "0";
                    }
                }
                else if(x_lbl_width/w >= 6 && x_lbl_width/w < 8)
                {
                    if(i%3 != 0)
                    {
                        return "0";
                    }
                }
                else if(x_lbl_width/w >= 8 && x_lbl_width/w < 10)
               {
                    if(i%4 != 0)
                    {
                        return "0";
                    }
                }
                else if(x_lbl_width/w >= 10 && x_lbl_width/w < 12)
               {
                    if(i%5 != 0)
                    {
                        return "0";
                    }
                }
                else if(x_lbl_width/w >= 12)
               {
                    if(i%6 != 0)
                    {
                        return "0";
                    }
                }

                })
        }

         //Add legend circle
        var legendlocation = "'.$dashboard_options['legendlocation'].'",
            legendX = 0,
            legendTextX = 0,
            legendY = 0,
            legendTextY = 0;

        if (legendlocation != "none")
        {
            if (legendlocation == "right") {
                legendX = w-150;
                legendTextX = w-142;
                legendY = function(d, i) { return 160+i*20; };
                legendTextY =function(d, i) { return 163 + i*20; };
            }
            else if (legendlocation == "left") {       
                legendX = -80;
                legendTextX = -72;
                legendY = function(d, i) { return 160+i*20; };
                legendTextY =function(d, i) { return 163+i*20; };
            }
            else if (legendlocation == "top") {       
                legendX = function(d, i) { return  i*80; };
                legendTextX = function(d, i) { return 8 + i*80; };
                legendY = 180;
                legendTextY = 183;
            }
            else if (legendlocation == "bottom") {       
                legendX = function(d, i) { return i*80; };
                legendTextX = function(d, i) { return  8+i*80; };
                legendY = h+50;
                legendTextY = h+53;
            }
            vis.selectAll("circle")
                .data(legendLabel).enter().append("svg:circle")
                .attr("cx",legendX)
                .attr("cy", legendY)
                .attr("stroke-width", ".5")
                .style("fill", function(d, i) { return colorArray[i].color; }) // Bar fill color
                .attr("r", 5)
                .attr("index_value", function(d, i) { return "index-" + i; })
                .attr("class", function(d, i) { return "'.$sid.'bar-legendBullet-index-" + i; })
                .attr("color_value", function(d, i) { return colorArray[i].color; })
                .attr("type","legendicon")
                .on("mouseover",synchronizedMouseOver)
                .on("mouseout",synchronizedMouseOut);
            // add legend text
            vis.selectAll("a")
                .data(legendLabel).enter().append("svg:a")
                .append("text")
                .attr("x", legendTextX)
                .attr("y", legendTextY )
                .attr("text-anchor","left")
                .attr("font-size",12)
                .style("fill",function(d,i){return colorArray[i].color;})
                .attr("index_value",function(d,i){return "index-"+i;})
                .attr("class",function(d,i){return "'.$sid.'bar-legendText-index-"+i;})
                .attr("color_value", function(d, i) { return colorArray[i].color; })
                .attr("type","legendtext")
                .text(function(d){return d;})
                .on("mouseover",function(d){
                      var bar = d3.select(this);
                      var indexValue = bar.attr("index_value");
              
                      var barSelector = "." +"'.$sid.'bar-" + indexValue;
                      var selectedbar = d3.selectAll(barSelector);
                      selectedbar.style("fill","#'.$dashboard_options['highlightColor'].'");
              
                      var bulletSelector = "." +  "'.$sid.'bar-legendBullet-" + indexValue;
                      var selectedLegendBullet = d3.selectAll(bulletSelector);
                      selectedLegendBullet.style("fill", "#'.$dashboard_options['highlightColor'].'");
              
                      var textSelector = "." +"'.$sid.'bar-legendText-" + indexValue;
                      var selectedLegendText = d3.selectAll(textSelector);
                      selectedLegendText.style("fill", "#'.$dashboard_options['highlightColor'].'");
                      
                     if (d.length> 5) {d3.select(this).append("svg:title").text(d);}
                 })
                .on("mouseout",synchronizedMouseOut);

            // adjust the position of legend
            var legendLbls = vis.selectAll("[type=legendtext]");
            var legendIcons = vis.selectAll("[type=legendicon]");
            var legend_width = 0;
            if (legendlocation == "top" || legendlocation == "bottom") 
            {
                var iconX= new Array();
                var lblX= new Array();
                for (i=0; i < legendLbls[0].length; i++)
                {
                    icon_w = legendIcons[0][i].getBBox().width; 
                    lbl_w = legendLbls[0][i].getBBox().width;
                    iconX[i] = legend_width;
                    lblX[i] = iconX[i] + icon_w;
                    legend_width += icon_w + lbl_w+25;
                }
                if (legend_width > w)
                {
                    // trim text
                    var trim_percentage = (legend_width - w) / legend_width;
                    legendLbls.text(function(d){
                        ori_len = d.length;
                        new_len = ori_len - parseInt(ori_len * trim_percentage)-3; // 3 is for ...
                        if (new_len<0) new_len = 0;
                        if (ori_len == new_len) return d;
                        return d.substring(0,new_len)+"..."; 
                        });
                    // recalc positions
                    legend_width = 0;
                    for (i=0; i < legendLbls[0].length; i++)
                    {
                        icon_w = legendIcons[0][i].getBBox().width; 
                        lbl_w = legendLbls[0][i].getBBox().width;
                        iconX[i] = legend_width;
                        lblX[i] = iconX[i] + icon_w;
                        legend_width += icon_w + lbl_w+25;
                    }
                }
                legendX = function(d, i) { return iconX[i]; };
                legendTextX = function(d, i) { return  lblX[i]; };
                legendLbls.attr("x",legendTextX);
                legendIcons.attr("cx",legendX);
            }
            else if (legendlocation == "left")
            {
                var max_legend_width = 0;
                var trim_labels = new Array();
                for (i=0; i < legendLbls[0].length; i++)
                {
                    lbl = legendLabel[i];
                    icon_w = legendIcons[0][i].getBBox().width; 
                    lbl_w = legendLbls[0][i].getBBox().width;
                    legend_width = icon_w + lbl_w;
                    if (legend_width > 65)
                    {
                        ori_len = lbl.length;
                        new_len = parseInt(ori_len*(1-(legend_width-65)/legend_width)-3);
                        trim_labels.push(lbl.substring(0,new_len)+"...");
                    }
                    else
                        trim_labels.push(lbl);
                }
                legendLbls.text(function(d,i){return trim_labels[i];});
            }
        }
        if ("'.$dashboard_options['vAxisStyle'].'" == "rule"){
            // Add y-axis rules
            var rule = vis.selectAll("g.rule")
             //   .data(x.ticks(10))
                .data(x.ticks('.$dashboard_options['ticksCount'].'))
                .enter().append("svg:g")
                .attr("class", "rule")
               // .attr("transform", function(d) { return "translate(0," + (h-x(d)) + ")"; });

                    .attr("transform", function(d) { return "rotate(90)translate(150," + (0-x(d)) + ")"; });
            rule.append("svg:line")
             //   .attr("x2", w-160)
                  //  .attr("x2", 120)
            .attr("x2", '.$dashboard_options['yRange'].'+20)
                .style("stroke", function(d) { return d ? "#ccc" : "#'.$dashboard_options['hAxisLineColor'].'"; })
                .style("stroke-opacity",function(d) { return d ? .7 : null; });

            rule.append("svg:text")
                .attr("x", -20)
                .attr("dy", ".35em")
                .attr("font-size",'.$dashboard_options['vAxisTextSize'].')
                .attr("fill","#'.$dashboard_options['vAxisColor'].'")
                .attr("transform", function(d) { return "rotate(-90)"; })
                .text(d3.format(",d"));
        }
        else 
        {
            //add y axis ticks
            var x1 = d3.scale.linear().domain([0,data_max]).range([h-160,0]);
            var yAxisLeft = d3.svg.axis().scale(x1).ticks(6).orient("left");
            var yAxis = vis.select("g").append("svg:g")
                            .attr("class", "y axis'.$sid.'")
                            .attr("transform", "translate(0,160)")
                            .attr("fill","#'.$dashboard_options['vAxisColor'].'")
                            .call(yAxisLeft);
        }
        //Add title
        vis.append("svg:text")
            .attr("x",(w-160)/2)
           // .attr("y",150)
            .attr("y",'.$dashboard_options['yRange'].'+30)
            .attr("text-anchor","middle")
            .attr("font-size",'.$dashboard_options['titleTextSize'].')
            .attr("fill","#'.$dashboard_options['titleTextColor'].'")
            .attr("font-family","'.$dashboard_options['titlefontName'].'")
	//Change made for the title Added custom translate property for Barchart title
             .attr("transform", "translate(0,160)")
            .text("'.$options['title'].'");
        //Add title of horizontal axis
        vis.append("svg:text")
            .attr("class","xTitle1")
            .attr("x",(w-160)/2)
            .attr("y",h+30)
            .attr("text-anchor","middle")
            .attr("font-size",'.$dashboard_options['hAxisTitleSize'].')
            .attr("fill","#'.$dashboard_options['hAxisTitleColor'].'")
            .text("'.$dashboard_options['hAxisTitle'].'");
        if (x_lbl_width > (w-160) * 0.85) 
        {
            d3.select(".xTitle1").attr("transform","translate(0,"+x_lbl_height*2+")");
        }
        //Add title of vertical axis
        vis.append("svg:text")
            .attr("transform", "rotate(-90)") 
            .attr("x",-(h/2+80))
            .attr("y",-40)
            .attr("text-anchor","middle")
            .attr("font-size",'.$dashboard_options['vAxisTitleSize'].')
            .attr("fill","#'.$dashboard_options['vAxisTitleColor'].'")
            .text("'.$dashboard_options['vAxisTitle'].'");
     }

    function stacked_d3_barchart_stack_exp'.$sid.'(labels,data,redraw)
    {
        var m = [0, 0, 0, 0]; // margins
        var w = '.$dashboard_options['width'].' ;  // width
        var h = '.$dashboard_options['height'].' - m[0] - m[2]; // height
     
        var x = d3.scale.ordinal().rangeBands([0, w-180], .2),
            y = d3.scale.linear().range([0, h+260]);

        var legendLabel = labels;

        var colorArray = '.json_encode($dashboard_options['colors']).';
     
        var data = data;
        var m = data[0].length-1;
        
        var column = new Array(m);
        for (var i=0; i<m; i++){column[i]= String(i+1);}
        var remapped = column.map(function(dat,i){
            return data.map(function(d,ii){
                return{x:d[0],y:d[i+1]};
            })
        });

        var stacked = d3.layout.stack()(remapped);
        x.domain(stacked[0].map(function(d) { return d.x; }));
        y.domain([0, d3.max(stacked[stacked.length - 1], function(d) { return d.y0 + d.y; })]);
        
        old_data'.$sid.' = data;
        old_legendLabel'.$sid.' = legendLabel;

        var svg = d3.select("#velement'.$sid.'").select("svg");

        if (redraw== true)
        {
            
            //remove y axis
            svg.select("g").selectAll("g.rule").remove();
            svg.select("g").selectAll("g.y.axis'.$sid.'").remove();
        
            if ("'.$dashboard_options['vAxisStyle'].'" == "rule"){
                // Add y-axis rules
                var rule = svg.select("g").selectAll("g.rule")
                    .data(y.ticks('.$dashboard_options['ticksCount'].'))
                  .enter().append("svg:g")
                     .attr("class", "rule")
                     //.attr("transform", function(d) { return "rotate(-90)translate(240," + y(d) + ")"; });
                     .attr("transform", function(d) { return "rotate(90)translate(-210," + (-y(d)) + ")"; });
             
                 rule.append("svg:line")
               //      .attr("x2", w -180)
                     .attr("x2", '.$dashboard_options['yRange'].'+10)
                     .style("stroke", function(d) { return d ? "#ccc" : "#'.$dashboard_options['hAxisLineColor'].'"; })
                     .style("stroke-opacity", function(d) { return d ? .7 : null; });
                 
                 rule.append("svg:text")
                    .attr("x", -20)
                    .attr("dy", ".35em")
                    .attr("fill","#'.$dashboard_options['vAxisColor'].'")
		    .attr("transform","rotate(-90)")
                    .text(d3.format(",d"))
                    .attr("font-size",'.$dashboard_options['vAxisTextSize'].');

            }
            else {
                //add y axis icks
                var  y1 = d3.scale.linear().range([h-160,0]).domain([0, d3.max(stacked[stacked.length - 1], function(d) { return d.y0 + d.y; })]);
                var yAxisLeft = d3.svg.axis().scale(y1).ticks(6).orient("left");
        
                var yAxis = svg.select("g").append("svg:g")
                            .attr("class", "y axis'.$sid.'")
                             .attr("transform", function(){return "translate(0," + (160-h) + ")"; })
                            .attr("fill","#'.$dashboard_options['vAxisColor'].'")
                            .call(yAxisLeft);
            }

            //redraw bars
            var new_data = new Array();
            for (i=0;i<stacked.length;i++)
                for (j=0;j<stacked[i].length;j++)
                    new_data.push(stacked[i][j]);
            svg.selectAll("rect")
                  .data(new_data)
                .transition()
                  .duration(1000)
                  .attr("y", function(d) { return -y(d.y0) - y(d.y); })
                  .attr("height", function(d) {return y(d.y); });
           return;
        }

        // remove it before creat it
        svg.remove();
        
        // create canvas
        var svg = d3.select("#velement'.$sid.'").append("svg:svg")
                .attr("width", w)
                .attr("height", h+160)
                .attr("border", "solid 1px #ccc" )
                .attr("font", "10px sans-serif" )
                .attr("shape-rendering", "crispEdges" )
                .append("svg:g")
                .attr("transform", "translate(80,"+ (h-80) +")");

         var synchronizedMouseOver = function(e) {
              var bar = d3.select(this);
              var indexValue = bar.attr("index_value");
              
              var barSelector = "." +"'.$sid.'bar-" + indexValue;
              var selectedbar = d3.selectAll(barSelector);
              selectedbar.style("fill","#'.$dashboard_options['highlightColor'].'");
              
              var bulletSelector = "." +  "'.$sid.'bar-legendBullet-" + indexValue;

              var selectedLegendBullet = d3.selectAll(bulletSelector);
              selectedLegendBullet.style("fill", "#'.$dashboard_options['highlightColor'].'");
              
              var textSelector = "." +"'.$sid.'bar-legendText-" + indexValue;
              var selectedLegendText = d3.selectAll(textSelector);
              selectedLegendText.style("fill", "#'.$dashboard_options['highlightColor'].'").style("font-weight","bolder");
            };

        var synchronizedMouseOut = function() {
              var bar = d3.select(this);
              var indexValue = bar.attr("index_value");
              
              var barSelector = "." +"'.$sid.'bar-" + indexValue;
              var selectedbar = d3.selectAll(barSelector);
              var colorValue = selectedbar.attr("color_value"); 
              selectedbar.style("fill", colorValue);

              var bulletSelector = "." + "'.$sid.'bar-legendBullet-" + indexValue;
              var selectedLegendBullet = d3.selectAll(bulletSelector);
              var colorValue = selectedLegendBullet.attr("color_value");
              selectedLegendBullet.style("fill", colorValue);

              var textSelector = "." + "'.$sid.'bar-legendText-" + indexValue;
              var selectedLegendText = d3.selectAll(textSelector);
              var colorValue = selectedLegendText.attr("color_value");
              selectedLegendText.style("fill", colorValue).style("font-weight","normal");
            };

       // Add a group for each column.
        var valgroup = svg.selectAll("g")
                .data(stacked)
                .enter().append("svg:g")
                .style("fill", function(d, i) { return colorArray[i].color; })
                .attr("legendid",function(d,i){return i;})
                .attr("index_value",function(d,i){return "index-"+ i;})
              
		.attr("class",function(d,i){return "'.$sid.'bar-index-"+ i;})
                
		.attr("transform","rotate(90)")
	//	.attr("transform","translate(1,0)")
		.attr("color_value",function(d,i){return colorArray[i].color;})
                .on("mouseover",synchronizedMouseOver)
                .on("mouseout",synchronizedMouseOut);

        // Add a rect for each label 
        var bars = valgroup.selectAll("g.bar")
                .data(function(d){return d;})
                .enter().append("g")
                .attr("class","bar");

        bars.append("rect")
                .attr("width",'.$dashboard_options['yRange'].')
                //.attr("width",x.rangeBand())
                .attr("x",function(d){return x(d.x);})
                .attr("y",0)
                .attr("height",300)
		.attr("transform","translate(-305,0)")
	//	.attr("transform","translate(-300,-300)")
                .on("mouseover",function(){
                    d3.select(this)
                    .append("svg:title")
                    .text(function(d){return d.x+"\n"+legendLabel[d3.select(this.parentNode.parentNode.parentNode).attr("legendid")]+": "+d.y;})       
                    })
                .on("mouseout",function(){
                    d3.select(this)
                    })
             .transition()
                .duration(500)
                .attr("y", function(d) { return -y(d.y0) - y(d.y); })
                //.attr("height", function(d) { return 300+y(d.y); });
                .attr("height", function(d) { return y(d.y); });
        // Add a label .
        var label = svg.selectAll("text")
            .data(x.domain())
            .enter().append("svg:text")
            .attr("transform", function(d){
                xPos = x(d) + 100 / 2;
                yPos = -25;
                return "translate("+xPos+","+yPos+")"; })
                .attr("x", function(d) { return x(d) + x.rangeBand() / 2; })
                .attr("y", 15)
            .attr("text-anchor", "middle")
            .attr("font-size",'.$dashboard_options['hAxisTextSize'].')
            .attr("fill","#'.$dashboard_options['hAxisColor'].'");
        //    .text(function(d){return d})	
       
        var comma = d3.format(",");

        if ("'.$dashboard_options['hAxisTextType'].'" == "integer") 
            label.text(function(d){return comma(d);}); 
        

        // Rotate text on x Axis
        var x_lbl_width = 0;
        var lbl_width = 0;
        var x_lbl_height =0;
        var x_tick_lbls = label[0];
        var lbl_list = new Array(); 
        for (i=0; i<x_tick_lbls.length; i++)
        {
            lbl = x_tick_lbls[i];
            bbox = lbl.getBBox();
            x_lbl_width += bbox.width;
            lbl_width = bbox.width;
            x_lbl_height = bbox.width * 1.414/2.0/2.0;
            lbl_list.push(lbl);
        }
        if (x_lbl_width > (w-160) * 0.85)
        {
            label.attr("transform", function(d){
                xPos = x(d) + x.rangeBand() / 2 - x_lbl_height;
                yPos = 10 + x_lbl_height;
                return "translate("+xPos+","+yPos+")rotate(-45)"; })
             
            label.attr("opacity",function(d,i){
                if(x_lbl_width/w > 2 && x_lbl_width/w < 6)
                {
                    if(i%2 != 0)
                    {
                        return "0";
                    }
                }
                else if(x_lbl_width/w >= 6 && x_lbl_width/w < 8)
                {
                    if(i%3 != 0)
                    {
                        return "0";
                    }
                }
                else if(x_lbl_width/w >= 8 && x_lbl_width/w < 10)
               {
                    if(i%4 != 0)
                    {
                        return "0";
                    }
                }
                else if(x_lbl_width/w >= 10 && x_lbl_width/w < 12)
               {
                    if(i%5 != 0)
                    {
                        return "0";
                    }
                }
                else if(x_lbl_width/w >= 12)
               {
                    if(i%6 != 0)
                    {
                        return "0";
                    }
                }
                });
        }
        
        //Add legend circle
        var legendlocation = "'.$dashboard_options['legendlocation'].'",
            legendX = 0,
            legendTextX = 0,
            legendY = 0,
            legendTextY = 0;

        if (legendlocation != "none")
        {
            if (legendlocation == "left") {
                legendX = -70;
                legendTextX = -60;
                legendY = function(d, i) { return  -h+150+i*30; };
                legendTextY =function(d, i) { return -h+153 + i*30; };
            }
            else if (legendlocation == "right") {       
                legendX = w-135;
                legendTextX = w-125;
                legendY = function(d, i) { return -h+150+i*30; };
                legendTextY =function(d, i) { return -h+153+i*30; };
            }
            else if (legendlocation == "top") {       
                legendX = function(d, i) { return 5+ i*80; };
                legendTextX = function(d, i) { return 15+ i*80; };
                legendY = -h+130;
                legendTextY = -h+133;
            }
            else if (legendlocation == "bottom") {       
                legendX = function(d, i) { return 5 + i*80; };
                legendTextX = function(d, i) { return  15+i*80; };
                legendY = 50;
                legendTextY = 53;
            }

            svg.selectAll("circle")
                .data(legendLabel).enter().append("svg:circle")
                .attr("cx",legendX)
                .attr("cy", legendY)
                .attr("stroke-width", ".5")
                .style("fill", function(d, i) { return colorArray[i].color; }) // Bar fill color
                .attr("r", 5)
                .attr("index_value", function(d, i) { return "index-" + i; })
                .attr("class", function(d, i) { return "'.$sid.'bar-legendBullet-index-" + i; })
                .attr("color_value", function(d, i) { return colorArray[i].color;})
                .attr("type","legendicon")
                .on("mouseover",synchronizedMouseOver)
                .on("mouseout",synchronizedMouseOut);
     
             // add legend text
            svg.selectAll("a")
                .data(legendLabel).enter().append("svg:a")
                .append("text")
                .attr("x", legendTextX)
                .attr("y", legendTextY )
                .attr("text-anchor","left")
                .attr("font-size",12)
                .style("fill",function(d,i){return colorArray[i].color;})
                .attr("index_value",function(d,i){return "index-"+i;})
                .attr("class",function(d,i){return "'.$sid.'bar-legendText-index-"+i;})
                .attr("color_value", function(d, i) { return colorArray[i].color; })
                .attr("type","legendtext")
                .text(function(d){return d;})
                .on("mouseover",function(d){
                      var bar = d3.select(this);
                      var indexValue = bar.attr("index_value");
              
                      var barSelector = "." +"'.$sid.'bar-" + indexValue;
                      var selectedbar = d3.selectAll(barSelector);
                      selectedbar.style("fill","Maroon");
     
                      var bulletSelector = "." +  "'.$sid.'bar-legendBullet-" + indexValue;
                      var selectedLegendBullet = d3.selectAll(bulletSelector);
                      selectedLegendBullet.style("fill", "Maroon");
              
                      var textSelector = "." +"'.$sid.'bar-legendText-" + indexValue;
                      var selectedLegendText = d3.selectAll(textSelector);
                      selectedLegendText.style("fill", "Maroon");
                      
                     if (d.length> 5) {d3.select(this).append("svg:title").text(d);}
                 })
                .on("mouseout",synchronizedMouseOut);;

            // adjust the position of legend
            var legendLbls = svg.selectAll("[type=legendtext]");
            var legendIcons = svg.selectAll("[type=legendicon]");
            var legend_width = 0;
            if (legendlocation == "top" || legendlocation == "bottom") 
            {
                var iconX= new Array();
                var lblX= new Array();
                for (i=0; i < legendLbls[0].length; i++)
                {
                    icon_w = legendIcons[0][i].getBBox().width; 
                    lbl_w = legendLbls[0][i].getBBox().width;
                    iconX[i] = legend_width;
                    lblX[i] = iconX[i] + icon_w;
                    legend_width += icon_w + lbl_w+25;
                }
                if (legend_width > w)
                {
                    // trim text
                    var trim_percentage = (legend_width - w) / legend_width;
                    legendLbls.text(function(d){
                        ori_len = d.length;
                        new_len = ori_len - parseInt(ori_len * trim_percentage)-3; // 3 is for ...
                        if (new_len<0) new_len = 0;
                        if (ori_len == new_len) return d;
                        return d.substring(0,new_len)+"..."; 
                        });
                    // recalc positions
                    legend_width = 0;
                    for (i=0; i < legendLbls[0].length; i++)
                    {
                        icon_w = legendIcons[0][i].getBBox().width; 
                        lbl_w = legendLbls[0][i].getBBox().width;
                        iconX[i] = legend_width;
                        lblX[i] = iconX[i] + icon_w;
                        legend_width += icon_w + lbl_w+25;
                    }
                }
                legendX = function(d, i) { return iconX[i]; };
                legendTextX = function(d, i) { return  lblX[i]; };
                legendLbls.attr("x",legendTextX);
                legendIcons.attr("cx",legendX);
            }
            else if (legendlocation == "left")
            {
                var max_legend_width = 0;
                var trim_labels = new Array();
                for (i=0; i < legendLbls[0].length; i++)
                {
                    lbl = legendLabel[i];
                    icon_w = legendIcons[0][i].getBBox().width; 
                    lbl_w = legendLbls[0][i].getBBox().width;
                    legend_width = icon_w + lbl_w;
                    if (legend_width > 65)
                    {
                        ori_len = lbl.length;
                        new_len = parseInt(ori_len*(1-(legend_width-65)/legend_width)-3);
                        trim_labels.push(lbl.substring(0,new_len)+"...");
                    }
                    else
                        trim_labels.push(lbl);
                }
                legendLbls.text(function(d,i){return trim_labels[i];});
            }
        }


        //Add title
        svg.append("svg:text")
            .attr("x",(w-200)/2)
            .attr("y",'.$dashboard_options['yRange'].'-170)
            .attr("text-anchor","middle")
            .attr("font-size",'.$dashboard_options['titleTextSize'].')
            .attr("fill","#'.$dashboard_options['titleTextColor'].'")
            .attr("font-family","'.$dashboard_options['titlefontName'].'")
            .text("'.$options['title'].'");
        
        //Add title of horizontal axis
        svg.append("svg:text")
            .attr("class","xTitle")
            .attr("x",(w-200)/2)
            .attr("y",-h+100)
            .attr("text-anchor","middle")
            .attr("font-size",'.$dashboard_options['hAxisTitleSize'].')
            .attr("fill","#'.$dashboard_options['hAxisTitleColor'].'");
          //  .text("'.$dashboard_options['hAxisTitle'].'")

        if (x_lbl_width > (w-160) * 0.85)
        {
            //d3.select(".xTitle").attr("y",x_lbl_height*1.5);
            d3.select(".xTitle").attr("transform","translate(0,"+x_lbl_height*2+")");
            if (legendlocation == "bottom") {       
                svg.selectAll("[type=legendtext]")
                    .attr("y",function(d,i){
                        return legendTextY(d,i) + x_lbl_height - 10;
                    });
                svg.selectAll("[type=legendicon]")
                    .attr("cy",function(d,i){
                        return legendY(d,i) + x_lbl_height - 10;
                    }); 
            }
        }

        //Add title of vertical axis
        svg.append("svg:text")
            .attr("transform", "rotate(-90)") 
            .attr("x",h/2-80)
            .attr("y",-55)
            .attr("text-anchor","middle")
            .attr("font-size",'.$dashboard_options['vAxisTitleSize'].')
            .attr("fill","#'.$dashboard_options['vAxisTitleColor'].'");
         //   .text("'.$dashboard_options['vAxisTitle'].'");

        if ("'.$dashboard_options['vAxisStyle'].'" == "rule")
        {
            // Add y-axis rules
            var rule = svg.selectAll("g.rule")
             //   .data(y.ticks(5))
                .data(y.ticks('.$dashboard_options['ticksCount'].'))
                .enter().append("svg:g")
                .attr("class", "rule")
                //.attr("transform", function(d) { return "translate(0," + -y(d) + ")"; });
                .attr("transform", function(d) { return "rotate(90)translate(-210," +(-y(d)) + ")"; });

            rule.append("svg:line")
               // .attr("x2", w -180)
                 .attr("x2", '.$dashboard_options['yRange'].'+10)
                .style("stroke", function(d) { return d ? "#ccc" : "#'.$dashboard_options['hAxisLineColor'].'"; })
                .style("stroke-opacity", function(d) { return d ? .7 : null; });

            rule.append("svg:text")
                .attr("x", -20)
                .attr("dy", ".35em")
                .attr("fill","#'.$dashboard_options['vAxisColor'].'")
                .attr("transform","rotate(-90)")
		.text(d3.format(",d"))
                .attr("font-size",'.$dashboard_options['vAxisTextSize'].');
        }
        else 
        {
            //add y axis ticks
            var  y1 = d3.scale.linear().range([h-160,0]).domain([0, d3.max(stacked[stacked.length - 1], function(d) { return d.y0 + d.y; })]);
            var yAxisLeft = d3.svg.axis().scale(y1).ticks(6).orient("left");
            var yAxis = svg.append("svg:g")
                .attr("class", "y axis'.$sid.'")
                .attr("transform", function(){return "translate(0," + (160-h) + ")"; })
                .attr("fill","#'.$dashboard_options['vAxisColor'].'")
                .call(yAxisLeft);
        }
    }

    function draw_d3_barchart_stack_exp'.$sid.'(legendLabels,data,redraw)
    {
        if ('.$dashboard_options['isStacked'].') 
            stacked_d3_barchart_stack_exp'.$sid.'(legendLabels,data,redraw);
        else 
            grouped_d3_barchart_stack_exp'.$sid.'(legendLabels,data,redraw);
    }

    '.$content.'
    draw_d3_barchart_stack_exp'.$sid.'(legendLabels'.$sid.',data'.$sid.');
</script>';	

	$str.= '</div>';
	$str.= '<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid #'.$dashboard_options['loadingHighlightColor'].'\';
				function reload'.$sid.'(dashboard, response)
				{
                    place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
				}
                function compareArray(x, y) {
                    if (x === y) {
                        //For reference types:returns true if x and y points to same object
                        return true;
                    }
                    if (x.length != y.length) {
                        return false;
                    }
                    for (key in x) {
                        if (x[key] !== y[key]) {
                            //!== So that the the values are not converted while comparison
                            return false;
                        }
                    }
                    return true;
                }
                
                function compareId(x,y)
                {
                    for (var i = 0; i<y.length; i++) {
                        if (x[i][0] != y[i][0]) return false;                        
                    }
                    return true;
                }

				function reload_update'.$sid.'(response)
				{
					eval(response);
                    var new_y_max;
                    if ('.$dashboard_options['isStacked'].') {
                        var m = data'.$sid.'[0].length-1;
                        var column = new Array(m);
                        for (var i=0; i<m; i++){column[i]= String(i+1);}
                        var remapped = column.map(function(dat,i){
                                            return data'.$sid.'.map(function(d,ii){
                                                            return{x:d[0],y:d[i+1]};
                                            })
                                        });
                        
                        var stacked = d3.layout.stack()(remapped);
                        new_y_max = d3.max(stacked[stacked.length - 1], function(d) { return d.y0 + d.y; });
                    }
                    else 
                        new_y_max = d3.max(data'.$sid.', function(d){return d3.max(d.slice(1,d.length));});
    
                    var redraw;
                    if (!compareArray(old_legendLabel'.$sid.',legendLabels'.$sid.'))
                        {redraw = false;}//# of columns changed or legend text changed,redraw whole chart
                    else if (old_data'.$sid.'.length != data'.$sid.'.length) 
                        {redraw = false;}//# of rows changed
                    else if (!compareId(old_data'.$sid.',data'.$sid.'))
                        {redraw = false;}//ids of rows changed
                    else 
                        {redraw = true;}//only redraw bars and y axis
                    
					draw_d3_barchart_stack_exp'.$sid.'(legendLabels'.$sid.',data'.$sid.',redraw);
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				}
			</script>';
		return($str);
}


function reload_viz_d3_barchart_stack_exp($sid, $value, $options, $setup)
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
    $content = 'var legendLabels'.$sid.' = [';

    $sql = "select ";
	for($i=0; $i<count($name_type1);$i++)
		if($i==0) $sql .= ' "'.$name_type1[$i][0].'"';
        else {
            $sql .= ' ,"'.$name_type1[$i][0].'"';
            if ($i < count($name_type1)-1) $content .= '"'.$name_type1[$i][0].'",';
            else $content .= '"'.$name_type1[$i][0].'"';
        }
    $content.='];';

	//Change made here  to get options of column name and column value	


//	if($dashboard_options['isStacked'])
//	    $sql .= ' from "'.$options['tablename'].'"';
//	else
	    $sql .= ' from "'.$options['tablename'].'" where '.$options['columnname'].'='.$options['columnvalue'].'';
	$result	= $db->fetchAll($sql);
	
	$content .= 'var data'.$sid.' = [';
	$i = 0;
	
	foreach($result as $value)
	{
		if($i>0) $content .= ',';

		$content .= '[';
		for($j=0;$j<count($value);$j++)
		{	
			if ($j==0) {$content .= '"'.$value[$name_type1[$j][0]].'"';}
			else {$content.=','.$value[$name_type1[$j][0]];}
			
		}
		$content .= ']';
		$i++;
	} 
	$content .=']';
	
    return($content);
}

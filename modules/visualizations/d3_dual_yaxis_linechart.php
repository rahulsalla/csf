<?
function getsetup_viz_d3_dual_yaxis_linechart()
{
    $options['_CREDITS']                = 'Main Developer: Jie Fang';
    $options['_MODULEDESCRIPTION']      = '<p>Each row in the table represents a set of data points with the same x-axis location.</p>    <p>Columns:</p>
        <ul>
        <li>Column 0: id</li>
        <li>Column 1: number</li>
        <li>Column ..</li>
        <li>Column N: number</li>
        </ul>
 For more information about D3 library, please, refer to      <a href="http:d3js.org">Data-Driven Documents</a>';	
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

    $options[95]['name']                = 'colors';
    $options[95]['description']         = 'Set the colors';
    $options[95]['detail']              = 'Colors for the lines.';
    $options[95]['type']                = 'Json';
    $options[95]['link']                = 'link to further information..?';
    $options[95]['lookup']              = ''; 
    $options[95]['default']             = json_decode('[{"color":"#1f77b4"},{"color":"#ff7f0e"},{"color":"#2ca02c"},{"color":"#d62728"},{"color":"#9467bd"},{"color":"#8c564b"},{"color":"#e377c2"},{"color":"#7f7f7f"},{"color":"#bcbd22"},{"color":"#17becf"}]');
    $options[95]['optional']            = 'no';
    $options[95]['repeatable']          = 'no';
    $options[95]['perdashboard']        = 'yes';
    $options[95]['dependenton']         = '';
    
	
	$options[100]['name']				= 'titleTextColor';
	$options[100]['description']		= 'Please select the color the chart title';
	$options[100]['detail']				= 'Default: white';
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
	$options[120]['lookup']				= '|Verdana|Arial Narrow|Arial|Helvetica Neue'; 
	$options[120]['default']			= 'Verdana';
	$options[120]['optional']			= 'no';
	$options[120]['repeatable']			= 'no';
	$options[120]['perdashboard']		= 'yes';
	$options[120]['dependenton']		= '';	
	
	

 	$options[121]['name']                           = 'titlefontWeight';
        $options[121]['description']            = 'Please select the font type for the chart title';
        $options[121]['detail']                         = 'Default: Verdana';
        $options[121]['type']                           = 'Dropdown';
        $options[121]['link']                           = 'link to further information..?';
        $options[121]['lookup']                         = '|bold|bolder|light|lighter';
        $options[121]['default']                        = 'bolder';
        $options[121]['optional']                       = 'no';
        $options[121]['repeatable']                     = 'no';
        $options[121]['perdashboard']           = 'yes';
        $options[121]['dependenton']            = '';






	$options[130]['name']				= 'legendlocation';
	$options[130]['description']		= 'Please select the legend placement';
	$options[130]['detail']				= 'Default: none';
	$options[130]['type']				= 'Dropdown';
	$options[130]['link']				= 'link to further information..?';
	$options[130]['lookup']				= '|right|left|top|bottom|none';
	$options[130]['default']			= 'none';
	$options[130]['optional']			= 'no';
	$options[130]['repeatable']			= 'no';
	$options[130]['perdashboard']		= 'yes';
	$options[130]['dependenton']		= '';


  $options[131]['name']                = 'legendTitles';
    $options[131]['description']         = 'Set the legend title names';
    $options[131]['detail']              = 'Colors for the lines.';
    $options[131]['type']                = 'Json';
    $options[131]['link']                = 'link to further information..?';
    $options[131]['lookup']              = '';
    $options[131]['default']             = json_decode('[{"name":"Inversión"},{"name":"Utilidades"},{"name":"Impuestos"}]');
    $options[131]['optional']            = 'no';
    $options[131]['repeatable']          = 'no';
    $options[131]['perdashboard']        = 'yes';
    $options[131]['dependenton']         = '';

	
/*	
	
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
*/	
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
*/	
	$options[220]['name']				= 'smooth';
	$options[220]['description']		= 'controls the curve of the lines ';
	$options[220]['detail']				= 'can be straight or curved. Default: straight';
	$options[220]['type']				= 'Dropdown';
	$options[220]['link']				= 'link to further information..?';
	$options[220]['lookup']				= 'Straight|Curved'; 
	$options[220]['default']			= 'Straight';
	$options[220]['optional']			= 'no';
	$options[220]['repeatable']			= 'no';
	$options[220]['perdashboard']		= 'yes';
	$options[220]['dependenton']		= '';

    	
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
	
    $options[230]['name']				= 'hAxisTitleColor';
	$options[230]['description']		= 'Font color of the horizontal axis title';
	$options[230]['detail']				= 'This is the font color of the horizontal axis title in the chart. Default: black';
	$options[230]['type']				= 'Color';
	$options[230]['link']				= 'link to further information..?';
	$options[230]['lookup']				= ''; 
	$options[230]['default']			= 'black';
	$options[230]['optional']			= 'no';
	$options[230]['repeatable']			= 'no';
	$options[230]['perdashboard']		= 'yes';
	$options[230]['dependenton']		= '';

    $options[241]['name']               = 'hAxisTitleSize';
    $options[241]['description']        = 'Font Size of the horizontal axis title';
    $options[241]['detail']             = 'This is the title of the horizontal axis in the chart';
    $options[241]['type']               = 'Dropdown';
    $options[241]['link']               = 'link to further information..?';
    $options[241]['lookup']             = '|8|9|10|11|12|13|14|15|16|17|18|19|20';
    $options[241]['default']            = '15';
    $options[241]['optional']           = 'no';
    $options[241]['repeatable']         = 'no';
    $options[241]['perdashboard']       = 'yes';
    $options[241]['dependenton']        = '';
	
	$options[242]['name']               = 'hAxisTextType';
    $options[242]['description']        = 'Please select the type of the horizontal axis text';
    $options[242]['detail']             = 'Select the type of the horizontal axis text. Default: string';
    $options[242]['type']               = 'Dropdown';
    $options[242]['link']               = 'link to further information..?';
    $options[242]['lookup']             = '|string|integer'; 
    $options[242]['default']            = 'string';
    $options[242]['optional']           = 'no';
    $options[242]['repeatable']         = 'no';
    $options[242]['perdashboard']       = 'yes';
    $options[242]['dependenton']        = '';

    $options[250]['name']				= 'hAxisTextSize';
	$options[250]['description']		        = 'Font size of the horizontal axis text';
	$options[250]['detail']				= 'This is the font size of the horizontal axis text. Default: 15';
	$options[250]['type']				= 'Dropdown';
	$options[250]['link']				= 'link to further information..?';
	$options[250]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
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
    $options[251]['default']            = 'black';
    $options[251]['optional']           = 'no';
    $options[251]['repeatable']         = 'no';
    $options[251]['perdashboard']       = 'yes';
    $options[251]['dependenton']        = '';

    $options[270]['name']               = 'vAxisTitle';
    $options[270]['description']        = 'Title of the vertical axis';
    $options[270]['detail']             = 'This is the title of the vertical axis of the chart';
    $options[270]['type']               = 'Text';
    $options[270]['link']               = 'link to further information..?';
    $options[270]['lookup']             = ''; 
    $options[270]['default']            = '';
    $options[270]['optional']           = 'no';
    $options[270]['repeatable']         = 'no';
    $options[270]['perdashboard']       = 'yes';
    $options[270]['dependenton']        = '';    
	
    $options[271]['name']               = 'vAxisTitleColor';
    $options[271]['description']        = 'Font color of the vertical axis title';
    $options[271]['detail']             = 'This is the font color of the vertical axis title in the chart. Default: black';
    $options[271]['type']               = 'Color';
    $options[271]['link']               = 'link to further information..?';
    $options[271]['lookup']             = '';
    $options[271]['default']            = 'black';
    $options[271]['optional']           = 'no';
    $options[271]['repeatable']         = 'no';
    $options[271]['perdashboard']       = 'yes';
    $options[271]['dependenton']        = '';

    $options[272]['name']               = 'vAxisTitleSize';
    $options[272]['description']        = 'Font Size of the vertical axis title';
    $options[272]['detail']             = 'This is the title of the vertical axis in the chart';
    $options[272]['type']               = 'Dropdown';
    $options[272]['link']               = 'link to further information..?';
    $options[272]['lookup']             = '|8|9|10|11|12|13|14|15|16|17|18|19|20';
    $options[272]['default']            = '15';
    $options[272]['optional']           = 'no';
    $options[272]['repeatable']         = 'no';
    $options[272]['perdashboard']       = 'yes';
    $options[272]['dependenton']        = '';


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
	$options[280]['detail']				= 'This is the font size of the vertical axis text. Default: 15';
	$options[280]['type']				= 'Dropdown';
	$options[280]['link']				= 'link to further information..?';
	$options[280]['lookup']				= '|8|9|10|11|12|13|14|15|16|17|18|19|20'; 
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


        $options[1]['name']                           = 'vAxisMin';
        $options[1]['description']            = 'The min value of the vertical axis moves to this value';
        $options[1]['detail']                         = 'Min Value of the Vertical axis. This value is ignored if this value is greater than the minimum y-value of the data';
        $options[1]['type']                           = 'Text';
        $options[1]['link']                           = 'link to further information..?';
        $options[1]['lookup']                         = '';
        $options[1]['default']                        = 'automatic';
        $options[1]['optional']                       = 'yes';
        $options[1]['repeatable']                     = 'no';
        $options[1]['perdashboard']           = 'yes';
        $options[1]['dependenton']            = '';

        $options[2]['name']                           = 'vAxisMax';
        $options[2]['description']            = 'The max value of the vertical axis moves to this value';
        $options[2]['detail']                         = 'Max Value of the Vertical axis. This value is ignored if this value is smaller than the maximum y-value of the data';
        $options[2]['type']                           = 'Text';
        $options[2]['link']                           = 'link to further information..?';
        $options[2]['lookup']                         = '';
        $options[2]['default']                        = 'automatic';
        $options[2]['optional']                       = 'yes';
        $options[2]['repeatable']                     = 'no';
        $options[2]['perdashboard']           = 'yes';
        $options[2]['dependenton']            = '';

	return($options);
}

function place_viz_d3_dual_yaxis_linechart($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y']	= str_replace('px','',$dashboard_options['y']);
	$str='';
	$str.= '<div id="cover'.$sid.'">';

	$str.= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
	$str.= '</div>';
	
    //$str.= '<div id="celement'.$sid.'" style="position:absolute;z-index:0; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
    $str.= '</div>';
    $str.= '</div>';

    $content = reload_viz_d3_dual_yaxis_linechart($sid,$value,$options,$setup);

$str.= '
<style type="text/css">
    body {
    font-family: "Helvetica Neue", Helvetica;
    }

    path {
    stroke-width: 1;
    fill: none;
	
    }

    .axis {
    shape-rendering: crispEdges;
    }

	.data2 { stroke: pink;}

    .x.axis'.$sid.' line {
    stroke: lightgrey;
    //stroke: none;
    }

    .x.axis'.$sid.' .minor {
    stroke-opacity: .5;
    }

    .x.axis'.$sid.' path {
    display: none;
    }

    .x.axis1'.$sid.' text {
    font-size: '.$dashboard_options['hAxisTextSize'].';
    fill: '.$dashboard_options['hAxisTextColor'].';
    transform:rotate(-45deg);
	}


    .x.axis2'.$sid.' line {
     stroke : lightgrey;
    
	}


    .y.axis'.$sid.' line
     {
	stroke: black;
	stroke -length:10;
     }

    .y.axis'.$sid.' path {
    fill: none;
    stroke: '.$dashboard_options['vAxisColor'].';
    }

    .y.axis'.$sid.' text {
    font-size: '.$dashboard_options['vAxisTextSize'].';
    fill:'.$dashboard_options['vAxisTextColor'].';

//	.dots'.$sid.'id{stroke : red; stroke-length : 10; font-size: 40px;}
//	.dots'.$sid.'value{stroke : red; stroke-length : 10;}
}

</style>

<script type="text/javascript">
    var old_legendLabel'.$sid.',
        old_data'.$sid.';

    function draw_d3_dual_yaxis_linechart'.$sid.'(labels, data,redraw)
    {
        var legendLabel = labels;
        var odata       = data;

        // define dimensions of graph
        var m = [90, 200, 140, 150]; // margins
        var w = '.$dashboard_options['width'].' - m[1] - m[3];	// width
        var h = '.$dashboard_options['height'].' - m[0] - m[2]; // height

        // data: 1st should be x-series 
        old_legendLabel'.$sid.' = legendLabel;
        old_data'.$sid.'        = odata;

        var ids = new Array();
        for(i=0; i<old_data'.$sid.'.length;i++)
            ids.push(old_data'.$sid.'[i][0]); 

        var x_min = 0,
            x_max = ids.length-1,
            xcount = ids.length,
            x     = d3.scale.linear().domain([x_min,x_max]).range([0,w]);
		
	if("'.$dashboard_options['vAxisMin'].'" != "automatic") 
            var y_min = '.$dashboard_options['vAxisMin'].';
        else
	    var y_min = d3.min(odata, function(d){return d3.min(d.slice(1,d.length));});

	if("'.$dashboard_options['vAxisMax'].'" != "automatic") 
	    var y_max = '.$dashboard_options['vAxisMax'].';
	else
            var  y_max = d3.max(odata, function(d){return d3.max(d.slice(1,d.length));});
           // y     = d3.scale.linear().domain([y_min, y_max]).range([h, 0]);
       var     y     = d3.scale.linear().domain([y_min-(y_max-y_min)*0.05, y_max]).range([h, 0]);
	var y1 = d3.scale.linear().range([h, 0]);
       

	 var colorArray = '.json_encode($dashboard_options['colors']).';
        //var legendName = ["Shrijal","Pravin","Gandhi"];
        var legendName = '.json_encode($dashboard_options['legendTitles']).';
        var data = new Array();
	var data_prev = new Array();
        for (i=1; i<odata[0].length; i++)
        {      
            var line_data = new Array();
            for (j=0; j<odata.length;j++)
            {
                line_data.push({id:odata[j][0],value:odata[j][i]});
            }
            data.push(line_data);
		if( i < (odata[0].length-1))
		data_prev.push(line_data);
        }
	//y1.domain([0, d3.max(odata, function(d) { return Math.max(d.length); })]); 
	y1.domain([0, d3.max(odata, function(d) { return 50; })]); 
        var line = d3.svg.line()
            .x(function(d){return x(ids.indexOf(d.id));})
            .y(function(d){return y(d.value);});
	var line2 = d3.svg.line()
            .x(function(d){return x(ids.indexOf(d.id));})
            .y(function(d){return y1(d.value);});



        if ("'.$dashboard_options['smooth'].'" == "Curved") 
         {   line.interpolate("cardinal");
            line2.interpolate("cardinal");
       }
        var svg = d3.select("#velement'.$sid.'").select("svg");

        if (redraw == true)
        {
           //remove y axis
            svg.select("g").selectAll("g.y.axis'.$sid.'").remove(); 
       
           // redraw y axis
            var yAxisLeft = d3.svg.axis().scale(y).ticks(6).orient("left");
            var yAxisRight = d3.svg.axis().scale(y1).ticks(6).orient("right");
            var yAxis     = svg.select("g").append("svg:g")
                            .attr("class", "y axis'.$sid.'")
                            .attr("transform", "translate(-10,0)")
                            .call(yAxisLeft);
            svg.select("g").append("svg:g")
            .attr("class", "y axis'.$sid.'")
        	.style("fill", "black")
            .attr("transform", "translate(" + w + ",0)")
            .call(yAxisRight);

            var g         = svg.selectAll("path[type=line]")
                            .data(data_prev)
                            .transition()
                            .duration(500)
                            .attr("d",line);
             svg.selectAll("path[type=line2]")
                            .data(data[data.length-1])
                            .transition()
                            .duration(500)
                            .attr("d",line2(data[data.length-1]));



		var new_data  = new Array();
		var new_data_prev  = new Array();
            for (i=0;i<data.length-1;i++)
                for (j=0;j<data[i].length;j++)
                {	
		     
		     new_data.push(data[i][j]);
			if(i < (data.length - 2))
		     new_data_prev.push(data[i][j]);
		}
            var d = svg.selectAll("circle[type=dot]")
                    .data(new_data_prev)
                    .transition()
                    .duration(500)
                    .attr("cy",function(d,i){  return y(d.value);});
         //  var d2 =  svg.selectAll("circle")
           //         .data((data[data.length-1]))
             //       .transition()
               //     .duration(500)
                 //   .attr("cy",function(d){return y1(d.value);});


		return;
        }

        svg.remove();

        // Add an SVG element with the desired dimensions and margin.
        var graph = d3.select("#velement'.$sid.'").append("svg:svg")
                  .attr("width", w + m[1] + m[3])
                  .attr("height", h + m[0] + m[2])
                  .append("svg:g")
                  .attr("transform", "translate(" + m[3] + "," + m[0] + ")");

        // create xAxis
        var xAxis;
        if ("'.$dashboard_options['hAxisTextType'].'" == "integer")
            xAxis = d3.svg.axis().scale(x).tickSize(1).tickSubdivide(0)
                        .tickFormat(function(d){return (ids[d]);});
        else 
        xAxis = d3.svg.axis().scale(x).ticks(xcount).tickSize(-h)
                        .tickFormat(function(d){return ids[d];});
	
	//var xAxis1 = d3.svg.axis().scale(y).tickSize(-w).tickSubdivide(0)
          //              .tickFormat(function(d){return ""});


        // Add the x-axis.
       	var xAxisObj = graph.append("svg:g")
            .attr("class", "x axis1'.$sid.'")
            .attr("transform", "translate(0," + h + ")")
            .call(xAxis);
 // 	var xAxisObj = graph.append("svg:g")
   //         .attr("class", "x axis'.$sid.'")
     //       .attr("transform","rotate(90)")
       //     .call(xAxis1);

        //Add title of horizontal axis
        graph.append("svg:text")
            .attr("class","xTitle")
            .attr("x",w/2)
            .attr("y",h+40)
            .attr("text-anchor","middle")
            .attr("font-style","italic")
            .attr("font-size",'.$dashboard_options['hAxisTitleSize'].')
            .attr("fill",\'#'.$dashboard_options['hAxisTitleColor'].'\')
            .text("'.$dashboard_options['hAxisTitle'].'");

        // create left yAxis
        var yAxisLeft = d3.svg.axis().scale(y).orient("left");
        var yAxisRight = d3.svg.axis().scale(y1).orient("right");
        // Add the y-axis to the left
        var yAxis = graph.append("svg:g")
            .attr("class", "y axis'.$sid.'")
            .attr("transform", "translate(-10,0)")
            .call(yAxisLeft);
   graph.append("svg:g")
            .attr("class", "y axis'.$sid.'")
            .attr("transform", "translate("+ w +",0)")
            .call(yAxisRight);


        var synchronizedMouseOver'.$sid.' = function() 
        {
            var line = d3.select(this);
            var indexValue = line.attr("index_value");

            var lineSelector = "." +"line-" + indexValue;
            var selectedline = d3.selectAll(lineSelector);
            selectedline.style("stroke-width", '.$dashboard_options['lineWidth'].'+2);

            var dotSelector = "." + "dot-line-"+indexValue;
            var selecteddot = d3.selectAll(dotSelector);
            selecteddot.style("stroke-width",'.$dashboard_options['lineWidth'].'+2);

            var bulletSelector = "." +  "line-legendBullet-" + indexValue;
            var selectedLegendBullet = d3.selectAll(bulletSelector);
            // selectedLegendBullet.style("fill", "Maroon");

            var textSelector = "." +"line-legendText-" + indexValue;
            var selectedLegendText = d3.selectAll(textSelector);
            selectedLegendText.style("font-weight", "bolder")
        };


var tooltip = d3.select("body")
	.append("div")
	.style("position", "absolute")
	.style("z-index", "1")
	.style("visibility", "hidden")
	.style("stroke-width",4)
    	   	
	.text(function(){return "";})
	.style("font-size","20px")
	.style("font-family","arial")
	.style("text-rendering","optimizeLegibility")
	.style("font-weight","bold")
	.style("color","black");
	
       var synchronizedMouseOut'.$sid.' = function() 
        {
            var line = d3.select(this);
            var indexValue = line.attr("index_value");

            var lineSelector = "." + "line-" + indexValue;
            var selectedline = d3.selectAll(lineSelector);
            var colorValue = selectedline.attr("color_value");
            selectedline.style("stroke-width",'.$dashboard_options['lineWidth'].' );

            var dotSelector = "." + "dot-line-"+indexValue;
            var selecteddot = d3.selectAll(dotSelector);
            selecteddot.style("stroke-width",'.$dashboard_options['lineWidth'].');

            var bulletSelector = "." + "line-legendBullet-" + indexValue;
            var selectedLegendBullet = d3.selectAll(bulletSelector);
            var colorValue = selectedLegendBullet.attr("color_value");
            //  selectedLegendBullet.style("fill", colorValue);

            var textSelector = "." + "line-legendText-" + indexValue;
            var selectedLegendText = d3.selectAll(textSelector);
            var colorValue = selectedLegendText.attr("color_value");
            selectedLegendText.style("font-weight", "normal");
        };
	//	var data2 = data;//[543, 367, 215, 56, 65, 287, 398, 523, 685, 652, 674, 639, 619, 589, 558, 605, 574, 564, 496, 525, 476, 432, 458, 421, 387, 375, 368];

        // add lines
        // do this AFTER the axes above so that the line is above the tick-lines
        var g =  graph.selectAll("g.line").data(data_prev)
            .enter().append("svg:g")
            .attr("class","line");
        
         graph.selectAll("g.line2").data(data[data.length-1])
            .enter().append("svg:g")
            .attr("class","line");
	graph.append("svg:path").attr("d", line2(data[data.length-1])).attr("class", "data");
        g.append("svg:path")
             .attr("d", line)
             .style("stroke", function(d,i){return  colorArray[i].color;})
             .style("stroke-width",'.$dashboard_options['lineWidth'].')
             .attr("index_value",function(d,i){return "index'.$sid.'-"+ i;})
             .attr("class",function(d,i){return "line-index'.$sid.'-"+ i;})
             .attr("color_value",function(d,i){return  colorArray[i].color;})
             .attr("type","line")
             .attr("id",function(d,i){return i;})
             .on("mouseover",synchronizedMouseOver'.$sid.')
             .on("mouseout",synchronizedMouseOut'.$sid.');
            

 	g.append("svg:path")
             .attr("d", line2(data[data.length-1]))
             //.style("stroke", function(d,i){return  colorArray[i].color;})
             .style("stroke", function(d,i){return "black";})
             .style("stroke-width",'.$dashboard_options['lineWidth'].')
             .attr("index_value",function(d,i){return "index'.$sid.'-"+ i;})
             .attr("class",function(d,i){return "line-index'.$sid.'-"+ i;})
             //.attr("color_value",function(d,i){return  colorArray[i].color;})
             .attr("color_value",function(d,i){return  "black";})
             .attr("type","line2")
             .attr("id",function(d,i){return i;});
 	//   .on("mouseover",synchronizedMouseOver'.$sid.')
   	//   .on("mouseout",synchronizedMouseOut'.$sid.');



	//g.append("svg:path").attr("d", line2(data2)).attr("class", "data2");

        //add dot
        var dots = g.selectAll("circle")
            .data(function(d){return d;})       
            .enter().append("svg:circle")
            .attr("type","dot")
            .attr("cx",function(d){return x(ids.indexOf(d.id));})
            //.attr("cy",function(d,i){ if(legendLabel[i] == "Other")return y1(d.value); else return y(d.value);})
            .attr("cy",function(d,i){  return y(d.value);})
            .attr("r",2.5)
            .attr("class",function(){
                return "dot-"+d3.select(this.parentNode).select("path").attr("class");})
            .attr("color_value",function(){
                return d3.select(this.parentNode).select("path").attr("color_value");})
            .attr("stroke",function(){
                return d3.select(this.parentNode).select("path").attr("color_value");})
            .attr("stroke-width",'.$dashboard_options['lineWidth'].')
            .attr("fill","white")
            .on("mouseover",function(){
                d3.select(this)
                .style("stroke-width",'.$dashboard_options['lineWidth'].'+4)
                .attr("r",5.5)
		/*	
			// This is for the custom tooltip .. but its not exactly the same

			.on("mouseover", function(dots){return tooltip.style("visibility", "visible").text(function(d){
                
        	       	   return "-->>"+dots.id+"\n"+dots.value;}).style("fill","blue")})
			.on("mousemove", function(){return tooltip.style("top", (event.pageY-10)+"px").style("left",(event.pageX+10)+"px");})
			.on("mouseout", function(){return tooltip.style("visibility", "hidden");})
		*/
		// remember you can now style dots.id and dots.value
		//Change here from Legend Name to Legend Label if you wan tthe column names as the legend values
                .append("svg:title")
                .text(function(d,i){
                   return d.id+ "\n"+legendLabel[d3.select(this.parentNode.parentNode).select("path").attr("id")]+": "+ d.value;})
            	//       return d.id+ "\n"+ legendName[d3.select(this.parentNode.parentNode).select("path").attr("id")].name+": "+d.value;})
                .style("fill",function(d,i){return  colorArray[i].color;})
        	 //this gets the value of the selected value on Click       
		//	;
		//	d3.select(this).on("click",function(d){window.alert(d.value)})
		//d3.select(this).on("click",function(d,i){window.alert(data[data.length-1][37].value)})
		d3.select(this).on("click",function(d,i){window.alert(i)})
		;})
            
		.on("mouseout",function(){
                d3.select(this)
                .style("stroke-width",'.$dashboard_options['lineWidth'].')
                .attr("r",2.5);
                });
	var counter = 0;
	
 	 /*g.selectAll("circle")
            // .attr("d", function() { return data[data.length-1];})
           // .data(line)
          //  .data(new_data)
            .data(function(d){return d2;})       
            .enter().append("svg:circle")
            //.attr("type","dot")
            .attr("cx",function(d,i){return x(ids.indexOf(ids[counter++]));})
            //.attr("cy",function(d,i){ if(legendLabel[i] == "Other")return y1(d.value); else return y(d.value);})
            .attr("cy",function(d,i){  return y1(d);})
            .attr("r",2.5)
            .attr("class",function(){
                return "dot-"+d3.select(this.parentNode).select("path").attr("class");})
            .attr("color_value",function(){
                return d3.select(this.parentNode).select("path").attr("color_value");})
            .attr("stroke",function(){
                return d3.select(this.parentNode).select("path").attr("color_value");})
            .attr("stroke-width",'.$dashboard_options['lineWidth'].')
            .attr("fill","white")
            .on("mouseover",function(){
                d3.select(this)
                .style("stroke-width",'.$dashboard_options['lineWidth'].'+4)
                .attr("r",5.5)
                // remember you can now style dots.id and dots.value
                //Change here from Legend Name to Legend Label if you wan tthe column names as the legend values
                .append("svg:title")
                .text(function(d,i){
                   return d.id+ "\n"+legendLabel[d3.select(this.parentNode.parentNode).select("path").attr("id")]+": "+ d.value;})
                //       return d.id+ "\n"+ legendName[d3.select(this.parentNode.parentNode).select("path").attr("id")].name+": "+d.value;})
                .style("fill",function(d,i){return  colorArray[i].color;})
                 //this gets the value of the selected value on Click
                //      ;
                //      d3.select(this).on("click",function(d){window.alert(d.value)})
                //d3.select(this).on("click",function(d,i){window.alert(data[data.length-1][37].value)})
                //d3.select(this).on("click",function(d,i){window.alert(data[data.length-1])})
                d3.select(this).on("click",function(d,i){window.alert(d)})
                ;})

                .on("mouseout",function(){
                d3.select(this)
                .style("stroke-width",'.$dashboard_options['lineWidth'].')
                .attr("r",2.5);
                });
	
       */ 
	//add title
        var title = graph.append("svg:text")
            .attr("x",w/2)
            .attr("y",-60)
            .attr("text-anchor","middle")
            .attr("font-size",'.$dashboard_options['titleTextSize'].')
            .attr("fill",\'#'.$dashboard_options['titleTextColor'].'\')
            .attr("font-family","\''.$dashboard_options['titlefontName'].'\'")
           // .attr("font-family","Verdana")
	//    .attr("font-weight","bolder")
            .attr("font-weight","'.$dashboard_options['titlefontWeight'].'")
            .text("'.$options['title'].'");

        //Add title of vertical axis
        var y_axis_lbl = graph.append("svg:text")
            .attr("transform", "rotate(-90)") 
            .attr("x",-h/2)
            .attr("y",-100)
            .attr("text-anchor","middle")
            .attr("font-style","italic")
	    .attr("font-size",'.$dashboard_options['vAxisTitleSize'].')
            .attr("fill",\'#'.$dashboard_options['vAxisTitleColor'].'\')
            .text("'.$dashboard_options['vAxisTitle'].'");


        //Add legend circle
        var legendlocation = "'.$dashboard_options['legendlocation'].'",
            legendX = 0,
            legendTextX = 0,
            legendY = 0,
            legendTextY = 0;

        // add legend circle
        if (legendlocation != "none")
        {
            if (legendlocation == "right") {
                legendX = w+25;
                legendTextX = w+35;
                legendY = function(d, i) { return  i*30; };
                legendTextY =function(d, i) { return 5 + i*30; };
            }
            else if (legendlocation == "left") {       
                legendX = -130;
                legendTextX = -120;
                legendY = function(d, i) { return i*30; };
                legendTextY =function(d, i) { return 5 + i*30; };
            }
            else if (legendlocation == "top") {       
                legendX = function(d, i) { return -30 + i*80; };
                legendTextX = function(d, i) { return -20+ i*80; };
                legendY = function(d,i){return -30};
                legendTextY = function(d,i){return -25};
            }
            else if (legendlocation == "bottom") {       
                legendX = function(d, i) { return -10 + i*80; };
                legendTextX = function(d, i) { return  i*80; };
                legendY = function(d,i){return h+65};
                legendTextY = function(d,i){return h+70};
            }

            graph.selectAll("circle[type=legendicon]")
                .data(legendLabel).enter().append("svg:circle")
                .attr("type","legendicon")
                .attr("cx",legendX)
                .attr("cy", legendY)
                .attr("stroke-width", ".5")
                .style("fill", function(d, i) { return  colorArray[i].color; }) // Line fill color
                .attr("r", 5)
                .attr("index_value", function(d, i) { return "index'.$sid.'-" + i; })
                .attr("class", function(d, i) { return "line-legendBullet-index'.$sid.'-" + i; })
                .attr("color_value", function(d, i) { return  colorArray[i].color; })
                .on("mouseover",synchronizedMouseOver'.$sid.')
                .on("mouseout",synchronizedMouseOut'.$sid.');

            // add legend text
            graph.selectAll("a")
                .data(legendLabel).enter().append("svg:a")
                .append("text")
                .attr("x", legendTextX)
                .attr("y", legendTextY )
                .attr("text-anchor","left")
                //.attr("font-size",12)
		//Changed by Shrijal
                .attr("font-size","'.$dashboard_options['legendTextSize'].'")
                .style("fill",function(d,i){return  "white";})
                //.style("font-weight","bolder")
                .attr("index_value",function(d,i){return "index'.$sid.'-"+i;})
                .attr("class",function(d,i){return "line-legendText-index'.$sid.'-"+i;})
                .attr("color_value", function(d, i) { return  colorArray[i].color;})
                .attr("type","legendtext")
                  // for the legend text play here
//Change here from Legend Name to Legend Label if you want the column names as the legend values
		
                .text(function(d){return d;})
        //        .text(function(d,i){return legendName[i].name;})
                .on("mouseover",function(d){
                    var line = d3.select(this);
                    var indexValue = line.attr("index_value");
                    var lineSelector = "." +"line-" + indexValue;
                    var selectedline = d3.selectAll(lineSelector);
                    selectedline.style("stroke-width", '.$dashboard_options['lineWidth'].'+2);

                    var dotSelector = "." + "dot-line-"+indexValue;
                    var selecteddot = d3.selectAll(dotSelector);
                    selecteddot.style("stroke-width",'.$dashboard_options['lineWidth'].'+2);

                    var bulletSelector = "." +  "line-legendBullet-" + indexValue;
                    var selectedLegendBullet = d3.selectAll(bulletSelector);

                    var textSelector = "." +"line-legendText-" + indexValue;
                    var selectedLegendText = d3.selectAll(textSelector);
                    selectedLegendText.style("font-weight", "bolder");

                    if (d.length> 5) {d3.select(this).append("svg:title").text(d);}
                    })
            .on("mouseout",synchronizedMouseOut'.$sid.');

            // adjust the position of legend
            var legendLbls = graph.selectAll("[type=legendtext]");
            var legendIcons = graph.selectAll("[type=legendicon]");
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
                if (legend_width > w+100)
                {
                    // trim text
                    var trim_percentage = (legend_width - w) / legend_width ;
                    legendLbls.text(function(d){
                        ori_len = d.length;
                        new_len = ori_len-parseInt(ori_len * trim_percentage)-3; // 3 is for ...
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
                legendX = function(d, i) { return -50+iconX[i]; };
                legendTextX = function(d, i) { return  -40+lblX[i]; };
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
        // Rotate text on x Axis
        var x_lbl_width = 0;
        var x_tick_lbls = xAxisObj.selectAll("text");
        var lbl_list = new Array(); 
        for (i=0; i<x_tick_lbls[0].length; i++)
        {
            lbl = x_tick_lbls[0][i];
            bbox = lbl.getBBox();
           // x_lbl_width += bbox.width;
            x_lbl_width += 64+ bbox.width;
	//	console.log("The width is "+x_lbl_width);
            x_lbl_height = bbox.width * 1.414/2.0/2.0;
            lbl_list.push(lbl);
		//console.log("The width is "+x_lbl_width);
        }
        if (x_lbl_width > w * 0.95)
        {
            for (i=0;i<lbl_list.length;i++)
            {    
                lbl_list[i].setAttribute("transform", "translate("+-x_lbl_height+","+x_lbl_height+")rotate(-45)");
                if(x_lbl_width/w > 2 && x_lbl_width/w < 6)
                {
                    if(i%2 != 0)
                    {
                        lbl_list[i].setAttribute("opacity","0");
                    }
                }
                else if(x_lbl_width/w >= 6 && x_lbl_width/w < 8)
                {
                    if(i%3 != 0)
                    {
                        lbl_list[i].setAttribute("opacity","0");
                    }
                }
                else if(x_lbl_width/w >= 8 && x_lbl_width/w < 10)
               {
                    if(i%4 != 0)
                    {
                        lbl_list[i].setAttribute("opacity","0");
                    }
                }
                else if(x_lbl_width/w >= 10 && x_lbl_width/w < 12)
               {
                    if(i%5 != 0)
                    {
                        lbl_list[i].setAttribute("opacity","0");
                    }
                }
                else if(x_lbl_width/w >= 12)
               {
                    if(i%6 != 0)
                    {
                        lbl_list[i].setAttribute("opacity","0");
                    }
                }
            }

            d3.select(".xTitle").attr("transform","translate(0,"+x_lbl_height*2+")");
            if (legendlocation == "bottom") {       
                graph.selectAll("[type=legendtext]")
                    .attr("y",function(d,i){
                        return legendTextY(d,i) + x_lbl_height - 10;
                    });
                graph.selectAll("[type=legendicon]")
                    .attr("cy",function(d,i){
                        return legendY(d,i) + x_lbl_height - 10;
                    }); 
            }
        }
    }
    '.$content.'
    draw_d3_dual_yaxis_linechart'.$sid.'(legendLabels'.$sid.',data'.$sid.');
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
                
                function compareArray(x, y) {
                    if (x === y) {//For reference types:returns true if x and y points to same object
                        return true;
                    }
                    if (x.length != y.length) {
                        return false;
                    }
                    for (key in x) {
                        if (x[key] !== y[key]) {//!== So that the the values are not converted while comparison
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
                    
                    var new_y_max = d3.max(data'.$sid.', function(d){return d3.max(d.slice(1,d.length));});
                    var new_y_min = d3.min(data'.$sid.', function(d){return d3.min(d.slice(1,d.length));});
                    var new_y_min = 0;
                    var redraw;
					if (!compareArray(old_legendLabel'.$sid.',legendLabels'.$sid.')){redraw = false;}//# of columns changed or legend text changed,redraw whole chart
                    else if (old_data'.$sid.'.length != data'.$sid.'.length) {redraw = false;}//# of rows changed
                    else if (!compareId(old_data'.$sid.',data'.$sid.')){redraw = false;}//ids of rows changed
                    else {redraw = true;}//only redraw change lines and y axis
                    draw_d3_dual_yaxis_linechart'.$sid.'(legendLabels'.$sid.',data'.$sid.',redraw);
					
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					
				}
			</script>';
		return($str);
}



function reload_viz_d3_dual_yaxis_linechart($sid, $value, $options, $setup)
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
	for($i=0; $i<count($name_type1);$i++)
		if($i==0) {
            $sql .= ' "'.$name_type1[$i][0].'"';
        }
		else {
            $sql .= ' ,"'.$name_type1[$i][0].'"';
            if ($i < count($name_type1)-1) $content .= '"'.$name_type1[$i][0].'",';
            else $content .= '"'.$name_type1[$i][0].'"';
        }
    $content.='];';
	$sql .= ' from "'.$options['tablename'].'"';
	$result	= $db->fetchAll($sql);


    $content .= 'var data'.$sid.' = [';
	$i = 0;
	foreach($result as $value)
	{
		if($i>0) $content .= ',';

		$content .= '[';
		for($j=0;$j<count($value);$j++)
		{	
			if($j>0) $content .=',';
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

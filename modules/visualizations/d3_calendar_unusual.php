<?
function getsetup_viz_d3_Calendar_Unusual()
{
	$options['_CREDITS']				= 'Main Developer: Jie Fang';
	$options['_MODULEDESCRIPTION']		= '<p>Regular table: each row in the table represents a date with a event number.</p>    <p>Columns:</p>        <ul>
        <li>Column 0: date</li>
        <li>Column 1: number</li>
        </ul>	
<p>Unusual table: each row in the table represents an unusual date.</p>   <ul>        <li>Column 0: date</li>
        </ul>   For more information about D3 library, please, refer to <a href="http:d3js.org">Data-Driven Documents</a>';
	
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
	
*/	
	$options[80]['name']				= 'tablename';
	$options[80]['description']			= 'Regular table';
	$options[80]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[80]['type']				= 'Table';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';

	$options[81]['name']				= 'datefieldname';
	$options[81]['description']			= 'Column name of date';
	$options[81]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[81]['type']				= 'Text';
	$options[81]['link']				= 'link to further information..?';
	$options[81]['lookup']				= ''; 
	$options[81]['default']				= 'date';
	$options[81]['optional']			= 'no';
	$options[81]['repeatable']			= 'no';
	$options[81]['perdashboard']		= 'no';
	$options[81]['dependenton']			= '';

	$options[82]['name']				= 'numfieldname';
	$options[82]['description']			= 'Column name of events number';
	$options[82]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[82]['type']				= 'Text';
	$options[82]['link']				= 'link to further information..?';
	$options[82]['lookup']				= ''; 
	$options[82]['default']				= 'num1';
	$options[82]['optional']			= 'no';
	$options[82]['repeatable']			= 'no';
	$options[82]['perdashboard']		= 'no';
	$options[82]['dependenton']			= '';

	$options[85]['name']				= 'unusual_tablename';
	$options[85]['description']			= 'Unusual table';
	$options[85]['detail']				= 'choose the table you want to graph. refer to the module description for table format';
	$options[85]['type']				= 'Table';
	$options[85]['link']				= 'link to further information..?';
	$options[85]['lookup']				= ''; 
	$options[85]['default']				= '';
	$options[85]['optional']			= 'no';
	$options[85]['repeatable']			= 'no';
	$options[85]['perdashboard']		= 'no';
	$options[85]['dependenton']			= '';

	$options[87]['name']				= 'unusual_datefieldname';
	$options[87]['description']			= 'Column name of unusual date';
	$options[87]['detail']				= '';
	$options[87]['type']				= 'Text';
	$options[87]['link']				= 'link to further information..?';
	$options[87]['lookup']				= ''; 
	$options[87]['default']				= 'date';
	$options[87]['optional']			= 'no';
	$options[87]['repeatable']			= 'no';
	$options[87]['perdashboard']		= 'no';
	$options[87]['dependenton']			= '';
	
	$options[86]['name']				= 'unusual_hcolor';
	$options[86]['description']			= 'Unusual highlight color';
	$options[86]['detail']				= '';
	$options[86]['type']				= 'Color';
	$options[86]['link']				= 'link to further information..?';
	$options[86]['lookup']				= ''; 
	$options[86]['default']				= 'black';
	$options[86]['optional']			= 'no';
	$options[86]['repeatable']			= 'no';
	$options[86]['perdashboard']		= 'yes';
	$options[86]['dependenton']			= '';

	$options[90]['name']				= 'title';
	$options[90]['description']			= 'Title of the graph';
	$options[90]['detail']				= '';
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
	$options[120]['lookup']				= '|Verdana|Arial Narrow|Arial'; 
	$options[120]['default']			= 'Verdana';
	$options[120]['optional']			= 'no';
	$options[120]['repeatable']			= 'no';
	$options[120]['perdashboard']		= 'yes';
	$options[120]['dependenton']		= '';	
	
	$options[260]['name']				= 'vAxis';
	$options[260]['description']		= 'Text color of the year lable';
	$options[260]['detail']				= 'This is the font color of the year lable.';
	$options[260]['type']				= 'Color';
	$options[260]['link']				= 'link to further information..?';
	$options[260]['lookup']				= ''; 
	$options[260]['default']			= 'black';
	$options[260]['optional']			= 'no';
	$options[260]['repeatable']			= 'no';
	$options[260]['perdashboard']		= 'yes';
	$options[260]['dependenton']		= '';

	
	$options[280]['name']				= 'vAxisTextSize';
	$options[280]['description']		= 'Font size of the year lable';
	$options[280]['detail']				= 'This is the font size of the year lable';
	$options[280]['type']				= 'Text';
	$options[280]['link']				= 'link to further information..?';
	$options[280]['lookup']				= ''; 
	$options[280]['default']			= '10';
	$options[280]['optional']			= 'no';
	$options[280]['repeatable']			= 'no';
	$options[280]['perdashboard']		= 'yes';
	$options[280]['dependenton']		= '';

    $options[290]['name']               = 'weekdayTextColor';
    $options[290]['description']        = 'Text color of the weekday lable';    
    $options[290]['detail']             = 'This is the color of the year lable';
    $options[290]['type']               = 'Color';
    $options[290]['link']               = 'link to further information..?';
    $options[290]['lookup']             = ''; 
    $options[290]['default']            = 'black';
    $options[290]['optional']           = 'no';
    $options[290]['repeatable']         = 'no';
    $options[290]['perdashboard']       = 'yes';
    $options[290]['dependenton']        = '';

    $options[300]['name']               = 'weekdayTextSize';
    $options[300]['description']        = 'Font size of the weekday lable';    
    $options[300]['detail']             = 'This is the font size of the weekday lable';
    $options[300]['type']               = 'Text';
    $options[300]['link']               = 'link to further information..?';
    $options[300]['lookup']             = ''; 
    $options[300]['default']            = '10';
    $options[300]['optional']           = 'no';
    $options[300]['repeatable']         = 'no';
    $options[300]['perdashboard']       = 'yes';
    $options[300]['dependenton']        = '';
	
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

function place_viz_d3_Calendar_Unusual($sid, $value, $options, $setup)
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

	$content = reload_viz_d3_Calendar_Unusual($sid,$value,$options,$setup);

$str.=    
'<style>
/*
 * This product includes color specifications and designs developed by Cynthia
 * Brewer (http://colorbrewer.org/).
*/ 
.YlGn .q0-3{fill:rgb(247,252,185)}
.YlGn .q1-3{fill:rgb(173,221,142)}
.YlGn .q2-3{fill:rgb(49,163,84)}
.YlGn .q0-4{fill:rgb(255,255,204)}
.YlGn .q1-4{fill:rgb(194,230,153)}
.YlGn .q2-4{fill:rgb(120,198,121)}
.YlGn .q3-4{fill:rgb(35,132,67)}
.YlGn .q0-5{fill:rgb(255,255,204)}
.YlGn .q1-5{fill:rgb(194,230,153)}
.YlGn .q2-5{fill:rgb(120,198,121)}
.YlGn .q3-5{fill:rgb(49,163,84)}
.YlGn .q4-5{fill:rgb(0,104,55)}
.YlGn .q0-6{fill:rgb(255,255,204)}
.YlGn .q1-6{fill:rgb(217,240,163)}
.YlGn .q2-6{fill:rgb(173,221,142)}
.YlGn .q3-6{fill:rgb(120,198,121)}
.YlGn .q4-6{fill:rgb(49,163,84)}
.YlGn .q5-6{fill:rgb(0,104,55)}
.YlGn .q0-7{fill:rgb(255,255,204)}
.YlGn .q1-7{fill:rgb(217,240,163)}
.YlGn .q2-7{fill:rgb(173,221,142)}
.YlGn .q3-7{fill:rgb(120,198,121)}
.YlGn .q4-7{fill:rgb(65,171,93)}
.YlGn .q5-7{fill:rgb(35,132,67)}
.YlGn .q6-7{fill:rgb(0,90,50)}
.YlGn .q0-8{fill:rgb(255,255,229)}
.YlGn .q1-8{fill:rgb(247,252,185)}
.YlGn .q2-8{fill:rgb(217,240,163)}
.YlGn .q3-8{fill:rgb(173,221,142)}
.YlGn .q4-8{fill:rgb(120,198,121)}
.YlGn .q5-8{fill:rgb(65,171,93)}
.YlGn .q6-8{fill:rgb(35,132,67)}
.YlGn .q7-8{fill:rgb(0,90,50)}
.YlGn .q0-9{fill:rgb(255,255,229)}
.YlGn .q1-9{fill:rgb(247,252,185)}
.YlGn .q2-9{fill:rgb(217,240,163)}
.YlGn .q3-9{fill:rgb(173,221,142)}
.YlGn .q4-9{fill:rgb(120,198,121)}
.YlGn .q5-9{fill:rgb(65,171,93)}
.YlGn .q6-9{fill:rgb(35,132,67)}
.YlGn .q7-9{fill:rgb(0,104,55)}
.YlGn .q8-9{fill:rgb(0,69,41)}
.YlGnBu .q0-3{fill:rgb(237,248,177)}
.YlGnBu .q1-3{fill:rgb(127,205,187)}
.YlGnBu .q2-3{fill:rgb(44,127,184)}
.YlGnBu .q0-4{fill:rgb(255,255,204)}
.YlGnBu .q1-4{fill:rgb(161,218,180)}
.YlGnBu .q2-4{fill:rgb(65,182,196)}
.YlGnBu .q3-4{fill:rgb(34,94,168)}
.YlGnBu .q0-5{fill:rgb(255,255,204)}
.YlGnBu .q1-5{fill:rgb(161,218,180)}
.YlGnBu .q2-5{fill:rgb(65,182,196)}
.YlGnBu .q3-5{fill:rgb(44,127,184)}
.YlGnBu .q4-5{fill:rgb(37,52,148)}
.YlGnBu .q0-6{fill:rgb(255,255,204)}
.YlGnBu .q1-6{fill:rgb(199,233,180)}
.YlGnBu .q2-6{fill:rgb(127,205,187)}
.YlGnBu .q3-6{fill:rgb(65,182,196)}
.YlGnBu .q4-6{fill:rgb(44,127,184)}
.YlGnBu .q5-6{fill:rgb(37,52,148)}
.YlGnBu .q0-7{fill:rgb(255,255,204)}
.YlGnBu .q1-7{fill:rgb(199,233,180)}
.YlGnBu .q2-7{fill:rgb(127,205,187)}
.YlGnBu .q3-7{fill:rgb(65,182,196)}
.YlGnBu .q4-7{fill:rgb(29,145,192)}
.YlGnBu .q5-7{fill:rgb(34,94,168)}
.YlGnBu .q6-7{fill:rgb(12,44,132)}
.YlGnBu .q0-8{fill:rgb(255,255,217)}
.YlGnBu .q1-8{fill:rgb(237,248,177)}
.YlGnBu .q2-8{fill:rgb(199,233,180)}
.YlGnBu .q3-8{fill:rgb(127,205,187)}
.YlGnBu .q4-8{fill:rgb(65,182,196)}
.YlGnBu .q5-8{fill:rgb(29,145,192)}
.YlGnBu .q6-8{fill:rgb(34,94,168)}
.YlGnBu .q7-8{fill:rgb(12,44,132)}
.YlGnBu .q0-9{fill:rgb(255,255,217)}
.YlGnBu .q1-9{fill:rgb(237,248,177)}
.YlGnBu .q2-9{fill:rgb(199,233,180)}
.YlGnBu .q3-9{fill:rgb(127,205,187)}
.YlGnBu .q4-9{fill:rgb(65,182,196)}
.YlGnBu .q5-9{fill:rgb(29,145,192)}
.YlGnBu .q6-9{fill:rgb(34,94,168)}
.YlGnBu .q7-9{fill:rgb(37,52,148)}
.YlGnBu .q8-9{fill:rgb(8,29,88)}
.GnBu .q0-3{fill:rgb(224,243,219)}
.GnBu .q1-3{fill:rgb(168,221,181)}
.GnBu .q2-3{fill:rgb(67,162,202)}
.GnBu .q0-4{fill:rgb(240,249,232)}
.GnBu .q1-4{fill:rgb(186,228,188)}
.GnBu .q2-4{fill:rgb(123,204,196)}
.GnBu .q3-4{fill:rgb(43,140,190)}
.GnBu .q0-5{fill:rgb(240,249,232)}
.GnBu .q1-5{fill:rgb(186,228,188)}
.GnBu .q2-5{fill:rgb(123,204,196)}
.GnBu .q3-5{fill:rgb(67,162,202)}
.GnBu .q4-5{fill:rgb(8,104,172)}
.GnBu .q0-6{fill:rgb(240,249,232)}
.GnBu .q1-6{fill:rgb(204,235,197)}
.GnBu .q2-6{fill:rgb(168,221,181)}
.GnBu .q3-6{fill:rgb(123,204,196)}
.GnBu .q4-6{fill:rgb(67,162,202)}
.GnBu .q5-6{fill:rgb(8,104,172)}
.GnBu .q0-7{fill:rgb(240,249,232)}
.GnBu .q1-7{fill:rgb(204,235,197)}
.GnBu .q2-7{fill:rgb(168,221,181)}
.GnBu .q3-7{fill:rgb(123,204,196)}
.GnBu .q4-7{fill:rgb(78,179,211)}
.GnBu .q5-7{fill:rgb(43,140,190)}
.GnBu .q6-7{fill:rgb(8,88,158)}
.GnBu .q0-8{fill:rgb(247,252,240)}
.GnBu .q1-8{fill:rgb(224,243,219)}
.GnBu .q2-8{fill:rgb(204,235,197)}
.GnBu .q3-8{fill:rgb(168,221,181)}
.GnBu .q4-8{fill:rgb(123,204,196)}
.GnBu .q5-8{fill:rgb(78,179,211)}
.GnBu .q6-8{fill:rgb(43,140,190)}
.GnBu .q7-8{fill:rgb(8,88,158)}
.GnBu .q0-9{fill:rgb(247,252,240)}
.GnBu .q1-9{fill:rgb(224,243,219)}
.GnBu .q2-9{fill:rgb(204,235,197)}
.GnBu .q3-9{fill:rgb(168,221,181)}
.GnBu .q4-9{fill:rgb(123,204,196)}
.GnBu .q5-9{fill:rgb(78,179,211)}
.GnBu .q6-9{fill:rgb(43,140,190)}
.GnBu .q7-9{fill:rgb(8,104,172)}
.GnBu .q8-9{fill:rgb(8,64,129)}
.BuGn .q0-3{fill:rgb(229,245,249)}
.BuGn .q1-3{fill:rgb(153,216,201)}
.BuGn .q2-3{fill:rgb(44,162,95)}
.BuGn .q0-4{fill:rgb(237,248,251)}
.BuGn .q1-4{fill:rgb(178,226,226)}
.BuGn .q2-4{fill:rgb(102,194,164)}
.BuGn .q3-4{fill:rgb(35,139,69)}
.BuGn .q0-5{fill:rgb(237,248,251)}
.BuGn .q1-5{fill:rgb(178,226,226)}
.BuGn .q2-5{fill:rgb(102,194,164)}
.BuGn .q3-5{fill:rgb(44,162,95)}
.BuGn .q4-5{fill:rgb(0,109,44)}
.BuGn .q0-6{fill:rgb(237,248,251)}
.BuGn .q1-6{fill:rgb(204,236,230)}
.BuGn .q2-6{fill:rgb(153,216,201)}
.BuGn .q3-6{fill:rgb(102,194,164)}
.BuGn .q4-6{fill:rgb(44,162,95)}
.BuGn .q5-6{fill:rgb(0,109,44)}
.BuGn .q0-7{fill:rgb(237,248,251)}
.BuGn .q1-7{fill:rgb(204,236,230)}
.BuGn .q2-7{fill:rgb(153,216,201)}
.BuGn .q3-7{fill:rgb(102,194,164)}
.BuGn .q4-7{fill:rgb(65,174,118)}
.BuGn .q5-7{fill:rgb(35,139,69)}
.BuGn .q6-7{fill:rgb(0,88,36)}
.BuGn .q0-8{fill:rgb(247,252,253)}
.BuGn .q1-8{fill:rgb(229,245,249)}
.BuGn .q2-8{fill:rgb(204,236,230)}
.BuGn .q3-8{fill:rgb(153,216,201)}
.BuGn .q4-8{fill:rgb(102,194,164)}
.BuGn .q5-8{fill:rgb(65,174,118)}
.BuGn .q6-8{fill:rgb(35,139,69)}
.BuGn .q7-8{fill:rgb(0,88,36)}
.BuGn .q0-9{fill:rgb(247,252,253)}
.BuGn .q1-9{fill:rgb(229,245,249)}
.BuGn .q2-9{fill:rgb(204,236,230)}
.BuGn .q3-9{fill:rgb(153,216,201)}
.BuGn .q4-9{fill:rgb(102,194,164)}
.BuGn .q5-9{fill:rgb(65,174,118)}
.BuGn .q6-9{fill:rgb(35,139,69)}
.BuGn .q7-9{fill:rgb(0,109,44)}
.BuGn .q8-9{fill:rgb(0,68,27)}
.PuBuGn .q0-3{fill:rgb(236,226,240)}
.PuBuGn .q1-3{fill:rgb(166,189,219)}
.PuBuGn .q2-3{fill:rgb(28,144,153)}
.PuBuGn .q0-4{fill:rgb(246,239,247)}
.PuBuGn .q1-4{fill:rgb(189,201,225)}
.PuBuGn .q2-4{fill:rgb(103,169,207)}
.PuBuGn .q3-4{fill:rgb(2,129,138)}
.PuBuGn .q0-5{fill:rgb(246,239,247)}
.PuBuGn .q1-5{fill:rgb(189,201,225)}
.PuBuGn .q2-5{fill:rgb(103,169,207)}
.PuBuGn .q3-5{fill:rgb(28,144,153)}
.PuBuGn .q4-5{fill:rgb(1,108,89)}
.PuBuGn .q0-6{fill:rgb(246,239,247)}
.PuBuGn .q1-6{fill:rgb(208,209,230)}
.PuBuGn .q2-6{fill:rgb(166,189,219)}
.PuBuGn .q3-6{fill:rgb(103,169,207)}
.PuBuGn .q4-6{fill:rgb(28,144,153)}
.PuBuGn .q5-6{fill:rgb(1,108,89)}
.PuBuGn .q0-7{fill:rgb(246,239,247)}
.PuBuGn .q1-7{fill:rgb(208,209,230)}
.PuBuGn .q2-7{fill:rgb(166,189,219)}
.PuBuGn .q3-7{fill:rgb(103,169,207)}
.PuBuGn .q4-7{fill:rgb(54,144,192)}
.PuBuGn .q5-7{fill:rgb(2,129,138)}
.PuBuGn .q6-7{fill:rgb(1,100,80)}
.PuBuGn .q0-8{fill:rgb(255,247,251)}
.PuBuGn .q1-8{fill:rgb(236,226,240)}
.PuBuGn .q2-8{fill:rgb(208,209,230)}
.PuBuGn .q3-8{fill:rgb(166,189,219)}
.PuBuGn .q4-8{fill:rgb(103,169,207)}
.PuBuGn .q5-8{fill:rgb(54,144,192)}
.PuBuGn .q6-8{fill:rgb(2,129,138)}
.PuBuGn .q7-8{fill:rgb(1,100,80)}
.PuBuGn .q0-9{fill:rgb(255,247,251)}
.PuBuGn .q1-9{fill:rgb(236,226,240)}
.PuBuGn .q2-9{fill:rgb(208,209,230)}
.PuBuGn .q3-9{fill:rgb(166,189,219)}
.PuBuGn .q4-9{fill:rgb(103,169,207)}
.PuBuGn .q5-9{fill:rgb(54,144,192)}
.PuBuGn .q6-9{fill:rgb(2,129,138)}
.PuBuGn .q7-9{fill:rgb(1,108,89)}
.PuBuGn .q8-9{fill:rgb(1,70,54)}
.PuBu .q0-3{fill:rgb(236,231,242)}
.PuBu .q1-3{fill:rgb(166,189,219)}
.PuBu .q2-3{fill:rgb(43,140,190)}
.PuBu .q0-4{fill:rgb(241,238,246)}
.PuBu .q1-4{fill:rgb(189,201,225)}
.PuBu .q2-4{fill:rgb(116,169,207)}
.PuBu .q3-4{fill:rgb(5,112,176)}
.PuBu .q0-5{fill:rgb(241,238,246)}
.PuBu .q1-5{fill:rgb(189,201,225)}
.PuBu .q2-5{fill:rgb(116,169,207)}
.PuBu .q3-5{fill:rgb(43,140,190)}
.PuBu .q4-5{fill:rgb(4,90,141)}
.PuBu .q0-6{fill:rgb(241,238,246)}
.PuBu .q1-6{fill:rgb(208,209,230)}
.PuBu .q2-6{fill:rgb(166,189,219)}
.PuBu .q3-6{fill:rgb(116,169,207)}
.PuBu .q4-6{fill:rgb(43,140,190)}
.PuBu .q5-6{fill:rgb(4,90,141)}
.PuBu .q0-7{fill:rgb(241,238,246)}
.PuBu .q1-7{fill:rgb(208,209,230)}
.PuBu .q2-7{fill:rgb(166,189,219)}
.PuBu .q3-7{fill:rgb(116,169,207)}
.PuBu .q4-7{fill:rgb(54,144,192)}
.PuBu .q5-7{fill:rgb(5,112,176)}
.PuBu .q6-7{fill:rgb(3,78,123)}
.PuBu .q0-8{fill:rgb(255,247,251)}
.PuBu .q1-8{fill:rgb(236,231,242)}
.PuBu .q2-8{fill:rgb(208,209,230)}
.PuBu .q3-8{fill:rgb(166,189,219)}
.PuBu .q4-8{fill:rgb(116,169,207)}
.PuBu .q5-8{fill:rgb(54,144,192)}
.PuBu .q6-8{fill:rgb(5,112,176)}
.PuBu .q7-8{fill:rgb(3,78,123)}
.PuBu .q0-9{fill:rgb(255,247,251)}
.PuBu .q1-9{fill:rgb(236,231,242)}
.PuBu .q2-9{fill:rgb(208,209,230)}
.PuBu .q3-9{fill:rgb(166,189,219)}
.PuBu .q4-9{fill:rgb(116,169,207)}
.PuBu .q5-9{fill:rgb(54,144,192)}
.PuBu .q6-9{fill:rgb(5,112,176)}
.PuBu .q7-9{fill:rgb(4,90,141)}
.PuBu .q8-9{fill:rgb(2,56,88)}
.BuPu .q0-3{fill:rgb(224,236,244)}
.BuPu .q1-3{fill:rgb(158,188,218)}
.BuPu .q2-3{fill:rgb(136,86,167)}
.BuPu .q0-4{fill:rgb(237,248,251)}
.BuPu .q1-4{fill:rgb(179,205,227)}
.BuPu .q2-4{fill:rgb(140,150,198)}
.BuPu .q3-4{fill:rgb(136,65,157)}
.BuPu .q0-5{fill:rgb(237,248,251)}
.BuPu .q1-5{fill:rgb(179,205,227)}
.BuPu .q2-5{fill:rgb(140,150,198)}
.BuPu .q3-5{fill:rgb(136,86,167)}
.BuPu .q4-5{fill:rgb(129,15,124)}
.BuPu .q0-6{fill:rgb(237,248,251)}
.BuPu .q1-6{fill:rgb(191,211,230)}
.BuPu .q2-6{fill:rgb(158,188,218)}
.BuPu .q3-6{fill:rgb(140,150,198)}
.BuPu .q4-6{fill:rgb(136,86,167)}
.BuPu .q5-6{fill:rgb(129,15,124)}
.BuPu .q0-7{fill:rgb(237,248,251)}
.BuPu .q1-7{fill:rgb(191,211,230)}
.BuPu .q2-7{fill:rgb(158,188,218)}
.BuPu .q3-7{fill:rgb(140,150,198)}
.BuPu .q4-7{fill:rgb(140,107,177)}
.BuPu .q5-7{fill:rgb(136,65,157)}
.BuPu .q6-7{fill:rgb(110,1,107)}
.BuPu .q0-8{fill:rgb(247,252,253)}
.BuPu .q1-8{fill:rgb(224,236,244)}
.BuPu .q2-8{fill:rgb(191,211,230)}
.BuPu .q3-8{fill:rgb(158,188,218)}
.BuPu .q4-8{fill:rgb(140,150,198)}
.BuPu .q5-8{fill:rgb(140,107,177)}
.BuPu .q6-8{fill:rgb(136,65,157)}
.BuPu .q7-8{fill:rgb(110,1,107)}
.BuPu .q0-9{fill:rgb(247,252,253)}
.BuPu .q1-9{fill:rgb(224,236,244)}
.BuPu .q2-9{fill:rgb(191,211,230)}
.BuPu .q3-9{fill:rgb(158,188,218)}
.BuPu .q4-9{fill:rgb(140,150,198)}
.BuPu .q5-9{fill:rgb(140,107,177)}
.BuPu .q6-9{fill:rgb(136,65,157)}
.BuPu .q7-9{fill:rgb(129,15,124)}
.BuPu .q8-9{fill:rgb(77,0,75)}
.RdPu .q0-3{fill:rgb(253,224,221)}
.RdPu .q1-3{fill:rgb(250,159,181)}
.RdPu .q2-3{fill:rgb(197,27,138)}
.RdPu .q0-4{fill:rgb(254,235,226)}
.RdPu .q1-4{fill:rgb(251,180,185)}
.RdPu .q2-4{fill:rgb(247,104,161)}
.RdPu .q3-4{fill:rgb(174,1,126)}
.RdPu .q0-5{fill:rgb(254,235,226)}
.RdPu .q1-5{fill:rgb(251,180,185)}
.RdPu .q2-5{fill:rgb(247,104,161)}
.RdPu .q3-5{fill:rgb(197,27,138)}
.RdPu .q4-5{fill:rgb(122,1,119)}
.RdPu .q0-6{fill:rgb(254,235,226)}
.RdPu .q1-6{fill:rgb(252,197,192)}
.RdPu .q2-6{fill:rgb(250,159,181)}
.RdPu .q3-6{fill:rgb(247,104,161)}
.RdPu .q4-6{fill:rgb(197,27,138)}
.RdPu .q5-6{fill:rgb(122,1,119)}
.RdPu .q0-7{fill:rgb(254,235,226)}
.RdPu .q1-7{fill:rgb(252,197,192)}
.RdPu .q2-7{fill:rgb(250,159,181)}
.RdPu .q3-7{fill:rgb(247,104,161)}
.RdPu .q4-7{fill:rgb(221,52,151)}
.RdPu .q5-7{fill:rgb(174,1,126)}
.RdPu .q6-7{fill:rgb(122,1,119)}
.RdPu .q0-8{fill:rgb(255,247,243)}
.RdPu .q1-8{fill:rgb(253,224,221)}
.RdPu .q2-8{fill:rgb(252,197,192)}
.RdPu .q3-8{fill:rgb(250,159,181)}
.RdPu .q4-8{fill:rgb(247,104,161)}
.RdPu .q5-8{fill:rgb(221,52,151)}
.RdPu .q6-8{fill:rgb(174,1,126)}
.RdPu .q7-8{fill:rgb(122,1,119)}
.RdPu .q0-9{fill:rgb(255,247,243)}
.RdPu .q1-9{fill:rgb(253,224,221)}
.RdPu .q2-9{fill:rgb(252,197,192)}
.RdPu .q3-9{fill:rgb(250,159,181)}
.RdPu .q4-9{fill:rgb(247,104,161)}
.RdPu .q5-9{fill:rgb(221,52,151)}
.RdPu .q6-9{fill:rgb(174,1,126)}
.RdPu .q7-9{fill:rgb(122,1,119)}
.RdPu .q8-9{fill:rgb(73,0,106)}
.PuRd .q0-3{fill:rgb(231,225,239)}
.PuRd .q1-3{fill:rgb(201,148,199)}
.PuRd .q2-3{fill:rgb(221,28,119)}
.PuRd .q0-4{fill:rgb(241,238,246)}
.PuRd .q1-4{fill:rgb(215,181,216)}
.PuRd .q2-4{fill:rgb(223,101,176)}
.PuRd .q3-4{fill:rgb(206,18,86)}
.PuRd .q0-5{fill:rgb(241,238,246)}
.PuRd .q1-5{fill:rgb(215,181,216)}
.PuRd .q2-5{fill:rgb(223,101,176)}
.PuRd .q3-5{fill:rgb(221,28,119)}
.PuRd .q4-5{fill:rgb(152,0,67)}
.PuRd .q0-6{fill:rgb(241,238,246)}
.PuRd .q1-6{fill:rgb(212,185,218)}
.PuRd .q2-6{fill:rgb(201,148,199)}
.PuRd .q3-6{fill:rgb(223,101,176)}
.PuRd .q4-6{fill:rgb(221,28,119)}
.PuRd .q5-6{fill:rgb(152,0,67)}
.PuRd .q0-7{fill:rgb(241,238,246)}
.PuRd .q1-7{fill:rgb(212,185,218)}
.PuRd .q2-7{fill:rgb(201,148,199)}
.PuRd .q3-7{fill:rgb(223,101,176)}
.PuRd .q4-7{fill:rgb(231,41,138)}
.PuRd .q5-7{fill:rgb(206,18,86)}
.PuRd .q6-7{fill:rgb(145,0,63)}
.PuRd .q0-8{fill:rgb(247,244,249)}
.PuRd .q1-8{fill:rgb(231,225,239)}
.PuRd .q2-8{fill:rgb(212,185,218)}
.PuRd .q3-8{fill:rgb(201,148,199)}
.PuRd .q4-8{fill:rgb(223,101,176)}
.PuRd .q5-8{fill:rgb(231,41,138)}
.PuRd .q6-8{fill:rgb(206,18,86)}
.PuRd .q7-8{fill:rgb(145,0,63)}
.PuRd .q0-9{fill:rgb(247,244,249)}
.PuRd .q1-9{fill:rgb(231,225,239)}
.PuRd .q2-9{fill:rgb(212,185,218)}
.PuRd .q3-9{fill:rgb(201,148,199)}
.PuRd .q4-9{fill:rgb(223,101,176)}
.PuRd .q5-9{fill:rgb(231,41,138)}
.PuRd .q6-9{fill:rgb(206,18,86)}
.PuRd .q7-9{fill:rgb(152,0,67)}
.PuRd .q8-9{fill:rgb(103,0,31)}
.OrRd .q0-3{fill:rgb(254,232,200)}
.OrRd .q1-3{fill:rgb(253,187,132)}
.OrRd .q2-3{fill:rgb(227,74,51)}
.OrRd .q0-4{fill:rgb(254,240,217)}
.OrRd .q1-4{fill:rgb(253,204,138)}
.OrRd .q2-4{fill:rgb(252,141,89)}
.OrRd .q3-4{fill:rgb(215,48,31)}
.OrRd .q0-5{fill:rgb(254,240,217)}
.OrRd .q1-5{fill:rgb(253,204,138)}
.OrRd .q2-5{fill:rgb(252,141,89)}
.OrRd .q3-5{fill:rgb(227,74,51)}
.OrRd .q4-5{fill:rgb(179,0,0)}
.OrRd .q0-6{fill:rgb(254,240,217)}
.OrRd .q1-6{fill:rgb(253,212,158)}
.OrRd .q2-6{fill:rgb(253,187,132)}
.OrRd .q3-6{fill:rgb(252,141,89)}
.OrRd .q4-6{fill:rgb(227,74,51)}
.OrRd .q5-6{fill:rgb(179,0,0)}
.OrRd .q0-7{fill:rgb(254,240,217)}
.OrRd .q1-7{fill:rgb(253,212,158)}
.OrRd .q2-7{fill:rgb(253,187,132)}
.OrRd .q3-7{fill:rgb(252,141,89)}
.OrRd .q4-7{fill:rgb(239,101,72)}
.OrRd .q5-7{fill:rgb(215,48,31)}
.OrRd .q6-7{fill:rgb(153,0,0)}
.OrRd .q0-8{fill:rgb(255,247,236)}
.OrRd .q1-8{fill:rgb(254,232,200)}
.OrRd .q2-8{fill:rgb(253,212,158)}
.OrRd .q3-8{fill:rgb(253,187,132)}
.OrRd .q4-8{fill:rgb(252,141,89)}
.OrRd .q5-8{fill:rgb(239,101,72)}
.OrRd .q6-8{fill:rgb(215,48,31)}
.OrRd .q7-8{fill:rgb(153,0,0)}
.OrRd .q0-9{fill:rgb(255,247,236)}
.OrRd .q1-9{fill:rgb(254,232,200)}
.OrRd .q2-9{fill:rgb(253,212,158)}
.OrRd .q3-9{fill:rgb(253,187,132)}
.OrRd .q4-9{fill:rgb(252,141,89)}
.OrRd .q5-9{fill:rgb(239,101,72)}
.OrRd .q6-9{fill:rgb(215,48,31)}
.OrRd .q7-9{fill:rgb(179,0,0)}
.OrRd .q8-9{fill:rgb(127,0,0)}
.YlOrRd .q0-3{fill:rgb(255,237,160)}
.YlOrRd .q1-3{fill:rgb(254,178,76)}
.YlOrRd .q2-3{fill:rgb(240,59,32)}
.YlOrRd .q0-4{fill:rgb(255,255,178)}
.YlOrRd .q1-4{fill:rgb(254,204,92)}
.YlOrRd .q2-4{fill:rgb(253,141,60)}
.YlOrRd .q3-4{fill:rgb(227,26,28)}
.YlOrRd .q0-5{fill:rgb(255,255,178)}
.YlOrRd .q1-5{fill:rgb(254,204,92)}
.YlOrRd .q2-5{fill:rgb(253,141,60)}
.YlOrRd .q3-5{fill:rgb(240,59,32)}
.YlOrRd .q4-5{fill:rgb(189,0,38)}
.YlOrRd .q0-6{fill:rgb(255,255,178)}
.YlOrRd .q1-6{fill:rgb(254,217,118)}
.YlOrRd .q2-6{fill:rgb(254,178,76)}
.YlOrRd .q3-6{fill:rgb(253,141,60)}
.YlOrRd .q4-6{fill:rgb(240,59,32)}
.YlOrRd .q5-6{fill:rgb(189,0,38)}
.YlOrRd .q0-7{fill:rgb(255,255,178)}
.YlOrRd .q1-7{fill:rgb(254,217,118)}
.YlOrRd .q2-7{fill:rgb(254,178,76)}
.YlOrRd .q3-7{fill:rgb(253,141,60)}
.YlOrRd .q4-7{fill:rgb(252,78,42)}
.YlOrRd .q5-7{fill:rgb(227,26,28)}
.YlOrRd .q6-7{fill:rgb(177,0,38)}
.YlOrRd .q0-8{fill:rgb(255,255,204)}
.YlOrRd .q1-8{fill:rgb(255,237,160)}
.YlOrRd .q2-8{fill:rgb(254,217,118)}
.YlOrRd .q3-8{fill:rgb(254,178,76)}
.YlOrRd .q4-8{fill:rgb(253,141,60)}
.YlOrRd .q5-8{fill:rgb(252,78,42)}
.YlOrRd .q6-8{fill:rgb(227,26,28)}
.YlOrRd .q7-8{fill:rgb(177,0,38)}
.YlOrRd .q0-9{fill:rgb(255,255,204)}
.YlOrRd .q1-9{fill:rgb(255,237,160)}
.YlOrRd .q2-9{fill:rgb(254,217,118)}
.YlOrRd .q3-9{fill:rgb(254,178,76)}
.YlOrRd .q4-9{fill:rgb(253,141,60)}
.YlOrRd .q5-9{fill:rgb(252,78,42)}
.YlOrRd .q6-9{fill:rgb(227,26,28)}
.YlOrRd .q7-9{fill:rgb(189,0,38)}
.YlOrRd .q8-9{fill:rgb(128,0,38)}
.YlOrBr .q0-3{fill:rgb(255,247,188)}
.YlOrBr .q1-3{fill:rgb(254,196,79)}
.YlOrBr .q2-3{fill:rgb(217,95,14)}
.YlOrBr .q0-4{fill:rgb(255,255,212)}
.YlOrBr .q1-4{fill:rgb(254,217,142)}
.YlOrBr .q2-4{fill:rgb(254,153,41)}
.YlOrBr .q3-4{fill:rgb(204,76,2)}
.YlOrBr .q0-5{fill:rgb(255,255,212)}
.YlOrBr .q1-5{fill:rgb(254,217,142)}
.YlOrBr .q2-5{fill:rgb(254,153,41)}
.YlOrBr .q3-5{fill:rgb(217,95,14)}
.YlOrBr .q4-5{fill:rgb(153,52,4)}
.YlOrBr .q0-6{fill:rgb(255,255,212)}
.YlOrBr .q1-6{fill:rgb(254,227,145)}
.YlOrBr .q2-6{fill:rgb(254,196,79)}
.YlOrBr .q3-6{fill:rgb(254,153,41)}
.YlOrBr .q4-6{fill:rgb(217,95,14)}
.YlOrBr .q5-6{fill:rgb(153,52,4)}
.YlOrBr .q0-7{fill:rgb(255,255,212)}
.YlOrBr .q1-7{fill:rgb(254,227,145)}
.YlOrBr .q2-7{fill:rgb(254,196,79)}
.YlOrBr .q3-7{fill:rgb(254,153,41)}
.YlOrBr .q4-7{fill:rgb(236,112,20)}
.YlOrBr .q5-7{fill:rgb(204,76,2)}
.YlOrBr .q6-7{fill:rgb(140,45,4)}
.YlOrBr .q0-8{fill:rgb(255,255,229)}
.YlOrBr .q1-8{fill:rgb(255,247,188)}
.YlOrBr .q2-8{fill:rgb(254,227,145)}
.YlOrBr .q3-8{fill:rgb(254,196,79)}
.YlOrBr .q4-8{fill:rgb(254,153,41)}
.YlOrBr .q5-8{fill:rgb(236,112,20)}
.YlOrBr .q6-8{fill:rgb(204,76,2)}
.YlOrBr .q7-8{fill:rgb(140,45,4)}
.YlOrBr .q0-9{fill:rgb(255,255,229)}
.YlOrBr .q1-9{fill:rgb(255,247,188)}
.YlOrBr .q2-9{fill:rgb(254,227,145)}
.YlOrBr .q3-9{fill:rgb(254,196,79)}
.YlOrBr .q4-9{fill:rgb(254,153,41)}
.YlOrBr .q5-9{fill:rgb(236,112,20)}
.YlOrBr .q6-9{fill:rgb(204,76,2)}
.YlOrBr .q7-9{fill:rgb(153,52,4)}
.YlOrBr .q8-9{fill:rgb(102,37,6)}
.Purples .q0-3{fill:rgb(239,237,245)}
.Purples .q1-3{fill:rgb(188,189,220)}
.Purples .q2-3{fill:rgb(117,107,177)}
.Purples .q0-4{fill:rgb(242,240,247)}
.Purples .q1-4{fill:rgb(203,201,226)}
.Purples .q2-4{fill:rgb(158,154,200)}
.Purples .q3-4{fill:rgb(106,81,163)}
.Purples .q0-5{fill:rgb(242,240,247)}
.Purples .q1-5{fill:rgb(203,201,226)}
.Purples .q2-5{fill:rgb(158,154,200)}
.Purples .q3-5{fill:rgb(117,107,177)}
.Purples .q4-5{fill:rgb(84,39,143)}
.Purples .q0-6{fill:rgb(242,240,247)}
.Purples .q1-6{fill:rgb(218,218,235)}
.Purples .q2-6{fill:rgb(188,189,220)}
.Purples .q3-6{fill:rgb(158,154,200)}
.Purples .q4-6{fill:rgb(117,107,177)}
.Purples .q5-6{fill:rgb(84,39,143)}
.Purples .q0-7{fill:rgb(242,240,247)}
.Purples .q1-7{fill:rgb(218,218,235)}
.Purples .q2-7{fill:rgb(188,189,220)}
.Purples .q3-7{fill:rgb(158,154,200)}
.Purples .q4-7{fill:rgb(128,125,186)}
.Purples .q5-7{fill:rgb(106,81,163)}
.Purples .q6-7{fill:rgb(74,20,134)}
.Purples .q0-8{fill:rgb(252,251,253)}
.Purples .q1-8{fill:rgb(239,237,245)}
.Purples .q2-8{fill:rgb(218,218,235)}
.Purples .q3-8{fill:rgb(188,189,220)}
.Purples .q4-8{fill:rgb(158,154,200)}
.Purples .q5-8{fill:rgb(128,125,186)}
.Purples .q6-8{fill:rgb(106,81,163)}
.Purples .q7-8{fill:rgb(74,20,134)}
.Purples .q0-9{fill:rgb(252,251,253)}
.Purples .q1-9{fill:rgb(239,237,245)}
.Purples .q2-9{fill:rgb(218,218,235)}
.Purples .q3-9{fill:rgb(188,189,220)}
.Purples .q4-9{fill:rgb(158,154,200)}
.Purples .q5-9{fill:rgb(128,125,186)}
.Purples .q6-9{fill:rgb(106,81,163)}
.Purples .q7-9{fill:rgb(84,39,143)}
.Purples .q8-9{fill:rgb(63,0,125)}
.Blues .q0-3{fill:rgb(222,235,247)}
.Blues .q1-3{fill:rgb(158,202,225)}
.Blues .q2-3{fill:rgb(49,130,189)}
.Blues .q0-4{fill:rgb(239,243,255)}
.Blues .q1-4{fill:rgb(189,215,231)}
.Blues .q2-4{fill:rgb(107,174,214)}
.Blues .q3-4{fill:rgb(33,113,181)}
.Blues .q0-5{fill:rgb(239,243,255)}
.Blues .q1-5{fill:rgb(189,215,231)}
.Blues .q2-5{fill:rgb(107,174,214)}
.Blues .q3-5{fill:rgb(49,130,189)}
.Blues .q4-5{fill:rgb(8,81,156)}
.Blues .q0-6{fill:rgb(239,243,255)}
.Blues .q1-6{fill:rgb(198,219,239)}
.Blues .q2-6{fill:rgb(158,202,225)}
.Blues .q3-6{fill:rgb(107,174,214)}
.Blues .q4-6{fill:rgb(49,130,189)}
.Blues .q5-6{fill:rgb(8,81,156)}
.Blues .q0-7{fill:rgb(239,243,255)}
.Blues .q1-7{fill:rgb(198,219,239)}
.Blues .q2-7{fill:rgb(158,202,225)}
.Blues .q3-7{fill:rgb(107,174,214)}
.Blues .q4-7{fill:rgb(66,146,198)}
.Blues .q5-7{fill:rgb(33,113,181)}
.Blues .q6-7{fill:rgb(8,69,148)}
.Blues .q0-8{fill:rgb(247,251,255)}
.Blues .q1-8{fill:rgb(222,235,247)}
.Blues .q2-8{fill:rgb(198,219,239)}
.Blues .q3-8{fill:rgb(158,202,225)}
.Blues .q4-8{fill:rgb(107,174,214)}
.Blues .q5-8{fill:rgb(66,146,198)}
.Blues .q6-8{fill:rgb(33,113,181)}
.Blues .q7-8{fill:rgb(8,69,148)}
.Blues .q0-9{fill:rgb(247,251,255)}
.Blues .q1-9{fill:rgb(222,235,247)}
.Blues .q2-9{fill:rgb(198,219,239)}
.Blues .q3-9{fill:rgb(158,202,225)}
.Blues .q4-9{fill:rgb(107,174,214)}
.Blues .q5-9{fill:rgb(66,146,198)}
.Blues .q6-9{fill:rgb(33,113,181)}
.Blues .q7-9{fill:rgb(8,81,156)}
.Blues .q8-9{fill:rgb(8,48,107)}
.Greens .q0-3{fill:rgb(229,245,224)}
.Greens .q1-3{fill:rgb(161,217,155)}
.Greens .q2-3{fill:rgb(49,163,84)}
.Greens .q0-4{fill:rgb(237,248,233)}
.Greens .q1-4{fill:rgb(186,228,179)}
.Greens .q2-4{fill:rgb(116,196,118)}
.Greens .q3-4{fill:rgb(35,139,69)}
.Greens .q0-5{fill:rgb(237,248,233)}
.Greens .q1-5{fill:rgb(186,228,179)}
.Greens .q2-5{fill:rgb(116,196,118)}
.Greens .q3-5{fill:rgb(49,163,84)}
.Greens .q4-5{fill:rgb(0,109,44)}
.Greens .q0-6{fill:rgb(237,248,233)}
.Greens .q1-6{fill:rgb(199,233,192)}
.Greens .q2-6{fill:rgb(161,217,155)}
.Greens .q3-6{fill:rgb(116,196,118)}
.Greens .q4-6{fill:rgb(49,163,84)}
.Greens .q5-6{fill:rgb(0,109,44)}
.Greens .q0-7{fill:rgb(237,248,233)}
.Greens .q1-7{fill:rgb(199,233,192)}
.Greens .q2-7{fill:rgb(161,217,155)}
.Greens .q3-7{fill:rgb(116,196,118)}
.Greens .q4-7{fill:rgb(65,171,93)}
.Greens .q5-7{fill:rgb(35,139,69)}
.Greens .q6-7{fill:rgb(0,90,50)}
.Greens .q0-8{fill:rgb(247,252,245)}
.Greens .q1-8{fill:rgb(229,245,224)}
.Greens .q2-8{fill:rgb(199,233,192)}
.Greens .q3-8{fill:rgb(161,217,155)}
.Greens .q4-8{fill:rgb(116,196,118)}
.Greens .q5-8{fill:rgb(65,171,93)}
.Greens .q6-8{fill:rgb(35,139,69)}
.Greens .q7-8{fill:rgb(0,90,50)}
.Greens .q0-9{fill:rgb(247,252,245)}
.Greens .q1-9{fill:rgb(229,245,224)}
.Greens .q2-9{fill:rgb(199,233,192)}
.Greens .q3-9{fill:rgb(161,217,155)}
.Greens .q4-9{fill:rgb(116,196,118)}
.Greens .q5-9{fill:rgb(65,171,93)}
.Greens .q6-9{fill:rgb(35,139,69)}
.Greens .q7-9{fill:rgb(0,109,44)}
.Greens .q8-9{fill:rgb(0,68,27)}
.Oranges .q0-3{fill:rgb(254,230,206)}
.Oranges .q1-3{fill:rgb(253,174,107)}
.Oranges .q2-3{fill:rgb(230,85,13)}
.Oranges .q0-4{fill:rgb(254,237,222)}
.Oranges .q1-4{fill:rgb(253,190,133)}
.Oranges .q2-4{fill:rgb(253,141,60)}
.Oranges .q3-4{fill:rgb(217,71,1)}
.Oranges .q0-5{fill:rgb(254,237,222)}
.Oranges .q1-5{fill:rgb(253,190,133)}
.Oranges .q2-5{fill:rgb(253,141,60)}
.Oranges .q3-5{fill:rgb(230,85,13)}
.Oranges .q4-5{fill:rgb(166,54,3)}
.Oranges .q0-6{fill:rgb(254,237,222)}
.Oranges .q1-6{fill:rgb(253,208,162)}
.Oranges .q2-6{fill:rgb(253,174,107)}
.Oranges .q3-6{fill:rgb(253,141,60)}
.Oranges .q4-6{fill:rgb(230,85,13)}
.Oranges .q5-6{fill:rgb(166,54,3)}
.Oranges .q0-7{fill:rgb(254,237,222)}
.Oranges .q1-7{fill:rgb(253,208,162)}
.Oranges .q2-7{fill:rgb(253,174,107)}
.Oranges .q3-7{fill:rgb(253,141,60)}
.Oranges .q4-7{fill:rgb(241,105,19)}
.Oranges .q5-7{fill:rgb(217,72,1)}
.Oranges .q6-7{fill:rgb(140,45,4)}
.Oranges .q0-8{fill:rgb(255,245,235)}
.Oranges .q1-8{fill:rgb(254,230,206)}
.Oranges .q2-8{fill:rgb(253,208,162)}
.Oranges .q3-8{fill:rgb(253,174,107)}
.Oranges .q4-8{fill:rgb(253,141,60)}
.Oranges .q5-8{fill:rgb(241,105,19)}
.Oranges .q6-8{fill:rgb(217,72,1)}
.Oranges .q7-8{fill:rgb(140,45,4)}
.Oranges .q0-9{fill:rgb(255,245,235)}
.Oranges .q1-9{fill:rgb(254,230,206)}
.Oranges .q2-9{fill:rgb(253,208,162)}
.Oranges .q3-9{fill:rgb(253,174,107)}
.Oranges .q4-9{fill:rgb(253,141,60)}
.Oranges .q5-9{fill:rgb(241,105,19)}
.Oranges .q6-9{fill:rgb(217,72,1)}
.Oranges .q7-9{fill:rgb(166,54,3)}
.Oranges .q8-9{fill:rgb(127,39,4)}
.Reds .q0-3{fill:rgb(254,224,210)}
.Reds .q1-3{fill:rgb(252,146,114)}
.Reds .q2-3{fill:rgb(222,45,38)}
.Reds .q0-4{fill:rgb(254,229,217)}
.Reds .q1-4{fill:rgb(252,174,145)}
.Reds .q2-4{fill:rgb(251,106,74)}
.Reds .q3-4{fill:rgb(203,24,29)}
.Reds .q0-5{fill:rgb(254,229,217)}
.Reds .q1-5{fill:rgb(252,174,145)}
.Reds .q2-5{fill:rgb(251,106,74)}
.Reds .q3-5{fill:rgb(222,45,38)}
.Reds .q4-5{fill:rgb(165,15,21)}
.Reds .q0-6{fill:rgb(254,229,217)}
.Reds .q1-6{fill:rgb(252,187,161)}
.Reds .q2-6{fill:rgb(252,146,114)}
.Reds .q3-6{fill:rgb(251,106,74)}
.Reds .q4-6{fill:rgb(222,45,38)}
.Reds .q5-6{fill:rgb(165,15,21)}
.Reds .q0-7{fill:rgb(254,229,217)}
.Reds .q1-7{fill:rgb(252,187,161)}
.Reds .q2-7{fill:rgb(252,146,114)}
.Reds .q3-7{fill:rgb(251,106,74)}
.Reds .q4-7{fill:rgb(239,59,44)}
.Reds .q5-7{fill:rgb(203,24,29)}
.Reds .q6-7{fill:rgb(153,0,13)}
.Reds .q0-8{fill:rgb(255,245,240)}
.Reds .q1-8{fill:rgb(254,224,210)}
.Reds .q2-8{fill:rgb(252,187,161)}
.Reds .q3-8{fill:rgb(252,146,114)}
.Reds .q4-8{fill:rgb(251,106,74)}
.Reds .q5-8{fill:rgb(239,59,44)}
.Reds .q6-8{fill:rgb(203,24,29)}
.Reds .q7-8{fill:rgb(153,0,13)}
.Reds .q0-9{fill:rgb(255,245,240)}
.Reds .q1-9{fill:rgb(254,224,210)}
.Reds .q2-9{fill:rgb(252,187,161)}
.Reds .q3-9{fill:rgb(252,146,114)}
.Reds .q4-9{fill:rgb(251,106,74)}
.Reds .q5-9{fill:rgb(239,59,44)}
.Reds .q6-9{fill:rgb(203,24,29)}
.Reds .q7-9{fill:rgb(165,15,21)}
.Reds .q8-9{fill:rgb(103,0,13)}
.Greys .q0-3{fill:rgb(240,240,240)}
.Greys .q1-3{fill:rgb(189,189,189)}
.Greys .q2-3{fill:rgb(99,99,99)}
.Greys .q0-4{fill:rgb(247,247,247)}
.Greys .q1-4{fill:rgb(204,204,204)}
.Greys .q2-4{fill:rgb(150,150,150)}
.Greys .q3-4{fill:rgb(82,82,82)}
.Greys .q0-5{fill:rgb(247,247,247)}
.Greys .q1-5{fill:rgb(204,204,204)}
.Greys .q2-5{fill:rgb(150,150,150)}
.Greys .q3-5{fill:rgb(99,99,99)}
.Greys .q4-5{fill:rgb(37,37,37)}
.Greys .q0-6{fill:rgb(247,247,247)}
.Greys .q1-6{fill:rgb(217,217,217)}
.Greys .q2-6{fill:rgb(189,189,189)}
.Greys .q3-6{fill:rgb(150,150,150)}
.Greys .q4-6{fill:rgb(99,99,99)}
.Greys .q5-6{fill:rgb(37,37,37)}
.Greys .q0-7{fill:rgb(247,247,247)}
.Greys .q1-7{fill:rgb(217,217,217)}
.Greys .q2-7{fill:rgb(189,189,189)}
.Greys .q3-7{fill:rgb(150,150,150)}
.Greys .q4-7{fill:rgb(115,115,115)}
.Greys .q5-7{fill:rgb(82,82,82)}
.Greys .q6-7{fill:rgb(37,37,37)}
.Greys .q0-8{fill:rgb(255,255,255)}
.Greys .q1-8{fill:rgb(240,240,240)}
.Greys .q2-8{fill:rgb(217,217,217)}
.Greys .q3-8{fill:rgb(189,189,189)}
.Greys .q4-8{fill:rgb(150,150,150)}
.Greys .q5-8{fill:rgb(115,115,115)}
.Greys .q6-8{fill:rgb(82,82,82)}
.Greys .q7-8{fill:rgb(37,37,37)}
.Greys .q0-9{fill:rgb(255,255,255)}
.Greys .q1-9{fill:rgb(240,240,240)}
.Greys .q2-9{fill:rgb(217,217,217)}
.Greys .q3-9{fill:rgb(189,189,189)}
.Greys .q4-9{fill:rgb(150,150,150)}
.Greys .q5-9{fill:rgb(115,115,115)}
.Greys .q6-9{fill:rgb(82,82,82)}
.Greys .q7-9{fill:rgb(37,37,37)}
.Greys .q8-9{fill:rgb(0,0,0)}
.PuOr .q0-3{fill:rgb(241,163,64)}
.PuOr .q1-3{fill:rgb(247,247,247)}
.PuOr .q2-3{fill:rgb(153,142,195)}
.PuOr .q0-4{fill:rgb(230,97,1)}
.PuOr .q1-4{fill:rgb(253,184,99)}
.PuOr .q2-4{fill:rgb(178,171,210)}
.PuOr .q3-4{fill:rgb(94,60,153)}
.PuOr .q0-5{fill:rgb(230,97,1)}
.PuOr .q1-5{fill:rgb(253,184,99)}
.PuOr .q2-5{fill:rgb(247,247,247)}
.PuOr .q3-5{fill:rgb(178,171,210)}
.PuOr .q4-5{fill:rgb(94,60,153)}
.PuOr .q0-6{fill:rgb(179,88,6)}
.PuOr .q1-6{fill:rgb(241,163,64)}
.PuOr .q2-6{fill:rgb(254,224,182)}
.PuOr .q3-6{fill:rgb(216,218,235)}
.PuOr .q4-6{fill:rgb(153,142,195)}
.PuOr .q5-6{fill:rgb(84,39,136)}
.PuOr .q0-7{fill:rgb(179,88,6)}
.PuOr .q1-7{fill:rgb(241,163,64)}
.PuOr .q2-7{fill:rgb(254,224,182)}
.PuOr .q3-7{fill:rgb(247,247,247)}
.PuOr .q4-7{fill:rgb(216,218,235)}
.PuOr .q5-7{fill:rgb(153,142,195)}
.PuOr .q6-7{fill:rgb(84,39,136)}
.PuOr .q0-8{fill:rgb(179,88,6)}
.PuOr .q1-8{fill:rgb(224,130,20)}
.PuOr .q2-8{fill:rgb(253,184,99)}
.PuOr .q3-8{fill:rgb(254,224,182)}
.PuOr .q4-8{fill:rgb(216,218,235)}
.PuOr .q5-8{fill:rgb(178,171,210)}
.PuOr .q6-8{fill:rgb(128,115,172)}
.PuOr .q7-8{fill:rgb(84,39,136)}
.PuOr .q0-9{fill:rgb(179,88,6)}
.PuOr .q1-9{fill:rgb(224,130,20)}
.PuOr .q2-9{fill:rgb(253,184,99)}
.PuOr .q3-9{fill:rgb(254,224,182)}
.PuOr .q4-9{fill:rgb(247,247,247)}
.PuOr .q5-9{fill:rgb(216,218,235)}
.PuOr .q6-9{fill:rgb(178,171,210)}
.PuOr .q7-9{fill:rgb(128,115,172)}
.PuOr .q8-9{fill:rgb(84,39,136)}
.PuOr .q0-10{fill:rgb(127,59,8)}
.PuOr .q1-10{fill:rgb(179,88,6)}
.PuOr .q2-10{fill:rgb(224,130,20)}
.PuOr .q3-10{fill:rgb(253,184,99)}
.PuOr .q4-10{fill:rgb(254,224,182)}
.PuOr .q5-10{fill:rgb(216,218,235)}
.PuOr .q6-10{fill:rgb(178,171,210)}
.PuOr .q7-10{fill:rgb(128,115,172)}
.PuOr .q8-10{fill:rgb(84,39,136)}
.PuOr .q9-10{fill:rgb(45,0,75)}
.PuOr .q0-11{fill:rgb(127,59,8)}
.PuOr .q1-11{fill:rgb(179,88,6)}
.PuOr .q2-11{fill:rgb(224,130,20)}
.PuOr .q3-11{fill:rgb(253,184,99)}
.PuOr .q4-11{fill:rgb(254,224,182)}
.PuOr .q5-11{fill:rgb(247,247,247)}
.PuOr .q6-11{fill:rgb(216,218,235)}
.PuOr .q7-11{fill:rgb(178,171,210)}
.PuOr .q8-11{fill:rgb(128,115,172)}
.PuOr .q9-11{fill:rgb(84,39,136)}
.PuOr .q10-11{fill:rgb(45,0,75)}
.BrBG .q0-3{fill:rgb(216,179,101)}
.BrBG .q1-3{fill:rgb(245,245,245)}
.BrBG .q2-3{fill:rgb(90,180,172)}
.BrBG .q0-4{fill:rgb(166,97,26)}
.BrBG .q1-4{fill:rgb(223,194,125)}
.BrBG .q2-4{fill:rgb(128,205,193)}
.BrBG .q3-4{fill:rgb(1,133,113)}
.BrBG .q0-5{fill:rgb(166,97,26)}
.BrBG .q1-5{fill:rgb(223,194,125)}
.BrBG .q2-5{fill:rgb(245,245,245)}
.BrBG .q3-5{fill:rgb(128,205,193)}
.BrBG .q4-5{fill:rgb(1,133,113)}
.BrBG .q0-6{fill:rgb(140,81,10)}
.BrBG .q1-6{fill:rgb(216,179,101)}
.BrBG .q2-6{fill:rgb(246,232,195)}
.BrBG .q3-6{fill:rgb(199,234,229)}
.BrBG .q4-6{fill:rgb(90,180,172)}
.BrBG .q5-6{fill:rgb(1,102,94)}
.BrBG .q0-7{fill:rgb(140,81,10)}
.BrBG .q1-7{fill:rgb(216,179,101)}
.BrBG .q2-7{fill:rgb(246,232,195)}
.BrBG .q3-7{fill:rgb(245,245,245)}
.BrBG .q4-7{fill:rgb(199,234,229)}
.BrBG .q5-7{fill:rgb(90,180,172)}
.BrBG .q6-7{fill:rgb(1,102,94)}
.BrBG .q0-8{fill:rgb(140,81,10)}
.BrBG .q1-8{fill:rgb(191,129,45)}
.BrBG .q2-8{fill:rgb(223,194,125)}
.BrBG .q3-8{fill:rgb(246,232,195)}
.BrBG .q4-8{fill:rgb(199,234,229)}
.BrBG .q5-8{fill:rgb(128,205,193)}
.BrBG .q6-8{fill:rgb(53,151,143)}
.BrBG .q7-8{fill:rgb(1,102,94)}
.BrBG .q0-9{fill:rgb(140,81,10)}
.BrBG .q1-9{fill:rgb(191,129,45)}
.BrBG .q2-9{fill:rgb(223,194,125)}
.BrBG .q3-9{fill:rgb(246,232,195)}
.BrBG .q4-9{fill:rgb(245,245,245)}
.BrBG .q5-9{fill:rgb(199,234,229)}
.BrBG .q6-9{fill:rgb(128,205,193)}
.BrBG .q7-9{fill:rgb(53,151,143)}
.BrBG .q8-9{fill:rgb(1,102,94)}
.BrBG .q0-10{fill:rgb(84,48,5)}
.BrBG .q1-10{fill:rgb(140,81,10)}
.BrBG .q2-10{fill:rgb(191,129,45)}
.BrBG .q3-10{fill:rgb(223,194,125)}
.BrBG .q4-10{fill:rgb(246,232,195)}
.BrBG .q5-10{fill:rgb(199,234,229)}
.BrBG .q6-10{fill:rgb(128,205,193)}
.BrBG .q7-10{fill:rgb(53,151,143)}
.BrBG .q8-10{fill:rgb(1,102,94)}
.BrBG .q9-10{fill:rgb(0,60,48)}
.BrBG .q0-11{fill:rgb(84,48,5)}
.BrBG .q1-11{fill:rgb(140,81,10)}
.BrBG .q2-11{fill:rgb(191,129,45)}
.BrBG .q3-11{fill:rgb(223,194,125)}
.BrBG .q4-11{fill:rgb(246,232,195)}
.BrBG .q5-11{fill:rgb(245,245,245)}
.BrBG .q6-11{fill:rgb(199,234,229)}
.BrBG .q7-11{fill:rgb(128,205,193)}
.BrBG .q8-11{fill:rgb(53,151,143)}
.BrBG .q9-11{fill:rgb(1,102,94)}
.BrBG .q10-11{fill:rgb(0,60,48)}
.PRGn .q0-3{fill:rgb(175,141,195)}
.PRGn .q1-3{fill:rgb(247,247,247)}
.PRGn .q2-3{fill:rgb(127,191,123)}
.PRGn .q0-4{fill:rgb(123,50,148)}
.PRGn .q1-4{fill:rgb(194,165,207)}
.PRGn .q2-4{fill:rgb(166,219,160)}
.PRGn .q3-4{fill:rgb(0,136,55)}
.PRGn .q0-5{fill:rgb(123,50,148)}
.PRGn .q1-5{fill:rgb(194,165,207)}
.PRGn .q2-5{fill:rgb(247,247,247)}
.PRGn .q3-5{fill:rgb(166,219,160)}
.PRGn .q4-5{fill:rgb(0,136,55)}
.PRGn .q0-6{fill:rgb(118,42,131)}
.PRGn .q1-6{fill:rgb(175,141,195)}
.PRGn .q2-6{fill:rgb(231,212,232)}
.PRGn .q3-6{fill:rgb(217,240,211)}
.PRGn .q4-6{fill:rgb(127,191,123)}
.PRGn .q5-6{fill:rgb(27,120,55)}
.PRGn .q0-7{fill:rgb(118,42,131)}
.PRGn .q1-7{fill:rgb(175,141,195)}
.PRGn .q2-7{fill:rgb(231,212,232)}
.PRGn .q3-7{fill:rgb(247,247,247)}
.PRGn .q4-7{fill:rgb(217,240,211)}
.PRGn .q5-7{fill:rgb(127,191,123)}
.PRGn .q6-7{fill:rgb(27,120,55)}
.PRGn .q0-8{fill:rgb(118,42,131)}
.PRGn .q1-8{fill:rgb(153,112,171)}
.PRGn .q2-8{fill:rgb(194,165,207)}
.PRGn .q3-8{fill:rgb(231,212,232)}
.PRGn .q4-8{fill:rgb(217,240,211)}
.PRGn .q5-8{fill:rgb(166,219,160)}
.PRGn .q6-8{fill:rgb(90,174,97)}
.PRGn .q7-8{fill:rgb(27,120,55)}
.PRGn .q0-9{fill:rgb(118,42,131)}
.PRGn .q1-9{fill:rgb(153,112,171)}
.PRGn .q2-9{fill:rgb(194,165,207)}
.PRGn .q3-9{fill:rgb(231,212,232)}
.PRGn .q4-9{fill:rgb(247,247,247)}
.PRGn .q5-9{fill:rgb(217,240,211)}
.PRGn .q6-9{fill:rgb(166,219,160)}
.PRGn .q7-9{fill:rgb(90,174,97)}
.PRGn .q8-9{fill:rgb(27,120,55)}
.PRGn .q0-10{fill:rgb(64,0,75)}
.PRGn .q1-10{fill:rgb(118,42,131)}
.PRGn .q2-10{fill:rgb(153,112,171)}
.PRGn .q3-10{fill:rgb(194,165,207)}
.PRGn .q4-10{fill:rgb(231,212,232)}
.PRGn .q5-10{fill:rgb(217,240,211)}
.PRGn .q6-10{fill:rgb(166,219,160)}
.PRGn .q7-10{fill:rgb(90,174,97)}
.PRGn .q8-10{fill:rgb(27,120,55)}
.PRGn .q9-10{fill:rgb(0,68,27)}
.PRGn .q0-11{fill:rgb(64,0,75)}
.PRGn .q1-11{fill:rgb(118,42,131)}
.PRGn .q2-11{fill:rgb(153,112,171)}
.PRGn .q3-11{fill:rgb(194,165,207)}
.PRGn .q4-11{fill:rgb(231,212,232)}
.PRGn .q5-11{fill:rgb(247,247,247)}
.PRGn .q6-11{fill:rgb(217,240,211)}
.PRGn .q7-11{fill:rgb(166,219,160)}
.PRGn .q8-11{fill:rgb(90,174,97)}
.PRGn .q9-11{fill:rgb(27,120,55)}
.PRGn .q10-11{fill:rgb(0,68,27)}
.PiYG .q0-3{fill:rgb(233,163,201)}
.PiYG .q1-3{fill:rgb(247,247,247)}
.PiYG .q2-3{fill:rgb(161,215,106)}
.PiYG .q0-4{fill:rgb(208,28,139)}
.PiYG .q1-4{fill:rgb(241,182,218)}
.PiYG .q2-4{fill:rgb(184,225,134)}
.PiYG .q3-4{fill:rgb(77,172,38)}
.PiYG .q0-5{fill:rgb(208,28,139)}
.PiYG .q1-5{fill:rgb(241,182,218)}
.PiYG .q2-5{fill:rgb(247,247,247)}
.PiYG .q3-5{fill:rgb(184,225,134)}
.PiYG .q4-5{fill:rgb(77,172,38)}
.PiYG .q0-6{fill:rgb(197,27,125)}
.PiYG .q1-6{fill:rgb(233,163,201)}
.PiYG .q2-6{fill:rgb(253,224,239)}
.PiYG .q3-6{fill:rgb(230,245,208)}
.PiYG .q4-6{fill:rgb(161,215,106)}
.PiYG .q5-6{fill:rgb(77,146,33)}
.PiYG .q0-7{fill:rgb(197,27,125)}
.PiYG .q1-7{fill:rgb(233,163,201)}
.PiYG .q2-7{fill:rgb(253,224,239)}
.PiYG .q3-7{fill:rgb(247,247,247)}
.PiYG .q4-7{fill:rgb(230,245,208)}
.PiYG .q5-7{fill:rgb(161,215,106)}
.PiYG .q6-7{fill:rgb(77,146,33)}
.PiYG .q0-8{fill:rgb(197,27,125)}
.PiYG .q1-8{fill:rgb(222,119,174)}
.PiYG .q2-8{fill:rgb(241,182,218)}
.PiYG .q3-8{fill:rgb(253,224,239)}
.PiYG .q4-8{fill:rgb(230,245,208)}
.PiYG .q5-8{fill:rgb(184,225,134)}
.PiYG .q6-8{fill:rgb(127,188,65)}
.PiYG .q7-8{fill:rgb(77,146,33)}
.PiYG .q0-9{fill:rgb(197,27,125)}
.PiYG .q1-9{fill:rgb(222,119,174)}
.PiYG .q2-9{fill:rgb(241,182,218)}
.PiYG .q3-9{fill:rgb(253,224,239)}
.PiYG .q4-9{fill:rgb(247,247,247)}
.PiYG .q5-9{fill:rgb(230,245,208)}
.PiYG .q6-9{fill:rgb(184,225,134)}
.PiYG .q7-9{fill:rgb(127,188,65)}
.PiYG .q8-9{fill:rgb(77,146,33)}
.PiYG .q0-10{fill:rgb(142,1,82)}
.PiYG .q1-10{fill:rgb(197,27,125)}
.PiYG .q2-10{fill:rgb(222,119,174)}
.PiYG .q3-10{fill:rgb(241,182,218)}
.PiYG .q4-10{fill:rgb(253,224,239)}
.PiYG .q5-10{fill:rgb(230,245,208)}
.PiYG .q6-10{fill:rgb(184,225,134)}
.PiYG .q7-10{fill:rgb(127,188,65)}
.PiYG .q8-10{fill:rgb(77,146,33)}
.PiYG .q9-10{fill:rgb(39,100,25)}
.PiYG .q0-11{fill:rgb(142,1,82)}
.PiYG .q1-11{fill:rgb(197,27,125)}
.PiYG .q2-11{fill:rgb(222,119,174)}
.PiYG .q3-11{fill:rgb(241,182,218)}
.PiYG .q4-11{fill:rgb(253,224,239)}
.PiYG .q5-11{fill:rgb(247,247,247)}
.PiYG .q6-11{fill:rgb(230,245,208)}
.PiYG .q7-11{fill:rgb(184,225,134)}
.PiYG .q8-11{fill:rgb(127,188,65)}
.PiYG .q9-11{fill:rgb(77,146,33)}
.PiYG .q10-11{fill:rgb(39,100,25)}
.RdBu .q0-3{fill:rgb(239,138,98)}
.RdBu .q1-3{fill:rgb(247,247,247)}
.RdBu .q2-3{fill:rgb(103,169,207)}
.RdBu .q0-4{fill:rgb(202,0,32)}
.RdBu .q1-4{fill:rgb(244,165,130)}
.RdBu .q2-4{fill:rgb(146,197,222)}
.RdBu .q3-4{fill:rgb(5,113,176)}
.RdBu .q0-5{fill:rgb(202,0,32)}
.RdBu .q1-5{fill:rgb(244,165,130)}
.RdBu .q2-5{fill:rgb(247,247,247)}
.RdBu .q3-5{fill:rgb(146,197,222)}
.RdBu .q4-5{fill:rgb(5,113,176)}
.RdBu .q0-6{fill:rgb(178,24,43)}
.RdBu .q1-6{fill:rgb(239,138,98)}
.RdBu .q2-6{fill:rgb(253,219,199)}
.RdBu .q3-6{fill:rgb(209,229,240)}
.RdBu .q4-6{fill:rgb(103,169,207)}
.RdBu .q5-6{fill:rgb(33,102,172)}
.RdBu .q0-7{fill:rgb(178,24,43)}
.RdBu .q1-7{fill:rgb(239,138,98)}
.RdBu .q2-7{fill:rgb(253,219,199)}
.RdBu .q3-7{fill:rgb(247,247,247)}
.RdBu .q4-7{fill:rgb(209,229,240)}
.RdBu .q5-7{fill:rgb(103,169,207)}
.RdBu .q6-7{fill:rgb(33,102,172)}
.RdBu .q0-8{fill:rgb(178,24,43)}
.RdBu .q1-8{fill:rgb(214,96,77)}
.RdBu .q2-8{fill:rgb(244,165,130)}
.RdBu .q3-8{fill:rgb(253,219,199)}
.RdBu .q4-8{fill:rgb(209,229,240)}
.RdBu .q5-8{fill:rgb(146,197,222)}
.RdBu .q6-8{fill:rgb(67,147,195)}
.RdBu .q7-8{fill:rgb(33,102,172)}
.RdBu .q0-9{fill:rgb(178,24,43)}
.RdBu .q1-9{fill:rgb(214,96,77)}
.RdBu .q2-9{fill:rgb(244,165,130)}
.RdBu .q3-9{fill:rgb(253,219,199)}
.RdBu .q4-9{fill:rgb(247,247,247)}
.RdBu .q5-9{fill:rgb(209,229,240)}
.RdBu .q6-9{fill:rgb(146,197,222)}
.RdBu .q7-9{fill:rgb(67,147,195)}
.RdBu .q8-9{fill:rgb(33,102,172)}
.RdBu .q0-10{fill:rgb(103,0,31)}
.RdBu .q1-10{fill:rgb(178,24,43)}
.RdBu .q2-10{fill:rgb(214,96,77)}
.RdBu .q3-10{fill:rgb(244,165,130)}
.RdBu .q4-10{fill:rgb(253,219,199)}
.RdBu .q5-10{fill:rgb(209,229,240)}
.RdBu .q6-10{fill:rgb(146,197,222)}
.RdBu .q7-10{fill:rgb(67,147,195)}
.RdBu .q8-10{fill:rgb(33,102,172)}
.RdBu .q9-10{fill:rgb(5,48,97)}
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
.RdGy .q0-3{fill:rgb(239,138,98)}
.RdGy .q1-3{fill:rgb(255,255,255)}
.RdGy .q2-3{fill:rgb(153,153,153)}
.RdGy .q0-4{fill:rgb(202,0,32)}
.RdGy .q1-4{fill:rgb(244,165,130)}
.RdGy .q2-4{fill:rgb(186,186,186)}
.RdGy .q3-4{fill:rgb(64,64,64)}
.RdGy .q0-5{fill:rgb(202,0,32)}
.RdGy .q1-5{fill:rgb(244,165,130)}
.RdGy .q2-5{fill:rgb(255,255,255)}
.RdGy .q3-5{fill:rgb(186,186,186)}
.RdGy .q4-5{fill:rgb(64,64,64)}
.RdGy .q0-6{fill:rgb(178,24,43)}
.RdGy .q1-6{fill:rgb(239,138,98)}
.RdGy .q2-6{fill:rgb(253,219,199)}
.RdGy .q3-6{fill:rgb(224,224,224)}
.RdGy .q4-6{fill:rgb(153,153,153)}
.RdGy .q5-6{fill:rgb(77,77,77)}
.RdGy .q0-7{fill:rgb(178,24,43)}
.RdGy .q1-7{fill:rgb(239,138,98)}
.RdGy .q2-7{fill:rgb(253,219,199)}
.RdGy .q3-7{fill:rgb(255,255,255)}
.RdGy .q4-7{fill:rgb(224,224,224)}
.RdGy .q5-7{fill:rgb(153,153,153)}
.RdGy .q6-7{fill:rgb(77,77,77)}
.RdGy .q0-8{fill:rgb(178,24,43)}
.RdGy .q1-8{fill:rgb(214,96,77)}
.RdGy .q2-8{fill:rgb(244,165,130)}
.RdGy .q3-8{fill:rgb(253,219,199)}
.RdGy .q4-8{fill:rgb(224,224,224)}
.RdGy .q5-8{fill:rgb(186,186,186)}
.RdGy .q6-8{fill:rgb(135,135,135)}
.RdGy .q7-8{fill:rgb(77,77,77)}
.RdGy .q0-9{fill:rgb(178,24,43)}
.RdGy .q1-9{fill:rgb(214,96,77)}
.RdGy .q2-9{fill:rgb(244,165,130)}
.RdGy .q3-9{fill:rgb(253,219,199)}
.RdGy .q4-9{fill:rgb(255,255,255)}
.RdGy .q5-9{fill:rgb(224,224,224)}
.RdGy .q6-9{fill:rgb(186,186,186)}
.RdGy .q7-9{fill:rgb(135,135,135)}
.RdGy .q8-9{fill:rgb(77,77,77)}
.RdGy .q0-10{fill:rgb(103,0,31)}
.RdGy .q1-10{fill:rgb(178,24,43)}
.RdGy .q2-10{fill:rgb(214,96,77)}
.RdGy .q3-10{fill:rgb(244,165,130)}
.RdGy .q4-10{fill:rgb(253,219,199)}
.RdGy .q5-10{fill:rgb(224,224,224)}
.RdGy .q6-10{fill:rgb(186,186,186)}
.RdGy .q7-10{fill:rgb(135,135,135)}
.RdGy .q8-10{fill:rgb(77,77,77)}
.RdGy .q9-10{fill:rgb(26,26,26)}
.RdGy .q0-11{fill:rgb(103,0,31)}
.RdGy .q1-11{fill:rgb(178,24,43)}
.RdGy .q2-11{fill:rgb(214,96,77)}
.RdGy .q3-11{fill:rgb(244,165,130)}
.RdGy .q4-11{fill:rgb(253,219,199)}
.RdGy .q5-11{fill:rgb(255,255,255)}
.RdGy .q6-11{fill:rgb(224,224,224)}
.RdGy .q7-11{fill:rgb(186,186,186)}
.RdGy .q8-11{fill:rgb(135,135,135)}
.RdGy .q9-11{fill:rgb(77,77,77)}
.RdGy .q10-11{fill:rgb(26,26,26)}
.RdYlBu .q0-3{fill:rgb(252,141,89)}
.RdYlBu .q1-3{fill:rgb(255,255,191)}
.RdYlBu .q2-3{fill:rgb(145,191,219)}
.RdYlBu .q0-4{fill:rgb(215,25,28)}
.RdYlBu .q1-4{fill:rgb(253,174,97)}
.RdYlBu .q2-4{fill:rgb(171,217,233)}
.RdYlBu .q3-4{fill:rgb(44,123,182)}
.RdYlBu .q0-5{fill:rgb(215,25,28)}
.RdYlBu .q1-5{fill:rgb(253,174,97)}
.RdYlBu .q2-5{fill:rgb(255,255,191)}
.RdYlBu .q3-5{fill:rgb(171,217,233)}
.RdYlBu .q4-5{fill:rgb(44,123,182)}
.RdYlBu .q0-6{fill:rgb(215,48,39)}
.RdYlBu .q1-6{fill:rgb(252,141,89)}
.RdYlBu .q2-6{fill:rgb(254,224,144)}
.RdYlBu .q3-6{fill:rgb(224,243,248)}
.RdYlBu .q4-6{fill:rgb(145,191,219)}
.RdYlBu .q5-6{fill:rgb(69,117,180)}
.RdYlBu .q0-7{fill:rgb(215,48,39)}
.RdYlBu .q1-7{fill:rgb(252,141,89)}
.RdYlBu .q2-7{fill:rgb(254,224,144)}
.RdYlBu .q3-7{fill:rgb(255,255,191)}
.RdYlBu .q4-7{fill:rgb(224,243,248)}
.RdYlBu .q5-7{fill:rgb(145,191,219)}
.RdYlBu .q6-7{fill:rgb(69,117,180)}
.RdYlBu .q0-8{fill:rgb(215,48,39)}
.RdYlBu .q1-8{fill:rgb(244,109,67)}
.RdYlBu .q2-8{fill:rgb(253,174,97)}
.RdYlBu .q3-8{fill:rgb(254,224,144)}
.RdYlBu .q4-8{fill:rgb(224,243,248)}
.RdYlBu .q5-8{fill:rgb(171,217,233)}
.RdYlBu .q6-8{fill:rgb(116,173,209)}
.RdYlBu .q7-8{fill:rgb(69,117,180)}
.RdYlBu .q0-9{fill:rgb(215,48,39)}
.RdYlBu .q1-9{fill:rgb(244,109,67)}
.RdYlBu .q2-9{fill:rgb(253,174,97)}
.RdYlBu .q3-9{fill:rgb(254,224,144)}
.RdYlBu .q4-9{fill:rgb(255,255,191)}
.RdYlBu .q5-9{fill:rgb(224,243,248)}
.RdYlBu .q6-9{fill:rgb(171,217,233)}
.RdYlBu .q7-9{fill:rgb(116,173,209)}
.RdYlBu .q8-9{fill:rgb(69,117,180)}
.RdYlBu .q0-10{fill:rgb(165,0,38)}
.RdYlBu .q1-10{fill:rgb(215,48,39)}
.RdYlBu .q2-10{fill:rgb(244,109,67)}
.RdYlBu .q3-10{fill:rgb(253,174,97)}
.RdYlBu .q4-10{fill:rgb(254,224,144)}
.RdYlBu .q5-10{fill:rgb(224,243,248)}
.RdYlBu .q6-10{fill:rgb(171,217,233)}
.RdYlBu .q7-10{fill:rgb(116,173,209)}
.RdYlBu .q8-10{fill:rgb(69,117,180)}
.RdYlBu .q9-10{fill:rgb(49,54,149)}
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
.Spectral .q0-3{fill:rgb(252,141,89)}
.Spectral .q1-3{fill:rgb(255,255,191)}
.Spectral .q2-3{fill:rgb(153,213,148)}
.Spectral .q0-4{fill:rgb(215,25,28)}
.Spectral .q1-4{fill:rgb(253,174,97)}
.Spectral .q2-4{fill:rgb(171,221,164)}
.Spectral .q3-4{fill:rgb(43,131,186)}
.Spectral .q0-5{fill:rgb(215,25,28)}
.Spectral .q1-5{fill:rgb(253,174,97)}
.Spectral .q2-5{fill:rgb(255,255,191)}
.Spectral .q3-5{fill:rgb(171,221,164)}
.Spectral .q4-5{fill:rgb(43,131,186)}
.Spectral .q0-6{fill:rgb(213,62,79)}
.Spectral .q1-6{fill:rgb(252,141,89)}
.Spectral .q2-6{fill:rgb(254,224,139)}
.Spectral .q3-6{fill:rgb(230,245,152)}
.Spectral .q4-6{fill:rgb(153,213,148)}
.Spectral .q5-6{fill:rgb(50,136,189)}
.Spectral .q0-7{fill:rgb(213,62,79)}
.Spectral .q1-7{fill:rgb(252,141,89)}
.Spectral .q2-7{fill:rgb(254,224,139)}
.Spectral .q3-7{fill:rgb(255,255,191)}
.Spectral .q4-7{fill:rgb(230,245,152)}
.Spectral .q5-7{fill:rgb(153,213,148)}
.Spectral .q6-7{fill:rgb(50,136,189)}
.Spectral .q0-8{fill:rgb(213,62,79)}
.Spectral .q1-8{fill:rgb(244,109,67)}
.Spectral .q2-8{fill:rgb(253,174,97)}
.Spectral .q3-8{fill:rgb(254,224,139)}
.Spectral .q4-8{fill:rgb(230,245,152)}
.Spectral .q5-8{fill:rgb(171,221,164)}
.Spectral .q6-8{fill:rgb(102,194,165)}
.Spectral .q7-8{fill:rgb(50,136,189)}
.Spectral .q0-9{fill:rgb(213,62,79)}
.Spectral .q1-9{fill:rgb(244,109,67)}
.Spectral .q2-9{fill:rgb(253,174,97)}
.Spectral .q3-9{fill:rgb(254,224,139)}
.Spectral .q4-9{fill:rgb(255,255,191)}
.Spectral .q5-9{fill:rgb(230,245,152)}
.Spectral .q6-9{fill:rgb(171,221,164)}
.Spectral .q7-9{fill:rgb(102,194,165)}
.Spectral .q8-9{fill:rgb(50,136,189)}
.Spectral .q0-10{fill:rgb(158,1,66)}
.Spectral .q1-10{fill:rgb(213,62,79)}
.Spectral .q2-10{fill:rgb(244,109,67)}
.Spectral .q3-10{fill:rgb(253,174,97)}
.Spectral .q4-10{fill:rgb(254,224,139)}
.Spectral .q5-10{fill:rgb(230,245,152)}
.Spectral .q6-10{fill:rgb(171,221,164)}
.Spectral .q7-10{fill:rgb(102,194,165)}
.Spectral .q8-10{fill:rgb(50,136,189)}
.Spectral .q9-10{fill:rgb(94,79,162)}
.Spectral .q0-11{fill:rgb(158,1,66)}
.Spectral .q1-11{fill:rgb(213,62,79)}
.Spectral .q2-11{fill:rgb(244,109,67)}
.Spectral .q3-11{fill:rgb(253,174,97)}
.Spectral .q4-11{fill:rgb(254,224,139)}
.Spectral .q5-11{fill:rgb(255,255,191)}
.Spectral .q6-11{fill:rgb(230,245,152)}
.Spectral .q7-11{fill:rgb(171,221,164)}
.Spectral .q8-11{fill:rgb(102,194,165)}
.Spectral .q9-11{fill:rgb(50,136,189)}
.Spectral .q10-11{fill:rgb(94,79,162)}
.RdYlGn .q0-3{fill:rgb(252,141,89)}
.RdYlGn .q1-3{fill:rgb(255,255,191)}
.RdYlGn .q2-3{fill:rgb(145,207,96)}
.RdYlGn .q0-4{fill:rgb(215,25,28)}
.RdYlGn .q1-4{fill:rgb(253,174,97)}
.RdYlGn .q2-4{fill:rgb(166,217,106)}
.RdYlGn .q3-4{fill:rgb(26,150,65)}
.RdYlGn .q0-5{fill:rgb(215,25,28)}
.RdYlGn .q1-5{fill:rgb(253,174,97)}
.RdYlGn .q2-5{fill:rgb(255,255,191)}
.RdYlGn .q3-5{fill:rgb(166,217,106)}
.RdYlGn .q4-5{fill:rgb(26,150,65)}
.RdYlGn .q0-6{fill:rgb(215,48,39)}
.RdYlGn .q1-6{fill:rgb(252,141,89)}
.RdYlGn .q2-6{fill:rgb(254,224,139)}
.RdYlGn .q3-6{fill:rgb(217,239,139)}
.RdYlGn .q4-6{fill:rgb(145,207,96)}
.RdYlGn .q5-6{fill:rgb(26,152,80)}
.RdYlGn .q0-7{fill:rgb(215,48,39)}
.RdYlGn .q1-7{fill:rgb(252,141,89)}
.RdYlGn .q2-7{fill:rgb(254,224,139)}
.RdYlGn .q3-7{fill:rgb(255,255,191)}
.RdYlGn .q4-7{fill:rgb(217,239,139)}
.RdYlGn .q5-7{fill:rgb(145,207,96)}
.RdYlGn .q6-7{fill:rgb(26,152,80)}
.RdYlGn .q0-8{fill:rgb(215,48,39)}
.RdYlGn .q1-8{fill:rgb(244,109,67)}
.RdYlGn .q2-8{fill:rgb(253,174,97)}
.RdYlGn .q3-8{fill:rgb(254,224,139)}
.RdYlGn .q4-8{fill:rgb(217,239,139)}
.RdYlGn .q5-8{fill:rgb(166,217,106)}
.RdYlGn .q6-8{fill:rgb(102,189,99)}
.RdYlGn .q7-8{fill:rgb(26,152,80)}
.RdYlGn .q0-9{fill:rgb(215,48,39)}
.RdYlGn .q1-9{fill:rgb(244,109,67)}
.RdYlGn .q2-9{fill:rgb(253,174,97)}
.RdYlGn .q3-9{fill:rgb(254,224,139)}
.RdYlGn .q4-9{fill:rgb(255,255,191)}
.RdYlGn .q5-9{fill:rgb(217,239,139)}
.RdYlGn .q6-9{fill:rgb(166,217,106)}
.RdYlGn .q7-9{fill:rgb(102,189,99)}
.RdYlGn .q8-9{fill:rgb(26,152,80)}
.RdYlGn .q0-10{fill:rgb(165,0,38)}
.RdYlGn .q1-10{fill:rgb(215,48,39)}
.RdYlGn .q2-10{fill:rgb(244,109,67)}
.RdYlGn .q3-10{fill:rgb(253,174,97)}
.RdYlGn .q4-10{fill:rgb(254,224,139)}
.RdYlGn .q5-10{fill:rgb(217,239,139)}
.RdYlGn .q6-10{fill:rgb(166,217,106)}
.RdYlGn .q7-10{fill:rgb(102,189,99)}
.RdYlGn .q8-10{fill:rgb(26,152,80)}
.RdYlGn .q9-10{fill:rgb(0,104,55)}
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
.qnone'.$sid.'{stroke:'.$dashboard_options['unusual_hcolor'].';stroke-width:2;}

body {
font-family: "Helvetica Neue", Helvetica;
}

svg {
  font: 10px sans-serif;
}

.day {
  fill: #fff;
  stroke: #ccc;
}

.month {
  fill: none;
  stroke: #000;
  stroke-width: 2px;
}

</style>
<script>
function draw_d3_calendar'.$sid.'(data,labels,unusuals){
var margin = {top: 5.5, right: 0, bottom: 5.5, left: 35.5},
    width = '.$dashboard_options['width'].' - margin.left - margin.right,
    height =('.$dashboard_options['height'].' - 5)/5 - margin.top - margin.bottom;
var size = d3.min([(width-1)/53, height/7]);

var data = data;
var yearData = labels;

var max_year = d3.max(yearData),
    min_year = d3.min(yearData);

var max_count = d3.max(d3.values(data));
    min_count = d3.min(d3.values(data));

var day = function(d) { return (d.getDay() + 6) % 7; }, // monday = 0
    week = d3.time.format("%W"), // monday-based week number
    date = d3.time.format("%Y-%m-%d"),
    percent = d3.format("+.1%");

var color = d3.scale.quantize()
    .domain([max_count, min_count])
    .range(d3.range(9));

d3.select("#velement'.$sid.'").selectAll("div").remove();


//change original div height
var num_years = labels.length;
var new_height = ('.$dashboard_options['height'].' - 5)/5 + margin.top + margin.bottom;
var calendar_height = new_height * num_years;
d3.select("#velement'.$sid.'").style("height",calendar_height);

var vis = d3.select("#velement'.$sid.'")
    .append("div")
    .attr("align", "center")
    .style("width", width + margin.left + margin.right)
    .style("height", calendar_height + margin.top + margin.bottom);

vis.append("span")
    .style("font-size",'.$dashboard_options['titleTextSize'].')
    .style("color","'.$dashboard_options['titleTextColor'].'")
    .style("font-family","'.$dashboard_options['titlefontName'].'")
    .text("'.$options['title'].'");

var svg = vis.selectAll("svg")
    .data(d3.range(min_year, max_year+1))
  .enter().append("svg")
    .attr("class", "RdYlGn")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

svg.append("text")
    .attr("transform", "translate(-20," + size * 3.5 + ")rotate(-90)")
    .attr("text-anchor", "middle")
    .attr("fill","'.$dashboard_options['vAxis'].'")
    .attr("font-size",'.$dashboard_options['vAxisTextSize'].')
    .text(function(d) { return d; });


var weekday = new Array("M","T","W","T","F","S","S");

for (var i=1;i<8;i++){
    svg.append("text")
        .attr("transform", "translate(-10," + size * (i-0.2) + ")")
        .attr("text-anchor", "middle")
        .attr("fill","'.$dashboard_options['weekdayTextColor'].'")
        .attr("font-size",'.$dashboard_options['weekdayTextSize'].')
        .text(function(d) { return weekday[i-1]; });
}


var rect = svg.selectAll(".day")
    .data(function(d) { return d3.time.days(new Date(d, 0, 1), new Date(d + 1, 0, 1)); })
  .enter().append("rect")
    .attr("class", "day")
    .attr("width", size)
    .attr("height", size)
    .attr("id", function(d) {return 0;})
    .attr("x", function(d) { return week(d) * size; })
    .attr("y", function(d) { return day(d) * size; })
    .map(date);

rect.append("title")
    .text("0");//function(d) { return d; });

svg.selectAll(".month")
    .data(function(d) { return d3.time.months(new Date(d, 0, 1), new Date(d + 1, 0, 1)); })
  .enter().append("path")
    .attr("class", "month")
    .attr("d", monthPath);
  
rect.filter(function(d) { return d in data; })
      .attr("class", function(d) 
            { 
                cls = "day ";
                if (d in unusuals)
                    cls = "qnone'.$sid.' ";
                return cls + "q" + color(data[d]) + "-9"; 
            })
      .attr("width", function(d){if (d in unusuals) return size -1; return size;})
      .attr("height", function(d){if (d in unusuals) return size -1; return size;})
    .select("title")
      .text(function(d) {
        var newdate = new Date(d);
        var nweekday=new Array(7);
        nweekday[0]="Monday";
        nweekday[1]="Tuesday";
        nweekday[2]="Wednesday";
        nweekday[3]="Thursday";
        nweekday[4]="Friday";
        nweekday[5]="Saturday";
        nweekday[6]="Sunday";
        var n = nweekday[newdate.getDay()]; 
        return d +" "+n+ ": " + data[d]; });

function monthPath(t0) {
  var t1 = new Date(t0.getFullYear(), t0.getMonth() + 1, 0),
      d0 = +day(t0), w0 = +week(t0),
      d1 = +day(t1), w1 = +week(t1);
  return "M" + (w0 + 1) * size + "," + d0 * size
      + "H" + w0 * size + "V" + 7 * size
      + "H" + w1 * size + "V" + (d1 + 1) * size
      + "H" + (w1 + 1) * size + "V" + 0
      + "H" + (w0 + 1) * size + "Z";
}


}

'.$content.'
draw_d3_calendar'.$sid.'(data'.$sid.',labels'.$sid.',unusuals'.$sid.');
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
				    draw_d3_calendar'.$sid.'(data'.$sid.',labels'.$sid.',unusuals'.$sid.');
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					
				}
			</script>';
		return($str);
}



function reload_viz_d3_Calendar_Unusual($sid, $value, $options, $setup)
{
	global $db;
	
	$dashboard_options = $options['dashboard_options'];
	$datefieldname = $options['datefieldname'];
	$numfieldname = $options['numfieldname'];
	$tablename = $options['tablename'];
	
	#create sql command to get the data from the table
	$sql = "select ". $options['datefieldname'].",".$options['numfieldname']." from ".$options['tablename'];
	$result	= $db->fetchAll($sql);

    $content = 'var data'.$sid.' = {';
	foreach($result as $value)
	{
            $content .= '"'.$value[$options['datefieldname']].'":'.$value[$options['numfieldname']].',';
	} 
	$content .='};';
    
    #create sql to get year info from table
    $sqlYear = 'select distinct(extract(year from "'.$options['datefieldname'].'")) as year from "'.$options['tablename'].'" order by year';
    $yearresult = $db->fetchAll($sqlYear);

    $content .= 'var labels'.$sid.' = [';
    for ($i=0;$i<count($yearresult);$i++)
    {
        $content .= $yearresult[$i]['year'].',';
    }
    $content .= '];';

    # create sql to get unusual information
    $sql = 'select * from '.$options['unusual_tablename'].' order by '.$options['unusual_datefieldname'].';'; 
    $sql_results = $db->fetchAll($sql);

    $unusual_dates = array();
    #$unusual_counts = array();
    #$unusual_means = array();
    #$unusual_stds = array();
    foreach($sql_results as $row)
    {
        array_push($unusual_dates, $row['date']);
        #array_push($unusual_counts, $row['count']);
        #array_push($unusual_means, $row['mean']);
        #array_push($unusual_stds, $row['std']);
    } 
    $content .= 'var unusuals'.$sid.' = {';
    for ($i=0; $i<count($unusual_dates); $i++)
    {
        $content .= '\''.$unusual_dates[$i].'\':1,';
    }
    $content .= '};';

    return $content;
}

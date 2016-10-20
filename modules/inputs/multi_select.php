<?
function getsetup_input_multi_select()
{
  $options['_CREDITS']				= 'Main Developters: Robert Pahle.';
  $options['_MODULEDESCRIPTION']		= 'More info will follow.';

  $options[0]['name']			= 'css';
  $options[0]['description']	= 'Please select the CSS';
  $options[0]['detail']		= 'This is the css number that influences the layout';
  $options[0]['type']			= 'Integer';
  $options[0]['link']			= 'link to further information..?';
  $options[0]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[0]['default']		= '';
  $options[0]['optional']		= 'no';
  $options[0]['perdashboard']	= 'yes';
  $options[0]['dependenton']	= '';

 
  $options[10]['name']				= 'x';
  $options[10]['description']			= 'Please select the x coordinate';
  $options[10]['detail']				= 'This sets the x coordinate to place the element on the dashboard.';
  $options[10]['type']				= 'Integer';
  $options[10]['link']				= 'link to further information..?';
  $options[10]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
  $options[10]['default']				= '10';
  $options[10]['optional']			= 'no';
  $options[10]['repeatable']			= 'no';
  $options[10]['perdashboard']		= 'yes';
  $options[10]['dependenton']			= '';

  $options[20]['name']				= 'y';
  $options[20]['description']			= 'Please select the y coordinate';
  $options[20]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
  $options[20]['type']				= 'Integer';
  $options[20]['link']				= 'link to further information..?';
  $options[20]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
  $options[20]['default']				= '10';
  $options[20]['optional']			= 'no';
  $options[20]['repeatable']			= 'no';
  $options[20]['perdashboard']		= 'yes';
  $options[20]['dependenton']			= '';

  $options[60]['name']                            = 'tablename';
  $options[60]['description']                     = 'The name of the table to get values from.';
  $options[60]['detail']                          = '';
  $options[60]['type']                            = 'Table';
  $options[60]['link']                            = 'link to further information..?';
  $options[60]['lookup']                          = '';
  $options[60]['default']                         = '';
  $options[60]['optional']                        = 'no';
  $options[60]['repeatable']                      = 'no';
  $options[60]['perdashboard']                    = 'no';
  $options[60]['dependenton']                     = '';

  $options[70]['name']                            = 'columnname';
  $options[70]['description']                     = 'The name of the column to get values from.';
  $options[70]['detail']                          = '';
  $options[70]['type']                            = 'Text';
  $options[70]['link']                            = 'link to further information..?';
  $options[70]['lookup']                          = '';
  $options[70]['default']                         = 'sector';
  $options[70]['optional']                        = 'no';
  $options[70]['repeatable']                      = 'no';
  $options[70]['perdashboard']                    = 'yes';
  $options[70]['dependenton']                     = '';

  $options[80]['name']                            = 'groupby';
  $options[80]['description']                     = 'The name of the column to be used to group the values retrieved form the column selected above.';
  $options[80]['detail']                          = 'If no column name is specified or the column does not exist, the values will simply be grouped alphabetically or numerically.';
  $options[80]['type']                            = 'Text';
  $options[80]['link']                            = 'link to further information..?';
  $options[80]['lookup']                          = '';
  $options[80]['default']                         = 'group_id';
  $options[80]['optional']                        = 'no';
  $options[80]['repeatable']                      = 'no';
  $options[80]['perdashboard']                    = 'no';
  $options[80]['dependenton']                     = '';

  $options[400]['name']                            = 'excludedkeys';
  $options[400]['description']                     = 'A comma separated list of keys to exclude values for in the list..';
  $options[400]['detail']                          = '';
  $options[400]['type']                            = 'Text';
  $options[400]['link']                            = 'link to further information..?';
  $options[400]['lookup']                          = '';
  $options[400]['default']                         = '';
  $options[400]['optional']                        = 'no';
  $options[400]['repeatable']                      = 'no';
  $options[400]['perdashboard']                    = 'yes';
  $options[400]['dependenton']                     = '';


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
  
  $options[340]['name']				= 'hovercolor';
  $options[340]['description']		= 'The background color of the column row being hovered over.';
  $options[340]['detail']				= '';
  $options[340]['type']				= 'Color';
  $options[340]['link']				= 'link to further information..?';
  $options[340]['lookup']				= ''; 
  $options[340]['default']			= '82C9FF';
  $options[340]['optional']			= 'no';
  $options[340]['repeatable']			= 'no';
  $options[340]['perdashboard']		= 'yes';
  $options[340]['dependenton']		= '';

  $options[350]['name']				= 'activecolor';
  $options[350]['description']		= 'The background color of the column row currently selected.';
  $options[350]['detail']				= '';
  $options[350]['type']				= 'Color';
  $options[350]['link']				= 'link to further information..?';
  $options[350]['lookup']				= ''; 
  $options[350]['default']			= '82C9FF';
  $options[350]['optional']			= 'no';
  $options[350]['repeatable']			= 'no';
  $options[350]['perdashboard']		= 'yes';
  $options[350]['dependenton']		= '';

  $options[510]['name']				= 'textColor';
  $options[510]['description']		= 'The color of the text.';
  $options[510]['detail']				= '';
  $options[510]['type']				= 'Color';
  $options[510]['link']				= 'link to further information..?';
  $options[510]['lookup']				= ''; 
  $options[510]['default']			= '000000';
  $options[510]['optional']			= 'no';
  $options[510]['repeatable']			= 'no';
  $options[510]['perdashboard']		= 'yes';
  $options[510]['dependenton']		= '';

  $options[360]['name']				= 'fontsize';
  $options[360]['description']		= 'Font Size';
  $options[360]['detail']				= '';
  $options[360]['type']				= 'Text';
  $options[360]['link']				= 'link to further information..?';
  $options[360]['lookup']				= ''; 
  $options[360]['default']			= '20';
  $options[360]['optional']			= 'no';
  $options[360]['repeatable']			= 'no';
  $options[360]['perdashboard']		= 'yes';
  $options[360]['dependenton']		= '';

  $options[370]['name']				= 'fontname';
  $options[370]['description']		= 'Font Name';
  $options[370]['detail']				= '';
  $options[370]['type']				= 'Text';
  $options[370]['link']				= 'link to further information..?';
  $options[370]['lookup']				= ''; 
  $options[370]['default']			= 'Verdana';
  $options[370]['optional']			= 'no';
  $options[370]['repeatable']			= 'no';
  $options[370]['perdashboard']		= 'yes';
  $options[370]['dependenton']		= '';

  $options[680]['name']				= 'tableCellFontWeight';
  $options[680]['description']		= 'Font weight of text in cells.';
  $options[680]['detail']				= '';
  $options[680]['type']				= 'Dropdown';
  $options[680]['link']				= 'link to further information..?';
  $options[680]['lookup']     = 'normal|bold|bolder|lighter|initial|inherit'; 
  $options[680]['default']			= 'bold';
  $options[680]['optional']			= 'no';
  $options[680]['repeatable']			= 'no';
  $options[680]['perdashboard']		= 'yes';
  $options[680]['dependenton']		= '';

  $options[530]['name']				= 'titleTextColor';
  $options[530]['description']		= 'The color of the title.';
  $options[530]['detail']				= '';
  $options[530]['type']				= 'Color';
  $options[530]['link']				= 'link to further information..?';
  $options[530]['lookup']				= ''; 
  $options[530]['default']			= '000000';
  $options[530]['optional']			= 'no';
  $options[530]['repeatable']			= 'no';
  $options[530]['perdashboard']		= 'yes';
  $options[530]['dependenton']		= '';

  $options[670]['name']				= 'selectedTextColor';
  $options[670]['description']		= 'The color of the text in the selected cell.';
  $options[670]['detail']				= '';
  $options[670]['type']				= 'Color';
  $options[670]['link']				= 'link to further information..?';
  $options[670]['lookup']				= ''; 
  $options[670]['default']			= '000000';
  $options[670]['optional']			= 'no';
  $options[670]['repeatable']			= 'no';
  $options[670]['perdashboard']		= 'yes';
  $options[670]['dependenton']		= '';

  $options[540]['name']				= 'titleFontSize';
  $options[540]['description']		= 'Title font size';
  $options[540]['detail']				= '';
  $options[540]['type']				= 'Integer';
  $options[540]['link']				= 'link to further information..?';
  $options[540]['lookup']				= ''; 
  $options[540]['default']			= '20';
  $options[540]['optional']			= 'no';
  $options[540]['repeatable']			= 'no';
  $options[540]['perdashboard']		= 'yes';
  $options[540]['dependenton']		= '';

  $options[550]['name']				= 'titleFontName';
  $options[550]['description']		= 'Title font name';
  $options[550]['detail']				= '';
  $options[550]['type']				= 'Text';
  $options[550]['link']				= 'link to further information..?';
  $options[550]['lookup']				= ''; 
  $options[550]['default']			= 'Verdana';
  $options[550]['optional']			= 'no';
  $options[550]['repeatable']			= 'no';
  $options[550]['perdashboard']		= 'yes';
  $options[550]['dependenton']		= '';

  $options[560]['name']			= 'titleHorizAlign';
  $options[560]['description']	= 'Horizontal alignment of the title.';
  $options[560]['detail']		= '';
  $options[560]['type']			= 'Dropdown';
  $options[560]['link']			= 'link to further information..?';
  $options[560]['lookup']		= 'left|center|right'; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[560]['default']		= 'left';
  $options[560]['optional']		= 'no';
  $options[560]['repeatable']			= 'no';
  $options[560]['perdashboard']	= 'yes';
  $options[560]['dependenton']	= '';

  $options[380]['name']				= 'cellHeight';
  $options[380]['description']		= 'Height of the cells containing your data.';
  $options[380]['detail']				= '';
  $options[380]['type']				= 'Integer';
  $options[380]['link']				= 'link to further information..?';
  $options[380]['lookup']				= ''; 
  $options[380]['default']			= '10';
  $options[380]['optional']			= 'no';
  $options[380]['repeatable']			= 'no';
  $options[380]['perdashboard']		= 'yes';
  $options[380]['dependenton']		= '';

  $options[460]['name']				= 'width';
  $options[460]['description']		= 'Width of the module';
  $options[460]['detail']				= '';
  $options[460]['type']				= 'Integer';
  $options[460]['link']				= 'link to further information..?';
  $options[460]['lookup']				= ''; 
  $options[460]['default']			= '28';
  $options[460]['optional']			= 'no';
  $options[460]['repeatable']			= 'no';
  $options[460]['perdashboard']		= 'yes';
  $options[460]['dependenton']		= '';

  $options[480]['name']			= 'allowNoneSelected';
  $options[480]['description']	= 'Allow no values to be selected from the list.';
  $options[480]['detail']		= '';
  $options[480]['type']			= 'Dropdown';
  $options[480]['link']			= 'link to further information..?';
  $options[480]['lookup']		= 'true|false'; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[480]['default']		= 'true';
  $options[480]['optional']		= 'no';
  $options[480]['repeatable']			= 'no';
  $options[480]['perdashboard']	= 'no';
  $options[480]['dependenton']	= '';

  $options[470]['name']			= 'noneSelVal';
  $options[470]['description']	= 'Value that the module exports when nothing is selected';
  $options[470]['detail']		= '';
  $options[470]['type']			= 'Text';
  $options[470]['link']			= 'link to further information..?';
  $options[470]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[470]['default']		= '0';
  $options[470]['optional']		= 'no';
  $options[470]['repeatable']			= 'no';
  $options[470]['perdashboard']	= 'no';
  $options[470]['dependenton']	= '';

  $options[500]['name']			= 'hAlign';
  $options[500]['description']	= 'Horizontal alignment of text in cells';
  $options[500]['detail']		= '';
  $options[500]['type']			= 'Dropdown';
  $options[500]['link']			= 'link to further information..?';
  $options[500]['lookup']		= 'left|center|right'; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[500]['default']		= 'left';
  $options[500]['optional']		= 'no';
  $options[500]['repeatable']			= 'no';
  $options[500]['perdashboard']	= 'yes';
  $options[500]['dependenton']	= '';

  $options[490]['name']			= 'vAlign';
  $options[490]['description']	= 'Vertical alignment of text in cells';
  $options[490]['detail']		= '';
  $options[490]['type']			= 'Dropdown';
  $options[490]['link']			= 'link to further information..?';
  $options[490]['lookup']		= 'top|middle|bottom'; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[490]['default']		= 'middle';
  $options[490]['optional']		= 'no';
  $options[490]['repeatable']			= 'no';
  $options[490]['perdashboard']	= 'yes';
  $options[490]['dependenton']	= '';

  $options[520]['name']			= 'tableTitle';
  $options[520]['description']	= 'Title for this multi-select';
  $options[520]['detail']		= '';
  $options[520]['type']			= 'Text';
  $options[520]['link']			= 'link to further information..?';
  $options[520]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[520]['default']		= '';
  $options[520]['optional']		= 'no';
  $options[520]['repeatable']			= 'no';
  $options[520]['perdashboard']	= 'no';
  $options[520]['dependenton']	= '';

  $options[600]['name']			= 'idColName';
  $options[600]['description']	= 'Name of the column containing the ids for the values in the table specified above.';
  $options[600]['detail']		= '';
  $options[600]['type']			= 'Text';
  $options[600]['link']			= 'link to further information..?';
  $options[600]['lookup']		= ''; 
  $options[600]['default']		= '';
  $options[600]['optional']		= 'no';
  $options[600]['repeatable']			= 'no';
  $options[600]['perdashboard']	= 'no';
  $options[600]['dependenton']	= '';

  $options[610]['name']			= 'groupValues';
  $options[610]['description']	= 'Group the values obtained from the database?';
  $options[610]['detail']		= '';
  $options[610]['type']			= 'Dropdown';
  $options[610]['link']			= 'link to further information..?';
  $options[610]['lookup']		= 'true|false'; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[610]['default']		= 'false';
  $options[610]['optional']		= 'yes';
  $options[610]['repeatable']			= 'no';
  $options[610]['perdashboard']	= 'no';
  $options[610]['dependenton']	= '';

  $options[620]['name']			= 'cellBorderWidth';
  $options[620]['description']	= 'Width of the border around cells in the table.';
  $options[620]['detail']		= '';
  $options[620]['type']			= 'Integer';
  $options[620]['link']			= 'link to further information..?';
  $options[620]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[620]['default']		= '0';
  $options[620]['optional']		= 'yes';
  $options[620]['repeatable']			= 'no';
  $options[620]['perdashboard']	= 'yes';
  $options[620]['dependenton']	= '';

  $options[670]['name']			= 'oneOrMult';
  $options[670]['description']	= 'If the values are not grouped, should they be in one column or multiple?';
  $options[670]['detail']		= '';
  $options[670]['type']			= 'Dropdown';
  $options[670]['link']			= 'link to further information..?';
  $options[670]['lookup']		= 'one|multiple';
  $options[670]['default']		= 'one';
  $options[670]['optional']		= 'yes';
  $options[670]['repeatable']			= 'no';
  $options[670]['perdashboard']	= 'no';
  $options[670]['dependenton']	= '';

  $options[620]['name']			= 'cellBorderWidth';
  $options[620]['description']	= 'Width of the border around cells in the table.';
  $options[620]['detail']		= '';
  $options[620]['type']			= 'Integer';
  $options[620]['link']			= 'link to further information..?';
  $options[620]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[620]['default']		= '0';
  $options[620]['optional']		= 'yes';
  $options[620]['repeatable']			= 'no';
  $options[620]['perdashboard']	= 'yes';
  $options[620]['dependenton']	= '';

  $options[630]['name']			= 'cellBorderRadius';
  $options[630]['description']	=   'Curvature of the corners of the cells in the table.';
  $options[630]['detail']		= '';
  $options[630]['type']			= 'Integer';
  $options[630]['link']			= 'link to further information..?';
  $options[630]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[630]['default']		= '0';
  $options[630]['optional']		= 'yes';
  $options[630]['repeatable']			= 'no';
  $options[630]['perdashboard']	= 'yes';
  $options[630]['dependenton']	= '';

  $options[640]['name']			= 'tableBorder';
  $options[640]['description']	= 'Set the css style for the border around the table.';
  $options[640]['detail']		= '';
  $options[640]['type']			= 'Text';
  $options[640]['link']			= 'link to further information..?';
  $options[640]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[640]['default']		= '';
  $options[640]['optional']		= 'yes';
  $options[640]['repeatable']			= 'no';
  $options[640]['perdashboard']	= 'yes';
  $options[640]['dependenton']	= '';

  $options[650]['name']			= 'tableHeaderBorder';
  $options[650]['description']	= 'Set the css style for the border around the table header.';
  $options[650]['detail']		= '';
  $options[650]['type']			= 'Text';
  $options[650]['link']			= 'link to further information..?';
  $options[650]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[650]['default']		= '';
  $options[650]['optional']		= 'yes';
  $options[650]['repeatable']			= 'no';
  $options[650]['perdashboard']	= 'yes';
  $options[650]['dependenton']	= '';

  $options[660]['name']			= 'tableCellBorder';
  $options[660]['description']	= 'Set the css style for the border around the table cells.';
  $options[660]['detail']		= '';
  $options[660]['type']			= 'Text';
  $options[660]['link']			= 'link to further information..?';
  $options[660]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[660]['default']		= '';
  $options[660]['optional']		= 'yes';
  $options[660]['repeatable']			= 'no';
  $options[660]['perdashboard']	= 'yes';
  $options[660]['dependenton']	= '';

  $options[680]['name']			= 'cellVertSpacing';
  $options[680]['description']	=   'Vertical spacing between cells.';
  $options[680]['detail']		= '';
  $options[680]['type']			= 'Integer';
  $options[680]['link']			= 'link to further information..?';
  $options[680]['lookup']		= '';
  $options[680]['default']		= '0';
  $options[680]['optional']		= 'yes';
  $options[680]['repeatable']			= 'no';
  $options[680]['perdashboard']	= 'yes';
  $options[680]['dependenton']	= '';

  $options[690]['name']			= 'cellHorizSpacing';
  $options[690]['description']	=   'Horizontal spacing between cells.';
  $options[690]['detail']		= '';
  $options[690]['type']			= 'Integer';
  $options[690]['link']			= 'link to further information..?';
  $options[690]['lookup']		= '';
  $options[690]['default']		= '0';
  $options[690]['optional']		= 'yes';
  $options[690]['repeatable']			= 'no';
  $options[690]['perdashboard']	= 'yes';
  $options[690]['dependenton']	= '';

  $options[700]['name']				= 'cellWidth';
  $options[700]['description']		= 'Width of the cells in the table.';
  $options[700]['detail']				= '';
  $options[700]['type']				= 'Integer';
  $options[700]['link']				= 'link to further information..?';
  $options[700]['lookup']				= ''; 
  $options[700]['default']			= '50';
  $options[700]['optional']			= 'no';
  $options[700]['repeatable']			= 'no';
  $options[700]['perdashboard']		= 'yes';
  $options[700]['dependenton']		= '';

  return($options);
}

function validate_multi_select($svid, $value)
{  
  global $db;

  $columns['value'] = $value;

  $output = $db->update("station_variables",$columns,'"svid"=\''.$svid.'\'');
  $result1 = $db->fetchAll('select sid from station_variables where "svid"=\''.$svid.'\'');

  workflow_input($result1[0]['sid']);

  return $value;
} 

function place_input_multi_select($sid, $value, $options, $setup)
{

  //General Options
  $table_title = $options["tableTitle"];
  $allow_none_sel = $options["allowNoneSelected"] == "true";
  $default_val = $options["noneSelVal"];

  //Dashboard Options
  $do = $options["dashboard_options"];


  $ret_val = "
    <div id='celement$sid'>
      ".generate_input_multi_select_styles($sid, $options)."
      ".js_persistent_scripts_input_multi_select($sid, $allow_none_sel, $default_val)."
      <h1 id='element$sid-title'>$table_title</h1>
      <div id='element$sid-container'>
	".reload_input_multi_select($sid, $value, $options, $setup)."
      </div>
    </div>
  ";
  
  return $ret_val;
}

function reload_input_multi_select($sid, $value, $options, $setup)
{
  global $db;

  //General Options
  $tablename = $options["tablename"];
  $default_val = $options["noneSelVal"];
  $id_col = $options["idColName"];
  $oneOrMult = $options["oneOrMult"] == "one";

  if(empty($id_col)){
    $id_col = 'id';
  }

  $groupby = $options["groupby"];
  $groupVals = $options["groupValues"] == "true";

  //Dashboard Options
  $do = $options["dashboard_options"];
  $colname = $do["columnname"];
  $excl = explode(",", $do["excludedkeys"]);


  //DB Access

  if($groupVals){
    $query = "select $colname, $groupby, $id_col from $tablename order by $colname";
  }
  else{
    $query = "select $colname, $id_col from $tablename order by $colname";
  }

  $results = $db->fetchAll($query);
  $query = "select value from station_variables where sid='$sid' and name='value'";
  $selected_value_id = $db->fetchAll($query);
  $selected_value_id = $selected_value_id[0]["value"];

  if(!isset($selected_value_id) || $selected_value_id == NULL){
    $selected_value_id = $default_val;
  }

  $query = "select $colname from $tablename where $id_col='$selected_value_id'";
  $selected_val = $db->fetchAll($query);
  $selected_val = $selected_val[0][$colname];

  $data = array();

  if($groupVals){
    foreach($results as $result){
      $col = $result[$colname];
      $id = $result[$id_col];
      $group = $result[$groupby];

      if(!isset($data[$group])){
	$data[$group] = array();
      }

      array_push($data[$group], array($colname => $col, $id_col => $id));
    }

    $ret_val = "
      <div id='element$sid'>
	".create_grouped_table_input_multi_select($sid, $data, $selected_val, $id_col, $colname)."      
      </div>
    ";
  }
  else{
    foreach($results as $result){
      $col = $result[$colname];
      $id = $result[$id_col];

      array_push($data, array($colname => $col, $id_col => $id));
    }

    if(!$oneOrMult){
     $ret_val = "
        <div id='element$sid'>
	  ".create_table_mult_cols_input_multi_select($sid, $data, $selected_val, $id_col, $colname)."      
	</div>
      ";
    }
    else{
     $ret_val = "
        <div id='element$sid'>
	  ".create_table_single_col_input_multi_select($sid, $data, $selected_val, $id_col, $colname)."      
	</div>
      ";
    }

  }

  return $ret_val;
}

function create_table_mult_cols_input_multi_select($sid, $data, $selected_val, $id_col, $colname){
  $ret_val = "<table id='element$sid-table'><tbody id='element$sid-tbody'>";
  $ret_val .= "<tr class='element$sid-tr' id='element$sid-tr-0'>";

  for($i = 0; $i < count($data); $i++){
    $curr = $data[$i];

    $text = $curr[$colname];
    $id = $curr[$id_col];

    if($text == $selected_val){
      $ret_val .= "<td value='$id' onclick='element".$sid."Cell_Click()' class='element$sid-td selected' id='element$sid-tr-$i-td-0'>".strval($text)."</td>";
    }
    else{
      $ret_val .= "<td value='$id' onclick='element".$sid."Cell_Click()' class='element$sid-td' id='element$sid-tr-$i-td-0'>".strval($text)."</td>";
    }
  }

  $ret_val .= "</tr></tbody></table>";

  return $ret_val;
}

function create_table_single_col_input_multi_select($sid, $data, $selected_val, $id_col, $colname){
  $ret_val = "<table id='element$sid-table'><tbody id='element$sid-tbody'>";

  for($i = 0; $i < count($data); $i++){
    $ret_val .= "<tr class='element$sid-tr' id='element$sid-tr-$i'>";
    $curr = $data[$i];

    $text = $curr[$colname];
    $id = $curr[$id_col];

    if($text == $selected_val){
      $ret_val .= "<td value='$id' onclick='element".$sid."Cell_Click()' class='element$sid-td selected' id='element$sid-tr-$i-td-0'>".strval($text)."</td>";
    }
    else{
      $ret_val .= "<td value='$id' onclick='element".$sid."Cell_Click()' class='element$sid-td' id='element$sid-tr-$i-td-0'>".strval($text)."</td>";
    }

    $ret_val .= "</tr>";
  }

  $ret_val .= "</tbody></table>";

  return $ret_val;
}

function create_grouped_table_input_multi_select($sid, $data, $selected_val, $id_col, $colname){
  $value_list = array_map(function($group){
    return count($group);
  }, $data);

  $num_values = max($value_list);

  $ret_val = "<table id='element$sid-table'><tbody id='element$sid-tbody'>";

  for($i = 0; $i < $num_values; $i++){
    $ret_val .= "<tr class='element$sid-tr' id='element$sid-tr-$i'>";

    for($j = 0; $j < count($data); $j++){
      $group = $data[$j];

      if(isset($group[$i])){
	$text = $group[$i][$colname];
	$id = $group[$i][$id_col];

	if($text == $selected_val){
	  $ret_val .= "<td value='$id' onclick='element".$sid."Cell_Click()' class='element$sid-td selected' id='element$sid-tr-$i-td-$j'>";
	}
	else{
	  $ret_val .= "<td value='$id' onclick='element".$sid."Cell_Click()' class='element$sid-td' id='element$sid-tr-$i-td-$j'>";
	}
	$ret_val .= strval($text);
      }
      else{
	//$ret_val .= "<td class='element$sid-td-dummy'>";
      }

      $ret_val .= "</td>";
    }
    $ret_val .= "</tr>";
  }

  $ret_val .= "</tbody></table>";

  return $ret_val;
}

function js_reload_functions_input_multi_select($sid){
  return "
    function update".$sid."(dashboard, response){

    }

    function reload".$sid."(dashboard, response){

    }

    function mark".$sid."(dashboard, response){

    }

    function reload_update".$sid."(response){	

    }
  ";

}

function js_persistent_scripts_input_multi_select($sid, $allow_none_sel, $default_val){
  return "
    <script>
      ".js_reload_functions_input_multi_select($sid)."
      ".js_unselect_all_cells_input_multi_select($sid)."
      ".js_cell_click_input_multi_select($sid, $allow_none_sel, $default_val)."
    </script>
  ";

}

function js_cell_click_input_multi_select($sid, $allow_none_sel, $default_val){
  global $db;

  $svid = $db->fetchAll("select svid from station_variables where sid = '".$sid."' and name = 'value'");
  $svid = $svid[0]["svid"];


  $ret_val = "
    function element".$sid."Cell_Click(){
      var element = event.target;
  ";

  if($allow_none_sel){
    $ret_val .= "element".$sid."UnselectAllCells(element)";
  }
  else{
    $ret_val .= "element".$sid."UnselectAllCells(null)";
  }

  $ret_val .= "
      if(element.className == 'element$sid-td selected'){
	element.className = 'element$sid-td';
	validate_multi_select(".$svid.", $default_val, {'onUpdate': function(response,xmlhttp){make_update('element".$sid."',response)}});
      }
       else{
        element.className = 'element$sid-td selected';
	var value = element.getAttribute('value');

	validate_multi_select(".$svid.", value, {'onUpdate': function(response,xmlhttp){make_update('element".$sid."',response)}});
      }
    } 
  ";

  return $ret_val;
}

function js_unselect_all_cells_input_multi_select($sid){
  return "
    function element".$sid."UnselectAllCells(excl){
      var cells = document.getElementsByClassName('element$sid-td selected');

      for(var i = 0; i < cells.length; i++){
	if(cells[i] != excl){
	  cells[i].className = 'element$sid-td';
	}
      }
    }
  ";
}

function generate_input_multi_select_styles($sid, $options){
  //General Options
  
  //Dashboard Options
  $do = $options["dashboard_options"];

  $width = str_replace('px', '', strtolower($do["width"]));
  $x = str_replace('px', '', strtolower($do["x"]));
  $y = str_replace('px', '', strtolower($do["y"]));

  $title_font_size = str_replace('px', '', strtolower($do["titleFontSize"]));
  $title_horizontal_alignment = $do["titleHorizAlign"];
  $title_font_color = "#".$do["titleTextColor"];
  $title_font_name = $do["titleFontName"];
  $title_font = $title_font_size."px '$title_font_name'"; 

  $selected_font_color = "#".$do["selectedTextColor"];

  $cell_hover_color = "#".$do["hovercolor"];
  $cell_selected_color = "#".$do["activecolor"];
  $cell_height = str_replace('px', '', strtolower($do["cellHeight"]));
  $cell_font_size = str_replace('px', '', strtolower($do["fontsize"]));
  $cell_font_name = $do["fontname"];
  $cell_horiz_align = $do["hAlign"];
  $cell_vert_align = $do["vAlign"];
  $cell_font = $cell_font_size."px '$cell_font_name'"; 
  $cell_font_color = "#".$do["textColor"];
  $cell_border_radius = str_replace('px', '', strtolower($do["cellBorderRadius"]));
  $cell_border_width = str_replace('px', '', strtolower($do["cellBorderWidth"]));
  $cell_horiz_spacing = str_replace("px", "", strtolower($do["cellHorizSpacing"]));
  $cell_vert_spacing = str_replace("px", "", strtolower($do["cellVertSpacing"]));
  $cell_width = str_replace('px', '', strtolower($do["cellWidth"]));

  $hl_thickness = str_replace("px", "", strtolower($do["loadingHighlightThickness"]));
  $hl_color = "#".$do["loadingHighlightColor"];

  $table_cell_border = $do["tableCellBorder"];
  $table_header_border = $do["tableHeaderBorder"];
  $table_border = $do["tableBorder"];

  $cell_font_weight = $do["tableCellFontWeight"];

  //color:transparent;background:transparent;border-width:1px;border-radius: 8px;;width:248px;height:60px;

  return "
    <style>
      #celement$sid{
	position: absolute;
	left: ".$x."px;
	top: ".$y."px;
      }

      #element$sid-title{
	width: 100%;
	position: relative;
	color: $title_font_color;
	text-align: ".$title_horizontal_alignment.";
	font: $title_font;
      }

      #element$sid{
	position: relative;
	width: ".$width."px;
	border: ".$hl_thickness."px solid tranparent;
      }

      #element$sid.loading{
	border: ".$hl_thickness."px solid ".$hl_color.";
      }

      #element$sid-table{
	position: relative;
	width: 100%;
	border: $table_border;
	border-collapse: separate;
	border-spacing: ".$cell_horiz_spacing."px ".$cell_vert_spacing."px;
	table-layout: fixed;
      }

      #element$sid-tbody{}

      .element$sid-tr{}

      .element$sid-td-dummy{
	height: ".$cell_height."px;
      }

      .element$sid-td{
	text-align: $cell_horiz_align;
	height: ".$cell_height."px;
	color: $cell_font_color;
	background-color: transparent;
	font: $cell_font;
	border-width: ".$cell_border_width."px;
	border-radius: ".$cell_border_radius."px;
	border: $table_cell_border;
	font-weight: $cell_font_weight;
	width: ".$cell_width."px;
      }

      .element$sid-td:hover{
	background-color: $cell_hover_color;
	cursor: pointer;
      }

      .element$sid-td.selected{
	background-color: $cell_selected_color;
	color: $selected_font_color;
      }
    </style>

    <style>
      ".$do["css"]."
    </style>
  ";
}

<?php
function getsetup_viz_html_table()
{

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

  $options['_CREDITS'] = 'Main Developters: Robert Pahle, Rahul Salla.';
  $options['_MODULEDESCRIPTION'] = 'Create a simple HTML table based on the parameters listed below.';

  $options[10]['name'] = 'x';
  $options[10]['description'] = 'Placement x coordinate';
  $options[10]['detail'] = 'Default: 500';
  $options[10]['type'] = 'Integer';
  $options[10]['link'] = 'link to further information..?';
  $options[10]['lookup'] = ''; 
  $options[10]['default'] = '500';
  $options[10]['optional'] = 'no';
  $options[10]['repeatable'] = 'no';
  $options[10]['perdashboard'] = 'yes';
  $options[10]['dependenton'] = '';

  $options[20]['name'] = 'y';
  $options[20]['description'] = 'Placement y coordinate';
  $options[20]['detail'] = 'Default: 500';
  $options[20]['type'] = 'Integer';
  $options[20]['link'] = 'link to further information..?';
  $options[20]['lookup'] = ''; 
  $options[20]['default'] = '500';
  $options[20]['optional'] = 'no';
  $options[20]['repeatable'] = 'no';
  $options[20]['perdashboard'] = 'yes';
  $options[20]['dependenton'] = '';	

  $options[30]['name'] = 'fontsize';
  $options[30]['description'] = 'Please select the font size';
  $options[30]['detail'] = 'Default: 15';
  $options[30]['type'] = 'Integer';
  $options[30]['link'] = 'link to further information..?';
  $options[30]['lookup'] = ''; 
  $options[30]['default'] = '15';
  $options[30]['optional'] = 'no';
  $options[30]['repeatable'] = 'no';
  $options[30]['perdashboard'] = 'yes';
  $options[30]['dependenton'] = '';	

  $options[40]['name'] = 'fontname';
  $options[40]['description'] = 'Please select the font type';
  $options[40]['detail'] = 'Default: Verdana';
  $options[40]['type'] = 'Text';
  $options[40]['link'] = 'link to further information..?';
  $options[40]['lookup'] = ''; 
  $options[40]['default'] = 'Verdana';
  $options[40]['optional'] = 'no';
  $options[40]['repeatable'] = 'no';
  $options[40]['perdashboard'] = 'yes';
  $options[40]['dependenton'] = '';	

  $options[41]['name'] = 'fontColor';
  $options[41]['description'] = 'Please select the font color.';
  $options[41]['detail'] = '';
  $options[41]['type'] = 'Color';
  $options[41]['link'] = 'link to further information..?';
  $options[41]['lookup'] = ''; 
  $options[41]['default'] = '000000';
  $options[41]['optional'] = 'no';
  $options[41]['repeatable'] = 'no';
  $options[41]['perdashboard'] = 'yes';
  $options[41]['dependenton'] = '';	

  $options[70]['name'] = 'tablename';
  $options[70]['description'] = 'From this table';
  $options[70]['detail'] = 'This is the table name';
  $options[70]['type'] = 'Table';
  $options[70]['link'] = 'link to further information..?';
  $options[70]['lookup'] = ''; 
  $options[70]['default'] = '';
  $options[70]['optional'] = 'no';
  $options[70]['repeatable'] = 'no';
  $options[70]['perdashboard'] = 'no';
  $options[70]['dependenton'] = '';

  $options[290]['name'] = 'loadingHighlightColor';
  $options[290]['description'] = 'Color of the highlight box that is shown when a module is loading';
  $options[290]['detail'] = 'This is the color of the highlight box that is shown when a module is loading. Default: red';
  $options[290]['type'] = 'Color';
  $options[290]['link'] = 'link to further information..?';
  $options[290]['lookup'] = ''; 
  $options[290]['default'] = 'red';
  $options[290]['optional'] = 'no';
  $options[290]['repeatable'] = 'no';
  $options[290]['perdashboard'] = 'yes';
  $options[290]['dependenton'] = '';

  $options[300]['name'] = 'loadingHighlightThickness';
  $options[300]['description'] = 'Thickness of the highlight box that is shown when a module is loading (in pixels)';
  $options[300]['detail'] = 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
  $options[300]['type'] = 'Text';
  $options[300]['link'] = 'link to further information..?';
  $options[300]['lookup'] = ''; 
  $options[300]['default'] = '2';
  $options[300]['optional'] = 'no';
  $options[300]['repeatable'] = 'no';
  $options[300]['perdashboard'] = 'yes';
  $options[300]['dependenton'] = '';

  $options[365]['name'] = 'idcolumnname';
  $options[365]['description'] = 'From this id-column';
  $options[365]['detail'] = 'This is the id-column name';
  $options[365]['type'] = 'Text';
  $options[365]['link'] = 'link to further information..?';
  $options[365]['lookup'] = '';
  $options[365]['default'] = '';
  $options[365]['optional'] = 'no';
  $options[365]['repeatable'] = 'no';
  $options[365]['perdashboard'] = 'no';
  $options[365]['dependenton'] = '';

  $options[368]['name'] = 'lookupinputmodulesid';
  $options[368]['description'] = 'Lookup from this Input';
  $options[368]['detail'] = 'This is the lookupinputmodulename';
  $options[368]['type'] = 'InputModule';
  $options[368]['link'] = 'link to further information..?';
  $options[368]['lookup'] = '';
  $options[368]['default'] = '';
  $options[368]['optional'] = 'no';
  $options[368]['repeatable'] = 'no';
  $options[368]['perdashboard'] = 'no';
  $options[368]['dependenton'] = '';


  $options[370]['name'] = 'columnstoshow';
  $options[370]['description'] = 'Get info for these columns in the table (separate column names with a comma \',\'.';
  $options[370]['detail'] = '';
  $options[370]['type'] = 'Text';
  $options[370]['link'] = 'link to further information..?';
  $options[370]['lookup'] = '';
  $options[370]['default'] = '';
  $options[370]['optional'] = 'no';
  $options[370]['repeatable'] = 'no';
  $options[370]['perdashboard'] = 'no';
  $options[370]['dependenton'] = '';

  $options[380]['name'] = 'showtableheader';
  $options[380]['description'] = 'Do you want to show the column names specified as the table headers for your table?';
  $options[380]['detail'] = '';
  $options[380]['type'] = 'Dropdown';
  $options[380]['link'] = 'link to further information..?';
  $options[380]['lookup'] = 'True|False'; 
  $options[380]['default'] = 'true';
  $options[380]['optional'] = 'no';
  $options[380]['repeatable'] = 'no';
  $options[380]['perdashboard'] = 'no';
  $options[380]['dependenton'] = '';

  $options[390]['name'] = 'rowpadding';
  $options[390]['description'] = 'Specify the amount of space you want between each row:';
  $options[390]['detail'] = '';
  $options[390]['type'] = 'Text';
  $options[390]['link'] = 'link to further information..?';
  $options[390]['lookup'] = '';
  $options[390]['default'] = '20px';
  $options[390]['optional'] = 'no';
  $options[390]['repeatable'] = 'no';
  $options[390]['perdashboard'] = 'yes';
  $options[390]['dependenton'] = '';

  $options[400]['name']				= 'colpadding';
  $options[400]['description']		= 'Width between columns.';
  $options[400]['detail']				= '';
  $options[400]['type']				= 'Text';
  $options[400]['link']				= 'link to further information..?';
  $options[400]['lookup']				= ''; 
  $options[400]['default']			= '1000px';
  $options[400]['optional']			= 'no';
  $options[400]['repeatable']			= 'no';
  $options[400]['perdashboard']		= 'yes';
  $options[400]['dependenton']		= '';

  $options[520]['name']			= 'titleText';
  $options[520]['description']	= 'Title for this heatmap';
  $options[520]['detail']		= '';
  $options[520]['type']			= 'Text';
  $options[520]['link']			= 'link to further information..?';
  $options[520]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[520]['default']		= '';
  $options[520]['optional']		= 'no';
  $options[520]['repeatable']			= 'no';
  $options[520]['perdashboard']	= 'no';
  $options[520]['dependenton']	= '';

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

  $options[570]['name']			= 'tableBorder';
  $options[570]['description']	= 'Set the css style for the border around the table.';
  $options[570]['detail']		= '';
  $options[570]['type']			= 'Text';
  $options[570]['link']			= 'link to further information..?';
  $options[570]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[570]['default']		= '';
  $options[570]['optional']		= 'yes';
  $options[570]['repeatable']			= 'no';
  $options[570]['perdashboard']	= 'yes';
  $options[570]['dependenton']	= '';

  $options[580]['name']			= 'tableHeaderBorder';
  $options[580]['description']	= 'Set the css style for the border around the table header.';
  $options[580]['detail']		= '';
  $options[580]['type']			= 'Text';
  $options[580]['link']			= 'link to further information..?';
  $options[580]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[580]['default']		= '';
  $options[580]['optional']		= 'yes';
  $options[580]['repeatable']			= 'no';
  $options[580]['perdashboard']	= 'yes';
  $options[580]['dependenton']	= '';

  $options[590]['name']			= 'tableCellBorder';
  $options[590]['description']	= 'Set the css style for the border around the table cells.';
  $options[590]['detail']		= '';
  $options[590]['type']			= 'Text';
  $options[590]['link']			= 'link to further information..?';
  $options[590]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[590]['default']		= '';
  $options[590]['optional']		= 'yes';
  $options[590]['repeatable']			= 'no';
  $options[590]['perdashboard']	= 'yes';
  $options[590]['dependenton']	= '';

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

  $options[640]['name']				= 'headerCellFontColor';
  $options[640]['description']		= 'The color of the header cells.';
  $options[640]['detail']				= '';
  $options[640]['type']				= 'Color';
  $options[640]['link']				= 'link to further information..?';
  $options[640]['lookup']				= ''; 
  $options[640]['default']			= '000000';
  $options[640]['optional']			= 'no';
  $options[640]['repeatable']			= 'no';
  $options[640]['perdashboard']		= 'yes';
  $options[640]['dependenton']		= '';

  $options[650]['name']				= 'headerCellFontSize';
  $options[650]['description']		= 'Header cell font size';
  $options[650]['detail']				= '';
  $options[650]['type']				= 'Integer';
  $options[650]['link']				= 'link to further information..?';
  $options[650]['lookup']				= ''; 
  $options[650]['default']			= '20';
  $options[650]['optional']			= 'no';
  $options[650]['repeatable']			= 'no';
  $options[650]['perdashboard']		= 'yes';
  $options[650]['dependenton']		= '';

  $options[660]['name']				= 'headerCellFontName';
  $options[660]['description']		= 'Header cell font name';
  $options[660]['detail']				= '';
  $options[660]['type']				= 'Text';
  $options[660]['link']				= 'link to further information..?';
  $options[660]['lookup']				= ''; 
  $options[660]['default']			= 'Verdana';
  $options[660]['optional']			= 'no';
  $options[660]['repeatable']			= 'no';
  $options[660]['perdashboard']		= 'yes';
  $options[660]['dependenton']		= '';

  $options[670]['name']			= 'headerCellBorderWidth';
  $options[670]['description']	= 'Width of the border around the header cells in the table.';
  $options[670]['detail']		= '';
  $options[670]['type']			= 'Integer';
  $options[670]['link']			= 'link to further information..?';
  $options[670]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[670]['default']		= '0';
  $options[670]['optional']		= 'yes';
  $options[670]['repeatable']			= 'no';
  $options[670]['perdashboard']	= 'yes';
  $options[670]['dependenton']	= '';

  $options[680]['name']			= 'headerCellBorderRadius';
  $options[680]['description']	=   'Curvature of the corners of the header cells in the table.';
  $options[680]['detail']		= '';
  $options[680]['type']			= 'Integer';
  $options[680]['link']			= 'link to further information..?';
  $options[680]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[680]['default']		= '0';
  $options[680]['optional']		= 'yes';
  $options[680]['repeatable']			= 'no';
  $options[680]['perdashboard']	= 'yes';
  $options[680]['dependenton']	= '';

  $options[690]['name']			= 'cellHAlign';
  $options[690]['description']	= 'Horizontal alignment of the text in the table cells.';
  $options[690]['detail']		= '';
  $options[690]['type']			= 'Dropdown';
  $options[690]['link']			= 'link to further information..?';
  $options[690]['lookup']		= 'left|center|right'; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[690]['default']		= 'left';
  $options[690]['optional']		= 'no';
  $options[690]['repeatable']			= 'no';
  $options[690]['perdashboard']	= 'yes';
  $options[690]['dependenton']	= '';

  $options[700]['name']			= 'headerCellHAlign';
  $options[700]['description']	= 'Horizontal alignment of the text in the header cells.';
  $options[700]['detail']		= '';
  $options[700]['type']			= 'Dropdown';
  $options[700]['link']			= 'link to further information..?';
  $options[700]['lookup']		= 'left|center|right'; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
  $options[700]['default']		= 'left';
  $options[700]['optional']		= 'no';
  $options[700]['repeatable']			= 'no';
  $options[700]['perdashboard']	= 'yes';
  $options[700]['dependenton']	= '';

  return($options);
}

function place_viz_html_table($sid, $value, $options, $setup)
{
  global $db;
  
  $dashboard_options = $options['dashboard_options'];

  $module_name = $db->fetchAll("select value from station_variables where sid = ".$sid." and name = 'name'");
  $module_name = $module_name[0]["value"];

  $dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
  $dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
  $hl_thickness = str_replace("px", "", strtolower($dashboard_options["loadingHighlightThickness"]));
  $hl_color = "#".$dashboard_options["loadingHighlightColor"];
  
  $str='';
  $str.= '<div id="cover'.$sid.'">';
  $str.= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'">';
  $str.= '</div>';
  $str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2;">';
  $str.= '</div>';
  $str.= '</div>';


  if(isset($options['tablename']))
  {
    $table = reload_viz_html_table($sid, $value, $options, $setup);
    $content = "
      <script>
	var div = document.getElementById('velement".$sid."');
	div.innerHTML = \"".js_minify($table)."\";
      </script>
    ";
  }

  $str.= $content;
  //#$str.= '</div>';


  $content .= add_html_table_styles($sid, $options);

  $content .= '
    <script language="JavaScript" type="text/javascript">
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
	document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
        document.getElementById("celement'.$sid.'").style.border=\''.$hl_thickness.'px solid transparent\';
        document.getElementById("velement'.$sid.'").innerHTML = response;
      }

      </script>';
      $str.= $content;
      return($str);
      }



function reload_viz_html_table($sid, $value, $options, $setup)
{
  global $db;

  $module_name = $db->fetchAll("select value from station_variables where sid = ".$sid." and name = 'name'");
  $module_name = $module_name[0]["value"];

  $title = "<h1 id='element$sid-title'>".$options["titleText"]."</h1>";

  $dashboard_options = $options['dashboard_options'];
  $column_names = get_col_names($options["columnstoshow"]);
  $row_info = get_row_info($db, $options, $column_names);

  $content = js_create_table($row_info, $options["showtableheader"] == "true", $title, $sid);

  return($content);
}

function get_col_names($column_list_string){
  $sanitized_column_list_string = preg_replace('/\s+/', '', $column_list_string);

  return explode(",", $column_list_string);
}

function get_row_info($db, $options, $column_names){
  $columns = array();

  $sql_for_id = "select value from station_variables where name='value'
	and sid='".$options['lookupinputmodulesid']."'";

  $id_query_result = $db->fetchAll($sql_for_id);
  $id = $id_query_result[0]["value"];

  $sql = "select ";

  for($i = 0; $i < count($column_names); $i++){
    if($i == 0){
      $sql .= $column_names[$i];
    }
    else{
      $sql .= ", ".$column_names[$i];
    }
  }

  $sql .= " from ".$options["tablename"]." where ".$options["idcolumnname"]."=".$id.";";


  $rows = $db->fetchAll($sql);

  return $rows;
}

function js_create_table($rows, $header, $title, $sid){
  if(count($rows) <= 0){
    return "No Data Found";
  }


  $columns = array_keys($rows[0]);
  $thead = "";
  $tbody = "";

  if($header == "true"){
   foreach($columns as $column){
      $thead .= "
	<th class='th$sid'>".$column."</th>
      ";
    }
  }


  foreach($rows as $row){
    $tbody .="<tr class='html-table-tbody-tr$sid'>";

    foreach($columns as $column){
      $tbody .= "<td class='html-table-tbody-tr-td$sid'>".$row[$column]."</td>";
    }

    $tbody .="</tr>";
  }

  $table = "
    <table id='element$sid-table'>
      <thead class='html-table-thead$sid'>
	<tr class='html-table-thead-tr$sid'>
	  ".$thead."
	</tr>
      </thead>
      <tbody class='html-table-tbody$sid'>
	".$tbody."
      </tbody>
    </table>
  ";

  return $title.$table;
}

function add_html_table_styles($sid, $options){
  //Dashboard Options
  $do = $options["dashboard_options"];

  $width = str_replace('px', '', strtolower($do["width"]));
  $row_padding = str_replace('px', '', strtolower($do["rowpadding"]));
  $col_padding = str_replace('px', '', strtolower($do["colpadding"]));

  $cell_font_size = str_replace('px', '', strtolower($do["fontsize"]));
  $cell_font_name = $do["fontname"];
  $cell_font_color = "#".$do["fontColor"];
  $cell_horiz_align = $do["cellHAlign"];
  $cell_font = $cell_font_size."px '$cell_font_name'"; 
  $cell_border_radius = str_replace('px', '', strtolower($do["cellBorderRadius"]));
  $cell_border_width = str_replace('px', '', strtolower($do["cellBorderWidth"]));

  $title_horizontal_alignment = $do["titleHorizAlign"];
  $title_font_size = str_replace('px', '', strtolower($do["titleFontSize"]));
  $title_text_color = "#".$do["titleTextColor"];
  $title_font_name = $do["titleFontName"];

  $table_cell_border = $do["tableCellBorder"];
  $table_header_border = $do["tableHeaderBorder"];
  $table_border = $do["tableBorder"];

  $hl_thickness = str_replace("px", "", strtolower($do["loadingHighlightThickness"]));
  $hl_color = "#".$do["loadingHighlightColor"];

  $table_cell_border = $do["tableCellBorder"];
  $table_header_border = $do["tableHeaderBorder"];
  $table_border = $do["tableBorder"];

  $header_cell_font_size = str_replace('px', '', strtolower($do["headerCellFontSize"]));
  $header_cell_font_name = $do["headerCellFontName"];
  $header_cell_font_color = "#".$do["headerCellFontColor"];
  $header_cell_horiz_align = $do["headerCellHAlign"];
  $header_cell_font = $header_cell_font_size."px '$header_cell_font_name'"; 
  $header_cell_border_radius = str_replace('px', '', strtolower($do["headerCellBorderRadius"]));
  $header_cell_border_width = str_replace('px', '', strtolower($do["headerCellBorderWidth"]));

  return "
    <style>
      #celement$sid{
	border: ".$hl_thickness." solid transparent;
      }

      #element$sid-title{
	color: $title_text_color;
	font: ".$title_font_size."px $title_font_name; 
	text-align: ".$title_horizontal_alignment.";
      }

      .html-table-thead-th$sid{
	border: $table_header_border;
      }

      .html-table$sid{
	border: $table_border;
      }

      .html-table-tbody-tr-td$sid{
	font: $cell_font;
	color: $cell_font_color;
	padding-bottom: ".$row_padding."px;
	border: $table_cell_border;
	padding-right: ".$col_padding."px;
	text-align: $cell_horiz_align;
      }

      .th$sid{
	font: $header_cell_font;
	color: $header_cell_font_color;
	border: $table_header_border;
	padding-right: ".$col_padding."px;
	text-align: $header_cell_horiz_align;
      }

      .html-table-tbody-tr$sid{
	padding-right: ".$col_padding."px;
      }
      #element$sid-table{
	position: relative;
	width: 100%;
	border: $table_border;
      }
    </style>
    <style>
      ".$do["css"]."
    </style>
  ";
}

function js_minify($string){
  return str_replace(array("\r", "\n"), '', $string);
}
?>

<?
function getsetup_viz_picture()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a>.<br>';
	$options['_MODULEDESCRIPTION']		= 'User needs a minimum of two columns
	<li> 
	<ol>Column 1: an image url (from this column) </ol>
	<ol>Column 2: a picture id column(from this lookup column)</ol>
	</li>
	It does not matter which order they are in, but you have to specify the name of the url column and the name of the lookup column (and then which id[from this lookup id] you want to use in that column).';

	$options[0]['name']			= 'css';
	$options[0]['description']	= 'Please set the style';
	$options[0]['detail']		= 'This is the css number that influences the layout';
 	$options[0]['type']			= 'Text';
	$options[0]['link']			= 'link to further information..?';
	$options[0]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[0]['default']		= '';
	$options[0]['optional']		= 'yes';
	$options[0]['perdashboard']	= 'yes';
	$options[0]['dependenton']	= '';
	
	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Please select the x coordinate';
	$options[10]['detail']				= 'Default: 10';
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
	$options[20]['detail']				= 'Default: 10';
	$options[20]['type']				= 'Integer';
	$options[20]['link']				= 'link to further information..?';
	$options[20]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[20]['default']				= '10';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';
	
	$options[30]['name']				= 'width';
	$options[30]['description']			= 'Width of the chart';
	$options[30]['detail']				= 'Default: 500';
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
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';	
	
	$options[50]['name']				= 'tablename';
	$options[50]['description']			= 'From this table';
	$options[50]['detail']				= 'This is the table name';
	$options[50]['type']				= 'Text';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'no';
	$options[50]['dependenton']			= '';
	
	$options[60]['name']				= 'picture_column_name';
	$options[60]['description']			= 'From this column';
	$options[60]['detail']				= 'This is the column name containing picture locations';
	$options[60]['type']				= 'Text';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= '';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'no';
	$options[60]['dependenton']			= '';
	
	$options[70]['name']				= 'id_column_name';
	$options[70]['description']			= 'From this lookup column';
	$options[70]['detail']				= 'This is the column name containin picture locations';
	$options[70]['type']				= 'Text';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']				= '';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'no';
	$options[70]['dependenton']			= '';
	
	$options[80]['name']				= 'id_column_value';
	$options[80]['description']			= 'From this lookup id';
	$options[80]['detail']				= 'This is the id within the lookup column name from which will be selected/used';
	$options[80]['type']				= 'Text';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'no';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'no';
	$options[80]['dependenton']			= '';
	

	return($options);
}
function place_viz_picture($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];	
	
	echo '<div id="cover'.$sid.'">';
	echo 	reload_viz_picture($sid, $value, $options, $setup);
	echo '</div>';
	
	
	
	echo '	<script language="JavaScript" type="text/javascript">
				function reload'.$sid.'(dashboard, response)
				{
					place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					//document.getElementById("picture'.$sid.'").style.border=\'2px solid red\';
					$("reload_highlight'.$sid.'").style.left	= \'0\';
					$("reload_highlight'.$sid.'").style.top		= \'0\';
					$("reload_highlight'.$sid.'").style.height	= $("picture'.$sid.'").height - 4;
					$("reload_highlight'.$sid.'").style.width	= $("picture'.$sid.'").width - 4;
					$("reload_highlight'.$sid.'").style.border=\'2px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
				}
			</script>';
}

function reload_viz_picture($sid, $value, $options, $setup)
{
	global $db;
	
	
	$dashboard_options = $options['dashboard_options'];

	$content = '<div id="velement'.$sid.'" style="position:absolute; top:'.$dashboard_options['y'].'; left:'.$dashboard_options['x'].';"><div id="picture'.$dashboard_options['css'].'" style="margin:0px; padding:0px;">
			<img  id="picture'.$sid.'" ';
			
	/*If the user sets a width and/or height of the image it will override the natural size of the image and scale it according to the width and/or height that the user sets*/
	if((isset($dashboard_options['width'])) and ($dashboard_options['width']!='') and ($dashboard_options['width']!=0)) $content .= 'width="'.$dashboard_options['width'].'" ';
	if((isset($dashboard_options['height'])) and ($dashboard_options['height']!='') and ($dashboard_options['height']!=0)) $content .= 'height="'.$dashboard_options['height'].'" ';
	
	
	/*if the user sets a table, it will override the "value" option and the table content as the picture names. This allows the user to cycle through multiple images.*/
	if ((isset($options['tablename']))and ($options['tablename']!=''))
		{
			/*If user does not set the column containing the pictures,
			CSF will automatically select all columns*/
			if(isset($options['picture_column_name']))
				$fromColumn=$options['picture_column_name'];
				
			$sql = 'select '.$fromColumn.' from "'.$options['tablename'].'" where '.$options["id_column_name"].'=\''.$options['id_column_value'].'\'';
			$result	= $db->fetchAll($sql);
			for($i=0; $i<count($result); $i++)
				{
					$picture[$i][0]=$result[0][$fromColumn];
				}
			$content .=' 	src="'.$picture[0][0].'">';
		}
	else
		$content .=' 		src="'.$value.'">';
	$content .= '<div id="reload_highlight'.$sid.'" style="position:absolute;"></div>';

	$content .= '</div></div>';
	return($content);
}
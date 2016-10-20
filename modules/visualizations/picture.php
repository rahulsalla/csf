<?

function getsetup_viz_picture()
{
	$options['_CREDITS']				= 'Main Developters: Jaycen Horton.';
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

	$options[5]['name']			= 'directcss';
	$options[5]['description']	= 'Please set direct css information';
	$options[5]['detail']		= 'Input properly formated CSS here.';
 	$options[5]['type']			= 'Text';
	$options[5]['link']			= 'link to further information..?';
	$options[5]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[5]['default']		= '';
	$options[5]['optional']		= 'yes';
	$options[5]['perdashboard']	= 'yes';
	$options[5]['dependenton']	= '';
	
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
	$options[20]['perdashboard']			= 'yes';
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
	$options[30]['perdashboard']			= 'yes';
	$options[30]['dependenton']			= '';		

	$options[35]['name']				= 'maxwidth';
	$options[35]['description']			= 'Max width of the chart';
	$options[35]['detail']				= 'Default: 500';
	$options[35]['type']				= 'Integer';
	$options[35]['link']				= 'link to further information..?';
	$options[35]['lookup']				= ''; 
	$options[35]['default']				= '500';
	$options[35]['optional']			= 'no';
	$options[35]['repeatable']			= 'no';
	$options[35]['perdashboard']			= 'yes';
	$options[35]['dependenton']			= '';		

	$options[40]['name']				= 'height';
	$options[40]['description']			= 'Height of the chart';
	$options[40]['detail']				= 'Default: 500';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; 
	$options[40]['default']				= '500';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']			= 'yes';
	$options[40]['dependenton']			= '';	

	$options[45]['name']				= 'maxheight';
	$options[45]['description']			= 'Max height of the chart';
	$options[45]['detail']				= 'Default: 500';
	$options[45]['type']				= 'Integer';
	$options[45]['link']				= 'link to further information..?';
	$options[45]['lookup']				= ''; 
	$options[45]['default']				= '500';
	$options[45]['optional']			= 'no';
	$options[45]['repeatable']			= 'no';
	$options[45]['perdashboard']			= 'yes';
	$options[45]['dependenton']			= '';	
	
	$options[50]['name']				= 'tablename';
	$options[50]['description']			= 'From this table';
	$options[50]['detail']				= 'This is the table name';
	$options[50]['type']				= 'Table';
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
	
	$options[310]['name']				= 'loadingPicture';
	$options[310]['description']		= 'Use this option if you would like to display a loading icon rather than highlights';
	$options[310]['detail']				= 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
	$options[310]['type']				= 'Text';
	$options[310]['link']				= 'link to further information..?';
	$options[310]['lookup']				= ''; 
	$options[310]['default']			= '';
	$options[310]['optional']			= 'no';
	$options[310]['repeatable']			= 'no';
	$options[310]['perdashboard']		= 'yes';
	$options[310]['dependenton']		= '';
	
	$options[320]['name']				= 'input';
	$options[320]['description']			= 'Get id from this input';
	$options[320]['detail']				= 'This is the id within the lookup column name from which will be selected/used. This will overwrite the id value.';
	$options[320]['type']				= 'InputModule';
	$options[320]['link']				= 'link to further information..?';
	$options[320]['lookup']				= ''; 
	$options[320]['default']				= '';
	$options[320]['optional']			= 'no';
	$options[320]['repeatable']			= 'no';
	$options[320]['perdashboard']		= 'no';
	$options[320]['dependenton']			= '';

	$options[400]['name']				= 'zindex';
	$options[400]['description']			= 'Z-Index';
	$options[400]['detail']				= 'Enter a number representing the order of elements on the dashboard';
	$options[400]['type']				= 'Integer';
	$options[400]['link']				= 'link to further information..?';
	$options[400]['lookup']				= ''; 
	$options[400]['default']			= '100';
	$options[400]['optional']			= 'no';
	$options[400]['repeatable']			= 'no';
	$options[400]['perdashboard']			= 'yes';
	$options[400]['dependenton']			= '';


	return($options);
}
function place_viz_picture($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];	

	if(!isset($dashboard_options['zindex'])) $dashboard_options['zindex']=100;
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	$str='';
	$str.= '<div id="cover'.$sid.'">';
	$str.= '<div id="velement'.$sid.'" style="z-index:'.$dashboard_options['zindex'].';position:absolute;top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['maxwidth']).'px; height:'.($dashboard_options['maxheight']).'px;">';
	$str.= 	reload_viz_picture($sid, $value, $options, $setup);
	$str.= '</div>';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str.= '</div>';
	$str.= '</div>';
	
	
	if ($dashboard_options['loadingPicture'] != '')
	{
		$str.= '	<script language="JavaScript" type="text/javascript">
					document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
					function reload'.$sid.'(dashboard, response)
					{
						place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
					}
					function mark'.$sid.'(dashboard, response)
					{
						$("reload_highlight'.$sid.'").style.left	= \'0\';
						$("reload_highlight'.$sid.'").style.top		= \'0\';
						$("reload_highlight'.$sid.'").style.height	= $("picture'.$sid.'").height - 4;
						$("reload_highlight'.$sid.'").style.width	= $("picture'.$sid.'").width - 4;
						$("reload_highlight'.$sid.'").style.content=\'url("'.$dashboard_options['loadingPicture'].'")\';
					}
					function reload_update'.$sid.'(response)
					{
						document.getElementById("velement'.$sid.'").innerHTML = response;
					
					}
				</script>';
	}
	else
	{
		$str.= '	<script language="JavaScript" type="text/javascript">
					document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
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
						document.getElementById("velement'.$sid.'").innerHTML = response;
						document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
						
					}
				</script>';
	}
return($str);
}

function reload_viz_picture($sid, $value, $options, $setup)
{
	global $db;

	$dashboard_options = $options['dashboard_options'];
	if(isset($dashboard_options['directcss']) and ($dashboard_options['directcss']!=''))
	    $content = '<div id="picture'.$dashboard_options['css'].'" style="margin:0px; padding:0px;'.$dashboard_options['directcss'].'">';
	else
	    $content = '<div id="picture'.$dashboard_options['css'].'" style="margin:0px; padding:0px;">';
	$content1 = '<img  id="picture'.$sid.'" ';
			
	/*If the user sets a width and/or height of the image it will override the natural size of the image and scale it according to the width and/or height that the user sets*/
	if((isset($dashboard_options['width'])) and ($dashboard_options['width']!='') and ($dashboard_options['width']!=0)) $content1 .= 'width="'.$dashboard_options['width'].'" ';
	if((isset($dashboard_options['height'])) and ($dashboard_options['height']!='') and ($dashboard_options['height']!=0)) $content1 .= 'height="'.$dashboard_options['height'].'" ';

	$content1 .= 'style="';
	if((isset($dashboard_options['maxwidth'])) and ($dashboard_options['maxwidth']!='') and ($dashboard_options['maxwidth']!=0)) $content1 .= 'max-width:'.$dashboard_options['maxwidth'].'px;';
	if((isset($dashboard_options['maxheight'])) and ($dashboard_options['maxheight']!='') and ($dashboard_options['maxheight']!=0)) $content1 .= 'max-height:'.$dashboard_options['maxheight'].'px;';
	$content1 .= '" ';
	//echo $content1;
	
	/*if the user sets a table, it will override the "value" option and the table content as the picture names. This allows the user to cycle through multiple images.*/
	if(isset($options['input']) and ($options['input']!='')) {
		$result3 = $db->fetchAll("select value from station_variables where (name='value') and (sid=".$options['input'].")");
		$options['id_column_value']=$result3[0]['value'];
	}
	if ((isset($options['tablename']))and ($options['tablename']!=''))
		{
			/*If user does not set the column containing the pictures,
			CSF will automatically select all columns*/
			//if(isset($options['picture_column_name']))
				$fromColumn=$options['picture_column_name'];
				
			$sql = 'select '.$fromColumn.' from "'.$options['tablename'].'" where '.$options["id_column_name"].'=\''.$options['id_column_value'].'\'';
			$result	= $db->fetchAll($sql);
			for($i=0; $i<count($result); $i++) {
			    $picture[$i][0]=$result[0][$fromColumn];
			}
			if($picture[0][0]!='')
			    $content .= $content1 . ' src="'.$picture[0][0].'">';
		}
	else	{
	    $content .= $content1 . ' src="'.$value.'">';
	}
	$content .= '<div id="reload_highlight'.$sid.'" style="position:absolute;"></div>';

	$content .= '</div>';
	return($content);
}

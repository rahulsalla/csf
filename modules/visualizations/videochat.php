<?
function getsetup_viz_videochat()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';


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
	
	$options[50]['name']				= 'caption';
	$options[50]['description']			= 'Caption of the videochat';
	$options[50]['detail']				= 'Default: 500';
	$options[50]['type']				= 'Integer';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';	
	
	$options[60]['name']				= 'background';
	$options[60]['description']			= 'Whether the chatroom has a background or not (True/False)';
	$options[60]['detail']				= 'Default: True';
	$options[60]['type']				= 'Text';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= 'True';
	$options[60]['optional']			= 'yes';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'yes';
	$options[60]['dependenton']			= '';	

	$options[70]['name']				= 'backgroundColor';
	$options[70]['description']			= 'Chatroom background color';
	$options[70]['detail']				= 'Default: black';
	$options[70]['type']				= 'Color';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']				= 'black';
	$options[70]['optional']			= 'yes';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'yes';
	$options[70]['dependenton']			= '';	
	
	$options[80]['name']				= 'captionColor';
	$options[80]['description']			= 'Chatroom caption text color';
	$options[80]['detail']				= 'Default: white';
	$options[80]['type']				= 'Color';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= 'white';
	$options[80]['optional']			= 'yes';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']		= 'yes';
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

	return($options);
}

function place_viz_videochat($sid, $value, $options, $setup)
{	$str='';
	$dashboard_options = $options['dashboard_options'];	
#	echo '<div id="cover'.$sid.'">';
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	$str.= '<div id="cover'.$sid.'">';
	$str.= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str.= '</div>';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str.= '</div>';
	$str.= reload_viz_videochat($sid, $value, $options, $setup);
	$str.= '</div>';
#	$str.= '</div>';
	
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
				{	document.getElementById("cover'.$sid.'").innerHTML = response;
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				}
			</script>';
		return($str);
}

function reload_viz_videochat($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];	
	if ($dashboard_options['height']=='')
	{
		$dashboard_options['height']='800';
	}
	if ($dashboard_options['width']=='')
	{
		$dashboard_options['height']='600';
	}
	
	$content = '<div id="velement'.$sid.'" style="position:absolute; top:'.$dashboard_options['y'].'; left:'.$dashboard_options['x'].'; width:'.$dashboard_options['width'].'; height:'.$dashboard_options['height'].';"><div id="videochat'.$dashboard_options['css'].'" style="margin:0px; padding-top:0px;">';
	
	$content .= '<iframe id="elementm'.$sid.'" style="border:0px; margin:0px; padding:0px; width:'.$dashboard_options['width'].'; height:'.$dashboard_options['height'].';" scrolling="no" src="includes/oovoo.php?caption='.$dashboard_options['caption'].'&height='.$dashboard_options['height'].'&width='.$dashboard_options['width'].'&background='.$dashboard_options['background'].'&backgroundColor='.$dashboard_options['backgroundColor'].'&captionColor='.$dashboard_options['captionColor'].'">';
	$content .='</iframe></div></div>';
	return($content);

}


<?
function getsetup_viz_iframe()
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

        $options[75]['name']                            = 'lookuptablename';
        $options[75]['description']                     = 'From this lookup-table';
        $options[75]['detail']                          = 'This is the lookup-table name';
        $options[75]['type']                            = 'Table';
        $options[75]['link']                            = 'link to further information..?';
        $options[75]['lookup']                          = '';
        $options[75]['default']                         = '';
        $options[75]['optional']                        = 'no';
        $options[75]['repeatable']                      = 'no';
        $options[75]['perdashboard']                    = 'no';
        $options[75]['dependenton']                     = '';

        $options[85]['name']                            = 'lookupcolumnname';
        $options[85]['description']                     = 'From this lookup-column';
        $options[85]['detail']                          = 'This is the lookup-column name';
        $options[85]['type']                            = 'Text';
        $options[85]['link']                            = 'link to further information..?';
        $options[85]['lookup']                          = '';
        $options[85]['default']                         = '';
        $options[85]['optional']                        = 'no';
        $options[85]['repeatable']                      = 'no';
        $options[85]['perdashboard']                    = 'no';
        $options[85]['dependenton']                     = '';

        $options[105]['name']                           = 'lookupsearchcolumnname';
        $options[105]['description']                    = 'From this lookup-search-column';
        $options[105]['detail']                         = 'This is the lookup-search-column name';
        $options[105]['type']                           = 'Text';
        $options[105]['link']                           = 'link to further information..?';
        $options[105]['lookup']                         = '';
        $options[105]['default']                                = '';
        $options[105]['optional']                       = 'no';
        $options[105]['repeatable']                     = 'no';
        $options[105]['perdashboard']                   = 'no';
        $options[105]['dependenton']                    = '';

        $options[115]['name']                           = 'lookupsearchvalue';
        $options[115]['description']                    = 'From this lookup-search-value';
        $options[115]['detail']                         = 'This is the lookup-search-value name';
        $options[115]['type']                           = 'Text';
        $options[115]['link']                           = 'link to further information..?';
        $options[115]['lookup']                         = '';
        $options[115]['default']                                = '';
        $options[115]['optional']                       = 'no';
        $options[115]['repeatable']                     = 'no';
        $options[115]['perdashboard']                   = 'no';
        $options[115]['dependenton']                    = '';

        $options[171]['name']                            = 'lookupinputmodulesid';
        $options[171]['description']                     = 'Take the lookup-search-value from this Input';
        $options[171]['detail']                          = 'If this is set, it will overwrite the lookup-search-value with the information from this input';
        $options[171]['type']                            = 'InputModule';
        $options[171]['link']                            = 'link to further information..?';
        $options[171]['lookup']                          = '';
        $options[171]['default']                         = '';
        $options[171]['optional']                        = 'no';
        $options[171]['repeatable']                      = 'no';
        $options[171]['perdashboard']                    = 'no';
        $options[171]['dependenton']                     = '';

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
function place_viz_iframe($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	$str='';
	$str.= '<div id="cover'.$sid.'">';
	$str.= '<div id="elementm'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str.= '</div>';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str.= '</div>';
	$str.= reload_viz_iframe($sid, $value, $options, $setup);
	$str.= '</div>';
	//$str.= reload_viz_iframe($sid, $value, $options, $setup);
	//$str.= '</div>';
	
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
					
					document.getElementById("cover'.$sid.'").innerHTML = \'<div id="elementm'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;"></div><div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;"></div>\';
					document.getElementById("cover'.$sid.'").innerHTML = response;
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				}
			</script>';
			return($str);
}

function reload_viz_iframe($sid, $value, $options, $setup)
{
	global $db;
	$dashboard_options = $options['dashboard_options'];	

$content = '<div id="velement'.$sid.'" style="position:absolute;z-index:3; top:'.$dashboard_options['y'].'; left:'.$dashboard_options['x'].'; width:'.$dashboard_options['width'].'; height:'.$dashboard_options['height'].';"><div id="iframe'.$dashboard_options['css'].'" style="margin:0px; padding:0px;">
		<iframe id="elementm'.$sid.'" style="border:0px; margin:0px;padding:0px; width:'.$dashboard_options['width'].'; height:'.$dashboard_options['height'].';" scrolling="no" 
		src="';
	if(isset($options['lookupinputmodulesid']) and ($options['lookupinputmodulesid']!='')) {
        	$result=$db->fetchAll("select value from station_variables where (name='value') and (sid=".$options['lookupinputmodulesid'].");");
		$options['lookupsearchvalue']=$result[0]['value'];
	}
	if(isset($options['lookuptablename'])  and ($options['lookuptablename']!='')  and
	   isset($options['lookupcolumnname']) and ($options['lookupcolumnname']!='') and
	   isset($options['lookupsearchcolumnname'])  and ($options['lookupsearchcolumnname']!='') and
	   isset($options['lookupsearchvalue'])  and ($options['lookupsearchvalue']!='')) {
		$result = $db->fetchAll('select "'.$options['lookupcolumnname'].'" as value from "'.$options['lookuptablename'].'" where "'.$options['lookupsearchcolumnname'].'"=\''.$options['lookupsearchvalue'].'\'');
		$content .= $result[0]['value'];
		
	} else $content .= $value;

	$content.='"></iframe>';
	$content .= '</div></div>';
	return($content);
}

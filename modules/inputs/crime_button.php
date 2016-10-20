<?
function getsetup_input_crime_button()
{
	$options['_CREDITS']				= 'Main Developters: Jie Fang.';
	$options['_MODULEDESCRIPTION']		= 'This module creates a button that works only for crime analysis.Besides the functionalities that provided by normal button module,  when user clicks this button, this module wil check if current query parameters could generate valid time intervales that each one has equal length of time. Otherwise, a javascript alert window will be poped up to indicate users current settings canot generate equal length time intervals, and a suggested start/end date will be provided also.';

	$options[0]['name']			= 'css';
	$options[0]['description']	= 'Please select the CSS';
	$options[0]['detail']		= 'This is the css number that influences the layout';
	$options[0]['type']			= 'Integer';
	$options[0]['link']			= 'link to further information..?';
	$options[0]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
	$options[0]['default']		= '001';
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
	
	$options[30]['name']				= 'buttonName';
	$options[30]['description']			= 'Please enter the name of the button';
	$options[30]['detail']				= 'This sets the button name.';
	$options[30]['type']				= 'Text';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[30]['default']				= 'Default';
	$options[30]['optional']			= 'yes';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';
	
	$options[40]['name']				= 'width';
	$options[40]['description']			= 'Field width (if left blank, the field will be as wide as the text)';
	$options[40]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[40]['default']				= '100';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';
	
	$options[50]['name']				= 'height';
	$options[50]['description']			= 'Field height (if left blank, the field will be as high as the text)';
	$options[50]['detail']				= 'Default: 25';
	$options[50]['type']				= 'Integer';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '25';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';
	
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

function validate_crime_button($id, $value)
{  
	global $db;

    $message = "";
    # check the interval data before go to future
    $data      = get_inputs($db, $id);
    $from_date = $data['from_date'];
    $to_date   = $data['to_date'];
    $step_by   = $data['step_by'];
    $step      = (int)($data['step']);
    $sql = "SELECT datediff('".$step_by."','".$from_date."','".$to_date."') as n";
    $sql_result = $db->fetchAll($sql);
    $n = $sql_result[0]['n'];
    if ($step_by != "Day")
        $n = $n+1;
    $steps = $n / $step;
    $round_steps = (int)(floor($steps));
    if ($step * $round_steps < $n)
    {
        # interval not equally
        $sql = "SELECT ('".$from_date."'::date + '".$round_steps*$step." ".$step_by."'::INTERVAL - '1 days'::INTERVAL)::date as date";
        $sql_result = $db->fetchAll($sql);
        $suggest_date = $sql_result[0]['date'];
        $message = "Note: current date setup leads not equally divided time intervals, we suggest setting the last day of analysis to ".$suggest_date.".";
    }

    # doing rest things
	$select = $db->select();
	$columns['value'] = $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $message;  
} 

function place_input_crime_button($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];

	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	echo '<div id="cover'.$sid.'">';
#	echo '<div id="velement'.$sid.'" style="position:absolute;z-index:1; border:\'5px green\'top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	echo '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';

#	echo '<div id="celement'.$sid.'" style="position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	echo '</div>';
	echo reload_input_crime_button($sid, $value, $options, $setup);
	echo '</div>';
	echo '</div>';
	
		  
	echo '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
				function update'.$sid.'(dashboard, response)
				{
					make_update(response.svid, response.value);
				}
				function reload'.$sid.'(dashboard, response)
				{
					place_input(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
					//document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					//document.getElementById("celement'.$sid.'").style.border=\'none\';	
				}
			</script>';
}

function reload_input_crime_button($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	if (isset($dashboard_options['buttonName']) and (!isset($value) or ($value=='')))
	{
		$value=$dashboard_options['buttonName'];
	}

	if ($dashboard_options['height']=='' && $dashboard_options['width']=='')
	{
		$content = '<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:0; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
			<!--<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['css']).'text-align: left; padding-left: 5px" TYPE="button" SIZE=3 id="'.$setup['value_svid'].'" value="'.$value.'" onclick="alert(this.id)">-->
			<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['css']).'text-align: left; padding-left: 5px" TYPE="button" SIZE=3 id="'.$setup['value_svid'].'" value="'.$value.'" onclick="validate_crime_button(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
			</div>';
	}
	else
	{
			$content = '<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:0; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
			<!--<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['css']).'text-align: left; padding-left: 5px" TYPE="button" SIZE=3 id="'.$setup['value_svid'].'" value="'.$value.'" onclick="alert(this.id)">-->
			<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['css']).'text-align: left;width:'.$dashboard_options['width'].'px;height:'.$dashboard_options['height'].'px; padding-left: 5px " TYPE="button" SIZE=3 id="'.$setup['value_svid'].'" value="'.$value.'" 
            onclick="validate_crime_button(
                this.id, 
                this.value, 
                {\'onUpdate\': function(response,xmlhttp){
                    if (response.length>0)
                        alert(response);
                    make_update(\''.$sid.'\',this.value);
                }}
            );">
			</div>';
	}
	return($content);
	
}

function crime_button_rtrn_default_value($sid, $options)
{
}

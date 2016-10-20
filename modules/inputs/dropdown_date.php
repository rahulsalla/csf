<?
function getsetup_input_dropdown_date()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton, Jie Fang.';
	$options['_MODULEDESCRIPTION']		= 'This module will create a dropdown input for date. This module includes 3 dropdow lists:year, month and day. For each list, it will take a list of values that are used to generate the dropdown. Once the dropdown is selected the generated value is the selected value of the list. ';

	$options[0]['name']					= 'css';
	$options[0]['description']			= 'Please select the CSS';
	$options[0]['detail']				= 'This is the css number that influences the layout';
	$options[0]['type']					= 'Integer';
	$options[0]['link']					= 'link to further information..?';
	$options[0]['lookup']				= ''; 
	$options[0]['default']				= '';
	$options[0]['optional']				= 'no';
	$options[0]['perdashboard']			= 'yes';
	$options[0]['dependenton']			= '';
	
	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Please select the x coordinate';
	$options[10]['detail']				= 'This sets the x coordinate to place the element on the dashboard.';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= '';
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
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '10';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';
	
	$options[40]['name']			    = 'year_values';
	$options[40]['description']	        = 'Please enter the year values to appear in the dropdown box. Seperate each item with a | character.';
	$options[40]['detail']		        = 'This is the list of year values that will show up in the dropdown box.';
	$options[40]['type']			    = 'Text';
	$options[40]['link']			    = 'link to further information..?';
	$options[40]['lookup']		        = ''; 
	$options[40]['default']		        = '';
	$options[40]['optional']		    = 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']	    = 'no';
	$options[40]['dependenton']	        = '';
	
	$options[41]['name']			    = 'month_values';
	$options[41]['description']	        = 'Please enter the month values to appear in the dropdown box. Seperate each item with a | character.';
	$options[41]['detail']		        = 'This is the list of month values that will show up in the dropdown box.';
	$options[41]['type']			    = 'Text';
	$options[41]['link']			    = 'link to further information..?';
	$options[41]['lookup']		        = ''; 
	$options[41]['default']		        = '';
	$options[41]['optional']		    = 'no';
	$options[41]['repeatable']			= 'no';
	$options[41]['perdashboard']	    = 'no';
	$options[41]['dependenton']	        = '';
		
	$options[42]['name']			    = 'day_values';
	$options[42]['description']	        = 'Please enter the day values to appear in the dropdown box. Seperate each item with a | character.';
	$options[42]['detail']		        = 'This is the list of day values that will show up in the dropdown box.';
	$options[42]['type']			    = 'Text';
	$options[42]['link']			    = 'link to further information..?';
	$options[42]['lookup']		        = ''; 
	$options[42]['default']		        = '';
	$options[42]['optional']		    = 'no';
	$options[42]['repeatable']			= 'no';
	$options[42]['perdashboard']	    = 'no';
	$options[42]['dependenton']	        = '';

	$options[50]['name']				= 'width';
	$options[50]['description']			= 'Field width (if left blank, the field will be as wide as the text)';
	$options[50]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[50]['type']				= 'Integer';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[50]['default']				= '100';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'yes';
	$options[50]['dependenton']			= '';
	
	$options[60]['name']				= 'height';
	$options[60]['description']			= 'Field height (if left blank, the field will be as high as the text)';
	$options[60]['detail']				= 'Default: 20';
	$options[60]['type']				= 'Integer';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']				= '20';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'yes';
	$options[60]['dependenton']			= '';
	
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
function validate_dropdown_date($id, $value)
{  
	global $db;

	$select = $db->select();
	$columns['value']	= $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;  
} 

function place_input_dropdown_date($sid, $value, $options, $setup)
{

	$dashboard_options = $options['dashboard_options'];
	echo '<div id="cover'.$sid.'">';
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	echo '<div id="cover'.$sid.'">';
	echo '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	echo '</div>';
	echo '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:20; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	echo '</div>';
	echo reload_input_dropdown_date($sid, $value, $options, $setup);
	echo '</div>';
	

	
	
		echo '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
				function make_update_dropdowndate(id,response)
                {
                    // new function to do a special update
                    // for this multiple dropdown list element
                    var selected_item = response;
                    var dropdownyear = document.getElementsByName("year"+id)[0];
                    var dropdownmonth = document.getElementsByName("month"+id)[0];
                    var dropdownday = document.getElementsByName("day"+id)[0];
                    var selectedyear = selected_item.split("-")[0];
                    var selectedmonth = selected_item.split("-")[1];
                    var selectedday = selected_item.split("-")[2];
                    dropdownyear.value = selectedyear;
                    dropdownmonth.value = selectedmonth;
                    dropdownday.value = selectedday;
                    /*var i;
                    for (i=0;i<dropdownyear.options.length;i++)
                    {
                        dropdownyear.options[i].selected = false;
                        if (dropdownyear.options[i].value==selectedyear) 
                        {   
                            dropdownyear.options[i].selected = true;
                        }
                    }
                    for (i=0;i<dropdownmonth.options.length;i++)
                    {
                        dropdownmonth.options[i].selected = false;
                        if (dropdownmonth.options[i].value==selectedmonth) 
                        {   
                            dropdownmonth.options[i].selected = true;
                        }
                    }
                    for (i=0;i<dropdownday.options.length;i++)
                    {
                        dropdownday.options[i].selected = false;
                        if (dropdownday.options[i].value==selectedday) 
                        {   
                            dropdownday.options[i].selected = true;
                        }
                    }*/
                }
                function update'.$sid.'(dashboard, response)
				{
                    make_update_dropdowndate('.$sid.', response.value);
				}
				function reload'.$sid.'(dashboard, response)
				{
					place_input(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				}
			</script>';
}

function reload_input_dropdown_date($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	//var_dump($options);
	$year_list = explode('|',$options['year_values']);
	$month_list = explode('|',$options['month_values']);
	$day_list = explode('|',$options['day_values']);
	//echo "<script type='text/javascript'>alert(this.id)</script>";
	//echo $options."<br>";
	//var_dump($list);
	if ($dashboard_options['height']=='' && $dashboard_options['width']=='')
    {
        $width = 80;
        $height = 20;
    }	
    else
    {
        $width = $dashboard_options['width'];
        $height = $dashboard_options['height'];
    }

    $content = '<div id="element'.$sid.'" style="z-index:2; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';width:'.($width*3).';height:'.$height.';">';

    $content .= '
<script language="Javascript">
    function checkdate'.$sid.'(input){
        var validformat=/^\d{4}\-\d{1,2}\-\d{1,2}$/ //Basic check for format validity
        var returnval=false
        if (!validformat.test(input))
            alert("Invalid Date Format. Please correct and submit again.")
        else{ //Detailed check for valid date ranges
            var monthfield=input.split("-")[1]
            var dayfield=input.split("-")[2]
            var yearfield=input.split("-")[0]
            var dayobj = new Date(yearfield, monthfield-1, dayfield)
            if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
                alert("Invalid Day, Month, or Year range detected. Please correct and submit again.")
            else
                returnval=true
        }
        return returnval
    }

    function onDateChange'.$sid.'(id)
    {
        var value1=document.getElementsByName("year'.$sid.'")[0].value;
        var value2=document.getElementsByName("month'.$sid.'")[0].value;
        var value3=document.getElementsByName("day'.$sid.'")[0].value;
        // validate date 
        var value=value1+\'-\'+value2+\'-\'+value3;
        if (checkdate'.$sid.'(value))
        {
            validate_dropdown_date(id, value, 
                {\'onUpdate\': function(response,xmlhttp){
                    make_update_dropdowndate(\''.$sid.'\',response);
                }});
        }
    }
</script>
';
    $value_array = explode("-",$value);
    $year_value = $value_array[0];
    $month_value = $value_array[1];
    $day_value = $value_array[2];
    
    #year dropdown list	
    $content .= '<select name="year'.$sid.'";CLASS=SmallInput STYLE="text-align: left; width:'.$width.';height:'.$height.'; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$year_value.'" onchange="javscript:onDateChange'.$sid.'(this.id)">
			';
	foreach($year_list as $item)
	{
		$content .= '<option';
		if($item==$year_value) $content .= ' selected';
		$content .= '>'.$item.'</option>';
	}
	
	$content .= '</select>';

    #month dropdown list	
    $content .= '<select name="month'.$sid.'";CLASS=SmallInput STYLE="text-align: left; width:'.$width.';height:'.$height.'; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$month_value.'" onchange="javscript:onDateChange'.$sid.'(this.id)">
			';
	foreach($month_list as $item)
	{
		$content .= '<option';
		if($item==$month_value) $content .= ' selected';
		$content .= '>'.$item.'</option>';
	}
	
	$content .= '</select>';

    #day dropdown list	
    $content .= '<select name="day'.$sid.'";CLASS=SmallInput STYLE="text-align: left; width:'.$width.';height:'.$height.'; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$day_value.'" onchange="javscript:onDateChange'.$sid.'(this.id)">
			';
	foreach($day_list as $item)
	{
		$content .= '<option';
		if($item==$day_value) $content .= ' selected';
		$content .= '>'.$item.'</option>';
	}
	
	$content .= '</select>';
	$content .= '</div>';
	return($content);
}
function dropdown_date_rtrn_default_value($sid, $options)
{

}

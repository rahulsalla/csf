<?
function getsetup_input_dropdown_multiple_db()
{
	$options['_CREDITS']				= 'Main Developters: Robert Pahle, Jaycen Horton, Jie Fang.';
	$options['_MODULEDESCRIPTION']		= 'This module will create a dropdown input for multiple selection. It will take a list of values that are retrieved from database. Once the dropdown is selected the generated value is the combined selected values of the list.';

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
	
	
    $options[30]['name']                = 'valuefield';
    $options[30]['description']         = 'Select this column';
    $options[30]['detail']              = 'This is column that has the value to read';
    $options[30]['type']                = 'Text';
    $options[30]['link']                = 'link to further information..?';
    $options[30]['lookup']              = ''; 
    $options[30]['default']             = '';
    $options[30]['optional']            = 'no';
    $options[30]['repeatable']          = 'no';
    $options[30]['perdashboard']        = 'no';
    $options[30]['dependenton']         = '';

    $options[55]['name']                = 'tablename';
    $options[55]['description']         = 'From this table';
    $options[55]['detail']              = 'This is the table name';
    $options[55]['type']                = 'Table';
    $options[55]['link']                = 'link to further information..?';
    $options[55]['lookup']              = ''; 
    $options[55]['default']             = '';
    $options[55]['optional']            = 'no';
    $options[55]['repeatable']          = 'no';
    $options[55]['perdashboard']        = 'no';
    $options[55]['dependenton']         = '';

    $options[61]['name']                = 'queryfield';
    $options[61]['description']         = 'Where column value';
    $options[61]['detail']              = 'This is column that has the value to query';
    $options[61]['type']                = 'Text';
    $options[61]['link']                = 'link to further information..?';
    $options[61]['lookup']              = ''; 
    $options[61]['default']             = '';
    $options[61]['optional']            = 'no';
    $options[61]['repeatable']          = 'no';
    $options[61]['perdashboard']        = 'no';
    $options[61]['dependenton']         = '';

    $options[70]['name']                = 'value';
    $options[70]['description']         = 'Equals this value';
    $options[70]['detail']              = 'This is the id that you are looking for';
    $options[70]['type']                = 'Text';
    $options[70]['link']                = 'link to further information..?';
    $options[70]['lookup']              = ''; 
    $options[70]['default']             = '';
    $options[70]['optional']            = 'no';
    $options[70]['repeatable']          = 'no';
    $options[70]['perdashboard']        = 'no';
    $options[70]['dependenton']         = '';   
		
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
function validate_dropdown_multiple_db($id, $value)
{  
	global $db;

	$select = $db->select();
	$columns['value']	= $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;  
} 

function place_input_dropdown_multiple_db($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
//	echo '<div id="cover'.$sid.'">';
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	echo '<div id="cover'.$sid.'">';
	echo '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	echo '</div>';
	echo '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:20; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	echo '</div>';
	echo reload_input_dropdown_multiple_db($sid, $value, $options, $setup);
	echo '</div>';
    echo '	
<script language="JavaScript" type="text/javascript">
    document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
    function make_update_multidropdown'.$sid.'(id, response)
    {
        // new function to do a special update
        // for this multi-dropdown element
        response = eval(\'(\'+response+\')\');
        var selected_items = response["values"];
        var multidropdown = document.getElementById(id);
        var i,j;
        for (i=0; i<multidropdown.options.length; i++) {
            var opt = multidropdown.options[i];
            opt.selected=false;
            for (j=0; j<selected_items.length;j++){
                if (opt.value == selected_items[j])
                    opt.selected=true;
            }
        }
    }
    function update'.$sid.'(dashboard, response)
    {
       make_update_multidropdown'.$sid.'(response.svid, response.value);
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
        document.getElementById("cover'.$sid.'").innerHTML = response;
       // document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
    }
</script>';
}

function reload_input_dropdown_multiple_db($sid, $value, $options, $setup)
{
    global $db;
    $select_options = json_decode($value)->{'values'};
	$dashboard_options = $options['dashboard_options'];
	
    if(isset($options['tablename']) and ($options['tablename']!=''))
    {
        $sql = "select ".$options['valuefield']." as value from ".$options['tablename']." where ".$options['queryfield']." = '".$options['value']."';";
        $result = $db->fetchAll($sql);
    }

    $list = explode('|',$result[0]['value']);
	//echo "<script type='text/javascript'>alert(this.id)</script>";
	//echo $options."<br>";
	//var_dump($list);
	if ($dashboard_options['height']=='' && $dashboard_options['width']=='')
	{
		$content = '
<div id="element'.$sid.'" style="z-index:2; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:150; height:10;">
    <select multiple="multiple" CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$value.'" onchange="validate_dropdown_multiple(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
        ';
	}
	else
	{
		$content = '
<div id="element'.$sid.'" style="z-index:2; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';width:'.($dashboard_options['width']).';height:'.($dashboard_options['height']).';">
    <script language="JavaScript" type="text/javascript">
    function checkOptions'.$sid.'(id) 
    {
        var selectedArray = new Array();
        var selObj = document.getElementById(\''.$setup['value_svid'].'\');
        var i;
        var count=0;
        for (i=0; i<selObj.options.length; i++) {
            if (selObj.options[i].selected) {
                selectedArray[count] = selObj.options[i].value;
                count++;
            }
        }
        var selJson = {\'values\': selectedArray};
        selJson = JSON.stringify(selJson);
        validate_dropdown_multiple(id, selJson,{  
            \'onUpdate\': function(response,xmlhttp){
                console.log(response);
                // Uncomment this line to avoid unhighlight of selection
                make_update_multidropdown(\''.$setup['value_svid'].'\',response);
            }
        });
    }
    </script>
    <select multiple="multiple"  STYLE="text-align: left; width:'.($dashboard_options['width']).';height:'.($dashboard_options['height']).'; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" onchange="javascript:checkOptions'.$sid.'(this.id);" value="'.str_replace('"','\'',$value).'">
        ';
	}
	foreach($list as $item)
	{
		$content .= '<option';
		if(in_array($item,$select_options))
            $content .= ' selected';
		$content .= '>'.$item.'</option>';
	}

 /*	Uncomment this and replace this with the above "for loop" it worked for me -- Shrijal
	This is more generic

	foreach($result as $item)
        {
                $content .= '<option';
                if(in_array($item['value'],$select_options))
            	$content .= ' selected';
                $content .= '>'.$item['value'].'</option>';
        }

*/	
	$content .= '



    </select>
</div>';
	return($content);
}
function dropdown_multiple_db_rtrn_default_value($sid, $options)
{

}

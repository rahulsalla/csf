<?
function getsetup_input_radio()
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

        $options[25]['name']                            = 'selectionvalue';
        $options[25]['description']                     = 'Please name the valaue that you would like to get.';
        $options[25]['detail']                          = 'This sets if this checkbox is selected, this is the value that gets written into the results table';
        $options[25]['type']                            = 'Text';
        $options[25]['link']                            = 'link to further information..?';
        $options[25]['lookup']                          = ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
        $options[25]['default']                         = '10';
        $options[25]['optional']                        = 'no';
        $options[25]['repeatable']                      = 'no';
        $options[25]['perdashboard']            = 'no';
        $options[25]['dependenton']                     = '';

	
	$options[30]['name']				= 'common';
	$options[30]['description']			= 'Please enter a common identifyer';
	$options[30]['detail']				= 'This joins all the radio buttons that have the same name.';
	$options[30]['type']				= 'Text';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[30]['default']				= 'Default';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'no';
	$options[30]['dependenton']			= '';
	
        $options[60]['name']                            = 'tablename';
        $options[60]['description']                     = 'Write/read to table name';
        $options[60]['detail']                          = 'If you like to use a table to write your data, provide the table name';
        $options[60]['type']                            = 'Table';
        $options[60]['link']                            = 'link to further information..?';
        $options[60]['lookup']                          = '';
        $options[60]['default']                         = '';
        $options[60]['optional']                        = 'no';
        $options[60]['repeatable']                      = 'no';
        $options[60]['perdashboard']                    = 'no';
        $options[60]['dependenton']                     = '';

        $options[70]['name']                            = 'columnname';
        $options[70]['description']                     = 'Write/read to column name';
        $options[70]['detail']                          = 'If you like to use a table to write your data, provide the column name';
        $options[70]['type']                            = 'Text';
        $options[70]['link']                            = 'link to further information..?';
        $options[70]['lookup']                          = '';
        $options[70]['default']                         = '';
        $options[70]['optional']                        = 'yes';
        $options[70]['repeatable']                      = 'no';
        $options[70]['perdashboard']                    = 'no';
        $options[70]['dependenton']                     = '';

        $options[80]['name']                            = 'lookupcolumnname';
        $options[80]['description']                     = 'Lookup column name';
        $options[80]['detail']                          = 'If you like to use a table to write/read your data you can provide a lookup column name';
        $options[80]['type']                            = 'Text';
        $options[80]['link']                            = 'link to further information..?';
        $options[80]['lookup']                          = '';
        $options[80]['default']                         = '';
        $options[80]['optional']                        = 'yes';
        $options[80]['repeatable']                      = 'no';
        $options[80]['perdashboard']                    = 'no';
        $options[80]['dependenton']                     = '';

        $options[85]['name']                            = 'lookupcolumnvalue';
        $options[85]['description']                     = 'Lookup column value';
        $options[85]['detail']                          = 'If you provide a lookup column name, you have to give a value to look for.';
        $options[85]['type']                            = 'Text';
        $options[85]['link']                            = 'link to further information..?';
        $options[85]['lookup']                          = '';
        $options[85]['default']                         = '';
        $options[85]['optional']                        = 'yes';
        $options[85]['repeatable']                      = 'no';
        $options[85]['perdashboard']                    = 'no';
        $options[85]['dependenton']                     = '';
		
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

function validate_radio($id, $value)
{  
	global $db;


	
        $columns['value']       = $value;
        $db->update("station_variables",$columns,'"svid"=\''.$id.'\'');

	$result1 = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');

	if($value) {

	    $sql="select ".$schema."station_variables.svid as svid, ".$schema."station_variables.name as name, ".$schema."station_variables.value as value from ".$schema."station_variables where ".$schema."station_variables.sid='".$result1[0]['sid']."' and (".$schema."station_variables.name='name' or ".$schema."station_variables.name='value' or ".$schema."station_variables.name='xc' or ".$schema."station_variables.name='yc' or ".$schema."station_variables.name='show' or ".$schema."station_variables.name='type' or ".$schema."station_variables.name='options' or ".$schema."station_variables.name='taborder'  or ".$schema."station_variables.name='moduletype')";
	    $result			= $db->fetchAll($sql);

	
	    foreach($result as $variable)
	    {
		$value1[$variable['name']] = $variable['value'];
		if($variable['name']=='options') $svid=$variable['svid'];
		if($variable['name']=='value') $svid_value=$variable['svid'];
	    }
	
	    $options	= json_decode($value1['options'],true);
	    var_dump($options);

	    $columns[$options['columnname']] = $options['selectionvalue'];
	    $db->update($options['tablename'],$columns,'"'.$options['lookupcolumnname'].'"=\''.$options['lookupcolumnvalue'].'\'');
	    unset($columns);
	}



	workflow_input($result1[0]['sid']);
	
	return $value;  
} 

function place_input_radio($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	if ($dashboard_options['loadingHighlightThickness']>6)
		$dashboard_options['loadingHighlightThickness']==6;
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	echo '<div id="cover'.$sid.'">';
	//echo '<div id="celement'.$sid.'" style="position:absolute;z-index:10000; top:'.($dashboard_options['y']+3).'px; left:'.($dashboard_options['x']+4).'px; width:'.(13-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.(13-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	echo '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:20; top:'.($dashboard_options['y']+3).'px; left:'.($dashboard_options['x']+4).'px; width:'.(13-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.(13-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	echo '</div>';
	echo reload_input_radio($sid, $value, $options, $setup);
	echo '</div>';
	
		  
	echo '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
				function update'.$sid.'(dashboard, response)
				{
					//make_update(response.svid, response.value);
					document.getElementById(response.svid).checked=response.value;
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
				{	document.getElementById("cover'.$sid.'").innerHTML = response;
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
				}
			</script>';
}

function reload_input_radio($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];

	 $content = '
<script type="text/javascript">
</script>
<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
		  <INPUT STYLE="'.($dashboard_options['css']).'" TYPE="radio" id="'.$setup['value_svid'].'" name="'.($options['common']).'" ';
if($value==true) $content .= 'checked="checked" ';
$content .= ' onmousedown="var x=document.getElementsByName(\''.$options['common'].'\'); for(var i=0;i< x.length; i++) {if(this.id!=x[i].id){if(x[i].checked){validate_radio(x[i].id, false, {\'onUpdate\': function(response,xmlhttp){}});}}}" onclick="validate_radio(this.id, true, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
		  </div>';
	return($content);
}

function radio_rtrn_default_value($sid, $options)
{
}

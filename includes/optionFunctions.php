<?php

function update_options($options) {
    $values['options']['data'] = $options;
}

function place_input_dependencies($type, $name, $value, $lookup) {
    $content	= '';
    switch($type) {
	case "Integer":
	    $content	= "<input id='".$name."' type='text' value='".$value."' size='2' />";
	    break;
	case "Text":
	    $content	= "<input id='".$name."' type='text' value='".$value."' size='12' />";
	    break;
	case "Dropdown":
	    $lookup_options	 = explode('|',$lookup);
	    $content		 = "<select id='".$name."' name='".$name."'>";
	    foreach($lookup_options as $key => $lookup_setup) {
		$content .= "<option value = \"".$lookup_setup."\" ";
		if($value == $lookup_setup) $content .= "selected";
		    $content	.= ">".$lookup_setup."</option>";
	    }
	    $content	.= "</select>";
	    break;
	default: break;
    }
    return ($content);
}

function unpack_general_options($option_field, $options_setup)
{
	$option_field = json_decode($option_field, true); 
	
	$content = "<table id=\"general_options\">";
	$j = 0;
	foreach($options_setup as $key => $option_setup)
	{
		if($option_setup['perdashboard']== 'no')
		{
			if($option_setup['repeatable']== 'yes')
			{
				$i=0;
				foreach( $option_field[$option_setup['name']] as $repeatablevalue)
				{
					$i++;
					$content .= "<tr><td>"."</td><td>&nbsp;&nbsp;</td><td>".$option_setup['description']."</td><td> ". (($option_setup['detail']=="") ? "" : "<img width='14px' title='".$option_setup['detail']."' src='images/blue_info.png' />")."</td><td>".place_input_dependencies($option_setup['type'],$option_setup['name'].($i),$repeatablevalue,$option_setup['lookup'])."</td></tr>";
					$j++;
				}
				$i++;
				$content .= "<tr><td></td><td></td><td><span style='background-color:#FF9966;' onmouseup='alert(\"columns".$i."\");'>&nbsp;Add Element..&nbsp;</span></td><td></td><td></td>";
				$j++;
			}
			else
			{
				$content .= "<tr><td>"."</td><td>&nbsp;&nbsp;</td><td>".$option_setup['description']."</td><td> ". (($option_setup['detail']=="") ? "" : "<img width='14px' title='".$option_setup['detail']."' src='images/blue_info.png' />")."</td><td>".place_input_dependencies($option_setup['type'],$option_setup['name'],$option_field[$option_setup['name']],$option_setup['lookup'])."</td></tr>";
				$j++;
			}
		}
	}
	$content .= "</table><br />";
	return($content);
}

function unpack_per_dashboard_options($option_field, $options_setup)
{
	$option_field = json_decode($option_field, true); 
	$i = 0;
	$content = '';
	foreach ($option_field as $dashboard => $options)
	{
		if(is_int($dashboard))
		{
			$i++;
			$content .= "<br><b><span style='text-decoration:underline;'>Dashboard: ".$dashboard."</span><input type=\"hidden\" id=\"dashboard".$i."\" value=\"".$dashboard."\"></b>";
			$content .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copy to&nbsp;<input type='text' value='' size='3' name='copyfrom".$dashboard."' id='copyfrom".$dashboard."'><input type='button' value='&nbsp;&#x2713&nbsp;'onmouseup='copyDashboard(".$dashboard.",document.getElementById(\"copyfrom".$dashboard."\").value);'></span>";
			$content .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = 'button' value = '&nbsp;Delete&nbsp;' size = '3' name = 'delete' id='delete' onmouseup='deleteDashboard(".$dashboard.");'><br>";
			//$content .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = 'button' value = '&nbsp;Delete&nbsp;' size = '3' name = 'delete' id='delete' onmouseup='deleteDashboard(".$dashboard.");'><br>";
			//document.getElementById(\"options_div\").innerHTML=JSON.stringify(combine())
			//updateOptionsBox(JSON.stringify(combine())

			$content .= "<table>";
			foreach($options_setup as $key => $option_setup)
			{
				if($option_setup['perdashboard']== "yes")
					$content .= "<tr><td>"."</td><td>&nbsp;&nbsp;</td><td>".$option_setup['description']."</td><td> ". (($option_setup['detail']=="") ? "" : "<img width='14px' title='".$option_setup['detail']."' src='images/blue_info.png' />")."</td><td>".place_input_dependencies($option_setup['type'],$option_setup['name']."+".$dashboard,$options[$option_setup['name']],$option_setup['lookup'])."</td></tr>";
			}
			$content .= "</table><br />";
		}
	}
	return ($content);
}

function validate ($id, $value, $type)
{ 
	$ex	= explode('_',$id);
	
	global $db;
	global $schema;
	
	  //alert($value);
	  $value = stripslashes($value);

	if($type=="integer") $value=intval($value);
	$columns['value']= $value;
	
	$db->update($schema."station_variables",$columns,'"svid"='.$ex[1]);
	
	return $value; 
}

function get_options($sid)
{
	$content  = '<font face="arial">';
	$content .= '<div style="cursor:hand; position:fixed; right:65px;" id="close"  onmouseup="document.getElementById(\'options_div\').style.visibility = \'hidden\';"><img src="images/close_button.png" position=relative width="40px" align="right"></div><br><font size="5" color="#2F4F4F"><b>Options Editor:</b></font><br><br>';
	global $db;

	$content .= $sid." - ";
	$sql	= "select svid,name,value from station_variables where sid=".$sid." and (name='show' or name='xc' or name='yc' or name='options' or name='type' or name='moduletype' or name='phpfile')";
	$result	= $db->fetchAll($sql);

	foreach($result as $value) {
	    if(($value['name']=='options') or ($value['name']=='type') or ($value['name']=='moduletype') or ($value['name']=='phpfile'))
		$values[$value['name']]['data']	= $value['value'];
	    else $values[$value['name']]['data']	= explode(';',$value['value']);
	    $values[$value['name']]['svid']	= $value['svid'];
	}
        $content = '<font face="arial">';
	$content .= '<div style="cursor:hand; position:fixed; right:65px; top:55px;" id="close"  onmouseup="document.getElementById(\'options_div\').style.visibility = \'hidden\';"><img src="images/close_button_new.png" position=relative width="40px" align="right"></div>

<div style="cursor:hand; position:fixed; right:65px; top:100px;" id="save" onmouseup="updateOptionsBox(JSON.stringify(combine()),'.$values['options']['svid'].', 1)"><img src="images/save_button.png" position=absolute width="40px" align="right"></div><br><font size="5" color="#2F4F4F"><b>Options Editor:</b></font><br><br>';
	
	if($_POST['option_field']!='') $option_field = stripslashes($_POST['option_field']);
	else {
	    $option_field = $values['options']['data'];
		//$option_field = 
		//$option_field ='{"title":"This is a title","columns":{"1":"column1","2":"column2"},"11":{"css":1,"width":45,"height":50},"12":{"css":2,"width":145,"height":150}}';
		//$option_field = stripslashes($option_field); 
	}
	if(isset($values['phpfile']['data']))
	    $values['type']['data']=$values['phpfile']['data'];
	$type = $values['type']['data'];
	$content .= "<br><span style='font-weight:bold;color:339966'>Module Type:</span><br><br>";
	$content .= $type.'<br>';

	if(function_exists("getsetup_".$values['moduletype']['data']."_".$values['type']['data'])) {
	    $options = call_user_func("getsetup_".$values['moduletype']['data']."_".$values['type']['data']);
	    if(isset($options['_CREDITS'])) {
		$content .= "<br><span style='font-weight:bold;color:339966'>Credits:</span><br><br>";
		$content .= $options['_CREDITS'].'<br>';
	    }
	    if(isset($options['_MODULEDESCRIPTION'])) {
		$content .= "<br><span style='font-weight:bold;color:339966'>Module Description:</span><br><br>";
		$content .= $options['_MODULEDESCRIPTION'].'<br><br>';
	    }
	}
	else $content .= "No Setup Function "."getsetup_".$values['moduletype']['data']."_".$values['type']['data']."<br>";
	    //make a function that has below content, and then always call that function

	$content .= "<br><span style='font-weight:bold;color:339966'>General Options:</span><br><br>";
	$content .= unpack_general_options($option_field, $options);
	if(!isset($values['phpfile']['data'])) {
	    $content .= "<br><span style='font-weight:bold;color:336699'>per Dashboard Options:</span><br/>";
	    $content .= "<br>Add to dashboard&nbsp;<input type='text' value='' size='3' name='newDashboardBox' id='newDashboardBox'><input type='button' value = '+' name='newdashboard' onmouseup='newDashboard(document.getElementById(\"newDashboardBox\").value);'><br>";
	    $content .= unpack_per_dashboard_options($option_field, $options);
	    ### this javascript adds another dashboard
	}

	### this javascript collects the info and creates a proper json string

	/*$content .= "<input type='button' value ='&nbsp;Save&nbsp;' style='color:0066CC;' onmouseup='updateOptionsBox(JSON.stringify(combine()),".$values['options']['svid'].", 1);'><br>";*/

	$content .= '<form name="hiddenForm" method="POST" target=""><input type="hidden" id="option_field" name="option_field" value=""></form>';

	$return[1] = $content;
	$return[2] = $options;
	return($return);
}?>
<?
function getsetup_input_dropdown()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a>.<br>';
	$options['_MODULEDESCRIPTION']		= 'This module will create a dropdown input. It will take a list of values that are used to generate the dropdown. Once the dropdown is selected the generated value is the selected value of the list.';

	$options[0]['name']					= 'css';
	$options[0]['description']			= 'Please select the CSS';
	$options[0]['detail']				= 'This is the css number that influences the layout';
	$options[0]['type']					= 'Integer';
	$options[0]['link']					= 'link to further information..?';
	$options[0]['lookup']				= ''; 
	$options[0]['default']				= '001';
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
	
	$options[40]['name']			= 'dropdown_values';
	$options[40]['description']	= 'Please enter the values to appear in the dropdown box. Seperate each item with a | character.';
	$options[40]['detail']		= 'This is the list of values that will show up in the dropdown box.';
	$options[40]['type']			= 'Text';
	$options[40]['link']			= 'link to further information..?';
	$options[40]['lookup']		= ''; 
	$options[40]['default']		= 'Fill';
	$options[40]['optional']		= 'no';
	$options[40]['perdashboard']	= 'no';
	$options[40]['dependenton']	= '';

	return($options);
}
function validate_dropdown($id, $value)
{  
	global $db;

	$select = $db->select();
	$columns['value']	= $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;  
} 

function place_input_dropdown($sid, $value, $options, $setup)
{

	$dashboard_options = $options['dashboard_options'];
	echo '<div id="cover'.$sid.'">';
	//commenting out --Jaycen
	echo reload_input_dropdown($sid, $value, $options, $setup);
	/*echo '<div id="velement'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';">
		  </div>';*/
	echo '</div>';
	

	
	
		echo '	<script language="JavaScript" type="text/javascript">
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
					document.getElementById("'.$setup['value_svid'].'").style.border=\'1px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("cover'.$sid.'").innerHTML = response;
				}
			</script>';
}

function reload_input_dropdown($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	//var_dump($options);
	$list = explode('|',$dashboard_options['dropdown_values']);
	//echo "<script type='text/javascript'>alert(this.id)</script>";
	//echo $options."<br>";
	//var_dump($list);
	
	$content = '<div id="element'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:150; height:10;">
		<select CLASS=SmallInput STYLE="text-align: left; padding-left: 5px" id="'.$setup['value_svid'].'" size="1" value="'.$value.'" onchange="validate_dropdown(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}});">
	';
	foreach($list as $item)
	{
		$content .= '<option';
		if($item==$value) $content .= ' selected';
		$content .= '>'.$item.'</option>';
	}
	
	$content .= '</select>
	</div>';
	return($content);
}
function dropdown_rtrn_default_value($sid, $options)
{

}

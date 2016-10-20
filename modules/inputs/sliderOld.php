<?
//error_reporting(E_ERROR);
function getsetup_input_sliderOld()
{
$options['_CREDITS']				= 'Main Developters: Robert Pahle, Prem Randeria.';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';

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
	
	$options[30]['name']				= 'sliderName';
	$options[30]['description']			= 'Please enter the name of the slider';
	$options[30]['detail']				= 'This sets the slider name.';
	$options[30]['type']				= 'Text';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[30]['default']				= 'slider';
	$options[30]['optional']			= 'yes';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'no';
	$options[30]['dependenton']			= '';
	
	$options[40]['name']				= 'width';
	$options[40]['description']			= 'Width of the slider';
	$options[40]['detail']				= 'This sets the width in pixel on the dashboard.';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[40]['default']				= '100';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';
	
	$options[50]['name']				= 'min';
	$options[50]['description']			= 'Minimum value of range';
	$options[50]['detail']				= 'This will set the minimum range of slider';
	$options[50]['type']				= 'Integer';
	$options[50]['link']				= 'link to further information..?';
	$options[50]['lookup']				= ''; 
	$options[50]['default']				= '0';
	$options[50]['optional']			= 'no';
	$options[50]['repeatable']			= 'no';
	$options[50]['perdashboard']		= 'no';
	$options[50]['dependenton']			= '';
	
	$options[60]['name']				= 'max';
	$options[60]['description']		= 'Maximum value of range';
	$options[60]['detail']				= 'This will set the maximum range of slider';
	$options[60]['type']				= 'Integer';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= ''; 
	$options[60]['default']			= '500';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']		= 'no';
	$options[60]['dependenton']		= '';
	
	$options[70]['name']				= 'sections';
	$options[70]['description']			= 'Set the number of section on slider bar';
	$options[70]['detail']				= 'This will specify the number of sections on the input bar';
	$options[70]['type']				= 'Integer';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= '';
	$options[70]['default']				= '5';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'no';
	$options[70]['dependenton']			= '';
	/*
	$options[70]['name']				= 'width';
	$options[70]['description']			= 'width ';
	$options[70]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[70]['type']				= 'Integer';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back being the selection
	$options[70]['default']				= '100';
	$options[70]['optional']			= 'no';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']		= 'yes';
	$options[70]['dependenton']			= '';
	
	$options[80]['name']				= 'height';
	$options[80]['description']			= 'height';
	$options[80]['detail']				= 'Default: 25';
	$options[80]['type']				= 'Integer';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '25';
	$options[80]['optional']			= 'no';
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
	
	*/
	
	return($options);
}

function validate_sliderOld($id, $value)
{  
	global $db;
	
	$select = $db->select();
	$columns['value'] = $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;  
} 

function place_input_sliderOld($sid, $value, $options, $setup)
{	
	$dashboard_options = $options['dashboard_options'];

	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	
	$str= '<div id="cover'.$sid.'">';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; ">';

	$str.= '</div>';
	$str.= reload_input_sliderOld($sid, $value, $options, $setup);
	$str.= '</div>';
	$str.= '</div>';
	
		  
	$str.= '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\'1 px solid red\';
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
					//document.getElementById("celement'.$sid.'").style.border=\'1 px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					//document.getElementById("celement'.$sid.'").style.border=\'none\';	
				}
			</script>';
	return($str);
}

function reload_input_sliderOld($sid, $value, $options, $setup)
{	
	$dashboard_options = $options['dashboard_options'];
	if (isset($dashboard_options['buttonName']) and (!isset($value) or ($value=='')))
	{
		//$value=$dashboard_options['buttonName'];
	}
	 $flag1=true;
			 $flag2=true;
			
	if(isset($options['sections']))
	{ 
	   $sections=$options['sections'];
	}
	else{$sections=1;}
		if (isset($options['min'])&&  isset($options['max']))
	{		
			
			if( $options['min'] > $options['max'])	
			{
			//echo "Input Range is incorrect";
			$flag2=false;
			}
			if($flag1&&$flag2){
			$min=$options['min'];
			$max=$options['max'];
			$step=($max-$min)/$sections;
			$step=round($step,2);
		
			 function mod($a, $b) { 
				   return $a - $b * (($b < 0) ? ceil($a / $b) : floor($a / $b)); 
				 }
		$flag=0;
			
			$content='';
			$content.= ' <div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:0; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
			<hr style="height:5px;width:1px;margin-bottom:-8px;padding:0px;" />
			
			<span id="min"></span>
			<hr1/>
			<input type="range"  STYLE="'.($dashboard_options['css']).' ;width:'.$dashboard_options['width'].'px;  "  min="'.$options['min'].'" ; max="'.($max).'" ;  step="'.$step.'" ;   id="'.$setup['value_svid'].'" ; value="'.$value.'" ; onchange="showValue(this.value,this.min,this.max,this.step),validate_sliderOld(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response); }})"; /> ';
			$content.='<span id="max"></span><br>
			<div style="text-align: center;">
			 </div>
			 <br>
			 
			
			
			<span id="val"></span>
			<script type="text/javascript">
			
			var flag='.$flag.';
			
			document.getElementById("min").innerHTML='.$options['min'].';
			document.getElementById("max").innerHTML='.$max.';
				function showValue(newValue,min,max,step)
					{	
						
						v=Number(newValue);
						n=Number(step);
					console.log(v+n);
						document.getElementById("val").innerHTML=(newValue);
						
					}
					
					</script>
					<script>
				  var inputs = document.getElementsByTagName("input");
				 
				  for(var i = 0; i < inputs.length; i++) {
					if(inputs[i].type == "range") {
					  inputs[i].addEventListener("click", function() {
						this.focus();
					  });
					}
				  }
			</script>
			</div>';
			}
			
	}
	return ($content) ;
	//onchange="showValue(this.value),validate_slider(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}})";
}
function sliderOld_rtrn_default_value($sid, $options)
{
}

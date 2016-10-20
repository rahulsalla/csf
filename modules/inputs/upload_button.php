<?
function getsetup_input_upload_button()
{
	$options['_CREDITS']				= 'Main Developers: Robert Pahle, Jaycen Horton.';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';

	$options[0]['name']					= 'css';
	$options[0]['description']			= 'Please select the CSS';
	$options[0]['detail']				= 'This is the css number that influences the layout';
	$options[0]['type']					= 'Integer';
	$options[0]['link']					= 'link to further information..?';
	$options[0]['lookup']				= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
	$options[0]['default']				= '001';
	$options[0]['optional']				= 'no';
	$options[0]['perdashboard']			= 'yes';
	$options[0]['dependenton']			= '';
	
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
	
	$options[310]['name']				= 'extensions';
	$options[310]['description']		= 'Speicfy the list of file extension seperated by \', \'';
	$options[310]['detail']				= 'For eg:  txt, jpg , png ';
	$options[310]['type']				= 'Text';
	$options[310]['link']				= 'link to further information..?';
	$options[310]['lookup']				= ''; 
	$options[310]['default']			= 'txt';
	$options[310]['optional']			= 'no';
	$options[310]['repeatable']			= 'no';
	$options[310]['perdashboard']		= 'no';
	$options[310]['dependenton']		= '';
	
	$options[320]['name']				= 'overwrite';
	$options[320]['description']		= 'Overwrite if file already exists';
	$options[320]['detail']				= '';
	$options[320]['type']				= 'Dropdown';
	$options[320]['link']				= 'link to further information..?';
	$options[320]['lookup']				= '|yes|no'; 
	$options[320]['default']			= 'no';
	$options[320]['optional']			= 'no';
	$options[320]['repeatable']			= 'no';
	$options[320]['perdashboard']		= 'no';
	$options[320]['dependenton']		= '';
	
	$options[330]['name']				= 'max_size';
	$options[330]['description']		= 'Maximum size of file';
	$options[330]['detail']				= 'Cannot be more than 100 MB';
	$options[330]['type']				= 'Text';
	$options[330]['link']				= 'link to further information..?';
	$options[330]['lookup']				= ''; 
	$options[330]['default']			= '100000';
	$options[330]['optional']			= 'no';
	$options[330]['repeatable']			= 'no';
	$options[330]['perdashboard']		= 'no';
	$options[330]['dependenton']		= '';
	
	return($options);
}

function validate_upload_button($sid, $value)
{  	
	global $db,$configurations;
	
	$result = $db->fetchAll("SELECT value from station_variables where sid='".$sid."' and name='value'");
	$json_d = json_decode($result[0]['value']);
	$json_d[] = session_id().'/'.$sid.'_'.$value;
	var_dump($json_d);

	$result = $db->fetchAll("update station_variables set value='".json_encode($json_d)."' where sid='".$sid."' and name='value'");
	
	workflow_input($sid);
	
	return $value;  
} 

function place_input_upload_button($sid, $value, $options, $setup)
{	
	$dashboard_options = $options['dashboard_options'];

	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
#	$str .= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; border:\'5px green\'top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
	$str = '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';

#	$str .= '<div id="celement'.$sid.'" style="position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str .= '</div>';
	$str .= '<div id="cover'.$sid.'">';
	$str .= reload_input_upload_button($sid, $value, $options, $setup);
	$str .= '</div>';
	
		  
	$str .= '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
				function update'.$sid.'(dashboard, response)
				{	
					//make_update(response.svid, response.value);
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
					document.getElementById("cover'.$sid.'").innerHTML = response;
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					init'.$sid.'();
					//document.getElementById("celement'.$sid.'").style.border=\'none\';	
				}
				function inArray'.$sid.'(elem, array, i) {
					var len;
					if ( array ) {
						if ( array.indexOf ) {
							return array.indexOf.call( array, elem, i );
						}
						len = array.length;
						i = i ? i < 0 ? Math.max( 0, len + i ) : i : 0;
						for ( ; i < len; i++ ) {
							// Skip accessing in sparse arrays
							if ( i in array && array[ i ] === elem ) {
								return i;
							}
						}
					}
					return -1;
				}

				function FileDragHover'.$sid.'(e) {
					e.stopPropagation();
					e.preventDefault();
					e.target.className = (e.type == "dragover" ? "hover" : "");
				}
				function FileSelectHandler'.$sid.'(e) {
					FileDragHover'.$sid.'(e);
					var files = e.target.files || e.dataTransfer.files;
					var status=[];
					for (var i = 0, f; f = files[i]; i++)
						UploadFile'.$sid.'(f);
				}
				function UploadFile'.$sid.'(file) {
					var response=false;
					var filetypes = "'.$options['extensions'].'";
					var allowedFileType= filetypes.split(\',\');
					var xhr = new XMLHttpRequest();
		
					var flag=false;
					var fileName=file.name;
					var uploadedFileType=fileName.substr( (fileName.lastIndexOf(\'.\') +1) );
					var validFileType=inArray'.$sid.'(uploadedFileType,allowedFileType);
					var error_msg=\'\';
					file[\'overwrite\']="'.$options['overwrite'].'";
					file[\'sid\']="'.$sid.'";
					if (xhr.upload && validFileType != -1 && file.size <= '.$options['max_size'].') {
						if(validFileType == -1){error_msg+=" Invalid File Type"};
						if(file.size > '.$options['max_size'].'){error_msg+=" Unacceptable Size "};
							flag=true;
							var o = $("progress'.$sid.'");
							var progress = o.appendChild(document.createElement("p"));
							progress.appendChild(document.createTextNode(file.name));
							xhr.upload.addEventListener("progress", function(e) {
								var pc = parseInt(100 - (e.loaded / e.total * 100));
								progress.style.backgroundPosition = pc + "% 0";
							}, false);
							//var m = $("messages'.$sid.'");
/*
							xhr.onreadystatechange = function(e) {
								if (xhr.readyState == 4) {
									k=(xhr.status == 200? "success" : "failure");
									progress.className = k;
									//m.innerHTML=xhr.responseText;
								}
							}; 
*/
							var xmlhttp=xhr;
							xmlhttp.onreadystatechange=function(e) {
								if (xmlhttp.readyState==4 && xmlhttp.status==200) {	
									response=xmlhttp.responseText+"";
									// m.innerHTML+=response+"<br>";
									if(xmlhttp.responseText==0){
										response=true;
										//m.innerHTML+=file.name+"-->"+"Success:File uploaded <br> ";
										progress.className = "Success";
										validate_upload_button('.$sid.',file.name, {});
									}
									if(xmlhttp.responseText==2) {
										response=true;
										//m.innerHTML+=file.name+"-->"+"Success:File Overwritten <br> ";
										progress.className = "Success";
									}
									if(xmlhttp.responseText==1)	{
										//if(error_msg!="")
											//m.innerHTML+=file.name+"--> "+error_msg;
										//else
										//	m.innerHTML+=file.name+"--> "+" Failure : File name already exists ";
										progress.className = "failed";
									}
									setTimeout(function(){progress.parentElement.removeChild(progress);},4000);
								}
							}

							xhr.open("POST", $("upload").action, true);

							xhr.setRequestHeader("X_FILENAME", file.name);
							xhr.setRequestHeader("X_OVERWRITE", file.overwrite);
							xhr.setRequestHeader("X_SID", file.sid);
							xhr.send(file);
					} else {		
						if(validFileType == -1){error_msg+=" Invalid File Type "+file.type};
						if(file.size > '.$options['max_size'].'){error_msg+=" Unacceptable Size "+file.size+" Max Allowed :" + '.$options['max_size'].'};
						//var m = $("messages'.$sid.'");
						//m.innerHTML+=file.name+"--> "+" Failure:  "+error_msg+"<br>";
						var o = $("progress'.$sid.'");
						var progress = o.appendChild(document.createElement("p"));
						progress.appendChild(document.createTextNode("upload " + file.name));
						xhr.upload.addEventListener("progress", function(e) {
							var pc = parseInt(100 - (e.loaded / e.total * 100));
							progress.style.backgroundPosition = pc + "% 0";
						}, false);						 
						progress.className = "failed";
						setTimeout(function(){progress.parentElement.removeChild(progress);},4000);
					}
					return response;
				}
				function init'.$sid.'() {
					if (window.File && window.FileList && window.FileReader) {
						var fileselect = $("fileselect'.$sid.'"),
						filedrag = $("filedrag'.$sid.'"),
						submitbutton = $("submitbutton'.$sid.'");
						fileselect.addEventListener("change", FileSelectHandler'.$sid.', false);

						// is XHR2 available?
						var xhr = new XMLHttpRequest();
						if (xhr.upload) {
							filedrag.addEventListener("dragover", FileDragHover'.$sid.', false);
							filedrag.addEventListener("dragleave", FileDragHover'.$sid.', false);
							filedrag.addEventListener("drop", FileSelectHandler'.$sid.', false);
							filedrag.style.display = "block";

							submitbutton.style.display = "none";
						}
					}
				}
				init'.$sid.'();
</script>';
	$str .= '</div>';

    return($str);
}

function reload_input_upload_button($sid, $value, $options, $setup)
{	global $configuration;
	$dashboard_options = $options['dashboard_options'];
	if (isset($dashboard_options['buttonName']) and (!isset($value) or ($value=='')))
	{
		$value=$dashboard_options['buttonName'];
	}

	if ($dashboard_options['height']=='' && $dashboard_options['width']=='')
	{
		$content = '<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:0; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">
			<!--<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['css']).'text-align: left; padding-left: 5px" TYPE="file" SIZE=3 id="'.$setup['value_svid'].'" value="'.$value.'" onclick="alert(this.id)">-->
			<INPUT CLASS=SmallInput STYLE="'.($dashboard_options['css']).'text-align: left; padding-left: 5px" TYPE="file" SIZE=3 id="'.$setup['value_svid'].'"  multiple>
			</div>';
	}
	else
	{	
		$content='<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:0; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).';width: '.($dashboard_options['width']).';height: '.($dashboard_options['height']).';">
		<form id="upload" action="import/upload_button/upload.php" method="POST" enctype="multipart/form-data">
  <link rel="stylesheet" type="text/css" href="./css/stylesUploadFiles.css" />
<fieldset>
<legend class"legend">File Upload</legend>

<div > 
	<input type="file" id="fileselect'.$sid.'" name="fileselect[]" multiple="multiple" />
	<div id="filedrag'.$sid.'" class="filedrag">or drop files here</div>
</div>

<div id="submitbutton'.$sid.'">
	<button type="submit">Upload Files</button>
</div>

<div id="progress'.$sid.'" class="progress"></div>

</fieldset>

</form>
<!--
<div id="messages'.$sid.'" class="messages">
<p></p>
</div>  -->
</div>		
		';

	}
	return($content);
	
}

function upload_button_rtrn_default_value($sid, $options)
{
}

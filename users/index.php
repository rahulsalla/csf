<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
  /**
   * index file for the user management
   *
   * PHP version 5
   *
   * @package  Csf
   * @author   Robert Pahle <robert.pahle@asu.edu>
   * @license  http://decisiontheater.org/license.txt ASU Software License
   * @link     http://decisiontheater.org/csf
   */

require_once "Zend/Db.php";
require_once "../includes/config.php";
session_start();


require_once('../components/csf/phplivex/PHPLiveX.php');
require_once("../includes/user.php");
checkauth('users');

$ajax = new PHPLiveX(array("get_users","save_user","add_user","delete_user"));
$ajax->Run('../components/csf/phplivex/phplivex.js');

function get_users()
{
    global $db;
    $result = $db->fetchAll('select username, id, network, region , note from users order by id desc');
    return($result);
}

function save_user($id, $username, $network, $region, $note, $pw0, $pw1) {
    global $db;
    if(($pw0==$pw1) and ($pw0<>'')) {
	$pw=md5($pw0);
	$db->fetchAll('update users set ("username", "pw", "network", "region", "note" ) = (\''.$username.'\',\''.$pw.'\',\''.$network.'\',\''.$region.'\',\''.$note.'\') where id =\''.$id.'\';');
    }
    else {
	$db->fetchAll('update users set ("username", "network", "region", "note" ) = (\''.$username.'\',\''.$network.'\',\''.$region.'\',\''.$note.'\') where id =\''.$id.'\';');
    }
}

function delete_user($id) {
    global $db;
    $db->fetchAll('delete from users where id =\''.$id.'\';');
}

function add_user() {
    global $db;
    $db->fetchAll('insert into users ("username", "pw", "network", "region", "note") values (\'new_user\',\''. md5(rand(0,9999999999999)) .'\',\'\',\',,,,,,,,,,,\',\'\');');
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head> 
		<title>CSF User Management</title> 
		<script src="../components/bower/prototypejs-bower/prototype.js" type="text/javascript"></script> 
		<style type="text/css" media="all"> 
		  @import "../css/dependencies.css";
		</style>
		<style>
		    .style0 {
			background-color:White;
			text-align:center;
		    }
		    .style0a {
			background-color:White;
			text-align:center;
			font-weight:bold;
		    }
		    .style1 {
			background-color:YellowGreen;
			text-align:center;
		    }
		    .style2 {
			background-color:Orange;
			text-align:center;
		    }\
		</style>
		<script type="text/javascript">

			var leftSideBarMargin = 260;
			var topBarMargin = 35;
			var regions = ['dependencies','admin', 'import', 'edit', 'dashboard_list', 'dashboard', 'users']

			function positionElements() {
			  var workspace = $('workspace').positionedOffset();
			  var viewport = document.viewport.getDimensions();
			  $('workspace').style['width'] = viewport.width - leftSideBarMargin + 'px';
			  $('workspace').style['height'] = viewport.height - topBarMargin + 'px';
			}
						
			Event.observe(window, 'load', function() {
			    positionElements();
			    $$('.details').invoke('hide');
			    $('welcome').show();
			});

			var delaytime 	= 1000;
			timerId = setTimeout("get_users({\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\', \'onUpdate\': function(response){show_data(response);}})",delaytime);
			
			function timedout()
			{
				document.getElementById("timedoutmarker").style.visibility="visible";
			}
			
			function collect(id) {
			    var region = '';
			    for (var i = 0; i < regions.length; i++) {
			        if($(regions[i]+id).checked) region += regions[i];
			        if(regions[i]=='dashboard') region += 'dashboard='+$('dashboard'+id).value;
			        region += ',';
			    }
			    return region;
			}

			function delete_row(r) {
			    var i = r.parentNode.parentNode.rowIndex;
			    $(usertable).deleteRow(i);
			}

			function show_data(response)
			{
				$("timedoutmarker").style.visibility="hidden";
				var active_list = '<table>';
				var i,j, table, row, cell, id;
				for(i=0; i< response.length; i++)
				{
				// check if row exists
				    var id = response[i]['id'];
//				    alert('username'+id);
				    if($('username'+id)== undefined)
				    {
					var myvar = response[i]['region'].split(",");
//					alert('insert');
					table = $('usertable');
					row = table.insertRow($(usertable).getElementsByTagName("TR").length);
					cell = row.insertCell(0);
					cell.innerHTML = response[i]['id'];
					cell = row.insertCell(1);
					cell.innerHTML = '<input id="username'+id+'" type="text" size="15" value="'+response[i]['username']+'">';
//					<input type="submit" value="Set" onClick="set_dashboard(\''+response[i]['dashboard']+'\', \''+response[i]['dashboard']+'\', $(\'name'+id+'\').value, \''+response[i]['id']+'\', {\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\'});$(\'name'+id+'\').value=\''+response[i]['uid']+'\';">';
//					cell.innerHTML = response[i]['username'];
					cell = row.insertCell(2);
					cell.innerHTML = '<input id="network'+id+'" type="text" size="15" value="'+response[i]['network']+'">';
//					cell.innerHTML = response[i]['network'];
					
					for (var j = 0; j < regions.length; j++) {
					    cell = row.insertCell(3+j);
					    if(typeof myvar[j] !== 'undefined') {
						var dep = myvar[j].split('=');
					    }
					    else var dep = ['',''];
					    if(regions[j] == 'dashboard'){
						cell.innerHTML = '<input id="'+regions[j]+id+'" type="text" size="15" value="'+dep[1]+'">';
					    }
					    else {
						if(typeof myvar[j] === 'undefined') {
						    var checked='';
						}
						else {
						    if(myvar[j]==regions[j]) { var checked='checked' }
						    else { var checked='' }
						}
						cell.innerHTML = '<input id="'+regions[j]+id+'" type="checkbox" size="15" value="" '+checked+'>';
					    }
					    cell.className = 'style0';
					}
					cell = row.insertCell(10);
					cell.innerHTML = '<input id="note'+id+'" type="text" size="15" value="'+response[i]['note']+'">';
					cell = row.insertCell(11);
					cell.innerHTML = '<input id="pw0'+id+'" type="password" size="15" value="">';
					cell = row.insertCell(12);
					cell.innerHTML = '<input id="pw1'+id+'" type="password" size="15" value="">';
					cell.id = 'user'+response[i]['id'];
					cell = row.insertCell(13);
					cell.innerHTML = '<input type="submit" value="Set" onClick="var region = collect('+response[i]['id']+'); ;save_user(\''+response[i]['id']+'\', $(\'username'+id+'\').value, $(\'network'+id+'\').value, region, $(\'note'+id+'\').value, $(\'pw0'+id+'\').value, $(\'pw1'+id+'\').value, {\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\'});">';
					cell = row.insertCell(14);
					cell.innerHTML = '<input type="submit" value="Delete" onClick="delete_user(\''+response[i]['id']+'\', {\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\'}); delete_row(this);">';
				    }
				    if(response[i]['seen']>19) $('clienttable').deleteRow(cell.parentNode.rowIndex);
				}
				active_list = active_list + '</table>';
//				$('workspace').innerHTML = '<br>Active Client List<br><br>'+active_list;
				
				timerId = setTimeout("get_users({\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\', \'onUpdate\': function(response){show_data(response);}})",delaytime);
			}

		</script> 
	</head>
	<body>

		<ul id="menu">
			<li id="refresh" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("../dependencies.php");'>Dependency Editor</li>
			<li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("../index.php");'>Dashboards</li>
			<li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("../import/index.php");'>Import</li>
			<li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("<?php echo $configuration['phppgadmin_path']; ?>/index.php");'>Database</li>
			<li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("../help/help_import.html");'>Help</li>
		</ul>
		
		<div id="Logo" class="logo">
			&nbsp;CSF - Users
		</div>

		<div id="content"> 
			<div id="workspace" style="padding-left:10px; background-repeat: no-repeat;"><br>
			<table id="usertable">
			    <tr class="style0a"><td>ID</td><td>Name</td><td>Network</td><td>Dependencies</td><td>Admin</td><td>Import</td><td>Edit</td><td>Dashboard List</td><td>Dashboards</td><td>Users</td><td>Note</td><td>Password</td><td>Password</td><td>Set</td><td>Delete</td></tr>
			</table>
			<input type="submit" value="Add User" onClick="add_user( {'timeout': 7000, 'onTimeout': function(){ timedout(); }, 'content_type': 'json'});">
			</div> 

			<div id="welcome" class="details"> 
				<h1>Welcome</h1> 
				<p>Welcome to the User Manager.</p>
				<p></p>
			</div>
		</div>

		<div id="timedoutmarker" style="position:absolute; top:10; left:10; width:10; height:10; background-color:red; visibility:hidden;"></div>

	</body>
</html>

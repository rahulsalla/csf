<?php
/**
 * index file for the data management
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


require_once($_SERVER['DOCUMENT_ROOT'].$configuration['phplivex_path'].'/PHPLiveX.php');
require_once("../includes/user.php");
checkauth('admin');

$ajax = new PHPLiveX(array("get_data","set_dashboard"));
$ajax->Run($configuration['phplivex_path'].'/phplivex.js');

function get_data()
{
  global $db;
  $result = $db->fetchAll('select dashboard, id, uid, max(timestamp),round(extract (\'epoch\' from (now()::timestamp without time zone - max("timestamp")))::numeric,2) as seen from clients group by dashboard, id, uid');
  return($result);
}

function set_dashboard($old_dashboard,$dashboard,$name,$id)
{
  global $db;
  $data['old_dashboard'] = $old_dashboard;
  $data['dashboard'] = $dashboard;
  $data['uid'] = $name;
  $data['id'] = $id;
  $sendinfo = json_encode($data);
  $db->fetchAll('insert into inter_process ("value", "function") values (\''.$sendinfo.'\',\'refresh_target\');');

  #    $result = $db->fetchAll('select dashboard, id, uid, max(timestamp),now()::timestamp without time zone - max("timestamp") as seen from clients group by dashboard, id, uid');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head> 
		<title>CSF Client Management</title> 
		<script src="<? echo $configuration['prototype_path'];?>/prototype.js" type="text/javascript"></script> 
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
timerId = setTimeout("get_data({\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\', \'onUpdate\': function(response){show_data(response);}})",delaytime);

function timedout()
{
  document.getElementById("timedoutmarker").style.visibility="visible";
}

function show_data(response)
{
  $("timedoutmarker").style.visibility="hidden";
  var active_list = '<table>';
  var i,j, table, row, cell, id;
  for(i=0; i< response.length; i++)
  {
    // check if row exists
    id = response[i]['dashboard']+response[i]['id'];
    if($(id)== undefined)
    {
      table = $('clienttable');
      row = table.insertRow(1);
      cell = row.insertCell(0);
      cell.innerHTML = response[i]['uid'];
      cell = row.insertCell(1);
      cell.innerHTML = '<input id="name'+id+'" type="text" size="15" value="'+response[i]['uid']+'"><input type="submit" value="Set" onClick="set_dashboard(\''+response[i]['dashboard']+'\', \''+response[i]['dashboard']+'\', $(\'name'+id+'\').value, \''+response[i]['id']+'\', {\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\'});$(\'name'+id+'\').value=\''+response[i]['uid']+'\';">';
      cell = row.insertCell(2);
      cell.innerHTML = response[i]['id'];
      cell = row.insertCell(3);
      cell.innerHTML = response[i]['dashboard'];
      cell.className = 'style0';
      cell = row.insertCell(4);
      cell.innerHTML = response[i]['seen'];
      if(response[i]['seen']>3) cell.className='style2';
      else cell.className='style1';
      cell.id = response[i]['dashboard']+response[i]['id'];
      cell = row.insertCell(5);
      cell.innerHTML = '<input type="submit" value="-1" onClick="set_dashboard(\''+response[i]['dashboard']+'\', \''+(response[i]['dashboard']-1)+'\', \''+response[i]['uid']+'\', \''+response[i]['id']+'\', {\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\'});$(\'send'+id+'\').value=\''+response[i]['dashboard']+'\';">					<input id="send'+id+'" type="text" size="3" value="'+response[i]['dashboard']+'"><input type="submit" value="Set" onClick="set_dashboard(\''+response[i]['dashboard']+'\', $(\'send'+id+'\').value, \''+response[i]['uid']+'\', \''+response[i]['id']+'\', {\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\'});$(\'send'+id+'\').value=\''+response[i]['dashboard']+'\';">					<input type="submit" value="+1" onClick="set_dashboard(\''+response[i]['dashboard']+'\', \''+(parseInt(response[i]['dashboard'])+1)+'\', \''+response[i]['uid']+'\', \''+response[i]['id']+'\', {\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\'});$(\'send'+id+'\').value=\''+response[i]['dashboard']+'\';">					';
    }
    else
    {
      cell = $(id);
      cell.innerHTML = response[i]['seen'];
      cell.id = id;
      if(response[i]['seen']>3) cell.className='style2';
      else cell.className='style1';

    }
    if(response[i]['seen']>19) $('clienttable').deleteRow(cell.parentNode.rowIndex);
  }
  active_list = active_list + '</table>';
  //				$('workspace').innerHTML = '<br>Active Client List<br><br>'+active_list;

  timerId = setTimeout("get_data({\'timeout\': 7000, \'onTimeout\': function(){ timedout(); }, \'content_type\': \'json\', \'onUpdate\': function(response){show_data(response);}})",delaytime);
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
			&nbsp;CSF - Clients
		</div>

		<div id="content"> 
			<div id="workspace" style="padding-left:10px; background-repeat: no-repeat;"><br>
			<table id="clienttable">
			    <tr class="style0a"><td>Name</td><td>Set Name</td><td>ID</td><td>Dashboard</td><td>Last Seen</td><td>Set Dashboard</td></tr>
			</table>
			</div> 

			<div id="welcome" class="details"> 
				<h1>Welcome</h1> 
				<p>Welcome to the Client Manager.</p>
				<p></p>
			</div>
		</div>

		<div id="timedoutmarker" style="position:absolute; top:10; left:10; width:10; height:10; background-color:red; visibility:hidden;"></div>

	</body>
</html>

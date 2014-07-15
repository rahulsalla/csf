<?php
session_start();

//Login info
#$section = 'azsmartback';
#require_once('../useraccess/auth.php');

if(isset($_GET['schema'])) $_SESSION['schema']	= $_GET['schema'];
if(isset($_SESSION['schema'])) $schema = $_SESSION['schema'];
else $schema = '';

$dashboard_setup = true;

require_once("Zend/Db.php");
require_once("Zend/Db/Select.php");

require_once("includes/config.php");


require_once($_SERVER['DOCUMENT_ROOT'].$configuration['phplivex_path']."/PHPLiveX.php");
require_once('includes/dependencies_functions.php');
require_once('includes/optionFunctions.php');
$config_path = "../../".$configuration ['phppgadmin_path'];

// Ajaxify Your PHP Functions   
	
$ajax = new PHPLiveX(array("get_options","get_templates","get_template_name","get_settings","validate","save_coordinates","get_stations","delete_station","create_link","delete_link","get_inter_process_updates", "refresh_dashboards", "get_screen_nodes","reset_table_station","add_processing_module"));

$ajax->Run($configuration['phplivex_path'].'/phplivex.js');
#die("test");		

echo '	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> ';

?>
<head> 
<title>Dependency Editor</title> 
<script src="<? echo $configuration['prototype_path'];?>/prototype.js" type="text/javascript"></script> 
  <script src="<? echo $configuration['scriptaculous_path'];?>/scriptaculous.js" type="text/javascript"></script> 
  <!--[if IE]><script type="text/javascript" src="<? echo $configuration['excanvas_path'];?>/excanvas.js"></script><![endif]--> 
  <script type="text/javascript"> 
  var even = false;
Event.observe(window, 'load', function() {
    $$('tr').each(function(row) {
	if(even) {
	  row.style['background'] = 'rgb(191, 191, 191)';
	}
	even = !even;
      });
  });
var options = 5;

</script>
	 
<style type="text/css" media="all"> 
  @import "css/dependencies.css";
</style> 
</head> 
<body onload="addtemplates();">
  <ul id="menu">
<!--  <li id="management" style="position:relative;height=3;z-index:3;" onmouseover="this.style.cursor='pointer';">Management</li> -->
  <li id="refresh" style="position:relative;height=3;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='refresh_dashboards($("refreshfield").value, {});'>Refresh</li>
  <script type="text/javascript">
  function handleKeyPress(e)
{
  var key=e.keyCode || e.which;
  if (key==13)
    {
      refresh_dashboards($("refreshfield").value, {});
    }
}
</script>
  <li id="management">	<input value="1" onkeypress="handleKeyPress(event,this.form)" style="position:relative;height=3;z-index:4;" id="refreshfield" size="1" type='text'></li>
  <li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='get_screen_nodes($("highlightfield").value, {"content_type": "json", "preloader": "preloader_l", "onFinish": function(response, xmlhttp){ highlight_nodes(response); }});'>Mark</li>
  <li id="management" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='get_screen_nodes($("highlightfield").value, {"content_type": "json", "preloader": "preloader_l", "onFinish": function(response, xmlhttp){ Unhighlight_nodes(response); }});'>UnMark</li>
<!--  <li id="management" style="position:relative;height=3;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='alert("working on it");'>Static</li> -->
  <li id="management">	<input value="1" onkeypress="handleKeyPress(event,this.form)" style="position:relative;height=3;z-index:4;" id="highlightfield" size="1" type='text'></li>
  <li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("index.php");'>Dashboards</li>
  <li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("../../<?php echo $config_path; ?>");'>Database</li>
  <li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("import/index.php");'>Import</li>
  <li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='reset_table_station({"preloader": "preloader_l", "onFinish": function(response, xmlhttp){ alert("Table station was reset"); }});'>Reset</li>
  <li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("help/help_dependencies.html");'>Help</li>
  <script type="text/javascript">
  var $openOptionsSVID;
var $openOptionsSID;
function test_reload(){
}

 function highlight_nodes(response)
{
  var m;
  for(m in response)
  {
     $('node_'+response[m].sid).style.background ='red';
  }
}
function Unhighlight_nodes(response)
{
  var i;
  for(i=0; i< response.length; i++) $('node_'+response[i].sid).style.background ='gray';
}
	
function updateOptionsBox(options,svid,close)
{
  
//document.getElementById("variable_"+svid).value = options;
  validate('variable_'+svid, options,'text', {'content_type': 'JSON', 'preloader': 'preloader_s', 'onUpdate': function(response,xmlhttp){var $data = response;updateOptions($openOptionsSVID, $openOptionsSID);make_update('variable_'+svid,$data);}});
  
  //document.getElementById("options_div").style.visibility = "visible";
 if(close)
    {
      document.getElementById("options_div").style.visibility = "hidden"; 
    }
}

function deleteDashboard(dashboard)
{
  var data;
  data = combine();
  delete data[dashboard];
  
sendData(JSON.stringify(data));
  //openOptions($openOptionsSVID,$openOptionsSID);
}
		
function copyDashboard(fromDashboard, toDashboard)
{
  var data;
  data = combine();
  if( data[toDashboard] == undefined )
    {
      
      data[toDashboard] = data[fromDashboard];
    }
  sendData(JSON.stringify(data));
}
		
function newDashboard(dashboard)
{
  //alert("test");
  var data;
  data = combine();
  if( data[dashboard] == undefined )
    {
      data[dashboard] = "";
    }		
  sendData(JSON.stringify(data));
}
function combine()
{
  var result	= new Object;
  var options_setup	= options;
			
  for(var o in options_setup)
    {
      if((options_setup[o].perdashboard=="no") && (options_setup[o].type!="Descriptor"))
	{
	  if(options_setup[o].repeatable=="no")
	    {
	      result[options_setup[o].name] = document.getElementById(options_setup[o].name).value;
	    }
	  else
	    {
	      var i;
	      i=1;
	      //alert(i);
	      // alert(options_setup[o].name + i + options_setup[o].repeatable);
	      while (document.getElementById(document.getElementById(options_setup[o].name + i).value) != null)
		{
		  result[options_setup[o].name][i] = document.getElementById(options_setup[o].name+i).value;
		  i++;
		}
	    }
	}
    }

  var i;
  i=1;
  while(document.getElementById("dashboard"+i) != null)
    {
      var m = new Object;
				 
      for(var o in options_setup)
	{
	  if((options_setup[o].perdashboard=="yes") && (options_setup[o].type!="Descriptor"))
	    {
	      m[options_setup[o].name] = document.getElementById(options_setup[o].name + "+" +document.getElementById("dashboard"+i).value).value;
	    }
	}
      result[document.getElementById("dashboard"+i).value] = m;
      i++;
    }
  return(result);
}
		
function sendData(theData)
{
  var svid = $openOptionsSVID;
  document.getElementById("options_div").value = theData ;
   
  
  updateOptionsBox(theData,$openOptionsSVID, false);
  openOptions($openOptionsSVID, $openOptionsSID);
//document.forms["hiddenForm"].submit();
}

function addprocessingmodule(svid, sid) {
    var name	= prompt("Please enter the name:","");
    name = name.replace(/\s+/g,"_").toLowerCase();
    if(name=="") alert("Empty names are not allowed");
    else {
	var opt	= document.createElement("OPTION");
	opt.text	= name;
	opt.value	= name;
	$("variable_"+svid).value=name;
	if($("variable_"+svid).value==name) alert("This module already exists.");
	else {
	    $("variable_"+svid).options.add(opt);
	    var newWindow = window.open("includes/edit_module.php?id="+sid+"&modulename="+name, "_blank");
	    newWindow.focus()
	}
    }
}

function openOptions(svid, sid)
{
    $openOptionsSVID = svid;
    $openOptionsSID = sid;
	
    document.getElementById("options_div").style.visibility = "visible";
    get_options(sid, {
	"content_type" : "JSON", "preloader" : "preloader_l", 
	"onFinish" : function(response, json) {
	    var data = eval('(' + response + ')');
	    document.getElementById("options_div").innerHTML= data[1];
	    window["options"] = data[2]; 
	}
    });
}
function updateOptions(svid, sid)
{
    $openOptionsSVID = svid;
    $openOptionsSID = sid;
    get_options(sid, {
	"content_type" : "JSON", "preloader" : "preloader_l", 
	"onFinish" : function(response, json) {
	    var data = eval('(' + response + ')');
	    document.getElementById("options_div").innerHTML= data[1];
	    window["options"] = data[2]; 
	}
    });
}		
		

</script>
</ul>
<hr class="clear" /> 
  <div id="template"> 
  </div>
  <div id="content"> 
  <div id="workspace" style="background-image: url(images/<?php echo $schema; ?>png); background-repeat: no-repeat;">
  </div> 
  <div id="welcome" class="details"> 
  <h1>Welcome</h1> 
  <p>Welcome to the graphical dependency editor.</p> 
  </div>

  <div id="setting_modules" class="details">
  <h1>Management</h1>
  </div>

  <div id="Logo" class="logo">
  &nbsp;CSF
  </div>


  <div id="setting_help" class="details">
	  <h1>Help</h1>
	  <p>Insert new stations by clicking on the module templates on the left.</p>
	  <p>Connect modules by pulling the output of one module to the input of the next.</p>
	  <br />
	  <p>More Questions?</p>
	  <p>Development lead: <a href="mailto:robert.pahle@asu.edu">Robert Pahle</a></p>
	  </div>

	  <div style="position:absolute; top:9px; left:135px; width:150px; height:10px;">
	  <span id="preloader_s" style="visibility:hidden;"><i>Saving...</i></span>  	
	  </div>
	  <div style="position:absolute; top:9px; left:135px; width:150px; height:10px;">
	  <span id="preloader_l" style="visibility:hidden;"><i>Loading...</i></span>  	
	  </div>



	  <div src ="" id="options_div" style="border: .2em dotted #900;position:fixed; overflow : auto; background: #DDDDDD; visibility:hidden; top:50px;left:50px;right:50px;bottom:50px;z-index:1000"></div>


	  <script type="text/javascript"> 
	  var nodes 				= new Array();
var node_id				= 1;
var links				= new Array();
var template_x			= 14;
var template_add		= 22;
String.prototype.px		= function(){return Number(this.replace(/px/,''));}
  var update 				= 0;
var simulation_running	= 0;
  var leftSideBarMargin = 260;
var topBarMargin = 35;
var gridIsChecked = new Boolean();
//gridIsChecked = FALSE;	
  //	var newImage 			= "url(images/<?php echo $schema; ?>png)";

  /*
   * Nodes:
   *   * have workspace div (id = node_id class = node)
   *   * have settings div (id = node_id_settings class = node_settings)
   *   * are draggable
   *   * onclick display settings div
   *   * on drag update all links that are associated with it
   *   * stay in $('workspace')
   *   * have x,y coords
   *   * all settings, etc stored in form
   *   * have and can change 'title'
   *   * add inputs
   *   * add outputs
   *
   * Links:
   *   * have workspace canvas (id = link_id class = link)
   *   * are updated by node drag function
   */
	 
  function addtemplate(json)
{

  var template = $('template');
  if ( template.hasChildNodes() )
    {
      while ( template.childNodes.length >= 1 )
	{
	  template.removeChild( template.firstChild );
	} 
    }
  //template_x = 0;
  var data = eval('(' + json + ')');

  for(i=0; i< data.length; i++)
    {
      template_x += template_add;
      template.insert('<div id="template_'+data[i].id+'" onclick="addnode('+data[i].id+');" onmouseover="this.style.cursor=\'pointer\';" class="node'+data[i].id+'" style="width:240px; left:10px; top:'+template_x+'px; z-index:2;"><p>'+data[i].name+'</p></div>');
    }
	
}

  function addtemplates() 
  {
    get_templates({"content_type": "JSON", "preloader": "preloader_l", "onFinish": function(response, json){ addtemplate(response); }});
  }

function retrieveStations() 
{
  get_stations({"content_type": "JSON", "preloader": "preloader_l", "onFinish": function(response, json){ loadnodes_by_name(response); }});
}

function removeStation(id)
{
  if(confirm("Do you want to remove module "+id+"?"))
    {
      $('node_'+id).hide();
      hidelinks(id);
      delete_station(id, {"content_type": "JSON", "preloader": "preloader_s"});
      $$('.details').invoke('hide');
      $('welcome').show();
    }
}

function removeLink(link_id, from_id, to_id)
{
  if(confirm("Do you want to remove the link from module "+from_id+" to module "+to_id+"?"))
    {
      delete_link(link_id, from_id, {"target": 'setting_'+from_id,"preloader": "preloader_s", "content_type": "text"});
      $('link_'+link_id).hide();
    }
}

function make_resources_draggable()
{
  pieces();
}

// Adds a node to the data structure
function addnode_by_name(template, x, y)
{
	$$('.details').invoke('hide');
	$('workspace').insert('<div id="node_'+template.id+'" style="position:absolute; top:"+y+"px; left:"+x+"px;" class="node'+template.tid+'" onmouseover="this.style.cursor=\'pointer\';"><p class="title">'+template.name+'</p></div>');
		
	//innodes
	if((typeof template.linkin == "undefined") || (template.linkin == 1))
	{
		$('node_'+template.id).insert('<div id="innode_'+template.id+'" class="in">&nbsp;</div>');
		Droppables.add('innode_'+template.id,	{
			accept: 'out',
			onDrop: function(element) {
				create_link(element.id, 'innode_'+template.id,{"content_type": "JSON", "preloader": "preloader_l", "onFinish": function(response){var $data = eval('(' + response + ')'); addlink($data);  }});
			}
		});
	}
		
	//outnodes
	if((typeof template.linkout == "undefined") || (template.linkout == 1))
	{
		$('node_'+template.id).insert('<div id="outnode_'+template.id+'" class="out">&nbsp;</div>');
		new Draggable($('outnode_'+template.id), {
			scroll: window,
			ghosting:true,
			onEnd: function() {
				$('outnode_'+template.id).style['left']	= 100 + 'px';
				$('outnode_'+template.id).style['top']	= 0 + 'px';
			}
	   
		});
	}
  
	if(x<=250) x = leftSideBarMargin;
	if(y<= 40) y = topBarMargin;
	$('node_'+template.id).style['left']	= x + 'px';
	$('node_'+template.id).style['top']	= y + 'px';
 
	if(template.moduletype=='module')
	{
		$('node_'+template.id).observe('dblclick', function() {
			var newWindow = window.open('includes/edit_module.php?id='+template.id, '_blank');
			newWindow.focus()
		});
	}

	new Draggable($('node_'+template.id), {
		scroll : window,
		change : function() {
			updateNodes(template.id);
		}
	});
	
	$('content').insert('<div id="setting_'+template.id+'" class="details"><h1>'+template.name+'</h1><p>The module number is '+template.id+'.</p><p>Loading the settings for this module...</p></div>');
	positionElements();
	$('node_'+template.id).observe('click', function() {
		save_coordinates(template.id, $('node_' + template.id).positionedOffset().toString(), {"content_type": "JSON", "preloader": "preloader_s"});
      $$('.details').invoke('hide');
      get_settings(template.id, {"target": 'setting_'+template.id,"preloader": "preloader_l", "content_type": "text","onFinish": function(response, xmlhttp){ test_reload(response); }});
      $('setting_'+template.id).show();
      
	  });		
}

function loadnodes_by_name(json)
{
  var i;
  var data = eval('(' + json + ')');
  //alert(data);
var nodes = data[0];

  
  for(i=0; i< nodes.length; i++){
 addnode_by_name(nodes[i],nodes[i].x, nodes[i].y);
  }		
  var nodelink = data[1];
  for(i=0; i< nodelink.length; i++)
    addlink(nodelink[i]);

  $$('.details').invoke('hide');
		
  $('welcome').show();		
}

	
function addnode(template_id)
{	
  var initX = leftSideBarMargin + 50;
  var initY = topBarMargin + 10;
  get_template_name(template_id,{"content_type": "JSON", "preloader": "preloader_l", "onFinish": function(response, xmlhttp){ var $data = eval('(' + response + ')');addnode_by_name($data, initX,initY); }});
}

function make_update(func,val)
{
  $(func).value = val;
}

// Adds a link to the data structure
function addlink($data) {
 var links_count = links.length;
  $('workspace').insert('<canvas id="link_'+$data.id+'" class="edge"></canvas>');
  $('outnode_'+$data.from_id).style['left'] = '100px';
  $('outnode_'+$data.from_id).style['cursor'] = 'move';
  $('outnode_'+$data.from_id).style['top'] = '0px';
  //alert(data);
  updatelink($('outnode_'+$data.from_id),$('innode_'+$data.to_id),$('link_'+$data.id));
  links[links_count] = new Array($data.id, $data.from_id, $data.to_id);
  //alert(links_count);
  //  retrieveStations();
}

function updatelinks(id)
{
  var i = 0;
  for(i = 0; i<links.length; i++)
    if((links[i][1] == id) || (links[i][2] == id))
      updatelink($('outnode_'+links[i][1]),$('innode_'+links[i][2]),$('link_'+links[i][0]));
}
function updateNodes(id)
{
  if($('node_'+id).offsetLeft <= leftSideBarMargin )
    {
      $('node_'+id).style['left'] = leftSideBarMargin + 'px';
    }
  if($('node_'+id).offsetTop <= topBarMargin )
    {
      $('node_'+id).style['top'] = topBarMargin + 'px';
    }
  save_coordinates(id, $('node_' + id).positionedOffset().toString(), {"content_type": "JSON", "preloader": "preloader_s"});

  updatelinks(id);
}
function lockNodesToGrid(boxName)
{
  if(boxName.checked){
    //gridIsChecked = true;
    alert(nodes.length);
    for(var i=0; i < nodes.length; i++)
      {
	
	var thisNode = nodes[i].id;
	var thisNodeOffset = $('node_'+thisNode).cumulativeOffset();
	var spaceBetweenNodesX = 70;
	var spaceBetweenNodesY = 17;
	var nodeWidth = 110;
	var nodeHeight = 18;

	//var gridColumn = Math.ceil((thisNodeOffset.left - leftSideBarMargin)/(nodeWidth/2 + spaceBetweenNodesX));
	//var gridRow = Math.ceil((thisNodeOffset.top - topBarMargin)/(nodeHeight + spaceBetweenNodesY));
	//thisNode.
	//alert(gridColumn);
	//$('node_'+thisNode).style['left'] = gridColumn*(nodeWidth/2 + spaceBetweenNodesX) + leftSideBarMargin +'px';
	//$('node_'+thisNode).style['top'] = (gridRow*(nodeHeight + spaceBetweenNodesY)) + topBarMargin +'px';
	var newX = parseInt((thisNodeOffset.left+ 55 -leftSideBarMargin) / 175, 10) * 175;
	var newY = parseInt((thisNodeOffset.top + 9 -topBarMargin) / 30, 10) * 30;
	$('node_'+thisNode).style['left'] = newX+leftSideBarMargin + 'px';
	$('node_'+thisNode).style['top'] = newY+topBarMargin + 'px';
	$('node_'+thisNode).x = newX+leftSideBarMargin;
	$('node_'+thisNode).y =newY+topBarMargin;
	updateNodes(thisNode);
	
save_coordinates(thisNode, $('node_' + thisNode).positionedOffset().toString(), {"content_type": "JSON", "preloader": "preloader_s"});
      }
  }
}
function hidelinks(id)
{
  var i = 0;
  for(i = 0; i<links.length; i++)
    if((links[i][1] == id) || (links[i][2] == id))
      $('link_'+links[i][0]).hide();
}
 
function updatelink(node1, node2, link) {
   if(!node1 || !node2 || !link) {return;}
  // Get x,y coords for node link points
  var node1offset = node1.cumulativeOffset();
  var node1dims = node1.getDimensions();
  var node1x = node1offset.left + node1dims.width;
  var node1y = node1offset.top + node1dims.height/2;
  var node2offset = node2.cumulativeOffset();
  var node2x = node2offset.left;
  var node2y = node2offset.top + node2.offsetHeight/2;
  var buffer = 100;

  var context = link.getContext('2d');
  if(!context) {return;}
 
  context.clearRect(0,0,link.width, link.height);
  context.beginPath();
  if(node1x <= node2x && node1y <= node2y) {
    // Upper left quadrant
    link.style['left'] = node1x - buffer + 'px';
    link.style['top'] = node1y - buffer + 'px';
    link.width = node2x - node1x + 2 * buffer;
    link.height = node2y - node1y + 2 * buffer;
    context.moveTo(buffer,buffer);
    context.bezierCurveTo(2* buffer, buffer, link.width - 2 * buffer, link.height - buffer, link.width - buffer, link.height - buffer);
  } else if(node1x <= node2x && node1y > node2y) {
    // Lower left quadrant
    link.style['left'] = node1x - buffer + 'px';
    link.style['top'] = node2y  - buffer + 'px';
    link.width = node2x - node1x + 2 * buffer;
    link.height = node1y - node2y + 2 * buffer;
    context.moveTo(buffer, link.height - buffer)
      context.bezierCurveTo(2 * buffer, link.height - buffer, link.width - 2 * buffer, buffer, link.width - buffer, buffer);
  } else if (node1x > node2x && node1y <= node2y) {
    // Upper right quadrant
    link.style['left'] = node2x - buffer + 'px';
    link.style['top'] = node1y - buffer + 'px';
    link.width = node1x - node2x + 2 * buffer;
    link.height = node2y - node1y + 2 * buffer;
    context.moveTo(link.width - buffer, buffer);
    context.bezierCurveTo(link.width, buffer, 0, link.height - buffer, buffer, link.height - buffer);
  } else {
    // Lower right quadrant
    link.style['left'] = node2x - buffer + 'px';
    link.style['top'] = node2y - buffer + 'px';
    link.width = node1x - node2x + 2 * buffer;
    link.height = node1y - node2y + 2 * buffer;
    context.moveTo(link.width - buffer, link.height - buffer);
    context.bezierCurveTo(link.width, link.height - buffer, 0, buffer, buffer, buffer);
  }
  context.stroke();
  context.closePath();
  link.style['zIndex'] = '0';
  link.color= 'rgb(255,0,0)';
  node1.parentNode.parentNode.style['zIndex'] = '1';
  node2.parentNode.parentNode.style['zIndex'] = '1';
}
 
function constrain(n, lower, upper) {
  if (n > upper) return upper;
  else if (n < lower) return lower;
  else return n;
}
 
function keepinparent(object, x, y) {
  var element = object.getDimensions();
  var parent = object.parentNode.getDimensions();
  var offset = object.parentNode.viewportOffset();
  return [
	  constrain(x, offset.left, offset.left + parent.width - element.width),
	  constrain(y, offset.top, offset.top + parent.height - element.height)
	  ];
}
 
function positionElements() {
  var workspace = $('workspace').positionedOffset();
  var viewport = document.viewport.getDimensions();
  $('workspace').style['width'] = viewport.width - workspace.left - leftSideBarMargin + 'px';
  $('workspace').style['height'] = viewport.height - workspace.top - topBarMargin + 'px';

  /* 
     $$('.details').each(function(element) {
     var offset = $('workspace').cumulativeOffset();
     var dim = $('workspace').getDimensions();
     //element.style['left'] = dim.width + offset.left + 10 + 'px';
     //element.style['top'] =  offset.top + 'px';
     //element.style['height'] = dim.height + 'px';
     //element.style['background'] = '#EEEEEE';
     //element.style['overflow'] = 'auto';
     //element.style['overflow-y'] = 'hidden';
     //alert(element.style['left']+' - '+element.style['top']);
			
     element.style['left'] = '0px';
     element.style['top'] = 150 + offset.top +'px';
     element.style['height'] = 'inherit';
     });
  */
  /*	Speed increae	
	$$('.node').each(function(element) {
	var offset = element.viewportOffset();
	var new_offset = keepinparent(element, offset.left, offset.top);
	element.style['left'] = new_offset.left + 'px';
	element.style['top'] = new_offset.top + 'px';
	});
  */
}
 
Event.observe(window, 'load', function() {
    retrieveStations();
    positionElements();
    $$('.details').invoke('hide');
    $('welcome').show();
  });

Event.observe(window, 'resize', positionElements);
 
$('management').observe('click', function() {
    $$('.details').invoke('hide');
    $('setting_modules').show();
  });

	
function update_inter_process_changes(changes) {
    var changes = eval('(' + changes + ')');
    if(changes.length > 0) {
	for(i=0; i < changes.length; i++) {
	    if($('variable_'+changes[i].svid)!=null) {
		if(changes[i].fun == 'update') {
		    if($('variable_'+changes[i].svid).value != changes[i].value) $('variable_'+changes[i].svid).value = changes[i].value;
		}
	    }
	    if($('node_'+changes[i].sid)!=null) {
		if(changes[i].fun == 'update') {
		    if(changes[i].name=='name') {
			$('node_'+changes[i].sid).childNodes[0].innerHTML	= changes[i].value;
		    }
		    if(changes[i].name=='x') {
			$('node_'+changes[i].sid).style['left'] = changes[i].value+'px';
			updatelinks(changes[i].sid);
		    }
		    if(changes[i].name=='y') {
			$('node_'+changes[i].sid).style['top']				= changes[i].value+'px';
			updatelinks(changes[i].sid);
		    }
		}
	    }
	    if(changes[i].fun == 'refresh') {
		window.location.reload();
	    }
	}
    }
    update = 0;
}

function check_for_changes()
{
  if(update==0)
    {
      update = 1;
      get_inter_process_updates({"preloader": "preloader_l", "content_type": "JSON","onFinish": function(response, xmlhttp){ update_inter_process_changes(response); }});
    }
}

new PeriodicalExecuter(check_for_changes,1);

</script> 
 
</div> 
</body> 
</html> 

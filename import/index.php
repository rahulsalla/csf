<?php
  /**
   * index file for the data management
   *
   * PHP version 5
   *
   * @category Decision_Theater_Software
   * @package  Csf
   * @author   Robert Pahle <robert.pahle@asu.edu>
   * @license  http://decisiontheater.org/license.txt ASU Software License
   * @link     http://decisiontheater.org/csf
   */

require_once "Zend/Db.php";
require_once "../includes/config.php";
#require_once "../dist/phplivex/PHPLiveX.php";
$config_path = "../../".$configuration['phppgadmin_path'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head> 
		<title>CSF Import</title> 
		<script src="../dist/prototype/prototype.js" type="text/javascript"></script> 
		<script src="../dist/scriptaculous/scriptaculous.js" type="text/javascript"></script> 
		<!--[if IE]><script type="text/javascript" src="dist/excanvas/excanvas.js"></script><![endif]--> 
		<style type="text/css" media="all"> 
		  @import "../css/dependencies.css";
		</style>
		<script type="text/javascript">

			var leftSideBarMargin = 260;
			var topBarMargin = 35;

			function set_iframe(url)
			{
				$$('.details').invoke('hide');
				$('workspace').innerHTML='<iframe src="' +url+'" width="100%" height="100%" frameBorder="0"><p>You need an iframe capable browser.</p></iframe>';
			}

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

		</script> 
	</head>
	<body>

  		<ul id="menu">
			<li id="refresh" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("../dependencies.php");'>Dependecy Editor</li>
			<li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("../index.php");'>Dashboards</li>
			<li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("../../<?php echo "$config_path";?>");'>Database</li>
            <li id="Highlight" style="position:relative;z-index:3;" onmouseover="this.style.cursor='pointer';" onclick='window.open("../help/help_import.html");'>Help</li>
		</ul>
		
		<div id="Logo" class="logo">
			&nbsp;CSF - Import
		</div>
		
		<div id="content"> 

			<div id="shapefile_module" onclick="set_iframe('shp/index.php');" onmouseover="this.style.cursor='pointer';" class="node" style="width:240px; left:10px; top:40px; z-index:2;">
				<p>Shapefile</p>
			</div>

			<div id="csv_module" onclick="set_iframe('csv/index.php');" onmouseover="this.style.cursor='pointer';" class="node" style="width:240px; left:10px; top:70px; z-index:2;">
				<p>CSV</p>
			</div>

			<div id="workspace" style="background-repeat: no-repeat;"></div> 

			<div id="welcome" class="details"> 
				<h1>Welcome</h1> 
				<p>Welcome to the importer.</p>
				<p>Pick from the green list of importable formats.</p>
			</div>
	
		</div>		
	</body> 
</html> 

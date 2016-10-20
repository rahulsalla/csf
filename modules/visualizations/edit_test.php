<?php
function getsetup_viz_edit_test(){
  $options = array();

  $options[1]["name"] = "x";
  $options[1]["description"] = "X Location: ";
  $options[1]["detail"] = "Enter a number representing the x coordinate of the visualization";
  $options[1]["type"] = "Integer";
  $options[1]["link"] = "link";
  $options[1]["lookup"] = '';
  $options[1]["default"] = 10;
  $options[1]["optionsl"] = "no";
  $options[1]["repeatable"] = "no";
  $options[1]["perdashboard"] = "yes";
  $options[1]["dependenton"] = "";

  $options[2]["name"] = "y";
  $options[2]["description"] = "Y Location: ";
  $options[2]["detail"] = "Enter a number representing the y coordinate of the visualization";
  $options[2]["type"] = "Integer";
  $options[2]["link"] = "link";
  $options[2]["lookup"] = '';
  $options[2]["default"] = 10;
  $options[2]["optionsl"] = "no";
  $options[2]["repeatable"] = "no";
  $options[2]["perdashboard"] = "yes";
  $options[2]["dependenton"] = "";

  $options[3]["name"] = "width";
  $options[3]["description"] = "Width: ";
  $options[3]["detail"] = "Enter a number representing the width of the visualization";
  $options[3]["type"] = "Integer";
  $options[3]["link"] = "link";
  $options[3]["lookup"] = '';
  $options[3]["default"] = 100;
  $options[3]["optionsl"] = "no";
  $options[3]["repeatable"] = "no";
  $options[3]["perdashboard"] = "yes";
  $options[3]["dependenton"] = "";

  $options[4]["name"] = "height";
  $options[4]["description"] = "Height: ";
  $options[4]["detail"] = "Enter a number representing the height of the visualization";
  $options[4]["type"] = "Integer";
  $options[4]["link"] = "link";
  $options[4]["lookup"] = '';
  $options[4]["default"] = 100;
  $options[4]["optionsl"] = "no";
  $options[4]["repeatable"] = "no";
  $options[4]["perdashboard"] = "yes";
  $options[4]["dependenton"] = "";

  return $options;
}

function reload_viz_edit_test($sid, $value, $options, $setup){ 
  $dashboard_options = $options["dashboard_options"];
  $xLoc = str_replace("px", "", $dashboard_options["x"]);
  $yLoc = str_replace("px", "", $dashboard_options["y"]);

  return "
      <div id='velement".$sid."' style='top:".($yLoc + 4)."; left: ".($xLoc + 4).";'>
	<div id='element".$sid."'>
	</div>
      </div>
  ";
}

function place_viz_edit_test($sid, $value, $options, $setup){
  $dashboard_options = $options["dashboard_options"];

  return "
    <script>;
      ".js_reload_edit_test($sid)."
      ".js_reload_edit_test_update($sid)."
      ".js_mark($sid)."
    </script>
    ".style($sid, $dashboard_options)."
    ".reload_viz_edit_test($sid, $value, $options, $setup)."
  ";
} 

function style($sid, $dashboard_options){
  $height = str_replace("px", "", $dashboard_options["height"]);
  $width = str_replace("px", "", $dashboard_options["width"]);

  return "
    <style>
      #velement".$sid."{
	position: absolute;
	z-index: 100;
	height: ".($height + 4)."px;
	width: ".($width + 4)."px;
      }

      #element".$sid."{
	height: ".$height."px;
	width: ".$width."px;
	position: relative;
	background-color: steelblue;
      }
    </style>
  ";
}

function js_reload_edit_test($sid){
  return "
    function reload".$sid."(dashboard, response){
      alert('reload');
    }
  ";
}

function js_reload_edit_test_update($sid){
  return "
    function reload_update".$sid."(response){
      alert('reload_update');
    }
  ";
}

function js_mark($sid){
  return "
    function mark".$sid."(dashboard, response){
      alert('mark');
    }
  ";
}
?>

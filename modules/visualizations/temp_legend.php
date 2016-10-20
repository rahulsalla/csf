<?php

function getsetup_viz_temp_legend()
{

  return($options);
}

function place_viz_temp_legend($sid, $value, $options, $setup)	//function place_viz_temp_legend($name, $value, $x, $y, $options, $sid)
{
  global $db;
  $ret_val = "
    <div id='element".$sid."'</div>
    ".temp_legend_add_gradient($sid)."
    ".temp_legend_add_function($sid)."
    ".reload_viz_temp_legend($sid, $value, $options, $setup)."
  ";

  return $ret_val;
}

function reload_viz_temp_legend($sid, $value, $options, $setup){
  return "
    <script>
      legend".$sid."labels();
    </script>
  ";
}

function temp_legend_css($sid){

}

function temp_legend_add_function($sid){
  return "
  <script>
    function legend".$sid."labels(){
      var legendGroup = d3.select('#legend".$sid."group'),
	legendSvg = d3.select('#legend".$sid."svg'),
	xOffset = parseInt(d3.select('#legend".$sid."rect').attr('x')),
	yOffset = parseInt(d3.select('#legend".$sid."rect').attr('y')),
	height = parseInt(d3.select('#legend".$sid."rect').attr('height')),
	width = parseInt(d3.select('#legend".$sid."rect').attr('width'));

      var numSteps = 10;

      for(var i = 0; i < numSteps + 1; i++){
	var percentage = 100/numSteps*i,
	  textY = yOffset + (height - (height * percentage/100));

	var text = legendGroup.append('text')	
	  .attr('font-color', 'black')
	  .attr('font-size', '10px')
	  .attr('font-weight', 'bold')
	  .attr('font', 'Verdana')
	  .attr('y', textY)
	  .text(Math.round(percentage) + '% - ');

	var textWidth = text.node().getBBox().width,
	  textHeight = text.node().getBBox().height;

	text.attr('x', parseInt(legendSvg.attr('width')) - width - textWidth - 5); 
	text.attr('y', parseInt(text.attr('y')) + textHeight/4); 
      }
    }
  </script>
  ";
}

function temp_legend_add_gradient($sid){
  return "
  <script>
    var svg".$sid."width = 100,
	svg".$sid."height = 300
	legend".$sid."height = 250,
	legend".$sid."width = 25;

    var legend".$sid."svg = d3.select('#element".$sid."').append('svg:svg')
	.attr('width', svg".$sid."width)
	.attr('height', svg".$sid."height)
	.attr('id', 'legend".$sid."svg');

    var gradient = legend".$sid."svg.append('svg:defs')
      .append('svg:linearGradient')
	.attr('id', 'gradient')
	.attr('x1', '0%')
	.attr('y1', '0%')
	.attr('x2', '0%')
	.attr('y2', '100%')
	.attr('spreadMethod', 'pad');

    gradient.append('svg:stop')
      .attr('offset', '0%')
      .attr('stop-color', '#0c0')
      .attr('stop-opacity', 1);

    gradient.append('svg:stop')
      .attr('offset', '100%')
      .attr('stop-color', '#c00')
      .attr('stop-opacity', 1);

    var legend".$sid."group = legend".$sid."svg.append('svg:g')
      .attr('width', svg".$sid."width)
      .attr('height', legend".$sid."height)
      .attr('id', 'legend".$sid."group');

    legend".$sid."group.append('svg:rect')
      .attr('width', legend".$sid."width)
      .attr('height', legend".$sid."height)
      .attr('x', svg".$sid."width - legend".$sid."width)
      .attr('y', (svg".$sid."height - legend".$sid."height)/2)
      .attr('id', 'legend".$sid."rect')
      .style('fill', 'url(#gradient)');
  </script>
  ";
}





?>

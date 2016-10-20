<?
function getsetup_viz_new_barchart(){
  $options["_CREDITS"] = "Main Developer: Gregory Moon, Rahul Salla";
  $options["_MODULEDESCRIPTION"] = "A barchart.";

  $options[0]["name"] = "height";
  $options[0]["description"] = "The height of the module.";
  $options[0]["detail"] = "";
  $options[0]["type"] = "Integer";
  $options[0]["link"] = "";
  $options[0]["lookup"] = "";
  $options[0]["default"] = 500;
  $options[0]["optional"] = "no";
  $options[0]["repeatable"] = "no";
  $options[0]["perdashboard"] = "yes";
  $options[0]["dependenton"] = ""; 

  $options[1]["name"] = "width";
  $options[1]["description"] = "The width of the module.";
  $options[1]["detail"] = "";
  $options[1]["type"] = "Integer";
  $options[1]["link"] = "";
  $options[1]["lookup"] = "";
  $options[1]["default"] = 960;
  $options[1]["optional"] = "no";
  $options[1]["repeatable"] = "no";
  $options[1]["perdashboard"] = "yes";
  $options[1]["dependenton"] = ""; 

  $options[2]["name"] = "x";
  $options[2]["description"] = "The x coordinate of the module.";
  $options[2]["detail"] = "";
  $options[2]["type"] = "Integer";
  $options[2]["link"] = "";
  $options[2]["lookup"] = "";
  $options[2]["default"] = 10;
  $options[2]["optional"] = "no";
  $options[2]["repeatable"] = "no";
  $options[2]["perdashboard"] = "yes";
  $options[2]["dependenton"] = ""; 

  $options[3]["name"] = "y";
  $options[3]["description"] = "The y coordinate of the module.";
  $options[3]["detail"] = "";
  $options[3]["type"] = "Integer";
  $options[3]["link"] = "";
  $options[3]["lookup"] = "";
  $options[3]["default"] = 10;
  $options[3]["optional"] = "no";
  $options[3]["repeatable"] = "no";
  $options[3]["perdashboard"] = "yes";
  $options[3]["dependenton"] = ""; 

  $options[4]["name"] = "tableName";
  $options[4]["description"] = "The table to get data from.";
  $options[4]["detail"] = "";
  $options[4]["type"] = "Table";
  $options[4]["link"] = "";
  $options[4]["lookup"] = "";
  $options[4]["default"] = "";
  $options[4]["optional"] = "no";
  $options[4]["repeatable"] = "no";
  $options[4]["perdashboard"] = "no";
  $options[4]["dependenton"] = ""; 

  $options[5]["name"] = "negativeBarColor";
  $options[5]["description"] = "The color of columns with negative values.";
  $options[5]["detail"] = "";
  $options[5]["type"] = "Color";
  $options[5]["link"] = "";
  $options[5]["lookup"] = "";
  $options[5]["default"] = "#a52a2a";
  $options[5]["optional"] = "no";
  $options[5]["repeatable"] = "no";
  $options[5]["perdashboard"] = "yes";
  $options[5]["dependenton"] = ""; 

  $options[6]["name"] = "positiveBarColor";
  $options[6]["description"] = "The color of columns with positive values.";
  $options[6]["detail"] = "";
  $options[6]["type"] = "Color";
  $options[6]["link"] = "";
  $options[6]["lookup"] = "";
  $options[6]["default"] = "#4682b4";
  $options[6]["optional"] = "no";
  $options[6]["repeatable"] = "no";
  $options[6]["perdashboard"] = "yes";
  $options[6]["dependenton"] = ""; 

  $options[7]["name"] = "axisFontSize";
  $options[7]["description"] = "The size of the font used for the axis labels.";
  $options[7]["detail"] = "";
  $options[7]["type"] = "Integer";
  $options[7]["link"] = "";
  $options[7]["lookup"] = "";
  $options[7]["default"] = "10";
  $options[7]["optional"] = "no";
  $options[7]["repeatable"] = "no";
  $options[7]["perdashboard"] = "yes";
  $options[7]["dependenton"] = ""; 

  $options[8]["name"] = "axisFont";
  $options[8]["description"] = "The font used for the axis labels.";
  $options[8]["detail"] = "";
  $options[8]["type"] = "Text";
  $options[8]["link"] = "";
  $options[8]["lookup"] = "";
  $options[8]["default"] = "Verdana";
  $options[8]["optional"] = "no";
  $options[8]["repeatable"] = "no";
  $options[8]["perdashboard"] = "yes";
  $options[8]["dependenton"] = ""; 

  return $options;
}

function place_viz_new_barchart($sid, $value, $options, $setup){
  $dashboard_options = $options["dashboard_options"];
  $height = str_replace('px', '', $dashboard_options["height"]);
  $width = str_replace('px', '', $dashboard_options["width"]);
  $data = get_data($options);


  return "
    <script>".viz_new_barchart_js_comma_separate($sid)."</script>
    ".js_updates($sid)."
    ".div_style($sid, $dashboard_options)."
    ".barchart_style($dashboard_options)."
    <div id = 'element".$sid."'>
    </div>
    ".js_draw_barchart($sid, $data, $dashboard_options)."
    <script>
      d3.select('#element".$sid."')
	.datum($data)
	.call(columnChart$sid());
/*
	.width(".$width.")
	.height(".$height.")
	.x(function(d, i) { return d[0]; })
	.y(function(d, i) { return d[1]; });
*/
    </script>
  ";
}


function reload_viz_new_barchart($sid, $value, $options, $setup){
  $dashboard_options = $options["dashboard_options"];
  $height = str_replace('px', '', $dashboard_options["height"]);
  $width = str_replace('px', '', $dashboard_options["width"]);
  $data = get_data($options);

  return "
    <script>
      $('element".$sid."').remove();
      d3.select('body').append('div').attr('id', 'element$sid');
      d3.select('#element".$sid."')
	.datum($data)
	.call(columnChart$sid());
/*
	.x(function(d, i) { return d[0]; })
	.y(function(d, i) { return d[1]; });
*/
    </script>
  ";
}

function js_updates($sid){
  return "
    <script>
      function reload".$sid."(dashboard, response){
	place_viz(dashboard, ".$sid.", {'onUpdate': function(response, xmlhttp) { reload_update".$sid."(response)}});
	document.getElementById('element".$sid."').style.border = '';
      }

      function reload_update".$sid."(response){
      }

      function mark".$sid."(dashboard, response){
	document.getElementById('element".$sid."').style.border = '2px solid red';
      }
    </script>
  ";
}

function js_draw_barchart($sid, $data, $dashboard_options){
  $height = str_replace('px', '', $dashboard_options["height"]);
  $width = str_replace('px', '', $dashboard_options["width"]);
  $pos_bar_color = "#".str_replace('#', '', $dashboard_options["positiveBarColor"]);
  $neg_bar_color = "#".str_replace('#', '', $dashboard_options["negativeBarColor"]);


  return "
    <script>
      function columnChart$sid(){
	var margin = {top: 30, right: 10, bottom: 50, left: 150},
	  width = ".$width.", height = ".(.84 * $height).", xRoundBands = .2,
	  xValue = function(d) { return d[0]; },
	  yValue = function(d) { return d[1]; },
	  xScale = d3.scale.ordinal(),
	  yScale = d3.scale.linear(),
	  yAxis = d3.svg.axis().scale(yScale).orient('left'),
	  xAxis = d3.svg.axis().scale(xScale);

	function chart(selection){
	  selection.each(function(data){

	    data = data.map(function(d, i){
	      return [xValue.call(data, d, i), yValue.call(data, d, i)];
	    });

	    xScale
	      .domain(data.map(function(d) { return d[0]; }))
	      .rangeRoundBands([0, width - margin.left - margin.right], xRoundBands);

	    data.push(['', 0]);
	    yScale
	      .domain(d3.extent(data.map(function(d) { return parseFloat(d[1]); })))
	      .range([height - margin.top - margin.bottom, 0])
	      .nice();
	    data.pop();

	    var svg = d3.select(this).selectAll('svg').data([data]);

	    var gEnter = svg.enter().append('svg').append('g');
	    gEnter.append('g').attr('class', 'bars');
	    gEnter.append('g').attr('class', 'y axis');
	    gEnter.append('g').attr('class', 'x axis');
	    gEnter.append('g').attr('class', 'x axis zero');

	    svg .attr('width', width)
		.attr('height', height);

	    svg.append('text')
	      .attr('x', width/2)
	      .attr('y', 0 - (margin.top / 2))
	      .attr('text-anchor', 'middle')
	      .style('font-size', '20px')
	      .style('text-decoration', 'underline')
	      .style('fill', '#4682b4')
	      .text('Title');

	    var g = svg.select('g')
	      .attr('transform', 'translate(' + margin.left + ',' + margin.top + ')');

	    var bar = svg.select('.bars').selectAll('.bar').data(data);
	    bar.enter().append('rect');
	    bar.exit().remove();
	    bar.attr('class', function(d, i) { return d[1] < 0 ? 'bar negative' : 'bar positive'; })
	      .on('mouseover',function(){
                d3.select(this)
                    .append('svg:title')
                    .text(function(d){return d[0] + \"\\nValue: \" + commaSeparateNumber".$sid."(d[1])})
                    })
	      .on('mouseout',function(){ d3.select(this) })
	      .attr('x', function(d) { return X(d); })
	      .attr('y', function(d, i) { return d[1] < 0 ? Y0() : Y(d); })
	      .attr('width', xScale.rangeBand())
	      .attr('height', function(d, i) { return Math.abs( Y(d) - Y0() ); });

	    g.select('.x.axis') 
	      .attr('transform', 'translate(0,' + (height - margin.top - margin.bottom) + ')')
	      .call(xAxis.orient('bottom'));

	    g.select('.x.axis.zero')
	      .attr('transform', 'translate(0,' +  Y0() + ')')
	      .call(xAxis.tickFormat('').tickSize(0));

	    g.select('.y.axis')
	      .call(yAxis);
	  });
	}
	
	function X(d){
	  return xScale(d[0]);
	}

	function Y0(){
	  return yScale(0);
	}

	function Y(d){
	  return yScale(d[1]);
	}

	chart.margin = function(_){
	  if(!arguments.length) return margin;
	  margin = _;
	  return chart;
	}

	chart.width = function(_){
	  if(!arguments.length) return width;
	  width = _;
	  return chart;
	}
      
	chart.height = function(_){
	  if(!arguments.length) return height;
	  height = _;
	  return chart;
	}

	chart.x = function(_){
	  if(!arguments.length) return xValue;
	  xValue = _;
	  return chart;
	}

	chart.y = function(_){
	  if(!arguments.length) return yValue;
	  yValue = _;
	  return chart;
	}

	return chart;
      }
    </script>
  ";
}

function get_data($options){
  global $db;
  
  $data = array();
  $sql = "select * from ".$options["tableName"].";";
  $result = $db ->fetchAll($sql);

  foreach($result as $key => $value){
    $node = array();
    //$node["name"] = $value["key"];
    //$node["value"] = $value["value"];

    array_push($node, $value["key"]);
    array_push($node, $value["value"]);
    array_push($data, $node);
  }


  return json_encode($data);
}

function barchart_style($dashboard_options){
  $pos_bar_color = "#".str_replace('#', '', $dashboard_options["positiveBarColor"]);
  $neg_bar_color = "#".str_replace('#', '', $dashboard_options["negativeBarColor"]);

  return "
    <style>
      .bar.positive{
	fill: ".$pos_bar_color.";
      }

      .bar.negative{
	fill: ".$neg_bar_color.";
      }

      .axis text{
	font: ".$dashboard_options["axisFontSize"]."px ".$dashboard_options["axisFont"].";
      }

      .axis path,
      .axis line{
	fill: none;
	stroke: #000;
	shape-rendering: crispEdges;
      }
    </style>
  ";
}

function div_style($sid, $dashboard_options){
  $height = str_replace("px", "", $dashboard_options["height"]);
  $width = str_replace("px", "", $dashboard_options["width"]);
  $x = str_replace("px", "", $dashboard_options["x"]);
  $y = str_replace("px", "", $dashboard_options["y"]);

  return "
    <style>
      #element".$sid."{
	position: absolute;
	height: ".$height."px;
	width: ".$width."px;
	left: ".$x."px;
	top: ".$y."px;
      }
    </style>
  ";
}

function viz_new_barchart_js_comma_separate($sid){
  return "
    function commaSeparateNumber".$sid."(val){
      if(val > 1){
	while (/(\d+)(\d{3})/.test(val.toString())){
	  val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
	}
      }

      return val;
    }
  ";
}

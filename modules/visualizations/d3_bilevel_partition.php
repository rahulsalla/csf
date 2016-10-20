<?
function getsetup_viz_d3_bilevel_partition()
{
    $options['_CREDITS']                = 'Main Developer: Jie Fang, Shrijal Gandhi';
    $options['_MODULEDESCRIPTION']      = '<p>the donut pie chart describes the distribution of the percentage of the given data.</p>
                                           <p>Please specify sufficient colors for the data rows</p>
                                           <ul>
                                           <li>Column 0: id</li>
                                           <li>Column 1: number</li>
                                           <li>Column ..</li>
                                           <li>Column N: number</li>
                                           </ul>
                                        For more information
                                         <a href="http:d3js.org">Data-Driven Documents</a>';
        $options[1]['name']                             = 'x';
        $options[1]['description']                      = 'Placement x coordinate';
        $options[1]['detail']                           = 'Default: 500';
        $options[1]['type']                             = 'Integer';
        $options[1]['link']                             = 'link to further information..?';
        $options[1]['lookup']                           = '';
        $options[1]['default']                          = '150';
        $options[1]['optional']                         = 'no';
        $options[1]['repeatable']                       = 'no';
        $options[1]['perdashboard']                     = 'yes';
        $options[1]['dependenton']                      = '';

        $options[2]['name']                             = 'y';
        $options[2]['description']                      = 'Placement y coordinate';
        $options[2]['detail']                           = 'Default: 500';
        $options[2]['type']                             = 'Integer';
        $options[2]['link']                             = 'link to further information..?';
        $options[2]['lookup']                           = '';
        $options[2]['default']                          = '500';
        $options[2]['optional']                         = 'no';
        $options[2]['repeatable']                       = 'no';
        $options[2]['perdashboard']                     = 'yes';
        $options[2]['dependenton']                      = '';

   $options[3]['name']                               = 'width';
        $options[3]['description']                     = 'Width of the chart';
        $options[3]['detail']                          = 'Default: 600';
        $options[3]['type']                            = 'Integer';
        $options[3]['link']                            = 'link to further information..?';
        $options[3]['lookup']                          = '';
        $options[3]['default']                         = '600';
        $options[3]['optional']                        = 'no';
        $options[3]['repeatable']                      = 'no';
        $options[3]['perdashboard']                    = 'yes';
        $options[3]['dependenton']                     = '';

        $options[4]['name']                            = 'height';
        $options[4]['description']                     = 'Height of the chart';
        $options[4]['detail']                          = 'Default: 500';
        $options[4]['type']                            = 'Integer';
        $options[4]['link']                            = 'link to further information..?';
        $options[4]['lookup']                          = '';
        $options[4]['default']                         = '500';
        $options[4]['optional']                        = 'no';
        $options[4]['repeatable']                      = 'no';
        $options[4]['perdashboard']                    = 'yes';
        $options[4]['dependenton']                     = '';


        $options[15]['name']                            = 'loadingHighlightColor';
        $options[15]['description']                     = 'Color of the highlight box that is shown when a module is loading';
        $options[15]['detail']                          = 'This is the color of the highlight box that is shown when a module is loading. Default: red';
        $options[15]['type']                            = 'Color';
        $options[15]['link']                            = 'link to further information..?';
        $options[15]['lookup']                          = '';
        $options[15]['default']                         = 'red';
        $options[15]['optional']                        = 'no';
        $options[15]['repeatable']                      = 'no';
        $options[15]['perdashboard']                    = 'yes';
        $options[15]['dependenton']                     = '';

        $options[14]['name']                            = 'loadingHighlightThickness';
        $options[14]['description']                     = 'Thickness of the highlight box that is shown when a module is loading (in pixels)';
        $options[14]['detail']                          = 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
        $options[14]['type']                            = 'Text';
        $options[14]['link']                            = 'link to further information..?';
        $options[14]['lookup']                          = '';
        $options[14]['default']                         = '2';
        $options[14]['optional']                        = 'no';
        $options[14]['repeatable']                      = 'no';
        $options[14]['perdashboard']                    = 'yes';
        $options[14]['dependenton']                     = '';





  return($options);
}
function place_viz_d3_bilevel_partition($sid, $value, $options, $setup)
{
        $dashboard_options = $options['dashboard_options'];
        $dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
        $dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
        $str='';
        $str.= '<div id="cover'.$sid.'">';

        $str.= '<div id="velement'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
        $str.= '</div>';

    //$str.= '<div id="celement'.$sid.'" style="position:absolute;z-index:0; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
        $str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
    $str.= '</div>';
    $str.= '</div>';

    $content = reload_viz_d3_bilevel_partition($sid,$value,$options,$setup);


  $str.= '        <script language="JavaScript" type="text/javascript">^M
                                function reload'.$sid.'(dashboard, response)^M
                                {^M
                                        place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});^M
                                }^M
                                function mark'.$sid.'(dashboard, response)^M
                                {^M
                                        document.getElementById("elementm'.$sid.'").style.borderLeft=\'2px solid red\';^M
                                }^M
                                function reload_update'.$sid.'(response)^M
                                {^M
                                        document.getElementById("cover'.$sid.'").innerHTML = response;^M
                                }^M
                        </script>';
                







        global $db;
	$str = '
	<style>

	circle,
	path {
  	cursor: pointer;
	}

	circle {
	fill: none;
  	pointer-events: all;
	}

	</style>

	<body>
	<script src="http://d3js.org/d3.v3.min.js"></script>

	<script>


	var margin = {top: 500, right: 600, bottom: 500, left: 600},
    	radius = Math.min(margin.top, margin.right, margin.bottom, margin.left) - 100;

	var hue = d3.scale.category10();

	var luminance = d3.scale.sqrt()
    	.domain([0, 1e6])
    	.clamp(true)
    	.range([90, 20]);

	var svg = d3.select("body").append("svg")
    	.attr("width", margin.left + margin.right+600)
    	.attr("height", margin.top + margin.bottom + 600)
  	.append("g")
    	.attr("transform", "translate(" + margin.left + "," + margin.top + ")");




	var partition = d3.layout.partition()
    	.sort(function(a, b) { return d3.ascending(a.name, b.name); })
    	.size([2 * Math.PI, radius]);

	var arc = d3.svg.arc()
    	.startAngle(function(d) { return d.x; })
    	.endAngle(function(d) { return d.x + d.dx - .01 / (d.depth + .5); })
    	.innerRadius(function(d) { return radius / 3 * d.depth; })
    	.outerRadius(function(d) { return radius / 3 * (d.depth + 1) - 1; });

	d3.json("modules/visualizations/bilevel.json", function(error, root) {


		/**
		Variable partition : This sets the layout of the JSON data
		*/

	partition
      	.value(function(d) { return d.size; })
	.nodes(root)
	.forEach(function(d) {
        d._children = d.children;
        d.sum = d.value;
        d.key = key(d);
        d.fill = fill(d);  	
     	 });
 	



	partition
      .children(function(d, depth) { return depth < 2 ? d._children : null; })
      .value(function(d) { return d.sum; });

	var center = svg.append("circle")
	.data(partition.nodes(root).slice(1))
      .attr("r", radius / 3)
      .on("click", zoomOut);

  	center.append("title")
      .text("zoom out");

       var path = svg.selectAll("path")
      .data(partition.nodes(root).slice(1))
      .enter().append("path")
      .attr("d", arc)

      .style("fill", function(d) { return d.fill; })
      .each(function(d) { this._current = updateArc(d); })
      .on("click", zoomIn); 
	//path.append("title")
     	//.attr("font-style","italic")
      	//.text(function(d){return "Name of the sector is "+d.name;});


	path.append("svg:title").attr("font-style","italic").text(function(d){return "Name is "+ d.name +  " Level "+ d.depth; });



	var text = svg.selectAll("text")
 	.data(partition.nodes(root).slice(1))
    	.enter().append("text")
  	.attr("x", function(d) { if( d.depth != 0  )return (d.y+15); else return d.y-15; })
  	.attr("dx", "8") // margin
  	.attr("dy", ".35em") // vertical-align
 	 .attr("font-size",function(d) { if( d.depth == 1 )return "20px"; else return "12px"; })
	
	.attr("stroke", function(d) { return "#000"; })
	.attr("stroke-width", function(d) { return ".2px"; })
	//   .attr("font-weight", "bolder")
    	.attr("font-style", "italic")
  	//.text(function(d) { if(d.depth == 1)return d.name; })
    	.text(function(d) { if(d.depth <=1 )return d.name; })

 	.attr("transform", function(d) {   return "rotate(" + computeTextRotation(d) + ")"; })
 	;

  	function computeTextRotation(d) {
 
  		var angle = (d.x + d.dx / 2) - Math.PI / 2;
  		return (angle / Math.PI * 180);
	}


	var c;
	var count =0;var parent_child = "a ";
	var color_array = [];
	var name_array = [];

	partition.sort(function(a, b) { return d3.ascending(a.name, b.name); });
	
		


	function zoomIn(p) {
    	if (p.depth > 1) p = p.parent;
    	if (!p.children) return;
    	zoom(p, p);
  	}

  	function zoomOut(p) {
    	if (!p.parent) return;
    	zoom(p.parent, p);
  	}

  	// Zoom to the specified new root.
  	function zoom(root, p) {
    	if (document.documentElement.__transition__) return;

    	// Rescale outside angles to match the new layout.
    	var enterArc,
        exitArc,
        outsideAngle = d3.scale.linear().domain([0, 2 * Math.PI]);

    	function insideArc(d) {
      	return p.key > d.key
          ? {depth: d.depth - 1, x: 0, dx: 0} : p.key < d.key
          ? {depth: d.depth - 1, x: 2 * Math.PI, dx: 0}
          : {depth: 0, x: 0, dx: 2 * Math.PI};
    	}

    	function outsideArc(d) {
      	return {depth: d.depth + 1, x: outsideAngle(d.x), dx: outsideAngle(d.x + d.dx) - outsideAngle(d.x)};
    	}

    	center.datum(root);

    	// When zooming in, arcs enter from the outside and exit to the inside.
    	// Entering outside arcs start from the old layout.
    	if (root === p) enterArc = outsideArc, exitArc = insideArc, outsideAngle.range([p.x, p.x + p.dx]);

    	path = path.data(partition.nodes(root).slice(1), function(d) { return d.key; });
	text = text.data(partition.nodes(root).slice(1), function(d) { return d.key; });


    	// When zooming out, arcs enter from the inside and exit to the outside.
    	// Exiting outside arcs transition to the new layout.
    	if (root !== p) enterArc = insideArc, exitArc = outsideArc, outsideAngle.range([p.x, p.x + p.dx]);

    	d3.transition().duration(750).each(function() {
      	path.exit().transition()
          .style("fill-opacity", function(d) { return d.depth === 1 + (root === p) ? 1 : 0; })
          .attrTween("d", function(d) { return arcTween.call(this, exitArc(d)); })
          .remove();

      	path.enter().append("path")
          .style("fill-opacity", function(d) { return d.depth === 2 - (root === p) ? 1 : 0; })
          .style("fill", function(d) { return d.fill; })
          .on("click", zoomIn)
          .each(function(d) { this._current = enterArc(d); }).append("title").text(function(d){return "Name of the sector is "+ d.name});;// path

      	path.transition()
          .style("fill-opacity", 1)
          .attrTween("d", function(d) { return arcTween.call(this, updateArc(d)); });


	text.enter().append("text")
    	.attr("transform", function(d) { return "rotate(" + computeTextRotation(d) + ")"; })
    	.attr("x", function(d) {return radius / 3 * d.depth; })
    	.attr("dx", "2") // margin
    	.attr("dy", ".35em") // vertical-align
    	//.text(function(d) { return d.name; });
	.attr("font-size",function(d) { if( d.depth <= 1 )return "15px";else if( d.depth == 2 ) return "8px"; })
	 .text(function(d) { if(d.depth <=1 )return d.name; })	

	text.transition()
   	.attr("x", function(d) { return d.y; })
  	//.attr("dx", "2") // margin
  	.attr("dx", function(d) { if((d.depth == 1) && (d.y > 175) )return "-60"; else return "2";}) 
	.attr("dy", ".35em") // vertical-align
  	.attr("font-size",function(d) { if( d.depth == 1 )return "20px"; else return "15px"; })

	.attr("stroke", function(d) { return "#000"; })
		.attr("stroke-width", function(d) { return ".2px"; })
	//   .attr("font-weight", "bolder")
    	.attr("font-style", "italic")
	.attr("font-size",function(d) { if( d.depth <= 1 )return "15px";else if( d.depth == 2 ) return "8px"; })
  	//.text(function(d) { return d.name; })
    .text(function(d) { if(d.depth <=1 )return d.name; })

 	.attr("transform", function(d) {   return "rotate(" + computeTextRotation(d) + ")"; })
 	;

	text.exit().transition()
    	.style("fill-opacity", function(d) { return d.depth === 1 + (root === p) ? 1 : 0; })
    	.remove()
	;


    	});
      }


    });


     	function key(d) {
      	var k = [], p = d;
      	while (p.depth) k.push(p.name), p = p.parent;
      	return k.reverse().join(".");
     	}

	/**
	* This method fills the color of the path with the required hue and luminance
	*
	*/
	function fill(d) {
  	var p = d;
  	while (p.depth > 1) p = p.parent;
  	var c = d3.lab(hue(p.name));
  	c.l = luminance(d.sum);
  	return c;
	}

	function arcTween(b) {
  	var i = d3.interpolate(this._current, b);
  	this._current = i(0);
  	return function(t) {
    	return arc(i(t));
  	};
	}

	function updateArc(d) {
  	return {depth: d.depth, x: d.x, dx: d.dx};
	}

	d3.select(self.frameElement).style("height", margin.top + margin.bottom + "px");
	//document.write("Shrijal");

	</script>
	';
echo $str;
 return $str;
	
}
function reload_viz_d3_bilevel_partition($sid, $value, $options, $setup ) { 
	//echo $content;
//	return $content;
    }



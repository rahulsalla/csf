<?
function getsetup_viz_d3_time_unusual()
{
     $options['_CREDITS']                = 'Main Developer: Jie Fang';
    $options['_MODULEDESCRIPTION']      = '<p>Regular table: this table is a 7*24 matrix. Each row represents 24 event numbers in each hour.</p>    <p>Columns:</p>        <ul>        <li>Column 0: number</li>
        <li>Column 1: number</li>
        <li>Column...</li>        <li>Column 23: number</li>        </ul>
<p>Unusual table: each row in the table represents an unusual record which includes a day-of-week(1-7) and a time-of-day(0000-2300)</p>       <p>Columns:</p>        <ul>        
		 <li>Column 0(day-of-week): number</li>
         <li>Column 1(time-of-day): number</li>
       </ul> For more information about D3 library, please, refer to <a href="http:d3js.org">Data-Driven Documents</a>';    
	
	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Placement x coordinate';
	$options[10]['detail']				= 'Default: 500';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= ''; 
	$options[10]['default']				= '500';
	$options[10]['optional']			= 'no';
	$options[10]['repeatable']			= 'no';
	$options[10]['perdashboard']		= 'yes';
	$options[10]['dependenton']			= '';

	$options[20]['name']				= 'y';
	$options[20]['description']			= 'Placement y coordinate';
	$options[20]['detail']				= 'Default: 500';
	$options[20]['type']				= 'Integer';
	$options[20]['link']				= 'link to further information..?';
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '500';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']		= 'yes';
	$options[20]['dependenton']			= '';	
	
	$options[30]['name']				= 'width';
	$options[30]['description']			= 'Width of the chart';
	$options[30]['detail']				= 'Default: 950';
	$options[30]['type']				= 'Integer';
	$options[30]['link']				= 'link to further information..?';
	$options[30]['lookup']				= ''; 
	$options[30]['default']				= '950';
	$options[30]['optional']			= 'no';
	$options[30]['repeatable']			= 'no';
	$options[30]['perdashboard']		= 'yes';
	$options[30]['dependenton']			= '';		

	$options[40]['name']				= 'height';
	$options[40]['description']			= 'Height of the chart';
	$options[40]['detail']				= 'Default: 300';
	$options[40]['type']				= 'Integer';
	$options[40]['link']				= 'link to further information..?';
	$options[40]['lookup']				= ''; 
	$options[40]['default']				= '300';
	$options[40]['optional']			= 'no';
	$options[40]['repeatable']			= 'no';
	$options[40]['perdashboard']		= 'yes';
	$options[40]['dependenton']			= '';	

    $options[80]['name']                = 'tablename';
    $options[80]['description']         = 'From this table';
    $options[80]['detail']              = 'choose the table you want to graph. refer to the module description for table format';
    $options[80]['type']                = 'Table';
    $options[80]['link']                = 'link to further information..?';
    $options[80]['lookup']              = ''; 
    $options[80]['default']             = '';
    $options[80]['optional']            = 'no';
    $options[80]['repeatable']          = 'no';
    $options[80]['perdashboard']        = 'no';
    $options[80]['dependenton']         = '';	

    $options[90]['name']                = 'unusual_tablename';
    $options[90]['description']         = 'Unusual table name';
    $options[90]['detail']              = 'choose the table you want to graph. refer to the module description for table format';
    $options[90]['type']                = 'Table';
    $options[90]['link']                = 'link to further information..?';
    $options[90]['lookup']              = ''; 
    $options[90]['default']             = '';
    $options[90]['optional']            = 'no';
    $options[90]['repeatable']          = 'no';
    $options[90]['perdashboard']        = 'no';
    $options[90]['dependenton']         = '';	

	$options[85]['name']                = 'unusual_hcolor';
    $options[85]['description']         = 'Unusual highlight color';
    $options[85]['detail']              = 'choose the table you want to graph. refer to the module description for tabl     e format';
    $options[85]['type']                = 'Color';
    $options[85]['link']                = 'link to further information..?';
    $options[85]['lookup']              = ''; 
    $options[85]['default']             = 'black';
    $options[85]['optional']            = 'no';
    $options[85]['repeatable']          = 'no';
    $options[85]['perdashboard']        = 'yes';
    $options[85]['dependenton']         = '';


    $options[91]['name']                = 'unusual_tod_column';
    $options[91]['description']         = 'Unusual column name of Time of Day';
    $options[91]['detail']              = 'choose the table you want to graph. refer to the module description for table format';
    $options[91]['type']                = 'Text';
    $options[91]['link']                = 'link to further information..?';
    $options[91]['lookup']              = ''; 
    $options[91]['default']             = '';
    $options[91]['optional']            = '';
    $options[91]['repeatable']          = 'no';
    $options[91]['perdashboard']        = 'no';
    $options[91]['dependenton']         = '';	

    $options[92]['name']                = 'unusual_dow_column';
    $options[92]['description']         = 'Unusual column name of Day of Weeek';
    $options[92]['detail']              = 'choose the table you want to graph. refer to the module description for table format';
    $options[92]['type']                = 'Text';
    $options[92]['link']                = 'link to further information..?';
    $options[92]['lookup']              = ''; 
    $options[92]['default']             = '';
    $options[92]['optional']            = '';
    $options[92]['repeatable']          = 'no';
    $options[92]['perdashboard']        = 'no';
    $options[92]['dependenton']         = '';	

	$options[250]['name']				= 'hAxisTextSize';
	$options[250]['description']		        = 'Font size of the horizontal axis text';
	$options[250]['detail']				= 'This is the font size of the horizontal axis text. Default: 12';
	$options[250]['type']				= 'Text';
	$options[250]['link']				= 'link to further information..?';
	$options[250]['lookup']				= ''; 
	$options[250]['default']			= '12';
	$options[250]['optional']			= 'no';
	$options[250]['repeatable']			= 'no';
	$options[250]['perdashboard']		= 'yes';
	$options[250]['dependenton']		= '';

    $options[251]['name']               = 'hAxisTextColor';
    $options[251]['description']        = 'Font color of the horizontal axis text';
    $options[251]['detail']             = 'This is the font color of the horizontal axis text. Default: black';
    $options[251]['type']               = 'Color';
    $options[251]['link']               = 'link to further information..?';
    $options[251]['lookup']             = '';
    $options[251]['default']            = 'black';
    $options[251]['optional']           = 'no';
    $options[251]['repeatable']         = 'no';
    $options[251]['perdashboard']       = 'yes';
    $options[251]['dependenton']        = '';
	
	
	$options[280]['name']				= 'vAxisTextSize';
	$options[280]['description']		= 'Font size of the weekday text';
	$options[280]['detail']				= 'This is the font size of the weekday text. Default: 12';
	$options[280]['type']				= 'Text';
	$options[280]['link']				= 'link to further information..?';
	$options[280]['lookup']				= ''; 
	$options[280]['default']			= '12';
	$options[280]['optional']			= 'no';
	$options[280]['repeatable']			= 'no';
	$options[280]['perdashboard']		= 'yes';
	$options[280]['dependenton']		= '';


    $options[290]['name']               = 'vAxisTextColor';
    $options[290]['description']        = 'Font color of the weekday text';
    $options[290]['detail']             = 'This is the font color of the weekday text. Default: black';
    $options[290]['type']               = 'Color';
    $options[290]['link']               = 'link to further information..?';
    $options[290]['lookup']             = ''; 
    $options[290]['default']            = 'black';
    $options[290]['optional']           = 'no';
    $options[290]['repeatable']         = 'no';
    $options[290]['perdashboard']       = 'yes';
    $options[290]['dependenton']        = '';

	$options[390]['name']				= 'loadingHighlightColor';
	$options[390]['description']		= 'Color of the highlight box that is shown when a module is loading';
	$options[390]['detail']				= 'This is the color of the highlight box that is shown when a module is loading. Default: red';
	$options[390]['type']				= 'Color';
	$options[390]['link']				= 'link to further information..?';
	$options[390]['lookup']				= ''; 
	$options[390]['default']			= 'red';
	$options[390]['optional']			= 'no';
	$options[390]['repeatable']			= 'no';
	$options[390]['perdashboard']		= 'yes';
	$options[390]['dependenton']		= '';
	
	$options[400]['name']				= 'loadingHighlightThickness';
	$options[400]['description']		= 'Thickness of the highlight box that is shown when a module is loading (in pixels)';
	$options[400]['detail']				= 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
	$options[400]['type']				= 'Text';
	$options[400]['link']				= 'link to further information..?';
	$options[400]['lookup']				= ''; 
	$options[400]['default']			= '2';
	$options[400]['optional']			= 'no';
	$options[400]['repeatable']			= 'no';
	$options[400]['perdashboard']		= 'yes';
	$options[400]['dependenton']		= '';
	return($options);
}

function place_viz_d3_time_unusual($sid, $value, $options, $setup)
{
	$dashboard_options = $options['dashboard_options'];
	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y']	= str_replace('px','',$dashboard_options['y']);
	$str='';
	$str.= '<div id="cover'.$sid.'">';

	$str.= '<div id="velement'.$sid.'" style="position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.($dashboard_options['width']).'; height:'.($dashboard_options['height']).';">';
    $str.= '<div id="visTOD'.$sid.'" align="center"></div>';
	$str.= '</div>';
	$str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid #'.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
	$str.= '</div>';
	
    $dwidth = (int)($dashboard_options['width']);
    $dheight = (int)($dashboard_options['height']);
    
    $tileheight = ($dheight-3)/8;
    $tilewidth =($dwidth-3)/28;

    if ($tileheight < $tilewidth)
        $tilewidth = $tileheight;
    else
        $tileheight = $tilewidth;

    $content = reload_viz_d3_time_unusual($sid,$value,$options,$setup);
    

$str.= '
<style type="text/css">
        #visTOD'.$sid.' {
                clear: all;
                margin-top: 20px;
                margin-bottom: 20px;
                height: 370px;
                height: 285px;
            }    
        #tiles'.$sid.' {
                font-size: 12px;
                clear: both;
            }
            #tiles'.$sid.' th {
                vertical-align: top;
                padding: 3px;
                color: #444;
                font-family: “HelveticaNeue-Light”, “Helvetica Neue Light”, “Helvetica Neue”, Helvetica, Arial, “Lucida Grande”, sans-serif;
            }
            #tiles'.$sid.' tr th {
                padding-top: 12px;
            }
            #tiles'.$sid.' tr:first-child th {
                padding-top: 3px;
            }
            #tiles'.$sid.' td {
                -webkit-perspective: 1000;
            }
            #tiles'.$sid.' .tile'.$sid.' {
                width: '.$tilewidth.'px;
                height: '.$tileheight.'px;
                position: relative;
                -webkit-transform-style: preserve-3d;
                -webkit-transition: 0.7s;
            }
            .face'.$sid.' {
                position: absolute;
                -webkit-backface-visibility: hidden;
                width:'.($tilewidth-2).'px;
                height: '.($tileheight-2).'px;
                background: #eee;
                border: 1px solid white;
                -moz-border-radius: 4px;
                border-radius: 4px;
            }
            #tiles'.$sid.' td.sel .face'.$sid.' {
                border-color: black;
            }
            .face'.$sid.'.hidden {
                display: none;
            }
            #tiles'.$sid.' td.dim .screen {
                opacity: 0.6;
            }
            .face'.$sid.'.back {
                -webkit-transform: rotateY(180deg);
            }
            .tile'.$sid.' .screen {
                background: white;
                opacity: 0.0;
                width: 36px;
                height: 36px;
                position: absolute;
                z-index: 1337;
                -moz-border-radius: 4px;
                border-radius: 4px;
                border: 1px solid white;
            }
            #hourly_values {
                float: left;
                width: 200px;
            }

            #hourly_values svg {
                width: 300px;
                height: 170px
            }
            #hourly_values svg rect {
                fill: #ddd;
            }
            #hourly_values svg rect.sel {
                fill: #444;
            }
            #hourly_values svg text {
                fill: #444;
            }
            #hourly_values svg text.hidden {
                display: none;
            }
            /* 9 buckets green to red */
            .rbow2'.$sid.' .q1-9 {
                background: #1A9850;
            }
            .rbow2'.$sid.' .q2-9 {
                background: #66BD63;
            }
            .rbow2'.$sid.' .q3-9 {
                background: #A6D96A;
            }
            .rbow2'.$sid.' .q4-9 {
                background: #D9EF8B;
            }
            .rbow2'.$sid.' .q5-9 {
                background: #FFFFBF;
            }
            .rbow2'.$sid.' .q6-9 {
                background: #FEE08B;
            }
            .rbow2'.$sid.' .q7-9 {
                background: #FDAE61;
            }
            .rbow2'.$sid.' .q8-9 {
                background: #F46D43;
            }
            .rbow2'.$sid.' .q9-9 {
                background: #D73027;
            }
            .unusual'.$sid.' {
                border: 4px solid '.$dashboard_options['unusual_hcolor'].';
                margin: -3px 0px 0px -3px;
            }
        
</style>

<script type="text/javascript">
        var buckets = 9,
        colorScheme'.$sid.' = "rbow2'.$sid.'",
        days = [
            { name: "Monday", abbr: "Mo" },
            { name: "Tuesday", abbr: "Tu" },
            { name: "Wednesday", abbr: "We" },
            { name: "Thursday", abbr: "Th" },
            { name: "Friday", abbr: "Fr" },
            { name: "Saturday", abbr: "Sa" },
            { name: "Sunday", abbr: "Su" }
        ],
        hours = ["0000", "0100", "0200", "0300", "0400", "0500", "0600", "0700", "0800", "0900", "1000", "1100", "1200", "1300", "1400", "1500", "1600", "1700", "1800", "1900", "2000", "2100", "2200", "2300"];
        
        /* ************************** */
        function getCalcs'.$sid.'(data) {
            
            var min = 1,
                max = -1;
            
            // calculate min , max
            for (var d = 0; d < data.length; d++) {
                for (var h = 0; h < data[d].length; h++) {
                
                    var tot = data[d][h];
                    
                    if (tot > max) {
                        max = tot;
                    }
                    
                    if (tot < min) {
                        min = tot;
                    }
                }
            }
            
            return {"min": min, "max": max};
        }

        function reColorTiles'.$sid.'(data,unusuals) {
            
            var calcs = getCalcs'.$sid.'(data),
                range = [];
            for (var i = 1; i <= buckets; i++) {
                range.push(i);
            }
            
            var bucket = d3.scale.quantize().domain([0, calcs.max > 0 ? calcs.max : 1]).range(range),
                  side = d3.select("#tiles'.$sid.'").attr("class");
            
            if (side === "front") {
                side = "back";
            } else {
                side = "front";
            }
            for (var d = 0; d < data.length; d++) {
                for (var h = 0; h < data[d].length; h++) {

                    var sel = "#d'.$sid.'" + d + "h" + h + " .tile'.$sid.' ." + side,
                        val = data[d][h];
                    
                    // erase all previous bucket designations on this cell
                    for (var i = 1; i <= buckets; i++) {
                        var cls = "q" + i + "-" + buckets;
                        d3.select(sel).classed(cls , false);
                    }
                    
                    // set new bucket designation for this cell
                    var cls = "q" + (val > 0 ? bucket(val) : 0) + "-" + buckets;

                    var idx = d*24 + h;
                    if (idx in unusuals) 
                    {
                        cls += " unusual'.$sid.'";                        
                    }
                
                    d3.select(sel).classed(cls, true);
                }
            }
            flipTiles'.$sid.'();
        }


        function flipTiles'.$sid.'() {

            var oldSide = d3.select("#tiles'.$sid.'").attr("class"),
                newSide = "";
            
            if (oldSide == "front") {
                newSide = "back";
            } else {
                newSide = "front";
            }
            var flipper = function(h, d, side) {
                return function() {
                    var sel = "#d'.$sid.'" + d + "h" + h + " .tile'.$sid.'",
                        rotateY = "rotateY(180deg)";
                    
                    if (side === "back") {
                        rotateY = "rotateY(0deg)";  
                    }
                    d3.select(sel).style("-webkit-transform", rotateY);
                };
            };
            
            for (var h = 0; h < hours.length; h++) {
                for (var d = 0; d < days.length; d++) {
                    var side = d3.select("#tiles'.$sid.'").attr("class");
                    setTimeout(flipper(h, d, side), (h * 20) + (d * 20) + (Math.random() * 100));
                }
            }
            d3.select("#tiles'.$sid.'").attr("class", newSide);
        }


        function createTiles'.$sid.'(data) {

            var html = "<table id=\"tiles'.$sid.'\" class=\"front\">";

            html += "<tr><th><div>&nbsp;</div></th>";

            for (var h = 0; h < hours.length; h++) {
            html += "<th class=\"h" + h + "\"><font color=\"'.$dashboard_options['hAxisTextColor'].'\">" + hours[h] + "</th>";
            }
            
            html += "</tr>";

            for (var d = 0; d < days.length; d++) {
                html += "<tr class=\"d" + d + "\">";
                html += "<th><font color=\"'.$dashboard_options['vAxisTextColor'].'\">" + days[d].abbr + "</th>";
                for (var h = 0; h < hours.length; h++) {
                    html += "<td id=\"d'.$sid.'" + d + "h" + h + "\" class=\"d" + d + " h" + h + "\" title=\"Count: "+data[d][h]+"\"><div class=\"tile'.$sid.'\"><div class=\"face'.$sid.' front\"></div><div class=\"face'.$sid.' back\"></div></div></td>";
                }
                html += "</tr>";
            }
            
            html += "</table>";
            d3.select("#visTOD'.$sid.'").html(html);
        }

        function draw_d3_time_unusual'.$sid.'(data,unusuals) {    

            //change original div height

            d3.select("#visTOD'.$sid.'").classed(colorScheme'.$sid.', true);

            createTiles'.$sid.'(data);
            reColorTiles'.$sid.'(data,unusuals);

            var table = d3.select("table#tiles'.$sid.'");
            var table_height = table.property("clientHeight");
            var table_width = table.property("clientWidth");
            d3.select("#velement'.$sid.'").style("height",table_height+30);
            d3.select("#velement'.$sid.'").style("width",table_width);

            // tiles mouseover events
            d3.selectAll("#tiles'.$sid.' td").on("mouseover",function() {
                var selected = d3.select(this); 
                selected.classed("sel",true);
                })
                .on("mouseout", function() {
                d3.select(this).classed("sel",false);

                }); 
        }


        '.$content.'

        draw_d3_time_unusual'.$sid.'(data'.$sid.',unusuals'.$sid.');
</script>';


	$str.= '</div>';
	
	$str.= '	<script language="JavaScript" type="text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid #'.$dashboard_options['loadingHighlightColor'].'\';
				function reload'.$sid.'(dashboard, response)
				{
					place_viz(dashboard, '.$sid.', {\'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
				}
				function reload_update'.$sid.'(response)
				{
					eval(response);
					draw_d3_time_unusual'.$sid.'(data'.$sid.', unusuals'.$sid.');
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					
				}
			</script>';
		return($str);
}



function reload_viz_d3_time_unusual($sid, $value, $options, $setup)
{
    global $db;

    $sql = "select * from ".$options['tablename'];
    $result = $db->fetchAll($sql);

    $data = "var data".$sid." = [";
    $i = 0;
    foreach($result as $row)
    {   
        if($i>0)$data .= ",";
        $data .= "[";
        $j = 0;
        foreach($row as $item) 
        {
            if($j>0)$data .= ",";
            $data .= $item;
            $j++;
        }
        $i++;
        $data .="]";
    }
    $data .= "];";

    $tod_column = $options['unusual_tod_column'];
    $dow_column = $options['unusual_dow_column'];

    $sql = "SELECT * FROM ".$options['unusual_tablename'];
    $result = $db->fetchAll($sql);
    $data .= "var unusuals".$sid."={";
    foreach($result as $row)
    {
        $data .= ($row[$dow_column]-1)*24 + $row[$tod_column]/100;
        #$data .= ":".$row["count"].",";
        $data .= ":0,";
    }         
    $data .="};";

    return $data;
}

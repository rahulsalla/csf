<?php
function getsetup_input_kdemap()
{
        $options['_CREDITS']                            = 'Main Developters: Robert Pahle, Jaycen Horton.';
        $options['_MODULEDESCRIPTION']          = 'More info will follow.';

        $options[10]['name']                            = 'x';
        $options[10]['description']                     = 'Please select the x coordinate';
        $options[10]['detail']                          = 'This sets the x coordinate to place the element on the dashboard.';
        $options[10]['type']                            = 'Integer';
        $options[10]['link']                            = 'link to further information..?';
        $options[10]['lookup']                          = '';
        $options[10]['default']                         = '10';
        $options[10]['optional']                        = 'no';
        $options[10]['repeatable']                      = 'no';
        $options[10]['perdashboard']                    = 'yes';
        $options[10]['dependenton']                     = '';

        $options[20]['name']                            = 'y';
        $options[20]['description']                     = 'Please select the y coordinate';
        $options[20]['detail']                          = 'This sets the y coordinate to place the element on the dashboard.';
        $options[20]['type']                            = 'Integer';
        $options[20]['link']                            = 'link to further information..?';
        $options[20]['lookup']                          = '';
        $options[20]['default']                         = '10';
        $options[20]['optional']                        = 'no';
        $options[20]['repeatable']                      = 'no';
        $options[20]['perdashboard']                    = 'yes';
        $options[20]['dependenton']                     = '';

        $options[45]['name']                            = 'width';
        $options[45]['description']                     = 'Width of map';
        $options[45]['detail']                          = 'This is the width of the map in pixels';
        $options[45]['type']                            = 'Integer';
        $options[45]['link']                            = 'link to further information..?';
        $options[45]['lookup']                          = '';
        $options[45]['default']                         = '400';
        $options[45]['optional']                        = 'no';
        $options[45]['repeatable']                      = 'no';
        $options[45]['perdashboard']                    = 'yes';
        $options[45]['dependenton']                     = '';

        $options[55]['name']                            = 'height';
        $options[55]['description']                     = 'Height of map';
        $options[55]['detail']                          = 'This is the height of the map in pixels';
        $options[55]['type']                            = 'Integer';
        $options[55]['link']                            = 'link to further information..?';
        $options[55]['lookup']                          = '';
        $options[55]['default']                         = '400';
        $options[55]['optional']                        = 'no';
        $options[55]['repeatable']                      = 'no';
        $options[55]['perdashboard']                    = 'yes';
        $options[55]['dependenton']                     = '';

        $options[60]['name']                            = 'tablename';
        $options[60]['description']                     = 'Table name';
        $options[60]['detail']                          = 'If you like to use a table to draw your data, provide the table name';
        $options[60]['type']                            = 'Table';
        $options[60]['link']                            = 'link to further information..?';
        $options[60]['lookup']                          = '';
        $options[60]['default']                         = '';
        $options[60]['optional']                        = 'no';
        $options[60]['repeatable']                      = 'no';
        $options[60]['perdashboard']                    = 'no';
        $options[60]['dependenton']                     = '';

        $options[290]['name']                           = 'loadingHighlightColor';
        $options[290]['description']            = 'Color of the highlight box that is shown when a module is loading';
        $options[290]['detail']                         = 'This is the color of the highlight box that is shown when a module is loading. Default: red';
        $options[290]['type']                           = 'Color';
        $options[290]['link']                           = 'link to further information..?';
        $options[290]['lookup']                         = '';
        $options[290]['default']                        = 'red';
        $options[290]['optional']                       = 'no';
        $options[290]['repeatable']                     = 'no';
        $options[290]['perdashboard']           = 'yes';
        $options[290]['dependenton']            = '';

        $options[300]['name']                           = 'loadingHighlightThickness';
        $options[300]['description']            = 'Thickness of the highlight box that is shown when a module is loading (in pixels)';
        $options[300]['detail']                         = 'This is the thickness of the highlight box that is shown when a module is loading (in pixels). Default: 2';
        $options[300]['type']                           = 'Text';
        $options[300]['link']                           = 'link to further information..?';
        $options[300]['lookup']                         = '';
        $options[300]['default']                        = '2';
        $options[300]['optional']                       = 'no';
        $options[300]['repeatable']                     = 'no';
        $options[300]['perdashboard']           = 'yes';
        $options[300]['dependenton']            = '';

        return($options);
}

function validate_kdemap($id, $value, $function=null)
{
    global $db;

    if($function=='extent') {
        $result = $db->fetchAll('select value from station_variables where "svid"=\''.$id.'\'');
        $options = json_decode($result[0]['value'],true);
        $options['extent'] = $value;
        $value = json_encode($options);
        $columns['value']   = $value;
        $db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
    }
    else
    {
        $select = $db->select();
        $columns['value'] = $value;
        $db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
        $result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
        workflow_input($result[0]['sid']);
    }
    return $value;
}

function place_input_kdemap($sid, $value, $options, $setup)
{
    global $db;

    $data = reload_input_kdemap($sid, $value, $options, $setup);
    $extent  = $data['extent'];
    $imgpath = $data['imgpath'];

    $dashboard_options = $options['dashboard_options'];
    $dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
    $dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);

    echo '<div id="cover'.$sid.'">';
    echo '<div id="element'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
    echo '</div>';
    echo '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
    echo '</div>';
    echo '</div>';

    echo '
<script src="/jie/csf/kde/OpenLayers2.7full_renderer.js"></script>
<script>
    var internal_zoom'.$sid.' = true;
    OpenLayers.IMAGE_RELOAD_ATTEMPTS = 3;
    OpenLayers.Util.onImageLoadErrorColor = "transparent";

    function mapEvent'.$sid.'()
    {
        if(internal_zoom'.$sid.') {
            var bounds = map'.$sid.'.getExtent();
            validate_kdemap("'.$setup['svid'].'", bounds.toString(), "extent", {});
        } else {
            internal_zoom'.$sid.'=true;
        }
    }

    var options'.$sid.' =
    {
        projection: new OpenLayers.Projection("EPSG:900913"),
        displayProjection: new OpenLayers.Projection("EPSG:4326"),
        units: "m",
        numZoomLevels: 21,
        maxResolution: 156543.0339,
        maxExtent: new OpenLayers.Bounds(-20037508, -20037508, 20037508, 20037508)
    };
    var map'.$sid.' = new OpenLayers.Map(\'element'.$sid.'\', options'.$sid.');


    var gphy'.$sid.' = new OpenLayers.Layer.Google(
            "Google Physical",
            {type: G_PHYSICAL_MAP, \'sphericalMercator\': true}
            );
    var gmap'.$sid.' = new OpenLayers.Layer.Google(
            "Google Streets",
            {\'sphericalMercator\': true}
            );
    var gsat'.$sid.' = new OpenLayers.Layer.Google(
            "Google Satellite",
            {type: G_SATELLITE_MAP, \'sphericalMercator\': true, numZoomLevels: 22}
            );
    var ghyb'.$sid.' = new OpenLayers.Layer.Google(
            "Google Hybrid",
            {type: G_HYBRID_MAP, \'sphericalMercator\': true}
            );
    map'.$sid.'.addControl(new OpenLayers.Control.LayerSwitcher());
    map'.$sid.'.addLayers([gmap'.$sid.', ghyb'.$sid.', gsat'.$sid.', gphy'.$sid.']);

    // get extent from database    
    var extent'.$sid.' = '.$extent.';
    
    //map'.$sid.'.zoomToExtent(bounds'.$sid.', true);
    update'.$sid.'(0,{"extent":'.$extent.',"imgpath":"'.$imgpath.'"});

    function update'.$sid.'(dashboard, response)
    {
        var layers = map'.$sid.'.getLayersByName("kde");
        for(var layerIndex = 0; layerIndex < layers.length; layerIndex++)
        {
            map'.$sid.'.removeLayer(layers[layerIndex]);
        } 
        var extent'.$sid.' = response["extent"];
        var imgpath = response["imgpath"];

        var projWGS84  = new OpenLayers.Projection("EPSG:4326"),
            proj900913 = new OpenLayers.Projection("EPSG:900913"),
            ll_point'.$sid.'   = new OpenLayers.LonLat(extent'.$sid.'[0],extent'.$sid.'[1]),
            ur_point'.$sid.'   = new OpenLayers.LonLat(extent'.$sid.'[2],extent'.$sid.'[3]);

        ll_point'.$sid.'.transform(projWGS84,proj900913);
        ur_point'.$sid.'.transform(projWGS84,proj900913);

        extent'.$sid.' = [ll_point'.$sid.'.lon, ll_point'.$sid.'.lat, ur_point'.$sid.'.lon, ur_point'.$sid.'.lat];
        var bounds'.$sid.' = new OpenLayers.Bounds(extent'.$sid.'[0],extent'.$sid.'[1],extent'.$sid.'[2],extent'.$sid.'[3]);
        map'.$sid.'.zoomToExtent(bounds'.$sid.', true);

        var theGraphicUrl'.$sid.' = imgpath;
        var XPos'.$sid.'          = extent'.$sid.'[0];
        var YPos'.$sid.'          = extent'.$sid.'[1];
        var theWidth'.$sid.'      = (extent'.$sid.'[2]-extent'.$sid.'[0])/map'.$sid.'.resolution;
        var theHeight'.$sid.'     = (extent'.$sid.'[3]-extent'.$sid.'[1])/map'.$sid.'.resolution;
        var theXOffset'.$sid.'    = 0;
        var theYOffset'.$sid.'    = -theHeight'.$sid.';
        var theRotation'.$sid.'   = 0;
        var theResolution'.$sid.' = map'.$sid.'.resolution; 

        var context'.$sid.' = {
            getUrl : function(){
                return theGraphicUrl'.$sid.';
            },
            getXO : function(){
                var map_offsetX = theXOffset'.$sid.' * theResolution'.$sid.' / map'.$sid.'.resolution;
                return map_offsetX;
            },
            getYO : function(){
                var map_offsetY = theYOffset'.$sid.' * theResolution'.$sid.' / map'.$sid.'.resolution;
                return map_offsetY;
            },
            getW : function(){
                var pic_width = theWidth'.$sid.' * theResolution'.$sid.'  / map'.$sid.'.resolution;
                return pic_width;
            },
            getH : function(){
                var pic_height = theHeight'.$sid.' * theResolution'.$sid.' / map'.$sid.'.resolution;
                return pic_height;
            },
            getR : function(){
                return theRotation'.$sid.';
            }
        };
        var template'.$sid.' = {
            externalGraphic: "${getUrl}",
            graphicXOffset : "${getXO}",
            graphicYOffset : "${getYO}",
            graphicWidth   : "${getW}",
            graphicHeight  : "${getH}",
            rotation       : "${getR}",
            strokeWidth    : 2,
            strokeColor    : "blue",
            pointRadius    : 0
        };
        var vectorLayer'.$sid.' = new OpenLayers.Layer.Vector("kde");
        var oStyleMap'.$sid.' = new OpenLayers.Style(template'.$sid.', {context: context'.$sid.'});
        vectorLayer'.$sid.'.styleMap = oStyleMap'.$sid.';
        map'.$sid.'.addLayers([vectorLayer'.$sid.']);

        var newPoint'.$sid.' = new OpenLayers.Geometry.Point(XPos'.$sid.',YPos'.$sid.');
        var pointFeature'.$sid.' = new OpenLayers.Feature.Vector(newPoint'.$sid.');                             
        pointFeature'.$sid.'.attributes.render = "drawAlways";
        vectorLayer'.$sid.'.addFeatures([pointFeature'.$sid.']);
        vectorLayer'.$sid.'.setOpacity(0.75);
        vectorLayer'.$sid.'.redraw(true);
        //map'.$sid.'.zoomToExtent(bounds'.$sid.', true);
        document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
    }

    function reload'.$sid.'(dashboard, response)
    {
        place_input(dashboard, '.$sid.', {
            \'content_type\': \'json\', 
            \'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}
        });
    }
    function mark'.$sid.'(dashboard, response)
    {
        document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
    }
    function reload_update'.$sid.'(response)
    {
        console.log("reload",response["extent"]); 
        var extent = eval(response["extent"]);
        update'.$sid.'(0, {"extent":extent,"imgpath":response["imgpath"]});
        document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
    }
</script>';
}

function reload_input_kdemap($sid, $value, $options, $setup)
{
    global $db;

    $dashboard_options = $options['dashboard_options'];
    $content = '';
    if(isset($options['tablename']) and ($options['tablename']!='')) 
    {
        $sql = 'SELECT extent,imgpath FROM kde where '
               .'ptablename=\''.$options['tablename'].'\';';
        $sql_result = $db->fetchAll($sql);
        $content['extent']  = $sql_result[0]['extent'];
        $content['imgpath'] = $sql_result[0]['imgpath'];
    }     
    return($content);
}

function kdemap_rtrn_default_value($sid, $options)
{
}

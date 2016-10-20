<?php
function getsetup_input_tilemap()
{
        $options['_CREDITS']                            = 'Main Developters: Robert Pahle, Jaycen Horton.';
        $options['_MODULEDESCRIPTION']          = 'More info will follow.';

/*
        $options[0]['name']                             = 'css';
        $options[0]['description']                      = 'Please select the CSS';
        $options[0]['detail']                           = 'This is the css number that influences the layout';
        $options[0]['type']                             = 'Integer';
        $options[0]['link']                             = 'link to further information..?';
        $options[0]['lookup']                           = '';
        $options[0]['default']                          = '001';
        $options[0]['optional']                         = 'no';
        $options[0]['perdashboard']                     = 'yes';
        $options[0]['dependenton']                      = '';
*/

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

        $options[70]['name']                            = 'geometrycolumnname';
        $options[70]['description']                     = 'Alternative geometry column name';
        $options[70]['detail']                          = 'If you like to use a table to draw your data, provide the geometry column name';
        $options[70]['type']                            = 'Text';
        $options[70]['link']                            = 'link to further information..?';
        $options[70]['lookup']                          = '';
        $options[70]['default']                         = 'the_geom';
        $options[70]['optional']                        = 'yes';
        $options[70]['repeatable']                      = 'no';
        $options[70]['perdashboard']                    = 'no';
        $options[70]['dependenton']                     = '';

        $options[80]['name']                            = 'colorcolumnname';
        $options[80]['description']                     = 'Color column name';
        $options[80]['detail']                          = 'If you like to specify color for each element please select a color column name';
        $options[80]['type']                            = 'Text';
        $options[80]['link']                            = 'link to further information..?';
        $options[80]['lookup']                          = '';
        $options[80]['default']                         = '';
        $options[80]['optional']                        = 'yes';
        $options[80]['repeatable']                      = 'no';
        $options[80]['perdashboard']                    = 'no';
        $options[80]['dependenton']                     = '';

        $options[85]['name']                            = 'color';
        $options[85]['description']                     = 'Color value';
        $options[85]['detail']                          = 'You provide a specific color to color the whole dataset. However, if a color column is given that has precedence.';
        $options[85]['type']                            = 'Color';
        $options[85]['link']                            = 'link to further information..?';
        $options[85]['lookup']                          = '';
        $options[85]['default']                         = '';
        $options[85]['optional']                        = 'yes';
        $options[85]['repeatable']                      = 'no';
        $options[85]['perdashboard']                    = 'no';
        $options[85]['dependenton']                     = '';

/*
        $options[86]['name']                            = 'lookupcolumncolor';
        $options[86]['description']                     = 'Lookup column color';
        $options[86]['detail']                          = 'If you like to use a table to draw your data you can provide a lookup column name';
        $options[86]['type']                            = 'Text';
        $options[86]['link']                            = 'link to further information..?';
        $options[86]['lookup']                          = '';
        $options[86]['default']                         = '';
        $options[86]['optional']                        = 'yes';
        $options[86]['repeatable']                      = 'no';
        $options[86]['perdashboard']                    = 'no';
        $options[86]['dependenton']                     = '';

        $options[87]['name']                            = 'lookupcolumnname1';
        $options[87]['description']                     = 'Lookup column name 1';
        $options[87]['detail']                          = 'If you like to use a table to draw your data you can provide a lookup column name';
        $options[87]['type']                            = 'Text';
        $options[87]['link']                            = 'link to further information..?';
        $options[87]['lookup']                          = '';
        $options[87]['default']                         = '';
        $options[87]['optional']                        = 'yes';
        $options[87]['repeatable']                      = 'no';
        $options[87]['perdashboard']                    = 'no';
        $options[87]['dependenton']                     = '';

        $options[88]['name']                            = 'lookupcolumnvalue1';
        $options[88]['description']                     = 'Lookup column value 1';
        $options[88]['detail']                          = 'If you provide a lookup column name, you have to give a value to look for.';
        $options[88]['type']                            = 'Text';
        $options[88]['link']                            = 'link to further information..?';
        $options[88]['lookup']                          = '';
        $options[88]['default']                         = '';
        $options[88]['optional']                        = 'yes';
        $options[88]['repeatable']                      = 'no';
        $options[88]['perdashboard']                    = 'no';
        $options[88]['dependenton']                     = '';

        $options[89]['name']                            = 'lookupcolumncolor1';
        $options[89]['description']                     = 'Lookup column color 1';
        $options[89]['detail']                          = 'If you like to use a table to draw your data you can provide a lookup column name';
        $options[89]['type']                            = 'Text';
        $options[89]['link']                            = 'link to further information..?';
        $options[89]['lookup']                          = '';
        $options[89]['default']                         = '';
        $options[89]['optional']                        = 'yes';
        $options[89]['repeatable']                      = 'no';
        $options[89]['perdashboard']                    = 'no';
        $options[89]['dependenton']                     = '';
*/
        $options[90]['name']                            = 'layertype';
        $options[90]['description']                     = 'Type of layer';
        $options[90]['detail']                          = 'Select the type of features that you would like to input';
        $options[90]['type']                            = 'Dropdown';
        $options[90]['link']                            = 'link to further information..?';
        $options[90]['lookup']                          = 'none|Point|Line|Polygon';
        $options[90]['default']                         = 'none';
        $options[90]['optional']                        = 'no';
        $options[90]['repeatable']                      = 'no';
        $options[90]['perdashboard']                    = 'no';
        $options[90]['dependenton']                     = '';

        $options[100]['name']                           = 'extent';
        $options[100]['description']                    = 'Extent of the map';
        $options[100]['detail']                         = 'Select the extent of the map that you would like to zoom to. It will be updated once you zoom or pan the map';
        $options[100]['type']                           = 'Text';
        $options[100]['link']                           = 'link to further information..?';
        $options[100]['lookup']                         = '';
        $options[100]['default']                        = '';
        $options[100]['optional']                       = 'no';
        $options[100]['repeatable']                     = 'no';
        $options[100]['perdashboard']                   = 'no';
        $options[100]['dependenton']                    = '';

        $options[110]['name']                           = 'extent_tablename';
        $options[110]['description']                    = 'Extent table name';
        $options[110]['detail']                         = 'Select the table name that gets used to store the extent';
        $options[110]['type']                           = 'Table';
        $options[110]['link']                           = 'link to further information..?';
        $options[110]['lookup']                         = '';
        $options[110]['default']                        = '';
        $options[110]['optional']                       = 'no';
        $options[110]['repeatable']                     = 'no';
        $options[110]['perdashboard']                   = 'no';
        $options[110]['dependenton']                    = '';

        $options[120]['name']                           = 'extent_columnname';
        $options[120]['description']                    = 'Extent column name';
        $options[120]['detail']                         = 'Select the column name that gets used to tore the extent';
        $options[120]['type']                           = 'Text';
        $options[120]['link']                           = 'link to further information..?';
        $options[120]['lookup']                         = '';
        $options[120]['default']                        = '';
        $options[120]['optional']                       = 'no';
        $options[120]['repeatable']                     = 'no';
        $options[120]['perdashboard']                   = 'no';
        $options[120]['dependenton']                    = '';

        $options[130]['name']                           = 'extent_lookupcolumnname';
        $options[130]['description']                    = 'Extent lookup column name';
        $options[130]['detail']                         = 'Select the lookup column name to search the row with the extent value.';
        $options[130]['type']                           = 'Text';
        $options[130]['link']                           = 'link to further information..?';
        $options[130]['lookup']                         = '';
        $options[130]['default']                        = '';
        $options[130]['optional']                       = 'no';
        $options[130]['repeatable']                     = 'no';
        $options[130]['perdashboard']                   = 'no';
        $options[130]['dependenton']                    = '';

        $options[140]['name']                           = 'extent_lookupcolumnvalue';
        $options[140]['description']                    = 'Extent lookup column value';
        $options[140]['detail']                         = 'Select the lookup column value to identify the correct row.';
        $options[140]['type']                           = 'Text';
        $options[140]['link']                           = 'link to further information..?';
        $options[140]['lookup']                         = '';
        $options[140]['default']                        = '';
        $options[140]['optional']                       = 'no';
        $options[140]['repeatable']                     = 'no';
        $options[140]['perdashboard']                   = 'no';
        $options[140]['dependenton']                    = '';

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

function validate_tilemap($id, $value, $function=null)
{
        global $db;

        if($function=='extent') {
        # if only change extent of map, don't notify others
        # don't go into workflow_input()
            $result = $db->fetchAll('select value from station_variables where "svid"=\''.$id.'\'');
        file_put_contents('/tmp/info', $result[0]['value']."\n", FILE_APPEND);
            $options = json_decode($result[0]['value'],true);
            $options['extent'] = $value;
            $value = json_encode($options);
            $columns['value']   = $value;
        $db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
        }
    else
    {
            $select = $db->select();
        $columns['value']       = $value;

        $db->update("station_variables",$columns,'"svid"=\''.$id.'\'');

        $result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
        workflow_input($result[0]['sid']);
    }
        return $value;
}

function place_input_tilemap($sid, $value, $options, $setup)
{
        global $db;


/*        $data = reload_input_tilemap($sid, $value, $options, $setup);
        $values = $data['values'];
        $colors = $data['colors'];
*/
        $dashboard_options = $options['dashboard_options'];
        $dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
        $dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);

        $content=reload_input_tilemap($sid, $value, $options, $setup);
        $tablename = $content['tablename'];
        $colorcolumnname = $content['colorcolumnname'];

        echo '<div id="cover'.$sid.'">';
        echo '<div id="element'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
        echo '</div>';
        echo '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
        echo '</div>';
        echo '</div>';

        echo '<style>.olImageLoadError {display: none !important;}</style>';
        echo '  <script>
        var internal_zoom'.$sid.' = true;
        OpenLayers.IMAGE_RELOAD_ATTEMPTS = 3;
        OpenLayers.Util.onImageLoadErrorColor = "transparent";
        function addthisfeature'.$sid.'(feature)
        {
            // for drawing on map
            var from = new OpenLayers.Projection("EPSG:900913");
            var to = new OpenLayers.Projection("EPSG:4326");
            feature.transform(from, to);
            var data = new Array();
            data["value"]=feature.toString();
            validate_map("'.$setup['value_svid'].'", feature.toString(), {});
            update'.$sid.'(0,data);
        }

        function mapEvent'.$sid.'()
        {
            if(internal_zoom'.$sid.') {
                var bounds = map'.$sid.'.getExtent();
                validate_map("'.$setup['svid'].'", bounds.toString(), "extent", {});
            } else {
                internal_zoom'.$sid.'=true;
            }
        }

        var drawing_vector'.$sid.' = new OpenLayers.Layer.Vector("Features");
        var options'.$sid.' =
        {
            projection: new OpenLayers.Projection("EPSG:900913"),
            displayProjection: new OpenLayers.Projection("EPSG:4326"),
            units: "m",
            numZoomLevels: 21,
            maxResolution: 156543.0339,
            maxExtent: new OpenLayers.Bounds(-20037508, -20037508,20037508, 20037508.34),
            controls: [new OpenLayers.Control.Navigation(),
               new OpenLayers.Control.PanZoomBar(),
            ],
            eventListeners: {
                "moveend": mapEvent'.$sid.'
            }
        };
        map'.$sid.' = new OpenLayers.Map(\'element'.$sid.'\', options'.$sid.');';

        switch ($options['layertype']){
            case 'Point':
                echo '
                                var panelControls'.$sid.' = [
                                         new OpenLayers.Control.Navigation(),
                                         new OpenLayers.Control.DrawFeature(drawing_vector'.$sid.',
                                                 OpenLayers.Handler.Point,
                                                {\'displayClass\': \'olControlDrawFeaturePoint\',
                                                 \'drawFeature\': addthisfeature'.$sid.'})
                                ];
                                var toolbar'.$sid.' = new OpenLayers.Control.Panel({
                                        displayClass: \'olControlEditingToolbar\',
                                        defaultControl: panelControls'.$sid.'[0]
                                });
                                toolbar'.$sid.'.addControls(panelControls'.$sid.');
                                map'.$sid.'.addControl(toolbar'.$sid.');';
                break;
            case 'Line':
                echo '
                                var panelControls'.$sid.' = [
                                         new OpenLayers.Control.Navigation(),
                                         new OpenLayers.Control.DrawFeature(drawing_vector'.$sid.',
                                                 OpenLayers.Handler.Path,
                                                {\'displayClass\': \'olControlDrawFeaturePath\',
                                                 \'drawFeature\': addthisfeature'.$sid.'})
                                ];
                                var toolbar'.$sid.' = new OpenLayers.Control.Panel({
                                        displayClass: \'olControlEditingToolbar\',
                                        defaultControl: panelControls'.$sid.'[0]
                                });
                                toolbar'.$sid.'.addControls(panelControls'.$sid.');
                                map'.$sid.'.addControl(toolbar'.$sid.');';
                break;
            case 'Polygon':
                echo '
                                var panelControls'.$sid.' = [
                                         new OpenLayers.Control.Navigation(),
                                         new OpenLayers.Control.DrawFeature(drawing_vector'.$sid.',
                                                 OpenLayers.Handler.Polygon,
                                                {\'displayClass\': \'olControlDrawFeaturePolygon\',
                                                 \'drawFeature\': addthisfeature'.$sid.'})
                                ];
                                var toolbar'.$sid.' = new OpenLayers.Control.Panel({
                                        displayClass: \'olControlEditingToolbar\',
                                        defaultControl: panelControls'.$sid.'[0]
                                });
                                toolbar'.$sid.'.addControls(panelControls'.$sid.');
                                map'.$sid.'.addControl(toolbar'.$sid.');';
                break;
        }

        echo '                  var gphy'.$sid.' = new OpenLayers.Layer.Google(
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
                                map'.$sid.'.addLayers([gphy'.$sid.', gsat'.$sid.', gmap'.$sid.', ghyb'.$sid.', drawing_vector'.$sid.']);


                                var bounds'.$sid.' = new OpenLayers.Bounds('.$options['extent'].');

                                map'.$sid.'.zoomToExtent(bounds'.$sid.', true);

                                // start new code for pytilemap layer
                                var tiles'.$sid.' = new OpenLayers.Layer.TMS(
                                    "'.$tablename.'",
                                    //"http://dev.dt.asu.edu/dist/pytilemap/",
                                    //"https://matinee.dt.asu.edu:83/dist/pytilemap/",
                                    "https://webpool.csf.asu.edu/dist/pytilemap/",
                                    {
                                        type:"png",
                                        isBaseLayer:false,
                                        opacity:0.9,
                                        getURL: function(bounds){
                                            var res = this.map.getResolution();
                                            var x = Math.round ((bounds.left - this.maxExtent.left) / (res * this.tileSize.w));
                                            var y = Math.round ((this.maxExtent.top - bounds.top) / (res * this.tileSize.h));
                                            var z = this.map.getZoom();
                                            var path = "'.$tablename.'" + "/" + "'.$colorcolumnname.'" + "/" + z + "/" + x + "," + y + "." + this.type; 
                                            var url = this.url;
                                            if (url instanceof Array) {
                                                url = this.selectUrl(path, url);
                                            }
                                            url = url + path + "?" + Math.floor(Math.random()*100000000);
                                            return url;
                                        } 
                                    });
                                map'.$sid.'.addLayers([tiles'.$sid.']);

                        </script>
                        ';

        echo '  <script language="JavaScript" type="text/javascript">
                                function update'.$sid.'(dashboard, response)
                                {
                                        if(response.value != "")
                                        {
                                                drawing_vector'.$sid.'.destroyFeatures();
                                                // compatible to old code
                                                var format = new OpenLayers.Format.WKT();
                                                var feature = format.read(response.value);
                                                var to = new OpenLayers.Projection("EPSG:900913");
                                                var from = new OpenLayers.Projection("EPSG:4326");
                                                feature.geometry.transform(from, to);
                                                feature.style = {
                                                    strokeColor:"#ee9900",
                                                    fillColor:"#ee9900",
                                                    strokeWidth: 1,
                                                    fillOpacity: 0.2
                                                };
                                                drawing_vector'.$sid.'.addFeatures([feature]);
                                        }

                                        document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
                                }
                                var  drawn_data = new Array();
                                drawn_data["value"] =  "'.$value.'";

                                //redraw point/line/polygon which was drawn before refreshing
                                update'.$sid.'(0,drawn_data);

                                function reload'.$sid.'(dashboard, response)
                                {
                                        place_input(dashboard, '.$sid.', {\'content_type\': \'json\', \'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
                                }
                                function mark'.$sid.'(dashboard, response)
                                {
                                        //just use the visible command next line... document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'\';
                                        document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
                                        var dashboard = eval("("+response.dashboard+")");
                                        var tablename = dashboard["tablename"];
                                        var colorcolumnname = dashboard["colorcolumnname"];
                                        map'.$sid.'.removeLayer(tiles'.$sid.');
                                        tiles'.$sid.' = null;
                                }
                                function reload_update'.$sid.'(response)
                                {
                                        if (tiles'.$sid.'==null){
                                            var tablename = response["tablename"];
                                            var colorcolumnname = response["colorcolumnname"];

                                            tiles'.$sid.' = new OpenLayers.Layer.TMS(
                                                tablename,
                                                //"http://dev.asu.edu/dist/pytilemap/",
                                                //"https://matinee.dt.asu.edu:83/dist/pytilemap/",
	                                        "https://webpool.csf.asu.edu/dist/pytilemap/",
                                                {
                                                    type:"png",
                                                    isBaseLayer:false,
                                                    opacity:0.9,
                                                    getURL: function(bounds){
                                                        var res = this.map.getResolution();
                                                        var x = Math.round ((bounds.left - this.maxExtent.left) / (res * this.tileSize.w));
                                                        var y = Math.round ((this.maxExtent.top - bounds.top) / (res * this.tileSize.h));
                                                        var z = this.map.getZoom();
                                                        var path = tablename + "/" + colorcolumnname + "/" + z + "/" + x + "," + y + "." + this.type; 
                                                        var url = this.url;
                                                        if (url instanceof Array) {
                                                            url = this.selectUrl(path, url);
                                                        }
                                                        url = url + path + "?" + Math.floor(Math.random()*100000000);
                                                        return url;
                                                    } 
                                                });
                        
                                            map'.$sid.'.addLayer(tiles'.$sid.');
                                            //tiles'.$sid.'.spiralTileLoad();
                                            tiles'.$sid.'.redraw(true);
                                        } 
                                        //vector'.$sid.'.destroyFeatures();
                                        var myArray = response.extent.split(",");
                                        var bounds = new OpenLayers.Bounds(myArray[0],myArray[1],myArray[2],myArray[3]);
                                        internal_zoom'.$sid.' = false;
                                        map'.$sid.'.zoomToExtent(bounds, true);
                                        // update'.$sid.'(0, response);
                                        internal_zoom'.$sid.' = true;
                                        // just use the hidden command in the next line ...document.getElementById("celement'.$sid.'").style.border=\'none\';
                                        document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
                                }
                        </script>';
}

function reload_input_tilemap($sid, $value, $options, $setup)
{
        global $db;

        $dashboard_options = $options['dashboard_options'];

        $content['size_x'] = $dashboard_options['width']."px";
        $content['size_y'] = $dashboard_options['height']."px";
        $content['x'] = $dashboard_options['x'];
        $content['y'] = $dashboard_options['y'];
        $content['extent'] = $options['extent'];
        
        if(!(isset($options['geometrycolumnname']) and ($options['geometrycolumnname']!='')))
            $options['geometrycolumnname'] = 'the_geom';

        if(isset($options['tablename']) and ($options['tablename']!='')) {
            $content['tablename'] = $options['tablename']; 
            if(isset($options['colorcolumnname']) and ($options['colorcolumnname']!=''))
                $content['colorcolumnname'] = $options['colorcolumnname'];
            else $content['colorcolumnname'] = 'classic';
        }

        if( isset($options['extent_tablename'])
            and ($options['extent_tablename']!='')
            and isset($options['extent_columnname'])
            and ($options['extent_columnname']!='')
            and isset($options['extent_lookupcolumnname'])
            and ($options['extent_lookupcolumnname']!='')
            and isset($options['extent_lookupcolumnvalue'])
            and ($options['extent_lookupcolumnvalue']!='')) {
            $sql  = 'SELECT '.$options['extent_columnname'].' as extent FROM '.$options['extent_tablename'];
            $sql .= ' where "'.$options['extent_lookupcolumnname'].'"=\''.$options['extent_lookupcolumnvalue'].'\'';
            $sql .= ' limit 1';
            $result = $db->fetchAll($sql);
            $content['extent'] = $result[0]['extent'];
        }

        return($content);
}

function tilemap_rtrn_default_value($sid, $options)
{
}









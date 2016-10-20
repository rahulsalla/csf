<?php
function getsetup_input_enhanced_maps()
{
        $options['_CREDITS']                            = 'Main Developers: Robert Pahle, Prem Randeria';
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
/*
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
		$options[60]['donotrender']                     = 'yes';

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
		$options[70]['donotrender']                     = 'yes';
        
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
		$options[80]['donotrender']                     = 'yes';

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
		
		$options[85]['donotrender']                     = 'yes';
	*/	
        $options[90]['name']                            = 'layertype';
        $options[90]['description']                     = 'Type of input';
        $options[90]['detail']                          = 'Select the type of features that you would like to input';
        $options[90]['type']                            = 'Dropdown';
        $options[90]['link']                            = 'link to further information..?';
        $options[90]['lookup']                          = 'none|Point|Line|Polygon';
        $options[90]['default']                         = 'none';
        $options[90]['optional']                        = 'no';
        $options[90]['repeatable']                      = 'no';
        $options[90]['perdashboard']                    = 'no';
        $options[90]['dependenton']                     = '';
		
		$options[86]['name']                            = 'csv';
        $options[86]['description']                     = 'Multiple layers';
        $options[86]['detail']                          = 'You can add multiple layers';
        $options[86]['type']                            = 'csv';
        $options[86]['link']                            = 'link to further information..?';
        $options[86]['lookup']                          = 'Layertype|Target|Tablename|Geometry Columnname|Color Column Name|Color|Opacity';
        $options[86]['default']                         = '';
        $options[86]['optional']                        = 'yes';
        $options[86]['repeatable']                      = 'no';
        $options[86]['perdashboard']                    = 'no';
        $options[86]['dependenton']                     = '';
		
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
        $options[290]['default']                        = 'FF0000';
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

function validate_enhanced_maps($id, $value, $function=null)
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

function place_input_enhanced_maps($sid, $value, $options, $setup)
{
        global $db;

		
        $data = reload_input_enhanced_maps($sid, $value, $options, $setup);
		$dashboard_options = $options['dashboard_options'];
        $dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
        $dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
		
	$csv=$options['csv'];
        
		 	 
		
		//$str=reload_input_enhanced_maps($sid, $value, $options, $setup);
		
		 $str='<div id="cover'.$sid.'">';
		 
        $str.= '<div id="element'.$sid.'" style="position:absolute;z-index:1; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']).'px; height:'.($dashboard_options['height']).'px;">';
        $str.= '</div>';
        $str.= '<div id="celement'.$sid.'" style="visibility:hidden; border:'.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'; position:absolute;z-index:2; top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; width:'.($dashboard_options['width']-($dashboard_options['loadingHighlightThickness'] * 2)).'px; height:'.($dashboard_options['height']-($dashboard_options['loadingHighlightThickness']*2)).'px;">';
		$str.= '</div>';
		 
		
			
		    $str.= ' <script>  	var glob=1; 
if(glob==1){			
			var options'.$sid.' =
                                {		//k
                                        projection: new OpenLayers.Projection("EPSG:900913"),
                                        displayProjection: new OpenLayers.Projection("EPSG:4326"),
                                        units: "m",
                                        numZoomLevels: 21,
                                        maxResolution: 156543.0339,
										Overlays: true,
                                        maxExtent: new OpenLayers.Bounds(-20037508, -20037508,
                                                 20037508, 20037508.34),
                                        controls: [     new OpenLayers.Control.Navigation(),
                                                                new OpenLayers.Control.PanZoomBar(),
//                                                              new OpenLayers.Control.EditingToolbar(vector)
                                                                ],
                                        eventListeners: {
                                                        "moveend": mapEvent'.$sid.'
//                                                      "zoomend": mapEvent'.$sid.',
//                                                      "changelayer": mapLayerChanged,
//                                                      "changebaselayer": mapBaseLayerChanged
                                                }
                                };
                                map'.$sid.' = new OpenLayers.Map(\'element'.$sid.'\', options'.$sid.');
								var vector'.$sid.'= new Array();
								var draw_vector'.$sid.'= new Array();
								
								}
								
								';
        $str.= '  	 
                                OpenLayers.Layer.ThemeVector = OpenLayers.Class(OpenLayers.Layer.Vector, {
                                        initialize: function() {
                                                OpenLayers.Layer.Vector.prototype.initialize.apply(this,arguments);
                                        },
                                        // override
                                        addFeatures: function (features, options){
											
                                                // if the type of feature is a ThemeVector
                                                if (options && "fillColor" in options) {
                                                // loop through each feature
                                                 var featuresAdded = [];
                                                 for (var i=0, len=features.length; i<len; i++) {
                                            if (i != (features.length - 1)) {
                                                        this.renderer.locked = true;
                                                    } else {
                                                        this.renderer.locked = false;
                                                    }
                                                    var feature= features[i];
													
                                                   //give feature reference to its layer
                                                   //feature.layer = this;

                                                   featuresAdded.push(feature);
                                                   this.features.push(feature);
												   
                                                   this.drawFeature(feature,options);
                                                 }
                                               
												}
                                                // otherwise, call super.drawFeature
                                                else {
                                                   OpenLayers.Layer.Vector.prototype.addFeatures.apply(this,feature,options);
                                                }
                                        },
                                        CLASS_NAME: "OpenLayers.Layer.ThemeVector"
                                });
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
                                        validate_enhanced_maps("'.$setup['value_svid'].'", feature.toString(), {});
                                        update'.$sid.'(0,data);
                                }

                                function mapEvent'.$sid.'()
                                {
                                        if(internal_zoom'.$sid.') {
                                            var bounds = map'.$sid.'.getExtent();
                                            validate_enhanced_maps("'.$setup['svid'].'", bounds.toString(), "extent", {});
                                        } else {
                                            internal_zoom'.$sid.'=true;
                                        }
                                }
								
							   
								 
								if(glob==1){
                                 drawing_vector'.$sid.' = new OpenLayers.Layer.Vector("Features");
								 }
                                  
								';
					
        
					

        switch ($options['layertype']){
            case 'Point':
                $str.= '
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
                $str.= '
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
                $str.= '
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

        $str.= '                 
								if(glob==1){
				var osm'.$sid.' = new OpenLayers.Layer.OSM( "Simple OSM Map");
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
								}
                                map'.$sid.'.addControl(new OpenLayers.Control.LayerSwitcher());
								
                                map'.$sid.'.addLayers([osm'.$sid.',gphy'.$sid.', gsat'.$sid.', gmap'.$sid.', ghyb'.$sid.',drawing_vector'.$sid.']);
								

                                var bounds'.$sid.' = new OpenLayers.Bounds('.$options['extent'].');

                                map'.$sid.'.zoomToExtent(bounds'.$sid.', true);
								
								
								
								
                        </script>
                        ';
						
 for($number=1;$number<count($csv);$number++)
		{	
		if(isset($data['layer'.$number]['values'])){	
        $values = $data['layer'.$number]['values'];}
		if(isset($data['layer'.$number]['colors'])){
        $colors = $data['layer'.$number]['colors'];}
			if(isset($data['layer'.$number]['tablename'])){
			$tablename=$data['layer'.$number]['tablename']; }
		if(isset($data['layer'.$number]['opacity'])){	
		$opacity=$data['layer'.$number]['opacity'];} else {$opacity=1;}
		if(isset($tablename))
		{
        $str.= '  <script language="JavaScript" type="text/javascript">
                                function update'.$sid.'(dashboard, response)
                                {	var number=response["number"];
									var opacity=response["opacity"];
									var flag=true;	
                                        if ("colors" in response)
                                        { for (i=0;i<response["colors"].length; i++)
                                                {	 var objects = response["values"][i];
                                                        var color = response["colors"][i];
														//console.log(color);
                                                        if (objects.indexOf("POLYGON") >= 0)//polygon
                            {var cust_style = OpenLayers.Util.applyDefaults({
                                                            strokeColor: "#000000",
                                                                fillColor: color,
                                                                strokeWidth: 1,
                                                fillOpacity: opacity
                                                        });}
                            //point or line
                            else {var cust_style = OpenLayers.Util.applyDefaults({
                                 strokeColor: color,
                                 fillColor: color,
								 strokeWidth: opacity,
                                 pointRadius: 5,
                                 fillOpacity: opacity
                             });}						if(vector'.$sid.'[number]==null ){
														vector'.$sid.'[number]= new OpenLayers.Layer.Vector(response["tablename"]);
														flag=false;
														}
														if(flag && vector'.$sid.'[number].features.length==0){
														vector'.$sid.'[number].destroy();
														vector'.$sid.'[number]= new OpenLayers.Layer.Vector(response["tablename"]);
														}
														           var format = new OpenLayers.Format.WKT();
                                                        var feature = format.read(objects);
                                                        var to = new OpenLayers.Projection("EPSG:900913");
                                                        var from = new OpenLayers.Projection("EPSG:4326");
                                        feature.geometry.transform(from, to); 
														feature.style=cust_style;
                                                        vector'.$sid.'[number].addFeatures([feature]);
													 } 
												map'.$sid.'.addLayer(vector'.$sid.'[number]);
												
                                        }
                                        else if(response.value!= "")
                                        {		//console.log("feature");
                                               drawing_vector'.$sid.'.destroyFeatures();
                                                // compatible to old code
                                                var format = new OpenLayers.Format.WKT();
                                                var feature = format.read(response["value"]);
                                                var to = new OpenLayers.Projection("EPSG:900913");
                                                var from = new OpenLayers.Projection("EPSG:4326");
                                                feature.geometry.transform(from, to);
                                                drawing_vector'.$sid.'.addFeatures([feature]);
                                        }
											
                                    		document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
//############???                                        document.getElementById("element'.$sid.'").style.border=\'0px none\';
                                }
                                var data'.$sid.'=new Array();
                                data'.$sid.'["colors"] =new Array();
                                data'.$sid.'["values"] =new Array();
                                ';
								
        for ($i=0;$i<count($values);$i++)
        {		
                $lisa_value = $values[$i];
                $color = $colors[$i];
                $str.= '
                                data'.$sid.'['.$i.'] = new Array();
                                data'.$sid.'["colors"]['.$i.']="'.$color.'";
                                data'.$sid.'["values"]['.$i.']="'.$lisa_value.'";
								
								
                ';
        }
		
        $str.= '     //drawn colored polygons
							data'.$sid.'["number"]='.$number.';
							data'.$sid.'["tablename"]="'.$tablename.'";
							
							data'.$sid.'["opacity"]='.$opacity.';
							data'.$sid.'["redraw"]="no";
                                update'.$sid.'(0, data'.$sid.');
				if(glob==1){
                var  drawn_data = new Array();
                drawn_data["value"] =  "'.$value.'";

                //redraw point/line/polygon which was drawn before refreshing
                update'.$sid.'(0,drawn_data); 
				glob++;
				} 
				</script>
				';
				}
}	
             $str.= '<script language="JavaScript" type="text/javascript">
				  function reload'.$sid.'(dashboard, response)
                                {		
                                        place_input(dashboard, '.$sid.', {\'content_type\': \'json\', \'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
                                }
                                function mark'.$sid.'(dashboard, response)
                                {
                                        //just use the visible command next line... document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].' px solid '.$dashboard_options['loadingHighlightColor'].'\';
                                        document.getElementById("celement'.$sid.'").style.border=\''.$dashboard_options['loadingHighlightThickness'].'px solid '.$dashboard_options['loadingHighlightColor'].'\';
					document.getElementById("celement'.$sid.'").style.visibility=\'visible\';
                                }
                                function reload_update'.$sid.'(response)
                                {		
										//vector'.$sid.'=null;
										//console.log(response);
                                        var myArray = response.extent.split(",");
										//alert(myArray[0]+" "+myArray[1]+" "+myArray[2]+" "+myArray[3]+" ");
                                        var bounds = new OpenLayers.Bounds(myArray[0],myArray[1],myArray[2],myArray[3]);
                                        internal_zoom'.$sid.' = false;
                                        map'.$sid.'.zoomToExtent(bounds, true);
                                    						//alert(response["csv"]);
										var a=eval(response["csv"]);
										for(var k=1;k<vector'.$sid.'.length;k++)
										{								
												if(vector'.$sid.'[k]){//console.log(k+"is destroyed");
								
														vector'.$sid.'[k].destroyFeatures();
										                                }
										}
										for(var i=1;i<a.length;i++){
										var layer="layer"+i; //console.log(response[layer]["values"]); 
										var data=new Array();
										data["values"]=response[layer]["values"];
										data["colors"]=response[layer]["colors"];
										data["tablename"]=response[layer]["tablename"]; 
										
										data["opacity"]=response[layer]["opacity"]; 
										//console.log(data["colors"]);
										data["number"]=i;
										data["redraw"]="yes";
										//data["value"]=response["value"];
										
									//console.log("values"+response.value);
										update'.$sid.'(0,data);
										}
											var  drawn_data = new Array();
											drawn_data["value"] =  "'.$value.'";
											update'.$sid.'(0,drawn_data);
                                        internal_zoom'.$sid.' = true;
                                        // just use the hidden command in the next line ...

					//document.getElementById("celement'.$sid.'").style.border=\'red\';
                                        document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
                                }
								
                        </script>';
	$str .= '</div>';				
						
   return($str);
}

function reload_input_enhanced_maps($sid, $value, $options, $setup)
{
        global $db;

        $dashboard_options = $options['dashboard_options'];
		
        $content['size_x'] = $dashboard_options['width']."px";
        $content['size_y'] = $dashboard_options['height']."px";
        $content['x'] = $dashboard_options['x'];
        $content['y'] = $dashboard_options['y'];
        $content['extent'] = $options['extent'];
		$content['csv']=$options['csv'];
		
        $content['values'] = array();
        $content['colors'] = array();
		
		$csv=$options['csv'];

		
		for($i=1;$i<count($csv);$i++)
		{		//echo $i;
				//echo count($csv);
				$flag_table=false;
				$flag_layer_type=false;
				$flag_colorcolumnname=false;
				$csv_table_name="";
				$csv_geometrycolumnname="";
				$csv_colorcolumnname="";
				$csv_color="";
				for($j=0;$j<count($csv[$i]);$j++)
				{ 
					$csv_options=str_replace(' ', '', strtolower($csv[0][$j]));
				//	echo $csv_options.'<br>';
					 if($csv_options=='tablename' && $csv[$i][$j]!='') 
						{	$flag_table=true;
							$csv_table_name=$csv[$i][$j];
							
						}
					if($flag_table)
					{		
					
					 if($csv_options=='geometrycolumnname' && $csv[$i][$j]!='')
						{
							$csv_geometrycolumnname=$csv[$i][$j];
						}
					if($csv_options=='colorcolumnname' && $csv[$i][$j]!='')
						{	$flag_colorcolumnname=true;
							$csv_colorcolumnname=$csv[$i][$j];
							
						}	
					if($csv_options=='color' && $csv[$i][$j]!='')
						{
							$csv_color=$csv[$i][$j];
							
							$csv_color=substr($csv_color,1,strlen($csv_color));
						}
					if($csv_options=='opacity' && $csv[$i][$j]!='')
						{
							$csv_opacity=$csv[$i][$j];
						} else {$csv_opacity=1;}
					}
				}
				
				
				
				if($flag_table)
				{	
					try{
					$sql = 'SELECT st_astext('.$csv_geometrycolumnname.') as the_geom';
						if($flag_colorcolumnname)
						{	$sql .= ','.$csv_colorcolumnname . ' as color';
						}
						else
						{
							$sql .= ', text \''.$csv_color.'\' as color';
						}
					$sql .= ' FROM '.$csv_table_name;
					//echo $sql.'<br><br><br>';
					
					$sql_result = $db->fetchAll($sql);

					for ($m=0;$m<count($sql_result);$m++)
						{
							$content['layer'.$i]['values'][] = $sql_result[$m]['the_geom'];
							
							$content['layer'.$i]['colors'][] = '#'.$sql_result[$m]['color'];
							
							
						}
						$content['layer'.$i]['tablename']= $csv_table_name;
						$content['layer'.$i]['opacity']= $csv_opacity;
						}
					catch(Exception $e){}
				}
				
     
		}$content['value']= $value;
						
		/* h
       if(!(isset($options['geometrycolumnname']) and ($options['geometrycolumnname']!='')))
            $options['geometrycolumnname'] = 'the_geom';

        if(isset($options['tablename']) and ($options['tablename']!='')) {
            $sql = 'SELECT st_astext('.$options['geometrycolumnname'].') as the_geom';

            if(isset($options['colorcolumnname']) and ($options['colorcolumnname']!=''))
                $sql .= ','.$options['colorcolumnname'] . ' as color';
            else
                if(isset($options['color']) and ($options['color']!=''))
                    $sql .= ', text \''.$options['color'].'\' as color';
                else
                    $sql .= ', text \'#FF8000\' as color';

            $sql .= ' FROM '.$options['tablename'];
			//echo $sql.'<br><br><br>';
					
            $sql_result = $db->fetchAll($sql);

            for ($i=0;$i<count($sql_result);$i++){
                $content['values'][] = $sql_result[$i]['the_geom'];
                $content['colors'][] = $sql_result[$i]['color'];
					}	
        } else
            $content['value'] = $value;
		*/

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

function enhanced_maps_rtrn_default_value($sid, $options)
{
}

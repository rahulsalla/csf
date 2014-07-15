<?php
function getsetup_input_map()
{
	$options['_CREDITS']				= 'This module has been developed by the <a href="http://dt.asu.edu">Decision Theater</a>.<br>';
	$options['_MODULEDESCRIPTION']		= 'More info will follow.';

	$options[0]['name']				= 'css';
	$options[0]['description']			= 'Please select the CSS';
	$options[0]['detail']				= 'This is the css number that influences the layout';
	$options[0]['type']				= 'Integer';
	$options[0]['link']				= 'link to further information..?';
	$options[0]['lookup']				= ''; 
	$options[0]['default']				= '001';
	$options[0]['optional']				= 'no';
	$options[0]['perdashboard']			= 'yes';
	$options[0]['dependenton']			= '';
	
	$options[10]['name']				= 'x';
	$options[10]['description']			= 'Please select the x coordinate';
	$options[10]['detail']				= 'This sets the x coordinate to place the element on the dashboard.';
	$options[10]['type']				= 'Integer';
	$options[10]['link']				= 'link to further information..?';
	$options[10]['lookup']				= '';
	$options[10]['default']				= '10';
	$options[10]['optional']			= 'no';
	$options[10]['repeatable']			= 'no';
	$options[10]['perdashboard']			= 'yes';
	$options[10]['dependenton']			= '';

	$options[20]['name']				= 'y';
	$options[20]['description']			= 'Please select the y coordinate';
	$options[20]['detail']				= 'This sets the y coordinate to place the element on the dashboard.';
	$options[20]['type']				= 'Integer';
	$options[20]['link']				= 'link to further information..?';
	$options[20]['lookup']				= ''; 
	$options[20]['default']				= '10';
	$options[20]['optional']			= 'no';
	$options[20]['repeatable']			= 'no';
	$options[20]['perdashboard']			= 'yes';
	$options[20]['dependenton']			= '';
	
	

	$options[45]['name']				= 'width';
	$options[45]['description']			= 'Width of map';
	$options[45]['detail']				= 'This is the width of the map in pixels';
	$options[45]['type']				= 'Integer';
	$options[45]['link']				= 'link to further information..?';
	$options[45]['lookup']				= ''; 
	$options[45]['default']				= '';
	$options[45]['optional']			= 'no';
	$options[45]['repeatable']			= 'no';
	$options[45]['perdashboard']			= 'yes';
	$options[45]['dependenton']			= '';
	
	$options[55]['name']				= 'height';
	$options[55]['description']			= 'Height of map';
	$options[55]['detail']				= 'This is the height of the map in pixels';
	$options[55]['type']				= 'Integer';
	$options[55]['link']				= 'link to further information..?';
	$options[55]['lookup']				= ''; 
	$options[55]['default']				= '';
	$options[55]['optional']			= 'no';
	$options[55]['repeatable']			= 'no';
	$options[55]['perdashboard']			= 'yes';
	$options[55]['dependenton']			= '';

	$options[60]['name']				= 'tablename';
	$options[60]['description']			= 'Alternative table namea';
	$options[60]['detail']				= 'If you like to use a table to draw your data, provide the table name';
	$options[60]['type']				= 'Text';
	$options[60]['link']				= 'link to further information..?';
	$options[60]['lookup']				= '';
	$options[60]['default']				= '';
	$options[60]['optional']			= 'no';
	$options[60]['repeatable']			= 'no';
	$options[60]['perdashboard']			= 'no';
	$options[60]['dependenton']			= '';

	$options[70]['name']				= 'geometrycolumnname';
	$options[70]['description']			= 'Alternative geometry column name';
	$options[70]['detail']				= 'If you like to use a table to draw your data, provide the geometry column name';
	$options[70]['type']				= 'Text';
	$options[70]['link']				= 'link to further information..?';
	$options[70]['lookup']				= ''; 
	$options[70]['default']				= '';
	$options[70]['optional']			= 'yes';
	$options[70]['repeatable']			= 'no';
	$options[70]['perdashboard']			= 'no';
	$options[70]['dependenton']			= '';

	$options[80]['name']				= 'lookupcolumnname';
	$options[80]['description']			= 'Lookup column name';
	$options[80]['detail']				= 'If you like to use a table to draw your data you can provide a lookup column name';
	$options[80]['type']				= 'Text';
	$options[80]['link']				= 'link to further information..?';
	$options[80]['lookup']				= ''; 
	$options[80]['default']				= '';
	$options[80]['optional']			= 'yes';
	$options[80]['repeatable']			= 'no';
	$options[80]['perdashboard']			= 'no';
	$options[80]['dependenton']			= '';

	$options[85]['name']				= 'lookupcolumnvalue';
	$options[85]['description']			= 'Lookup column value';
	$options[85]['detail']				= 'If you provide a lookup column name, you have to give a value to look for.';
	$options[85]['type']				= 'Text';
	$options[85]['link']				= 'link to further information..?';
	$options[85]['lookup']				= ''; 
	$options[85]['default']				= '';
	$options[85]['optional']			= 'yes';
	$options[85]['repeatable']			= 'no';
	$options[85]['perdashboard']			= 'no';
	$options[85]['dependenton']			= '';


	$options[90]['name']				= 'layertype';
	$options[90]['description']			= 'Type of layer';
	$options[90]['detail']				= 'Select the type of features that you would like to input';
	$options[90]['type']				= 'Dropdown';
	$options[90]['link']				= 'link to further information..?';
	$options[90]['lookup']				= 'none|Point|Line|Polygon'; 
	$options[90]['default']				= 'none';
	$options[90]['optional']			= 'no';
	$options[90]['repeatable']			= 'no';
	$options[90]['perdashboard']			= 'no';
	$options[90]['dependenton']			= '';
	


	return($options);
}

function validate_map($id, $value)
{  
	global $db;

	$select = $db->select();
	$columns['value']	= $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');

	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');	
	workflow_input($result[0]['sid']);
	
	return $value;
}



function place_input_map($sid, $value, $options, $setup)
{
	global $db;
	
	$data = reload_input_map($sid, $value, $options, $setup);
	$value = $data['value'];

	$dashboard_options = $options['dashboard_options'];
	echo '<div id="cover'.$sid.'">';
	echo '<div id="element'.$sid.'" style="z-index:10; position:absolute; top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; width:'.$dashboard_options['width'].'px; height:'.$dashboard_options['height'].'px;">
		  </div>';
	//reload_input_map($sid, $value, $dashboard_options['x'], $dashboard_options['y'], $options, $sid);
	echo '</div>';


	echo '	<script>
	
				OpenLayers.IMAGE_RELOAD_ATTEMPTS = 3;
				OpenLayers.Util.onImageLoadErrorColor = "transparent";
				function addthisfeature'.$sid.'(feature)
				{
					var from = new OpenLayers.Projection("EPSG:900913");
					var to = new OpenLayers.Projection("EPSG:4326");
					feature.transform(from, to);
					validate_map("'.$setup['value_svid'].'", feature.toString(), {});
					var data = new Array();
					data["value"]=feature.toString();
					update'.$sid.'(0,data);
				}
				
				function mapEvent'.$sid.'()
				{
					var bounds = map'.$sid.'.getExtent();
					setCookie("left'.$sid.'"	,bounds.left	,365);
					setCookie("right'.$sid.'"	,bounds.right	,365);
					setCookie("top'.$sid.'"		,bounds.top	,365);
					setCookie("bottom'.$sid.'"	,bounds.bottom	,365);
				}

				var vector'.$sid.' = new OpenLayers.Layer.Vector("Features");';
	    echo '		var options'.$sid.' =
				{
					projection: new OpenLayers.Projection("EPSG:900913"),
					displayProjection: new OpenLayers.Projection("EPSG:4326"),
					units: "m",
					numZoomLevels: 21,
					maxResolution: 156543.0339,
					maxExtent: new OpenLayers.Bounds(-20037508, -20037508,
                                                 20037508, 20037508.34),
					controls: [	new OpenLayers.Control.Navigation(), 
								new OpenLayers.Control.PanZoomBar(),
//								new OpenLayers.Control.EditingToolbar(vector)
								],
					eventListeners: {
							"moveend": mapEvent'.$sid.',
							"zoomend": mapEvent'.$sid.',
//							"changelayer": mapLayerChanged,
//							"changebaselayer": mapBaseLayerChanged
						}			 
				};
				map'.$sid.' = new OpenLayers.Map(\'element'.$sid.'\', options'.$sid.');';

	switch ($options['layertype']){
	    case 'Point':
		echo '	var panelControls'.$sid.' = [
					 new OpenLayers.Control.Navigation(),
					 new OpenLayers.Control.DrawFeature(vector'.$sid.',
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
		echo '	var panelControls'.$sid.' = [
					 new OpenLayers.Control.Navigation(),
					 new OpenLayers.Control.DrawFeature(vector'.$sid.',
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
		echo '	var panelControls'.$sid.' = [
					 new OpenLayers.Control.Navigation(),
					 new OpenLayers.Control.DrawFeature(vector'.$sid.',
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

				


	echo '			var gphy'.$sid.' = new OpenLayers.Layer.Google(
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
				map'.$sid.'.addLayers([gphy'.$sid.', gsat'.$sid.', gmap'.$sid.', ghyb'.$sid.', vector'.$sid.']);
				
				var bounds'.$sid.' = new OpenLayers.Bounds(-19254793, -19254793, 19254793, 19254793.34);
				
				var left = getCookie("left'.$sid.'");
				if(left!=null)
				{
					bounds'.$sid.' = new OpenLayers.Bounds(getCookie("left'.$sid.'"), getCookie("bottom'.$sid.'"), getCookie("right'.$sid.'"), getCookie("top'.$sid.'"));
				}
				map'.$sid.'.zoomToExtent(bounds'.$sid.', true);

			</script>
			';	
		  
	echo '	<script language="JavaScript" type="text/javascript">
				function update'.$sid.'(dashboard, response)
				{
					vector'.$sid.'.destroyFeatures();
					if(response.value!="")
					{
						var format = new OpenLayers.Format.WKT();
						var feature = format.read(response.value);
						var to = new OpenLayers.Projection("EPSG:900913");
						var from = new OpenLayers.Projection("EPSG:4326");
						
						feature.geometry.transform(from, to);
						vector'.$sid.'.addFeatures([feature]);
					}
					document.getElementById("element'.$sid.'").style.border=\'none\';
				}
				var data'.$sid.'=new Array();
				data'.$sid.'["value"]="'.$value.'";
				update'.$sid.'(0, data'.$sid.');
				function reload'.$sid.'(dashboard, response)
				{
					
					place_input(dashboard, '.$sid.', {\'content_type\': \'json\', \'onUpdate\': function(response,xmlhttp){reload_update'.$sid.'(response)}});
				}
				function mark'.$sid.'(dashboard, response)
				{
					document.getElementById("element'.$sid.'").style.border=\'1px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					
					document.getElementById("element'.$sid.'").style["top"]=response.y;
					document.getElementById("element'.$sid.'").style["left"]=response.x;
					document.getElementById("element'.$sid.'").style.border=\'0px none\';
					update'.$sid.'(0, response);
				}
			</script>';
			
			


			
			
			
}

function reload_input_map($sid, $value, $options, $setup)
{
	global $db;
	
	$dashboard_options = $options['dashboard_options'];

	$content['size_x'] = $dashboard_options['width']."px";
	$content['size_y'] = $dashboard_options['height']."px";
	$content['x'] = $dashboard_options['x'];
	$content['y'] = $dashboard_options['y'];

	if(isset($options['tablename']) and ($options['tablename']!='') and isset($options['geometrycolumnname']) and ($options['geometrycolumnname']!='')) {
	    $sql = 'SELECT astext(ST_Multi(ST_Collect(f.'.$options['geometrycolumnname'].'))) as the_geom  FROM (SELECT (ST_Dump(the_geom)).geom As the_geom FROM '.$options['tablename'];
	    if(isset($options['lookupcolumnname']) and  
		    ($options['lookupcolumnname']!='') and 
	       isset($options['lookupcolumnvalue']) and
	    	    ($options['lookupcolumnvalue']!=''))
		if(is_numeric($options['lookupcolumnvalue']))
		    $sql .= ' where "'.$options['lookupcolumnname'].'"='.$options['lookupcolumnvalue'];
		else
		    $sql .= ' where "'.$options['lookupcolumnname'].'"=\''.$options['lookupcolumnvalue'].'\'';
	    $sql .= ') As f';
	    $result = $db->fetchAll($sql);
	    $content['value'] = $result[0]['the_geom'];
	} else
	    $content['value'] = $value;

	return($content);
}
function map_rtrn_default_value($sid, $options)
{

}

<?
if(isset($dashboard_setup)) {
    function getsetup_module_blmscenario() {
#---------- set the parameters that you want here -------

    }
}
else {
    if(isset($_GET['id'])) {
	require_once('../../includes/environment.php');
	$sid	 = $_GET['id'];
    }
    else {
	require_once('includes/environment.php');
	$sid	 = $argv[1];
    }

# get current inputs	
    $data	 = get_inputs($db);
    $variables	 = get_simple_results($db);

#---------- add your content here -----------------------

switch($data['ScenarioSelector'])
{
        case "Business as usual":
                $sql1 = 'update station_variables set value=(\' \') where svid=1368;';
//              $energy_added = 0;
                break;
        case "BLM study area power plants":
                $sql1 = 'update station_variables set value=(select astext(buffer(collect(the_geom),0)) from blm_scenarios where gid<4) where svid=1368;';
//              $energy_added = 2.7;
                break;
        case "Enhanced by west power plants":
                $sql1 = 'update station_variables set value=(select astext(buffer(collect(the_geom),0)) from blm_scenarios where gid<7) where svid=1368;';
//              $energy_added = 6.7;
                break;
        case "East (Tres Amigas) power plants":
                $sql1 = 'update station_variables set value=(select astext(buffer(collect(the_geom),0)) from blm_scenarios) where svid=1368;';
//              $energy_added = 10;
                break;
        default:
                $sql1 = 'update station_variables set value=(\' \') where svid=1368;';
//              $energy_added = 0;
                break;
}


# actual analysis
//Location
//      $stmt   = $db->query('select x(centroid(ST_GeomFromText(\''.$data['Input Map'].'\',4326))) as long, y(centroid(ST_GeomFromText(\''.$data['Input Map'].'\',4326))) as lat');
//      $result = $stmt->fetchAll();







#------------ writing content
# writing the data into the table
        //$sql  = 'update result_simple_variables set value=(\''.round($result[0]['production'],2).'\') where id=7;';
        //echo $sql;
        //$sql = 'update station_variables set value=(\''.$polygon.'\') where svid=1368';

        $result = $db->fetchAll($sql1);


# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
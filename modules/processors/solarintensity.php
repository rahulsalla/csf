<?
if(isset($dashboard_setup)) {
    function getsetup_module_solarintensity() {
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

$dbconn = pg_connect("host=dp.emo-it.com port=5432 dbname=rob_azsmart_level user=rob");

//Solar Radiation
        $res = pg_query ($dbconn, 'select sum((dniann / 1000) * area(transform(st_intersection(buffer(a01_arizona_solar_intensity.the_geom,0), ST_GeomFromText(\''.$data['Input Map'].'\',4326)),32612)) / 1000000) as solar_intensity from a01_arizona_solar_intensity where a01_arizona_solar_intensity.the_geom && ST_GeomFromText(\''.$data['Input Map'].'\',4326)');
        $result = pg_fetch_all($res);

# writing the data into the table
        $sql = 'update result_simple_variables set value=(\''.round($result[0]['solar_intensity'],2).'\') where id=8;';
        $result = $db->fetchAll($sql);

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
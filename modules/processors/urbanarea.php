<?
if(isset($dashboard_setup)) {
    function getsetup_module_urbanarea() {
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

//Distance to Closest Urban Area
        $res = pg_query ($dbconn, 'select a18_urban_areas.name, distance(transform(a18_urban_areas.the_geom,32612), transform(ST_GeomFromText(\''.$data['Input Map'].'\',4326),32612))/1000 as urban_dist from a18_urban_areas order by urban_dist asc limit 1;');
        $result = pg_fetch_all($res);

# writing the data into the table
        $res = pg_query ($dbconn, 'update result_simple_variables set value=(\''.$result[0]['name'].', '.round ($result[0]['urban_dist'],2).'\' ) where id=9;');
        $result = pg_fetch_all($res);

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
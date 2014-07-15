<?
if(isset($dashboard_setup)) {
    function getsetup_module_precipitation() {
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

//Precipitation in Acre-Feet
        $res = pg_query ($dbconn, 'select sum(((arizpcp_14)/12)*(area(transform(intersection(preci_2009_az.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326)),32612))*(0.0002471))) as preci_acre_feet from preci_2009_az where intersects(preci_2009_az.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326));');
        $result = pg_fetch_all($res);

        $sql = 'update result_simple_variables set value=(\''.round($result[0]['preci_acre_feet'],2).'\') where id=6;';
        $result= $db->fetchAll($sql);

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
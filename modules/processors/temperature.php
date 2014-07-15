
<?
if(isset($dashboard_setup)) {
    function getsetup_module_temperature() {
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

//Maximum Temperature
        $res = pg_query ($dbconn, 'select avg(range) as max_temp from az_temp_maximum where intersects (az_temp_maximum.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326))');
        $result = pg_fetch_all($res);

        $sql = 'update result_simple_variables set value=(\''.round($result[0]['max_temp'],2).'\') where id=4;';
        $result= $db->fetchAll($sql);

//Minimum Temperature
        $res = pg_query ($dbconn, 'select avg(range) as min_temp from min_temp_az where intersects (min_temp_az.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326))');
        $result = pg_fetch_all($res);

        $sql = 'update result_simple_variables set value=(\''.round($result[0]['min_temp'],2).'\') where id=5;';
        $result= $db->fetchAll($sql);


# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
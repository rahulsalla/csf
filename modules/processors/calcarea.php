<?
if(isset($dashboard_setup)) {
    function getsetup_module_calcarea() {
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

//Location
        $res = pg_query ($dbconn, 'select x(centroid(ST_GeomFromText(\''.$data['Input Map'].'\',4326))) as long, y(centroid(ST_GeomFromText(\''.$data['Input Map'].'\',4326))) as lat');
        $result = pg_fetch_all($res);

# writing the data into the table
        $sql = 'update result_simple_variables set value=(\''.round($result[0]['long'],2).', '.round ($result[0]['lat'],2).'\' ) where id=3;';
        $result = $db->fetchAll($sql);

//Area
        $res = pg_query ($dbconn, 'select area(transform(ST_GeomFromText(\''.$data['Input Map'].'\',4326),32612))/1000000 as site_area');
        $result = pg_fetch_all($res);

# writing the data into the table

        $sql = 'update result_simple_variables set value=(\''.round($result[0]['site_area'] * 247.1,2).'\') where id=1;';
        $result = $db->fetchAll($sql);

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
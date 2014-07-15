<?
if(isset($dashboard_setup)) {
    function getsetup_module_dist_transmission() {
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

# Analysis
        $res = pg_query($dbconn, 'select distance(transform(a14_transmission_lines.the_geom,32612), transform(ST_GeomFromText(\''.$data['Input Map'].'\',4326),32612))/1000 as trans_dist from a14_transmission_lines order by trans_dist asc limit 1;');
        $result = pg_fetch_all($res);
        var_dump($result);

# writing result into table

        if ($result[0]['trans_dist'] > .09)
        {
    $sql = pg_query ($dbconn, 'update result_simple_variables set value=(\''.round($result[0]['trans_dist'],2).' km\' ) where id=17;');
    $result = pg_fetch_all($sql);
        }
        else
        {
        $sql = pg_query ($dbconn, 'update result_simple_variables set value=(\''.round($result[0]['trans_dist'],2).' km (on the site)\') where id=17;');
    $result = pg_fetch_all($sql);
        }

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
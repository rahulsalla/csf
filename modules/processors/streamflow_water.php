<?
if(isset($dashboard_setup)) {
    function getsetup_module_streamflow_water() {
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

# actual analysis
//Distance to Closest Stream
    $res = pg_query ($dbconn, 'select surface_stream_flow.site_name, huc, site_type, status, total_mean*723.966 as total_mean_acreft, water_year, annual_dis*723.966 as annual_dis_acreft, distance(transform(surface_stream_flow.the_geom,32612),transform(ST_GeomFromText(\''.$data['Input Map'].'\',4326),32612))/1000 as stream_dist from surface_stream_flow order by stream_dist asc limit 1;');
        $result = pg_fetch_all($res);
        var_dump($result);

# writing the data into the table

        $res = pg_query ($dbconn, 'update result_simple_variables set value=(\''.$result[0]['site_name'].' ('.round ($result[0]['stream_dist'],2).'km)\' ) where id=12;');
        pg_fetch_all($res);

# writing the data into the table

        $res = pg_query ($dbconn,'update result_simple_variables set value=(\''.$result[0]['huc'].', '.$result[0] ['site_type'].', '.$result[0]['status'].'\') where id=13;');
        pg_fetch_all($res);

# writing the data into the table

        $res = pg_query ($dbconn,'update result_simple_variables set value=(\''.round ($result[0]['total_mean_acreft'],2).', '.$result[0] ['water_year'].'\') where id=14;');
        pg_fetch_all($res);

# writing the data into the table

        $res = pg_query ($dbconn,'update result_simple_variables set value=(\''.round ($result[0]['annual_dis_acreft'],2).'\') where id=15;');
        pg_fetch_all($res);


# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
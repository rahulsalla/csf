<?
if(isset($dashboard_setup)) {
    function getsetup_module_closestream() {
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

/*

//Distance to Nearest Stream
$stmt           = $db->query('select distance(transform(surface_stream_flow.the_geom,32612), transform(ST_GeomFromText(\''.$data['Input Map'].'\',4326),32612))/1000 as stream_dist from surface_stream_flow order by distance asc limit 1;');
$result     = $stmt->fetchAll();

# writing the data into the table
$sql = 'update result_simple_variables set value=(\''.round($result[0]['stream_dist'],2).'\') where id=10;';
echo $sql;
$result= $db->fetchAll($sql);
*/

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
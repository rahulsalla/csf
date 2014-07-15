
<?
if(isset($dashboard_setup)) {
    function getsetup_module_slope() {
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

//Slope
        $sql = pg_query ($dbconn,'SELECT abs(100 - sum(area(intersection(az_dni_5pctslope_noexcl.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326)))/area(ST_GeomFromText(\''.$data['Input Map'].'\',4326))) * 100) as percentage FROM az_dni_5pctslope_noexcl WHERE Envelope(ST_GeomFromText(\''.$data['Input Map'].'\',4326)) && az_dni_5pctslope_noexcl.the_geom;');
        $result = pg_fetch_all($sql);
    var_dump($result);

# writing the data into the table
        $sql = pg_query ($dbconn,'update result_simple_variables set value=(\''.round($result[0]['percentage'],2).'\') where id=23;');
        $result = pg_fetch_all($sql);



# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
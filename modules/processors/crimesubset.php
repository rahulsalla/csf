<?
error_reporting(E_ALL);
#ini_set('error_reporting','E_ALL | E_STRICT');
if(isset($dashboard_setup)) {
function getsetup_module_crimesubset() {
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

#file_put_contents('/tmp/info',"In crimesubset\n",FILE_APPEND);

# get current inputs	
    $data	 = get_inputs($db);
    $variables	 = get_simple_results($db);

#---------- add your content here -----------------------
$sql0 = 'delete from rob_test_tempe_police_result_subset';

$sql1 = 'insert into rob_test_tempe_police_result_subset select the_geom, extract(month from date1) as month, crimetyp, detail from rob_test_tempe_police where (EXTRACT(YEAR FROM date1)=\''.$data['Police_Year'].'\') and (crimetyp=\''.$data['Police_Crimetype'].'\');';

$sql2 = 'update result_simple_variables set value=(select count(*) from rob_test_tempe_police_result_subset) where id=25;';


#------------ writing content
# writing the data into the table
        //$sql  = 'update result_simple_variables set value=(\''.round($result[0]['production'],2).'\') where id=7;';
        //echo $sql;
        //$sql = 'update station_variables set value=(\''.$polygon.'\') where svid=1368';
        $result = $db->fetchAll($sql0);

        $result = $db->fetchAll($sql1);

        $result = $db->fetchAll($sql2);

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}

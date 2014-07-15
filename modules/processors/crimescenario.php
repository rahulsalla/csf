<?
if(isset($dashboard_setup)) {
    function getsetup_module_crimescenario() {
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

$sql1 = 'update station_variables set value=(select astext(collect(the_geom)) from rob_test_tempe_police_result_subset) where svid=4835;';
//echo $sql1;


#------------ writing content
# writing the data into the table
        //$sql  = 'update result_simple_variables set value=(''.round($result[0]['production'],2).'') where id=7;';
        //echo $sql;
        //$sql = 'update station_variables set value=(''.$polygon.'') where svid=1368';

        $result = $db->fetchAll($sql1);


# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
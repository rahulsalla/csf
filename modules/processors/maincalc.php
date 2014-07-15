<?
if(isset($dashboard_setup)) {
    function getsetup_module_maincalc() {
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

# actual analysis
    $peak = $variables['site_area']/$variables['land per mw'];

# writing peak output info into the table
    $sql = 'update result_simple_variables set value=(\''.round($peak,0).'\') where id=7;';
    $result     = $db->fetchAll($sql);

# water in acre-feet/year
    $water = $peak * $variables['water required']* 24 * ($data['CustomTechnologyCapacityFactor']/100) / 1000 *  0.00306888328 * 365;

# writing water info into the table
    $sql = 'update result_simple_variables set value=(\''.round($water,0).'\') where id=11;';
        echo $sql;
    $result     = $db->fetchAll($sql);


# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
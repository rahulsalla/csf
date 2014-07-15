
<?
if(isset($dashboard_setup)) {
    function getsetup_module_calcoutput() {
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
# get powerplant information
#       $sql = 'select * from waterconsumption where "Technology Type"='.$data['Technology'].' and "method"='.$data['Cooling'];
#       $result = $db->fetchAll($sql);

# actual analysis
        $info   = $data['CustomTechnologyWaterUse'];
        #$result[0]['Max Water Required'];

# writing water info into the table
        $sql = 'update result_simple_variables set value=(\''.$info.'\') where id=2;';
        echo $sql;
        $result = $db->fetchAll($sql);

# get powerplant information
#       $sql = 'select * from waterconsumption where "Technology Type"='.$data['Technology'].' and "method"='.$data['Cooling'];
#       $result = $db->fetchAll($sql);

# actual analysis
        $info1  = $data['CustomTechnologyAreaUse'];
        #$result[0]['Land per MW'];

# writing land info into the table
        $sql = 'update result_simple_variables set value=(\''.$info1.'\') where id=10;';
        echo $sql;
        $result = $db->fetchAll($sql);

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
<?
if(isset($dashboard_setup)) {
    function getsetup_module_techscenario() {
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
$sql='select * from waterconsumption where "Technology Type"='.$data['Technology'].' and method='.$data['Cooling'].';';
$stmt   = $db->query($sql);
$result = $stmt->fetchAll();

$db->query("update station_variables set value='".$result[0]['Max Water Required']."' where svid=2420");
$db->query("update station_variables set value='".$result[0]['Land per MW']."' where svid=2442");
$db->query("update station_variables set value='".$result[0]['Capacity Factor']."' where svid=2124");

#------------------------------------
# actual analysis
//Location
//      $stmt   = $db->query('select x(centroid(ST_GeomFromText(\''.$data['Input Map'].'\',4326))) as long, y(centroid(ST_GeomFromText(\''.$data['Input Map'].'\',4326))) as lat');
//      $result = $stmt->fetchAll();





#------------ writing content
# writing the data into the table
        //$sql  = 'update result_simple_variables set value=(\''.round($result[0]['production'],2).'\') where id=7;';
        //echo $sql;
        //$sql = 'update station_variables set value=(\''.$polygon.'\') where svid=1368';

        $result = $db->fetchAll($sql1);
*/

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
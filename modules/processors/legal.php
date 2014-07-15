<?
if(isset($dashboard_setup)) {
    function getsetup_module_legal() {
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
/*
//Legal entanglement
$stmt           = $db->query('select "Category" from result_landownership;');
$result     = $stmt->fetchAll();
//var_dump($result);
//Determine which categories are in result_landownership
        $flagFed = 0;
        $flagState = 0;
        $flagTrust = 0;
        $flagIndian = 0;

        foreach ($result as $key => $value)
        {*/
                /* Categories
                * BLM
                * Forest
                * Natl. Parks
                * Wildlife
                * Military (maybe)
                *
                * State Trust
                * Local or State Parks
                * Private
                *
                * Other
                * Indian Res.
                *//*



                //Federal lands
                if($value["Category"] == "BLM" || $value["Category"] == "Forest" || $value["Category"] == "Natl. Parks" || $value["Category"] == "Wildlife" || $value["Category"] == "Military")
                {
                        $flagFed=1;
                }


                //State, Private
                if($value["Category"] == "Local or State Parks" || $value["Category"] == "Private")
                {
                        $flagState=1;
                }

                if ($value["Category"] == "State Trust")
                {
                        $flagState=1;
                        $flagTrust=1;
                }


                if ($value["Category"] == "Indian Res.")
                {
                        $flagIndian=1;
                }


        }

//      echo $flagFed;
//      echo $flagState;
//      echo $flagTrust;
//      echo $flagIndian;


//WRITE RESULTS TO RESULT_LEGAL TABLE
//$stmt         = $db->query('delete from result_legal;');
$sql = 'delete from result_legal;';
$result = $db->fetchAll($sql);

$fedDocs = "'<b>Federal</b>', 'NEPA Environmental Impact Statement'";
$stateAir = "'<b>Air</b> (ADEQ)', 'Individual Permit'";
$stateWaste = "'<b>Waste</b> (ADEQ)', '1. Apply for EPA ID Number <br>2. Hazardous Waste Management Registration <br>3. Treatment, Storage and Disposal Permit <br>4. UST Registration<br>'";
$stateWater = "'<b>Water</b> (ADEQ)', '1. 208 Consistency Review Authorization <br>2. APP General or Individual Permits <br>3. Direct Reuse of Reclaimed Water General or Individual Permits <br>4. Drinking Water Facility Approval of Construction <br>5. Drywell Registration'";
$stateLandDep = "'<b>State Land Department</b>', 'Documentation of native plant species'";
$indianRes = "'<b>Indian Reservation</b>', 'TBA'";

    if ($flagFed == 1)
        {
        $sql = 'insert into result_legal VALUES (' .$fedDocs. ');';
                $result = $db->fetchAll($sql);
        }

    if ($flagState == 1)
        {
        $sql = 'insert into result_legal VALUES (' .$stateAir. ');';
                $result = $db->fetchAll($sql);
        $sql = 'insert into result_legal VALUES (' .$stateWaste. ');';
                $result = $db->fetchAll($sql);
        $sql = 'insert into result_legal VALUES (' .$stateWater. ');';
                $result = $db->fetchAll($sql);
        }

    if ($flagTrust == 1)
        {
        $sql = 'insert into result_legal VALUES (' .$stateLandDep. ');';
                $result = $db->fetchAll($sql);
        }

  if ($flagIndian == 1)
        {
        $sql = 'insert into result_legal VALUES (' .$indianRes. ');';
                $result = $db->fetchAll($sql);
        }
*/

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
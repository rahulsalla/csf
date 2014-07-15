<?
if(isset($dashboard_setup)) {
    function getsetup_module_total_species() {
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

$content = '';

$res = pg_query ($dbconn,'SELECT comname, tier FROM total_species WHERE Envelope(ST_GeomFromText(\''.$data['Input Map'].'\',4326)) && addbbox(total_species.the_geom) and intersects(total_species.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326)) ORDER BY tier limit 5');
//original line -- $res = pg_query ($dbconn,'SELECT comname, tier FROM total_species WHERE Envelope(ST_GeomFromText(\''.$data['Input Map'].'\',4326)) && addbbox(total_species.the_geom) and intersects(total_species.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326))');
$result = pg_fetch_all($res);
var_dump($result);
foreach($result as $row)
{
        $content .= addslashes($row['comname'].' <sup><font size="1px"> '.$row['tier']. '</font></sup><br>');
}

echo $content;
# writing the data into the table

    $res = pg_query ($dbconn,'update result_simple_variables set value=(\''.$content.'\' ) where id=16;');
        pg_fetch_all($res);

# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
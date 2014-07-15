<?
if(isset($dashboard_setup)) {
    function getsetup_module_waterplg_zones() {
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
        $dbconn = pg_connect("host=dp.emo-it.com port=5432 dbname=rob_azsmart_level user=rob");

# actual analysis
// Water Planning Zones
$res = pg_query ($dbconn,'delete from result_waterplng_zones;');
$res = pg_query ($dbconn,'insert into result_waterplng_zones SELECT water_planning_zones.planning_a, round(sum(area(transform(intersection(water_planning_zones.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326)),32612)) * 100 / area(transform(ST_GeomFromText(\''.$data['Input Map'].'\',4326),32612)))::numeric,1) as percentage FROM water_planning_zones WHERE intersects(water_planning_zones.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326)) group by water_planning_zones.planning_a order by percentage desc;delete from result_waterplng_zones where percentage<0.1;');
$sql = 'select count(*) as count from result_waterplng_zones;';
$result= $db->fetchAll($sql);
var_dump($result);
if($result[0]['count']==0)
{
                $sql = 'insert into result_waterplng_zones ("Zone",percentage) values (\'NA\',100);';
                $result= $db->fetchAll($sql);
        }
*/
# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
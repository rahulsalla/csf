<?
if(isset($dashboard_setup)) {
    function getsetup_module_land_ownership() {
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
// Land Ownership
        $res = pg_query ($dbconn,'delete from result_landownership;');
        $res = pg_query ($dbconn,'insert into result_landownership SELECT a13_land_ownership.category, round(sum(area(transform(intersection(a13_land_ownership.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326)),32612)) * 100 / area(transform(ST_GeomFromText(\''.$data['Input Map'].'\',4326),32612)))::numeric,1) as percentage FROM a13_land_ownership WHERE intersects(a13_land_ownership.the_geom, ST_GeomFromText(\''.$data['Input Map'].'\',4326)) group by a13_land_ownership.category order by percentage desc;delete from result_landownership where percentage<0.1;');
        $sql = 'select count(*) as count from result_landownership;';
        $result= $db->fetchAll($sql);
        if($result[0]['count']==0)
        {
                $sql = 'insert into result_landownership ("Category",percentage) values (\'NA\',100);';
                $result= $db->fetchAll($sql);
        }


*/        //var_dump($result);
/*
        foreach ($result as $value)
        {
                $res = pg_query ($dbconn,'update result_landownership set "percentage"=\''.round($value['percentage'],2).'\' where "Category"= \''.$value['category'] .'\';');
                $result = pg_fetch_all($res);
                var_dump($result);
        }

        $result= $db->fetchAll($sql);
*/


# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
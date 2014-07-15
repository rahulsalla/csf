<?
if(isset($dashboard_setup)) {
    function getsetup_module_nearestbus() {
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

/*
//Nearest buses
        //$res = pg_query ($dbconn, 'select q3.id, subnum, subdist, min(number) as number, nomkv, 41.18423027*area(transform(geom_sub,32612))/1000000 as mw_max, x(centroid(geom_sub)) as lon_newplant, y(centroid(geom_sub)) as lat_newplant, x(the_geom) as lon_bus, y(the_geom) as lat_bus from (select q1.id, subnum, number, nomkv,the_geom, geom_sub, distance(q1.geom_sub, bus.the_geom) as subdist from (select (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).path as id, (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).geom as geom_sub from arizona_study_areas_test) as q1, bus) as q4 JOIN (select q2.id, min(distance(q2.geom_sub, bus.the_geom)) from (select (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).path as id, (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).geom as geom_sub from arizona_study_areas_test) as q2, bus group by q2.id) as q3 on min=subdist group by q3.id, subnum, subdist, nomkv,lon_newplant, lat_newplant, lon_bus, lat_bus,q4.geom_sub');
        // wrong $res = pg_query ($dbconn, 'select q3.id, subnum, subdist, idfield, name, min(number), nomkv, 41.18423027*area(transform(geom_sub,32612))/1000000 as mw_max, x(centroid(geom_sub)) as lon_newplant, y(centroid(geom_sub)) as lat_newplant, x(the_geom) as lon_bus, y(the_geom) as lat_bus from (select q1.id, subnum, idfield, name, number, nomkv,the_geom, geom_sub, distance(q1.geom_sub, bus.the_geom) as subdist from (select (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).path as id, (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).geom as geom_sub from arizona_study_areas_test) as q1, bus) as q4 JOIN (select q2.id, min(distance(q2.geom_sub, bus.the_geom)) from (select (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).path as id, (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).geom as geom_sub from arizona_study_areas_test) as q2, bus group by q2.id) as q3 on min=subdist group by q3.id, subnum, subdist, idfield, name, nomkv,lon_newplant, lat_newplant, lon_bus, lat_bus,q4.geom_sub');

        // background
        $res = pg_query ($dbconn, 'select * from (select distinct on (mw_max) * from (select q3.id, subnum, subdist, min(number) as number, nomkv, 247.1*(area(transform(geom_sub,32612))/1000000)/'.$results['land per mw'].' as mw_max, x(centroid(geom_sub)) as lon_newplant, y(centroid(geom_sub)) as lat_newplant, x(the_geom) as lon_bus, y(the_geom) as lat_bus from (select q1.id, subnum, number, nomkv,the_geom, geom_sub, distance(q1.geom_sub, bus.the_geom) as subdist from (select (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).path as id, (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).geom as geom_sub from arizona_study_areas_test) as q1, bus) as q4 JOIN (select q2.id, min(distance(q2.geom_sub, bus.the_geom)) from (select (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).path as id, (st_dump((ST_GeomFromText(\''.$data['Input Map'].'\',4326)))).geom as geom_sub from arizona_study_areas_test) as q2, bus group by q2.id) as q3 on min=subdist group by q3.id, subnum, subdist, nomkv,lon_newplant, lat_newplant, lon_bus, lat_bus,q4.geom_sub order by nomkv desc) as q5) as q6 order by id');

        $result = pg_fetch_all($res);
        //var_dump($result);


#---------- Connecting to Powerworld update via file
        $a = mt_rand();
        $t = filemtime ('/home/htdocs/projects/azsmart/intercom/powerworld_out.txt');
        $fp = fopen('/home/htdocs/projects/azsmart/intercom/powerworld.txt', 'wt');

        fwrite($fp,"[Commands]\r\n");

        $i=0;
        foreach ($result as $value)
        {
                $i++;
                if($value['id']=='{}') $value['id']='{'.$i.'}';
                fwrite($fp, "new,substation,".substr($value["id"],1,-1).",".$value["nomkv"].",".$value["mw_max"].",".$value["lon_newplant"].",".$value["lat_newplant"]."\r\n");
        }

        $i=0;
        foreach ($result as $value)
        {
                $i++;
                //fwrite($fp, "new,line,$i,".$value["nomkv"].",".$value["subnum"].",".$value["id"].",".$value["number"].",".$value["lon_bus"].",".$value["lat_bus"].",".$value["lon_newplant"].",".$value["lat_newplant"]."\r\n");
                if($value['id']=='{}') $value['id']='{'.$i.'}';
                fwrite($fp, "new,line,$i,".$value["nomkv"].",".substr($value["id"],1,-1).",".$value["subnum"].",".$value["number"].",".$value["lon_bus"].",".$value["lat_bus"].",".$value["lon_newplant"].",".$value["lat_newplant"]."\r\n");
        }
        fclose($fp);

        $fp = fopen('/home/htdocs/projects/azsmart/intercom/powerworld_opt.txt', 'wt');
        fwrite($fp,"[Options]\r\n");
        fwrite($fp,"enableproposedlines = ".$data['ProposedPowerlines']."\r\n");
        fwrite($fp,"showcontingency = ".$data['Contingency']."\r\n");
        fclose($fp);

        $m = filemtime ('/home/htdocs/projects/azsmart/intercom/powerworld_out.txt');
        while($t == $m)
        {
                sleep(1);
                clearstatcache();
                $m = filemtime ('/home/htdocs/projects/azsmart/intercom/powerworld_out.txt');
        }

        $info = file('/home/htdocs/projects/azsmart/intercom/powerworld_out.txt');
        for($i=1;$i<4;$i++) echo $info[$i]."<br>";
        $res = pg_query ($dbconn,'update result_simple_variables set value=(\''.(round($info[1])+$results['base_year']).'\') where id=19;');
        $res = pg_query ($dbconn,'update result_simple_variables set value=(\''.(round($info[2])/2).'\') where id=20;');
        $res = pg_query ($dbconn,'update result_simple_variables set value=(\''.(round($info[2])/2).'\') where id=21;');
        $res = pg_query ($dbconn,'update result_simple_variables set value=(\''.(round($info[2])).'\') where id=22;');
*/


# Make sure to write the data into a table 
#---------- end of userdefined content ------------------

workflow_done($sid);
}
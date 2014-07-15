<?php

session_start();
$pgconfig=true;
require_once("../../includes/config.php"); 
$shapefiles=$_SESSION["shapefiles"];
$tmp_dir = $configuration ['tmp_path'];
?>
<html>
    <body>

<?php

if(isset($_POST["id"]))
{
	$_SESSION['tbl']=$_POST['tbl'];
	
	echo ' Loading Shapefile: '.$shapefiles[$_POST["id"]]["shp"].'<br><br>';

	echo "Reprojecting to Lat-Long:<br>";
	
	if(!file_exists($tmp_dir."/tmp_rep".session_id())) mkdir($tmp_dir."/tmp_rep".session_id());
        echo "ogr2ogr -skipfailures -t_srs EPSG:4326 -f \"ESRI Shapefile\" ".$tmp_dir."/tmp_rep".session_id()."/".$shapefiles[$_POST["id"]]['shp']." ".$tmp_dir."/tmp_".session_id()."/".$shapefiles[$_POST["id"]]['shp']."<br><br>";
	$export1 = shell_exec("ogr2ogr -skipfailures -t_srs EPSG:4326 -f \"ESRI Shapefile\" ".$tmp_dir."/tmp_rep".session_id()."/".$shapefiles[$_POST["id"]]['shp']." ".$tmp_dir."/tmp_".session_id()."/".$shapefiles[$_POST["id"]]['shp']);
	echo $export1."<br>";

	echo "Generating Import Data:<br>";
	echo $configuration['shp2pgsql_path'].' -s 4326 '.$tmp_dir.'/tmp_rep'.session_id()."/".$shapefiles[$_POST["id"]]["shp"].' '.$_SESSION['tbl'].' > '.$tmp_dir.'/tmp_rep'.session_id()."/".$shapefiles[$_POST["id"]]["shp"].'.sql<br>';
	$export2 = passthru($configuration['shp2pgsql_path'].' -s 4326 '.$tmp_dir.'/tmp_rep'.session_id()."/".$shapefiles[$_POST["id"]]["shp"].' '.$_SESSION['tbl'].' > '.$tmp_dir.'/tmp_rep'.session_id()."/".$shapefiles[$_POST["id"]]["shp"].'.sql 2>&1');
	echo $export2."<br>";

	echo "Importing Data:<br>";
	echo 'psql -h '.$database['host'].' -q -f '.$tmp_dir.'/tmp_rep'.session_id()."/".$shapefiles[$_POST["id"]]["shp"].'.sql -d '.$database['dbname'].' -U '.$database['username'].' 2>&1"'."<br>";
#	echo '/bin/bash -c "PGPASSWORD=\"'.$database['password'].'\\" psql -h '.$database['host'].' -q -f '.$tmp_dir.'/tmp_rep'.session_id()."/".$shapefiles[$_POST["id"]]["shp"].'.sql -d '.$database['dbname'].' -U '.$database['username'].' 2>&1"';
	$export3 = passthru('/bin/bash -c "PGPASSWORD=\"'.$database['password'].'\\" psql -h '.$database['host'].' -q -f '.$tmp_dir.'/tmp_rep'.session_id()."/".$shapefiles[$_POST["id"]]["shp"].'.sql -d '.$database['dbname'].' -U '.$database['username'].' 2>&1"');
	echo $export3;

/*	
	unlink('/tmp/'.$_FILES['shp']['name']);
	unlink('/tmp/'.$_FILES['prj']['name']);
	unlink('/tmp/'.$_FILES['dbf']['name']);
	unlink('/tmp/'.$_FILES['shx']['name']);
*/	
#	unlink('/tmp/'.$_FILES['sbn']['name']);
#	unlink('/tmp/'.$_FILES['sbx']['name']);
#	unlink('/tmp/'.$_FILES['shp']['name'].'.sql');

}

?>
    </body>
</html>

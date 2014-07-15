<?
error_reporting(E_ALL & !E_NOTICE & !E_DEPRECATED);
session_start();

$shapefiles=$_SESSION["shapefiles"];
?>
<html>
    <body>

<?

if(isset($_GET["id"]))
{

    #echo strtolower(basename($shapefiles[$_GET["id"]]["csv"],".csv"));

	echo ' Insert CSV\'s:<br><br>';

	echo '
		<form action="load.php" method="POST" enctype="multipart/form-data">
		<table name="ta" id="ta">
		<tr><td>Building Table:</td><td><input name="tbl" type="text" size="35" maxlength="150" value="'.strtolower(basename($shapefiles[$_GET["id"]]["csv"],".csv")).'"></td></tr>		
        </tr>
		</table>
		<br><input type="submit" name="load" value="&nbsp;&nbsp;Load&nbsp;&nbsp;">
		<input type="hidden" name="id" value="'.$_GET["id"].'">
		</form>'; 
}


#	echo '/usr/local/pgsql/bin/shp2pgsql /tmp/'.$_FILES['shp']['name'].' '.$_POST['tbl'].' > /tmp/'.$_FILES['shp']['name'].'.sql<br>';
#	$export1=exec('/usr/local/pgsql/bin/shp2pgsql /tmp/'.$_FILES['shp']['name'].' '.$_POST['tbl'].' > /tmp/'.$_FILES['shp']['name'].'.sql');
#        echo "/usr/local/bin/ogr2ogr -f PostgreSQL PG:'host=".$_POST['host']." user=".$_POST['name']." password=".$_POST['pw']." dbname=".$_POST['db']." ' /tmp/".$_FILES['shp']['name'];

#      echo "/usr/local/bin/ogr2ogr -t_srs EPSG:4326 -f PostgreSQL PG:'host=".$_POST['host']." user=".$_POST['name']." password=".$_POST['pw']." dbname=".$_POST['db']." ' /tmp/".$_FILES['shp']['name'];
#	$export1=exec("/usr/local/bin/ogr2ogr -t_srs EPSG:4326 -f PostgreSQL PG:'host=".$_POST['host']." user=".$_POST['name']." password=".$_POST['pw']." dbname=".$_POST['db']." ' /tmp/".$_FILES['shp']['name']);
#	echo $export1;

#	echo '/usr/local/pgsql/bin/psql -f /tmp/'.$_FILES['shp']['name'].'.sql -d '.$_POST['db'].' -U '.$_POST['name']."<br>";
#	$export2=exec('/usr/local/pgsql/bin/psql -f /tmp/'.$_FILES['shp']['name'].'.sql -d '.$_POST['db'].' -U '.$_POST['name']);
#	echo $export2;
/*	
	unlink('/tmp/'.$_FILES['shp']['name']);
	unlink('/tmp/'.$_FILES['prj']['name']);
	unlink('/tmp/'.$_FILES['dbf']['name']);
	unlink('/tmp/'.$_FILES['shx']['name']);
*/	
#	unlink('/tmp/'.$_FILES['sbn']['name']);
#	unlink('/tmp/'.$_FILES['sbx']['name']);
#	unlink('/tmp/'.$_FILES['shp']['name'].'.sql');


?>
</body>
</html>

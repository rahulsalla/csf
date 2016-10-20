<?
error_reporting(E_ALL & !E_NOTICE & !E_DEPRECATED);
    session_start();
?>

<html>
    <head>
	<meta http-equiv="refresh" content="2; frame2.php">
    </head>
    <body>
<?
    $j=0;
    for($i=1; $i<=$_SESSION["FileCount"];$i++)
    {
	#echo $_SESSION["FileNames"][$i]["name"]."<br>";
	if(strrchr($_SESSION["FileNames"][$i]["name"],".")==".shp")
	{
	    $j++;
	    $shapefiles[$j]["shp"]=$_SESSION["FileNames"][$i]["name"];
	}
    }
    echo "Found shapefiles: ".count($shapefiles)."<br>";
    
    for($i=1; $i<=count($shapefiles);$i++)
    {
	echo $shapefiles[$i]["shp"];

	$basename=basename($shapefiles[$i]["shp"],".shp");
	$k=0;
	for($j=1; $j<=$_SESSION["FileCount"];$j++)
	{
	    if($basename.".prj"==$_SESSION["FileNames"][$j]["name"])
	    {
		$shapefiles[$i]["prj"]=true;
		$k++;
	    }
	    if($basename.".dbf"==$_SESSION["FileNames"][$j]["name"])
	    {
		$shapefiles[$i]["dbf"]=true;
		$k++;
	    }
	    if($basename.".shx"==$_SESSION["FileNames"][$j]["name"])
	    {
		$shapefiles[$i]["shx"]=true;
		$k++;
	    }
	}
	if($shapefiles[$i]["prj"]) echo '<font color="00FF00"> .prj</font>';
	else echo '<font color="FF0000"> .prj</font>';

	if($shapefiles[$i]["dbf"]) echo '<font color="00FF00"> .dbf</font>';
	else echo '<font color="FF0000"> .dbf</font>';

	if($shapefiles[$i]["shx"]) echo '<font color="00FF00"> .shx</font>';
	else echo '<font color="FF0000"> .shx</font>';
	
	$_SESSION["shapefiles"]=$shapefiles;

	if($k==3)
	{
	    echo ' --> <a href="frame3.php?id='.$i.'" target="databaseinfo">Load '.$basename.'</a><br><br>';
	}
    }
    $_SESSION["shapefiles"]=$shapefiles;

    echo "<br><br>".session_id()."<br>";
?>
    </body>
</html>
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
#	echo $_SESSION["FileNames"][$i]["name"]."<br>";
	if(strrchr($_SESSION["FileNames"][$i]["name"],".")==".csv")
	{
	    $j++;
	    $shapefiles[$j]["csv"]=$_SESSION["FileNames"][$i]["name"];
	}
    }
    echo "Found CSV-files: ".count($shapefiles)."<br>";
    
    for($i=1; $i<=count($shapefiles);$i++)
    {
	echo $shapefiles[$i]["csv"];

	$basename=basename($shapefiles[$i]["csv"],".csv");
	$k=0;
	
	$_SESSION["shapefiles"]=$shapefiles;

	if($k==0)
	{
	    echo ' --> <a href="frame3.php?id='.$i.'" target="databaseinfo">Load '.$basename.'</a><br><br>';
	}
    }
    $_SESSION["shapefiles"]=$shapefiles;

    echo "<br><br>".session_id()."<br>";
?>
    </body>
</html>
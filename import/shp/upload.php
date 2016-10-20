<?php
	error_reporting(E_ALL & !E_NOTICE & !E_DEPRECATED);
	// Work-around for setting up a session because Flash Player doesn't send the cookies
	if (isset($_GET["PHPSESSID"])) {
		session_id($_GET["PHPSESSID"]);
#header("HTTP/1.0 404 ".session_id());
#die();
	}
#var_dump($_FILES);
session_start();
$pgconfig=true;
require_once("../../includes/config.php");
$tmp_dir = $configuration ['tmp_path_distributed'];

$files=array();
$fdata=$_FILES['userfile'];
if(is_array($fdata['name'])){
    for($i=0;$i<count($fdata['name']);++$i){
	$files[]=array(
	    'name'    =>$fdata['name'][$i],
	    'type'  => $fdata['type'][$i],
	    'tmp_name'=>$fdata['tmp_name'][$i],
	    'error' => $fdata['error'][$i],
	    'size'  => $fdata['size'][$i]
	);
    }
} else $files[]=$fdata;


/*
	if (!isset($_FILES["userfile"]) || !is_uploaded_file($_FILES["userfile"]["tmp_name"]) || $_FILES["userfile"]["error"] != 0) {
	    echo "There was a problem with the upload.<br>";
	    echo "Tempfilename: ".$_FILES["userfile"]['tmp_name']."<br>";
	    echo "Error: ".$_FILES["userfile"]['error']."<br>";
	    echo 'upload_max_filesize: ' . (int)(ini_get('upload_max_filesize')).'<br>';
	    echo 'post_max_size: ' . (int)(ini_get('post_max_size')).'<br>';
	    echo 'memory_limit: ' . (int)(ini_get('memory_limit')).'<br>';

	    header("HTTP/1.0 404 ".session_id());
	    die();
	    exit(0);
	}
*/
#	else {
#		echo "Flash requires that we output something or it won't fire the uploadSuccess event";
#	}

#	$handle	= fopen($_FILES["Filedata"]["tmp_name"],'r');
#	$data	= fread($handle, filesize($_FILES["Filedata"]["tmp_name"]));
#	fclose($handle);

#	$handle	= fopen("/home/tmp/".$_FILES["Filedata"]["name"],'w');
#	fwrite($handle, $data);
#	fclose($handle);
	if(!file_exists($tmp_dir."/tmp_".session_id())) mkdir($tmp_dir."/tmp_".session_id());
	foreach($files as $file) {
	    $file["name"]=str_replace(' ','_',$file["name"]);
	    if(file_exists($tmp_dir."/tmp_".session_id()."/".$file["name"])) unlink($tmp_dir."/tmp_".session_id()."/".$file["name"]);

	    rename($file["tmp_name"],$tmp_dir."/tmp_".session_id()."/".$file["name"]);

	    $store=true;
	    for($i=1; $i<=$_SESSION["FileCount"]; $i++)
	    {
		if($_SESSION["FileNames"][$i]["name"]==$file["name"]) $store=false;
	    }
	    var_dump($store);;

	    if(!isset($_SESSION["FileCount"])) $_SESSION["FileCount"] = 0;
	    if($store)
	    {
		$_SESSION["FileCount"]++;
    		$_SESSION["FileNames"][$_SESSION["FileCount"]]["name"] = $file["name"];
	    }
	}
	echo '<meta http-equiv="refresh" content="0; url=frame1.php">'
?>

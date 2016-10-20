<?
require_once("../../includes/config.php");
require_once($_SERVER['DOCUMENT_ROOT'].$configuration['phplivex_path']."/PHPLiveX.php");
require_once("../../includes/user.php");
require_once("file_definition.php");
?>
<html>
    <head>
    </head>
    <body>
<?

if(isset($_POST['sent'])){
    $files=array();
    $fdata=$_FILES['userfile'];
    if(is_array($fdata['name'])){
	for($i=0;$i<count($fdata['name']);++$i){
	    if($fdata['size'][$i]==0) echo '';
	    elseif ($fdata['error'][$i]!=0) echo ' Error uploading files.<br>';
	    else 
		$files[]=array(
		    'name'    => $fdata['name'][$i],
		    'type'    => $fdata['type'][$i],
		    'tmp_name'=> $fdata['tmp_name'][$i],
		    'error'   => $fdata['error'][$i],
		    'size'    => $fdata['size'][$i]
		);
	}
    } else {
	if($fdata['size']==0) echo '';
	elseif ($fdata['error']!=0) echo ' Error uploading file.<br>';
	else $files[]=$fdata;
    }
    echo count($files)." uploads found.";
    if(isset($_POST['overwrite'])) echo ' I am OVERWRITING files.';
    else echo ' I am NOT overwriting files.';
    echo "<br><br>";
/*

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
*/
    $count['audio']=0;
    $count['video']=0;
    $count['image']=0;
    $count['media']=0;

    for($i=0; $i<count($files);$i++) {
	$extension = substr(strrchr($files[$i]["name"],"."),1);
	foreach($filetype as $key => $value) {
	    if(in_array($extension,$value)) {
		echo ' Uploading '.$files[$i]["name"].'...';
		if(!file_exists($configuration['csf_path'].'/'.$configuration[$key.'_path'].'/'.$files[$i]["name"])) {
		    echo " does not exist...";
			if(rename($files[$i]['tmp_name'], $configuration['csf_path'].'/'.$configuration[$key.'_path'].'/'.$files[$i]["name"])) {
			    echo ' uploaded.<br>';
			    $count[$key]++;
			} else echo ' error, not uploaded.<br>';
		} else {
		    echo " does exist...";
		    if(isset($_POST['overwrite'])) {
			if(rename($files[$i]['tmp_name'], $configuration['csf_path'].'/'.$configuration[$key.'_path'].'/'.$files[$i]["name"])) {
			    echo ' overwritten.<br>';
			    $count[$key]++;
			} else echo ' error, not overwritten.<br>';
		    } else echo ' file not uploaded.<br>';
		}
	    }
	}
    }
    echo "<br>Uploaded image files: ".$count['image'].", audio files: ".$count['audio'].", video files: ".$count['video'].", other media: ".$count['media']."<br>";

}
?>
    </body>
</html>
<?php
session_start();
require_once("../../includes/config.php");

#	file_put_contents($configuration['tmp_path_distributed'].'/info',"Trying to upload file\n",FILE_APPEND);

$sid	= (isset($_SERVER['HTTP_X_SID']) ? $_SERVER['HTTP_X_SID'] : die('No SID given.'));
$fn		= (isset($_SERVER['HTTP_X_FILENAME']) ? $sid.'_'.$_SERVER['HTTP_X_FILENAME'] : false);
$owrite	= (isset($_SERVER['HTTP_X_OVERWRITE']) ? $_SERVER['HTTP_X_OVERWRITE'] : false);

#	file_put_contents($configuration['tmp_path_distributed'].'/info',"Via XHR? $fn \n",FILE_APPEND);

$path = $configuration['tmp_path_distributed'].'/'.session_id().'/';

if ($fn) {
	try {
	    if(!file_exists($path)) mkdir($path);
	    $result = file_put_contents(
		$path . $fn,
		file_get_contents('php://input')
	    );
	    echo "0";
	}
	catch (Exceptoion $e) {
	    echo "1";
	}
	exit();
}
else {
	echo "1<br>";
	echo "Files cannot be uploaded this way. Make sure javascript is properly enabled";
}
<?php
  /**
   * Edit Module - Allows for a source module file to be editied.
   *
   * PHP version 5
   *
   * @package  Csf
   * @author   Robert Pahle <robert.pahle@asu.edu>
   * @author   Rahul Salla <rahul.salla@asu.edu>
   * @license  http://decisiontheater.org/license.txt ASU Software License
   * @link     http://decisiontheater.org/csf
   **/

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "Zend/Db.php";
require_once "config.php";

require_once("../components/csf/phplivex/PHPLiveX.php");
session_start();
require_once("user.php");
checkauth('edit');



#$browser = $_SERVER['HTTP_USER_AGENT'];

#if (preg_match('/Firefox/i', $browser) == false) {
#    echo 'Warning: Using a browser other than Firefox is not supported...';
#    echo 'You are currently using '. $browser;
#}

/**
 * Writes the contents of the passed in data argument to the filename
 *
 * @param string $data     This content will be written
 * @param string $filename We will be writing data to this file
 *
 * @return none
 * 
 * @access public
 * @static
 * @since Method available since Release 0.1.0
 */
function EditModule_Write_data($data, $pathname, $filename, $sid) {
    $info = 'Error open temp file for writing.';
    $fp = fopen($pathname.$filename.".phpr", 'w');
    if ($fp) {
        if (fwrite($fp, $data)=== false) {
            $info = 'Error writing temp file.';
        } else {
            fclose($fp);
            $info = 'Temp file written.';
            chdir('..');
	    $ex	= '/usr/bin/php -f modules/operators/'.$filename.'.phpr '.$sid.' 2>&1';
	    $point	= popen($ex,'r');
	    $info = '';
	    while(($buffer = fgets($point)) !== false) $info .= $buffer;
	    $err = pclose($point);
	    chdir('includes');
	    if(!unlink($pathname.$filename.".phpr"))
		$info = "File was NOT saved. (Unable to remove temporary file.)\n\n".$info;
	    else {
	        if($err != 0) $info = "Error in this file, will NOT save. Please correct error and save again.\n\n".$info;
		else {
		    $fp = fopen($pathname.$filename, 'w');
		    if ($fp) {
			if (fwrite($fp, $data)=== false) {
			    $info = "Error writing.\n\n".$info;
			} else {
			    fclose($fp);
			    if($info!='') $info = "File was saved, but some messages were returned.\n\n".$info;
			    else $info = "File was saved.\n\n".$info;
    			}
    		    }
		    else {
			$info = "Error opening file for writing.\n\n".$info;
		    }
		}
	    }
        }
    }
    return($info);
}

$ajax = new PHPLiveX(array("EditModule_Write_data"));
$ajax->Run("../components/csf/phplivex/phplivex.js");

$db = Zend_Db::factory('pdo_pgsql', $database);
$db->getConnection();

if(!isset($_GET['id'])) die ('Do not call this file directly');

$id	= $_GET['id'];

global $db;

$sql= "select station_variables.sid as sid, "
    . "station_variables.svid as svid, "
    . "station_variables.name as name, "
    . "station_variables.value as value "
    . "from station_variables where sid="
    . $id ." and (station_variables.name='name' or "
    . "station_variables.name='phpfile')";
$result	= $db->fetchAll($sql);

foreach ($result as $station) {
    $value[$station['name']]	= $station['value'];
    $svid[$station['name']]	= $station['svid'];
}

if(isset($_GET['modulename']))
    $value['phpfile']=$_GET['modulename'];

?>

<html>
<head>
<script language="javascript" type="text/javascript">

function testfunction(value)
{
    value = encodeURIComponent(value);
    EditModule_Write_data(value,
               "<?php echo '../modules/operators/'  ?>",
               "<?php echo $value['phpfile'].'.php' ?>",
               "<?php echo $id ?>",
               {'onUpdate': function(response){alert(response);}});
}
</script>

<script language="javascript" type="text/javascript" 
    src="../components/bower/ace/build/src/ace.js">
</script>

	<script language="javascript" type="text/javascript">
var editor;
window.onload = function() {
    editor = ace.edit("textarea_1");
    editor.setTheme("ace/theme/vibrant_ink");
    editor.getSession().setMode("ace/mode/php");
    
//    alert(editor.getSession().doc.getAllLines());
};
</script>

</head>
<body style="margin: 0; padding: 0; height: 100%; width:100%; border: none;">
<pre id="textarea_1" style="margin:0px; position:absolute; top:20px; left:0px;right:0px;bottom:0px;"><?php

if (file_exists('../modules/operators/'.$value['phpfile'].'.php')) {
    $data = file('../modules/operators/'.$value['phpfile'].'.php');
    foreach ($data as $info) {
        echo htmlspecialchars($info);
    }
} else {
    $data	= file('../modules/template.php');
    foreach ($data as &$info) {
        $info=str_replace('getsetup_module_test','getsetup_module_'.$value['phpfile'],$info);
        echo htmlspecialchars($info);
    }
    file_put_contents('../modules/operators/'.$value['phpfile'].'.php',$data);
    $sql = 'update station_variables set value=\''.$value['phpfile'].'\' where sid='.$id.' and name=\'phpfile\'';
    $result = $db->fetchAll($sql);
}
?></pre>

<div style="margin:0px;position:absolute;z-index:1000;top:0px;left:0px;width:45px;height:20px;background-color:#BBBBBB"></div>
<div style="margin:0px;position:absolute;z-index:1000;top:0px;left:45px;right:0px;height:20px;background-color:#BBBBBB">
<input type="button" value="Save" onclick="testfunction(editor.getSession().doc.getValue()); " style="margin:0;padding:0;">&nbsp;<?

echo "<input type=\"button\" value=\"Run\" onclick=\"var newWindow = window.open('../modules/operators/".$value['phpfile'].".php?id=".$_GET['id']."', '_blank'); \" style=\"margin:0;padding:0;\">&nbsp;&nbsp;";
echo "Editing: ".$value['phpfile'];
?>
</div>
</body>
</html>


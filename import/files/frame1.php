<?
require_once("../../includes/config.php");
require_once($_SERVER['DOCUMENT_ROOT'].$configuration['phplivex_path']."/PHPLiveX.php");
require_once("../../includes/user.php");
require_once("file_definition.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>SWFUpload v2.1.0 Simple Demo</title>

</head>
<body>
	<div class="title">File Upload</div>
	Please select one or more files to load.<br>
	<form id="form1" action="frame2.php" method="post" enctype="multipart/form-data" target="files">
	    <input name="userfile[]" type="file" multiple="" /><br>
	    Overwrite existing files? <input name="overwrite" type="checkbox" /><br>
	    <input name="sent" type="hidden" />
	    <input type="submit" value="Send">
	</form>
</body>
</html>

<?
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>SWFUpload v2.1.0 Simple Demo</title>

</head>
<body>
	<div class="title">CSV Upload </div>
	<form id="form1" action="upload.php" method="post" enctype="multipart/form-data">
	    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
	    <input name="userfile" type="file" />
	    <input type="submit" value="Send">
	</form>
</body>
</html>

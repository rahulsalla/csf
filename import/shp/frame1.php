<?
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<body>
	<div class="title">Shapefile Upload </div>
	Please load all parts of the shapefile.<br>
	<form id="form1" action="upload.php" method="post" enctype="multipart/form-data">
	    <input name="userfile[]" type="file" multiple="" />
	    <input type="submit" value="Send">
	</form>
</body>
</html>

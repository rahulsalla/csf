<?php
$status = '';
if ($_FILES["userfile"]["error"] > 0)
  {
    echo "Error: " . $_FILES["userfile"]["error"] . "<br />";
    return null;  
}
else
  {
    echo "Upload: " . $_FILES["userfile"]["name"] . "<br />";
    echo "Type: " . $_FILES["userfile"]["type"] . "<br />";
    echo "Size: " . ($_FILES["userfile"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["userfile"]["tmp_name"];
    //echo "<img src=" . $_FILES["userfile"]["tmp_name"] . "/>";
    $dashboard = $_GET["dashboard"];
    move_uploaded_file($_FILES["userfile"]["tmp_name"],
		       "dashboardBGs/dashboard".$dashboard.".png");

    echo "<html><body><script type='text/javascript'>function init(){if(top.uploadComplete) top.uploadComplete();}window.onload=init;
</script></body></html>";

    
}
?> 

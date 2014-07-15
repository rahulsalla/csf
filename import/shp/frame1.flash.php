<?
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>SWFUpload v2.1.0 Simple Demo</title>

	<link href="default.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/swfupload.js"></script>
	<script type="text/javascript" src="js/swfupload.queue.js"></script>
	<script type="text/javascript" src="js/fileprogress.js"></script>
	<script type="text/javascript" src="js/handlers.js"></script>
	<script type="text/javascript">
		var swfu;

		window.onload = function() {
			swfu = new SWFUpload({
				upload_url: "upload.php?PHPSESSID=<? echo session_id(); ?>",	// Relative to the SWF file
				post_params: {"PHPSESSID" : "<? echo session_id(); ?>"},

				file_size_limit : "100 MB",
				file_types : "*.*",
				file_types_description : "All Files",
				file_upload_limit : 100,
				file_queue_limit : 0,


				// The event handler functions are defined in handlers.js
				file_dialog_start_handler : fileDialogStart,
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete,
				
				//Button Settings
				button_image_url : "XPButtonUploadText_61x22.png",
				button_placeholder_id : "spanButtonPlaceholder1",
				button_width : 61,
				button_height : 22,


				flash_url : "swfupload.swf",

				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel"
				},

				debug: true

			});
	     };
	</script>

</head>
<body>
	<div class="title">Shapefile Upload </div>
	<form id="form1" action="index.php" method="post" enctype="multipart/form-data">
		<div>Please upload the shapefile and all related files.</div><br><br>
		<div class="content">
			<div class="fieldset flash" id="fsUploadProgress">
				<span class="legend">Upload Queue</span>
			</div>
			<div id="divStatus">0 Files Uploaded</div>
			<div>
				<span id="spanButtonPlaceholder1"></span>
				<input id="btnCancel" type="button" value="Cancel All Uploads" onclick="cancelQueue(swfu);" disabled="disabled" style="font-size: 8pt;" /><br />
			</div>
		</div>
	</form>
	<?php echo session_id(); ?>
</body>
</html>
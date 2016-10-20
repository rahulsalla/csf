<?
	$content = '<script type="text/javascript" src="https://videocallroom.oovoo.com/oovoomelink/codelib/oovoorooms.js"></script></script>
				<script type="text/javascript">
					roomProps.roomID = "C773C2E18025FEB5E040007F01006C72";
					roomProps.width = "'.$_GET['width'].'";
					roomProps.height = "'.$_GET['height'].'";
					roomProps.hasBackground = "'.$_GET['background'].'";
					roomProps.backgroundColor = "'.$_GET['backgroundColor'].'";
					roomProps.captionColor = "'.$_GET['captionColor'].'";
					roomProps.captionText = "'.$_GET['caption'].'";
					var myRoom = CreateRoom();
				</script>';
	echo $content;



<?php
	include("./functions/database_connexion.php");
	include("./models/modelMarker.php");

	if($_SESSION['rightsLevel']>0)
	{
		$id = strip_tags($_POST['id']);
		$name = strip_tags($_POST['name']);
		$x = strip_tags($_POST['x']);
		$y = strip_tags( $_POST['y']);
		$classes = strip_tags( $_POST['classes']);
		$isPrivate = strip_tags( $_POST['isPrivate']);
		
		editMarker($id,$name,$x,$y,$classes,$isPrivate);
	}
	$msg="edit";
	include("./controlers/redirect.php");
?>
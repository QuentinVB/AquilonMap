<?php
	include("./functions/database_connexion.php");
	include("./models/modelMarker.php");

	if($_SESSION['rightsLevel']>=0)
	{
		$name = strip_tags($_POST['name']);
		$x = strip_tags($_POST['x']);
		$y = strip_tags( $_POST['y']);
		$classes = strip_tags( $_POST['classes']);
		$isPrivate = strip_tags( $_POST['isPrivate']);
			//echo $isPrivate;
		addMarker($name,$x,$y,$classes,$isPrivate);
	}

	header("Location: ./index.php?page=backoffice&msg=add");
?>
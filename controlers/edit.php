<?php
	include("./models/model.php");

	if($_SESSION['rightsLevel']>0)
	{
		$id = strip_tags($_POST['id']);
		$name = strip_tags($_POST['name']);
		$x = strip_tags($_POST['x']);
		$y = strip_tags( $_POST['y']);
		$classes = strip_tags( $_POST['classes']);
		editMarker($id,$name,$x,$y,$classes);
	}
	$msg="edit";
	include("./controlers/redirect.php");
?>
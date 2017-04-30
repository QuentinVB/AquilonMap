<?php
	include("./models/model.php");

	$id = strip_tags($_POST['id']);
	$name = strip_tags($_POST['name']);
	$x = strip_tags($_POST['x']);
	$y = strip_tags( $_POST['y']);
	$classes = strip_tags( $_POST['classes']);
	editMarker($id,$name,$x,$y,$classes);
	header("Location: ./index.php?page=backoffice&msg=edit");
?>
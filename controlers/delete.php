<?php
//save
	include("./models/model.php");
	
	$id = strip_tags($_GET['id']);
	$x = strip_tags($_GET['x']);
	$y = strip_tags( $_GET['y']);

	deleteMarker($id,$x,$y);

	header('Location: ./backoffice.php?succes=0', true, 302);
	exit;
?>
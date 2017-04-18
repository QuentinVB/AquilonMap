<?php
//save
	include("../models/model.php");
	
	$name = strip_tags($_GET['name']);
	$x = strip_tags($_GET['x']);
	$y = strip_tags( $_GET['y']);

	deleteMarker($name,$x,$y,$classes);

	header('Location: http://les-planetes2kentin.fr/AquilonMap/backoffice/backoffice.php?succes=0', true, 302);
	exit;
?>
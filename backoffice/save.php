<?php
	include("../models/model.php");
	$name = strip_tags($_POST['name']);
	$x = strip_tags($_POST['x']);
	$y = strip_tags( $_POST['y']);
	$classes = strip_tags( $_POST['classes']);
	addMarker($name,$x,$y,$classes);
	header("Location: backoffice.php?succes=0");
?>
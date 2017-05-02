<?php
//save
	include("./models/model.php");
	$redirect = "backoffice";

	if(isset($_GET['redirect']) && $_GET['redirect'] =="map") {$redirect="map"; }

	if($_SESSION['rightsLevel']>0)
	{
		$id = strip_tags($_GET['id']);
		$x = strip_tags($_GET['x']);
		$y = strip_tags( $_GET['y']);

		deleteMarker($id,$x,$y);
	}
	header('Location: ./index.php?page='.$redirect.'&msg=delete');
?>
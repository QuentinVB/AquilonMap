<?php
//save
	include("./models/model.php");
	if($_SESSION['rightsLevel']>0)
	{
		$id = strip_tags($_GET['id']);
		$x = strip_tags($_GET['x']);
		$y = strip_tags( $_GET['y']);

		deleteMarker($id,$x,$y);
	}
	header('Location: ./index.php?page=backoffice&msg=delete');
?>
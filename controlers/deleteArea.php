<?php
//save
	include("./functions/database_connexion.php");
	include("./models/modelArea.php");

	if($_SESSION['rightsLevel']>0)
	{
		$id = strip_tags($_GET['id']);

		deleteArea($id);
	}
	$msg="delete";
	include("./controlers/redirect.php");
?>
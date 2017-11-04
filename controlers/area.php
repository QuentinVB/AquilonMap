<?php
	include("./functions/database_connexion.php");
	include("./models/modelArea.php");

	if($_SESSION['rightsLevel']>0 && isset($_GET['action']))
	{
		$msg=$_GET['action'];
		if($msg =="edit")
		{
			$id = strip_tags($_POST['id']);
		}
		
		$name = strip_tags($_POST['name']);
		$colorHexa =  preg_match("/#([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?\b/", strip_tags($_POST['colorHexa']))== true ? strip_tags($_POST['colorHexa']) : ""; 
		$polygon = strip_tags( $_POST['polygon']); //add regex for polygon
		$isPrivate = strip_tags( $_POST['isPrivate']);
		
		if($name !="" || $colorHexa!="" || $polygon!="" || $isPrivate!="" )
		{
			if($msg =="edit")
			{
				editArea($id,$name, $colorHexa,$polygon,$isPrivate);
			}
			elseif($msg =="add")
			{
				addArea($name, $colorHexa,$polygon,$isPrivate);
			}
			else
			{
				$msg="error";
			}
			include("./controlers/redirect.php");
		}
	}
	else
	{
		header("Location: ./index.php?page=backoffice&msg=error");
	}
?>
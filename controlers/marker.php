<?php
//manage edit and adding markers
	include("./functions/database_connexion.php");
	include("./models/modelMarker.php");

	if($_SESSION['rightsLevel']>=0)
	{
		if(isset($_GET['action']) && $_GET['action'] =="edit" && $_SESSION['rightsLevel']>0)
		{
			$id = strip_tags($_POST['id']);
		}
		
		$name = strip_tags($_POST['name']);
		$x = strip_tags($_POST['x']);
		$y = strip_tags( $_POST['y']);
		$classes = strip_tags( $_POST['classes']);
		$isPrivate = strip_tags( $_POST['isPrivate']);
		
		if(isset($_GET['action']) && $_GET['action'] =="edit" && $_SESSION['rightsLevel']>0)
		{
			editMarker($id,$name,$x,$y,$classes,$isPrivate);
		}
		elseif(isset($_GET['action']) && $_GET['action'] =="add")
		{
			addMarker($name,$x,$y,$classes,$isPrivate);
		}	
	}
	if(isset($_GET['action']))
	{
		$msg=$_GET['action'];
	}
	include("./controlers/redirect.php");
?>
<?php
	include("./models/model.php");

	if($_SESSION['rightsLevel']>=0)
	{
		$name = strip_tags($_POST['name']);
		$reg = preg_match("/#([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?\b/", strip_tags($_POST['colorHexa']));
		if($reg == 1)
		{
			$colorHexa = strip_tags($_POST['colorHexa']) ;	
		}
		else
		{
			header("Location: ./index.php?page=backoffice&msg=error");
		}
		$polygon = strip_tags( $_POST['polygon']); //add regex for polygon
		$isPrivate = strip_tags( $_POST['isPrivate']);
			//echo $isPrivate;
		addArea($name, $colorHexa,$polygon,$isPrivate);
	}
	header("Location: ./index.php?page=backoffice&msg=add");
?>
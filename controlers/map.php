<?php
//controler
	include("./models/model.php");
	$reponse = getLastDate(); 
	$date = $reponse->fetch();

	$backofficeAcces ="";
	if(empty($_SESSION['userName']))
	{
		$backofficeAcces = "Connexion";
	}
	else
	{
		$backofficeAcces = "Backoffice";
	}
	
	include("./controlers/msgmanager.php");	
    include("./views/map.php");
?>



<?php
//controler
	include("./models/model.php");
	$reponse = getLastDate(); 
	$date = $reponse->fetch();
	if(empty($_SESSION['userName']))
	{
		header('Location: ./index.php?page=auth');
	}
	else
	{
	    include("./controlers/msgmanager.php");	
	    include("./views/backoffice.php");	
	}
?>



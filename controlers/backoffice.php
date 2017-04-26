<?php
//controler
	include("./models/model.php");
	$reponse = getLastDate(); 
	$date = $reponse->fetch();

	if(empty($_SESSION['token']))
	{
		header('Location: ./index.php?page=auth');
	}
	else
	{
	    include("./views/backoffice.php");	
	}
?>



<?php
//controler
	if(empty($_SESSION['userName']))
	{
		header("Location: ./index.php?page=auth");
	}
	else
	{
		include("./models/model.php");
		$reponse = getLastDate(); 
		$date = $reponse->fetch();
	    include("./controlers/msgmanager.php");	
	    include("./views/backoffice.php");	
	}
?>
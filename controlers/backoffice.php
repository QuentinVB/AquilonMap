<?php
//controler
	if(empty($_SESSION['userName']))
	{
		header("Location: http://les-planetes2kentin.fr/AquilonMap/index.php?page=auth");
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
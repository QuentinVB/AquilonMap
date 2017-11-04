<?php
//controler
	if(empty($_SESSION['userName']))
	{
		header("Location: ./index.php?page=auth");
	}
	else
	{
		include("./functions/database_connexion.php");
		include("./models/modelMarker.php");
		include("./models/modelArea.php");
		$reponse = getLastDate(); 
		$date = $reponse->fetch();
	    include("./controlers/msgmanager.php");	
	    include("./views/backoffice.php");	
	}
?>
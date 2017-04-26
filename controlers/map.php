<?php
//controler
	include("./models/model.php");
	$reponse = getLastDate(); 
	$date = $reponse->fetch();
    include("views/viewmap.php");
?>



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
	include('./functions/wkt2json.php');
	function wkt_to_json($wkt) {
		$geom = new WktToJson($wkt);
		return $geom->getGeometryGeojsonFromWkt();
	}
	include("./controlers/msgmanager.php");	
    include("./views/map.php");
?>



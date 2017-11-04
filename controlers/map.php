<?php
//controler
	include("./functions/database_connexion.php");
	include("./models/modelMarker.php");
	include("./models/modelArea.php");
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



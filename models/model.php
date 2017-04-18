<?php
//model
	include("functions/database_connexion.php");
	function getMarkers()
	{
		$bdd = connexion_database();
		$reponse = $bdd->query('SELECT * FROM `cartedata` ');	
		return $reponse;
	}
	function getMarkersByClasses($classes)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("SELECT * FROM `cartedata` WHERE `cartedata`.`classes` = :classes");	
		$req -> execute(array(
		'classes' => $classes
		));		
		return $req;
	}
	function getLastDate()
	{
		$bdd = connexion_database();
		$reponse = $bdd->query('SELECT MAX(date_ajout) FROM `cartedata`');	
		
		return $reponse;
	}	
	function addMarker($name, $x,$y,$classes)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("INSERT INTO `cartedata` (`id`, `name`, `x`, `y`, `classes`, `date_ajout`) VALUES (NULL, :name, :x, :y, :classes, NOW())");	
		$req -> execute(array(
		'name' => $name,
		'x' => $x,
		'y' => $y,
		'classes' => $classes
		));
	}
	function deleteMarker($name, $x,$y)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("DELETE FROM `cartedata` WHERE `cartedata`.`name` = :name AND `cartedata`.`x` = :x AND `cartedata`.`y` = :y");	
		$req -> execute(array(
		'name' => $name,
		'x' => $x,
		'y' => $y
		));
	}
?>
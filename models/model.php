<?php
//model
	include("./functions/database_connexion.php");
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
	function addMarker($name, $x,$y,$classes,$isPrivate)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("INSERT INTO `cartedata` (`id`, `name`, `x`, `y`, `classes`, `date_ajout`, `isPrivate`) VALUES (NULL, :name, :x, :y, :classes, NOW(), :isPrivate)");	
		$req -> execute(array(
		'name' => $name,
		'x' => $x,
		'y' => $y,
		'classes' => $classes,
		'isPrivate' => $isPrivate
		));
	}
	function editMarker($id, $name, $x,$y,$classes,$isPrivate)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("UPDATE `cartedata` SET `name` = :name, `x` = :x, `y` = :y, `classes` = :classes, `date_ajout` = NOW(), `isPrivate` = :isPrivate WHERE `cartedata`.`id` = :id; ");	
		$req -> execute(array(
		'id' => $id,
		'name' => $name,
		'x' => $x,
		'y' => $y,
		'classes' => $classes,
		'isPrivate' => $isPrivate
		));
	}
	function deleteMarker($id, $x,$y)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("DELETE FROM `cartedata` WHERE `cartedata`.`id` = :id AND `cartedata`.`x` = :x AND `cartedata`.`y` = :y");	
		$req -> execute(array(
		'id' => $id,
		'x' => $x,
		'y' => $y
		));
	}
	function getAreas()
	{
		$bdd = connexion_database();
		$reponse = $bdd->query('SELECT `id`,`name`,`colorHexa`,AsText(`polygon`) as polygonwkt,`isPrivate`  FROM `cartearea` ');
		return $reponse;
	}
	function addArea($name, $colorHexa,$polygon,$isPrivate)
	{		
		$polygon = "POLYGON((".$polygon."))";
		$bdd = connexion_database();
		$req = $bdd->prepare("INSERT INTO `cartearea` (`id`, `name`, `colorHexa`, `polygon`, `isPrivate`) VALUES (NULL, :name, :colorHexa, ST_GeomFromText(:polygon), :isPrivate)");	
		$req -> execute(array(
		'name' => $name,
		'colorHexa' => $colorHexa,
		'polygon' => $polygon,
		'isPrivate' => $isPrivate
		));
	}
?>
<?php
//model
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
	function editArea($id, $name, $colorHexa,$polygon,$isPrivate)
	{
		$polygon = "POLYGON((".$polygon."))";
		$bdd = connexion_database();
		$req = $bdd->prepare("UPDATE `cartearea` SET `name` = :name, `colorHexa` = :colorHexa, `polygon` = ST_GeomFromText(:polygon), `isPrivate` = :isPrivate  WHERE `cartearea`.`id` = :id; ");	
		$req -> execute(array(
		'id' => $id,
		'name' => $name,
		'colorHexa' => $colorHexa,
		'polygon' => $polygon,
		'isPrivate' => $isPrivate
		));
	}
	function deleteArea($id)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("DELETE FROM `cartearea` WHERE `cartearea`.`id` = :id");	
		$req -> execute(array(
		'id' => $id
		));
	}
?>
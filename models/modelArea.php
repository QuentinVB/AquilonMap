<?php
//model
	function getAreas()
	{
		$bdd = connexion_database();
		$reponse = $bdd->query('SELECT `id`,`name`,`flag`,`colorHexa`,AsText(`polygon`) as polygonwkt,`isPrivate`  FROM `cartearea` ');
		return $reponse;
	}
	function addArea($name,$flag, $colorHexa,$polygon,$isPrivate)
	{		
		$polygon = "POLYGON((".$polygon."))";
		$bdd = connexion_database();
		$req = $bdd->prepare("INSERT INTO `cartearea` (`id`, `name`,`flag`, `colorHexa`, `polygon`, `isPrivate`) VALUES (NULL, :name, :flag, :colorHexa, GeomFromText(:polygon), :isPrivate)");	
		$req -> execute(array(
		'name' => $name,
		'flag' => $flag,
		'colorHexa' => $colorHexa,
		'polygon' => $polygon,
		'isPrivate' => $isPrivate
		));
	}
	function editArea($id, $name,$flag, $colorHexa,$polygon,$isPrivate)
	{
		$polygon = "POLYGON((".$polygon."))";
		$bdd = connexion_database();
		$req = $bdd->prepare("UPDATE `cartearea` SET `name` = :name,`flag` = :flag, `colorHexa` = :colorHexa, `polygon` = GeomFromText(:polygon), `isPrivate` = :isPrivate  WHERE `cartearea`.`id` = :id; ");	
		$req -> execute(array(
		'id' => $id,
		'name' => $name,
		'flag' => $flag,
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
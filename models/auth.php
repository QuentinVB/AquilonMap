<?php
//model
	include("./functions/database_connexion.php");
	function getUserById()
	{
		$bdd = connexion_database();
		$reponse = $bdd->query(' ');	
		return $reponse;
	}
    function getUserByToken()
	{
		$bdd = connexion_database();
		$reponse = $bdd->query(' ');	
		return $reponse;
	}
    function addUser($name, $x,$y,$classes)
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
	function editUser($id, $name, $x,$y,$classes)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("UPDATE `cartedata` SET `name` = :name, `x` = :x, `y` = :y, `classes` = :classes, `date_ajout` = NOW() WHERE `cartedata`.`id` = :id; ");	
		$req -> execute(array(
		'id' => $id,
		'name' => $name,
		'x' => $x,
		'y' => $y,
		'classes' => $classes
		));
	}
	function deleteUser($id, $x,$y)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("DELETE FROM `cartedata` WHERE `cartedata`.`id` = :id AND `cartedata`.`x` = :x AND `cartedata`.`y` = :y");	
		$req -> execute(array(
		'id' => $id,
		'x' => $x,
		'y' => $y
		));
	}
?>
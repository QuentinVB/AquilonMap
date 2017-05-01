<?php
//model
	include("./functions/database_connexion.php");
	function getUserById($id)
	{
		$bdd = connexion_database();
		$reponse = $bdd->query(' ');	
		return $reponse;
	}
    function getUserByUserName($userName)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("SELECT * FROM `users` WHERE `users`.`userName` = :userName");	
		$req -> execute(array(
		'userName' => $userName
		));
		return $req;
	}
	function updateConnectionDate($id)
	{
		$bdd = connexion_database();
		$req = $bdd->prepare("UPDATE `users` SET `lastConnectionDate` = NOW() WHERE `users`.`id` = :id");	
		$req -> execute(array(
		'id' => $id
		));
		return date('Y-m-d H:i:s');
	}
    function addUser($userName, $password,$faction,$rightsLevel)
	{
		//hash password
		$password = hash("md5",$password);

		$bdd = connexion_database();
		$req = $bdd->prepare("INSERT INTO `users` (`id`, `userName`, `password`, `accountCreationDate`, `lastConnectionDate`, `faction`, `rightsLevel`) VALUES (NULL, :userName, :password, NOW(), NOW(), :faction, :rightsLevel);");	
		$req -> execute(array(
		'userName' => $userName,
		'password' => $password,
		'faction' => $faction,
		'rightsLevel' => $rightsLevel
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
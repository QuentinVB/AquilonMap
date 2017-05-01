<?php
//controler
	include("./models/model.php");
	$reponse = getLastDate(); 
	$date = $reponse->fetch();
	$msg = "";
	if(isset($_GET['msg']) && $_GET['msg'] == 0)
		{
			switch ($_GET['msg']) {				
				case 'disconnected':
					$msg = "Déconnexion réussie !";
					break;
				default:
					$msg = "yup !";
					break;
			}	
		}
	$backofficeAcces ="";
	if(empty($_SESSION['userName']))
	{
		$backofficeAcces = "Connexion";
	}
	else
	{
		$backofficeAcces = "Backoffice";
	}
	
    include("./views/map.php");
?>



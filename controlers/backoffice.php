<?php
//controler
	include("./models/model.php");
	$reponse = getLastDate(); 
	$date = $reponse->fetch();
	$msg = "";
	if(empty($_SESSION['userName']))
	{
		header('Location: ./index.php?page=auth');
	}
	else
	{
		if(isset($_GET['msg']) && $_GET['msg'] == 0)
		{
			switch ($_GET['msg']) {
				case 'add':
					$msg = "Ajout réussi !";
					break;					
				case 'delete':
					$msg ="Suppression réussie !";
					break;
				case 'edit':
					$msg = "Edition réussie !";
					break;
				case 'connected':
					$msg = "Connexion réussie !";
					break;
				default:
					$msg = "yup !";
					break;
			}	
		}
	    include("./views/backoffice.php");	
	}
?>



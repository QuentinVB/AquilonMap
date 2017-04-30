<?php
//controler
	include("./models/model.php");
	$reponse = getLastDate(); 
	$date = $reponse->fetch();

	if(empty($_SESSION['token']))
	{
		header('Location: ./index.php?page=auth');
	}
	else
	{
	    include("./views/backoffice.php");	
	}

	
	$msg = "";
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
			default:
				$msg = "yup !";
				break;
		}	
	}
?>



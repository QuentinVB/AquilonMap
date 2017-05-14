<?php
	$redirect = "backoffice";
	if(isset($_GET['redirect']) && $_GET['redirect'] =="map") {$redirect="map"; }
	header('Location: ./index.php?page='.$redirect.'&msg='.$msg.''	);
?>
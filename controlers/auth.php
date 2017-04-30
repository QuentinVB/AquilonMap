<?php
//controler
	include("./models/auth.php");
    if(isset($_POST['userName']) && isset($_POST['password']))
    {
        //CONNECTION LOGIC HERE
        header("Location: ./index.php?page=backoffice&msg=connected");
    }
    include("./views/auth.php");
?>



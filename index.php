
<?php
session_start();

if (!empty($_POST['page']) && is_file('./controlers/' . $_POST['page'] . '.php')) 
{
    include "./controlers/" . $_POST["page"] . ".php";
}
else if (!empty($_GET['page']) && is_file('./controlers/' . $_GET['page'] . '.php'))
{
    include "./controlers/" . $_GET["page"] . ".php";
}
else
{        
    if (empty($_SESSION['userName'])) {      
        session_unset();
        session_destroy();
    };
    include("controlers/map.php");
}     
?>

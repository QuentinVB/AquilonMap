<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
         <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
         <link rel="stylesheet" href="./assets/style/style.css" type="text/css"/>
         <link rel="shortcut icon" href="img/map.ico">

        <title>Aquilon-Map</title>
    </head>
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
        echo "EXTERMINATE ?";
        if (empty($_SESSION['userName'])) {
            echo "FUCK YEAH EXTERMINATE !";
            session_unset();
            session_destroy();
        };
        include("controlers/map.php");
    }     
    ?>
</html>
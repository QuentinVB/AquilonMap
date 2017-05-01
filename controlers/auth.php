<?php
//controler
	include("./models/auth.php");
    $msg = "";
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        //CONNECTION LOGIC HERE
        //1 get user based on userName
        $usersMatched = getUserByUserName($_POST['username']);
        while ($user = $usersMatched->fetch())
        {
            /*
            echo count($usersMatched);
            echo "<br/>";
            echo $_POST['username'];
            echo "<br/>";
            echo $user['userName'];
            echo "<br/>";
            echo hash("md5",$_POST['password']);
            echo "<br/>";
            echo $user['password'];
            */
             //2 check password hash
            if($_POST['username'] == $user['userName'] && hash("md5",$_POST['password']) == $user['password'])
            {
               //3 if success : 
               //create the sessions rights and allow access to the backoffice
               $_SESSION['id'] = $user['id'];
               $_SESSION['userName'] = $user['userName'];
               $_SESSION['passwordHash'] = $user['password'];
               $_SESSION['accountCreationDate'] = $user['accountCreationDate'];
               $_SESSION['lastConnectionDate'] = updateConnectionDate($user['id']);
               $_SESSION['faction'] = $user['faction'];
               $_SESSION['rightsLevel'] = $user['rightsLevel'];
               header("Location: ./index.php?page=backoffice&msg=connected");
            }
            else
            {
                //4 if not : send back to the page
                $msg = "mot de pas ou utilisateur incorrect";
            }
        }   
    }
    include("./views/auth.php");
?>



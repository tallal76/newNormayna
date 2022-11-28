<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $requeteLogin="SELECT * FROM utilisateur WHERE username='".$username."' AND password='".$password."'";
    $sqlLogin = new Sql();
    $resultatLogin = $sqlLogin->afficher($requeteLogin);
    
    if (count($resultatLogin) > 0) {
        if($resultatLogin[0]['role']=="user")
        { 
            $_SESSION["username"] = $username; 
            header('location: /index.php?page=accueil');
        }
        elseif($resultatLogin[0]['role']=="admin")
        {
            $_SESSION["username"] = $username; 
            header('Location: admin/index.php?page=accueil');
        }
    }
}
?>
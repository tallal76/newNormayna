<?php
//session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $erreurs = array();

    if (mb_strlen($username) === 0){
        array_push($erreurs, "Il manque votre e-mail");
        
    }
    if (mb_strlen($password) === 0){
        array_push($erreurs, "Il manque votre mot de passe");
        
    }
    if (count($erreurs)) {
        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) 
        {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";
        echo $messageErreur;
        header ('location: /index.php?page=accueil');
    }
// Vérification du hashage du mot de passe pour se connecter
    $password = $_POST['password'];
    $requeteHash="SELECT * FROM utilisateur WHERE username='".$username."'";   
    $sqlLogin = new Sql();
    $requeteHash = $sqlLogin->afficher($requeteHash);

   echo $hash = $requeteHash[0]['password'];
    
   if (password_verify($password, $hash)){ 
        $requeteLogin="SELECT * FROM utilisateur WHERE username='".$username."' AND password='".$hash."'";
        $sqlLogin = new Sql();
        $resultatLogin = $sqlLogin->afficher($requeteLogin);
      

        $_SESSION["role"] = $resultatLogin[0]['role'];
        if (count($resultatLogin) > 0) 
        {
            if($resultatLogin[0]['role']=="user")
            { 
                $_SESSION["username"] = $username; 
                header('location: admin/index.php?page=espaceUser');
            }
            elseif($resultatLogin[0]['role']=="admin")
            {
                $_SESSION["username"] = $username; 
                header('Location: admin/index.php?page=accueil');
            }
            else
            {
            echo  $message = "Erreur d'authentification";
                $_SESSION['username'] = false;
            }
        }elseif(count($resultatLogin) == 0 ){
        echo $message = "Erreur d'authentification";
            $_SESSION["username"] = "";
            session_destroy();
            header ('location:http://localhost/newNormayna/index.php');
        }

    }
}
?>
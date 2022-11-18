<h1>Login</h1>
<?php

if (isset($_POST['frmConnexion'])) {
    $mail = htmlentities(trim($_POST['mail']));
    $mdp = htmlentities(trim($_POST['mdp']));

    $erreurs = array();

    if (mb_strlen($mail) === 0)
        array_push($erreurs, "Il manque votre e-mail");

    if (mb_strlen($mdp) === 0)
        array_push($erreurs, "Il manque votre mot de passe");

    if (count($erreurs)) {
        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";
        echo $messageErreur;
        include './includes/frmConnexion.php';
    } else {
        if (isset($_POST['submit'])) {
            $t = $_POST['mdp'];
            $requeteLogin = "SELECT password,nom,prenom FROM utilisateur WHERE email='$mail'";
            $sqlLogin = new Sql();
            $resultatLogin = $sqlLogin->afficher($requeteLogin);
            if (count($resultatLogin) > 0) {
                // Traitement pour vérifier le mot de passe
                $resultatPassword = $resultatLogin[0]['password'];
                $nom = $resultatLogin[0]['nom'];
                $prenom = $resultatLogin[0]['prenom'];
                $fullname = $nom." ".$prenom;
                if ($t == $resultatPassword) {
                    $message = "Vous êtes connecté </br> Bienvenue " . $fullname;
                  
                    $_SESSION['login'] = $fullname;
                    $messageEmail = $mail . ' vous êtes connecté !';
                } else {
                    $message = "Erreur d'authentification";
                    $_SESSION['login'] = false;
                }
            } else {
                $message = "Votre adresse n'est pas dans la base";
            }
            header ('location:index.php?page=acceuil');
           /*  echo $message;
            $url = $_SERVER['HTTP_ORIGIN'] . dirname($_SERVER['REQUEST_URI']) . "/";
            echo "<p><a href=\"$url\">Revenir à la page d'accueil</a></p>"; */
        }
    }
} else {
    $mail = "";
    include './includes/frmConnexion.php';
}
<h1>Ajouter un evenement</h1>
<?php
if (isset($_POST['frmAjoutEvenement'])){
    $theme = htmlentities(trim($_POST['theme']));
    $adresse = htmlentities(trim($_POST['adresse']));
    $date = htmlentities(trim($_POST['date']));
    $description = htmlentities(trim($_POST['description']));
    $video = (trim($_POST['video'])); 
   
    $erreurs = array();

    if (mb_strlen($theme) === 0)
        array_push($erreurs, "Il manque votre theme");

    if (mb_strlen($adresse) === 0)
        array_push($erreurs, "Il manque votre adresse");

    if (mb_strlen($date) === 0)
        array_push($erreurs, "Il manque votre date");

  

    if (mb_strlen($description) === 0 )
        array_push($erreurs, "Veuillez saisir votre mot de description");
    
    

    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for($i = 0 ; $i < count($erreurs) ; $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;

        include './includes/frmAjoutEvenement.php';
    }
    else{
        $requete = "INSERT INTO evenements (theme_event, adress_event, date_event, description_event, video_event)
            VALUES ('$theme', '$adresse', '$date', '$description', '$video');";

            $queryInsert = new Sql();
            $queryInsert->inserer($requete);
            header('Location:./index.php?page=maj');
    }
}
else{
$theme = $adresse =$date = $description = "";
include './includes/frmAjoutEvenement.php';
}


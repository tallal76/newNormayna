<h1>Ajouter une categorie</h1>
<?php
if (isset($_POST['frmAjoutCategorie'])) {
    $nom = htmlentities(trim($_POST['nom_categorie']));
    $dataFilter = htmlentities(trim($_POST['dataFilter']));


    $erreurs = array();

    if (mb_strlen($nom) === 0)
        array_push($erreurs, "Il manque votre nom");
    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;

        include './includes/frmAjoutCategorie.php';
    } else {
         $requete = "INSERT INTO categorie (nom_categorie, dataFilter)
            VALUES ('$nom', '$dataFilter');";

        $queryInsert = new Sql();
        $queryInsert->inserer($requete); 
        /*   header('Location:./index.php?page=acceuil'); c'est juste pour redireger */    
    }
} else {
     $nom = $dataFilter = "";
    include './includes/frmAjoutCategorie.php'; 
}

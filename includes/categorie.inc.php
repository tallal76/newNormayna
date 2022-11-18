<h1>Ajouter une categorie</h1>
<?php
if (isset($_POST['frmCategorie'])) {
    $libelle = htmlentities(trim($_POST['libelle']));
    $description = htmlentities(trim($_POST['description']));


    $erreurs = array();

    if (mb_strlen($libelle) === 0)
        array_push($erreurs, "Il manque votre libelle");
    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;

        include './includes/frmCategorie.php';
    } else {
         $requete = "INSERT INTO categorie (Libelle, Description)
            VALUES ('$libelle', '$description');";

        $queryInsert = new Sql();
        $queryInsert->inserer($requete); 
        /*   header('Location:./index.php?page=acceuil'); c'est juste pour redireger */    
    }
} else {
     $libelle = $description = "";
    include './includes/frmCategorie.php'; 
}

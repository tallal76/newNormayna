<h1>Modifier</h1>

<?php
if (isset($_POST["frmUpdateCategorie"])) {

    $requete = "UPDATE categorie SET Libelle = '" . $_POST['Libelle'] . "', Description = '" . $_POST['Description'] . "' WHERE id_categorie = " . $_POST['id'];

    $queryUpdate = new Sql();
    $update = $queryUpdate->inserer($requete);


    header('Location: index.php?page=majCategorie');
} else {

    $requete = 'SELECT * FROM categorie WHERE id_categorie = ' . $_GET['id'];
    $querySelect = new Sql();
    $select = $querySelect->afficher($requete);

    $Libelle = $select[0]['Libelle'];
    $Description = $select[0]['Description'];
    $id = $_GET['id'];

    include "./includes/frmUpdateCategorie.php";
    include "./includes/majCategorie.inc.php";
}

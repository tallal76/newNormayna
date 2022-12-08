<h1>Modifier un produit</h1>

<?php





if (isset($_POST["frmUpdateProduit"])) {

    $requete = "UPDATE produits SET Titre = '" . $_POST['Titre'] . "', Prix = '" . $_POST['Prix'] . "' ,description = '" . $_POST['description'] . "'  WHERE id = " . $_POST['id'];

    $queryUpdate = new Sql();
    $update = $queryUpdate->inserer($requete);


    header('Location: index.php?page=majProduit');
} else {

    $requette = "SELECT Libelle FROM categorie";
    $cnx = new sql();
    $requette = $cnx->afficher($requette);
    $requete2 = 'SELECT a.Id,a.Titre,a.Prix,a.Url,a.description,b.Libelle FROM `produits` a JOIN categorie b on a.Categorie=b.id_categorie WHERE a.id = ' . $_GET['id'];

    //$requete = 'SELECT * FROM produits WHERE id = ' . $_GET['id'];
    $querySelect = new Sql();
    $select = $querySelect->afficher($requete2);
 
    $Titre = $select[0]['Titre'];
    $Prix = $select[0]['Prix'];
    $description = $select[0]['description'];
    $Image = $select[0]['Url'];
    $Categorie = $select[0]['Libelle'];
    $id = $_GET['id']; 

    include "./includes/frmUpdateProduit.php";
}

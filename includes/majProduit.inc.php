<h1>Ms à jour produit</h1>
<?php
$requette = "SELECT Libelle FROM categorie";
$cnx = new sql();
$requette = $cnx->afficher($requette);
// ce teste verifie si le formulaire est envoyé on recuperont le nom de la liste pour avoir l'information a utiliser pour filter la requette 
if (isset($_POST['submit'])) {
    $t = $_POST['repa'];

    $requete = 'SELECT a.Id,a.Titre,a.Prix,a.Url,a.description,b.Libelle FROM `produits` a JOIN categorie b on a.Categorie=b.id_categorie where b.Libelle ="' . $t . '"';

    $querySelect = new Sql();
    $produits = $querySelect->afficher($requete);
    if (count($produits) == 0) {
        echo "<h2>Aucun produit  dans votre base de donnée !</h2>";
        include "./includes/frmMajProduit.php";
        die();
    }
} else {
    $requete = 'SELECT a.Id,a.Titre,a.Prix,a.Url,a.description,b.Libelle FROM `produits` a JOIN categorie b on a.Categorie=b.id_categorie order by a.Id DESC';

    $querySelect = new Sql();
    $produits = $querySelect->afficher($requete);
    if (count($produits) == 0) {
        echo "<h2>Aucun produit  dans votre base de donnée !</h2>";
        die();
    }
}






include "./includes/frmMajProduit.php";
?>
<?php
// Vérifier si le produit id existe ou pas
if(isset($_GET["id_produit"]))
{
    // Obtenir l'id et ses détails du produit sélectionné
    $id_produit = $_GET["id_produit"];

    //Obtenir les détails du produit sélectionné par une requête SELECT
    $rqProduitSelect = "SELECT * FROM produits WHERE id = $id_produit";
    $sqlProduitSelect = new sql();
    $resultatProduitSelect = $sqlProduitSelect->afficher($rqProduitSelect);

}
?>
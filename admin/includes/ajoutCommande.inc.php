<?php
if(isset($_SESSION['cart'])){

    $reqAjoutCom = "INSERT INTO commande(produit, prix, qte, total, commande_date,telephone, email, adresse)
    VALUES('$produit','$prix','$qte','$total','$commande_date','$telephone', '$email', '$adresse');";
}

$queryInsert = new Sql();
$queryInsert->inserer($reqAjoutCom);
?>
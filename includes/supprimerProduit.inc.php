<?php
if (!isset($_GET['id']))
{
    header('Location:./index.php');
}
$idProduit = $_GET['id'];


$requete = "DELETE FROM produits WHERE id = :id";

$requeteSupp = new Sql();
$requeteSupp->supprimer($requete,$idProduit);

header('Location: ./index.php?page=majProduit');
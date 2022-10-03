<?php
if (!isset($_GET['id']))
{
    header('Location:./index.php');
}
$idUser = $_GET['id'];


$requete = "DELETE FROM evenements WHERE id_event = :id";

$requeteSupp = new Sql();
$requeteSupp->supprimer($requete,$idUser);

header('Location: ./index.php?page=maj');
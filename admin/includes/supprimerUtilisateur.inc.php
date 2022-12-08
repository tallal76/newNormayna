<?php

if (!isset($_GET['id']))
{
    header('Location:./index.php');
}
$idUtilisateur = $_GET['id'];


$requete = "DELETE FROM utilisateur WHERE id = :id";

$requeteSupp = new Sql();
$requeteSupp->supprimer($requete,$idUtilisateur);

if($requeteSupp == true){
    ?>
    <div class="alert-success">
        <?php
        $_SESSION["supprimer"] = "L'utilisateur est supprimer";
        ?>
    </div>
    <?php
    header("Location: index.php?page=manageAdmin");
}else{
    ?>
    <div class="alert-danger">
        <?php   
        $_SESSION['supprimer'] = "Désolé, il y a une erreur, vous devez recommencer";
        ?>
    </div>
    <?php
    header("Location: index.php?page=manageAdmin");
}

?>
<!-- Main Content Section Starts -->

<?php

//Affiche le tableau des utilisateurs
$req = "SELECT * FROM utilisateur";
$cnx = new sql();
$resultat = $cnx->afficher($req);

if($resultat == true){
?>
<div class="main-content">
    <div class="wrapper">
        <div class="tbl-head">

        <div class="message">
            <?php
            if(isset( $_SESSION['ajouter']))
            {
                // Affiche le message
                echo $_SESSION['ajouter'];
                // Supprime la session message
                unset($_SESSION['ajouter']);
            }
            ?>
            <?php 
            if(isset( $_SESSION['modifier']))
            {
                // Affiche le message
                echo $_SESSION['modifier'];
                // Supprime la session message
                unset($_SESSION['modifier']);
            }
            ?>
            <?php 
            if(isset( $_SESSION['supprimer']))
            {
                // Affiche le message
                echo $_SESSION['supprimer'];
                // Supprime la session message
                unset($_SESSION['supprimer']);
            }
            ?>
        </div>

            <h2>Gestion Utilisateurs</h2>
            <a href="index.php?page=frmAjoutUtilisateur" class="btn btn-ajouter">Ajouter</a>
        </div>
      
        <table class="tbl-full">
       
            <tr>
                <th>Id</th>
                <th>Nom complet</th>
                <th>Username</th>
                <th>Mail</th>
                <th>Mot de passe</th>
                <th>Rôle</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        <?php
        foreach ($resultat as $key => $value) {
        ?>
            <tr>
                <td><?= $value["id"] ?></td>
                <td><?= $value["prenom"] ." ". $value["nom"] ?></td>
                <td><?= $value["username"] ?></td>
                <td><?= $value["email"] ?></td>
                <td><?= $value["password"] ?></td>
                <td><?= $value["role"] ?></td>
                <td><?= $value["adresse"] ?></td>
                <td><?= $value["telephone"] ?></td>
                <td>
                    <a href="index.php?page=frmModifierUtilisateur&id=<?= $value["id"] ?>"><i class="fa fa-edit action" aria-hidden="true"></i></a>
                    <a href="index.php?page=supprimerUtilisateur&id=<?= $value["id"] ?>"><i class="fa fa-trash action" aria-hidden="true"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
        </table>
    </div>
</div>
<?php 
}
require_once './includes/base/footer.php';
?>
<h1>Modifier utilisateur</h1>

<?php
if (isset($_POST["frmModifierUtilisateur"])) {

    $requete = "UPDATE utilisateur SET 
    nom = '" . $_POST['nom'] . "', 
    prenom = '" . $_POST['prenom'] . "',
    username = '" . $_POST['username'] . "',
    email = '" . $_POST['email'] . "', 
    password = '" .$_POST['password']. "',
    role = '". $_POST['role']. "',
    adresse = '". $_POST['adresse']. "',
    telephone = '" .$_POST['telephone']. "'
    WHERE id = " . $_POST['id'];
   
    $reqModifier = new Sql();
    $ModifierUtilisateur = $reqModifier->inserer($requete);
    header('Location: index.php?page=manageAdmin');
} else {
    $requete = 'SELECT * FROM utilisateur WHERE id = ' . $_GET['id'];
    $querySelect = new Sql();
    $select = $querySelect->recup($requete);

    $nom = $select[0]['nom'];
    $prenom = $select[0]['prenom'];
    $username = $select[0]['username'];
    $email = $select[0]['email'];
    $password = $select[0]['password'];
    $role = $select[0]['role'];
    $adresse = $select[0]['adresse'];
    $telephone = $select[0]['telephone'];
    $id = $_GET['id'];

    include "./includes/frmModifierUtilisateur.inc.php";
    include "./includes/manageAdmin.inc.php";
}

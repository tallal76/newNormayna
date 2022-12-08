<?php 
if(isset($_POST['submit']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];

    $reqAjoutUser = "INSERT INTO utilisateur (nom, prenom, username, email, password, adresse, telephone) 
    VALUES ('$nom', '$prenom', '$username', '$email', '$password', '$adresse', '$telephone');";
     
    $reqInsert = new Sql();
    $reqInsert->inserer($reqAjoutUser);

    if($reqInsert == TRUE)
    {
        $_SESSION['ajouter'] = "Votre enregistrement s'est effectué avec succès";
        header("Location: index.php?page=accueil");
    }else{
        $_SESSION['ajouter'] = "Désolé, il y a une erreur, vous devez recommencer";
        header("Location: index.php?page=frmAjoutUtilisateur");
    }
}
?>
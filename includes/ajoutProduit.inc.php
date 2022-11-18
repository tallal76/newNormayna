
<h1>Ajouter un Produit</h1>
<?php
//remplir la list

$requette = "SELECT Libelle FROM categorie";
$cnx = new sql();
$requette = $cnx->afficher($requette);

if (isset($_POST['submit'])) {
    $t = $_POST['repa'];
}
if (isset($_POST['frmProduit'])) {

    $libelle = htmlentities(trim($_POST['libelle']));
    $prix = htmlentities(trim($_POST['prix']));
    $erreurs = array();

    if (mb_strlen($libelle) === 0)
        array_push($erreurs, "Il manque votre nom");

    if (mb_strlen($prix) === 0)
        array_push($erreurs, "Il manque votre Prix");

    /*   if (mb_strlen($file) === 0)
        array_push($erreurs, "Il manque votre image"); */


    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;

        include './includes/frmProduit.php';
    } else {


        /* tester si l'image existe */
        if (isset($_FILES['file'])) {
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
            //INSERT INTO `produits` (`Id`, `Titre`, `Prix`, `Url`, `Categorie`)
            // VALUES (NULL, 'requete', '5', 'l00',( SELECT id_categorie from Categorie WHERE libelle ='Nos Plats'));
            //trouve une solution pour recuperer la valeur de l'id selection de la liste

            $ins = "INSERT INTO produits (Titre, Prix, Url,Categorie,description
            )
            VALUES ('$libelle', '$prix', '$name',( SELECT id_categorie from Categorie WHERE libelle ='$t'),'$description');";

            $queryInsert = new Sql();
            $queryInsert->inserer($ins);
            move_uploaded_file($tmpName, './assets/images/' . $name);
            header('Location:./index.php?page=maj');
        }
    }
} else {
    $libelle = $prix = $name = "";
    include './includes/frmProduit.php';
}

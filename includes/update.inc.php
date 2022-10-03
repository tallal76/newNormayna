<h1>Modifier</h1>

<?php



// dump($select);



if (isset($_POST["frmUpdate"])) {

    $requete = "UPDATE evenements SET theme_event = '" . $_POST['theme'] . "', adress_event = '" . $_POST['adresse'] . "', date_event = '" . $_POST['date'] . "' ,description_event = '" . $_POST['description'] . "',video_event = '".$_POST['video']."'  WHERE id_event = " . $_POST['id'];
   
    $queryUpdate = new Sql();
    $update = $queryUpdate->inserer($requete);

    
    header('Location: index.php?page=maj');
} else {

    $requete = 'SELECT * FROM evenements WHERE id_event = ' . $_GET['id'];
    $querySelect = new Sql();
    $select = $querySelect->recup($requete);

    $theme = $select[0]['theme_event'];
    $adresse = $select[0]['adress_event'];
    $date = $select[0]['date_event'];
    $description = $select[0]['description_event'];
    $video = $select[0]['video_event'];
    $id = $_GET['id'];

    include "./includes/frmUpdate.php";
    include "./includes/maj.inc.php";
}
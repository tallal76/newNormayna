<h1>MAJ</h1>
<?php
$requete = 'SELECT * FROM evenements order by id_event DESC';

$querySelect = new Sql();
$events = $querySelect->afficher($requete);

if (count($events) == 0) {
    echo "<h2>Aucun evénement  dans votre base de donnée !</h2>";
    die();
}
?>
<table class="list-events">
    <thead>
        <tr>
            <th>Id</th>
            <th>Thème</th>
            <th>Adresse</th>
            <th>Date</th>
            <th>Description</th>
            <th>Lien Video</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($events as $event) {
        ?>
            <tr>
                <td data-column="ID"><?= $event['id_event'] ?></td>
                <td data-column="Thème"><?= $event['theme_event'] ?></td>
                <td data-column="Adresse"><?= $event['adress_event'] ?></td>
                <td data-column="Date"><?= $event['date_event'] ?></td>
                <td data-column="Description"><?= $event['description_event'] ?></td>
                <td data-column="Video"><?= $event['video_event'] ?></td>
                <td><a href="index.php?page=update&id=<?= $event['id_event'] ?>" class="btn">Editer</a></td>
                <td><a href="index.php?page=supp&id=<?= $event['id_event'] ?>" class="btn btn-supp" onclick="return confirm('Etes vous certain de supprimer cet utilisateur ?')">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>
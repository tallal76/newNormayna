<h1>Mis à jour Categorie</h1>
<?php
$requete = 'SELECT * FROM categorie order by id_categorie DESC';

$querySelect = new Sql();
$categories = $querySelect->afficher($requete);

if (count($categories) == 0) {
    echo "<h2>Aucune Categorie  dans votre base de donnée !</h2>";
    die();
}
?>
<table>
    <thead>
        <tr>
            <th>ID categorie</th>
            <th>Libelle</th>
            <th>Description</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($categories as $categorie) {
        ?>
            <tr>
                <td data-column="ID"><?= $categorie['id_categorie'] ?></td>
                <td data-column="Thème"><?= $categorie['Libelle'] ?></td>
                <td data-column="Adresse"><?= $categorie['Description'] ?></td>
                <td><a href="index.php?page=updateCategorie&id=<?= $categorie['id_categorie'] ?>" class="btn">Editer</a></td>
                <td><a href="index.php?page=supprimerCategorie&id=<?= $categorie['id_categorie'] ?>" class="btn btn-supp" onclick="return confirm('Etes vous certain de supprimer cet utilisateur ?')">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>
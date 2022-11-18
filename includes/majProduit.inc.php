<h1>Ms à jour produit</h1>
<?php
$requete = 'SELECT a.Id,a.Titre,a.Prix,a.Url,a.description,b.Libelle FROM `produits` a JOIN categorie b on a.Categorie=b.id_categorie order by a.Id DESC';

$querySelect = new Sql();
$produits = $querySelect->afficher($requete);

if (count($produits) == 0) {
    echo "<h2>Aucun produit  dans votre base de donnée !</h2>";
    die();
}
?>
<table class="list-produits">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Image</th>
            <th>Categorie</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($produits as $produit) {
        ?>
            <tr>
                <td data-column="ID"><?= $produit['Id'] ?></td>
                <td data-column="Titre"><?= $produit['Titre'] ?></td>
                <td data-column="Prix"><?= $produit['Prix'] ?></td>
                <td data-column="Description"><?= $produit['description'] ?></td>
                <td data-column="Image"><img src="./assets/images/<?= $produit['Url'] ?>" style="width:50px"  alt=""></td>
                <td data-column="Categorie"><?= $produit['Libelle'] ?></td>
                <td><a href="index.php?page=supprimerProduit&id=<?= $produit['Id'] ?>" class="btn">Editer</a></td>
                <td><a href="index.php?page=supprimerProduit&id=<?= $produit['Id'] ?>" class="btn btn-supp" onclick="return confirm('Etes vous certain de supprimer cet utilisateur ?')">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>
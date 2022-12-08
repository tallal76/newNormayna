<form action="index.php?page=majProduit" method="post">

    <!--  ajout de style ici juste un affichage propre -->
    <fieldset style="width:30% ;">
        <legend>Filtrer par categorie</legend>
        <div>
            <select name="repa">
                <?php
                foreach ($requette as $key => $value) {
                    $nom =   $value['Libelle'];
                    echo "<option value=" . $nom . ">";
                    echo "$nom";
                    echo "</option>";
                }
                ?>

            </select>
            <input type="submit" name="submit" value="Rechercher">
        </div>

    </fieldset>

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
                    <td data-column="Image"><img src="./assets/images/<?= $produit['Url'] ?>" style="width:50px" alt=""></td>
                    <td data-column="Categorie"><?= $produit['Libelle'] ?></td>
                    <td><a href="index.php?page=updateProduit&id=<?= $produit['Id'] ?>" class="btn">Editer</a></td>
                    <td><a href="index.php?page=supprimerProduit&id=<?= $produit['Id'] ?>" class="btn btn-supp" onclick="return confirm('Etes vous certain de supprimer cet utilisateur ?')">Supprimer</a></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>




</form>
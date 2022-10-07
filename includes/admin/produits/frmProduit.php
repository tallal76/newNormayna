<form action="index.php?page=ajoutProduit" method="post" enctype="multipart/form-data">

    <div>
        <label for="libelle">Nom :</label>
        <input type="text" name="libelle" id="libelle" value="<?= $libelle ?>" />
    </div>
    <div>
        <label for="prix">Prix :</label>
        <input type="text" name="prix" id="prix" value="<?= $prix ?>" />
    </div>
    <div>
        <label for="file">Image :</label>
        <input type="file" name="file" value="<?= $file ?>" />
    </div>

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
    <div>
        <div>
            <label for="description">Description :</label>
            <textarea name="description" id="description" cols="30" rows="7"></textarea>
        </div>
        <input type="reset" value="Effacer" />
        <input type="submit" name="submit" value="Enregistrer" />
    </div>
    <input type="hidden" name="frmProduit" />
</form>
<form action="index.php?page=categorie" method="post">

    <div>
        <label for="libelle">Nom :</label>
        <input type="text" name="libelle" id="libelle" value="<?= $libelle ?>">
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description" cols="30" rows="4" value="<?= $description ?>"></textarea>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmCategorie" />
</form>
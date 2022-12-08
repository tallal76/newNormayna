<form action="index.php?page=updateCategorie" method="post">

    <div>
        <label for="Libelle">Libelle :</label>
        <input type="text" name="Libelle" id="Libelle" value="<?= $Libelle ?>">
    </div>
    <div>
        <label for="Description">Description :</label>
        <textarea name="Description" id="Description" cols="30" rows="4"><?= $Description ?></textarea>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmUpdateCategorie" />
    <input type="hidden" name="id" value="<?= $id ?>">
</form>
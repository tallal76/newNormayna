<form action="index.php?page=ajoutCategorie" method="post">

    <div>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?= $nom ?>">
    </div>
    <div>
        <label for="dataFilter">Filtre :</label>
        <textarea name="dataFilter" id="dataFilter" cols="30" rows="4" value="<?= $dataFilter ?>"></textarea>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmCategorie" />
</form>
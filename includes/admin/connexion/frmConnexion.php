<form action="index.php?page=connexion" method="post">
    <div>
        <label for="mail">e-mail :</label>
        <input type="text" id="mail" name="mail" value="<?= $mail ?>" required />
    </div>
    <div>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" name ="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmConnexion" />
</form>
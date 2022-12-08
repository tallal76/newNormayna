<div class="main-content">
    <div class="wrapper">
        <h2>M'inscrire</h2>
        <form action="index.php?page=ajoutUtilisateur" method="POST">
     
            <table class="tbl-40">
                <tr>
                    <td>Nom :</td>
                    <td><input type="text" name="nom" placeholder="Nom" value=""></td>
                </tr>
                <tr>
                    <td>Prénom :</td>
                    <td><input type="text" name="prenom" placeholder="Prénom" value=""></td>
                </tr>
                <tr>
                    <td>Nom d'utilisateur :</td>
                    <td><input type="text" name="username" placeholder="Nom d'utilisateur" value=""></td>
                </tr>
                <tr>
                    <td>email :</td>
                    <td>  <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></td>
                </tr>
                <tr>
                    <td>Mot de passe :</td>
                    <td><input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un chiffre et une lettre majuscule et minuscule, et au moins 8 caractères ou plus"></td>
                </tr>
                <tr>
                    <td>Adresse :</td>
                    <td><input type="text" name="adresse" placeholder="Adresse postale" value=""></td>
                </tr>
                <tr>
                    <td>Téléphone :</td>
                    <td> <input type="tel" name="telephone" id="telephone" pattern="[0-9]{10}" maxlength="10" placeholder="Téléphone" class="form-control" required>
                    <small>Format: xx-xx-xx-xx-xx</small></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Ajouter" class="btn">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
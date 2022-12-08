<form action="index.php?page=modifierUtilisateur" method="post">

<table class="tbl-40">
                <tr>
                    <td>Nom :</td>
                    <td><input type="text" name="nom" placeholder="Nom" value="<?= $nom ?>"></td>
                </tr>
                <tr>
                    <td>Prénom :</td>
                    <td><input type="text" name="prenom" placeholder="Prénom" value="<?= $prenom ?>"></td>
                </tr>
                <tr>
                    <td>Nom d'utilisateur :</td>
                    <td><input type="text" name="username" placeholder="Nom d'utilisateur" value="<?= $username ?>"></td>
                </tr>
                <tr>
                    <td>email :</td>
                    <td>  <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?= $email ?>"></td>
                </tr>
                <tr>
                    <td>Mot de passe :</td>
                    <td><input type="password" id="password" name="password" value ="<?= $password ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un chiffre et une lettre majuscule et minuscule, et au moins 8 caractères ou plus"></td>
                </tr>
                <tr>
                    <td>Rôle :</td>
                    <td><input type="text" name="role" placeholder="Rôle" value="<?= $role ?>"></td>
                </tr>
                <tr>
                    <td>Adresse :</td>
                    <td><input type="text" name="adresse" placeholder="Adresse postale" value="<?= $adresse ?>"></td>
                </tr>
                <tr>
                    <td>Téléphone :</td>
                    <td> <input type="tel" name="telephone" id="telephone" pattern="[0-9]{10}" maxlength="10" placeholder="Téléphone" class="form-control" value="<?= $telephone ?>" required>
                    <small>Format: xx-xx-xx-xx-xx</small></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="reset" value="Effacer" />
                    <input type="submit" value="Enregistrer" />
                </td>
                <input type="hidden" name="frmModifierUtilisateur" />
                <input type="hidden" name="id" value="<?= $id ?>">
                </tr>
            </table>
</form>
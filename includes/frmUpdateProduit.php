<form action="index.php?page=updateProduit" method="post" enctype="multipart/form-data">

    <div>
        <label for="Titre">Titre :</label>
        <input type="text" name="Titre" id="Titre" value="<?= $Titre ?>">
    </div>
    <div>
        <label for="Prix">Prix :</label>
        <input type="text" name="Prix" id="Prix" value="<?= $Prix ?>">
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" value="<?= $description ?>">
    </div>
    <div>
        <label for="Image">Image :</label>
        <img src="./assets/images/<?= $Image ?>" style="width:200px"  alt="<?= $Image ?>">
    </div>  
    <div> 
    <label for="file">Changer l'image :</label>
    <?php 
       if (isset($_FILES['file'])) {
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $fullName =$tmpName .'.'.$name;
         
    }
    ?>        <input type="file" name="file" value="<?= $file ?>" />
        <img src="<?= $fullName ?>" alt="">
        <!-- faut chercher une moyenne pour afficher l'image selectionner dans le upload file 2-cocher une case et afficher l'image selectioner dans une nouvelle page   -->
</div>
     
    
    <div>
    <label for="Categorie">Categorie :</label>
    <select name="cat">
    <?php $nom2 =  $select[0]['Libelle'];?>
        <option selected="selected"><?= $nom2 ?></option>
       <?php
                foreach ($requette as $key => $value) {
               
                $nom =   $value['Libelle']; 
                echo "<option value=" . $nom . ">";
                echo "$nom";
                echo "</option>";
            
            }
       ?>
<!-- faut  remplir la liste et afficher la valeur recuperer du categorie -->
    </select>
       
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmUpdateProduit" />
    <input type="hidden" name="id" value="<?= $id ?>">
</form>
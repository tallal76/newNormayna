<h1> upload image</h1>
<?php
$requette = "SELECT id_categorie,Libelle FROM categorie";
$cnx = new sql();
$requette = $cnx->afficher($requette);
echo "<pre>";
print_r($requette);
echo "</pre>";
echo" <select >";
 foreach ($requette as $key => $value) {
$nom =   $value['Libelle'];

   
    echo "<option value=".$nom.">";
   echo "$nom";
    echo"</option>";

} 
echo"</select>";

include './includes/frmimage.php';


?>
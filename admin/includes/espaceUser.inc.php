   <!--=============== Carte des plats ===============-->
<div class="row">
  <div class="column left">
<div class='search'>
  <input type='search' class='search-input' placeholder='Recherche produits, catégories, ...'>
</div>
<section class="carte" id="cartes">
  <div class="container">
    <div class="category">
      <div class="swiper mySwiper filters d-flex col">
        <div class="flex-item swiper-wrapper filters"  id="category-wrapper">
            <?php 
              $reqSelectCategorie = "SELECT * FROM categorie";
              $cnx = new sql();
              $reqSelectCategorie = $cnx->afficher($reqSelectCategorie);
                                     
              foreach ($reqSelectCategorie as $key => $value) { ?>
              <div class="filters swiper-wrapper target" id="<?php echo $value['dataFilter_categorie'];?>" >
                      <h2>
                          <a id="<?php echo $value['dataFilter_categorie'];?>" onsubmit="onFormSubmit();" class="active" name="<?php echo $value['dataFilter_categorie'];?>" 
                              href="?page=espaceUser&dataFilter=<?php echo $value['dataFilter_categorie']; ?>&nom_categorie=<?php echo $value['nom_categorie'];?>">
                              <?php echo $value['nom_categorie'];?>
                          </a>
                      </h2>
              </div>
              <?php   
              }
              ?>   
        </div>
      </div>  
    </div>
      <!--=============== Affichage de la Carte des plats selon les catégories selectionnées ===============-->
    <div class="carte">
      <div class="swiper mySwiper">                  
        <div class="carte_swiper-wrapper" id="products-wrapper">
        <?php    
      
         if(!isset($_GET['dataFilter']))
         {
             $AlldataFilter = "AllProduct";
             $reqSelectProduits = "SELECT id_produit, titre_produit, url_produit, categorie.nom_categorie, prix_produit, description_produit, dataFilter_produit 
             FROM produits, categorie 
             WHERE categorie.dataFilter_categorie ='". $AlldataFilter ."'";
         }
         if(isset($_GET['dataFilter']) && $_GET['dataFilter']=="AllProduct")
         {   
             $AlldataFilter = "AllProduct";
             $reqSelectProduits = "SELECT id_produit, titre_produit, url_produit, categorie.nom_categorie, prix_produit, description_produit, dataFilter_produit  
             FROM produits, categorie 
             WHERE categorie.dataFilter_categorie ='". $AlldataFilter ."'";
         }
         if(isset($_GET['dataFilter']) && $_GET['dataFilter']!="AllProduct")
         {
             $filterCategorie = $_GET['dataFilter'];
             $nomCategorie = $_GET['nom_categorie'];
             $reqSelectProduits = "SELECT id_produit, titre_produit, url_produit, categorie.nom_categorie, prix_produit, description_produit, dataFilter_produit 
             FROM produits, categorie 
             WHERE categorie.nom_categorie ='". $nomCategorie ."' AND dataFilter_produit ='". $filterCategorie ."'";
         }
         $cnx = new sql();
         $reqSelectProduits = $cnx->afficher($reqSelectProduits);
         ?>
         <?php
         foreach ($reqSelectProduits as $key => $value) 
         {
         ?> 
        <form action="#" class="commandeClient">
          <div class="box">
            <div class="item">
                <p><h3><?php echo $value['titre_produit']; ?></h3></p>
                <div class="carte-img">
                    <figure>
                        <a href="#"><img src="../<?php echo $value['url_produit']; ?>" alt=""></a>
                    </figure>
                </div>
                <div class="carte-content">
                    <div class="card-meta">                    
                      <ul class="dish-stats">
                        <li> 
                          <span class="dish-type"><?php echo $value['dataFilter_produit']; ?></span>
                        </li>    
                        <li>
                          <span class="prix_produit"><?php echo $value['prix_produit']; ?> €</span>
                        </li>
                        <li>
                          <a href="#">
                          <i class="fa-solid fa-heart"></i>
                          </a>
                            &nbsp;237
                        </li>
                      </ul>
                    </div>
                </div> 
                 <p class = "description"><?php echo $value['description_produit']; ?></p>
                <div class="container_btn">
                  <div class="btnAjouter">
                  <a name="ajouter" onsubmit="onFormSubmit();" href="?page=espaceUser&action_type=add_item&id_produit=<?=$value['id_produit']?>&titre_produit=<?=$value['titre_produit']?>&quantite=1&prix_produit=<?=$value['prix_produit']?>" >Ajouter +</a>
                  </div>
                </div>
            </div>
        </div>
      </form>
       <?php 
        } 
      ?>
        </div>  
    </div>
  </div>
  <?php 
//=============== Gérer les actions : ajouter ou supprimer un item commande =================//
$action_type = $_GET['action_type'];

if($action_type=='add_item')
{
	$id_produit = $_GET['id_produit'];
	$titre_produit = $_GET['titre_produit'];
	$quantite = $_GET['quantite'];
	$prix_produit = $_GET['prix_produit'];

	$produit_arr = array(
		'id_produit'=>$id_produit,
		'titre_produit'=>$titre_produit,
		'quantite'=>$quantite,
		'prix_produit'=>$prix_produit,
	);

	if(!empty($_SESSION['cart']))
	{
		$produit_ids = array_column($_SESSION['cart'], 'id_produit');
		if(in_array($id_produit, $produit_ids))
		{
			foreach($_SESSION['cart'] as $key => $val)
			{
				if($_SESSION['cart'][$key]['id_produit']==$id_produit)
				{
					$_SESSION['cart'][$key]['quantite'] = $_SESSION['cart'][$key]['quantite'] + $quantite;
         
				}
			}
		}
		else
		{
			$_SESSION['cart'][] = $produit_arr;
		}
	}
	else
	{
		$_SESSION['cart'][] = $produit_arr;
	}
	header("location:index.php?page=accueil");

}
if($action_type=='remove_item')
{
	$index = $_GET['index'];
	if(isset($_SESSION['cart']))
	{
		unset($_SESSION['cart'][$index]);
		header("location:index.php?page=accueil");
	}
}
?>
</section>

  </div>
  <!-- ============== Affichage du panier et le total de la commande du client ================= -->
   
  <div id="produitSelect" class="column right">
    <h2>Détail de ma commande</h2>
      <?php 
      $Total = 0;
    
      if(isset($_SESSION['cart'])) { ?>
      <table class="ficheCommande table table-bordered">
          <thead>
             <th></th>
             <th>Produit</th>
             <th>Qté</th>
             <th>Prix €</th>
             <th></th>
          </thead>
          <tbody>
            <?php
            $index = 0;
            $i=1;
            $totalQuantite=0;
            foreach($_SESSION['cart'] as $key => $val) {   
              $totalPrix = $val['quantite'] * $val['prix_produit'];
              $totalQuantite += $val['quantite'];
              $Total = $Total + $totalPrix;
              ?>            
            <tr>
               <td><?=$i++?></td> 
               <td><?=$val['titre_produit']?></td> 
               <td><?=$val['quantite']?></td>  
               <td><?=number_format($totalPrix, 2, ',', ' ');?></td> 
               <td><a href="?page=espaceUser&action_type=remove_item&index=<?=$key?>"><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
            </tr>
          <?php 
            $index++; 
          } 
          ?>
          <?php $_SESSION['nbArticle'] = $index;   
          $_SESSION['quantite'] = $totalQuantite;
          ?>
          <tr>
            <td></td>
            <td><b>TOTAL</b></td>
            <td> 
              <b>
                <?php    
                  echo $totalQuantite;
                ?>
              </b>
            </td>
            <td><b><?=number_format($Total, 2, ',', ' ');?></b></td>
            <td></td>
          </tr>
          </tbody>
      </table>
    <?php } ?>
      <div class="btnCommande">
        <a name="valider" onsubmit="onFormSubmit();" href="?page=espaceUser&action_type=add_item&id_produit=<?=$value['id_produit']?>&titre_produit=<?=$value['titre_produit']?>&quantite=1&prix_produit=<?=$value['prix_produit']?>" >Valider</a>
      </div>
        </div> 
    
<script> 
// Empécher le rechargement de la page au click d'un lien
 function onFormSubmit() {
    event.preventDefault();
}
</script>

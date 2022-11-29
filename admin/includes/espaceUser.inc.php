<div class="row">
  <div class="column left">
    <!--=============== Carte des plats ===============-->
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
                          <a  id="<?php echo $value['dataFilter_categorie'];?>" class="active" name="<?php echo $value['dataFilter_categorie'];?>" 
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
    <div class="carte">
      <div class="swiper mySwiper">                  
        <div class="carte_swiper-wrapper" id="products-wrapper">
        <?php    
      
         if(!isset($_GET['dataFilter']))
         {
             $AlldataFilter = "AllProduct";
             $reqSelectProduits = "SELECT titre_produit, url_produit, categorie.nom_categorie, prix_produit, description_produit, dataFilter_produit 
             FROM produits, categorie 
             WHERE categorie.dataFilter_categorie ='". $AlldataFilter ."'";
         }
         if(isset($_GET['dataFilter']) && $_GET['dataFilter']=="AllProduct")
         {   
             $AlldataFilter = "AllProduct";
             $reqSelectProduits = "SELECT titre_produit, url_produit, categorie.nom_categorie, prix_produit, description_produit, dataFilter_produit  
             FROM produits, categorie 
             WHERE categorie.dataFilter_categorie ='". $AlldataFilter ."'";
         }
         if(isset($_GET['dataFilter']) && $_GET['dataFilter']!="AllProduct")
         {
             $filterCategorie = $_GET['dataFilter'];
             $nomCategorie = $_GET['nom_categorie'];
             $reqSelectProduits = "SELECT titre_produit, url_produit, categorie.nom_categorie, prix_produit, description_produit, dataFilter_produit 
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
                         <p class="dish-type"><?php echo $value['dataFilter_produit']; ?></p>
                             <ul class="dish-stats">
                                 <li>
                                 <h5><span class="prix"><?php echo $value['prix_produit']; ?> €</span></h5>
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
                 <p><?php echo $value['description_produit']; ?></p>
                 <!-- footer carte -->
                 <div class="number-input">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                  <input class="quantity" min="0" name="quantity" value="1" type="number">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                </div>
                 <div class="button btn"><a href="http://"> Ajouter +</a></div>
             </div>
         </div>
        <?php
        } 
        ?>
        </div>
    </div>
  </div>
</section>
  </div>
  <div class="column right">
    <h2>Détail de ma commande</h2>
    <hr>
    <h3>1 x <?php echo $value['titre_produit']; ?> <span class="prix"><?php echo $value['prix_produit']; ?> €</span></h3>
    <hr>
    

  </div>
</div>
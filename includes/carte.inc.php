<section id="carte">
<div class="carte">

        <div class="carte_titre">
            <h2>Carte menu</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, eum!</p>
        </div>
        <div class="category">
            <div class="swiper mySwiper filters d-flex col">
            <div class="container">
                <div class="flex-parent">
                    <div class="flex-item swiper-wrapper filters"  id="category-wrapper">
                
                    <?php 
                                    $reqSelectCategorie = "SELECT * FROM categorie";
                                    $cnx = new sql();
                                    $reqSelectCategorie = $cnx->afficher($reqSelectCategorie);
                                                            
                                    foreach ($reqSelectCategorie as $key => $value) { ?>
                                    
                                    <div class="filters swiper-wrapper target" id="<?php echo $value['dataFilter_categorie'];?>" >
                                
                                    <a  id="<?php echo $value['dataFilter_categorie'];?>" class="active" name="<?php echo $value['dataFilter_categorie'];?>" href="?dataFilter=<?php echo $value['dataFilter_categorie']; ?>#recipes">
                                        <?php echo $value['nom_categorie'];?>
                                    </a>
                                    </div>
                                    <?php   
                                    }
                                ?>
                    </div>


                </div>
              
            </div>
        </div>
        <div class="container">
       
        <?php   
                    if(!isset($_GET['dataFilter']))
                    {
                        $AlldataFilter = "AllProduct";
                         $reqSelectProduits = "SELECT * FROM produits, categorie WHERE categorie.dataFilter_categorie ='". $AlldataFilter ."'";
                    }
                    if(isset($_GET['dataFilter']) && $_GET['dataFilter']=="AllProduct")
                    {
                        $reqSelectProduits = "SELECT * FROM produits";   
                    }
                    if(isset($_GET['dataFilter']) && $_GET['dataFilter']!="AllProduct")
                    {
                        $filterCategorie = $_GET['dataFilter'];
                        $reqSelectProduits = "SELECT * FROM produits, categorie WHERE dataFilter_produit ='". $filterCategorie ."'";
                        
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
                                    <img src="<?php echo $value['url_produit']; ?>" alt="">
                                </figure>
                            </div>
                            <div class="carte-content">
                            <div class="card-meta">
		                        <p class="dish-type"><?php echo $value['nom_categorie']; ?></p>
                                    <ul class="dish-stats">
                                        <li>
                                        <h5><span><?php echo $value['prix_produit']; ?> €</span></h5>
                                        </li>
                                        <li>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.9713 2.5C7.00005 2.5 8.00005 4.5 8.00005 4.5C8.00005 4.5 9.00005 2.5 11.0288 2.5C12.6775 2.5 13.9832 3.87937 14 5.52531C14.0344 8.94187 11.2897 11.3716 8.2813 13.4134C8.19836 13.4699 8.10036 13.5 8.00005 13.5C7.89973 13.5 7.80174 13.4699 7.7188 13.4134C4.71067 11.3716 1.96598 8.94187 2.00005 5.52531C2.01692 3.87937 3.32255 2.5 4.9713 2.5Z" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            237
                                        </li>
                                    </ul>
	                        </div> <!-- end card-meta -->
                            
                                <p><?php echo $value['description_produit']; ?></p>
                            </div>
                            <div class="button btn">Voir la carte</div>
                        </div>
                    </div>
                <?php
                } 
                ?>
            </div>
        </div>
   
</div>
</section>
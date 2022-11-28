<header class="header">
    <!--=============== Navbar ===============-->
    <?php
    require_once './includes/nav.php';
    if (isset($_SESSION['login'])) {
        echo "Bienvenue <strong>". $_SESSION['login']."</strong>";
    }
    ?>
    <!--=============== Caroussel ===============-->
    
    
    <div class="boite">
        <div class="contenu_carou_auto">
            <div class="caroussel-image">
                <img src="./assets/imgslider/msmen-farsi.jpg" alt>
                <img src="./assets/imgslider/patisserie_plateau13.jpg" alt>
                <img src="./assets/imgslider/mssemens.jpg" alt>
                <img src="./assets/imgslider/msmn.jpg" alt>
                <img src="./assets/imgslider/poulet.jpg" alt>
                <img src="./assets/imgslider/viande-prune.jpg" alt>
                <img src="./assets/imgslider/chekhchoukha-plat-algerien.jpeg" alt>
                <img src="./assets/imgslider/téléchargement.jpg" alt>
            </div>
        </div>
    </div>
    <div id="infos">
        Passez votre commande au <strong> 06 13 40 45 87 - Repas à emporter</strong>
    </div>
    <!--=============== Home ===============-->
    <div class="home">
        <div class="row container">
            <div class="col">
                <div class="faster">

                </div>
                <h1>
                    Votre repas prêt <br />
                    <span class="color">à être emporter</span>
                </h1>
                <p>
                    <img src="./assets/images/repasOriental.png" alt="" />

                </p>
                <a href="#recipes" class="btn">Voir notre carte de menu</a>
            </div>
            <div class="col">
                <img src="./assets/images/commandeHome.png" alt="" />
            </div>
        </div>
    </div>

    <!--=============== SignIn Form ===============-->
    <div class="wrapper">
        <form action="index.php?page=connexion" method="POST" class="form">
            <h2>SE CONNECTER</h2>

            <div class="control">
                <label for="mail">Email:</label>
                <input type="text"  id="mail" name="mail" placeholder="Entrer votre Email" required />
            </div>
            <div class="control">
                <label for="mdp">Mot de passe:</label>
                <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required />
            </div>
            <div class="checkbox d-flex">
                <input type="checkbox" />
                <span>Se souvenir de moi</span>
            </div>
            <input type="reset" value="Effacer" />
            <button class="btn" type="submit">Connexion</button>
         
            <div class="links">
                <span>Mot de passe oublié? <a href="">Click ici</a></span>
                <span>Vous n'avez pas de compte? <a href="">Créer un compte</a></span>
            </div>
            <input type="hidden" name="frmConnexion" />
        </form>

        <div class="close-form">
            <i class="bx bx-x"></i>
        </div>
    </div>
 </header>

<section class="section recipes" id="recipes">

    <h2>Découvrez nos plats typiquement orientaux</h2>

    <div class="row container">
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
    <div class="products">
        <div class="swiper mySwiper">                  
            <div class="swiper-wrapper" id="products-wrapper">
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
                    $reqSelectProduits = "SELECT * FROM produits WHERE dataFilter_produit ='". $filterCategorie ."'";
                }

                $cnx = new sql();
                $reqSelectProduits = $cnx->afficher($reqSelectProduits);
                ?>
                <?php
                
                foreach ($reqSelectProduits as $key => $value) 
                {
                ?> 
                <div class="swiper-slide">
                    <div class="card d-flex">
                        <div class="image"><img src="<?php echo $value['url_produit']; ?>" alt=""></div>
                            <h4><?php echo $value['titre_produit']; ?></h4>
                        <div class="description">
                        <p>
                            <ul>
                                <li>
                                    <?php echo $value['description_produit']; ?>
                                </li>
                            </ul> 
                        </p>
                        </div>
                        <div class="price">
                            <span>Prix</span>
                            <span class="color"><?php echo $value['prix_produit']; ?> €</span>
                        </div>
                        <div class="button btn">Voir la carte</div>
                    </div>
                </div>
                <?php
                } 
                ?>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        
        <div class="pagination">
            <div class="custom-pagination"></div>
        </div>
    </div>
</section>

<!--=============== Testimonials ===============-->
<section class="section testimonials" id="testimonials">
    <div class="row container">
        <div class="col">
            <div class="card">
                <div class="d-flex active">
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Floris.rtn%2Fposts%2Fpfbid0KmmgRgqtPY6mVgE1Wn9SWVVyQ6E86db6jP5pSh2pr8fTB76TLmLxXZpbQv4qEwVBl&show_text=true&width=500" width="500" height="189" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <div class="d-flex">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsimanen%2Fposts%2Fpfbid021o2owPjatBK9t3peax7P8JYwEYfGuYYXdJgzXcQY5xRmfxNxmH1RySPRffksQu5il&show_text=true&width=500" width="500" height="170" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></div>
            </div>
        </div>
        <div class="col">
            <h2>
                Nos plateaux de patisseries<br />
                <span>orientales</span>
            </h2>
            <div>
                <img src="./assets/images/patisserie_plateau13.jpg" alt="">
            </div>
        </div>
    </div>
</section>


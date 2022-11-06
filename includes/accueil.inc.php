<header class="header">
    <!--=============== Navbar ===============-->
    <?php
    require_once './includes/nav.php';
    ?>
    <!--=============== Caroussel ===============-->
    <div class="boite">
        <div class="contenu_carou_auto">
            <div class="caroussel-image">
                <img src="./assets/imgslider/briwate.jpg" alt>
                <img src="./assets/imgslider/couscous-mergez.jpg" alt>
                <img src="./assets/imgslider/msmen-farsi.jpg" alt>
                <img src="./assets/imgslider/msmn.jpg" alt>
                <img src="./assets/imgslider/poulet.jpg" alt>
                <img src="./assets/imgslider/viande-prune.jpg" alt>
                <img src="./assets/imgslider/chekhchoukha-plat-algerien.jpeg" alt>
                <img src="./assets/imgslider/téléchargement.jpg" alt>
            </div>
        </div>
    </div>
    <div id="infos">
        Passez votre commande au <strong> 06 13 40 45 87 - Repas à emporter ou à livrer</strong>
    </div>
    <!--=============== Home ===============-->
    <div class="home">
        <div class="row container">
            <div class="col">
                <div class="faster">

                </div>
                <h1>
                    Votre repas livré <br />
                    <span class="color">à votre porte</span>
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
        <form action="" class="form">
            <h2>SE CONNECTER</h2>

            <div class="control">
                <label for="">Email:</label>
                <input type="email" name="email" placeholder="Entrer votre Email" required />
            </div>
            <div class="control">
                <label for="">Mot de passe:</label>
                <input type="password" name="password" placeholder="Mot de passe" required />
            </div>
            <div class="checkbox d-flex">
                <input type="checkbox" />
                <span>Se souvenir de moi</span>
            </div>
            <button class="btn" type="submit">Connexion</button>
            <div class="links">
                <span>Mot de passe oublié? <a href="">Click ici</a></span>
                <span>Vous n'avez pas de compte? <a href="">Créer un compte</a></span>
            </div>
        </form>

        <div class="close-form">
            <i class="bx bx-x"></i>
        </div>
    </div>



 </header>
<!--=============== Services ===============-->
<!--<section class="section services" id="services">
    <div class="row container">
        <div class="col">
            <h2>Why we are Best in our Twon</h2>
            <p>
                whole grains and low-fat dairy can help to reduce your risk of heart disease by maintaining blood
                pressure and
            </p>
        </div>
        <div class="col">
            <div class="card">
                <img src="./assets/images/meat-icon.svg" alt="" />
                <h3>
                    Choose <br /> your favorite <br /> food
                </h3>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./assets/images/delivery-icon.svg" alt="" />
                <h3>
                    Get delivery <br /> at your door <br /> step
                </h3>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./assets/images/phone-icon.svg" alt="" />
                <h3>
                    We have <br /> 400+ Review <br /> On our app
                </h3>
            </div>
        </div>
    </div>
</section> -->
<!--=============== Recipes ===============-->

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
            <div class="card" data-filter="rosele">
                <div class="d-flex">
                    <div class="image">
                        <img src="./assets/images/profile-1.jpg" alt="" />
                    </div>
                    <div>
                        <h4>Rosele Desoza</h4>
                        <span>Marketing Coordinator</span>
                    </div>
                </div>
            </div>
            <div class="card" data-filter="marvin">
                <div class="d-flex">
                    <div class="image">
                        <img src="./assets/images/profile-2.jpg" alt="" />
                    </div>
                    <div>
                        <h4>Marvin McKinney</h4>
                        <span>Web Designer</span>
                    </div>
                </div>
            </div>
            <div class="card" data-filter="guy">
                <div class="d-flex">
                    <div class="image">
                        <img src="./assets/images/profile-3.jpg" alt="" />
                    </div>
                    <div>
                        <h4>Guy Hawkins</h4>
                        <span>President of Sales</span>
                    </div>
                </div>
            </div>
            <div class="card" data-filter="kathryn">
                <div class="d-flex">
                    <div class="image">
                        <img src="./assets/images/profile-4.jpg" alt="" />
                    </div>
                    <div>
                        <h4>Kathryn Murphy</h4>
                        <span>Marketing Coordinator</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h2>
                What our Customers <br />
                <span>are saying</span>
            </h2>
            <div class="test-wrapper">
                <div class="testimonial active" data-id="rosele">
                    <div class="d-flex">
                        <div>
                            <h4>Rosele Desoza</h4>
                            <span>Marketing Coordinator</span>
                        </div>

                        <div class="rating">
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                        </div>
                    </div>

                    <p>
                        “Having good restaurant reviews is crucial these days. It is not just making our decision to
                        pick one easier, it is also helping the restaurant be more successful. You can quickly copy
                        and
                        paste these good restaurant review examples, publish them on Facebook”
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=============== App ===============-->
<section class="section app">
    <div class="row container">
        <div class="col">
            <div class="circle">
                <div class="inner-circle"></div>
                <img src="./assets/images/mobile.png" alt="" />
            </div>
        </div>
        <div class="col">
            <h2>
                Never Feel Hungry! Download Our Mobile App Order Delicious Food
            </h2>
            <p>
                Online ordering has enabled many restaurants to manage their peak business hours very effectively.
            </p>
            <div class="d-flex">
                <img src="./assets/images/app-store.png" alt="" />
                <img src="./assets/images/google-play.png" alt="" />
            </div>
        </div>
    </div>
</section>

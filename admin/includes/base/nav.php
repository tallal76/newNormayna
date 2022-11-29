<header>
    <nav class="navbar dark-mode" role="navigation">
        <div class="row d-flex container">
            <div class="navbar__logo"><a href="index.php?page=accueil">
                <img
                src="../assets/images/favicon/android-icon-96x96.png" alt="YNM - Restaurant oriental - Oissel"></a>
                <h2>
                    <strong><i class="fa fa-tachometer" aria-hidden="true"></i>
                    Espace dashboard</strong>
                </h2>
            </div>
            <ul class="navbar navbar__links nav-list d-flex">
                <li class="navbar__link"><a href="index.php?page=acceuil">Accueil</a></li>
                <li class="navbar__link"><a href="index.php?page=manageAdmin">Admin</a></li>
                <li class="navbar__link"><a href="index.php?page=evenement">Evénements</a></li>
                <li class="navbar__link"><a href="index.php?page=categorie">Catégorie</a></li>
                <li class="navbar__link"><a href="index.php?page=produit">Produit</a></li>
                <li class="navbar__link"><a href="index.php?page=commande">Commande</a></li>
               
            <?php
            if (isset($_SESSION['username'])) {
            ?>
                
                    <span class="name"><i class="fa fa-user" aria-hidden="true"></i>  <?php echo $_SESSION["username"] ?></span>
                    <span class="panier">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i> 20
                    </span>
                <li class="navbar__link">
                    <a href="index.php?page=logout" class="btn signin">
                        <span><i class="fa fa-sign-out" aria-hidden="true"></i>Déconnexion
                    </a></span>
                </li>
            <?php
            } else {
            ?> 
                <a href="#" class="btn signin">Se connecter</a> <?php }?>
                <span class="close d-flex"><i class="bx bx-x"></i></span>
            </ul>
            <button class="burger" onclick="show()">
                <span class="bar"></span>
            </button>
            <div class=" d-flex">
              
            </div> 
            <!-- Hamburger -->
            <div class="hamburger d-flex">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>
</header>
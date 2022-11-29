<header>
<nav class="navbar dark-mode" role="navigation">
    <div class="row d-flex container">
        <div class="navbar__logo"><a href="index.php?page=accueil">
            <img
            src="./assets/images/favicon/android-icon-192x192.png" alt="YNM - Restaurant oriental - Oissel"></a>
            <h4><strong><i class="fa-solid fa-phone"></i> 06 13 40 45 87</strong></h4>
        </div>
        <ul class="navbar navbar__links nav-list d-flex">
            <li class="navbar__link"><a href="index.php?page=accueil">Accueil</a></li>
            <li class="navbar__link"><a href="index.php?page=carte">La carte</a></li>
            <li class="navbar__link"><a href="index.php?page=evenement">Listes des Evenements</a></li>
            <li class="navbar__link"><a href="index.php?page=apropos">À propos</a></li>
            
        <?php
        if (isset($_SESSION['username'])) {
            ?>
                <span class="cart-ico username">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span class="panier">0</span>
                </span>
                <span class="username">
                    <i class="fa fa-user monCompte" aria-hidden="true"></i>
                    <?php echo $_SESSION["username"] ?>
                </span>
                <li class="navbar__link">
                    <a href="index.php?page=logout" class="btn signin">
                        <span><i class="fa fa-sign-out" aria-hidden="true"></i>
                        Déconnexion
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
           
            <!-- Hamburger -->
            <div class="hamburger d-flex">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>
</header>
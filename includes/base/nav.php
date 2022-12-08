<header>
<nav class="navbar dark-mode" role="navigation">
    <div class="row d-flex container">
        <div class="navbar__logo"><a href="index.php?page=accueil">
            <img
            src="./assets/images/logoN/favicon-logoBlanc/android-icon-192x192.png" alt="Normayna - traiteur"></a>
            <h4><strong><i class="fa-solid fa-phone"></i> 06 13 40 45 87</strong></h4>
        </div>
        <ul class="navbar navbar__links nav-list d-flex">
            <li class="navbar__link"><a href="index.php?page=accueil">Accueil</a></li>
            <li class="navbar__link"><a href="index.php?page=carte">La carte</a></li>
            <li class="navbar__link"><a href="index.php?page=evenement">Listes des Evenements</a></li>
          <!--  <li class="navbar__link"><a href="index.php?page=apropos">À propos</a></li>--> 
            
        <?php
        if (isset($_SESSION['username']))
        {
        ?>
            <span class="name"><i class="fa fa-user" aria-hidden="true"></i>  
            <?php echo $_SESSION["username"] ?></span>
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
           
            <!-- Hamburger -->
            <div class="hamburger d-flex">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>
</header>
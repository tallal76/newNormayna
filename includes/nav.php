<?php
session_start();
?>
<header>
<nav class="navbar dark-mode" role="navigation">
    <div class="row d-flex container">
        <div class="navbar__logo"><a href="index.php?page=accueil">
            <img
            src="./assets/images/favicon/android-icon-192x192.png" alt="YNM - Restaurant oriental - Oissel"></a>
            <h2><strong><i class="fa-solid fa-phone"></i> 06 13 40 45 87</strong></h2>
        </div>
        <ul class="navbar navbar__links nav-list d-flex">
            <?php
            if (isset($_SESSION['login'])) {
            ?>
                <li class="navbar__link four"><a href="index.php?page=ajoutEvenement">Ajouter un event</a></li>
                <li class="navbar__link four"><a href="index.php?page=maj">MAJ</a></li>
                <li class="navbar__link four"><a href="index.php?page=ajoutProduit">Ajouter un produit</a></li>
                <li class="navbar__link four"><a href="index.php?page=categorie">Ajouter une categorie</a></li>
                <li class="navbar__link four"><a href="index.php?page=majProduit">mis a jour produit</a></li>
                <li class="navbar__link four"><a href="index.php?page=logout">logout</a></li>
            <?php 
            } else {
            ?>
                <li class="navbar__link first"><a href="index.php?page=accueil">Accueil</a></li>
                <li class="navbar__link second"><a href="index.php?page=carte">La carte</a></li>
                <li class="navbar__link third"><a href="index.php?page=evenement">Listes des Evenements</a></li>
                <li class="navbar__link four"><a href="index.php?page=apropos">À propos</a></li>
        
                <span class="close d-flex"><i class="bx bx-x"></i></span>
        </ul>
        <button class="burger" onclick="show()">
            <span class="bar"></span>
        </button>
        <div class="col d-flex">
            <!--  <form>
        <input type="search" placeholder="Search your item" />
          <button class="d-flex"><i class="bx bx-search"></i></button>
      </form> -->
      <div class="cart-icon d-flex">
        <i class="bx bx-shopping-bag"></i>
          <span>0</span>
      </div>
            <a href="#" class="btn signin">Se connecter</a>
        </div> 
        <?php } ?>
        <!-- Hamburger -->
        <div class="hamburger d-flex">
            <i class="bx bx-menu"></i>
        </div>
    </div>
</nav>
</header>
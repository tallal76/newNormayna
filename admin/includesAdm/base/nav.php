<?php
session_start();
?>
<header>
    <nav class="navbar dark-mode" role="navigation">
        <div class="row d-flex container">
            <div class="navbar__logo"><a href="index.php?page=accueil">
                <img
                src="../assets/images/favicon/android-icon-96x96.png" alt="YNM - Restaurant oriental - Oissel"></a>
                <h2><strong><i class="fa fa-tachometer" aria-hidden="true"></i> Espace dashboard</strong></h2>
            </div>
            <ul class="navbar navbar__links nav-list d-flex">
            <!--
                <li class="navbar__link"><a href="index.php?page=ajoutEvenement">Ajouter un event</a></li>
                <li class="navbar__link"><a href="index.php?page=maj">MAJ</a></li>
                <li class="navbar__link"><a href="index.php?page=ajoutProduit">Ajouter un produit</a></li>
                <li class="navbar__link"><a href="index.php?page=categorie">Ajouter une categorie</a></li>
                <li class="navbar__link"><a href="index.php?page=majProduit">mis a jour produit</a></li>
            -->
                <li class="navbar__link"><a href="index.php?page=acceuil">Accueil</a></li>
                <li class="navbar__link"><a href="index.php?page=admin">Admin</a></li>
                <li class="navbar__link"><a href="index.php?page=evenement">Evénements</a></li>
                <li class="navbar__link"><a href="index.php?page=categorie">Catégorie</a></li>
                <li class="navbar__link"><a href="index.php?page=produit">Produit</a></li>
                <li class="navbar__link"><a href="index.php?page=commande">Commande</a></li>
                <a href="index.php?page=login" class="btn signin">Se connecter</a>
            <?php
            if (isset($_SESSION['login'])) {
            ?>
                <li class="navbar__link"><a href="index.php?page=logout" class="btn signin">Se déconnecter</a></li>
            <?php } ?>
                <span class="close d-flex"><i class="bx bx-x"></i></span>
            </ul>
            <button class="burger" onclick="show()">
                <span class="bar"></span>
            </button>
            <div class="col d-flex">
                <form>
                    <input type="search" placeholder="Search your item" />
                    <button class="d-flex"><i class="bx bx-search"></i></button>
                </form>
                <div class="cart-icon d-flex">
                    <i class="bx bx-shopping-bag"></i>
                    <span>0</span>
                </div>
            </div> 
            <!-- Hamburger -->
            <div class="hamburger d-flex">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>
</header>
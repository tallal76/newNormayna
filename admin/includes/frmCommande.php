    <!-- fOOD sEARCH Section Starts Here -->
    <section class="Commande-produit">
        <div class="container">
            <h2 class="text-center">Remplissez ce formulaire pour confirmer votre commande</h2>
            <form action="#" class="commande">
                <fieldset>
                    <legend>Produits selectionnés</legend>

                    <div class="food-menu-img">
                        <img src="../<?php echo $value['url_produit']; ?>" alt="<?php echo $value['titre_produit']; ?>" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $value['titre_produit']; ?></h3>
                        <p class="prix"><?php echo $value['prix_produit']; ?></p>

                        <div class="order-label">Quantité</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        <div class="number-input">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                            <input class="quantity input-responsive" min="0" name="quantity" value="1" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Détails de la commande</legend>
                    <div class="order-label">Nom complet</div>
                    <input type="text" name="full-name" placeholder="<?php echo $_SESSION["nom"] . $_SESSION["prenom"]  ?>" class="input-responsive" required>

                    <div class="order-label">Téléphone</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@vijaythapa.com" class="input-responsive" required>

                    <div class="order-label">Adresse</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   
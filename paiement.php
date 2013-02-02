<?php include('header.php'); ?>
<div id="corps">
    <div id="panier_resume" class="full">
        <ol>
            <li>
                <img src="img/panier.png" alt="Panier" title="Panier"/>
                <span>Résumé du panier et Prix total des achats</span>
            </li><li class="active">
                <img src="img/adresse.png" alt="Adresse" title="Adresse"/>
                <span>Adresse de facturation et de livraison</span>
            </li><li>
                <img src="img/verification.png" alt="Commande" title="Commande"/>
                <span>Confirmation de la commande</span>
            </li><li>
                <img src="img/paiement.png" alt="CyberMUT" title="CyberMut"/>
                <span>Paiement  avec CM-CIC p@iement</span>
            </li>
        </ol>
        
        <div>
          <h3>Livraison gratuite pour les commandes de plus de 60,00 €</h3>
          <p>Ajoutez des produits d'une valeur de <em>51,46 €</em> afin de bénéficier de la livraison gratuite via <em>Envoi du colis (par coliposte ou taxipost)</em>.</p>
        </div>
        <hr/>
        <form id="commandeForm" method="post" action="paiement.php">
            <div id="livraison">
                <div id="choixAdresse">
                    <label class="active"><input type="radio" name="adresse" checked="checked" /> Envoyer à mon adresse</label>
                    <label><input type="radio" name="adresse" /> Envoyer à une nouvelle adresse</label>
                </div><div id="infoAdresse">
                Rue de la Reine 1<br/>
                7700 Mouscron<br/>
                Belgique
                </div>
            </div>
            <a href="confirmation.php" class="lien">&#9668;&nbsp;Retour</a>                    
            <button type="submit" class="lien" name="SaveAndDoOrder" value="Règlement">
                Valider le paiement
            </button>
        </form>
        <hr />
        <div id="note_panier">
            <h3>Important</h3>
            <h4>Commande</h4>
            <p>En cliquant sur le bouton 'finaliser la commande' à la fin du processus de commande, vous placez un ordre d'achat définitif pour tous les articles placés dans votre panier d"achat, et vous reconnaissez avoir lu et accepté nos conditions générales de vente.</p>
            <p>Vous recevrez la confirmation par email juste après la fin de la commande. </p>
            <h4>Droits de renonciation</h4>
            <p>Conformément à la loi du 14 juillet 1991, le consommateur a le droit de notifier au vendeur qu'il renonce à l'achat, sans pénalités et sans indication de motif, dans les 7 jours ouvrables à dater du lendemain du jour de la livraison du produit.</p>
        </div>
    </div>
</div><!--- Fin du corps -->
<?php include('footer.php'); ?>
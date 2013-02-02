<?php include('header.php'); ?>
<div id="corps">
    <div id="panier_resume" class="full">
        <ol>
            <li class="active">
                <img src="img/panier.png" alt="Panier" title="Panier"/>
                <span>Résumé du panier et Prix total des achats</span>
            </li><li>
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
        <form id="commandeForm" method="post" action="livraison.php">
            <a href="#" class="lien">&#9668;&nbsp;Continuer les achats</a>
            <button type="submit" class="lien" name="SaveAndDoOrder" value="Règlement">
                Étape suivante&nbsp;&#9658;
            </button>
            <table id="panierTable">
                <thead>
                    <tr class="AlternateRow">
                        <th>Qté</th>
                        <th title="Nom de l'article">Nom</th>
                        <th title="Prix total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input name="Quantity" value="1"
                                 size="4" title="Champ de saisie de la quantité commandée"
                                 type="number" min="1"/>
                        </td>
                        <td>
                            <img src="" alt="" />
                            <a href="?ObjectPath=/Shops/62035976/Products/%22OC%20-%20225%22">
                                Gel Après Soleil
                            </a>
                        </td>
                        <td class="prix">8,99 €</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="LineItemID" value="17054102" />
                            <input name="Quantity" value="1"
                                 size="4" title="Champ de saisie de la quantité commandée"
                                 type="number" min="1" />
                        </td>
                        <td>
                            <a href="?ObjectPath=/Shops/62035976/Products/%22OC%20-%20225%22">
                                Crème Solaire
                            </a>
                        </td>
                        <td class="prix">8,99 €</td>
                    </tr>
                    <tr style="border: 1px #4D7222 solid">
                        <td colspan="2">Sous-total</td>
                        <td class="prix">17,98 €</td>
                    </tr>
                    <tr id="coupon">
                        <td colspan="3">
                            Code de coupon<br/>
                            <input name="CouponCode" id="CouponCode" />
                            <span>
                                <input type="submit" name="RedeemCoupon"   value="Échanger le coupon" />
                            </span>
                        </td>
                    </tr>
                    <tr style="border: 1px #4D7222 solid">
                        <td colspan="2" >Remise sur le panier 5%</td>
                        <td class="prix">-0,89 €</td>
                    </tr>
                <tr>
                    <td colspan="2">Montant total</td>
                    <td class="prix">17,09 €</td>
                </tr>
            </table>
            <div class="commentaire">
                <h4>Commentaires sur la commande et la livraison:</h4>
                <textarea id="CustomerComment" name="CustomerComment" rows="7"></textarea>
            </div>
            <a href="#" class="lien">&#9668;&nbsp;Continuer les achats</a>                    
            <button type="submit" class="lien" name="SaveAndDoOrder" value="Règlement">
                Étape suivante&nbsp;&#9658;
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
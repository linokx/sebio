<?php include('header.php'); ?>
<div id="slider">
    <div id="promo">
        <img src="img/promo.png"/>
    </div><div id="liquidation">
        <img src="img/promo.png"/>
    </div>
</div>
<div id="corps">
    <div id="sidebar">
    <form id="connexion">
        <fieldset>
            <label>Login</label>
            <input /><br/>
            <label>Mot de passe</label>
            <input />
            <input type="submit" value="Connexion">
        </fieldset>
    </form>
        <b>Bon plans</b>
        <ul>
            <li>Nouveauté</li>
            <li>Promotion</li>
            <li>Liquidation</li>
        </ul>
        <img src="img/holle.jpg" />
<p>Déodorant en pierre d'Alun (Laboratoire Gravier) - Sticker - PROMO - 25% (5,93 vs 7,9) (8,7 vs 11,6)
5,93 € * </p>
</div><section id="resultat">
    <div>
        <form id="recherche_avance">
        <h3>Recherche</h3>
            <fieldset>
                <label for="recherche">Terme de recherche</label><input id="recherche" name="recherche" /><br/>
                <label for="categorie">Catégorie</label>
                <select>
                    <option>(Toute)</option>
                    <option>Bon plans</option>
                    <option>Vêtements</option>
                    <option>Grossesse &amp; Naissance</option>
                </select><br/>
                <label for="prix_min">Étendu du prix</label><input id="prix_min"/>€ - <input id="prix_max"/>€<br/>
                <input id="nouveau" type="checkbox" /> <label for="nouveau">Nouveaux produits uniquement</label>
            </fieldset>
            <input type="submit" class="degrade" value="Appliquer les modifications">
        </form>
        <label>Nombre d'articles affichés</label>
        <select id="nombre">
            <option>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>
            <option>50</option>
        </select>
        <div id="tri">
            <a href="#" class="active">Pertinance</a><a href="#">Nom</a><a href="#">Prix - > +</a><a href="#">Prix + > -</a>
        </div>
    </div>
    <h3 style="margin-top:40px">Les résultats</h3>
    <article class="sections">
        <section>
            <article class="articles">
                <img src="img/holle.jpg" />
                <div>
                    <h4>Stevia</h4>
                    Toute une gamme de produits de soin corporel: shampooings, conditionners, gels douche, savons main et une gamme pour enfant&nbsp;!
                    <span class="prix">26<span class="monnaie">€</span></span>
                    <a href="#" class="ajouter">Ajouter au panier</a>
                </div>
            </article><article class="articles">
                <img src="img/holle.jpg" />
                <div>
                    <h4>Holle</h4>
                    Toute une gamme de produits de soin corporel: shampooings, conditionners, gels douche, savons main et une gamme pour enfant&nbsp;!
                    <span class="prix">26<span class="monnaie">€</span></span>
                    <a href="#" class="ajouter">Ajouter au panier</a>
                </div>
            </article>
        </section><section>
            <article class="articles">
                <img src="img/holle.jpg" />
                <div>
                    <h4>Stevia</h4>
                    Toute une gamme de produits de soin corporel: shampooings, conditionners, gels douche, savons main et une gamme pour enfant&nbsp;!
                    <span class="prix">26<span class="monnaie">€</span></span>
                    <a href="#" class="ajouter">Ajouter au panier</a>
                </div>
            </article><article class="articles">
                <img src="img/holle.jpg" />
                <div>
                    <h4>Holle</h4>
                    Toute une gamme de produits de soin corporel: shampooings, conditionners, gels douche, savons main et une gamme pour enfant&nbsp;!
                    <span class="prix">26<span class="monnaie">€</span></span>
                    <a href="#" class="ajouter">Ajouter au panier</a>
                </div>
            </article>
        </section><section>
            <article class="articles">
                <img src="img/holle.jpg" />
                <div>
                    <h4>Stevia</h4>
                    Toute une gamme de produits de soin corporel: shampooings, conditionners, gels douche, savons main et une gamme pour enfant&nbsp;!
                    <span class="prix">26<span class="monnaie">€</span></span>
                    <a href="#" class="ajouter">Ajouter au panier</a>
                </div>
            </article><article class="articles">
                <img src="img/holle.jpg" />
                <div>
                    <h4>Holle</h4>
                    Quelques nouveaux produits de la célèbre marque allemande de petits pots pour bébé (légumes, fruits, menus&hellip;).
                    <span class="prix">26<span class="monnaie">€</span></span>
                    <a href="#" class="ajouter">Ajouter au panier</a>
                </div>
            </article>
        </section><section>
            <article class="articles">
                <img src="img/holle.jpg" />
                <div>
                    <h4>Stevia</h4>
                    Toute une gamme de produits de soin corporel: shampooings, conditionners, gels douche, savons main et une gamme pour enfant&nbsp;!
                    <span class="prix">26<span class="monnaie">€</span></span>
                    <a href="#" class="ajouter">Ajouter au panier</a>
                </div>
            </article><article class="articles">
                <img src="img/holle.jpg" />
                <div>
                    <h4>Holle</h4>
                    Toute une gamme de produits de soin corporel: shampooings, conditionners, gels douche, savons main et une gamme pour enfant&nbsp;!
                    <span class="prix">26<span class="monnaie">€</span></span>
                    <a href="#" class="ajouter">Ajouter au panier</a>
                </div>
            </article>
        </section>
    </article>
</section>
<?php include('footer.php'); ?>

<?php include('header.php'); ?>
<div id="slider">
    <div id="promo">
        <img src="img/promo.png" alt="Nos Promotions" width="460px" height="184px"/>
    </div><div id="liquidation">
        <img src="img/promo.png" alt="Nos Liquidations" width="460px" height="184px"/>
    </div>
</div>
<div id="corps">
    <div id="sidebar">
    <form id="connexion">
        <fieldset>
            <label>Login</label>
            <input type="text" /><br/>
            <label>Mot de passe</label>
            <input type="password" />
            <input type="submit" value="Connexion">
        </fieldset>
    </form>
        <b>Bon plans</b>
        <ul>
            <li>Nouveauté</li>
            <li>Promotion</li>
            <li>Liquidation</li>
        </ul>
</div><section>
    <h3>Les nouveautés</h3>
    <article class="sections">
        <section>
            <article class="articles important" itemscope itemtype="http://schema.org/Product">
                <a href="article.php"><img itemprop="image" src="img/top.png" alt="Produit Stevia" width="340px" height="136px" /></a>
                <div><h4 itemprop="name"><a href="article.php">Stevia</a></h4>
                <span itemprop="description">Pour sucrer de manière naturelle et avec 0 kcal&nbsp;!</span>
                
                </div><a href="panier.php" class="panier">
                    <span itemprop="price" class="prix">26<span class="monnaie">€</span></span>
                    <span class="ajouter">Ajouter au panier</span>
                </a>
            </article>
        </section><section>
            <article class="articles simple" itemscope itemtype="http://schema.org/Product">
                <div>
                <a href="article.php"><img itemprop="image" src="img/holle.jpg" alt="Produit Holle" /></a>
                <h4 itemprop="name"><a href="article.php">Holle</a></h4>
                <span itemprop="description">Quelques nouveaux produits de la célèbre marque allemande de petits pots pour bébé (légumes, fruits, menus&hellip;).</span>
                
            </div><a href="panier.php" class="panier">
                    <span itemprop="price" class="prix">26<span class="monnaie">€</span></span>
                    <span class="ajouter">Ajouter au panier</span>
                </a>
            </article><article class="articles simple" itemscope itemtype="http://schema.org/Product">
                <div>
                <a href="article.php"><img itemprop="image" src="img/holle.jpg" alt="Produit Holle" /></a>
                    <h4 itemprop="name"><a href="article.php">Attitude</a></h4>
                    <span itemprop="description">Toute une gamme de produits de soin corporel: shampooings, conditionners, gels douche, savons main et une gamme&hellip;</span>
                
                </div><a href="panier.php" class="panier">
                    <span itemprop="price" class="prix">50<span class="monnaie">€</span></span>
                    <span class="ajouter">Ajouter au panier</span>
                </a>
            </article>
        </section>
    </article>
    <h3>Les plus populaires</h3>
    <article class="sections">
        <section>
            <article class="articles important" itemscope itemtype="http://schema.org/Product">
                <a href="article.php"><img itemprop="image" src="img/top.png" alt="Produit Attitude" width="340px" height="136px" /></a>
                <div>
                    <h4 itemprop="name"><a href="article.php">Attitude</a></h4>
                    <span itemprop="description">Nouveau: toute une gamme de produits de soin corporel&nbsp;: shampooings,&hellip;</span>
                <a href="panier.php" class="panier">
                    <span itemprop="price" class="prix">12<span class="monnaie">€</span></span>
                    <span class="ajouter">Ajouter au panier</span>
                </a>
                </div>
            </article>
        </section><section>
            <article class="articles simple" itemscope itemtype="http://schema.org/Product">
                <div>
                <a href="article.php"><img itemprop="image" src="img/holle.jpg" alt="Produit Holle" /></a>
                    <h4 itemprop="name"><a href="article.php">Stevia</a></h4>
                    <span itemprop="description">Pour sucrer de manière naturelle et avec 0 kcal !<br/>Disponible en 3 formats.</span>
                
                </div><a href="panier.php" class="panier">
                    <span itemprop="price" class="prix">28<span class="monnaie">€</span></span>
                    <span class="ajouter">Ajouter au panier</span>
                </a>
            </article><article class="articles simple" itemscope itemtype="http://schema.org/Product">
                <div>
                <a href="article.php"><img itemprop="image" src="img/holle.jpg" alt="Produit Holle" /></a>
                    <h4 itemprop="name"><a href="article.php">Holle</a></h4>
                    <span itemprop="description">Quelques nouveaux produits de la célèbre marque allemande de petits pots pour bébé (légumes, fruits, menus&hellip;).</span>
                
                </div><a href="panier.php" class="panier">
                    <span itemprop="price" class="prix">26<span class="monnaie">€</span></span>
                    <span class="ajouter">Ajouter au panier</span>
                </a>
            </article>
        </section>
    </article>
</section>
<?php include('footer.php'); ?>
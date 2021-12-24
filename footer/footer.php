<footer>
    <?php if (isset($_SESSION['id_droit']) && $_SESSION['id_droit'] == '1337') { ?>
        <div class="footer">
            <h1 class=" Gtitree">BLOG CUISINELLA</h1>
            <div class="foot">
                <div>
                    <a class="aicon" href="index.php">Accueil</a>
                </div>
                <div>
                    <a class="aicon" href="index.php" data-toggle="dropdown">Liste utilisateurs</a>
                </div>
                <div>
                    <a class="aicon" href="#">Lien github</a>
                </div>
                <div>
                    <form action="" method="post">
                        <input type="submit" value="deconnexion" name="deconnexion">
                    </form>
                </div>
            </div>
            <div class="foot copyright">
                <div>
                    <a href="#"><img src="https://zupimages.net/up/21/49/iv9s.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/21/49/qi44.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/21/49/q40b.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/20/27/hnf2.png" alt="" width="40" /></a>
                </div>
                <div>
                    <p>Copyright©2021 Parede. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    <?php } elseif (isset($_SESSION['id_droit']) && isset($_SESSION['id_droit']) == '1') { ?>
        <div class="footer">
            <h1 class=" Gtitree">BLOG CUISINELLA</h1>
            <div class="foot">
                <div>
                    <a class="aicon" href="index.php">Accueil</a>
                </div>
                <div>
                    <a class="aicon" href="#" data-toggle="dropdown">Articles</a>
                </div>
                <div>
                    <a class="aicon" href="article-commentaire.php">Voir un artcile</a>
                </div>
                <div>
                    <a class="aicon" href="profil.php">Profil</a>
                </div>
                <div>
                    <form action="" method="post">
                        <input type="submit" value="deconnexion" name="deconnexion">
                    </form>
                </div>
                <div>
                    <a class="aicon" href="contact.php">Contact</a>
                </div>
            </div>
            <div class="foot copyright">
                <div>
                    <a href="#"><img src="https://zupimages.net/up/21/49/iv9s.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/21/49/qi44.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/21/49/q40b.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/20/27/hnf2.png" alt="" width="40" /></a>
                </div>
                <div>
                    <p>Copyright©2021 Parede. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    <?php } elseif (isset($_SESSION['id_droit']) && isset($_SESSION['id_droit']) == '42') { ?>
        <div class="footer">
            <h1 class=" Gtitree">BLOG CUISINELLA</h1>
            <div class="foot">
                <div>
                    <a class="aicon" href="index.php">Accueil</a>
                </div>
                <div>
                    <a class="aicon" href="#" data-toggle="dropdown">Articles</a>
                </div>
                <div>
                    <a class="aicon" href="#.php">Ecrire un article</a>
                </div>
                <div>
                    <a class="aicon" href="article-commentaire.php">Voir un article</a>
                </div>
                <div>
                    <a class="aicon" href="profil.php">Profil</a>
                </div>
                <div>
                    <form action="" method="post">
                        <input type="submit" value="deconnexion" name="deconnexion">
                    </form>
                </div>
                <div>
                    <a class="aicon" href="contact.php">Contact</a>
                </div>
            </div>
            <div class="foot copyright">
                <div>
                    <a href="#"><img src="https://zupimages.net/up/21/49/iv9s.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/21/49/qi44.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/21/49/q40b.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/20/27/hnf2.png" alt="" width="40" /></a>
                </div>
                <div>
                    <p>Copyright©2021 Parede. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="footer">
            <h1 class=" Gtitree">BLOG CUISINELLA</h1>
            <div class="foot">
                <div>
                    <a class="aicon" href="index.php">Accueil</a>
                </div>
                <div>
                    <a class="aicon" href="categories.php">Categories</a>
                </div>
                <div>
                    <a class="aicon" href="connexion.php">Connexion</a>
                </div>
                <div>
                    <a class="aicon" href="inscription.php">Inscription</a>
                </div>
                <div>
                    <a class="aicon" href="contact.php">Contact</a>
                </div>
            </div>
            <div class="foot copyright">
                <div>
                    <a href="#"><img src="https://zupimages.net/up/21/49/iv9s.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/21/49/qi44.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/21/49/q40b.png" alt="" width="40" /></a>
                    <a href="#"><img src="https://zupimages.net/up/20/27/hnf2.png" alt="" width="40" /></a>
                </div>
                <div>
                    <p>Copyright©2021 Parede. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    <?php } ?>
</footer>
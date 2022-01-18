<?php
if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('location:connexion.php');
}
?>

<header>
    <?php if (isset($_SESSION['id_droit']) && $_SESSION['id_droit'] == '1337') { ?>
        <div>
            <h1 class=" Gtitre">BLOG CUISINELLA</h1>
        </div>
        <nav>
            <div class="header">
                <ul>
                    <a class="aicon" href="../index.php">Accueil</a>
                </ul>
                <ul>
                    <a class="aicon" href="admin.php">Liste utilisateurs</a>
                </ul>
                <ul>
                    <a class="aicon" href="https://github.com/mohamed-zidi/blog" target="_blank">Lien github</a>
                </ul>
            </div>
            <div>
                <ul>
                    <input type="search" placeholder="search" aria-label="search" required>
                    <button class="button" type="submit" value="Rechercher">Rechercher</button>
                </ul>
            </div>
            <div class="header conin">
                <ul>
                    <a class="aicon" href="articles.php">Article</a>
                </ul>
                <ul>
                    <a class="aicon" href="ecrire-article.php">Ecrire un article</a>
                </ul>
                <ul>
                    <form action="" method="post">
                    <button class="buttondeco" type="submit" value="deconnexion" name="deconnexion">Deconnexion</button>
                    </form>
                </ul>
            </div>
        </nav>
    <?php } elseif (isset($_SESSION['id_droit']) && isset($_SESSION['id_droit']) == '1') { ?>
        <div>
            <h1 class=" Gtitre">BLOG CUISINELLA</h1>
        </div>
        <nav>
            <div class="header">
                <ul>
                    <a class="aicon" href="../index.php">Accueil</a>
                </ul>
                <ul>
                    <a class="aicon" href="articles.php">Articles</a>
                </ul>
                <ul>
                    <a class="aicon" href="article-commentaire.php">Voir un article</a>
                </ul>
            </div>
            <div>
                <ul>
                    <input type="search" placeholder="search" aria-label="search" required>
                    <button class="button" type="submit" value="Rechercher">Rechercher</button>
                </ul>
            </div>
            <div class="header conin">
                <ul>
                    <a class="aicon" href="profil.php">Profil</a>
                </ul>
                <ul>
                    <form action="" method="post">
                    <button class="buttondeco" type="submit" value="deconnexion" name="deconnexion">Deconnexion</button>
                    </form>
                </ul>
            </div>
        </nav>
    <?php } elseif (isset($_SESSION['id_droit']) && isset($_SESSION['id_droit']) == '42') { ?>
        <div>
            <h1 class=" Gtitre">BLOG CUISINELLA</h1>
        </div>
        <nav>
            <div class="header">
                <ul>
                    <a class="aicon" href="../index.php">Accueil</a>
                </ul>
                <ul>
                    <a class="aicon" href="articles.php">Articles</a>
                </ul>
                <ul>
                    <a class="aicon" href="ecrire-article.php">Ecrire un article</a>
                </ul>
                <ul>
                    <a class="aicon" href="article-commentaire.php">Voir un article</a>
                </ul>
            </div>
            <div>
                <ul>
                    <input type="search" placeholder="search" aria-label="search" required>
                    <button class="button" type="submit" value="Rechercher">Rechercher</button>
                </ul>
            </div>
            <div class="header conin">
                <ul>
                    <a class="aicon" href="profil.php">Profil</a>
                </ul>
                <ul>
                    <form action="" method="post">
                        <input type="submit" value="deconnexion" name="deconnexion">
                    </form>
                </ul>
            </div>
        </nav>
    <?php } else { ?>
        <div>
            <h1 class=" Gtitre">BLOG CUISINELLA</h1>
        </div>
        <nav>
            <div class="header">
                <ul>
                    <a class="aicon" href="../index.php">Accueil</a>
                </ul>
                
            </div>
            <div>
                <ul>
                    <input type="search" placeholder="search" aria-label="search" required>
                    <button class="button" type="submit" value="Rechercher">Rechercher</button>
                </ul>
            </div>
            <div class="header conin">
                <ul>
                    <a class="aicon" href="connexion.php">Connexion</a>
                </ul>
                <ul>
                    <a class="aicon" href="inscription.php">Inscription</a>
                </ul>
            </div>
        </nav>
        <div>
            <!-- <img class="baniere" src="https://zupimages.net/up/21/50/fhxt.png" alt="" /> -->
        </div>
    <?php } ?>
</header>

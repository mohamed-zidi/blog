<?php

include '../traitement_php/modifier-article_traitement.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blog.css" />
    <title>Document</title>
</head>

<body>
    <main id="formcenter">
        <div align="center">
            <div>
                <form class="form" method="POST">
                    <h1 class="h_1">Modifier l'article</h1>
                    <table class="form-inpute">
                        <tr><?php
                            session_start();
                            include '../traitement_php/inscription_traitement.php';
                            ?>

                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <link rel="stylesheet" href="../css/blog.css">
                                <title>Document</title>
                            </head>

                            <body>

                                <main id="formcenter">
                                    <form class="form" action="" method="post">
                                        <h1 class="h_1">Créer votre compte <br> Cuisinella</h1>
                                        <div>
                                            <label for="login">Ajoutez votre login</label>
                                            <input type="text" name="login" id="login" required>
                                        </div>
                                        <div>
                                            <label for="mail"> Ajoutez votre email</label>
                                            <input type="email" name="mail" id="mail" required>
                                        </div>
                                        <div>
                                            <label for="mdp">Entrez votre mot de passe:</label>
                                            <input type="password" name="mdp" id="mdp" required>
                                        </div>
                                        <div>
                                            <label for="mdp2">Confirmez votre mot de passe:</label>
                                            <input type="password" name="mdp2" id="mdp2" required>
                                        </div>
                                        <div align="center">
                                            <input type="submit" value="S'inscrire" name="valider">
                                        </div>
                                    </form>


                                    <?php if (isset($_SESSION['affichage'])) { ?>

                                        <p>
                                            <?php
                                            echo $_SESSION['affichage'];
                                            unset($_SESSION['affichage']);
                                            ?>
                                        </p>
                                    <?php } ?>
                                </main>
                                <p class="copy">Copyright©2021 Cuisinella. Tous droits réservés.</p>
                            </body>

                            </html>
                            <td>
                                <label for="newarticle">Ecrire un article:</label>
                                <input type="textarea" name="newarticle" id="newarticle" value="<?php foreach ($datta as $newarticle) {
                                                                                                    echo $newarticle['article'];
                                                                                                } ?> " style="margin: 0px; width: 405px; height: 68px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="categorie">Choisir la catégorie correspondante:</label>
                                <select name="categorie" id="categorie">
                                    <?php foreach ($data as $categorie) { ?>

                                        <option value="<?php echo $categorie['nom']; ?>"> <?php echo $categorie['nom']; ?> </option>

                                    <?php
                                    } ?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" value="modifier" name="modifier">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
    </main>

    <p class="copy">Copyright©2021 Cuisinella. Tous droits réservés.</p>

</body>

</html>
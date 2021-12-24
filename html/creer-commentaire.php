<?php

include '../traitement_php/creer-commentaire_traitement.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title> Page inscription </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/blog.css" />
</head>

<body id="bodyform">
    <main>
        <div align="center">
            <form method="POST">
                <table class="form-input">
                    <tr>
                        <td>
                            <h1 class="h_1">Créer de nouveaux articles</h1>
                            <label for="article">Choisir la catégorie correspondante:</label>
                            <select name="article" id="article">
                                <?php foreach ($data as $article) { ?>

                                    <option value="<?php echo $article['id']; ?>"> <?php echo $article['id']; ?> </option>

                                <?php
                                } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="newcomment">Ajouter un commentaire:</label>
                            <input type="texterea" name="newcomment" id="newcomment">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <button class="button" type="submit" name="creer">Créer</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <footer class="footeur">
        <div class="footer footter">
            <div>
                <p class="foot copyrighte copy">Copyright©2021 Cuisinella. Tous droits réservés.</p>
            </div>
    </footer>
</body>

</html>
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

<body>
    <main id="formcenter">
        <div align="center">
            <form method="POST">
                <table class="form-input">
                    <tr>
                        <td>
                            <h1 class="h_1">Ajouter un commentaire</h1>
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
                            <input type="submit" value="Creer" name="creer">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>

        <p class="copy">Copyright©2021 Cuisinella. Tous droits réservés.</p>

</body>

</html>
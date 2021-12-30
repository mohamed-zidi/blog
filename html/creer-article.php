<?php

include '../traitement_php/creer-article_traitement.php';

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
                            <h1 class="h_1">Créer de nouveaux articles</h1>
                            <label for="categorie">Choisir la catégorie correspondante:</label>
                            <select name="categorie" id="categorie">
                                <?php foreach ($data as $categorie) { ?>

                                    <option value="<?php echo $categorie['id']; ?>"> <?php echo $categorie['nom']; ?> </option>

                                <?php
                                } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="newarticle">Ecrire un article:</label>
                        <input type="texterea" name="newarticle" id="newarticle">
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
</body>

</html>
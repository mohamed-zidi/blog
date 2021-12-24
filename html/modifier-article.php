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
    <main>
        <div align="center">
            <div>
                <h1 class="h1-">Vous etes sur le point de modifier le droit <? echo "$userid"; ?></h1>
                <form class="form" method="POST">
                    <table class="form-inpute">
                        <tr>
                            <td>
                                <label for="newarticle">Ecrire un article:</label>
                                <input type="textarea" name="newarticle" id="newarticle" value="<?php foreach ($datta as $newarticle) {
                                                                                                echo $newarticle['article'];
                                                                                            } ?> " style="margin: 0px; width: 405px; height: 68px;" >
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
                                <button class="button" type="submit" name="modifier">Modifier</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
    </main>
</body>

</html>
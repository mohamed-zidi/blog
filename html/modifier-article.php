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
                        <tr>
                            <td>
                                <label for="newarticle">Ecrire un article:</label>
                                <input type="textarea" name="newarticle" id="newarticle" value="<?php foreach ($datta as $newarticle) {
                                                                                                    echo $newarticle['article'];
                                                                                                } ?> " style="margin: 0px; width: 405px; height: 68px;">
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
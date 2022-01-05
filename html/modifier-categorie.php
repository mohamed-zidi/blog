<?php

include '../traitement_php/modifier-categorie_traitement.php';

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
                <form class="form" class="form" method="POST">
                    <h1 class="h_1">Modifier la categorie </h1>
                    <table class="form-inpute">
                        <tr>
                        <tr>
                            <td>
                                <label>Renommer categorie</label>
                                <input type="text" name="categorie" id="categorie" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Confirmer votre action </label>
                                <input type="text" name="categorie2" id="categorie2" required />
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" value="modifier" name="modifier">
                            </td>
                        </tr>
                    </table>
                    <p><a href='../index.php'>Retourner à l'acceuil</a></p>
                </form>
            </div>
    </main>

    <p class="copy">Copyright©2021 Cuisinella. Tous droits réservés.</p>

</body>

</html>
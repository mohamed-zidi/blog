<?php

include '../traitement_php/creer-droit_traitement.php';

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
                            <h1 class="h_1">Créer un droit</h1>
                            <label>Id droit</label>
                            <input type="text" name="droit" placeholder="Entrer un identifiant" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Nom du droit</label>
                            <input type="text" name="droit2" placeholder="Entrer un mot de passe" required>
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
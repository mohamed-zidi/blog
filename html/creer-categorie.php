<?php

include '../traitement_php/creer-categorie_traitement.php';

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
                            <h1 class="h_1">Créer une nouvelle categorie</h1>
                            <label>Nouvelle categorie</label>
                            <input type="text" name="categorie" placeholder="Entrer un identifiant" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Confirmer nouvelle categorie</label>
                            <input type="password" name="categorie2" placeholder="Entrer un mot de passe" required>
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
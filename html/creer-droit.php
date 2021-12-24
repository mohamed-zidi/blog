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

<body id="bodyform">
    <main>
        <div align="center">
            <form method="POST">
                <table class="form-input">
                    <tr>
                        <td>
                            <h1 class="h_1">Créer de nouveau droit</h1>
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
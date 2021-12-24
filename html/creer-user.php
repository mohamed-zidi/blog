<?php

include '../traitement_php/creer-user_traitement.php';

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
        <h1 class="h-1">Compte CUISINELLA</h1>
        <div align="center">
            <form method="POST">
                <table class="form-input">
                    <tr>
                        <td>
                            <h1 class="h-1">Ajouter un nouvelle utilisateur</h1>
                            <label>Identifiant</label>
                            <input type="text" name="login" placeholder="Entrer un identifiant" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Entrer un email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mot de passe</label>
                            <input type="password" name="password" placeholder="Entrer un mot de passe" minlength="8" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Confirmation mot de passe</label>
                            <input type="password" name="passwordverify" placeholder="Confirmer le mot de passe" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Quel droit attribuer a l'utilisateur </label>
                            <select name="id_droits" id="id_droits">

                                <? foreach ($data as $key => $cate) { ?>

                                    <option value="<? echo $cate['0']; ?>"> <? echo $cate['nom']; ?> </option>
                                    <option value="<? echo $cate['1']; ?>"> <? echo $cate['nom']; ?> </option>
                                    <option value="<? echo $cate['2']; ?>"> <? echo $cate['nom']; ?> </option>

                                <? } ?>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <button class="button" type="submit" name="inscription">Ajouter l'utilisateur</button>
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
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

<body>
    <main id="formcenter">
        <div align="center">
            <form class="form" method="POST">
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

                                <?php foreach ($value as  $id_droits) {?>

                                    <option value="<? echo  $id_droits['id']; ?>"> <? echo $id_droits['nom']; ?> </option>

                                <?php }
                                 ?>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" value="Creer" name="creer">
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
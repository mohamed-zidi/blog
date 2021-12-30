<?php

include '../traitement_php/modifier-user_traitement.php';

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
                    <h1 class="h_1">Modifier le droit<br> de l'utilisateur</h1>
                    <table class="form-inpute">
                        <td>
                            <label>Id_droits</label><br>
                            <select name="droit">
                                <option value="">--Please choose an option--</option>
                                <?php foreach ($data as $droit) { ?>

                                    <option value="<?php echo $droit['nom']; ?>"> <?php echo $droit['nom']; ?> </option>

                                <?php
                                } ?>

                            </select>
                        </td>
                        <tr>
                            <td>
                                <label>Tapez entièrement le droit  </label>
                                <input type="text" name="droit2" id="droit2" required />
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
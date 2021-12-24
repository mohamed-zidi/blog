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

    <main>
        <div align="center">
            <div>
                <h1 class="h1-">Vous etes sur le point de modifier la categorie <? echo "$userid"; ?></h1>
                <form class="form" method="POST">
                    <table class="form-inpute">
                        <td>
                            <label>Id_droits</label>
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
                                <label>Confirmer votre action </label>
                                <input type="text" name="droit2" id="droit2" required />
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
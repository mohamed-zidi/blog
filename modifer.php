<?php
session_start();
if (isset($_SESSION['login'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

    if (!$bdd) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($droit ==  $droit2) {

        if (isset($_POST['modifier'])) {

            $userid = $_GET['id'];
            var_dump($userid);

            $droit = $_POST['droit'];
            $droit2 = $_POST['droit2'];

            $req = $bdd->query("UPDATE utilisateurs SET id_droits = '$droit' WHERE id = '$userid'");
            $req->execute(array());
            $rows = $req->fetch();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main>
        <div align="center">
            <div>
                <h1 class="h1-">Vous etes sur le point de modifier les informations de l'utilisateurs <? echo "$userid"; ?></h1>
                <form class="form" method="POST">
                    <table class="form-inpute">
                        <tr>
                        <tr>
                            <td>
                                <label>Nouveau droits</label>
                                <input type="text" name="droit" id="droit" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Confirmer droits</label>
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
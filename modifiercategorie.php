<?php
session_start();
if (isset($_SESSION['login'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

    if (isset($_POST['modifier'])) {

    $categorie = $_POST['categorie'];
    $categorie2 = $_POST['categorie2'];

    if ($categorie ==  $categorie2) {


            $userid = $_GET['id'];
            var_dump($_GET['id']);

            $req = $bdd->query("UPDATE categories SET nom = '$categorie2' WHERE id = '$userid'");
            $req->execute(array());
            header("Location: admin.php");
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
                <h1 class="h1-">Vous etes sur le point de modifier la categorie <? echo "$userid"; ?></h1>
                <form class="form" method="POST">
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
                                <button class="button" type="submit" name="modifier">Modifier</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
    </main>
</body>

</html>
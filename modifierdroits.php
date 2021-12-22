<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$checke = $bdd->prepare("SELECT * FROM `droits`");
$checke->execute(array());
$row = $checke->rowCount();
$data = $checke->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);


if (isset($_POST['modifier'])) {

    $droit = $_POST['droit'];
    $droit2 = $_POST['droit2'];

    if (!empty($droit) && !empty($droit2)) {

        $userid = $_GET['id'];
        var_dump($userid);
        $req = $bdd->prepare("UPDATE `droits` SET `id` = '$droit' WHERE id = '$userid'");
        var_dump($req);
        $req->execute(array());
        $row = $req->rowCount();
        

        header("Location: admin.php");
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
                <h1 class="h1-">Vous etes sur le point de modifier le droit <? echo "$userid"; ?></h1>
                <form class="form" method="POST">
                    <table class="form-inpute">
                        <tr>
                        <tr>
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
                        </tr>
                        <tr>
                            <td>
                                <label>Entrer le nom du droits choisir </label>
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
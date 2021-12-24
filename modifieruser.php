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



    if ($droit ==  $droit2) {

        $userid = $_GET['id'];
        var_dump($_GET['id']);
        if ($droit2 == 'administrateur') {
            $newdroit = '1337';
        } elseif ($droit2 == 'moderateur') {
            $newdroit = '42';
        } else {
            $newdroit = '1';
        }
        $req = $bdd->prepare("UPDATE utilisateurs SET id_droits = '$newdroit' WHERE id = '$userid'");
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
<?php
session_start();

include '../connexion_bdd/connexion-bdd.php';

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
        header("Location: ../html/admin.php");
    }else {
        echo ("Votre modification n'a pue etre effectuer veuillez réessayer.");
        header('Location: ../html/modifier-user_traitement.php');
        die();
    }
}

?>
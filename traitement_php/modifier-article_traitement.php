<?php

session_start();

include '../connexion_bdd/connexion-bdd.php';

$checke = $bdd->prepare("SELECT * FROM `categories`");
$checke->execute(array());
$row = $checke->rowCount();
$data = $checke->fetchAll(PDO::FETCH_ASSOC);

$userid = $_GET['id'];

$check = $bdd->prepare("SELECT article FROM `articles` WHERE id = '$userid'");
$check->execute(array());
$row = $check->rowCount();
$datta = $check->fetchAll(PDO::FETCH_ASSOC);;
var_dump($datta);

if (isset($_POST['modifier'])) {

    $newarticle = $_POST['newarticle'];
    $categorie = $_POST['categorie'];

    if (!empty($newarticle) && !empty($categorie)) {


        // $req = $bdd->prepare("UPDATE `droits` SET `id` = '$droit' WHERE id = '$userid'");
        $req = $bdd->prepare("UPDATE `articles` SET `article` = '$newarticle' WHERE id = '$userid'");
        var_dump($req);
        $req->execute(array());
        $row = $req->rowCount();


        header("Location: ../html/admin.php");
    }else {
        echo ("Votre modification n'a pue etre effectuer veuillez réessayer.");
        header('Location: ../html/modifier-article_traitement.php');
        die();
    }
}

?>
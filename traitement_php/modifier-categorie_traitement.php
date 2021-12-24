<?php
session_start();

include '../connexion_bdd/connexion-bdd.php';

if (isset($_SESSION['login'])) {

    if (isset($_POST['modifier'])) {

    $categorie = $_POST['categorie'];
    $categorie2 = $_POST['categorie2'];

    if ($categorie ==  $categorie2) {


            $userid = $_GET['id'];
            var_dump($_GET['id']);

            $req = $bdd->query("UPDATE categories SET nom = '$categorie2' WHERE id = '$userid'");
            $req->execute(array());
            header("Location: ../html/admin.php");
        }else {
            echo ("Votre modification n'a pue etre effectuer veuillez réessayer.");
            header('Location: ../html/modifier-categorie_traitement.php');
            die();
        }
    }
}

?>
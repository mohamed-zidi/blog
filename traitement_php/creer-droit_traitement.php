<?php
session_start();

include '../connexion_bdd/connexion-bdd.php';

if (isset($_POST['creer'])) {
    if (!empty($_POST['droit']) && !empty($_POST['droit2'])) {


        // Création de variable pour chaque données avec sécu
        $droit = htmlspecialchars($_POST['droit']);;
        $droit2 = htmlspecialchars($_POST['droit2']);

        $userid = $_GET['id'];

        $check = $bdd->prepare("SELECT id FROM `droits` WHERE id = $droit");
        $check->execute();
        $rows = $check->rowCount();

        if ($rows == 0) {
            // On insère dans la base de données
            $insert = $bdd->prepare("INSERT INTO `droits` (`id`,`nom`) VALUES ('$droit','$droit2')");
            $insert->execute();
            // On redirige avec le message de succès
            echo ("Votre ajout a bien été envoyé.");
            header('Location: ../html/admin.php');
            die();
        } else {
            echo ("Votre ajout n'a pue etre effectuer veuillez réessayer.");
            header('Location: ../html/creer-droit_traitement.php');
            die();
        }
    }
}
?>
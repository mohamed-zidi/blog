<?php

include '../connexion_bdd/connexion-bdd.php';

if (isset($_POST['creer'])) {
    if (!empty($_POST['categorie']) && !empty($_POST['categorie2'])) {


        // Création de variable pour chaque données avec sécu
        $newcategorie = htmlspecialchars($_POST['categorie']);;
        $newcategorie2 = htmlspecialchars($_POST['categorie2']);

        $userid = $_GET['id'];

        $check = $bdd->prepare("SELECT `nom` FROM `categories` WHERE nom = $newcategorie");
        $check->execute();
        $rows = $check->rowCount();
        var_dump($rows);

        if ($rows == 0) {
            if ($newcategorie === $newcategorie2) {
                // On insère dans la base de données
                $insert = $bdd->prepare("INSERT INTO `categories` (`nom`) VALUES ('$newcategorie2')");
                $insert->execute(array(
                    'categorie'    => $newcategorie,
                    'categorie2' => $newcategorie2,
                ));
                // On redirige avec le message de succès
                echo ("Votre ajout a bien été envoyé.");
                header('Location: ../html/admin.php');
                die();
            } else {
                echo ("Votre ajout n'a pu etre effectuer veuillez réessayer.");
                header('Location: ../html/creer-categorie.php');
                die();
            }
        }
    }
}
?>
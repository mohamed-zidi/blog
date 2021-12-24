<?php
session_start();

include '../connexion_bdd/connexion-bdd.php';

$checke = $bdd->prepare("SELECT * FROM `categories`");
$checke->execute(array());
$row = $checke->rowCount();
$data = $checke->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);
foreach ($data as $categorie)


if (isset($_POST['creer'])) {
    if (!empty($_POST['categorie']) && !empty($_POST['newarticle'])) {


        // Création de variable pour chaque données avec sécu
        // $id = $_SESSION['id'];
        $id = 1;
        $categorie = htmlspecialchars($_POST['categorie']);
        $newarticle = htmlspecialchars($_POST['newarticle']);

            // On insère dans la base de données
            $insert = $bdd->prepare("INSERT INTO `articles` (`article`,`id_utilisateur`,`id_categorie`,`date`) VALUES ('$newarticle','$id','$categorie', NOW())");
            $insert->execute();
            // On redirige avec le message de succès
            echo ("Votre ajout a bien été envoyé.");
            header('Location: ../html/admin.php');
            die();
        } else {
            echo ("Votre ajout n'a pue etre effectuer veuillez réessayer.");
            header('Location: ../html/creer-categorie_traitement.php');
            die();
        }
    }
?>
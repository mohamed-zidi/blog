<?php
session_start();
include '../connexion_bdd/connexion-bdd.php';

$checke = $bdd->prepare("SELECT * FROM `articles`");
$checke->execute(array());
$row = $checke->rowCount();
$data = $checke->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $article)

if (isset($_POST['creer'])) {
    if (!empty($_POST['newcomment'])  && !empty($_POST['article'])) {

        // Création de variable pour chaque données avec sécu
        $id = $_SESSION['id'];
        $article = htmlspecialchars($_POST['article']);
        $newcomment = htmlspecialchars($_POST['newcomment']);

        // On insère dans la base de données
        $insert = $bdd->prepare("INSERT INTO `commentaires` (`commentaire`,`id_article`,`id_utilisateur`,`date`) VALUES ('$newcomment','$article','$id', NOW())");
        $insert->execute();
        // On redirige avec le message de succès
        echo ("Votre ajout a bien été envoyé.");
        header('Location: ../html/admin.php');
        die();
    } else {
        echo ("Votre ajout n'a pue etre effectuer veuillez réessayer.");
        header('Location: ../html/creer-commentaire_traitement.php');
        die();
    }
}
?>
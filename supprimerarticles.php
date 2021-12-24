<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

    $userid = $_GET['id'];
    var_dump($_GET);

    $req = $bdd->query("DELETE  FROM articles where id = '$userid'");
    $req->execute();
    if ($req) {
        echo "L'utilisateur a bien été supprimer";
        header("Location: admin.php");
        exit();
    }

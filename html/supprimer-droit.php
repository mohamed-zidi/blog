<?php
session_start();

include '../connexion_bdd/connexion-bdd.php';

$userid = $_GET['id'];
var_dump($_GET);

$req = $bdd->query("DELETE  FROM droits where id = '$userid'");
$req->execute();
if ($req) {
    echo "L'utilisateur a bien été supprimer";
    header("Location: ../html/admin.php");
    exit();
}

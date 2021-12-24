<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$userid = $_GET['id'];
var_dump($_GET);

$req = $bdd->query("DELETE  FROM droits where id = '$userid'");
$req->execute();
if ($req) {
    echo "L'utilisateur a bien été supprimer";
    header("Location: admin.php");
    exit();
}

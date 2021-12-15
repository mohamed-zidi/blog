<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

if (isset($_SESSION['login'])) {

    $userid = $_GET['id'];
    var_dump($_GET);

    $req = $bdd->query("DELETE FROM utilisateurs where id = '$userid'");
    $req->execute(array());
    header("Location: admin.php");
}

?>


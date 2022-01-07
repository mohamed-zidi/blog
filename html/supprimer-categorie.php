<?php
session_start();

include '../connexion_bdd/connexion-bdd.php';

if (isset($_SESSION['login'])) {

    $userid = $_GET['id'];
    var_dump($_GET);

    $req = $bdd->query(" DELETE  FROM categories where id = '$userid'");
    $req->execute(array($userid));
    if($req){
    echo "La categorie a bien été supprimer" ;
    header("Location: ../html/admin.php");
    exit();
}
}
?>


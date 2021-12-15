<?php
session_start();
include '../connexion_bdd/connexion-bdd.php';


$query = mysqli_query($db,"SELECT * FROM `categories`");
$r= mysqli_fetch_all($query);




if(isset($_POST['valider'])){

        $session_u = $_SESSION['login'];
        $article = $_POST['newarticle'];
        $cat = $_POST['categorie'];
        $id_cat = mysqli_query($db,"SELECT 'id' FROM categories WHERE nom = '$cat'");

        $req_id = mysqli_query($db,"SELECT `id` FROM `utilisateurs` WHERE login = '$session_u'");
        $select_id = mysqli_fetch_all($req_id);
        $id_u = $select_id[0][0];

        if(!empty($_POST['newarticle']) && !empty($_POST['categorie'])){
        
        $insert_a = mysqli_query($db,"INSERT INTO `articles`(`article`, `id_utilisateur`, `id_categorie`, `date`) VALUES ('$article','$id_u','$id_cat',NOW())");

    }
}
var_dump($r);

?>
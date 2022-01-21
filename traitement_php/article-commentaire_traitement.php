<?php
include '../connexion_bdd/connexion-bdd.php';
session_start();

$perpage = 1;

$req_count = mysqli_query($db,"SELECT COUNT(*) AS total FROM articles");
$result_count = mysqli_fetch_all($req_count);
$total = $result_count[0][0];

$nbpage = $total/$perpage;

if(isset($_GET['id']) && !empty($_GET['id']) ){
    if($_GET['id']> $nbpage){
        $current = $nbpage ;
        // echo 3;
    } else{
        $current = $_GET['id'];
        // echo 4;
    }


} else{
    $current = 1;
    // echo 5;
}



$req_article = mysqli_query($db,"SELECT * FROM articles WHERE id = '$current'");
$article = mysqli_fetch_all($req_article);
// echo $article[0][0];
$id_article = $article[0][0];

if(isset($_POST['btn'])){
    $com = $_POST['com']; 
    $id_user = $_SESSION['id'];
    
    

    if(!empty($com)){
        
        $rcom = mysqli_query($db,"INSERT INTO `commentaires`(`commentaire`, `id_article`, `id_utilisateur`, `date`) VALUES ('$com','$id_article','$id_user',NOW())");
        echo 1;
    }
}

$req_com = mysqli_query($db,"SELECT utilisateurs.login, commentaires.commentaire FROM utilisateurs INNER JOIN `commentaires` WHERE id_article = $id_article AND commentaires.id_utilisateur = utilisateurs.id");
$comments = mysqli_fetch_all($req_com);
// var_dump($comments);


// $com_id = $comments[0][2];
// echo $com_id;
// $req_user = mysqli_query($db,"SELECT login FROM `utilisateurs` INNER JOIN commentaires WHERE utilisateurs.id = '$com_id'");
// $login_user = mysqli_fetch_all($req_user);
// var_dump($login_user);
// mysqli_query($db,"SELECT * FROM `commentaires` INNER JOIN utilisateurs ON utilisateurs.id = commentaires.id WHERE id_article = $id_article");
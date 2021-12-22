<?php

// if(isset($_POST['deconnexion'])){
//     session_destroy();
//     header('location:connexion.php');
// }

if(isset($_POST['connexion'])){
    $loginconnect = htmlspecialchars($_POST['loginconnexion']);
    $mdpconnect = sha1($_POST['mdpconnexion']);


    if(!empty($loginconnect) && !empty($mdpconnect)){
        $db = mysqli_connect('localhost','root','','blog');
        $res = mysqli_query($db,"SELECT * FROM utilisateurs WHERE login = '".$loginconnect."' AND password = '".$mdpconnect."' ");
        $result = mysqli_num_rows($res);
        $f = mysqli_fetch_all($res);
        
        if($result == 1){
            session_start();
            $_SESSION['login'] = $loginconnect;
            $_SESSION['mdp'] = $mdpconnect;
            $_SESSION['id'] = $f[0][0];
            $_SESSION['mail'] = $f[0][3];
            $_SESSION['id_droit'] = $f[0][4];
            header('location:../html/index.php');
            echo 1;
        } else {
            session_start();
            $_SESSION['erreur'] = 'Identifiants érronés';
            echo 2;
            header('location:../html/connexion.php');
            
        }
}
}

?>
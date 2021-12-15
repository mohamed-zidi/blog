<?php
// session_start();
// if(isset($_POST['deconnexion'])){
//     session_destroy();
//     header('location:connexion.php');
// }

include '../connexion_bdd/connexion-bdd.php';
?> 

<?php
if(isset($_POST['valider'])){
    $login = htmlspecialchars($_POST['login']);
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    $affichage = NULL ;

    echo 1 ;
    if(!empty($login) && !empty($mdp) && !empty($mdp2) && !empty($mail)){

    if($mdp == $mdp2){
        
        if($login == htmlspecialchars('admin')){
            $req = "INSERT INTO `utilisateurs`(`login`, `password`, `email`, `id_droits`) VALUES ('$login','$mdp','$mail','1337') ";
            $res = mysqli_query($db,$req);
            header('location:../html/inscription.php');
            echo 2;
        

    } elseif($login != htmlspecialchars('admin')){
        $req = "INSERT INTO `utilisateurs`(`login`, `password`, `email`, `id_droits`) VALUES ('$login','$mdp','$mail','1') ";
        $res = mysqli_query($db,$req);
        header('location:../html/inscription.php');
        echo 2;
    }
     else {
        header('location:../html/inscription.php');
        $affichage = 'Confirmez votre mot de passe';
        echo 4;
    } 

    } else {
        header('location:../html/inscription.php');
        $affichage = 'Tous les champs doivent être remplis';
        echo 5;
    }
    

}
}
?>
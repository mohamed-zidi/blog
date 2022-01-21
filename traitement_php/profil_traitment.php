<?php

session_start();
include '../connexion_bdd/connexion-bdd.php';

if(isset($_POST['btn_profil'])){
    $login = $_POST['oldlogin'];
    $new_login = $_POST['newlogin'];


        if($login == $_SESSION['login'] && !empty($new_login)){
            $change_login = mysqli_query($db,"UPDATE `utilisateurs` SET `login`= '$new_login' WHERE login = '$login'");
            
            $_SESSION['affichage'] = 'Votre login a été modifié.';
            header('location:../html/profil.php');
        } else { 
            $_SESSION['affichage'] = 'Erreur veuillez recommencer.';
            header('location:../html/profil.php');
        }

}

if(isset($_POST['btn_password'])){
    $mdp = sha1($_POST['oldmdp']);
    $new_mdp = sha1($_POST['newmdp']);
    $confirm_mdp = sha1($_POST['newmdp2']);

        if($mdp == $_SESSION['mdp'] && !empty($new_mdp) && $new_mdp == $confirm_mdp){
            $change_mdp = mysqli_query($db,"UPDATE `utilisateurs` SET `password`= '$new_mdp' WHERE password = '$mdp'");
            
            $_SESSION['affichage'] = 'Votre mot de passe a été modifié.';
            header('location:../html/profil.php');
        } else { 
            $_SESSION['affichage'] = 'Erreur veuillez recommencer en vérifiant votre mot de passe.';
            header('location:../html/profil.php');
        }

}

if(isset($_POST['btn_mail'])){
    $mail = $_POST['oldmail'];
    $new_mail = $_POST['newmail'];
    

        if($mail == $_SESSION['mail'] && !empty($mail) && !empty($new_mail)){
            $change_mdp = mysqli_query($db,"UPDATE `utilisateurs` SET `email`= '$new_mail' WHERE email = '$mail'");
            
            $_SESSION['affichage'] = 'Votre mail a été modifié.';
            header('location:../html/profil.php');
        } else { 
            $_SESSION['affichage'] = 'Erreur veuillez recommencer en vérifiant votre mail.';
            header('location:../html/profil.php');
        }

}


?>
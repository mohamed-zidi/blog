<?php

include '../connexion_bdd/connexion-bdd.php';
?> 

<?php
if (isset($_POST['valider'])) {
    $login = htmlspecialchars($_POST['login']);
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    $affichage = NULL;
    $reqlogin = "SELECT  * FROM `utilisateurs` WHERE login = '$login'";
    $querylogin = mysqli_query($db, $reqlogin);
    $login_existant = mysqli_num_rows($querylogin);
    $reqmail = "SELECT * FROM `utilisateurs` WHERE email = '$mail'";
    $querymail = mysqli_query($db, $reqmail);
    $mail_existant = mysqli_num_rows($querymail);


    if ($login_existant == 0 && $mail_existant == 0) {

        if (!empty($login) && !empty($mdp) && !empty($mdp2) && !empty($mail)) {

            if ($mdp == $mdp2) {

                $req = "INSERT INTO `utilisateurs`(`login`, `password`, `email`, `id_droits`) VALUES ('$login','$mdp','$mail','1') ";
                    $res = mysqli_query($db, $req);

                    header('location:../html/connexion.php');

            }elseif ($login == 'admin' && $mdp == 'admin' && $mdp == $mdp2) {
                    $req = "INSERT INTO `utilisateurs`(`login`, `password`, `email`, `id_droits`) VALUES ('$login','$mdp','$mail','1337') ";
                    $res = mysqli_query($db, $req);
                    header('location:../html/connexion.php');
                }
            } else {
                session_start();
                header('location:../html/inscription.php');
                $_SESSION['affichage'] = 'Confirmez votre mot de passe';
            }
        } else {
            session_start();
            header('location:../html/inscription.php');
            $_SESSION['affichage'] = 'Tous les champs doivent être remplis';
        }
    } else {
        session_start();
        header('location:../html/inscription.php');
        $_SESSION['affichage'] = 'Login ou mail déjà existant ';
    }

?>
<?php
session_start();

include '../connexion_bdd/connexion-bdd.php';

if (isset($_SESSION['login'])) {

    $login = $_SESSION['login'];

    if (isset($_POST['modifier'])) {

        $newlogin = htmlspecialchars($_POST['newlogin']);
        $newmail = htmlspecialchars($_POST['newmail']);
        $pass = htmlspecialchars($_POST['password']);
        $newpass = htmlspecialchars($_POST['newpass']);
        $newpass2 = htmlspecialchars($_POST['newpass2']);

        $check = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = '$login'");
        $check->execute();
        $data = $check->fetchAll(PDO::FETCH_ASSOC);
        var_dump($data);
        $passwordVerify = $data[0]['password'];

        if ($newlogin && $newpass == $newpass2) {

            $newpassword = sha1($newpass2);

            $check = $bdd->prepare("UPDATE utilisateurs SET login ='$newlogin', email ='$newmail',password ='$newpassword' WHERE login = '$login'");
            $check->execute(array("login" => $newlogin, "email" => $newmail, "password" => $newpassword,));
            $data = $check->fetch();

            $_SESSION['login'] = $newlogin;

            $_SESSION['mail'] = $newmail;

            $_SESSION['affichage'] = "vos modifications ont bien été prise en compte";
            header("location:../html/profil.php");
        }
    }
}

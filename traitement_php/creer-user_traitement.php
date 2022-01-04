<?php

session_start();

include '../connexion_bdd/connexion-bdd.php';

$checke = $bdd->prepare("SELECT * FROM `droits`");
$checke->execute(array());
$row = $checke->rowCount();
$data = $checke->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['inscription'])) {

    if (!empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordverify'])) {

        // Création de variable pour chaque données avec sécu
        $login =  htmlspecialchars($_POST['login']);
        $prenom = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $passwordverify =  htmlspecialchars($_POST['passwordverify']);
        $id_droits = $_POST['id_droits'];


        $userid = $_GET['id'];

        $check = $bdd->prepare("SELECT * FROM `utilisateurs` WHERE login = '$login'");
        $check->execute(array($login));
        $rows = $check->rowCount();


        if ($rows == 0) {
            if ($password ==  $passwordverify) {

                $passwordhash = password_hash($password, PASSWORD_BCRYPT);

                // On insère dans la base de données
                $insert = $bdd->prepare("INSERT INTO `utilisateurs` (`login`, `password`,`email`, `id_droits`) VALUES ('$login','$passwordhash','$email','$id_droits')");
                $insert->execute(array(
                    'login' => $login,
                    'password' => $passwordhash,
                    'email' => $email,
                    'id_droits' => $id_droits,
                ));
                // On redirige avec le message de succès
                echo ("Votre ajout a bien été envoyé.");
                header('Location: ../html/admin.php');
                die();
            } else {
                echo ("Votre ajout n'a pue etre effectuer veuillez réessayer.");
                header('Location: ../html/creer-user_traitement.php');
                die();
            }
        }
    }
}

?>
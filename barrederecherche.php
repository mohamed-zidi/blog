<?php

session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

$check = $bdd->prepare("SELECT * FROM `categories`");
$check->execute();
$row = $check->rowCount();
$datta = $check->fetch();

$id = $datta['id'];

if (isset($_POST['submit'])) {

    $search = htmlspecialchars($_POST['search']);

    if (!empty($_POST['search'])) {
        $check = $bdd->prepare("SELECT * FROM `articles` WHERE id = $id");
        $check->execute();
        $row = $check->rowCount();
        $data = $check->fetch();
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog.css" />
    <title>Livre-or</title>
</head>

<body>
    <div>
        <ul>
            <form action="" method="POST">
                <input type="search" name="search" placeholder="search" aria-label="search" required>
                <button type="submit" name="submit">Rechercher</button>
            </form>
            <? while ($rows = $data()) {
                echo $rows['article'];
            } ?>
        </ul>
    </div>
</body>

</html>
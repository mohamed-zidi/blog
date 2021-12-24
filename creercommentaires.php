<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$checke = $bdd->prepare("SELECT * FROM `articles`");
$checke->execute(array());
$row = $checke->rowCount();
$data = $checke->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);
foreach ($data as $article)


if (isset($_POST['creer'])) {
    if (!empty($_POST['article']) && !empty($_POST['newcomment'])) {


        // Création de variable pour chaque données avec sécu
        // $id = $_SESSION['id'];
        $id = 1;
        $article = htmlspecialchars($_POST['article']);
        $newcomment = htmlspecialchars($_POST['newcomment']);

            // On insère dans la base de données
            $insert = $bdd->prepare("INSERT INTO `commentaires` (`commentaire`,`id_article`,`id_utilisateur`,`date`) VALUES ('$newcomment','$article','$id', NOW())");
            $insert->execute();
            // On redirige avec le message de succès
            echo ("Votre ajout a bien été envoyé.");
            header('Location:admin.php');
            die();
        } else {
            echo ("Votre ajout n'a pue etre effectuer veuillez réessayer.");
            header('Location: creer.php');
            die();
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title> Page inscription </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="livre-or.css" />
</head>

<body id="bodyform">
    <main>
        <div align="center">
            <form method="POST">
                <table class="form-input">
                    <tr>
                        <td>
                            <h1 class="h_1">Créer de nouveaux articles</h1>
                            <label for="article">Choisir la catégorie correspondante:</label>
                            <select name="article" id="article">
                                <?php foreach ($data as $article) { ?>

                                    <option value="<?php echo $article['id']; ?>"> <?php echo $article['id']; ?> </option>

                                <?php
                                } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="newcomment">Ajouter un commentaire:</label>
                        <input type="texterea" name="newcomment" id="newcomment">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <button class="button" type="submit" name="creer">Créer</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <footer class="footeur">
        <div class="footer footter">
            <div>
                <p class="foot copyrighte copy">Copyright©2021 Cuisinella. Tous droits réservés.</p>
            </div>
    </footer>
</body>

</html>
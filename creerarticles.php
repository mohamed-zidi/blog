<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$checke = $bdd->prepare("SELECT * FROM `categories`");
$checke->execute(array());
$row = $checke->rowCount();
$data = $checke->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);
foreach ($data as $categorie)


if (isset($_POST['creer'])) {
    if (!empty($_POST['categorie']) && !empty($_POST['newarticle'])) {


        // Création de variable pour chaque données avec sécu
        // $id = $_SESSION['id'];
        $id = 1;
        $categorie = htmlspecialchars($_POST['categorie']);
        $newarticle = htmlspecialchars($_POST['newarticle']);

            // On insère dans la base de données
            $insert = $bdd->prepare("INSERT INTO `articles` (`article`,`id_utilisateur`,`id_categorie`,`date`) VALUES ('$newarticle','$id','$categorie', NOW())");
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
                            <label for="categorie">Choisir la catégorie correspondante:</label>
                            <select name="categorie" id="categorie">
                                <?php foreach ($data as $categorie) { ?>

                                    <option value="<?php echo $categorie['id']; ?>"> <?php echo $categorie['nom']; ?> </option>

                                <?php
                                } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="newarticle">Ecrire un article:</label>
                        <input type="texterea" name="newarticle" id="newarticle">
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
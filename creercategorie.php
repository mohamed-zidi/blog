                <?php
                session_start();
                $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

                if (isset($_POST['creer'])) {
                    if (!empty($_POST['categorie']) && !empty($_POST['categorie2'])) {


                        // Création de variable pour chaque données avec sécu
                        $newcategorie = htmlspecialchars($_POST['categorie']);;
                        $newcategorie2 = htmlspecialchars($_POST['categorie2']);
                        
                        $userid = $_GET['id'];

                        $check = $bdd->prepare("SELECT `nom` FROM `categories` WHERE nom = $newcategorie");
                        $check->execute();
                        $rows = $check->rowCount();
                        var_dump($rows);

                        if ($rows == 0) {
                            if ($newcategorie === $newcategorie2) {
                                // On insère dans la base de données
                                $insert = $bdd->prepare("INSERT INTO `categories` (`nom`) VALUES ('$newcategorie2')");
                                $insert->execute(array(
                                    'categorie'    => $newcategorie,
                                    'categorie2' => $newcategorie2,
                                ));
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
                                            <h1 class="h_1">Créer une nouvelle categorie</h1>
                                            <label>Nouvelle categorie</label>
                                            <input type="text" name="categorie" placeholder="Entrer un identifiant" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Confirmer nouvelle categorie</label>
                                            <input type="password" name="categorie2" placeholder="Entrer un mot de passe" required>
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
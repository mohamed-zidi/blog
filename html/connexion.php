<?php 
include '../traitement_php/connexion_traitement.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="center">
      <h1>Connexion</h1>
<form action="../traitement_php/connexion_traitement.php" method="post">
<div class="txt_field">
<span></span>
<input type="text" name="loginconnexion" id="loginconnexion" required>
<label for="connexion">Login</label>
</div>

<div class="txt_field">
<input type="password" name="mdpconnexion" id="mdpconnexion" required>
<span></span>
<label for="mdpconnexion">Password</label>
</div>

<input type="submit" value="Se connecter" name="connexion">
<div class="signup_link">Pas encore de compte? <a href="incription.php">S'inscrire</a></div>
</form>
</div>

<?php if(isset($_SESSION['erreur'])){ ?>

   <p> <?php echo $_SESSION['erreur']; ?> </p>

<?php } ?>

</body>
</html>
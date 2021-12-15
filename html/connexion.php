<?php 
include '../traitement_php/connexion_traitement.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="../traitement_php/connexion_traitement.php" method="post">

<div>
<label for="connexion" >Entrez votre login : </label>
<input type="text" name="loginconnexion" id="loginconnexion">
</div>

<div>
<label for="mdpconnexion" class="form-label">Votre mot de passe :</label>
<input type="password" name="mdpconnexion" id="mdpconnexion">
</div>

<input type="submit" value="Se connecter" name="connexion">

</form>


<?php if(isset($affichage)){ ?>

   <p> <?php echo $affichage ; ?> </p>
<?php } ?>


</body>
</html>
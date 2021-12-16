<?php

include '../traitement_php/creer-article_traitement.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include '../header/header.php'; ?>

    <main>
        <form action="../traitement_php/creer-article_traitement.php" method="post">

            <label for="newarticle">Ecrire un article:</label>
            <input type="text" name="newarticle" id="newarticle">

            <label for="categorie">Choisir la catégorie correspondante:</label>
            <select name="categorie" id="categorie">
                <?php foreach($r as $key => $cate){ ?>
                   
                <option value="<?php echo $cate[1]; ?>"> <?php echo $cate[1]; ?> </option>
                  
                <?php } ?>
                
            </select>
                    
            
            <input type="submit" name="valider" value="Valider">
        </form>
    </main>
</body>
</html>
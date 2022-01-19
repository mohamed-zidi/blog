<?php
include '../traitement_php/article-commentaire_traitement.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blog.css">
    <title>Document</title>
</head>

<body>
    
    <?php include '../header/header.php'; ?>
   
    <main>
    <h1 class="titre-articles"> Commentez les articles</h1>
    <div class="wrapper" >
            <?php foreach($article as $key => $e){ ?>
                    
                <article> <?php echo $e[1]; ?></article>

                <?php } ?>
        </div>

        <div class="taille-pagination-commentaire">      
            <ul>
                <?php
                for($i = 1;$i <= $nbpage;$i++){
                    if($i==$current){
                        ?>
                        <li class="inline" ><a id="linka" href="?id=<?php echo $i ?>"> <?php echo $i ?></a></li>
                        <?php
                    }else{
                        ?>
                        <li class="inline"><a id="linka" href="?id=<?php echo $i ?>"> <?php echo $i ?></a></li>
                        <?php
                    }
                }

                
                ?>
                
                
            </ul>
        </div>

        <div>
            <form class="form-commentaire"  action="" method="post"> 

                <label class="subtitle" for="com">Entrez votre commentaire</label>
                <input class="input-commentaire" type="text" name="com" placeholder="J'aime beaucoup votre article sur..." id="com"  required>

                <input class="button-commentaire" type="submit" value="Valider" name="btn">
                
            </form>
        </div>
        <div class="espace-commentaires">
        <h4 class="titre-commentaires">Commentaires</h4>
                <?php foreach($comments as $key => $c){ ?>
                    <p><span class="pseudo" ><?php echo "Pseudo: ". $c[0];?><br><br></span> <span class="commentaires-texte"><?= $c[1]; ?><br><br></span></p>
                    <?php } ?>
        </div>
    </main>
    
    <?php include("../footer/footer.php"); ?>
</body>
</html>

      
      

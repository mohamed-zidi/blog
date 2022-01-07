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
        <div>
            <?php foreach($article as $key => $e){ ?>
                    
                <article> <?php echo $e[1]; ?></article>

                <?php } ?>
        </div>

        <div>       
            <ul>
                <?php
                for($i = 1;$i <= $nbpage;$i++){
                    if($i==$current){
                        ?>
                        <li ><a href="?id=<?php echo $i ?>"> <?php echo $i ?></a></li>
                        <?php
                    }else{
                        ?>
                        <li><a href="?id=<?php echo $i ?>"> <?php echo $i ?></a></li>
                        <?php
                    }
                }

                
                ?>
                
                
            </ul>
        </div>

        <div>
            <form action="" method="post"> 

                <label for="com">Entrez votre commentaire</label>
                <input type="text" name="com" id="com" required>

                <input type="submit" value="Valider" name="btn">
                
            </form>
        </div>

        <div>
                <?php foreach($comments as $key => $c){ ?>
                    <p><?php echo $c[0].' '.' '.$c[1]; ?></p>
                    <?php } ?>
        </div>
    </main>
    
    <?php include("../footer/footer.php"); ?>
</body>
</html>
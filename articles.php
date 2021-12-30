<?php 
// session_start();
// include '../connexion_bdd/connexion-bdd.php';
include '../traitement_php/articles-traitement.php';
$firstOfPage = ($current-1)*$perPage;
 $reqarticles = $db->query("SELECT * FROM articles ORDER BY id DESC LIMIT $firstOfPage,$perPage");
// var_dump($_SERVER['QUERY_STRING']);
// exit();
// var_dump($reqarticles);
if(isset($_POST['appliquer'])){

    $z = $_POST['categorie'];
    $reqz = $db->query ("SELECT * FROM categories WHERE nom = '$z'");
    $fetchz = $reqz->fetchAll();

    var_dump($_POST);
}



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
    <header>
    <?php

    ?>
    </header>

    <form method="POST">
        <?php
        $reqcategories = $db->query("SELECT * FROM categories");
        $cat = $reqcategories->fetchAll();


        ?>
        <label>Trier les articles par catégorie :</label>
        <select name="categorie" id="categorie">
            <?php foreach($cat as $key => $c){ ?>
                
                <option value="<?php echo $c['nom']; ?>"> <?php echo $c['nom']; ?> </option>
                
                <?php } ?>
            </select>
        
    <button type="submit" name="appliquer" value="1">Appliquer</button>
        
    </form>
    
    <main>
            <article>
                <div class="articles">
                    <?php
                    
                    
                // $articles = $reqarticles->fetch();
                // var_dump($reqarticles);
                // exit();
                foreach($reqarticles as $key){
                echo "<p>  $key[article]</p>";
            } 
            ?>
        </div>
        </article>
            <ul class="pagination">
            <li class="<?php if($current == '1'){echo "disabled";} ?>"><a href="articles.php?p=<?php if($current != '1'){ echo $current-1;}else{echo $current;} ?>">&laquo;</a></li>
            <?php
            for($i=1; $i<=$nbPage; $i++){
                if($i == $current){
                ?>
                <li class="active"><a href="?p=<?php echo $i ?>"><?php echo $i ?> </a></li>
                <?php
                }else{
                    ?>
                    <li><a href="?p=<?php echo $i ?>"><?php echo $i ?> </a></li>
                    <?php
                }
            }    
            ?>
            <li class="<?php if($current == $nbPage){echo "disabled";} ?>"><a href="articles.php?p=<?php if($current != $nbPage){ echo $current+1;}else{echo $current;} ?>">&raquo;</a></li>
            </ul>
    </main>


<footer>
<?php include '../footer/footer.php';?>
</footer>
</body>
</html>
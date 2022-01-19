<?php

session_start();
include '../connexion_bdd/connexion-bdd.php';
include '../traitement_php/articles-traitement.php';


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/blog.css">
</head>

<body>
    <header>

 <?php include '../header/header.php'; ?>
     
    </header>

    <form class="select-categorie" method="POST">
        <label>Trier les articles par catégorie :</label>
        <select name="categorie" id="categorie">


            <?php foreach ($data as $key => $categorie) { ?>

                

                <option value="<?= $categorie['id']; ?>"> <?= $categorie['nom']; ?> </option>

            <?php  } ?>
            
        </select>
        
            <button type="submit" name="appliquer" value="appliquer">Appliquer</button>
        
        <?php
         
       
        
        ?>

    </form>

    <main>
        <article>
            <div class="articles">
                
                <table>
                    <thead>
                        
                            <th>Article</th>
                            <th>Date</th>
                            
                        
                    </thead>

                    <tbody>
                    <?php
                    
                    
                    if(isset($_POST['appliquer']) || isset($_GET['categorie']) ){ ?>
        
                        <form action="" method="post">
                        <button type="submit" name="retour" value="retour">Revenir aux articles</button>
                        </form>

                        

                        <?php
                        foreach($articles2 as $article2){
                            ?>
                            <tr>
                            <td><?= $article2['article']; ?> </td>
                            <td><?= $article2['date']; ?></td>
                            </tr>
                    
                        
                        <?php   
                        }

                    ?>
                    </tbody>
                </table>
            </div>
            <nav>
                <ul>
                    <?php
                        if($current_page2 != '1'){
                        ?>
                            <li class="espace-pagination"><a href="articles.php?page=<?= $current_page2 -1 ?>&categorie=<?= $id_cat ?>">Précédente</a></li>
                            
                        <?php }

                    ?>
                    
                        <?php for($page2= 1; $page2<=$pages2; $page2++): ?>
                            <?php if($page2 != $current_page2): ?>
                        <li> <a href="articles.php?p=<?=$page2?>&categorie=<?=$id_cat?>"><?=$page2?></a></li>
                            <?php endif ?>
                        <?php endfor ?>
                        
                    <?php 
                        if($current_page2 != $pages2 && $current_page2 <= $pages2){
                            ?>
                            <li class = "espace-pagination"><a href="articles.php?page=<?= $current_page2 + 1?>&categorie=<?= $id_cat ?>">Suivante</a> </li>
                            
                        <?php }
                    ?>
                    
                </ul>
            </nav>
            
        </article>

                    <?php } else{
                        
                        // echo $pages;
                        foreach($articles as $article){
                            ?>
                            <tr>
                            <td><?= $article['article']; ?> </td>
                            <td><?= $article['date']; ?></td>
                            </tr>
                    
                        
                        <?php   
                        }

                    ?>
                    </tbody>
                </table>
            </div>
            <nav>
                <ul>
                    <?php
                        if($current_page != '1'){
                        ?>
                            <li class="espace-pagination"><a href="articles.php?page=<?= $current_page -1 ?>">Précédente</a></li>

                        <?php }

                    ?>
                    
                        <?php for($page = 1; $page<=$pages; $page++): ?>
                            <?php if($page != $current_page): ?>
                        <li> <a href="articles.php?page=<?= $page ?>"><?=$page?></a></li>
                            <?php endif ?>
                            <?php endfor ?>
                        
                    <?php  
                        if($current_page != $pages){
                            ?>
                            <li class = "espace-pagination"><a href="articles.php?page=<?= $current_page + 1?>">Suivante</a> </li>

                        <?php }
                    ?>
                    
                </ul>
            </nav>
            <?php } ?>
        </article>
        
    </main>


    <footer>
        <?php include '../footer/footer.php'; ?>
    </footer>
</body>

</html>

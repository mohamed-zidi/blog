<?php

include '../connexion_bdd/connexion-bdd.php';






$check = $bdd->query("SELECT * FROM categories");
$check->execute(array());
$row = $check->rowCount();
$data = $check->fetchAll(PDO::FETCH_ASSOC);


        //PREMIERE PAGINATION

// determination de la page courante
if(isset($_GET['page']) && !empty($_GET['page'])){
    $current_page = (int)  strip_tags($_GET['page']);
}else {
    $current_page = 1;
}

// requete nombre total d'articles
$req = "SELECT COUNT(*) AS nb_articles FROM articles ";

// on prepare
$query = $bdd->prepare($req);

// execution
$query->execute();

// total articles
$result = $query->fetch();

$nb_articles = (int) $result['nb_articles'];


// nombre d'articles par page
$par_page = 5;

// calcul du nombre de pages total - ceil= arrondir à l'entier superieur
$pages = ceil($nb_articles/$par_page);

// calcul du 1er article de la page
$premier = ($current_page*$par_page) - $par_page ;
 
// requête selection des articles
$sql_req = "SELECT * FROM articles ORDER BY id DESC LIMIT :premier,:parpage ";

// preparation de la requête
$req_articles = $bdd->prepare($sql_req);

// on remplace les valeurs
$req_articles->bindValue(':premier',$premier,PDO::PARAM_INT);
$req_articles->bindValue(':parpage',$par_page,PDO::PARAM_INT);

// execution de la requête
$req_articles->execute();

// recuperation des articles dans un tableau associatif
$articles = $req_articles->fetchAll(PDO::FETCH_ASSOC);


// bouton revenir en arriere
if(isset($_POST['retour'])){
    header("location:articles.php?page=1");
}



        // DEUXIEME PAGINATION -> articles triés
         

        if(isset($_POST['appliquer']) || isset($_GET['categorie'])){

            // $id_cat = $_POST['categorie'];

            // $_POST['categorie'] ? $id_cat = $_POST['categorie'] : $id_cat = $_GET['categorie'];

            if(isset($_POST['categorie'])){
                $id_cat = $_POST['categorie'];
            } else{
                $id_cat = $_GET['categorie'];
            }


                        // determination de la page courante
            if(isset($_GET['page'])&& isset($_GET['categorie']) && !empty($_GET['page']) && !empty($_GET['categorie'])){
                $current_page2 = (int)  strip_tags($_GET['page']);
            }else {
                $current_page2 = 1;
            }

            // requete nombre total d'articles
            $req2 = "SELECT COUNT(*) AS nb_articles FROM articles WHERE id_categorie = :id_cat ";


            // on prepare
            $query2 = $bdd->prepare($req2);

            $query2->bindValue(':id_cat',$id_cat,PDO::PARAM_INT);

            // execution
            $query2->execute();

            // total articles
            $result2 = $query2->fetch();

            $nb_articles2 = (int) $result2['nb_articles'];

            // nombre d'articles par page
            $par_page2 = 5;

            // calcul du nombre de pages total    ceil = arrondir à l'entier superieur
            if($nb_articles2 == 0){
            $pages2 = ceil(1/$par_page2);
            } else{ 
            $pages2 = ceil($nb_articles2/$par_page2);
            }
            
            // calcul du 1er article de la page
            $premier2 = ($current_page2*$par_page2) - $par_page2;
            
            // requête selection des articles
            $sql_req2 = "SELECT * FROM articles WHERE id_categorie = :id_cat ORDER BY id DESC LIMIT :premier2,:parpage2 ";

            // preparation de la requête
            $req_articles2 = $bdd->prepare($sql_req2);

            // on remplace les valeurs
            $req_articles2->bindValue(':premier2',$premier,PDO::PARAM_INT);
            $req_articles2->bindValue(':parpage2',$par_page,PDO::PARAM_INT);
            $req_articles2->bindValue(':id_cat',$id_cat,PDO::PARAM_INT);

            // execution de la requête
            $req_articles2->execute();

            // recuperation des articles dans un tableau associatif
            $articles2 = $req_articles2->fetchAll(PDO::FETCH_ASSOC);
                    }
                    
?>

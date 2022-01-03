<?php
// session_start();
include '../blog/connexion_bdd/connexion-bdd.php';
//  $db = new PDO('mysql:host=localhost;dbname=blog','root','');

$perPage = 5;
$req = $bdd->query('SELECT COUNT(*) AS total FROM articles');
$result = $req->fetch();
$total = $result['total'];

$nbPage = ceil($total/$perPage);

$reqarticles = $bdd->query("SELECT article FROM articles ORDER BY id DESC ");
$reqarticles->execute();
// $reqarticles->fetchAll() ;

if(isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p']) ==1)
{
   if($_GET['p'] > $nbPage){
       $current = $nbPage;
   }
   else{
       $current = $_GET['p'];
   }
}
else
{
    $current = 1;
}

// return $reqarticles = $db->query("SELECT * FROM articles ORDER BY id DESC ");

?>
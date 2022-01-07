<?php
// session_start();
include '../connexion_bdd/connexion-bdd.php';
//  $db = new PDO('mysql:host=localhost;dbname=blog','root','');

$req = $bdd->query('SELECT COUNT(*) AS total FROM articles');
$result = $req->fetch();
$total = $result['total'];

// $reqarticles->fetchAll() ;

if(isset($_GET['p']))
{
    $current = $_GET['p'];

   /* if($_GET['p'] > $nbPage){
       $current = $nbPage;
   }
   else{
       $current = $_GET['p'];
   } */
}
else
{
    $current = 1;
}

// return $reqarticles = $db->query("SELECT * FROM articles ORDER BY id DESC ");

$perPage = 5 * $current;
$pageStart = $perPage - 5;
$pageEnd = $pageStart + 5;

$nbPage = ceil($total/$perPage);

$reqarticles = $bdd->query("SELECT article FROM articles ORDER BY id DESC LIMIT $pageStart, $pageEnd");
$reqarticles->execute();

?>
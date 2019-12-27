

<?php
include"./config.php";
$base=connect();
$id=$_GET['id'];
$requette="DELETE FROM categories WHERE id =$id";
$ligne=$base->exec($requette); //ligne prend le résultat de la  requette , exec est une fonction qui va exécuter la requette

header('location:./home.php');

?>


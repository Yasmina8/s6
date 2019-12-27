<?php
include"./config.php";
$base=connect();
$id=$_GET['id'];
$name=$_POST['name'];
$requette="UPDATE categories 
SET NAME='$name' where id=$id";
$ligne=$base->exec($requette); //ligne prend le résultat de la  requette , exec est une fonction qui va exécuter la requette

header('location:./home.php');
?>


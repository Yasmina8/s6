<?php
include"./config.php";
$base=connect();
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
$idcat=$_post['idcat'];



$requette="INSERT INTO products VALUES(null,'$name','$description',$price,$idcat)";
$ligne=$base->exec($requette); //ligne prend le résultat de la  requette , exec est une fonction qui va exécuter la requette
if($ligne==1){
header('location:./home.php');

else {
    header('location:./../php/viewaddproducts.php);
}




?>

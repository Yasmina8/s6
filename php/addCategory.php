<?php
include"./config.php";
$base=connect();
$name=$_POST['name'];
$requette="INSERT INTO categories VALUES(null,'$name')";
$ligne=$base->exec($requette); //ligne prend le résultat de la  requette , exec est une fonction qui va exécuter la requette
if($ligne==1){
header('location:./home.php');
}
else {
    header('location:./../html/addCategory.html');
}


?>
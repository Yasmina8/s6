<?php
include"./config.php";
$base=connect();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$phone=$_post['phone'];



$requette="INSERT INTO users VALUES(null,'$firstname','$lastname',$password,$phone)";
$ligne=$base->exec($requette); //ligne prend le résultat de la  requette , exec est une fonction qui va exécuter la requette
if($ligne==1){
header('location:./../html/welcome.html');

else {
    header('location:./../html/inscription.html');
}

?>
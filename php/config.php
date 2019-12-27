<?php
function connect() {
    $server="localhost"; // php ne connait ps le nom du serveur 
    $database="shop";
    $username="root";
    $password="";
    try{
     $connexion = new PDO("mysql:host=$server;dbname=$database",$username,$password);
     return $connexion;
    }
   catch(PDOEXCEPTION $e)  { // variable e 
   die('Erreur :' .$e->getMessage()); // . separation entre mesg et valeur , concaténation ->pour accéder au fichier
   }


    
}

?>
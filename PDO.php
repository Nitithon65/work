<?php
    $servername="localhost";
    $username="root";
    $database="webboard";
    $password="";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8",$username,$password);
}
catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage();
}
?>
<?php

ob_start();
session_start();

$host="localhost";
$db_name="tamirci";
$kullanici_adi="root";
$sifre="";
try{
    $db=new PDO("mysql:host=$host; dbname=$db_name; charset=utf8; port=3308", "$kullanici_adi","$sifre");
    
}
catch(PDOException $mesaj){
    echo $mesaj ->getMessage();
    
    
}


?>
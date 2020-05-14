<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=sistema_login",'root', '');
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}
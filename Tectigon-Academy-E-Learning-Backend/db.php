<?php
   $host = 'localhost';
   $dbname = 'e-learning';
   $user = 'root';
   $pass = '';

   try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
   } catch (PDOException $e){
    die("Connection failed: " . $e->getMessage());
   }
?>
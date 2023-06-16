<?php
$host = 'localhost';
$db   = 'gyat';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
try {
     $pdo = new PDO("mysql:host=$host;dbname=gyat", $user, $pass);
     // set the PDO error mode to exception
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
   }
?>





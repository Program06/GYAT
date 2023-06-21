<?php 
include('db.php');
$ID =  $_GET['id'];
$update = $pdo->prepare("DELETE FROM boeken WHERE ID=:id"); 
$update->Bindparam(':id', $ID);
$update->execute();

header('location: admin.php#table');
?>
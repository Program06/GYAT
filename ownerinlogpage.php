<?php
session_start();
$inloggen = "hetisjeboymilan@gmail.com";
$wachtwoord = "123";
if(isset($_POST['send'])){
if($_POST['inlog'] == $inloggen && ($_POST['wachtwoord'] == $wachtwoord)){
  $_SESSION['logged_in'] = true;  
  header('location: admin.php');
}
else{
    echo "<script type='text/javascript'>alert('E-mail of wachtwoord onjuist!');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <a href="index.php"><p>GYAT</p></a>
        <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
    </ul>
</nav>
<div class="backgroundimginlogpage">
<form class="inlogformadmin" method="POST">
Sign Up
    <input class="inputformadmin" type="email" name="inlog" class="input" placeholder="Name">
    <input class="inputformadmin" type="password" name="wachtwoord" class="input" placeholder="Password" autocomplete="off"> 
    <button class="ownerinlogbutton" name="send">Inloggen</button>
</form>
</div>

</body>
</html>
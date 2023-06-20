<!DOCTYPE html>
<html lang="nl">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
    <title>Document</title>
</head>
<body>
<nav>
        <ul>
         <li><a href="index.php">GYAT</a></li>
         <a id="iconhover" href="aboutus.php"><i class="fa-solid fa-info"></i> Over ons</a>
         <?php
         if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']){  ?>
         <a id="iconhover" href="logout.php"><i class="fa-regular fa-user"></i> logout</a>  
         <?php } else { ?>
         <a id="iconhover" href="inloggenvoorbezoekers.php"><i class="fa-regular fa-user"></i> inloggen</a>  
         <?php } ?>
         
         <a id="iconhover" href="registerenbezoekers.php"><i class="fa-regular fa-registered"></i> registeren</a> 
         <a id="iconhover" href="contact.php"><i class="fa-regular fa-address-card"></i> Contact</a>  
        


         <div class="group">
         <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
         <input placeholder="Search" type="search" class="input">
         </div>
        </ul>
        <div class="boekingenplane"><i class="fa-solid fa-plane"></i></div>
    </nav>
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
         <a id="iconhover" href="inloggenvoorbezoekers.php"><i class="fa-regular fa-user"></i> inloggen</a>  
         <a id="iconhover" href="registerenbezoekers.php"><i class="fa-regular fa-registered"></i> registeren</a> 
         <a id="iconhover" href="contact.php"><i class="fa-regular fa-address-card"></i> Contact</a>  
        


         <div class="group">
         <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
         <input placeholder="Search" type="search" class="input">
         </div>
        </ul>
        <div class="boekingenplane"><i class="fa-solid fa-plane"></i></div>
    </nav>
    
<div class="searchsectionimg">
  
<form class="searchform" method="GET" action="boek.php">
   <input class="searchinput" type="text" name="bestemming" placeholder="Bestemming" autocomplete="off">
   <input class="searchinput" name="vakantietype" placeholder="Vakantietype" autocomplete="off">
   <input class="searchinput" name="periode" placeholder="Periode" autocomplete="off">
   <button class="searchbutton" name="zoek">zoek hier!</button>
</form>

</div>
<?php 
include('db.php');
if (isset($_POST['submit'])){
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$wachtwoord = $_POST['password'];
$stmt = $pdo->prepare("INSERT INTO member (firstname, lastname, email, password) VALUES(:voornaam, :achternaam, :email, :wachtwoord)");
$stmt->bindParam(':voornaam', $voornaam);
$stmt->bindParam(':achternaam', $achternaam);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':wachtwoord', $wachtwoord);
if ($stmt->execute()){
  echo '<div class="con">';
  echo '<div class="alert">';
    echo "Welkom bij <span>GYAT</span>U bent succesvol geregistreerd!";
    echo '<button onclick="window.location.href=\'inloggenvoorbezoekers.php\';">Inloggen</button>';
    echo '</div>';
    echo '</div>';
}
}
?>
<section id="registerenpage">
<div class="formsetter">
<form class="registerenbezoekers" method="POST">
    <span class="title">Registeren</span>
    <label class="registerenbezoekerslabel" for="username">Voornaam</label>
    <input class="registereninput" type="text" id="username" name="voornaam" required="" placeholder="Voornaam">
    <label class="registerenbezoekerslabel" for="username">Achternaam</label>
    <input class="registereninput" type="text" id="username" name="achternaam" required="" placeholder="Achternaam">
    <label  class="registerenbezoekerslabel" for="email">Email</label>
    <input class="registereninput" type="email" id="email" name="email" required="" placeholder="Email">
    <label  class="registerenbezoekerslabel" for="password">Wachtwoord</label>
    <input class="registereninput" type="password" id="password" name="password" required="" placeholder="Wachtwoord">
    <button class="registerenbutton" name="submit" type="submit">Register</button>
  </form>
  <img class="extrainlogimg" src="imagehome/basicimg.jpg" alt="image anders">
  </div>
</section>
<footer>
<div class="teskteenfooter">
     <footer-tekst>
         Reisbureau per regio<br>
         Aruba Bonaire Curacao Drenthe Flevoland/n.o.polder Friesland Gelderland Groningen Limburg<br>
         Noord-brabant Noord-holland Overijssel Utrecht Zeeland Zuid-holland<br>
    </footer-tekst>
</div>
     <footer-tekst>
          © 1990-2023 by GYAT.nl, Inc.
     </footer-tekst>
     <div class="privacypolicy"><a href="pp.php">privacy policy</a></div>
<div class="ownerinlogfooter">
     <a href="ownerinlogpage.php">
         <footer-tekst>Inloggen voor owner</footer-tekst>
    </a>
</div>
<div class="rating">
  <input value="star-1" name="star-radio" id="star-1" type="radio">
  <label for="star-1">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
  </label>
  <input value="star-1" name="star-radio" id="star-2" type="radio">
  <label for="star-2">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
  </label>
  <input value="star-1" name="star-radio" id="star-3" type="radio">
  <label for="star-3">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
  </label>
  <input value="star-1" name="star-radio" id="star-4" type="radio">
  <label for="star-4">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
  </label>
  <input value="star-1" name="star-radio" id="star-5" type="radio">
  <label for="star-5">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
  </label>
</div>
</footer>
</body>
</html>
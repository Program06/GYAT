<?php
include('db.php');
include('header.php');
?>
    
<div class="searchsectionimg">
  
<form class="searchform" method="GET" action="boek.php">
   <input class="searchinput" type="text" name="bestemming" placeholder="Bestemming" autocomplete="off">
   <input class="searchinput" name="vakantietype" placeholder="Vakantietype" autocomplete="off">
   <input class="searchinput" name="periode" placeholder="Periode" autocomplete="off">
   <button class="searchbutton" name="zoek">zoek hier!</button>
</form>

</div>
<?php 
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
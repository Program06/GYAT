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
$volnaam = $_POST['volnaam'];
$email = $_POST['email'];
$bericht = $_POST['message'];
$stmt = $pdo->prepare("INSERT INTO contact (naam, email, bericht) VALUES(:volnaam, :email, :message)");
$stmt->bindParam(':volnaam', $volnaam);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $bericht);
if ($stmt->execute()){
  echo '<div class="con">';
  echo '<div class="alert">';
    echo "U heeft succesvol een bericht achtergelaten!";
    echo '</div>';
    echo '</div>';
}
}
?>


<section id="contactpage">
<div class="contact-form">
  <span class="heading">Contact Us</span>
  <form class="contactform" method="POST">
    <label class="contactlabel" for="name">Volledige naam:</label>
    <input class="contactinput" type="text" name="volnaam" required="">
    <label class="contactlabel" for="email">Email:</label>
    <input class="contactinput" type="email" id="email" name="email" required="">
    <label class="contactlabel" for="message">Bericht:</label>
    <textarea id="message" name="message" required=""></textarea>
    <button class="contactbutton" name="submit" type="submit">Verstuur</button>
  </form>
</div>
<div class="contactgegevens">
     <p class="contactgegevenstekst">
     <i class="fa-solid fa-phone"></i>Telefoonnummer: 06-23232309<br>
     <i class="fa-solid fa-envelope"></i>Email: info@GYAT.nl<br> 
     <i class="fa-solid fa-location-dot"></i>Nederland, Amsterdam, 2839DA, Gyatlaan 24
     </p>
     <img class="contactimg" src="imagehome/empirestatebuilding.jpg" alt="">
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
<?php
include('db.php');
include('header.php');
if($_SESSION['logged_in'] != true){
  header('Location: inloggenvoorbezoekers.php');
}
?>



<?php



$ID = $_GET['id'];
/*
SELECT  boeken.id as id, 
        member.mem_id as mem_id,
        member.firstname as member_firstname,
        member.lastname as member_lastname,
        reizen.id as reizen_id,
        reizen.naam as reizen_naam,
        reizen.prijs as reizen_prijs
FROM boeken 
INNER JOIN reizen ON boeken.reizen_id = reizen.id
INNER JOIN member ON boeken.users_id = member.mem_id;
WHERE id=:id


*/
$boeken = $pdo->prepare("
SELECT *
FROM reizen 
WHERE id=:id");
$boeken->bindParam(':id', $ID, PDO::PARAM_INT);
$boeken->execute();
$opgehaaldedata = $boeken->fetch(PDO::FETCH_ASSOC);






//session starten en ervoor zorgen dat persoonsgegevens er ook in staan












?>




<section id="userboeking">
<form class="registerenbezoekers" method="POST">
    <span class="title">Boeken voltooien</span>
    <label class="registerenbezoekerslabel" for="username">Voornaam</label>
    <input class="registereninput" type="text" id="username" name="voornaam" required="" placeholder="Voornaam" readonly value="<?php echo $_SESSION['firstname'];?>">
    <label class="registerenbezoekerslabel" for="username">Achternaam</label>
    <input class="registereninput" type="text" id="username" name="achternaam" required="" placeholder="Achternaam" readonly value="<?php echo $_SESSION['lastname'];?>">
    <label  class="registerenbezoekerslabel" for="email">Email</label>
    <input class="registereninput" type="email" id="email" name="email" required="" placeholder="Email" readonly value="<?php echo $_SESSION['email'];?>">
    <label  class="registerenbezoekerslabel" for="email">Reis</label>
    <input class="registereninput" type="email" id="email" name="email" required="" placeholder="Reis" readonly value="<?php echo $opgehaaldedata['naam'];?>"> 
    <label  class="registerenbezoekerslabel" for="email">Prijs</label>
    <input class="registereninput" type="email" id="email" name="email" required="" placeholder="Reis" readonly value="<?php echo $opgehaaldedata['prijs'];?>"> 
    <label class="registerenbezoekerslabel" for="datum">Datum</label>
<input class="registereninput" type="date" id="datum" name="datum" required="" min="2023-06-25">
<p id="geselecteerde-datum"></p>
    <label  class="registerenbezoekerslabel" for="email">reisID</label>
    <input class="registereninput" type="email" id="email" name="email" required="" placeholder="reisID" readonly value="<?php echo $opgehaaldedata['id'];?>">
    <button class="registerenbutton" name="submit" type="submit">Boek je reis!</button>
  </form>
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
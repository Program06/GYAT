
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




<div id="alleboekingentekst">
    <p>Gevonden resultaten</p>
</div>






<section id="alleboekingen">
    <div class="boekingen">
<!-- hier begint mijn kaart samen gemaakt met hussein -->

<?php


if (isset($_GET['zoek'])){
    $zoeken = "%".$_GET['bestemming']."%";
    $naam = $pdo->prepare("SELECT * FROM reizen WHERE naam LIKE :zoek");
    $naam->bindParam(":zoek", $zoeken);
    $naam->execute();
}

if($naam->rowCount() > 0){
    while($resulaten = $naam->fetch(PDO::FETCH_ASSOC)){
        echo"
    <div class='boekingcard'>
            <div class='imgboekingcard'>
                <img src='imagehome/$resulaten[img]' alt=''>
            </div>
            <div class='titleAndNights'>
                <p>$resulaten[naam]</p>
                <h3>7 nachten</h3>
            </div>
            <div class='allinboekingen'>
                <h1>All Inclusive</h1>
                <ul>
                    <li>Vlucht</li>
                    <li>Hotel</li>
                    <li>Ontbijt</li>
                    <li>Lunch</li>
                    <li>Diner</li>
                    <li>Tour</li>
                </ul>
            </div>
            <div class='prijsenboeken'>
                <p>€$resulaten[prijs],- <span>p.p.</span></p>
                <i class='fa-solid fa-heart heart-icon' onclick='toggleHeart(this)'></i>
                <button>boek nu!</button>
            </div>
        </div>
    ";
    }
}


?>





        


<!-- hier eindigt mijn kaart samen gemaakt met hussein -->





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
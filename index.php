

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
         <input placeholder="Search" name="bestemming" type="search" class="input">
         </div>
        </ul>
        <div class="boekingenplane"><a href="inloggenvoorbezoekers.php"><i class="fa-solid fa-plane"></i></a></div>
    </nav>






    
<div class="searchsectionimg">
<form class="searchform" method="GET" action="boek.php">
   <input class="searchinput" type="text" name="bestemming" placeholder="Bestemming" autocomplete="off">
   <input class="searchinput" name="vakantietype" placeholder="Vakantietype" autocomplete="off">
   <input class="searchinput" name="periode" placeholder="Periode" autocomplete="off">
   <button class="searchbutton" name="zoek">zoek hier!</button>
</form>
</div>







<div class="boekkortingtekst">Boek <span> NU! </span> met korting!</div>
<div class="vakantiekortingen">
<div class="kortingfoto1">
    <div class="verrereizen">Verre reizen</div>
    <div class="hoeveelbestemmingen">760 bestemmingen</div>
    <div class="vanafprijs">Vanaf €540</div>
    <div class="buttoncenter">
    <div class="vakantiebekijken">Bekijken</div>
    </div>
</div>
<div class="kortingfoto2">
<div class="verrereizen">Verre reizen</div>
    <div class="hoeveelbestemmingen">324 bestemmingen</div>
    <div class="vanafprijs">Vanaf €249</div>
    <div class="buttoncenter">
    <div class="vakantiebekijken">Bekijken</div>
    </div>
</div>
<div class="kortingfoto3">
<div class="verrereizen">Verre reizen</div>
    <div class="hoeveelbestemmingen">158 bestemmingen</div>
    <div class="vanafprijs">Vanaf €820</div>
    <div class="buttoncenter">
    <div class="vakantiebekijken">Bekijken</div>
    </div>
</div>
</div>
<div class="volgonstekst">
    <div class="backgroundtekst">
        Volg ons voor de goedkoopste reizen
    </div>
</div>
<div class="extratekst">
    <div class="extrateksten">Goedkoop reizen</div>
    <div class="extrateksten">Verzekerd reizen</div>
    <div class="extrateksten">Stressloos reizen</div>
    <div class="extrateksten">Gezellig reizen</div>
</div>
<div class="extraicon">
    <div class="extraicons"><i class="fa-solid fa-check"></i></div>
    <div class="extraicons"><i class="fa-solid fa-check"></i></div>
    <div class="extraicons"><i class="fa-solid fa-check"></i></div>
    <div class="extraicons"><i class="fa-solid fa-check"></i></div>
</div>
<div class="test">
<div class="homeimgtwee">
    <div class="imgtweeteksteen">Reizen kunt u met GYAT</div>
    <div class="imgtweeteksttwee">Bekijk ook onze populaire bestemmingen</div>

</div>
</div>

<div id="alleboekingentekst">
    <p>Bekijk nu al onze boekingen</p>
</div>






<section id="alleboekingen">
    <div class="boekingen">
<!-- hier begint mijn kaart samen gemaakt met hussein -->

<?php


include('db.php');




$ophalen = $pdo->query("SELECT * FROM reizen");

while($row = $ophalen->fetch(PDO::FETCH_ASSOC)){
    echo"
    <div class='boekingcard'>
            <div class='imgboekingcard'>
                <img src='imagehome/$row[img]' alt=''>
            </div>
            <div class='titleAndNights'>
                <p>$row[naam]</p>
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
                <p>€$row[prijs],- <span>p.p.</span></p>
                <i id='likebutton' class='fa-solid fa-heart heart-icon' onclick='toggleHeart(this)'></i>
                <a href=''>/boek nu!</a>
            </div>
        </div>
    ";
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
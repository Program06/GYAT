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

 




if(isset($_POST['send'])){

    if(empty($_POST['wachtwoord']) && empty($_POST['email']))

    {

        echo"<script>alert('Naam en wachtwoord zijn leeg')</script>";

    }

    // if(empty($_POST['wachtwoord']) || empty($_POST['email']))

    // {

    //     echo"<script>alert('Naam of wachtwoord zijn leeg')</script>";

    // }

    else{

        $username = $_POST['email'];

        $password = $_POST['wachtwoord'];

        $stmt = $pdo->prepare('SELECT * FROM member WHERE email = :email AND password = :wachtwoord');

        $stmt->bindParam(':email', $username);
        $stmt->bindParam(':wachtwoord', $password);
        $stmt->execute();
        $result = $stmt->fetch();

        if ($result) {

            $_SESSION['mem_id'] = $result['mem_id'];
            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['lastname'] = $result['lastname'];
            $_SESSION['email'] = $result['email'];

            $_SESSION['logged_in'] = true;

            header('location: loginindex.php');

            exit();

        }

        else{

            echo"<script>alert('naam of wachtwoord bestaan niet')</script>";

        }

    }  

}

?>




<section id="inlogpagebezoekers">
<div class="formsetter">
<form class="inloggenbezoekers" method="POST">
Inloggen
    <input class="emailbezoekersinput" type="text" name="email" size="40" maxlength="40" class="input" placeholder="Naam" autocomplete="off">
    <input class="emailbezoekersinput" type="password" name="wachtwoord" size="40" maxlength="40" class="input" placeholder="Wacthwoord" autocomplete="off"> 
    <button class="inloggenbezoekersbutton"name="send">Submit</button>
    <button class="inloggenbezoekersbutton"><a href="registerenbezoekers.php">registeren</a></button>
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
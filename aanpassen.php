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
        <a href="admin.php"><i class="fa-solid fa-arrow-left"></i> Terug</a>
        <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
    </ul>
</nav>
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
                <p>€$row[prijs],-</p>
                <a id='bewerken' href='aanpassen2.php?id=$row[id]'>aanpassen</a>
            </div>
        </div>
    ";
}


?>





        


<!-- hier eindigt mijn kaart samen gemaakt met hussein -->





    </div>
</section>





</body>
</html>
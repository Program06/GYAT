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

<?php 
include('db.php');
if(isset($_POST['toevoegen'])){
    $locatie = $_POST['locatie'];
    $prijs = $_POST['prijs'];
    $img = $_FILES['locatieimg'];
    $IMGLOCATION = $_FILES['locatieimg']['tmp_name'];
    $IMGNAAM = $_FILES['locatieimg']['name'];
    $IMGUP = $IMGNAAM;
  
    $stmt = $pdo->prepare("INSERT INTO reizen (naam, prijs, img) VALUES (:naam, :prijs, :img)");
    $stmt->bindParam(':naam', $locatie);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->bindParam(':img', $IMGUP);
    $stmt->execute();
    if(move_uploaded_file($IMGLOCATION,'C:\xampp\htdocs\GYAT\imagehome\\'.$IMGNAAM )){
        header('Location: admin.php');
    }else{
        echo"<script type='text/javascript'>alert('Dit is niet gelukt ');</script>";
    }

}


?>

<section class="toevoegenpage">
<div class="inlogblock">
<form class="toevoegenform" method="POST"  enctype="multipart/form-data">
<label class="toevoegenlabel" for="">Locatie</label>
<input class="toevoegeninput" type="locatie" name="locatie" autocomplete="off" placeholder="Netherlands">
<label class="toevoegenlabel" for="">Prijs</label>
<input class="toevoegeninput"  type="prijs" name="prijs" placeholder="00,00">
<label class="toevoegenlabel" for="">Image</label>
<input class="toevoegeninputfile" type="file" name="locatieimg" id="fileToUpload">
 

<input class="toevoegeninput" type="submit" id="beheerder" name="toevoegen" value="toevoegen">
</form>

</div>






</section>


</body>
</html>
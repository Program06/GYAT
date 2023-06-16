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
        <a href="aanpassen.php"><i class="fa-solid fa-arrow-left"></i> Terug</a>
        <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
    </ul>
</nav>


<?php 
include('db.php');
$ID =  $_GET['id'];
$update = $pdo->prepare("SELECT * FROM reizen WHERE id=:id"); 
$update->Bindparam(':id', $ID, PDO::PARAM_INT);
$update->execute();

$info = $update->fetch(PDO::FETCH_ASSOC);
?>

<?php 

if(isset($_POST['toevoegen'])){
    $ID = $_POST['id'];
    $locatie = $_POST['locatie'];
    $prijs = $_POST['prijs'];
    $locatieimg = $_FILES['locatieimg'];
    $IMGLOCATION = $_FILES['locatieimg']['tmp_name'];
    $IMGNAAM = $_FILES['locatieimg']['name'];
    $IMGUP = $IMGNAAM;
      if($locatie == ''){
        $message = 'Gerecht kan niet leeg zijn';
    }
    if($prijs == ''){
        $message = 'Prijs kan niet leeg zijn';
    }
    if($locatieimg == ''){
        $message = 'Image kan niet leeg zijn';
    }
    $stmt = $pdo->prepare("UPDATE reizen SET naam=:naam, prijs=:prijs, img=:img WHERE id=:id");
    $stmt->bindParam(':naam', $locatie);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->bindParam(':img', $IMGUP);
    $stmt->bindParam(':id', $ID);
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
<label class="toevoegenlabel" for="">ID</label>
<input class="toevoegeninput" type="text" name="id" value="<?php  echo $info['id'];?>" readonly>
<label class="toevoegenlabel" for="">Locatie</label>
<input class="toevoegeninput" type="text" name="locatie" autocomplete="off" value="<?php echo $info['naam'];?>">
<label class="toevoegenlabel" for="">Prijs</label>
<input class="toevoegeninput" type="text" name="prijs" value="<?php  echo $info['prijs'];?>">
<label class="toevoegenlabel" for="">Image</label>
<input class="toevoegeninput" type="file" name="locatieimg" id="fileToUpload">
 

<input class="toevoegeninput" type="submit" id="beheerder" name="toevoegen" value="toevoegen">
</form>

</div>






</section>




</body>
</html>
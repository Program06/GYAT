
<?php

include('db.php');
?>
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
        <a href="ownerinlogpage.php"><i class="fa-solid fa-arrow-left"></i> Terug</a>
        <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
    </ul>
</nav>
    <div class="driekaarten">
      <div class="adminbuttons">
        <p id="adminpanel">Admin panel</p>
    <button class="adminpagebuttons">
  <span> <a class="buttonadmin" href="verwijderen.php"> Verwijderen<i class="fa-solid fa-trash-can"></i></a>
  </span>
</button>
<button class="adminpagebuttons">
  <span> <a class="buttonadmin" href="toevoegen.php"> Toevoegen<i class="fa-solid fa-plus"></i></a>
  </span>
</button>
<button class="adminpagebuttons">
  <span> <a class="buttonadmin" href="aanpassen.php"> Aanpassen<i class="fa-solid fa-file-invoice"></i></a>
  </span>
</button>
<button class="adminpagebuttons">
  <span> <a class="buttonadmin" href="index.php#alleboekingentekst">alle Locaties<i class="fa-solid fa-location-dot"></i></a>
  </span>
</button>
</div>

</div>
<?php
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
SELECT  boeken.id as id, 
        member.mem_id as mem_id,
        member.firstname as member_firstname,
        member.lastname as member_lastname,
        member.email as member_email,
        reizen.id as reizen_id,
        reizen.naam as reizen_naam,
        reizen.prijs as reizen_prijs
FROM boeken 
INNER JOIN reizen ON boeken.reizen_id = reizen.id
INNER JOIN member ON boeken.users_id = member.mem_id;
");
$boeken->execute();
$opgehaaldedata = $boeken->fetchAll();
?>

<div id="table">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>member ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>E-mail</th>
            <th>Reis ID</th>
            <th>Reisnaam</th>
            <th>Reisprijs</th>
            <th>Accept</th>
            <th>delete</th>
          
        </tr>
    </thead>
    <tbody>
        <?php foreach ($opgehaaldedata as $data): ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['mem_id']; ?></td>
                <td><?php echo $data['member_firstname']; ?></td>
                <td><?php echo $data['member_lastname']; ?></td>
                <td><?php echo $data['member_email']; ?></td>
                <td><?php echo $data['reizen_id']; ?></td>
                <td><?php echo $data['reizen_naam']; ?></td>
                <td><?php echo $data['reizen_prijs']; ?></td>
                
                <td><button class="tablebuttonaccept">accept</button></td>
                <td><button class="tablebuttondelete"><a href="boekingdelete.php?id=<?php echo $data['id']; ?>">delete</a></button></td>
                
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
        </div>

</body>
</html>
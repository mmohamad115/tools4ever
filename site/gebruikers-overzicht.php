<?php

require 'database.php';



//de sql query
$sql = "SELECT * FROM users";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn,$sql);


$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>gebruikers</title>
</head>
<body>
    <h1>Overzicht</h1>
    <div class="tabel">
        <table>
    
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Adress</th>
                <th>Plaats</th>
                <th>E-mail</th>
                <th>Telefoon_nummer</th>
                <th>Wachtwoord</th>
            </tr>
            <?php foreach($all_users as $user): ?>
            <tr>
                <td><?php echo $user["voornaam"]?></a></td>
    
                <td><?php echo $user["achternaam"] ?></td>
    
                <td><?php echo $user["adress"] ?></td>
    
                <td><?php echo $user["plaats"] ?></td>
    
                <td><?php echo $user["e_mail"] ?></td>

                <td><?php echo $user["telefoon_nummer"] ?></td>

                <td><?php echo $user["wachtwoord"] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
</body>
</html>
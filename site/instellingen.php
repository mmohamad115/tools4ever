<?php

session_start();



$id = $_SESSION['userid'];


require "database.php";

$sql = "SELECT * FROM users INNER JOIN user_settings ON user_settings.user_id = users.id WHERE users.id = $id ";

$result = mysqli_query($conn, $sql);

$gebruiker_gegevens = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $gebruiker_gegevens['backgroundColor']?>;
        }
    </style>
</head>
<body>`
    <h1>Admin instellingen</h1>
    <div>
        <p>achtergrond: <?php echo $gebruiker_gegevens ['backgroundColor']?></p>
    </div>
    <div>
        <p>thema: <?php echo $gebruiker_gegevens ['theme']?></p>
    </div>
</body>
</html>
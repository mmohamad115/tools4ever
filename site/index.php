<?php
require "database.php";



$sql = "SELECT * FROM tools";


$result = mysqli_query($conn,$sql);


$all_tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="verwerk-tool.php" method="post">
        <div>
            <input type="text" placeholder="Zoek.." name = "zoekveld">
            <button type="submit">Zoek</button>
        </div>
    </form>
</body>
</html>
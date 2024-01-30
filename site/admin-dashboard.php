<?php
require 'database.php';

// opdracht 1 
$sql =  "SELECT COUNT(*) AS total_employees FROM users WHERE role = 'employee'";

$result = mysqli_query($conn, $sql);

$data1 = mysqli_fetch_assoc($result);
// opdracht 2

$sql = "SELECT AVG(tool_price) AS average_price FROM tools";

$result = mysqli_query($conn, $sql);

$data2 = mysqli_fetch_assoc($result);

// opdrachtt 3

$sql = "SELECT AVG(tool_price) AS average_price_per_category, tool_category FROM tools GROUP BY tool_category";

$result = mysqli_query($conn, $sql);

$data3 = mysqli_fetch_all($result, MYSQLI_ASSOC);





session_start();

if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit;
}


if ($_SESSION['role'] != "administrator") {
    header("location: store.php");
    exit;
}
require 'vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
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
    <h1>Welkom beste administrator</h1>
    <div>
        De datum van volgende week is .. <?php echo $dt->addDays(9); ?>
    </div>
    <div>
        <p>aantal employee: <?php echo $data1['total_employees']?></p>
    </div>
    <div>
        <p>gemiddelde prijs van: <?php echo $data2['average_price']?></p>
    </div>
    <div>
        <?php foreach ($data3 as $avg):?>
            <tr>
                <td>
                    <?php echo $avg ['tool_category']?>
                </td>
                <td>
                    <?php echo $avg ['average_price_per_category']?>
                </td>
            </tr>
    </div><?php endforeach ?>
    <div>
        <a href="instellingen.php">Jouw thema</a>
    </div>
</body>
</html>
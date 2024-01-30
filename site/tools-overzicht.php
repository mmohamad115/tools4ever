<?php

require 'database.php';



//de sql query
$sql = "SELECT * FROM tools";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn,$sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Overzicht</h1>
    <div class="tabel">
        <table>
    
            <tr>
                <th>product nummer</th>
                <th>naam</th>
                <th>categorie</th>
                <th>prijs</th>
                <th>merk</th>
            </tr>
            <?php foreach($all_tools as $tool): ?>
            <tr>
                <td><a href="tool-detail.php?id=<?php echo $tool["tool_id"]?>"><?php echo $tool["tool_id"]?></a></td>
    
                <td><?php echo $tool["tool_name"] ?></td>
    
                <td><?php echo $tool["tool_category"] ?></td>
    
                <td><?php echo $tool["tool_price"] ?></td>
    
                <td><?php echo $tool["tool_brand"] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
</body>
</html>

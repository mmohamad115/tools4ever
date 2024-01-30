<?php
require 'database.php';


$id = $_GET['id'];
$sql = "SELECT * FROM tools WHERE tool_id = $id";

$result = mysqli_query($conn,$sql);
  //zolang een rij gevuld kan worden wordt de loop uitgevoerd
$tool = mysqli_fetch_assoc($result);




// Haal het resultaat uit het geheugen
mysqli_free_result($result);

mysqli_close($conn);

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
              <tr>
                  <td><?php echo $tool['tool_id'];?></td>
      
                  <td><?php echo $tool["tool_name"] ?></td>
      
                  <td><?php echo $tool["tool_category"] ?></td>
      
                  <td><?php echo $tool["tool_price"] ?></td>
      
                  <td><?php echo $tool["tool_brand"] ?></td>
              </tr>
          </table>
      </div>
</body>
</html>


<?php



// var_dump($_SERVER["REQUEST_METHOD"]);


// die;

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    // echo "verkeerde request method gebruikt";
    include '405.php';
    exit;
}


$naam = $_POST['naamProduct'];
$catagorie = $_POST['catagorieProduct'];
$prijs = $_POST['prijProduct'];
$merk = $_POST['merkProduct'];

require 'database.php';

$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) 
                    VALUES ('$naam','$catagorie','$prijs','$merk')";



if(mysqli_query($conn, $sql)){
    header("location: tools-overzicht.php");
    exit;
}
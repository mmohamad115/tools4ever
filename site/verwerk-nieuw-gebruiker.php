<?php


if($_SERVER["REQUEST_METHOD"] !== "POST"){
    exit;
}

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$adress = $_POST['adress'];
$plaats = $_POST['plaats'];
$email = $_POST['email'];
$telefoon_nummer = $_POST['telefoon_nummer'];
$wachtwoord = $_POST['wachtwoord'];

$hashed_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);



require 'database.php';

$sql = "INSERT INTO users (voornaam, achternaam, adress, plaats, e_mail, telefoon_nummer, wachtwoord) 
                    VALUES ('$voornaam','$achternaam','$adress','$plaats','$email','$telefoon_nummer','$hashed_wachtwoord')";

if(mysqli_query($conn, $sql)){
    header("location: gebruikers-overzicht.php");
    exit;
}

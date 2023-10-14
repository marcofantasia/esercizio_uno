<?php
$servername = "localhost"; 
$username = "root"; 
$password = "rootroot"; 
$database = "users"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}
?>

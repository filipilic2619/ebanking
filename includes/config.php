<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ebanking";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Greska: " . $conn->connect_error);
}
?>
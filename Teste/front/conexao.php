<?php
$servername = "192.168.100.20";
$username = "ics";
$password = "ics";
$dbname = "siteics";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
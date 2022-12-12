<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "mahasiswa";
$connection = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
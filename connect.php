<?php
$servername ="mysql-piotrkopec.alwaysdata.net";
$username = "232845";
$password = "Piotrek1825";
$dbname = "piotrkopec_1";

$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
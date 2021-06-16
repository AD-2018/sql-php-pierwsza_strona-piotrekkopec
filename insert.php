<?php
require_once("connect.php");
$sql="INSERT INTO pracownik (imie, dzial, zarobki, data_urodzenia)
VALUES ('".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";

?>
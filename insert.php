<?php
require_once("connect.php");
$sql="INSERT INTO pracownik (id_pracownicy, imie, dzial, zarobki, data_urodzenia)
VALUES ('".$_POST['id']."', '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";

?>
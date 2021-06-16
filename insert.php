<?php
require_once($conn, $sql);
$sql="INSERT INTO country (id_pracownicy, imie, dzial, zarobki, data_urodzenia)
VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";
?>
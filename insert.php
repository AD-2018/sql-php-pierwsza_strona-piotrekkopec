<?php
require_once("connect.php");
$sql="INSERT INTO pracownik (id_pracownicy, imie, dzial, zarobki, data_urodzenia)
VALUES ( '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";
if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
    header('Location: https://mojastronaa.herokuapp.com/Strona1.php');
  } else {
  //informacja o ewentualnych błędach
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
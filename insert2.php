<?php
require_once("connect.php");
$sql="INSERT INTO country ('Name', Continent, Region, 'Population')
VALUES('".$_POST['Name']."','".$_POST['Continent']."','".$_POST['Region']."','".$_POST['Population']."' )";
if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
    header('Location: https://mojastronaa.herokuapp.com/Strona3.php');
  } else {
  //informacja o ewentualnych błędach
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
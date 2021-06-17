<?php
require_once("connect.php");
$sql="INSERT INTO country ('Name', Continent, Region, 'Population')
VALUES('".$_POST['Name']."','".$_POST['Continent']."','".$_POST['Region']."','".$_POST['Population']."' )";
?>
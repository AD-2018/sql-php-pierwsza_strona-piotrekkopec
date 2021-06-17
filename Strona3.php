<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="grid.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona3</title>
</head>
<body>
<div class="container">
<div class="a"></div>
<div class="b"></div>
<div class="c"></div>
<div class="d">
<form action="insert2.php" method="POST">
<input type="text" name="Name">
<input type="text" name="Continent">
<input type="text" name="Region">
<input type="text" name="Population">
<input type="submit" value="Dodaj">
</form>
<?php
require_once("connect.php");
$sql="SELECT * FROM country WHERE Continent='Europe'";
$result=mysqli_query($conn, $sql);
echo("<table border='1'>");
echo('<th>Name</th><th>Continent</th><th>Region</th><th>Population</th>');
while($row=mysqli_fetch_assoc($result)){
    echo('<tr>');
    echo('<td>'.$row['Name'].'</td><td>'.$row['Continent'].'</td><td>'.$row['Region'].'</td><td>'.$row['Population'].'</td>');
    echo('</tr>');
}
echo('</table>');
?>
</div>
</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="grid.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona1</title>
</head>
<body>
<div class="container">
    <div class="a"></div>
    <div class="b"></div>
    <div class="c"></div>
    <div class="d">
<form action="insert.php" method="POST">
<input type="text" name="imie">
<input type="number" name="dzial">
<input type="number" name="zarobki">
<input type="date" name="data urodzenia">
<input type="submit" value="Dodaj">
</form>
<?php
require_once("connect.php");
$sql="SELECT * from pracownik";
$result=mysqli_query($conn, $sql);
echo("<table border='1'>");
echo('<th>ID</th><th>Imie</th><th>Dzial</th><th>Zarobki</th><th>Data Urodzenia</th>');
while($row=mysqli_fetch_assoc($result)){
    echo('<tr>');
    echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td>');
    echo('</tr>');
}
echo('</table>');

?>
</div>
</div> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="grid.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<div class="container">
      <div class="a">
      <form action="index.php"></form>
      <input type="text">
      <input type="text">
      <input type="submit" values="dodaj">
      </div>
      <div class="b">b</div>
      <div class="c">c</div>
      <div class="d">
      <?php
      require_once("connect.php");
      $sql = "SELECT * FROM pracownik where dzial=2";
      $result= mysqli_query($conn, $sql);
      echo("table border='1'>");
      echo('<th>Imie</th><th>zarobki</th><th>Dzial</th><th>ID</th>');
      while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['id_pracownicy'].'</td>');
            echo('</tr>');
      }
      echo("</table>");
      ?>
      </div>
</div>

   
</body>
</html>

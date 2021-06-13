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

      <?php
      require_once("conn.php");
      $sql="SELECT * from pracownicy";
      $result= mysqli_query($conn, $sql);
      echo("table border='1'>");
      echo("<th>Id</th><th>Imie</th>");
      while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td>'.'<td>'.$row['imie'].'</td>');
            echo('</tr>');
      }
      echo("</table>");
      ?>
      </div>
      <div class="b">b</div>
      <div class="c">c</div>
      <div class="d">d</div>
</div>

   
</body>
</html>
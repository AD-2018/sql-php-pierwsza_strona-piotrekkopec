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

      $sql = "SELECT * FROM pracownik";

      echo($sql);

      $result = mysqli_query($conn, $sql);

      echo('<table border="1">');

          echo('<th>Id</th><th>Imie</th><th>dzial</th><th>zarobki</th><th>data urodzenia</th>');

          while($row=mysqli_fetch_assoc($result)){

              echo('<tr>');

              echo('<td>'.$row['id_pracownicy'].'</td>'.'<td>'.$row['imie'].'<td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td>');
              
              echo('</tr>');
          }
          echo('</table>');
      ?>
      </div>
</div>

   
</body>
</html>

<?php
include 'connect.php';
$förnamn=$_POST['förnamn'];
$stmt=$db->prepare("SELECT * FROM tbladressbok WHERE förnamn LIKE ?");
$stmt->bindValue(1,"$förnamn%");
$stmt->execute();

?>
<!DOCTYPE html>

<html>
  <head>
    <title>Leta adresser </title>
    <meta charset="utf-8" />
  <style>
    table,tr,td, th{
      border:1px solid black;
      border-collapse: collapse;
      padding:2px 10px 2px 10px;
    }
  </style>
  </head>
  
  <body>
    <table border=1>
      <tr>
        <th>ID</th><th>Förnamn</th><th>Efternamn</th>
        <th>Postnummer</th><th>Ort</th><th>Telefon</th>
      </tr>
  <?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
          $id=htmlentities($row['id']);
          $förnamn=htmlentities($row["förnamn"]);
          $efternamn=htmlentities($row["efternamn"]);
          $postnummer=htmlentities($row["postnummer"]);
          $ort=htmlentities($row["ort"]);
          $telefon=htmlentities($row["telefon"]);
      echo "<tr>";
      echo "<td><a href='lista.php?id=$id'>ta bort</a> </td>";
      echo "<td> $förnamn </td>";
      echo "<td> $efternamn </td>";
      echo "<td> $postnummer</td>";
      echo "<td> $ort </td>";
      echo "<td> $telefon </td>";
      echo "</tr>";
    }
      ?>
    </table>
        <a href="index.php">tillbaka</a>
  </body>
</html>
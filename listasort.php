<?php

  include "connect.php";
  if (isset($_GET["id"])){
  $idet=$_GET["id"];
  $stmt=$db->prepare("DELETE FROM tbladressbok WHERE id=?");
  $stmt->bindParam(1,$idet);
  $stmt->execute();
  }
  $stmt=$db->query("SELECT * FROM tbladressbok");
  $stmt->execute();

?>
<!DOCTYPE html>

<html>
  <head>
    <title>Mormors AdressBok</title>
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
    <form action="lista.php" method="post">
      <select name="sort">
        <option value="stiför">Sortera stigande på förnamn</option>
        <option value="fallför">Sortera fallande på förnamn</option>
        <option value="stiefter">Sortera stigande på efternamn</option>
        <option value="fallefter">Sortera fallande på efternamn</option>
      </select>
      <input type="submit" name="submit" value="sortera">
    </form>
    <table>
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





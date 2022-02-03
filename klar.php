<?php

$förnamn=$_POST["förnamn"];
$efternamn=$_POST["efternamn"];
$postnummer=$_POST["postnummer"];
$ort=$_POST["ort"];
$telefon=$_POST["telefon"];
include 'connect.php';

$stmt=$db->prepare("INSERT INTO tbladressbok (förnamn,efternamn,postnummer,ort,telefon)
                    VALUES(?,?,?,?,?)");

$stmt->bindValue(1,$förnamn);
$stmt->bindValue(2,$efternamn);
$stmt->bindValue(3,$postnummer);
$stmt->bindValue(4,$ort);
$stmt->bindValue(5,$telefon);
$stmt->execute();

echo "Ny Personen är nu registrerad!<br>";
echo "<a href='index.php'>tillbaka</a>";

?>
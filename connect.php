<?php
try{
$db=new PDO('mysql:host=localhost;dbname=mormorab;charset=utf8','root','');
//var_dump($db);
}

catch (Exception $e){
  echo "<h2>Ett fel inträffade</h2>";
  //echo $e->getMessage();
}
?>
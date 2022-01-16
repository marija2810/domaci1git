<?php

$sifra = $_GET['sifra'];
$sifra = trim($sifra);

if($sifra == 'pozitif'){
  include 'dodaj.php';
  include 'update.php';
}else{
  echo ("<h3> Pogrešna šifra! Pokušajte ponovo! </h3> <br/> ");
  
}


 ?>

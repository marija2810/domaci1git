<?php
include 'konekcija.php';

$sql = "select * from kategorija";

$rezultat = $konekcija->query($sql);


 ?>
 <button class="btn btn-success" 
 onclick="popuniProizvode(0); sessionStorage.setItem('broj',0)">Sve kategorije</button>
<?php
while($red = $rezultat->fetch_assoc()){
?>
 <button class="btn btn-success" 
 onclick="popuniProizvode(<?php echo $red['kategorijaID'] ?>);sessionStorage.setItem('broj', <?php echo $red['kategorijaID'] ?>);
">
 <?php echo $red['nazivKategorije'] ?></button>

<?php

}



 ?>

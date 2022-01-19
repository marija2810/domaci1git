<?php include 'konekcija.php'; 
?>

<h1 class="text-center">Izmeni cenu proizvoda</h1>

<form method="POST" action="izmeni.php">
	  <label for="naziv">Broj proizvoda</label>
 
 <select name="brojProizvodaUpd" class="form-control">
    <?php
    $sql = "select * from proizvod";

    $rezultat = $konekcija->query($sql);
    while($red = $rezultat->fetch_assoc()){
     ?>
     <option><?php echo $red['proizvodID']; ?></option>
     <?php
   }
      ?>

  </select>
 
  <label for="cena">Cena</label>
  <input type="number" name="cena" id="cena" class="form-control" placeholder="Unesite cenu">
  
  <label for="submit"></label>
  <input type="submit" name="submit" id="submit" class="form-control btn-success" value="Izmeni proizvod">

</form>

<br><br><br><br>

<script type="text/javascript" src="provera.js"></script>

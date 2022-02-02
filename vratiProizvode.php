<?php
include 'konekcija.php';

$id = $_GET['id'];
$order = $_GET['order'];
$kolona = $_GET['kolona'];


  $sql = "SELECT * FROM proizvod p 
  JOIN kategorija k ON k.kategorijaID = p.kategorijaID 
  JOIN velicina v ON p.velicinaID = v.velicinaID 
  order by $kolona $order";



$rezultat = $konekcija->query($sql) or die($konekcija->error);


 ?>
 <table class="table table-hover">
   <thead>
   <tr>
     <th>Kategorija</th>
     <th>Naziv</th>
     <th>Veličina</th>
     <th>Cena</th>
   </tr>
 </thead>
 <tbody>

<?php
while($red = $rezultat->fetch_assoc()){
?>
<tr>

  <td><?php echo $red['nazivKategorije']; ?></td>
  <td><?php echo $red['naziv']; ?></td>
  <td><?php echo $red['nazivVelicine']; ?></td>
  <td><?php echo $red['cena']; ?> rsd</td>
</tr>
<?php

}
 ?>

</tbody>
</table>

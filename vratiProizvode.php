<?php
include 'konekcija.php';

$id = $_GET['id'];
$order = $_GET['order'];
$kolona = $_GET['kolona'];

if($id == 0){
  $sql = "SELECT * FROM proizvod p 
  JOIN kategorija k ON p.kategorijaID = k.kategorijaID 
  JOIN velicina v ON p.velicinaID = v.velicinaID 
  order by $kolona $order";
}else{
  $sql = "SELECT * FROM proizvod p 
  JOIN kategorija k ON p.kategorijaID = k.kategorijaID 
  JOIN velicina v ON p.velicinaID = v.velicinaID where k.kategorijaID=$id  
  order by $kolona $order";
}


$rezultat = $konekcija->query($sql);


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

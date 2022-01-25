<?php
if (!isset ($_GET["proizvodID"])){
echo "Parametar nije prosleđen!";
} else {
$proizvodID=$_GET["proizvodID"];
include "konekcija.php";

$sql="SELECT * FROM proizvod WHERE proizvodID='".$proizvodID."'";
$rezultat = $konekcija->query($sql);
if ($rezultat->num_rows!=0){
echo "0";
} else {
echo "1";
}
$konekcija->close();
}
?>

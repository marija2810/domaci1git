<?php

include 'konekcija.php';

class Poruka{
		private $poruka;
		public function getPoruka()
		{
			return $this->poruka;
		}
		public function setPoruka($porukica){
			$this->poruka = $porukica;
		}
	}
	
	$poruka=new Poruka('');

$proizvodID = $_POST['proizvodID'];
$naziv = $_POST['naziv'];
$cena = $_POST['cena'];
$kategorija = $_POST['kategorija'];
$velicina = $_POST['velicina'];


$proizvodID = stripslashes($proizvodID);
$naziv = stripslashes($naziv);
$cena = stripslashes($cena);
$kategorija = stripslashes($kategorija);
$velicina = stripslashes($velicina);

if($konekcija->query("INSERT INTO proizvod(proizvodID,naziv,cena,kategorijaID,velicinaID) VALUES($proizvodID,'$naziv',$cena,$kategorija,$velicina)")){
	
	$poruka->setPoruka("Uspešno dodat proizvod!");
	echo "<script>
    alert('".$poruka->getPoruka()."');
	window.location.href='cenovnik.html';
</script>";
}else{
	$poruka->setPoruka("Greska pri dodavanju proizvoda.");
  echo "<script>
    alert('".$poruka->getPoruka()."');
	window.location.href='noviProizvod.html';
</script>";
}

 ?>

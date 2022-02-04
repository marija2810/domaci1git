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

$proizvodID = $_POST['brojProizvodaUpd'];


if($konekcija->query("DELETE from `proizvod` WHERE `proizvodID` = $proizvodID")){

    $poruka->setPoruka("Uspešno obrisan proizvod!");
    echo "<script>
    alert('".$poruka->getPoruka()."');
	window.location.href='cenovnik.html';
</script>";
}else{
    $poruka->setPoruka("Greška pri brisanju proizvoda");
    echo "<script>
    alert('".$poruka->getPoruka()."');
	window.location.href='noviProizvod.html';
</script>";
}

?>

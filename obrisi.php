<?php include 'konekcija.php';
?>

<h1 class="text-center">Obriši proizvod</h1>

<form method="POST" action="delete.php">
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



    <label for="submit"></label>
    <input type="submit" name="submit" id="submit" class="form-control btn-success" value="Obriši proizvod">

</form>

<br><br><br><br>

<script type="text/javascript" src="provera.js"></script>

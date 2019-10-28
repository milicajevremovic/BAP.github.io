<?php
 include 'sesija.php';

$naslov = $_GET['naslov'];

$upit = "SELECT * FROM sadrzaj WHERE naslov LIKE '%" . $naslov . "%'";
$rez = $konekcija->query($upit);
?>

<div class="row">
<?php
while($red = $rez->fetch_object()){
?>
<div class="col-md-6">
  <h1><?= $red->naslov ?> </h1>
  <p><?= $red->opis ?> </p>
  <img src="slike/<?= $red->slika ?>" class="img img-thumbnail">
</div>
<?php
}


 ?>
</div>

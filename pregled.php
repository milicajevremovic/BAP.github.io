<?php include 'sesija.php';
$poruka = "";
if(isset($_POST['unos'])){
	$ime = trim($_POST['ime']);
	$sifra = trim($_POST['sifra']);

	$korisnik = new Korisnik();
	$korisnik->username = $ime;
	$korisnik->sifra = $sifra;

	if($korisnik->login($konekcija)){
		$poruka = "Uspešno ste se ulogovali!";
	}else{
		$poruka = "Neušpesno ste se ulogovali!";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<header>
	<div class="nav">
	<img src="2.png" class="logo">

	<?php include 'meni.php'; ?>
	</div>
</header>
<section>
	<div class="container">
		<h1 class="text-center"> Mala galerija slika - "How ART you today?" </h1>
		<hr>
		<h3 class="text-center" style="background-color:rgba(255, 153, 255, 0.3);"><i>Pretražite sadržaj:</i></h3>

		<input type="text" id="naslov" placeholder="Pretrazite po naslovu ili delu naslova" class="form-control">

		<hr>
		<button class="btn btn-success" onclick="pretrazi()" style="background-color: #ff3c64; border-color: #fff;">Pretraži </button >

		<div id="rezultatPretrage">

		</div>

	</div>


</section>

<?php
$upit = "SELECT * FROM sadrzaj";
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

<?php include 'footer.php'?>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<script>
	function pretrazi(){
		$.ajax({
			url: "rezultatPretrage.php",
			data: {naslov: $("#naslov").val()},
			success: function(data){
				$("#rezultatPretrage").html(data);
			}
		});
	}
</script>
</body>
</html>

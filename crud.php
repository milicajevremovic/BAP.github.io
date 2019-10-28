<?php include 'sesija.php';
$poruka = "";
if(isset($_POST['izmenaNaslova'])){
	$naslov = trim($_POST['naslovNovi']);
	$sadrzaj = trim($_POST['sadrzajIzmena']);

	$upit = "UPDATE sadrzaj SET naslov = '$naslov' WHERE sadrzajID = $sadrzaj ";

	if($konekcija->query($upit)){
		$poruka = "Uspešno ste izmenili naslov sadržaja";
	}else{
		$poruka = "Neuspešno ste izmenili naslov sadržaja";
	}
}

if(isset($_POST['brisanje'])){
	$sadrzaj = trim($_POST['sadrzajBrisanje']);

	$upit = "DELETE FROM sadrzaj WHERE sadrzajID = $sadrzaj ";

	if($konekcija->query($upit)){
		$poruka = "Uspešno ste obrisali sadržaj";
	}else{
		$poruka = "Neuspešno ste obrisali sadržaj";
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
		<h1 class="text-center" style="background-color:rgba(255, 153, 255, 0.3);"> CRUD OPERACIJE - ažuriranje sadržaja </h1>
		<h4> <?= $poruka ?> </h4>
		<hr>
		<h3 class="text-center"><i>Unos novog sadržaja:</i></h3>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
			<label for="naslov">Naslov </label>
			<input type="text" class="form-control" name="naslov" id="naslov">
			<label for="opis">Opis </label>
			<textarea rows="10" class="form-control" name="opis" id="opis"></textarea>
			<label for="fileToUpload">Slika </label>
			<input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
			<hr>
			<input type="submit" name="unosSadrzaja" value="Unesi" class="form-control btn-primary" style="background-color: #ff3c64; border-color: #fff;">
		</form>

		<hr>
		<h3 class="text-center"><i>Izmena sadrzaja:</i></h3>
		<form method="POST" action="">
			<label for="naslovNovi">Naslov novi </label>
			<input type="text" class="form-control" name="naslovNovi" id="naslovNovi">
			<label for="sadrzajIzmena">Izaberite sadrzaj </label>
			<select class="form-control" name="sadrzajIzmena">
					<?php
					$upit = "SELECT * FROM sadrzaj";
					$rez = $konekcija->query($upit);
					while($red = $rez->fetch_object()){
						?>
						<option value="<?= $red->sadrzajID ?>"><?= $red->naslov ?></option>
						<?php
					}
					 ?>
			</select>
			<hr>
			<input type="submit" name="izmenaNaslova" value="Unesi novi naslov" class="form-control btn-primary" style="background-color: #ff3c64; border-color: #fff;">
		</form>


		<hr>
		<h3 class="text-center"><i>Brisanje sadržaja:</i></h3>
		<form method="POST" action="">
			<label for="sadrzajBrisanje">Izaberite sadržaj za brisanje </label>
			<select class="form-control" name="sadrzajBrisanje">
					<?php
					$upit = "SELECT * FROM sadrzaj";
					$rez = $konekcija->query($upit);
					while($red = $rez->fetch_object()){
						?>
						<option value="<?= $red->sadrzajID ?>"><?= $red->naslov ?></option>
						<?php
					}
					 ?>
			</select>
			<hr>
			<input type="submit" name="brisanje" value="Izbriši sadržaj" class="form-control btn-primary" style="background-color: #ff3c64; border-color: #fff;">
		</form>

	</div>




</section>

<?php include 'footer.php'?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

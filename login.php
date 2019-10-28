<?php include 'sesija.php';
$poruka = "";
if(isset($_POST['unos'])){
	$ime = trim($_POST['ime']);
	$sifra = trim($_POST['sifra']);

	$korisnik = new Korisnik();
	$korisnik->username = $ime;
	$korisnik->sifra = $sifra;

	if($korisnik->login($konekcija)){
		$poruka = "Uspesno ste se ulogovali.";
	}else{
		$poruka = "Neuspesno ste se logovali.";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<header>
	<div class="nav">
	<img src="2.png" class="logo">

	<?php include 'meni.php' ?>
	</div>
</header>
	<video autoplay loop class="videobg" muted>
		<source src="video.mp4" type="video/mp4">
	</video>

				<div class="box">
			<img src="33.png" class="avatar">
			<h1>Prijavite se ovde</h1>
			<form action="" method="POST">
			<input type="text" name="ime" placeholder="Unesite korisnicko ime">
			<input type="password" name="sifra" placeholder="Unesite lozinku">
			<input type="submit" name="unos" value="Prijavljivanje">
			<a href="#">Zaboravili ste lozinku?</a>
			<h3><?php echo $poruka; ?></h3>
			</form>
		</div>

		<div class="content" style="position: relative; text-align: center; color: #272727; top: 320px;"><br><br><br><br><br><br><br><br><br><br>

			<h2><i>How ART you today?</i></h2>
			<br>
				<p><b>© 2019 Copyright: Milica Jevremović</b></p>
		</div>
</body>
</html>

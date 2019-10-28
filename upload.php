<?php
 include 'sesija.php';

$target_dir = "slike/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $naslov = trim($_POST['naslov']);
    $opis = trim($_POST['opis']);
    $slika = basename( $_FILES["fileToUpload"]["name"]);
    $upit = "INSERT INTO sadrzaj VALUES (null,'$naslov','$opis','$slika')";
echo $upit;
    if($konekcija->query($upit)){
      header("Location: pregled.php");
    }else{
      echo "Neuspesno sacuvan sadrzaj";
    }
    } else {
        echo "Nije uspeo upload slike";
    }
 ?>

<?php
class Korisnik{
  public $id;
  public $imePrezime;
  public $username;
  public $sifra;
  public $uloga;

  public function login($konekcija){
    $upit = "SELECT * FROM korisnik WHERE username = '$this->username' AND sifra = '$this->sifra'";
    $rez = $konekcija->query($upit);

    while($red = $rez->fetch_object()){
      $_SESSION['ulogovan'] = true;
      return true;
    }

    return false;
  }
}



 ?>

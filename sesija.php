<?php
include 'konekcija.php';
include 'korisnik.php';
session_start();

if(!isset($_SESSION['ulogovan'])){
  $_SESSION['ulogovan'] = false;
}

 ?>



<ul class="pull-left">
  <li><a href="index.php">Početna strana</a></li>
  <li><a href="pregled.php">Zaviri unutra</a></li>

  <?php
      if($_SESSION['ulogovan']){
        ?>
        <li><a href="crud.php">Ažužiraj</a></li>
        <li><a href="logout.php">Odjavljivanje</a></li>
        <?php
      }else{
        ?>
        <li><a href="kontakt.php">Kontaktiraj me</a></li>
        <li><a href="login.php">Prijavljivanje</a></li>

        <?php
      }

   ?>
</ul>

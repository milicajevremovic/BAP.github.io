<?php include 'sesija.php'?>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Kontakt</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



    </head>
    <body>

      <header>

      <video autoplay loop class="videobg" muted>
        <source src="video.mp4" type="video/mp4">
      </video>

      <div class="nav">
      <img src="2.png" class="logo">

      <?php include 'meni.php'; ?>
      </div>

      <div id="contactContainer" class="container">

          <div class="row">
              <div class="col-md-7" id="map"></div>
              <div class="col-md-5"  id="mesto">
              <h1 class="my-4"> <i>Gde možete dostaviti Vaše radove?</i></h1>

              <table class="table table-hover">
                  <thead>
                      <th></th>
                      <th>Ulica</th>
                      <th>Grad</th>
                      <th>Zemlja</th>

                  </thead>
                  <tbody>
                      <tr>
                      <td></td>
                          <td>Bulevar Kralja Aleksandra 46</td>
                          <td>Beograd</td>
                          <td>Srbija</td>
                      </tr>

                  </tbody>
              </table>
              </div>


          </div>

<h2 class="my-3"><i>Dodatne informacije:</i></h2>
<p class="my-3"> <b><i>Broj fiksnog i mobilnog telefona: 011/65-44-145, +381/65-40-228<i></b></p>
<p><b><i>E-mail adresa:<a class="my-3" href="#"> milica.jevremovic@gmail.com</a> </i></b></p>
      </div>
</header>


        <script>
            function initMap() {
                var uluru = {lat: 44.807991, lng:20.470002};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: uluru
                    });
                    var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script src="jquery-3.1.1.js"></script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvPVjukakPSE-RfGwv7G9n6SBMCbsc4OU&callback=initMap"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    </body>

<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Site -->
  <title>OneGeek</title>
  <link rel="icon" href="img/icon_onegeek.ico">
  <meta charset="UTF-8">

  <!-- CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/modals.css">

  <!-- API Fonts Google -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900" rel="stylesheet">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

  <!-- Haut + Droite -->
  <div id="corner_TR">
    <img src="../img/coinonegeek-haut.png" alt="Coin haut">
  </div>

  <!-- LOGO  -->
  <div class="row">
    <div class="center">
      <a href="../index.php"><img src="../img/logo_onegeek.png" alt="Logo OneGeek" id="logo_OG"></a>
    </div>
  </div>

  <!-- Ligne 1  -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img onclick="document.getElementById('id01').style.display='block'" class="img-fluid" src="./img/surprise.png">
          </div>
          <div class="team-content">
            <h3 class="name">Surprise</h3>
            <h3 class="name">nº 1</h3>
          </div>
          <ul class="social">
            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">VOIR</button>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img onclick="document.getElementById('id02').style.display='block'" class="img-fluid" src="./img/surprise.png">
          </div>
          <div class="team-content">
            <h3 class="name">Surprise</h3>
            <h3 class="name">nº 2</h3>
          </div>
          <ul class="social">
            <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">VOIR</button>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img onclick="document.getElementById('id03').style.display='block'" class="img-fluid" src="./img/surprise.png">
          </div>
          <div class="team-content">
            <h3 class="name">Surprise</h3>
            <h3 class="name">nº 3</h3>
          </div>
          <ul class="social">
            <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-black">VOIR</button>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img onclick="document.getElementById('id04').style.display='block'" class="img-fluid" src="./img/surprise.png">
          </div>
          <div class="team-content">
            <h3 class="name">Surprise</h3>
            <h3 class="name">nº 4</h3>
          </div>
          <ul class="social">
            <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-black">VOIR</button>
          </ul>
        </div>
      </div>
    </div>
    <!-- Ligne 2  -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img onclick="document.getElementById('id01').style.display='block'" class="img-fluid" src="./img/surprise.png">
          </div>
          <div class="team-content">
            <h3 class="name">Surprise</h3>
            <h3 class="name">nº 5</h3>
          </div>
          <ul class="social">
            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">VOIR</button>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img onclick="document.getElementById('id02').style.display='block'" class="img-fluid" src="./img/surprise.png">
          </div>
          <div class="team-content">
            <h3 class="name">Surprise</h3>
            <h3 class="name">nº 6</h3>
          </div>
          <ul class="social">
            <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">VOIR</button>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img onclick="document.getElementById('id03').style.display='block'" class="img-fluid" src="./img/surprise.png">
          </div>
          <div class="team-content">
            <h3 class="name">Surprise</h3>
            <h3 class="name">nº 7</h3>
          </div>
          <ul class="social">
            <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-black">VOIR</button>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <img onclick="document.getElementById('id04').style.display='block'" class="img-fluid" src="./img/surprise.png">
          </div>
          <div class="team-content">
            <h3 class="name">Surprise</h3>
            <h3 class="name">nº 8</h3>
          </div>
          <ul class="social">
            <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-black">VOIR</button>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php include("php/modals_ligne1.php"); ?>
  <?php include("php/modals_ligne2.php"); ?>

  <!-- Bas + Gauche -->
  <div id="corner_BL">
    <img src="../img/coinonegeek-bas.png" alt="Coin bas">
  </div>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180693202-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-180693202-1', {
      'page_tile': 'OneGeek Noël'
    });
  </script>
</body>

</html>
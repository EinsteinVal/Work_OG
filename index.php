<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Site -->
  <title>OneGeek</title>
  <link rel="icon" href="img/icon_onegeek.ico">
  <meta charset="UTF-8">

  <!-- CSS -->
  <?php include("php/css.php"); ?>

  <!-- API Fonts Google -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900" rel="stylesheet">
</head>

<body>
  <!-- Haut + Droite -->
  <div id="corner_TR">
    <img src="img/coinonegeek-haut.png" alt="Coin haut">
  </div>
  <!-- Bloc -->
  <div id="bloc">

    <!-- LOGO - TeeShirt - Surprise -->
    <div class="row">
      <div class="center">
        <img onclick="document.getElementById('id01').style.display='block'" src="img/teeshirt_suprise.png" alt="TeeShirt Surprise" id="teeshirt_CS">
        <img src="img/logo_onegeek.png" alt="Logo OneGeek" id="logo_OG">
        <a href="noel/"><img src="img/surprise.png" alt="Cadeau Surprise" id="cadeaux_CS"></a>
      </div>
    </div>

    <!-- Modals -->
    <?php include("php/modals_teeshirt.php"); ?>

    <!-- CONSTRUCTION -->
    <div class="row" style="margin-left: 0px; margin-right: 0px; margin-top: 35px; margin-bottom: 30px">
      <div class="container-fluid" style="padding: 0;">
        <img src="img/banniere.png" alt="banniere" style="width: 100%;">
      </div>
    </div>

    <!-- TIME -->
    <div id="timer">
      <?php include("php/time.php"); ?>
    </div>

    <!-- DON + RS -->
    <?php include("php/rs.php"); ?>
  </div>

  <!-- Bas + Gauche -->
  <div id="corner_BL">
    <img src="img/coinonegeek-bas.png" alt="Coin bas">
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
      'page_tile': 'OneGeek Intro'
    });
  </script>

</body>

</html>
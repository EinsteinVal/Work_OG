<!-- Fenêtre pre-commande -->
<div id="id01" class="w3-modal w3-animate-zoom">
  <div class="w3-modal-content longueur-modal">

    <header class="w3-container colors-bg-modals">
      <span style="z-index: 4;" onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
    </header>
    <div class="w3-container colors-bg-modals">
      <!-- Haut + Droite -->
      <div id="corner_TR">
        <img src="img/coinonegeek-haut.png" alt="Coin haut" id="BL_TR_modal">
      </div>

      <div class="center_texte_modal">
        <p>OneGeek vous laisse une chance...<br>
          Pré-commande! *Youpi*
        </p>
        <p>Decription<br>
          Tee Shirt 100% coton biologique - 150 g/m2<br>
          Ce t-shirt manches courtes en jersey se décline en unique coloris<br>
          et est conçu à 100% en coton biologique filé et peigné.<br>
          De par sa coupe classique, il saura convenir à une femme comme à un homme.<br>
          Tailles : S - M - L - XL
        </p>

        <?php include("formulaire.php"); ?>

        <!-- <button id="bouton_pp " type="button">Achetez maintenant</button> -->
      </div>

      <!-- TeeShirt personnes -->
      <div>
        <img style="width:25em; position:absolute; bottom:2px" src="img/precomamde/teeshirt_personne.png" alt="TeeShirt Deux personnes">
      </div>

      <!-- TeeShirt Prix -->
      <div style="position:absolute; bottom:45px; right:60px">
        <p> 30,00 € <br> Tee-Shirt <br> "Je peux pas, J'ai OneGeek"</p>
        <img style="width:250px" src="img/precomamde/teeshirt_lumiere.png" alt="TeeShirt Lumière">
      </div>

      <?php include 'formulaireUtilisateur.php' ?>

      <!-- Bas + Gauche -->
      <div id="corner_BL">
        <img src="img/coinonegeek-bas.png" alt="Coin bas" id="BL_TR_modal">
      </div>
    </div>

  </div>
</div>
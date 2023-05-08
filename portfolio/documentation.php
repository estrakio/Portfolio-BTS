<?php if(!defined('INDEX_LOADED') || INDEX_LOADED != 1) header('Location: index.php'); ?>
<link rel="stylesheet" type="text/css" href="../css/documentation.css">

<!-- Affichage du message de bienvenue ainsi que d'une image-->
<div class="row text_couleur_bleu">
  <!-- A propos de moi Les bases-->
  <section>
    <div class="row">
      <div class="titre">
        <h1>Documentation</h1>
      </div>
  </section>

  <div class="row padding_content ">
    <div class="bordure_g_orange has-animation animation-ltr">
      <p>
        Vous trouverez sur cette page plusieurs documents téléchargeable en lien avec mon parcours scolaire et
        professionnel.
        <br>
        Cliquez sur les images correspondantes pour télécharger les documents.
      </p>
    </div>
  </div>

  <!-- CV -->
  <section>
    <h2 class="text_couleur_bleu_fonce padding_title">
      <b class="first_letter_orange">C</b>uriculum Vitae :
    </h2>
    <div class="row padding_content ">
      <div class="col-6">
        <div class="bordure_g_orange has-animation animation-ltr" style="padding-left:10px;">
          <p>
            Curiculum vitae mis à jour en mars 2023.
          </p>
        </div>
      </div>
      <div class="col-6 " style="padding-left:6vh; width:min(2vw, 5vw);">
        <div class="img_dl" >
          <a href=".\download\CV_walter_karl.pdf" download>
            <img class="img_size" src="images/cv.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Livret D'informatique de l'entreprise. -->
  <section>
    <h2 class="text_couleur_bleu_fonce padding_title">
      <b class="first_letter_orange">L</b>ivret d'accueil :
    </h2>
    <div class="row padding_content ">
      <div class="col-6">
        <div class="bordure_g_orange has-animation animation-ltr" style="padding-left:10px;">
          <p>
            Ce livret d'accueil informatique que j'ai rédigé pour la société Jus de Fruits d'Alsace est donné a tous les
            nouveau
            arrivant dans l'entreprise.
          </p>
          <p>
            Il contient des informations en lien avec le service informatique, plusieurs procédure pour les outils
            basique
            de l'entreprise ainsi que quelque conseil d'utilisation des outils informatique.
          </p>
        </div>
      </div>
      <div class="col-6 " style="padding-left:6vh;padding-bottom:5vh; width:min(2vw, 5vw);">
      <div class="img_dl">
          <a href=".\download\livret_informatique.pdf" download>
            <img class="img_size" src="images/livret.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

</div>
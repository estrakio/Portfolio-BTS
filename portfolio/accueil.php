<?php if(!defined('INDEX_LOADED') || INDEX_LOADED != 1) header('Location: index.php'); ?>
<!-- Affichage du message de bienvenue ainsi que d'une image-->
<div class="row text_couleur_bleu">
  <!-- A propos de moi Les bases-->
  <section>
    <div class="row ">
      <br>
      <br>
      <div class="col-12 bg-aurora ombre" style="border-radius: 30px">
        <div class="row text-center">
          <!-- La photo -->
          <div class="col-5">
            <!-- <img src="images/profil.png" width="300" height="300" class="img_rond" alt="Juste une photo de moi" /> -->
          </div>
          <div class="col-7" style="text-align: right;">
            <h2>Walter Karl</h2>
            <h3>25 juillet 1996</h3>
            <h3>Technicien Développeur</h3>
          </div>
        </div>
        <br>
        <br>
        <h4 class="" style="text-align: right;">BTS SIO option SLAM</h4>

      </div>
    </div>
  </section>

  <!-- A propos de moi le texte -->
  <section>
    <h2 class="text_couleur_bleu_fonce padding_title">
      <b class="first_letter_orange">À</b> propos de moi :
    </h2>
    <div class="row padding_content ">
      <div class="bordure_g_orange has-animation animation-ltr">
        <p>
        Actuellement étudiant en apprentissage dans l'entreprise Jus de fruits d'Alsace à Sarre-Union ainsi qu'à l'école ORT à Strasbourg.
        </p>
        <p>
        Ce métier est pour moi une reconversion ainsi qu'une réelle passion. Avant cette formationpe, j'étais pendant 10 ans dans le monde de la restauration.
        Ce métier passionnant qu'est celui de cuisinier m'a permis de développer de nombreuses compétences ainsi qu'une certaine rigueur dans mon travail.
        Cependant, je me suis rendu compte que ce métier ne correspondait plus à mes attentes professionnelles et personnelle et je me suis donc tourné vers ma seconde passion de toujours, l'informatique.
        </p>
      </div>
    </div>


    <h2 class="text_couleur_bleu_fonce padding_title">
      <b class="first_letter_orange">M</b>on parcours professionnel :
    </h2>
    <div class="row padding_content ">
      <div id="parcours" class="bordure_g_orange has-animation animation-ltr">
        <p>
          - J'ai commencé mon parcours professionnel dans la restauration, ce que j'ai pratiqué pendant 10 ans, jusqu'à
          devenir
          chef de cuisine.
        </p>

        <p>
          - En 2020, avec la crise de la COVID-19, j'entame une première réflexion sur mon parcours professionnel et
          envisage de me reconvertir vers l'informatique
          qui a toujours été une passion pour moi.
          Projet qui ne commencera réelement qu'en 2021 avec un stage dans la société Jus de Fruits d'Alsace à
          Sarre-Union.
        </p>

        <p>
          - Ce stage qui durera 1 semaine fut très instructif et m'a permis de me conforter dans ma reconversion.
        </p>

        <p>
          - Fin 2021, je commence mon BTS SIO option SLAM dans la même société ainsi que dans l'école ORT à Strasbourg.
        </p>

        <p>
          - Suite à ce diplôme, je prévois de poursuivre mes études en apprentissage avec le CESI afin d'obtenir un <a
            class="text_couleur_bleu_fonce"
            href="https://www.cesi.fr/formation/bachelor-concepteur-trice-developpeur-se-dapplications-en-alternance-2417421/"
            target="_blank">Bachelor Concepteur Développeur d'Applications</a>.
        </p>
      </div>
    </div>

    <h2 class="text_couleur_bleu_fonce padding_title">
      <b class="first_letter_orange">M</b>on projet professionnel :
    </h2>
    <div class="row padding_content ">
      <div class="bordure_g_orange has-animation animation-ltr">
        <p>
          Partant du postulat que l'informatique est un domaine qui évolue très rapidement et qui se diversifie
          énormement,
          je souhaite continuer mes études aussi loin que possible.

          C'est pour cette raison qu'après mon Bachelor au CESI, j'ai d'ores et déjà contacté l'école Epitech à
          Strasbourg afin de pouvoir y continuer mon apprentissage avec pour but l'obtention
          du diplôme<a class="text_couleur_bleu_fonce"
            href="https://www.epitech.eu/fr/formations/msc-pro-epitech-technology/" target="_blank"> MSC PRO en
            alternance</a>.
        </p>
      </div>
    </div>

    <h2 class="text_couleur_bleu_fonce padding_title text-center">
      <b class="first_letter_orange">L</b>angages appris durant ma formation
    </h2>
    <br>
    <div class="bordure_t_orange">
      <?php
      include("langage.php");
      ?>
    </div>
  </section>

  <!-- Le BTS SIO -->
  <section>

  </section>

  <!-- Travaux en Entreprise -->
  <section>

  </section>

  <!-- Veille technologique -->
  <section>

  </section>
</div>
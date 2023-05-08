<?php if(!defined('INDEX_LOADED') || INDEX_LOADED != 1) header('Location: index.php'); ?>
<link rel="stylesheet" type="text/css" href="../css/projet.css">

<div class="container">
  <div class="row">
    <h2 class="col-12 text-center text_couleur_bleu_fonce titre_projet">
      Vroooom Leasing
    </h2>
  </div>

  <div class="row">
    <!-- Partie gauche de la première section -->
    <div class="col-4 container">
      <!-- Parti contenant Une grande image qui présente le projet et le logo vers le lien github en dessous -->
      <div class="row body_css">
        <img src="./images/vroooom/logo.png" class="img_projet" alt="Juste une photo de moi" />
      </div>
      <div class="row text_couleur_bleu body_css text-center">
        <!-- Afficher sur la même ligne le logo github et l'url -->
        <a href="https://github.com/estrakio/Projet-Vroom" target="_blank">
          <img src="images/github.png" width="200" height="auto" alt="Logo Github" />
        </a>
      </div>
    </div>
    <!-- Partie droite de la première section -->
    <div class="col-8 container">
      <!-- Parti contenant le titre du projet, la description et les technologies utilisées -->
      <div class="row body_css ">
        <h3 class="text_couleur_bleu_fonce_clair ">Présentation : </h3>
      </div>
      <div class="row body_css padding_content">
        <p class="text_couleur_bleu">
          Projet Réalisé en cours de formation à l'école ORT. Le projet devait contenir deux Grande parti.
        </p>
        <div class="container">
          <div class="row">
            <div class="col-6 bordure_g_orange">
              <p class="text_couleur_bleu_fonce ">
                <strong><b class="first_letter_orange">S</b>ITE WEB :</strong>
              </p>
              <p class="text_couleur_bleu">
                Le site, accessible uniquement pour les personnes présentes dans la société sert à créer toute les
                données liée à l'activité de l'entreprise.
              </p>
              <p class="text_couleur_bleu">
                Il sert à la création des clients, véhicule, contrat et tout ce qui touche au experts.
              </p>
              <p class="text_couleur_bleu">
                Il permet également de consulté les expertises effectué sur les véhicule en fin de contrat envoyé depuis
                les applications mobiles.
              </p>
            </div>
            <div class="col-6 bordure_g_orange">
              <p class="text_couleur_bleu_fonce">
                <strong><b class="first_letter_orange">A</b>PPLICATION MOBILE :</strong>
              </p>
              <p class="text_couleur_bleu">
                Utilisé par les experts mandaté par la société de leasing pour expertiser les véhicules en fin de
                contrat.

              </p>
              <p>
                L'application demande, après la connexion de l'utilisateur, la plaque d'immatriculation du véhicule a
                expertiser. Après vérification efectué,
                <br>l'application va ouvrir un menu qui regroupera les différentes expertise effectué sur le véhicule.
                <br>l'expert devra alors créer une nouvelle expertise à chaque défaut du véhicule remplir des données et
                prendre une photo.
              </p>
              <p>
                L'application devait également permetre aux élèves de voir l'historique de leur commande. et de les
                modifié si besoin.
              </p>

            </div>
          </div>
        </div>
      </div>
      <div class="row body_css">
        <p class="text_couleur_bleu_fonce_clair">
          <strong>Technologies utilisées :</strong>
        <p class="text_couleur_bleu">HTML, CSS, JavaScript, PHP, PostGreSql, Git, Github, Docker, Java</p>
        </p>
      </div>
    </div>
  </div>

  <div style="padding-bottom:8vh;"></div>
  <!-- Sections qui contiennent une grande photo a gauche et du texte a droite -->
  <h2 class="text_couleur_bleu_fonce padding_title text-center " style="padding-bottom:8vh;">
    <b class="first_letter_orange">Q</b>uelques images du site Web
  </h2>
  <div class="ombre_photo">

    <section class="section has-animation animation-ltr">
      <div class="row">
        <div class="col-5 ">
          <img src="./images/vroooom/accueil.png" alt="photo" class="img-fluid">
        </div>
        <div class="col-7 texte_gauche ">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Page d'accueil du site</h4>
          <p class="text_couleur_bleu">C'est la porte d'entrée du site.</p>
          <p class="text_couleur_bleu">elle contient le logo de l'entreprise et permet d'accéder au menu.</p>
        </div>
      </div>
    </section>

    <!-- Sections qui contiennent une grande photo a droite et du texte a gauche -->
    <section class="section has-animation animation-ltr">
      <div class="row">
        <div class="col-7 texte_droite test">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Formulaire de création de client</h4>
          <p class="text_couleur_bleu">Le site étant la pour la gestion des données de l'entreprise et la consultation
            des données des experts.</p>
          <p class="text_couleur_bleu">Ce formulaire permet de créer un client dans la base de données.</p>
        </div>
        <div class="col-5">
          <img src="./images/vroooom/form_client.png" alt="photo" class="img-fluid">
        </div>
      </div>
    </section>

    <section class="section has-animation animation-ltr">
      <div class="row">
        <div class="col-5 ">
          <img src="./images/vroooom/form_garage.png" alt="photo" class="img-fluid">
        </div>
        <div class="col-7 texte_gauche ">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Formulaire de création de garage.</h4>
          <p class="text_couleur_bleu">
            Ce formulaire permet la création des garages ou seront effectué les expertises.
          </p>
        </div>
      </div>
    </section>

    <section class="section has-animation animation-ltr">
      <div class="row">
        <div class="col-7 texte_droite test">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Formulaire de création de société
            experts</h4>
          <p class="text_couleur_bleu">
            Ce formulaire permet la création des sociétés qui emploie les experts pour les expertises.
          </p>
        </div>
        <div class="col-5">
          <img src="./images/vroooom/form_societe.png" alt="photo" class="img-fluid">
        </div>
      </div>
    </section>

    <section class="section has-animation animation-ltr">
      <div class="row">
        <div class="col-5 ">
          <img src="./images/vroooom/liste.png" alt="photo" class="img-fluid">
        </div>
        <div class="col-7 texte_gauche ">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Consultation des données</h4>
          <p class="text_couleur_bleu">
            C'est la partie la plus intéressente du site, elle permet la consultation et la modification de toutes les données de base créer par les utilisateurs.
          </p>
        </div>
      </div>
    </section>

  </div>
<!--
  <div style="padding-bottom:8vh;"></div>
  <h2 class="text_couleur_bleu_fonce padding_title text-center" style="padding-bottom:8vh;">
    <b class="first_letter_orange">C</b>ourte vidéo de l'application mobile
  </h2>
  <div class="text-center ">
    <iframe class="ombre_test" width="560" height="315" src="https://www.youtube.com/embed/4SOZbq3imNw"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>
  </div> -->
  <div style="padding-bottom: 20vh;"></div>
</div>
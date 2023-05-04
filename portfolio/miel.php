<link rel="stylesheet" type="text/css" href="../css/projet.css">

<div class="container">
  <div class="row">
    <h2 class="col-12 text-center text_couleur_bleu_fonce titre_projet">
      Le miel et les abeilles
    </h2>
  </div>

  <div class="row">
    <!-- Partie gauche de la première section -->
    <div class="col-4 container">
      <!-- Parti contenant Une grande image qui présente le projet et le logo vers le lien github en dessous -->
      <div class="row body_css">
        <img src="images/le_miel_et_les_abeilles.png" class="img_projet" alt="Juste une photo de moi" />
      </div>
      <div class="row text_couleur_bleu body_css text-center">
        <!-- Afficher sur la même ligne le logo github et l'url -->
        <a href="https://github.com/ratataque/Le_miel_et_les_abeilles" target="_blank">
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
                Création d'un site web pour une école qui propose une vente de miels pour financer un voyage scolaire.
                <br>
                Le site ce devait d'être simple et intuitif pour les utilisateurs car il représente la vitrine des
                produits mis en vente par l'école.
              </p>
              <p>
                Il devait également comporter une partie administration pour permettre à l'école de gérer les produits
                vendu par les élèves et lui permetre de cloturer les ventes.
              </p>
            </div>
            <div class="col-6 bordure_g_orange">
              <p class="text_couleur_bleu_fonce">
                <strong><b class="first_letter_orange">A</b>PPLICATION MOBILE :</strong>
              </p>
              <p class="text_couleur_bleu">
                La création d'une application mobile sous Java qui devait permetre aux élèves de l'école de passer des
                commandes.
              </p>
              <p>
                L'application devait permetre aux élèves de se connecter avec leur identifiant et mot de passe pour
                pouvoir passer des commandes.
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
          <img src="./images/miel/accueil_miel.png" alt="photo" class="img-fluid">
        </div>
        <div class="col-7 texte_gauche ">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Page d'accueil du site</h4>
          <p class="text_couleur_bleu">C'est la porte d'entrée du site.</p>
          <p class="text_couleur_bleu">elle contient le logo de l'école et permet d'accéder au menu.</p>
        </div>
      </div>
    </section>

    <!-- Sections qui contiennent une grande photo a droite et du texte a gauche -->
    <section class="section has-animation animation-ltr">
      <div class="row">
        <div class="col-7 texte_droite test">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Menu du site</h4>
          <p class="text_couleur_bleu">Menu entiérement geré en javaScript.</p>
          <p class="text_couleur_bleu">Il contient plusieurs icones qui, lorsque cliqué redirige sois vers la page
            associé, sois vers un autre sous-menu qui contiendra tout les élements qui lui sont associées.</p>
        </div>
        <div class="col-5">
          <img src="./images/miel/menu_miel.png" alt="photo" class="img-fluid">
        </div>
      </div>
    </section>

    <section class="section has-animation animation-ltr">
      <div class="row">
        <div class="col-5 ">
          <img src="./images/miel/page_apiculteur.png" alt="photo" class="img-fluid">
        </div>
        <div class="col-7 texte_gauche ">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Page d'un apiculteur</h4>
          <p class="text_couleur_bleu">Exemple d'une page de présentation d'un apiculteur.</p>
          <p class="text_couleur_bleu">
            Le site étant une vitrine pour la vente de miels organisé par l'école,
            <br>
            Chaque apiculteur possède une page le m'étant en avant.
          </p>
          <p>
            Ainsi on y retrouve sur chaque page plusieurs élements le concernant.
          </p>
        </div>
      </div>
    </section>

    <section class="section has-animation animation-ltr">
      <div class="row">
        <div class="col-7 texte_droite test">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Page de connexion</h4>
          <p class="text_couleur_bleu">Cette page du site et dédié aux utilisateurs gestionnaires de la vente.</p>
          <p class="text_couleur_bleu">En s'y connectant il accède aux différents outils de gestion de la vente.</p>
        </div>
        <div class="col-5">
          <img src="./images/miel/connexion_gestion.png" alt="photo" class="img-fluid">
        </div>
      </div>
    </section>

    <section class="section has-animation animation-ltr">
      <div class="row">
        <div class="col-5 ">
          <img src="./images/miel/gestion.png" alt="photo" class="img-fluid">
        </div>
        <div class="col-7 texte_gauche ">
          <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Page de gestion</h4>
          <p class="text_couleur_bleu">
            Le coté gestion du site permet de gérer tout les aspect de la vente de miels par l'école.
          </p>
          <p class="text_couleur_bleu">
            On peux y gérer les apiculteurs (création, suppression), les miels (création, suppression),
            <br> les classes et les élèves.
          </p>
        </div>
      </div>
    </section>

  </div>

  <!-- <div style="padding-bottom:8vh;"></div>
  <h2 class="text_couleur_bleu_fonce padding_title text-center" style="padding-bottom:8vh;">
    <b class="first_letter_orange">C</b>ourte vidéo de l'application mobile
  </h2>
  <div class="text-center ">
    <iframe class="ombre_test"width="560" height="315" src="https://www.youtube.com/embed/4SOZbq3imNw" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>
  </div> -->
  <div style="padding-bottom: 20vh;"></div>
</div>
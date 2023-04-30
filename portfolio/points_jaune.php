<link rel="stylesheet" type="text/css" href="../css/projet.css">

<div class="container">
  <div class="row">
    <h2 class="col-12 text-center text_couleur_bleu_fonce titre_projet">
      Site Points jaunes
    </h2>
  </div>

  <div class="row">
    <!-- Partie gauche de la première section -->
    <div class="col-4 container">
      <!-- Parti contenant Une grande image qui présente le projet et le logo vers le lien github en dessous -->
      <div class="row body_css">
        <img src="images/logo_jfa.png" class="img_jfa" alt="Juste une photo de moi" />
      </div>
      <div class="row text_couleur_bleu body_css text-center">
        <!-- Afficher sur la même ligne le logo github et l'url -->
        <a href="https://github.com/ratataque/Le_miel_et_les_abeilles" target="_blank">
          <img src="images/github.png" width="200px" height="auto" alt="Logo Github" />
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
          Ce projet, qui m'as était donnée en entreprise, a eu pour but de remplacer l'ancien système de gestion de la
          boutique interne de vente de jus.
        </p>
        <p class="text_couleur_bleu_fonce" style="padding-bottom:20px;">
          La boutique interne de l'entreprise permet aux salarié de l'entreprise d'acheter des produits que l'entreprise
          fabrique.
          <br>
          Les produits sont uniquement achetable grâce à des points que les salariés gagnent mensuellement.
        </p>
        <div class="container">
          <div class="row">
            <div class="col-6 bordure_g_orange">
              <p class="text_couleur_bleu_fonce ">
                <strong>L'<b class="first_letter_orange">A</b>ncien système :</strong>
              </p>
              <p class="text_couleur_bleu">
                La boutique de vente de jus fonctionnait avec des points physiques de deux types (bleu et jaunes).
              </p>
              <p class="text_couleur_bleu">
                Chaque type de points permet d'acheter un type de produits.
              </p>
              <p class="text_couleur_bleu">
                Les points était fourni manuellement a chaque employé et devait être utilisé comme monnaie lors des
                achats dans la boutique.
              </p>
              <p class="text_couleur_bleu">
                Du coté de la gestion un fichier excel contenant toute les données des produits était rempli
                manuellement et permettait l'édition d'une facture.
              </p>
            </div>
            <div class="col-6 bordure_g_orange">
              <p class="text_couleur_bleu_fonce">
                <strong>Le <b class="first_letter_orange">N</b>ouveau système :</strong>
              </p>
              <p class="text_couleur_bleu">
                Tout ce qui touche a la vente de jus à été regroupé dans une application web herbergé en interne par
                l'entreprise.
              </p>
              <p>
                L'application web contient deux grandes parties :
                <br> - Le coté magasin.
                <br> - Le coté Gestion.
              </p>
              <p>
                Le Site à due être pensé pour être facilement maintenable et durable dans le temps. Il pourra ainsi être
                plus façilement mis à jour.
              </p>

            </div>

          </div>
        </div>
      </div>
      <div class="row">
        <h4 class="text_couleur_bleu_fonce  " >
          <b class="first_letter_orange">P</b>résentation des deux cotés du site :
        </h4>
        <p class="text_couleur_bleu">
          Comme dit plus haut, le site ce décompose en deux parties qui ne sont pas accessible par les mêmes personnes. afin d'obtenir l'accès à un coté il faut posséder les droits dans son profil utilisateur.
        </p>
        <p>
          Le côté magasin contient toutes les pages en lien direct avec la boutique, un système de caisse enregistreuse, la gestion des articles et un système d'extraction de données des commandes passé.
        </p>
        <p>
          Le côté gestion quand à lui à principalement été construit pour le service Ressources Humaines de l'entreprise. Il leurs permet d'incrémenter des points aux utilisateurs ainsi que de consulté leurs solde. Il contient également un outil s'occupant de la gestion des utilisateurs via un envoi de fichier CSV.
          
      </div>
      <div class="row body_css ">
        <p class="text_couleur_bleu_fonce_clair">
          <strong>Technologies utilisées :</strong>
        </p>
        <p class="text_couleur_bleu ">HTML, CSS, JavaScript, PHP, PostGreSql, Git, Github, Docker</p>
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

  <div style="padding-bottom:8vh;"></div>
  <!-- Sections qui contiennent une grande photo a gauche et du texte a droite -->
  <h2 class="text_couleur_bleu_fonce padding_title text-center" style="padding-bottom:8vh;">
    <b class="first_letter_orange">C</b>ourte vidéo de l'application mobile
  </h2>
  <div class="text-center ">
    <iframe class="ombre_test" width="560" height="315" src="https://www.youtube.com/embed/4SOZbq3imNw"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>
  </div>
  <div style="padding-bottom: 20vh;"></div>
</div>
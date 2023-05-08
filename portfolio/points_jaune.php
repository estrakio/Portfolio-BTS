<?php if(!defined('INDEX_LOADED') || INDEX_LOADED != 1) header('Location: index.php'); ?>
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
        <a href="https://github.com/estrakio/Boutique_Points_Jaune" target="_blank">
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
        <div class="row">
          <h4 class="text_couleur_bleu_fonce  " style="padding-top:4vh;">
            <b class="first_letter_orange">P</b>résentation des deux cotés du site :
          </h4>
          <p class="text_couleur_bleu">
            Comme dit plus haut, le site ce décompose en deux parties qui ne sont pas accessible par les mêmes
            personnes. afin d'obtenir l'accès à un coté il faut posséder les droits dans son profil utilisateur.
          </p>
          <p>
            Le côté magasin contient toutes les pages en lien direct avec la boutique, un système de caisse
            enregistreuse, la gestion des articles et un système d'extraction de données des commandes passé.
          </p>
          <p>
            Le côté gestion quand à lui à principalement été construit pour le service Ressources Humaines de
            l'entreprise. Il leurs permet d'incrémenter des points aux utilisateurs ainsi que de consulté leurs solde.
            Il contient également un outil s'occupant de la gestion des utilisateurs via un envoi de fichier CSV.

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
            <img src="./images/boutique/accueil.png" alt="photo" class="img-fluid">
          </div>
          <div class="col-7 texte_gauche ">
            <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Page d'accueil</h4>
            <p class="text_couleur_bleu">C'est la porte d'entrée du site.</p>
            <p class="text_couleur_bleu">Une fois l'utilisateur connecté, <br> elle permet à l'utilisateur de savoir sur
              quel coté du site il ce trouve.</p>
          </div>
        </div>
      </section>

      <!-- Sections qui contiennent une grande photo a droite et du texte a gauche -->
      <section class="section has-animation animation-ltr">
        <div class="row">
          <div class="col-7 texte_droite test">
            <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Page commande</h4>
            <p class="text_couleur_bleu">Elle se décompose en quatre étapes.</p>
            <p class="text_couleur_bleu">
              La première étant celle ou l'on demande à l'utilisateur de taper le matricule du salarié.
              <br> La seconde demande à l'utilisateur d'indiquer la quantité de chaque article contenu dans le caddie.
              <br> La troisième affiche un récapitulatif de la commande et demande une confirmation.
              <br> La dernière redirige vers la première après avoir écrit une trace sur l'historique et débité le
              salarié des points de la commande.
            </p>
          </div>
          <div class="col-5">
            <img src="./images/boutique/caisse.png" alt="photo" class="img-fluid">
          </div>
        </div>
      </section>

      <section class="section has-animation animation-ltr">
        <div class="row">
          <div class="col-5 ">
            <img src="./images/boutique/gestion_produit.png" alt="photo" class="img-fluid">
          </div>
          <div class="col-7 texte_gauche ">
            <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Page de gestion produits</h4>
            <p class="text_couleur_bleu">
              Elle permet de gérer tout ce qui touche aux produits grâce aux plusieurs outils mis à disposition.
            </p>
            <p>
              Pour en cité quelque une, on peut ajouter des produits par CSV, manuellement ou en désactivé.
              <br> C'est différentes options permettent de réguler les produits de la vente et d'ainsi éviter que la
              liste des produits présente dans la partie caisse ne grossise.
            </p>
          </div>
        </div>
      </section>

      <section class="section has-animation animation-ltr">
        <div class="row">
          <div class="col-7 texte_droite test">
            <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Page d'ajout de points</h4>
            <p class="text_couleur_bleu">Elle permet l'ajout d'un nombre de points défini par le bouton cliqué à tous
              les salariés acitf présents dans la base de données</p>
            <p class="text_couleur_bleu">Il existe également les bouton équivalent pour enlever des points afin de
              rattraper un ajout involontaire.</p>
          </div>
          <div class="col-5">
            <img src="./images/boutique/ajout_points.png" alt="photo" class="img-fluid">
          </div>
        </div>
      </section>

      <section class="section has-animation animation-ltr">
        <div class="row">
          <div class="col-5 ">
            <img src="./images/boutique/liste_salarie.png" alt="photo" class="img-fluid">
          </div>
          <div class="col-7 texte_gauche ">
            <h4 class="text_couleur_bleu_fonce_clair" style="padding-bottom:2vh;">Liste des salariés</h4>
            <p class="text_couleur_bleu">
              Elle à plusieurse utilitées, la première est de pouvoir voir les salariés actifs et leurs solde de points.
            </p>
            <p class="text_couleur_bleu">
              elle permet également d'imprimer la dite liste dans un format beaucoup plus compact afin de pouvoir l'imprimer.
            </p>
          </div>
        </div>
      </section>

    </div>


    <div style="padding-bottom: 20vh;"></div>
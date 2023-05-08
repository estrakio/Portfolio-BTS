<?php if(!defined('INDEX_LOADED') || INDEX_LOADED != 1) header('Location: index.php'); ?>
<div class="container">

  <h2 class="text-center text_couleur_bleu_fonce titre_bts">
    Mon <b class="first_letter_orange">BTS</b> SIO en Entreprise
  </h2>

  <div class="row" style="padding-top:20px;">
    <h2 class="text_couleur_bleu_fonce padding_title ">
      <b class="first_letter_orange">L</b>a société Jus de Fruits d'Alsace
    </h2>
    <div class="row">
      <div class="col-6 text_couleur_bleu bordure_g_orange  has-animation animation-ltr">
        <p>Jus de Fruits d’Alsace est une entreprise basée en Alsace bossue, à Sarre Union (Bas Rhin). </p>
        <p>Il s’agit d’un spécialiste français des jus de fruits au savoir-faire de plus de 60 ans. </p>
        <p>Près de 300 collaborateurs travaillent au quotidien à la production et au conditionnement de jus de fruits et
          de boissons sans alcool. </p>
        <p>Jus de Fruits d’Alsace fait partie du groupe Loirétain LSDH (Laiterie de Saint Denis de l’Hôtel). </p>
        <p>Jfa possède sur site un service Informatique découpé en <b class="first_letter_orange">2</b> pôles :</p>
      </div>
      <div class="col-6 text_couleur_bleu">
        <img src="./images/jfa_photo.jpg" alt="photo" class="test_img ombre">
      </div>
    </div>
    <div style="padding-top:30px;"> </div>
  </div>

  <div class="row has-animation animation-ltr" style="padding-top:10px;">
    <!-- Créer une bannière avec une photo de l'école ORT -->
    <div class="col-6 text_couleur_bleu">
      <h3 class="text_couleur_bleu_fonce padding_title ">
        Le service <b class="first_letter_orange">F</b>onctionnel
      </h3>
      <div style="border-right:2px solid #000A54; ">
        <p>
          C'est le service ou j'ai passé mon apprentissage.
          <br>
          Il s'occupe de la gestion de tout ce qui est applicatif et
          logiciel.
        </p>

        <p>
          L'entreprise fonctionne principalement avec 3 logiciels dont SAP (son ERP) qui est le cœur de l'entreprise,
        </p>
        <p>
          Logys qui s'occupe de la logistique et laBase de la gestion des ingrédients et des préparation.
        </p>
        <p>
      </div>
      </p>
    </div>
    <!-- <div class="col-1"></div> -->

    <div class="col-6 text_couleur_bleu ">
      <h3 class="text_couleur_bleu_fonce padding_title ">
        Le service <b class="first_letter_orange">I</b>nfrastucture
      </h3>
      <div>
        <p>
          C'est une société externe (mais interne au niveau des locaux) qui s'occupe de toute cette partie pour
          l'entreprise sous la supervision du résponsable informatique de l'entreprise.
        </p>
        <p>
          Ils s'occupent de la gestion des serveurs, des réseaux et de tout les outils informatiques.
      </div>
    </div>

  </div>

  <div class="row" style="padding-top:50px; padding-bottom:50px;">
    <h2 class="text_couleur_bleu_fonce padding_title ">
      <b class="first_letter_orange">M</b>es différentes missions :
    </h2>

    <div class=" text_couleur_bleu bordure_g_orange has-animation animation-ltr">
      <p>
        Au cours des 2 années de mon BTS, j'ai eu l'occasion d'effectuer plusieurs sortes de missions en entreprise :
      </p>
      <p>
        En premier plan, j'ai eu comme mission de résoudre les problèmes des utilisateurs de l'entreprise liée aux
        différents logiciels.
        Pour ce faire, nous utilisons le système de ticketing de GLPI.
      </p>

      <p>
        Le système de ticketing n'ayant été mis en place qu'un an avant mon arrivée, on ma demandé de modifier le
        pattern d'envoi de mails afin qu'ils soit plus visuel.
        <br>
        Toujours dans l'objectif de familiariser les utilisateurs, j'ai entièrement réecrit le livret d'accueil
        informatique qui contient toutes sortes d'informations sur les différents outils orientés utilisateur ainsi
        que quelques procédures basiques.
      </p>

      <p>
        En second plan, on m'a affecté au développement de plusieurs projets. J'ai d'abord développé deux programmes en
        ABAP (Langage de SAP),
        <br>
        le premier (<b>ZSD_JFA_LPR</b>) permettent de générer chaque début de semaine un fichier contenant plusieurs
        informations sur toutes les palettes appartenant à la société LPR envoyé par ma société.
        Ce fichier, envoyé par mail permet à LPR, permet de savoir quelles palettes sont à récupérer et à quel endroit.
        <br>
        Le second (<b>ZPP_JFA_GET_LSDH_OF</b>) est la pour récupérer et préparer des données pour un autre programme écrit en
        ABAP.
        <br>
      </p>

      <p>
        En début de ma deuxième année, j'ai été affecté à un projet de développement d'une application web en PHP.
        <br>
        Cette application (<b>Boutique points jaunes</b>) avait pour but de remplacer un ancien système de gestion de
        boutique de vente de jus.
      </p>

      <p>
        Actuellement (mai 2023), je travaille sur un projet de développement d'une application web en PHP permettant la création de plan d'action au niveau Groupe (LSDH).
      </p>
    </div>

  </div>

</div>
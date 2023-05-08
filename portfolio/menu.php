<?php if(!defined('INDEX_LOADED') || INDEX_LOADED != 1) header('Location: index.php'); ?>
<nav class="navbar navbar_color border-radius:30px fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand color_text_nav" href="index.php?content=accueil"><b class="text_couleur_bleu_fonce">P</b>ortfolio Walter Karl</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end color_text_nav fond_menu" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header color_text_nav navbar_color ">
        <h5 class="offcanvas-title " id="offcanvasNavbarLabel">Walter Karl</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link text_couleur_bleu_fonce" aria-current="page" href="index.php?content=accueil"> 😊 <span class="first_letter_orange">A</span> propos de moi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text_couleur_bleu_fonce" href="index.php?content=bts"> 🖥️ <span class="first_letter_orange">M</span>on BTS chez JFA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text_couleur_bleu_fonce" href="index.php?content=veille"> 🤖 <span class="first_letter_orange">V</span>eille technologique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text_couleur_bleu_fonce" href="index.php?content=documentation"> 📄 <span class="first_letter_orange">D</span>ocumentation</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text_couleur_bleu_fonce" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              📁 <span class="first_letter_orange">M</span>es différents projets :
            </a>
            <ul class="dropdown-menu fond_sous_menu">
              <li><a class="dropdown-item text_couleur_bleu_fonce" href="index.php?content=miel"> 🐝 Le miel et les abeilles</a></li>
              <li><a class="dropdown-item text_couleur_bleu_fonce" href="index.php?content=vroooom"> 🚗 Société de leasing Vroooom</a></li>
              <li>
                <hr class="dropdown-divider text_couleur_bleu_fonce">
              </li>
              <li><a class="dropdown-item text_couleur_bleu_fonce" href="index.php?content=points_jaune"> 🎫 La Boutique Points jaunes</a></li>
              <li><a class="dropdown-item text_couleur_bleu_fonce" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
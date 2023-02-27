<nav class="navbar navbar_color border-radius:30px fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand color_text_nav" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end color_text_nav fond" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header color_text_nav navbar_color ">
        <h5 class="offcanvas-title " id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link color_text_orange" aria-current="page" href="#">😶‍🌫️A propos de moi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_text_orange" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle color_text_orange" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu fond">
              <li><a class="dropdown-item color_text_orange" href="#">Action</a></li>
              <li><a class="dropdown-item color_text_orange" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider color_text_orange">
              </li>
              <li><a class="dropdown-item color_text_orange" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
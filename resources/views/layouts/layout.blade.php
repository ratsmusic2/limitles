  @extends('layouts.header')
  @section('content')
  <!-- Navbar -->
  <nav
      class="navbar navbar-expand-lg fixed-top nav-down navbar-light"
      style="background-color:#ffffff">
      <div class="container">
          <div class="navbar-translate">
              <img src="./assets/img/Limitless.png" class="img-fluid " alt="...">
              <!-- <a class="navbar-brand" href="/index.html" rel="tooltip" title="Limitless"
              data-placement="bottom" target="_blank"> Limitless Design </a>-->
              <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navigation"
                  aria-controls="navigation-index"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
              </button>
          </div>
          <div
              class="collapse navbar-collapse"
              data-nav-image="./assets/img/blurred-image-1.jpg"
              data-color="orange">
              <ul class="navbar-nav ml-auto">
                  <li class="dropdown nav-item">
                      <a
                          href="#"
                          class="dropdown-toggle nav-link"
                          data-toggle="dropdown"
                          aria-expanded="false">
                          DESIGNS
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-danger">
                          <a href="./3ddesing" class="dropdown-item">
                              3D Designs
                          </a>
                          <a href="./logosdesing" class="dropdown-item">
                              Logos Designs
                          </a>
                          <a href="./blueprintsdesing" class="dropdown-item">
                              Blueprints Designs
                          </a>
                      </div>
                  </li>
                  <li class="dropdown nav-item">
                      <a
                          href="#"
                          class="dropdown-toggle nav-link"
                          id="navbarDropdownMenuLink"
                          data-toggle="dropdown">
                          Sections
                      </a>
                      <div
                          class="dropdown-menu dropdown-menu-right dropdown-danger"
                          aria-labelledby="navbarDropdownMenuLink">
                          <a
                              class="dropdown-item"
                              data-scroll="true"
                              data-id="#headers"
                              href="./sections.html#headers">
                              <i class="nc-icon nc-tile-56"></i>
                              Headers
                          </a>
                      </div>
                  </li>
                  <li class="dropdown nav-item">
                      <a
                          href="#"
                          class="dropdown-toggle nav-link"
                          id="navbarDropdownMenuLink1"
                          data-toggle="dropdown">
                          Examples
                      </a>
                      <div
                          class="dropdown-menu dropdown-menu-right dropdown-danger"
                          aria-labelledby="navbarDropdownMenuLink1">
                          <a class="dropdown-item" href="./examples/about-us.html">
                              <i class="nc-icon nc-bank"></i>
                              About-us
                          </a>

                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- End Navbar --> 
  <footer class="footer footer-black  footer-white ">
    <div class="container">
      <div class="row">
        <div class="credits ml-auto">
          <span class="copyriooght">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made wit <i class="fa fa-heart heart"></i> 
          </span>
        </div>
      </div>
    </div>
  </footer>  
  @endsection     



@content("content")
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img//favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>
            Limitless
        </title>
        <meta
            content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
            name='viewport'/>
        <!-- Fonts and icons -->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
            rel="stylesheet"/>
        <link
            href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
            rel="stylesheet">
        <!-- CSS Files -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="./assets/css/paper-kit.css?v=2.3.0" rel="stylesheet"/>
        <!-- CSS Just for demo purpose, dont include it in your project -->
        <link href="./assets/demo/demo.css" rel="stylesheet"/>
    </head>

    <body class="sections-page ">
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
        <!-- Core JS Files -->
        <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <!-- Plugin for Switches, full documentation here:
        http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="./assets/js/plugins/bootstrap-switch.js"></script>
        <!-- Plugin for the Sliders, full documentation here:
        http://refreshless.com/nouislider/ -->
        <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!-- Plugin for the DatePicker, full documentation here:
        https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="./assets/js/plugins/moment.min.js"></script>
        <!-- Plugin for Tags, full documentation here:
        https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs -->
        <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Select, full documentation here:
        http://silviomoreto.github.io/bootstrap-select -->
        <script
            src="./assets/js/plugins/bootstrap-selectpicker.js"
            type="text/javascript"></script>
        <!-- Plugin for Datetimepicker, full documentation here:
        https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script
            src="./assets/js/plugins/bootstrap-datetimepicker.js"
            type="text/javascript"></script>
        <!-- Vertical nav - dots -->
        <script src="./assets/demo//vertical-nav.js" type="text/javascript"></script>
        <!-- Photoswipe files -->
        <script src="./assets/js/plugins/photo_swipe/photoswipe.min.js"></script>
        <script src="./assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script>
        <script src="./assets/js/plugins/photo_swipe/init-gallery.js"></script>
        <!-- for Jasny fileupload -->
        <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
        <!-- Control Center for Paper Kit: parallax effects, scripts for the example
        pages etc -->
        <script src="./assets/js/paper-kit.js?v=2.3.0" type="text/javascript"></script>
        <!-- Google Maps Plugin -->
        <script
            type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Plugin for presentation page - isometric cards -->
        <script src="./assets/js/plugins/presentation-page/main.js"></script>
        <script>
            $(document).ready(function () {
                if (window_width >= 768) {
                    $(window).on('scroll', pk.checkScrollForPresentationPage);
                }

                // Javascript method's body can be found in
                // assets/js/core/partials/_demo-object.js
                demo.initContactUsMap2();
            });
        </script>
    </body>
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
</html>
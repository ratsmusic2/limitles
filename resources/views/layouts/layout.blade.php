

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
        @yield('content')
        @include('layouts.menu')
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
    
</html>

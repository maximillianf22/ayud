<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ayud Servicios
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/now-ui-kit.min.css?v=1.3.0" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/owlcarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/owlcarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css"> 
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/master/style.css" rel="stylesheet" />
  
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  @yield('navbar')
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="main">
        @yield('content')
    </div>
    <!-- Sart Modal -->
    @include('layout.components.modals')
    <!--  End Modal -->
    @yield('footer')
  </div>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&amp;callback=initMap">
  </script>
  <script src="/assets/owlcarousel/docs/assets/owlcarousel/owl.carousel.min.js"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  @yield('js')
</body>

</html>
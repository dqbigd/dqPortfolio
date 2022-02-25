<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Diqi</title>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/color.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Inconsolata" rel="stylesheet">
  <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body>

<!--Switcher-->
  <div class="style-switcher">
    <span class="style-switcher__control"></span>
    <div class="style-switcher__list">
      <a class="style-switcher__link style-switcher__link--color"></a>
      <a class="style-switcher__link style-switcher__link--mono"></a>
    </div>
  </div>
<!--Switcher-->

@include('layouts.menu')

@yield('content')

  <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/menu.js"></script>
  <script src="assets/js/jquery.waypoints.js"></script>
  <script src="assets/js/progress-list.js"></script>
  <script src="assets/js/section.js"></script>
  <script src="assets/js/portfolio-filter.js"></script>
  <script src="assets/js/slider-carousel.js"></script>
  <script src="assets/js/mobile-menu.js"></script>
  <script src="assets/js/contacts.js"></script>
  <script src="assets/js/mbclicker.min.js"></script>
  <script src="assets/js/site-btn.js"></script>
  <script src="assets/js/style-switcher.js"></script>
</body>
</html>

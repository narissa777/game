<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Technolobal Bilişim | Petrol Otomasyonu</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-searchpanes/css/searchPanes.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-searchpanes/css/searchPanes.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-searchbuilder/css/searchBuilder.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap5.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-datetime/css/datatables.datetime.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/assets/'); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Chart Js Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script>
  <link rel="icon" href="<?=base_url()?>favicon.ico" type="icon">
  <link rel="manifest" href="<?php echo base_url(''); ?>pwa/manifest.json">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="<?php echo base_url(''); ?>">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link href="<?php echo base_url(''); ?>pwa/img/iphone5_splash.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(''); ?>pwa/img/iphone6_splash.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(''); ?>pwa/img/iphoneplus_splash.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(''); ?>pwa/img/iphonex_splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(''); ?>pwa/img/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(''); ?>pwa/img/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="<?php echo base_url(''); ?>pwa/img/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link rel="apple-touch-icon" sizes="128x128" href="<?php echo base_url(''); ?>pwa/img/beyin128.png">
  <link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?php echo base_url(''); ?>pwa/img/beyin128.png"> 
  <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function () {
        navigator.serviceWorker.register('<?php echo base_url(''); ?>pwa/sw.js?v=3');
      });
    }
  </script>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="<?=base_url()?>favicon.ico" alt="Technolobal Logo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="<?php echo base_url('assets/'); ?>#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
        <li class="navbar-nav mx-auto text-center">
          <p class="nav-item" style="font-family: 'Dancing Script', cursive;"></p>
        </li>
      </div>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->   
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="dark-mode-control" href="#" role="button">
            <i id="gunes" class="fas fa-moon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/cikis'); ?>" role="button">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li> 
      </ul>
    </nav>
  <!-- /.navbar -->
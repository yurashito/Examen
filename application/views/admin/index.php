<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
 
  <link rel="stylesheet" href=" <?php echo base_url('assets/adminAssets/vendors/feather/feather.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminAssets/vendors/ti-icons/css/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminAssets/css/vertical-layout-light/style.css'); ?>">
  <script src="<?php echo base_url('assets/adminAssets/js/chart.js'); ?>"></script>
  <!-- endinject -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <link rel="shortcut icon" href="adminAssets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:adminAssets/partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="adminAssets/index.html"><img src="adminAssets/images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="adminAssets/index.html"><img src="adminAssets/images/logo-mini.svg" alt="logo"/></a>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("adminControllerr/index"); ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">  Home  </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('adminController/AfficherSport'); ?>">
              <i class=" icon-paper   menu-icon "></i>
              <span class="menu-title">Insertion Sport </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('adminController/Aliment'); ?>">
              <i class="icon-paper  menu-icon "></i>
              <span class="menu-title">Liste des Aliments </span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("CodeController/ValiderCode"); ?>">
              <i class="icon-grid menu-icon "></i>
              <span class="menu-title">Validation du code pour le porte money de l' utilisateur</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <?php include( $page.".php"); ?>
        </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="adminAssets/vendors/js/vendor.bundle.base.js"></script>
  <script src="adminAssets/vendors/chart.js/Chart.min.js"></script>

  <script src="adminAssets/js/off-canvas.js"></script>
  <script src="adminAssets/js/hoverable-collapse.js"></script>
  <script src="adminAssets/js/template.js"></script>
  <script src="adminAssets/js/settings.js"></script>
  <script src="adminAssets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="adminAssets/js/chart.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

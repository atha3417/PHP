<?php 
require "_assets/libs/vendor/autoload.php";
require_once '_config/config.php';
if (!isset($_SESSION['user'])) {
  echo "<script>window.location='".base_url('auth/login.php')."'</script>";
} else {  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hospital Application</title>
  <!-- Custom fonts for this template-->
  <link href="<?= base_url('_assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('_assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="<?= base_url('_assets/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
</head>
<body>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('_assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('_assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('_assets/js/sb-admin-2.min.js') ?>"></script>
  <!-- Page level plugins -->
  <script src="<?= base_url('_assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('_assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
  <!-- Page level custom scripts -->
  <script src="<?= base_url('_assets/js/demo/datatables-demo.js') ?>"></script>
  <script src="<?= base_url('/_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js') ?>"></script>
  <!-- dataTables File Export -->
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

  <!-- Page Wrapper -->
  <div id="wrapper" class="page-top">
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-clinic-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hospital</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-database"></i>
          <span>Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('patient/data.php') ?>"><i class="fas fa-fw fa-user-injured"></i> Patient Data</a>
            <a class="collapse-item" href="<?= base_url('doctor/data.php') ?>"><i class="fas fa-fw fa-user-md"></i> Doctor Data</a>
            <a class="collapse-item" href="<?= base_url('polyclinic/data.php') ?>"><i class="fas fa-fw fa-stethoscope"></i> Polyclinic Data</a>
            <a class="collapse-item" href="<?= base_url('obat/data.php') ?>"><i class="fas fa-fw fa-pills"></i> Medicine Data</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('medical_record/data.php') ?>">
          <i class="fas fa-fw fa-notes-medical"></i>
          <span>Medical Records</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Sign Out</span>
        </a>
      </li>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Atha Tsaqif</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sign Out
                </a>
              </div>
            </li>
          </ul>
        </nav>

        <!-- Begin Page Content -->
        <div class="container-fluid">
<?php } ?>
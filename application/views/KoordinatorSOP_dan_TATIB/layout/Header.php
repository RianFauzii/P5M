<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>P5M Manajemen Informatika</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png')?>" rel="icon">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets_login/images/icons/icon.ico'); ?>"/>
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url('https://fonts.gstatic.com')?>" rel="preconnect">
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css')?>" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.2/b-2.3.4/b-html5-2.3.4/b-print-2.3.4/datatables.min.css"/> -->
 

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/stylenew.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')?>">
  <link href="<?php echo base_url('assets/css/sweetalert2.min.css'); ?>" rel="stylesheet">
<!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
         <img src="<?php echo base_url('assets/img/himma.png')?>" alt="Profile" class="rounded-circle">
          <span class="d-none d-lg-block">&nbsp;P5M</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

       

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
         <!--    <img src="<?php echo base_url('assets/img/profile-img.jpg')?>" alt="Profile" class="rounded-circle"> -->
            <span><?php echo $_COOKIE['nama']?></span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed " href="<?php echo base_url('dashboard')?>">
          <i class="bi bi-bar-chart-line"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('masterpengguna')?>">
          <i class="bi bi-person-rolodex"></i><span>Pengguna</span>
         
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('mahasiswa')?>">
          <i class="bi bi-people"></i><span>Mahasiswa</span>
         
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-postcard"></i><span>Absensi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            
            <a href="<?php echo base_url('absensi')?>">
              <i class="bi bi-circle"></i><span>Import Absensi</span>
            </a>
          </li>
          <li <?=$this ->uri->segment(1) == 'absesi/laporan' ? 'class="active"' : ''?>>
            <a href="<?php echo base_url('absensi/laporan')?>">
              <i class="bi bi-circle"></i><span>Laporan Absensi</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('absensi/laporanJamMinusAbsensi')?>">
              <i class="bi bi-circle"></i><span>Laporan Jam Minus Absensi</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-ui-checks-grid"></i><span>Pelanggaran</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('masterpelanggaran')?>">
              <i class="bi bi-circle"></i><span>Kelola Pelanggaran</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('P5M/input/')?>">
              <i class="bi bi-circle"></i><span>P5M</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('P5M/laporan_jam_minus/')?>">
              <i class="bi bi-circle"></i><span>Laporan Jam Minus P5M</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('login') ?>" >
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
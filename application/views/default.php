<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1);?>

  <title>P5M Manajemen Informatika</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
<link rel="icon" type="image/png" href="<?php echo base_url('assets_login/images/icons/icon.ico'); ?>"/>
  
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">




  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <link href="<?php echo base_url('assets/css/stylesso.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')?>">
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
        <link rel="icon" type="image/png" href="<?php echo base_url('assets_login/images/icons/icon.ico'); ?>"/>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
         
        </li><!-- End Search Icon-->

       

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
         <!--    <img src="<?php echo base_url('assets/img/profile-img.jpg')?>" alt="Profile" class="rounded-circle"> -->Selamat datang,&nbsp;
            <span><?php echo $_COOKIE['nama']?></span>
          </a><!-- End Profile Iamge Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_COOKIE['nama']?></h6>
              <span><?php echo $_COOKIE['role']?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items --> 
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      
  

        
<!-- <li class="nav-item" >
         
         <a  <?=$this->uri->segment(1) =='home' || $this->uri->segment(1) == 'home' ? 'class="nav-link"' : ''?> href="<?=site_url('home') ?>" href="<?=site_url('home') ?>">
          <i class="bi bi-bar-chart-line"></i>
          <span>Dashboard</span>
        </a>
 -->
      <!-- <li  <?=$this->uri->segment(1) =='home' ? 'class="nav-link"' : ''?>  >
         
         <a href="<?=site_url('home') ?>">
          <i class="bi bi-bar-chart-line"></i>
          <span>Dashboard</span>
        </a>
      </li> --><!-- End Dashboard Nav -->
        
        <li class="nav-item">
         
         <a class= "nav-link" href="<?php echo base_url('home')?>">
          <i class="bi bi-house-door"></i>
          <span>Home</span>

        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('login') ?>" >

          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
    <main id="main" class="main">

   <!--  <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("login/logout")?>" >Single Sign On Application</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div> -->

    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Sigle Sign On</li>
          <li class="breadcrumb-item active">Home</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <!-- End Page Title -->

    <section class="section">

        <div class="card">
            <div class="card-body">

              <!-- List group with Links and buttons -->
              <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                  Sistem Informasi Akademik
                </button>
                <?php if($sso ==null) { ?>
                <a type="button" class="list-group-item list-group-item-action" href="<?php echo base_url("notfound")?>" >Akun belum terdaftar</a>
                <?php } ?>
                <?php if ($sso != null) { ?>
                <?php $dobel = 'tidak'; foreach ($sso as $u) { ?>
                <?php if(!strcmp($u->role, "KOORDINATOR SOP dan TATIB")) { ?>
                    <a type="button" class="list-group-item list-group-item-action" href="<?php echo base_url("dashboard")?>" >Masuk Sebagai KOORDINATOR SOP dan TATIB</a>
                <?php } else if (!strcmp($u->role, "KOORDINATOR TINGKAT") && !strcmp($dobel, "tidak")) { $dobel = 'ya'; ?>
                    <a type="button" class="list-group-item list-group-item-action" href="<?php echo base_url("dashboardtingkat")?>">Masuk Sebagai KOORDINATOR TINGKAT</a>
                <?php }}?>
                <?php } ?>
                <!-- <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button> -->
              </div><!-- End List group with Links and buttons -->

            </div>
        </div>

    </section>

    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/chart.js/chart.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/quill/quill.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/dataTables/datatables.min.js') ?>"></script>
  <script>
    $(function () {
        $('.list_datatable').DataTable();
    })
  </script>
</body>

</html>
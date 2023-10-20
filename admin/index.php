<?php
// session start
if (!empty($_SESSION)) {
} else {
  session_start();
}
require '../db-connect.php';
if (!empty($_SESSION['ADMIN'])) {
} else {
  echo '<script>alert("Required Login Authorization!");window.location="../login/"</script>';
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - WeddingYuk</title>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Template Main CSS File -->
  <style>
    <?php include "assets/css/style.css"; ?>
  </style>

  <!-- Font-Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://cdn.tiny.cloud/1/2ol7w9hdbi0pdtg3hjanp13h87pvosj3pqzcdaezfpne0qj1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Wedding Yuk</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
    
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../action.php?act=logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
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

      <li class="nav-item">
        <a class="nav-link " href="index.php?page=dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?page=features">
          <i class="bi bi-file-earmark-bar-graph"></i>
          <span>Fitur</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?page=about">
          <i class="bi bi-question-circle"></i>
          <span>Tentang Kami</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?page=packages">
          <i class="bi bi-archive"></i>
          <span>Produk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?page=gallery">
          <i class="bi bi-images"></i>
          <span>Gallery</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?page=blog">
          <i class="bi bi-newspaper"></i>
          <span>Artikel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?page=testi">
          <i class="bi bi-people"></i>
          <span>Testimonial</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php?page=contact">
          <i class="bi bi-telephone"></i>
          <span>Kontak</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

  

      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#profile-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="profile-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../action.php?act=logout">
              <i class="bi bi-caret-right"></i><span>Log Out</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <?php include "page/config.php"; ?>

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>>
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <script>
    // tinymce.init({
    //   selector: '#editor1',
    //   menubar: false,
    //   statusbar: false,
    //   plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
    //   toolbar: 'undo redo h1 h2 bold italic strikethrough blockquote bullist numlist | link image | removeformat fullscreen ',
    //   skin: 'bootstrap',
    //   toolbar_drawer: 'floating',
    //   min_height: 400,
    //   autoresize_bottom_margin: 16,

    // });
    tinymce.init({
      selector: '#editor1',
      menubar: false,
      statusbar: false,
      plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
      toolbar: 'h1 h2 h3 h4 bold italic strikethrough blockquote bullist numlist | link image | removeformat fullscreen ',
      skin: 'bootstrap',
      toolbar_drawer: 'floating',
      min_height: 400,
      autoresize_bottom_margin: 16,
      
    });
  </script>






</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>
  <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/components.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>custom_css.css">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script src="<?= base_url('assets/') ?>modules/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>modules/popper.js"></script>
  <script src="<?= base_url('assets/') ?>modules/tooltip.js"></script>
  <script src="<?= base_url('assets/') ?>modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/') ?>modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url('assets/') ?>modules/moment.min.js"></script>
  <script src="<?= base_url('assets/') ?>modules/sweetalert/sweetalert.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/page/modules-sweetalert.js"></script>
  <script src="<?= base_url('assets/') ?>js/stisla.js"></script>
  <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
  <script src="<?= base_url('assets/') ?>js/custom.js"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">Judul Aplikasi Disini !</a>
        <div class="nav-collapse">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link">Tentang Kami</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pusat Bantuan</a></li>
          </ul>
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="">
            <a href="<?= base_url('carts') ?>" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep">
              <i class="fa fa-shopping-cart"></i>
            </a>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="<?= base_url('profil') ?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="#" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fa fa-box"></i><span>Barang</span></a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Top Navigation</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Top Navigation</div>
            </div>
          </div>
          <?= $contents ?>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>
</body>
</html>

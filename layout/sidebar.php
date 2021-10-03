<?php
$url = explode('/', $_SERVER['REQUEST_URI']);
?> 

<?php  @session_start(); ?>
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
  <img src="<?= base_url()?>assets/foto/logo.jpg" width = "150px" height = "150px" style ="border-radius: 50%; margin-left: 30px;">
  <hr>
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">

      <?php if ($_SESSION['role'] == "HRD" || $_SESSION['role'] == "Kepala HRD"): ?>
        <?php if ($url[4] == "tampilan"): ?>
          <li>
            <a class="active-menu" href="<?= base_url(); ?>system/tampilan/index.php"><i class="fa fa-desktop"></i> Halaman Utama</a>
          </li>
        <?php endif ?>
      <?php endif ?>
      <?php if ($_SESSION['role'] == "HRD" || $_SESSION['role'] == "Kepala HRD"): ?>
        <?php if ($url[4] != "tampilan"): ?>
          <li>
            <a href="<?= base_url(); ?>system/tampilan/index.php"><i class="fa fa-desktop"></i> Halaman Utama</a>
          </li>
        <?php endif ?>
      <?php endif ?>


      <?php if ($_SESSION['role'] == "HRD"): ?>
        <?php if ($url[4] == "data_pelamar"): ?>
          <li>
            <a class="active-menu" href="<?= base_url(); ?>system/data_pelamar/index.php"><i class="fa fa-book"></i> Data Pelamar</a>
          </li>
        <?php endif ?>
      <?php endif ?>

      <?php if ($_SESSION['role'] == "HRD"): ?>
        <?php if ($url[4] != "data_pelamar"): ?>
          <li>
            <a href="<?= base_url(); ?>system/data_pelamar/index.php"><i class="fa fa-book"></i> Data Pelamar</a>
          </li>
        <?php endif ?>
      <?php endif ?>

      <?php if ($_SESSION['role'] == "HRD"): ?>
        <?php if ($url[4] == "jabatan"): ?>
          <li>
            <a class="active-menu" href="<?= base_url(); ?>system/jabatan/index.php"><i class="fa fa-book"></i> Jabatan</a>
          </li>
        <?php endif ?>
      <?php endif ?>
      <?php if ($_SESSION['role'] == "HRD"): ?>
        <?php if ($url[4] != "jabatan"): ?>
          <li>
            <a href="<?= base_url(); ?>system/jabatan/index.php"><i class="fa fa-book"></i> Jabatan</a>
          </li>
        <?php endif ?>
      <?php endif ?>

      <?php if ($_SESSION['role'] == "HRD" || $_SESSION['role'] == "Kepala HRD"): ?>
        <?php if ($url[4] == "data_pelamar_diterima"): ?>
          <li>
            <a class="active-menu" href="<?= base_url(); ?>system/data_pelamar_diterima/index.php"><i class="fa fa-book"></i>Data Pelamar Yang Di Terima</a>
          </li>
        <?php endif ?>
      <?php endif ?>
      <?php if ($_SESSION['role'] == "HRD" || $_SESSION['role'] == "Kepala HRD"): ?>
        <?php if ($url[4] != "data_pelamar_diterima"): ?>
          <li>
            <a href="<?= base_url(); ?>system/data_pelamar_diterima/index.php"><i class="fa fa-book"></i>Data Pelamar Yang Di Terima</a>
          </li>
        <?php endif ?>
      <?php endif ?>


      <?php if ($_SESSION['role'] == "HRD" || $_SESSION['role'] == "Kepala HRD"): ?>
        <?php if ($url[4] == "data_pelamar_ditolak"): ?>
          <li>
            <a class="active-menu" href="<?= base_url(); ?>system/data_pelamar_ditolak/index.php"><i class="fa fa-book"></i>Data Pelamar Yang Di Tolak</a>
          </li>
        <?php endif ?>
      <?php endif ?>
      <?php if ($_SESSION['role'] == "HRD" || $_SESSION['role'] == "Kepala HRD"): ?>
        <?php if ($url[4] != "data_pelamar_ditolak"): ?>
          <li>
            <a href="<?= base_url(); ?>system/data_pelamar_ditolak/index.php"><i class="fa fa-book"></i>Data Pelamar Yang Di Tolak</a>
          </li>
        <?php endif ?>
      <?php endif ?>

      <li>
        <a href="<?= base_url(); ?>auth/proses/logout.php"><i class="fa fa-sign-out"></i>Keluar Akun</a>
      </li>
    </div>
  </nav>
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper">
    <div id="page-inner">



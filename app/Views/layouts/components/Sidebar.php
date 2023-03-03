<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
  <input type="text" style="background-color:linear-gradient (#A084DC)" class="warna">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">

      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">UKK PENGADUAN GRESA</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>

  </li>

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <?php
  if (session('level') == "admin") {
  ?>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-cog"></i>
        <span>ADMIN</span>

      </a>
      <div id="collapse2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Data</h6>
          <a class="collapse-item" href="/masyarakat">Data Masyarakat</a>
          <a class="collapse-item" href="/petugas">Data Petugas</a>
          <h6 class="collapse-header">Data Laporan</h6>
          <a class="collapse-item" href="/laporan">Laporan Pengaduan</a>
        </div>
      </div>
    </li>
  <?php
  }
  ?>

  <?php
  if (session('level') == "petugas") {
  ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-floppy-disk"></i>
        <span>PETUGAS</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Data</h6>
          <a class="collapse-item" href="/pengaduan"> Form Tanggapan</a>
        </div>
      </div>

    </li>
  <?php
  }
  ?>
  <?php
  if (session('level') == 'masyarakat') {
  ?>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#targetTwo" aria-expanded="true" aria-controls="collapse">
        <i class="fas fa-fw fa-cog"></i>
        <span>MASYARAKAT</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Data</h6>
          <a class="collapse-item" href="/pengaduan"> Form Pengaduan</a>
        </div>
      </div>

    </li>
  <?php
  }
  ?>
  <?php if (session()->get('log_in')) : ?>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/login">
        <i class="fas fa-sign-out-alt"></i>
        <span>Log Out</span></a>
    </li>

  <?php endif ?>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->


  <!-- Nav Item - Pages Collapse Menu -->


  <!-- Nav Item - Charts -->


  <!-- Nav Item - Tables -->

  
  <!-- Divider -->

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-cirle border-0" id="sidebarToggle"></button>
  </div>

  <!-- Sidebar Message-->

  </ul>
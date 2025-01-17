<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if(!isset($_SESSION['nama'])){header('location:../login.php');}
    ?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ADMINISTRATOR</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../bootstrap/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

       
    </head>
    <body class="sb-nav-fixed">
        <?php include '../config/Koneksi.php' ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href=""><b>ADMIN</b></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">

                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav d-md-inline-block form-inline  ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <!-- <li><hr class="dropdown-divider" /></li> -->
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="input_berita.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                                Berita
                            </a>
                            <a class="nav-link" href="input_jabatan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                                Jabatan
                            </a>
                            <a class="nav-link" href="input_jurusan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                                Jurusan
                            </a>
                            <a class="nav-link" href="input_mapel.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                                Mata Pelajaran
                            </a>
                            <a class="nav-link" href="input_gtk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                                Guru & Tenaga Kerja
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                               <div class="sb-nav-link-icon"><i class="fas fa-dolly-flatbed"></i></div>
                                Form Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="master_berita.php">
                                      <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                                      Daftar Berita
                                    </a>

                                    <a class="nav-link" href="master_jabatan.php">
                                      <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                                      Daftar Jabatan
                                    </a>

                                    <a class="nav-link" href="master_jurusan.php">
                                      <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                                      Daftar Jurusan
                                    </a>

                                    <a class="nav-link" href="master_mapel.php">
                                      <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                                      Daftar Mata Pelajaran
                                    </a>

                                    <a class="nav-link" href="master_gtk.php">
                                      <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                                      Daftar GTK
                                    </a>

                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: <?=$_SESSION['nama'] ?></div>
                            FORM ADMINISTRATOR
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

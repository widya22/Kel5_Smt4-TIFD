<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/fav.png') ?>">
    <!-- Author Meta -->
    <meta name="author" content="Colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>JTI-Surat</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600" rel="stylesheet">
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>

<body>
    <div class="main-wrapper-first">
        <div class="hero-area relative">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <i class="fa fa-envelope fa-2x"></i>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link ml-2 mr-2" href="<?php echo base_url('home') ?>">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-2 mr-2" href="#">Surat Saya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-2 mr-2" href="<?php echo base_url('form2') ?>">Surat Mitra</a>
                            </li>
                        </ul>
                        <li class="nav-item dropdown list-unstyled border border-primary text primary">
                            <?php
                            if (isset($_SESSION["status"])) {
                                $nama = $_SESSION['hasil_db'];
                                foreach ($nama as $u) {
                                    $nama_user = $u->NAMA_MHS;
                                }
                            ?>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    User : @<?php echo $nama_user ?>
                                </a>
                                <div class="dropdown-menu float-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"><?php echo $nama_user ?></a>
                                    <a class="dropdown-item" href="#">Ubah Akun</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">Keluar</a>
                                </div>

                            <?php } else { ?>
                                <a href="#" data-toggle="modal" class="nav-link" aria-haspopup="true" aria-expanded="false" data-target="#modalLogin">Masuk/Daftar</a>
                            <?php } ?>
                        </li>
                    </div>
                </nav>
            </header>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB SMA Negeri 1 Dipatiukur</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php echo "<font face='Something Looks Natural'>" ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <!-- memberi warna di navbar dan memulai tag navigasi -->
        <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/img/smansadip.png" height="30px" width="30px"> PPDB SMA Negeri 1 Dipatiukur</a> <!-- mengisi nama sekolah dan logo -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- kalo navbar-nav dihapus jadi ga kesamping tulisan menunya mr-auto buat posisi login daftar dikanan -->
                <li class="nav-item">
                    <!-- nav-item untuk membuat menu -->
                    <a class="nav-item nav-link" href="<?= base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="<?= base_url('infosekolah'); ?>">Info Sekolah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="<?= base_url('alur'); ?>">Alur Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="<?= base_url('hasilseleksi'); ?>">Hasil Seleksi</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-item nav-link" href="#">Data Pendaftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="#">Hasil Seleksi</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-item nav-link" href="#">About</a>
                </li>
            </ul>

            <a href="<?= base_url('login'); ?>" class="btn btn-light btn-outline-primary mr-3">Login</a>
            <a href="<?= base_url('login/registration'); ?>" class="btn btn-light btn-outline-warning">Daftar</a>


        </div>
    </nav>
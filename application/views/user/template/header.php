<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="favicon.png">
    <link href="<?= base_url('css/font-awesome-4.2.0/font-awesome-4.2.0/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/owl-carousel/owl.carousel.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('css/owl-carousel/owl.theme.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('css/magnific-popup.css') ?>" type="text/css" rel="stylesheet" media="all">
    <link href="<?= base_url('css/font.css') ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('css/fontello.css') ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= base_url('css/main.css') ?>" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url('css/paging.css') ?>" type="text/css" media="screen">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= base_url('aset/bootstrap.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('aset/AdminLTE.css') ?>">
    <link rel="stylesheet" href="<?= base_url('aset/cinta.css') ?>">
    <link rel="stylesheet" href="<?= base_url('aset/Ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('aset/skins/_all-skins.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('aset/custom.css') ?>">
    <link rel="stylesheet" href="<?= base_url('aset/icheck/green.css') ?>">
    <link rel="stylesheet" href="<?= base_url('aset/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('aset/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- jQuery 2.1.4 -->
    <script src="<?= base_url('aset/jQuery-2.js') ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?= base_url('aset/bootstrap.js') ?>"></script>
    <script src="<?= base_url('aset/icheck/icheck.js') ?>"></script>
    <script src="<?= base_url('aset/ckeditor/ckeditor.js') ?>"></script>
    <script src="<?= base_url('aset/Flot/jquery.flot.js') ?>"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="<?= base_url('aset/Flot/jquery.flot.resize.js') ?>"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="<?= base_url('aset/Flot/jquery.flot.pie.js') ?>"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="<?= base_url('aset/Flot/jquery.flot.categories.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('aset/app.js') ?>"></script>
    <script src="<?php echo base_url('aset/datatables.net/js/jquery.dataTables.min.js') ?>">
    </script>
    <script src="<?php echo base_url('aset/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>">
    </script>
    <script src="<?php echo base_url('aset/custom.js') ?>">
    </script>
</head>

<body id="pakarkrisan" class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url('Auth') ?>" class="logo navbar-fixed-top">

                <span><b><i class="fa fa-pagelines" aria-hidden="true"></i> Pakar Krisan</b></span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-fixed-top" role="navigation">

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">

                        <li>
                            <a href="<?= base_url('Auth') ?>"><i class="fa fa-home"></i> <span>Beranda</span></a>
                        </li>

                        <li>
                            <a href="<?= base_url('user/Diagnosis') ?>"><i class="fa fa-search-plus"></i> <span>Diagnosis</span></a>
                        </li>

                        <li>
                            <a href="<?= base_url('user/informasi') ?>"><i class="fa fa-bug"></i> <span>Hama dan Penyakit</span></a>
                        </li>
                        <!-- fitur bantuan pake controler login -->
                        <li class="dropdown messages-menu">
                            <a href="<?php echo base_url('Auth/bantuan') ?>"><i class="fa fa-question"></i> <span>Bantuan</span></a>
                        </li>

                        <li class="dropdown messages-menu">
                            <a href="<?php echo base_url('Auth/login') ?>"><i class="fa fa-sign-in"></i> <span>Login</span></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <br><br><br>
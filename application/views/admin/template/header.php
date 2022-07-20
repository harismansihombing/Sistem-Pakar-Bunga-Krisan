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
    <!-- <link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all"> -->
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
    <script src="<?php echo base_url('https://code.iconify.design/2/2.1.2/iconify.min.js') ?>">
    </script>

   
    <script>
        function readURL(input) {

            if (input.files &&
                input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#upload").change(function() {
            readURL(this);
        });

        $(function() {
            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2');
            CKEDITOR.replace('editor1a');
            CKEDITOR.replace('editor2a');
        })
    </script>


</head>

<body id="pakarkrisan" class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url('admin/Dashboard') ?>" class="logo navbar-fixed-top">
                <!-- logo for regular state and mobile devices -->
                <!-- <img src="<?= base_url('aset/banner/logoo.png') ?>" width="50px"> -->
                <span><b><i class="fa fa-pagelines" aria-hidden="true"></i> Pakar Krisan</b></span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-fixed-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Menu Side Baar</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <a href="" class="dropdown-toggle fa fa fa-cogs" aria-hidden="true" data-toggle="dropdown">
                                <!-- <img src="gambar/admin/admin.png" class="user-image" alt="User Image"> -->
                                <!-- <span class="mr-2 d-none d-lg-inline text-dark-800 small"><?= $data['nama_lengkap'] ?></span> -->
                                <?php echo ucfirst($_SESSION['nama_lengkap']); ?>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="user-header bg-info">
                                    <img src="<?= base_url('aset/banner/admin2.png') ?>" width="100px"> <br> <br>
                                    <i class="text-bold" style="color: white;"> ADMIN PAKAR KRISAN</i>
                                </li>
                                <li class="user-footer" style="color: darkcyan;">
                                    <div class="pull-left">
                                        <a class="btn btn-default btn-flat" href="<?= base_url('admin/admin/edit_akun/' . $_SESSION['id_admin']) ?>"><i class="fa fa-info-circle"></i> <span>Profile</span></a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-flat" href="<?= base_url('Auth/logout') ?>" onclick="return confirm('Yakin keluar dari Aplikasi?');"><i class="fa fa-sign-out"></i> <span>LogOut</span></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <br><br><br>
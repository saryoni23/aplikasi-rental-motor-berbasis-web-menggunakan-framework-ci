<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <title><?php echo $title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/bootstrap/css/bootstrap.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/main.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/theme.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/MoneAdmin.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/Font-Awesome/css/font-awesome.css') ?>" />
    <link href="<?php echo base_url('assets/admin/plugins/dataTables/dataTables.bootstrap.css') ?>" rel="stylesheet" />
    <?php if ($headerTitle == 'Detail Laporan Pemesanan') { ?>
        <script type="text/javascript" src="<?php echo base_url('assets/choosen/js/jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/choosen/js/bootstrap.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/choosen/js/chosen.jquery.js'); ?>"></script>
        <script type="text/javascript">
            $(function() {
                $('.chzn-select').chosen();
                $('.chzn-select-deselect').chosen({
                    allow_single_deselect: true
                });
            });
        </script>
    <?php
    } ?>

</head>

<body class="padTop53 ">

    <div id="wrap">

        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>

                <header class="navbar-header">

                    <a href="<?php echo site_url('Admin_Controller') ?>" class="navbar-brand"> Rmotor </a>
                </header>

            </nav>
        </div>

        <div id="left">

            <ul id="menu" class="collapse">
                <li class="panel"><a href="<?php echo site_url('Admin_Controller') ?>"></i> Home</a></li>
                <li><a href="<?php echo site_url('Admin_Controller/motor') ?>"></i> Motor</a></li>
                <li><a href="<?php echo site_url('Admin_Controller/pegawai') ?>"></i> Admin</a></li>
                <li><a href="<?php echo site_url('Admin_Controller/customer') ?>"></i> Pelanggan</a></li>
                <li><a href="<?php echo site_url('Admin_Controller/pemesanan') ?>"></i> Rentalan</a></li>
                <li><a href="<?php echo site_url('Admin_Controller/laporan') ?>"></i> Grafik</a></li>
                <li><a href="<?php echo site_url('Login_Controller/logout') ?>"></i> Keluar </a></li>

            </ul>
        </div>

        <div id="content">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>  <?= $namaAplikasi ?> </h2>
                    </div>
                </div>

                <hr />
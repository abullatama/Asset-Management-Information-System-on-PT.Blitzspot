<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blitzspot - Data Persetujuan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/font-awesome.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/themify-icons.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/metisMenu.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/owl.carousel.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/slicknav.min.css' ?>">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatable/css/jquery.dataTables.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatable/css/dataTables.bootstrap4.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatable/css/responsive.bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatable/css/responsive.jqueryui.min.css' ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/typography.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/default-css.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/styles.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/responsive.css' ?>">
    <!-- modernizr css -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/vendor/modernizr-2.8.3.min.js' ?>"></script>
    <style>
        .no-gutters {
            margin-right: 100px;
            margin-left: 0;

        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="<?php echo base_url() . 'assets/brand/blitz.png' ?>" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="<?php echo base_url() . 'direktur' ?>" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url() . 'direktur/persetujuan' ?>" aria-expanded="true"><i class="fa fa-legal"></i><span>Persetujuan</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-receipt"></i><span>Laporan</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo base_url() . 'direktur/laporan_pengadaan' ?>">Pengadaan</a></li>
                                    <li><a href="<?php echo base_url() . 'direktur/laporan_mutasi' ?>">Mutasi</a></li>
                                    <li><a href="<?php echo base_url() . 'direktur/laporan_aset' ?>">Aset</a></li>
                                    <li><a href="<?php echo base_url() . 'direktur/laporan_pengajuan' ?>">Pengajuan</a></li>
                                    <li><a href="<?php echo base_url() . 'direktur/laporan_pemeliharaan' ?>">Pemeliharaan</a></li>
                                    <li><a href="<?php echo base_url() . 'direktur/laporan_perencanaan' ?>">Perencanaan Pengadaan</a></li>
                                    <li><a href="<?php echo base_url() . 'direktur/laporan_pengaduan' ?>">Pengaduan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content" style="min-height:auto">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Persetujuan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Persetujuan</a></li>
                                <li><span>Data Persetujuan</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?php echo base_url() . 'assets/vendor/template/images/author/avatar.png' ?>" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <!--$username--><?= $this->session->userdata('nama'); ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="<?= base_url() . 'auth/logout' ?>">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <?php if ($this->session->flashdata('setuju')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Perencanaan telah<strong> <?php echo $this->session->flashdata('setuju'); ?></strong>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <?php if ($this->session->flashdata('tolak')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Pengadaan telah <?php echo $this->session->flashdata('tolak'); ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <h4 class="header-title">Persetujuan Pengadaan</h4>
                                <!--cetak-->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="1-tab" data-toggle="tab" href="#1" role="tab" aria-controls="1" aria-selected="true">Aset Tetap</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="2-tab" data-toggle="tab" href="#2" role="tab" aria-controls="2" aria-selected="false">Aset Habis Pakai</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="1" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="data-tables">
                                            <table id="dataTable1" class="text-center table-striped responsive" style="width=100%">
                                                <thead class="bg-light text-capitalize">
                                                    <tr class="text-left">
                                                        <th>No</th>
                                                        <th>Nama Aset</th>
                                                        <th>Merek</th>
                                                        <th>Tipe</th>
                                                        <th>Spesifikasi</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Jumlah</th>
                                                        <th>Harga Total</th>
                                                        <th>Keterangan</th>
                                                        <th>Info</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($pengadaan as $a) {
                                                        if ($a->Status != 'Belum Diajukan') {
                                                            ?>
                                                            <tr class="text-left">
                                                                <td><?php echo $no++ ?></td>
                                                                <td><?php echo $a->nama_aset ?></td>
                                                                <td><?php echo $a->merek ?></td>
                                                                <td><?php echo $a->tipe ?></td>
                                                                <td><?php echo $a->spesifikasi ?></td>
                                                                <td><?php echo 'Rp.' . $a->harga_satuan ?></td>
                                                                <td><?php echo $a->jumlah ?></td>
                                                                <td><?php echo 'Rp.' . $a->harga_total ?></td>
                                                                <td><?php echo $a->keterangan ?></td>
                                                                <td>
                                                                    <p data-toggle="modal" data-target="#modal-detail" id="detail"><a href="#"><span class="badge badge-pill badge-info">Info</span></a></p>
                                                                </td>
                                                                <td>
                                                                    <?php if ($a->Status == 'Disetujui') { ?>
                                                                        <h6><span class="badge badge-pill badge-success"><?= $a->Status ?></span></h6>
                                                                    <?php } else { ?>
                                                                        <h6><span class=" badge badge-pill badge-secondary float-center"><?php echo $a->Status ?></span></h6>
                                                                    <?php } ?>
                                                                </td>
                                                                <td class="text-center border-left" style="witdh:100%">
                                                                    <?php if ($a->Status == 'Belum Disetujui') { ?>
                                                                        <a href="#" class="badge badge-warning" id="persetujuan" data-toggle="modal" data-target="#modal-persetujuan-1" data-no_perencanaan="<?= $a->no_perencanaan ?>" data-nama_aset="<?= $a->nama_aset ?>" data-merek="<?= $a->merek ?>" data-tipe="<?= $a->tipe ?>" data-spesifikasi="<?= $a->spesifikasi ?>" data-harga_satuan="<?= $a->harga_satuan ?>" data-jumlah="<?= $a->jumlah ?>" data-harga_total="<?= $a->harga_total ?>" data-keterangan="<?= $a->keterangan ?>">
                                                                            <h6><i class="fa fa-pencil"></i></h6>
                                                                        </a>
                                                                        <a href="#" class="badge badge-danger" id="tolak" data-toggle="modal" data-target="#modal-tolak" data-no_perencanaan="<?= $a->no_perencanaan ?>">
                                                                            <h6><i class="fa fa-close"></i></h6>
                                                                        </a>
                                                                    <?php } else { ?>
                                                                        <a href="#" class="badge badge-warning" id="edit" disabled>
                                                                            <h6><i class="fa fa-pencil"></i></h6>
                                                                        </a>
                                                                        <a href="#" class="badge badge-danger" id="edit" disabled>
                                                                            <h6><i class="fa fa-close"></i></h6>
                                                                        </a>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="2-tab">
                                        <div class="data-tables">
                                            <table id="dataTable2" class="text-center table-striped responsive" style="width=100%">
                                                <thead class="bg-light text-capitalize">
                                                    <tr class="text-left">
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Jumlah</th>
                                                        <th>Harga Total</th>
                                                        <th>Keterangan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($pengadaan2 as $a) {
                                                        if ($a->Status != 'Belum Diajukan') {
                                                            ?>
                                                            <tr class="text-left">
                                                                <td><?php echo $no++ ?></td>
                                                                <td><?php echo $a->nama_aset ?></td>
                                                                <td><?php echo $a->harga_satuan ?></td>
                                                                <td><?php echo $a->jumlah ?></td>
                                                                <td><?php echo 'Rp.' . $a->harga_total ?></td>
                                                                <td><?php echo $a->keterangan ?></td>
                                                                <td>
                                                                    <?php if ($a->Status == 'Disetujui') { ?>
                                                                        <h6><span class="badge badge-pill badge-success"><?= $a->Status ?></span></h6>
                                                                    <?php } else { ?>
                                                                        <h6><span class=" badge badge-pill badge-secondary float-center"><?php echo $a->Status ?></span></h6>
                                                                    <?php } ?>
                                                                </td>
                                                                <td class="text-center border-left">
                                                                    <?php if ($a->Status == 'Belum Disetujui') { ?>
                                                                        <a href="#" class="badge badge-warning" id="persetujuan2" data-toggle="modal" data-target="#modal-persetujuan-2" data-no_perencanaan="<?= $a->no_perencanaan ?>" data-nama_aset="<?= $a->nama_aset ?>" data-harga_satuan="<?= $a->harga_satuan ?>" data-jumlah="<?= $a->jumlah ?>" data-harga_total="<?= $a->harga_total ?>" data-keterangan="<?= $a->keterangan ?>">
                                                                            <h6><i class="fa fa-pencil"></i></h6>
                                                                        </a>
                                                                        <a href="#" class="badge badge-danger" id="tolak" data-toggle="modal" data-target="#modal-tolak" data-no_perencanaan="<?= $a->no_perencanaan ?>">
                                                                            <h6><i class="fa fa-close"></i></h6>
                                                                        </a>
                                                                    <?php } else { ?>
                                                                        <a href="#" class="badge badge-warning" id="edit" disabled>
                                                                            <h6><i class="fa fa-pencil"></i></h6>
                                                                        </a>
                                                                        <a href="#" class="badge badge-danger" id="edit" disabled>
                                                                            <h6><i class="fa fa-close"></i></h6>
                                                                        </a>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2019. All right reserved. PT. Blitzspot Network Solution</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal-->

    <!--modal detail-->
    <div class="modal fade bd-example-modal-lg" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Pengadaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="data-tables">
                        <table id="dataTable-modal" class="text-center responsive" style="width=100%">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Aset</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($aset as $a) {
                                    if ($a->minimal_stok != 0) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $a->nama_aset ?></td>
                                            <td><?php echo $a->stok ?></td>
                                        </tr>
                                    <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--modal persetujuan-->
    <div class="modal fade" id="modal-persetujuan-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Persetujuan Pengadaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() . 'pengadaan/persetujuan' ?>" method="post">
                    <div class="modal-body">
                        <input class="form-control" type="hidden" id="no_pengadaan" name="no_perencanaan">
                        <table class="text-left" style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; width: 100%; border:0px">
                            <tr>
                                <td>Nama Aset</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="nama_aset" name="nama_aset" readonly></td>
                            </tr>
                            <tr>
                                <td>Merek</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="merek" name="merek" readonly></td>
                            </tr>
                            <tr>
                                <td>Tipe</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="tipe" name="tipe" readonly></td>
                            </tr>
                            <tr>
                                <td>Spesifikasi</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="spesifikasi" name="spesifikasi" readonly></td>
                            </tr>
                            <tr>
                                <td>Harga Satuan</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="harga_satuan" name="harga_satuan"></td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="jumlah" name="jumlah" onclick="sum();"></td>
                            </tr>
                            <tr>
                                <td>Harga Total</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="harga_total" name="harga_total" readonly></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td style="padding:8px"><textarea class="form-control" type="text" id="keterangan" name="keterangan"></textarea></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="persetujuan" value="setuju" class="btn btn-success">Setujui</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--tolak-->
    <div class="modal fade" id="modal-tolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tolak Pengadaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() . 'pengadaan/persetujuan' ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Keterangan</label>
                            <textarea class="form-control" type="text" rows="5" id="keterangan" name="keterangan" placeholder="Keterangan" required></textarea>
                        </div>
                        <input class="form-control" type="hidden" id="no_pengadaan" name="no_perencanaan">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="persetujuan" value="tolak" class=" btn btn-danger">Tolak</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--modal persetujuan 2-->
    <div class="modal fade" id="modal-persetujuan-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Persetujuan Pengadaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() . 'pengadaan/persetujuan' ?>" method="post">
                    <div class="modal-body">
                        <input class="form-control" type="hidden" id="no_pengadaan2" name="no_perencanaan">
                        <table class="text-left" style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; width: 100%; border:0px">
                            <tr>
                                <td>Nama Aset</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="nama_aset" name="nama_aset" readonly></td>
                            </tr>
                            <tr>
                                <td>Harga Satuan</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="harga_satuan" name="harga_satuan" onclick="sum();"></td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="jumlah" name="jumlah" onclick="sum();"></td>
                            </tr>
                            <tr>
                                <td>Harga Total</td>
                                <td style="padding:8px"><input class="form-control" type="text" id="harga_total" name="harga_total" readonly></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td style="padding:8px"><textarea class="form-control" type="text" id="keterangan" name="keterangan"></textarea></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="persetujuan" value="setuju" class="btn btn-success">Setujui</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--modal end-->
    <!-- offset area end -->
    <script>
        function sum() {
            var bil1 = document.getElementById('harga_satuan').value;
            var bil2 = document.getElementById('jumlah').value;
            var result = parseInt(bil1) * parseInt(bil2);
            if (!isNaN(result)) {
                document.getElementById('harga_total').value = result;
            }
        }
    </script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/vendor/jquery-2.2.4.min.js' ?>"></script>
    <script type="text/javascript">
        function sum() {
            var bil1 = document.getElementById('harga_satuan').value;
            var bil2 = document.getElementById('jumlah').value;
            var result = parseInt(bil1) * parseInt(bil2);
            if (!isNaN(result)) {
                document.getElementById('harga_total').value = result;
            }
        }
        $(document).on("click", "#persetujuan", function() {
            var no_perencanaan = $(this).data('no_perencanaan');
            var nama_aset = $(this).data('nama_aset');
            var merek = $(this).data('merek');
            var tipe = $(this).data('tipe');
            var spesifikasi = $(this).data('spesifikasi');
            var harga_satuan = $(this).data('harga_satuan');
            var jumlah = $(this).data('jumlah');
            var harga_total = $(this).data('harga_total');
            var keterangan = $(this).data('keterangan');
            $("#modal-persetujuan-1 #no_pengadaan").val(no_perencanaan);
            $("#modal-persetujuan-1 #nama_aset").val(nama_aset);
            $("#modal-persetujuan-1 #merek").val(merek);
            $("#modal-persetujuan-1 #tipe").val(tipe);
            $("#modal-persetujuan-1 #spesifikasi").val(spesifikasi);
            $("#modal-persetujuan-1 #harga_satuan").val(harga_satuan);
            $("#modal-persetujuan-1 #jumlah").val(jumlah);
            $("#modal-persetujuan-1 #harga_total").val(harga_total);
            $("#modal-persetujuan-1 #keterangan").val(keterangan);
        })
        $(document).on("click", "#tolak", function() {
            var no_perencanaan = $(this).data('no_perencanaan');
            $("#modal-tolak #no_pengadaan").val(no_perencanaan);
        })
        $(document).on("click", "#persetujuan2", function() {
            var no_perencanaan = $(this).data('no_perencanaan');
            var nama_aset = $(this).data('nama_aset');
            var harga_satuan = $(this).data('harga_satuan');
            var jumlah = $(this).data('jumlah');
            var harga_total = $(this).data('harga_total');
            var keterangan = $(this).data('keterangan');
            $("#modal-persetujuan-2 #no_pengadaan2").val(no_perencanaan);
            $("#modal-persetujuan-2 #nama_aset").val(nama_aset);
            $("#modal-persetujuan-2 #harga_satuan").val(harga_satuan);
            $("#modal-persetujuan-2 #jumlah").val(jumlah);
            $("#modal-persetujuan-2 #harga_total").val(harga_total);
            $("#modal-persetujuan-2 #keterangan").val(keterangan);
        })

        $(function() {
            $(document).on('click', '#persetujuan', function(e) {
                e.preventDefault();
                $("#modal-persetujuan-1").modal('show');
                $.post('<?= base_url() . 'direktur/detail_stok' ?>', {
                        no_perencanaan: $(this).attr('data-no_perencanaan')
                    },
                    function(html) {
                        $(".detail-stok").html(html);
                    }
                );
            });
        });

        $(function() {
            $(document).on('click', '#persetujuan2', function(e) {
                e.preventDefault();
                $("#modal-persetujuan-2").modal('show');
                $.post('<?= base_url() . 'direktur/detail_stok2' ?>', {
                        no_perencanaan: $(this).attr('data-no_perencanaan')
                    },
                    function(html) {
                        $(".detail-stok2").html(html);
                    }
                );
            });
        });

        $(function() {
            $("#dataTable-modal").dataTable();
        });
        $(function() {
            $("#dataTable2").dataTable();
        });
        $(document).ready(function() {
            var table = $('#dataTable1').DataTable({
                "columnDefs": [{
                    "orderable": false,
                    "targets": 9
                }, {
                    "orderable": false,
                    "targets": 11
                }],
                lengthChange: false,
                buttons: [{
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },
                    'colvis'
                ]
            });

            table.buttons().container()
                .appendTo('#dataTable1_wrapper .col-md-6:eq(0)');
        });
    </script>
    <!-- jquery latest version -->
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/popper.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/metisMenu.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/jquery.slicknav.min.js' ?>"></script>

    <!-- Start datatable js -->
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/jquery.dataTables.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/jquery.dataTables.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/dataTables.bootstrap4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/dataTables.responsive.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/responsive.bootstrap.min.js' ?>"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/plugins.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/scripts.js' ?>"></script>
</body>

</html>
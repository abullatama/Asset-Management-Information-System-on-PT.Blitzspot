<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blitzspot - Data Perencanaan</title>
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
                                <a href="<?php echo base_url() . 'bendahara' ?>" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() . 'bendahara/pengadaan' ?>" aria-expanded="true"><i class="ti-layout-slider"></i>
                                    <span>
                                        Pengadaan
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() . 'bendahara/DataAset' ?>" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>
                                        Aset
                                    </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url() . 'bendahara/perencanaan' ?>" aria-expanded="true"><i class="ti-slice"></i>
                                    <span>
                                        Perencanaan Pengadaan
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() . 'bendahara/pengajuan' ?>" aria-expanded="true"><i class="fa fa-hand-lizard-o"></i>
                                    <span>
                                        Pengajuan
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() . 'bendahara/pengaduan' ?>"><i class="fa fa-thumb-tack"></i>
                                    <span>
                                        Pengaduan
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() . 'bendahara/pemeliharaan' ?>"><i class="fa fa-refresh"></i>
                                    <span>
                                        Pemeliharaan
                                    </span>
                                </a>
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
                            <h4 class="page-title pull-left">Perencanaan Pengadaan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><span>Data Perencanaan</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?php echo base_url() . 'assets/vendor/template/images/author/avatar.png' ?>" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <!--$username--><?= $this->session->userdata('nama'); ?><i class="fa fa-angle-down"></i></h4>
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
                                <?php if ($this->session->flashdata('flash')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Perencanaan <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <?php if ($this->session->flashdata('ubah')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Perencanaan <strong>berhasil</strong> <?php echo $this->session->flashdata('ubah'); ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <h4 class="header-title">Perencanaan Pengadaan</h4>
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
                                                        <th>Nama Barang</th>
                                                        <th>Merek</th>
                                                        <th>Tipe</th>
                                                        <th>Spesifikasi</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Jumlah</th>
                                                        <th>Harga Total</th>
                                                        <th>Keterangan</th>
                                                        <th>Status</th>
                                                        <th>Tanggal</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($aset_tetap as $a) {
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
                                                                <?php if ($a->Status == 'Ditolak') {  ?>
                                                                    <h6><span class="badge badge-pill badge-danger"><?php echo $a->Status ?></span></h6>
                                                                <?php } elseif ($a->Status == 'Belum Diajukan') { ?>
                                                                    <h6><span class="badge badge-pill badge-primary"><?php echo $a->Status ?></span></h6>
                                                                <?php } else { ?>
                                                                    <h6><span class="badge badge-pill badge-secondary"><?php echo $a->Status ?></span></h6>
                                                                <?php } ?>
                                                            </td>
                                                            <td><?php echo $a->tanggal ?></td>
                                                            <td width="100%">
                                                                <?php if ($a->Status == 'Belum Diajukan' || $a->Status == 'Ditolak') { ?>
                                                                    <a href="#" class="badge badge-warning" id="edit" data-toggle="modal" data-target="#modal-edit" data-no_perencanaan="<?= $a->no_perencanaan ?>" data-nama_aset="<?= $a->nama_aset ?>" data-jenis_aset="<?= $a->jenis_aset ?>" data-merek="<?= $a->merek ?>" data-tipe="<?= $a->tipe ?>" data-spesifikasi="<?= $a->spesifikasi ?>" data-harga_satuan="<?= $a->harga_satuan ?>" data-jumlah="<?= $a->jumlah ?>" data-harga_total="<?= $a->harga_total ?>" data-keterangan="<?= $a->keterangan ?>">
                                                                        <h6><i class="fa fa-pencil"></i></h6>
                                                                    </a>
                                                                    <a href="#" class="badge badge-danger" id="hapus" data-toggle="modal" data-target="#modal-hapus" data-no_perencanaan="<?= $a->no_perencanaan ?>">
                                                                        <h6><i class="fa fa-trash"></i></h6>
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <a href="#" class="badge badge-warning" id="editonly">
                                                                        <h6><i class="fa fa-pencil"></i></h6>
                                                                    </a>
                                                                    <a href="#" class="badge badge-danger" id="hapus">
                                                                        <h6><i class="fa fa-trash"></i></h6>
                                                                    </a>
                                                                <?php } ?>

                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <a href="<?php echo base_url() . 'bendahara/tambah_data_perencanaan' ?>">
                                            <button type="button" class="btn btn-success mb-3">Tambah Data Perencanaan</button>
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="2-tab">
                                        <div class="data-tables">
                                            <table id="dataTable5" class="text-center table-striped responsive" style="width=100%">
                                                <thead class="bg-light text-capitalize">
                                                    <tr class="text-left">
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Jumlah</th>
                                                        <th>Harga Total</th>
                                                        <th>Keterangan</th>
                                                        <th>Status</th>
                                                        <th>Tanggal</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($habis_pakai as $a) {
                                                        ?>
                                                        <tr class="text-left">
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $a->nama_aset ?></td>
                                                            <td><?php echo $a->harga_satuan ?></td>
                                                            <td><?php echo $a->jumlah ?></td>
                                                            <td><?php echo $a->harga_total ?></td>
                                                            <td><?php echo $a->keterangan ?></td>
                                                            <td>
                                                                <?php if ($a->Status == 'Disetujui') {  ?>
                                                                    <h6><span class="badge badge-pill badge-success"><?php echo $a->Status ?></span></h6>
                                                                <?php } elseif ($a->Status == 'Belum Diajukan') { ?>
                                                                    <h6><span class="badge badge-pill badge-primary"><?php echo $a->Status ?></span></h6>
                                                                <?php } else { ?>
                                                                    <h6><span class="badge badge-pill badge-secondary"><?php echo $a->Status ?></span></h6>
                                                                <?php } ?>
                                                            </td>
                                                            <td><?php echo $a->tanggal ?></td>
                                                            <td>
                                                                <?php if ($a->Status == 'Belum Diajukan' || $a->Status == 'Ditolak') { ?>
                                                                    <a href="#" class="badge badge-warning" id="edit2" data-toggle="modal" data-target="#modal-edit2" data-no_perencanaan="<?= $a->no_perencanaan ?>" data-nama_aset="<?= $a->nama_aset ?>" data-jenis_aset="<?= $a->jenis_aset ?>" data-merek="<?= $a->merek ?>" data-tipe="<?= $a->tipe ?>" data-spesifikasi="<?= $a->spesifikasi ?>" data-harga_satuan="<?= $a->harga_satuan ?>" data-jumlah="<?= $a->jumlah ?>" data-harga_total="<?= $a->harga_total ?>" data-keterangan="<?= $a->keterangan ?>">
                                                                        <h6><i class="fa fa-pencil"></i></h6>
                                                                    </a>
                                                                    <a href="#" class="badge badge-danger" id="hapus" data-toggle="modal" data-target="#modal-hapus" data-no_perencanaan="<?= $a->no_perencanaan ?>">
                                                                        <h6><i class="fa fa-trash"></i></h6>
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <a href="#" class="badge badge-warning" id="edit2">
                                                                        <h6><i class="fa fa-pencil"></i></h6>
                                                                    </a>
                                                                    <a href="#" class="badge badge-danger" id="hapus">
                                                                        <h6><i class="fa fa-trash"></i></h6>
                                                                    </a>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <a href="<?php echo base_url() . 'bendahara/tambah_data_perencanaan' ?>">
                                            <button type="button" class="btn btn-success mb-3">Tambah Data Perencanaan</button>
                                        </a>
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

    <!--modal end-->
    <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Perencanaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() . 'perencanaan/hapus_perencanaan' ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" id="no_perencanaan" name="no_perencanaan">
                        <p>Apakah anda yakin ingin menghapus data ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--modal edit aset tetap-->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="1-tab" data-toggle="tab" href="#11" role="tab" aria-controls="1" aria-selected="true">Ubah Data Perencanaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="2-tab" data-toggle="tab" href="#22" role="tab" aria-controls="2" aria-selected="false">Ajukan Perencanaan</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="11" role="tabpanel" aria-labelledby="home-tab">
                            <form action="<?= base_url() . 'pengadaan/ubah_data_pengadaan' ?>" method="post">
                                <input class="form-control" type="hidden" id="no_perencanaan" name="no_perencanaan">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama Aset</label>
                                    <input class="form-control" type="text" id="nama_aset" name="nama_aset" placeholder="Nama Aset" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Jenis Aset</label>
                                    <select class="custom-select" id="jenis_aset" name="jenis_aset">
                                        <option selected="selected" value="Tidak Habis Pakai">Tidak Habis Pakai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="col-form-label">Merek</label>
                                    <input class="form-control" type="text" id="merek" name="merek" placeholder="Merek" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Tipe</label>
                                    <input class="form-control" type="text" id="tipe" name="tipe" placeholder="Tipe" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Spesifikasi</label>
                                    <input class="form-control" type="text" id="spesifikasi" name="spesifikasi" placeholder="Spesifikasi" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-tel-input" class="col-form-label">Harga Satuan</label>
                                    <input class="form-control" type="text" id="harga_satuan" name="harga_satuan" placeholder="Harga Satuan" onkeyup="sum();" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah" class="">Jumlah</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" onkeyup="sum();" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-form-label">Harga Total</label>
                                    <input class="form-control" type="text" id="harga_total" name="harga_total" placeholder="Harga Total" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-form-label">Keterangan</label>
                                    <textarea class="form-control" type="text" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="22" role="tabpanel" aria-labelledby="2-tab">
                            <form action="<?= base_url() . 'perencanaan/ajukan_perencanaan' ?>" method="POST">
                                <input type="hidden" id="no_perencanaan2" name="no_perencanaan2">
                                <p>Apakah anda yakin ingin mengajukan data ini?</p><br>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Ajukan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-editonly" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="1-tab" data-toggle="tab" href="#11" role="tab" aria-controls="1" aria-selected="true">Ubah Data Perencanaan</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="11" role="tabpanel" aria-labelledby="home-tab">
                            <form action="<?= base_url() . 'pengadaan/ubah_data_pengadaan' ?>" method="post">
                                <input class="form-control" type="hidden" id="no_perencanaan" name="no_perencanaan">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama Aset</label>
                                    <input class="form-control" type="text" id="nama_aset" name="nama_aset" placeholder="Nama Aset" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Jenis Aset</label>
                                    <select class="custom-select" id="jenis_aset" name="jenis_aset">
                                        <option selected="selected" value="Tidak Habis Pakai">Tidak Habis Pakai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="col-form-label">Merek</label>
                                    <input class="form-control" type="text" id="merek" name="merek" placeholder="Merek" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Tipe</label>
                                    <input class="form-control" type="text" id="tipe" name="tipe" placeholder="Tipe" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Spesifikasi</label>
                                    <input class="form-control" type="text" id="spesifikasi" name="spesifikasi" placeholder="Spesifikasi" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-tel-input" class="col-form-label">Harga Satuan</label>
                                    <input class="form-control" type="text" id="harga_satuan" name="harga_satuan" placeholder="Harga Satuan" onkeyup="sum();" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah" class="">Jumlah</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" onkeyup="sum();" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-form-label">Harga Total</label>
                                    <input class="form-control" type="text" id="harga_total" name="harga_total" placeholder="Harga Total" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-form-label">Keterangan</label>
                                    <textarea class="form-control" type="text" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal edit aset habis pakai-->
    <div class="modal fade" id="modal-edit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="1-tab" data-toggle="tab" href="#13" role="tab" aria-controls="1" aria-selected="true">Ubah Data Perencanaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="2-tab" data-toggle="tab" href="#14" role="tab" aria-controls="2" aria-selected="false">Ajukan Perencanaan</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="13" role="tabpanel" aria-labelledby="home-tab">
                            <form action="<?= base_url() . 'pengadaan/ubah_data_pengadaan' ?>" method="post">
                                <input class="form-control" type="hidden" id="no_perencanaan" name="no_perencanaan">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama Aset</label>
                                    <input class="form-control" type="text" id="nama_aset" name="nama_aset" placeholder="Nama Aset" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Jenis Aset</label>
                                    <select class="custom-select" id="jenis_aset" name="jenis_aset">
                                        <option selected="selected" value="Habis Pakai">Habis Pakai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="col-form-label">Merek</label>
                                    <input class="form-control" type="text" id="merek" name="merek" placeholder="Merek" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Tipe</label>
                                    <input class="form-control" type="text" id="tipe" name="tipe" placeholder="Tipe" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Spesifikasi</label>
                                    <input class="form-control" type="text" id="spesifikasi" name="spesifikasi" placeholder="Spesifikasi" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-tel-input" class="col-form-label">Harga Satuan</label>
                                    <input class="form-control" type="text" id="harga_satuan" name="harga_satuan" placeholder="Harga Satuan" onkeyup="sum();" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah" class="">Jumlah</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" onkeyup="sum();" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-form-label">Harga Total</label>
                                    <input class="form-control" type="text" id="harga_total" name="harga_total" placeholder="Harga Total" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-form-label">Keterangan</label>
                                    <textarea class="form-control" type="text" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="14" role="tabpanel" aria-labelledby="2-tab">
                            <form action="<?= base_url() . 'perencanaan/ajukan_perencanaan' ?>" method="POST">
                                <input type="hidden" id="no_perencanaan2" name="no_perencanaan2">
                                <p>Apakah anda yakin ingin mengajukan data ini?</p><br>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Ajukan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit2only" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="1-tab" data-toggle="tab" href="#13" role="tab" aria-controls="1" aria-selected="true">Ubah Data Perencanaan</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="13" role="tabpanel" aria-labelledby="home-tab">
                            <form action="<?= base_url() . 'pengadaan/ubah_data_pengadaan' ?>" method="post">
                                <input class="form-control" type="hidden" id="no_perencanaan" name="no_perencanaan">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama Aset</label>
                                    <input class="form-control" type="text" id="nama_aset" name="nama_aset" placeholder="Nama Aset" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Jenis Aset</label>
                                    <select class="custom-select" id="jenis_aset" name="jenis_aset">
                                        <option selected="selected" value="Habis Pakai">Habis Pakai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="example-tel-input" class="col-form-label">Harga Satuan</label>
                                    <input class="form-control" type="text" id="harga_satuan" name="harga_satuan" placeholder="Harga Satuan" onkeyup="sum();" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah" class="">Jumlah</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" onkeyup="sum();" required>
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-form-label">Harga Total</label>
                                    <input class="form-control" type="text" id="harga_total" name="harga_total" placeholder="Harga Total" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-form-label">Keterangan</label>
                                    <textarea class="form-control" type="text" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal end-->

    <!-- offset area end -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/vendor/jquery-2.2.4.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).on("click", "#verifikasi", function() {
            var id_mutasi = $(this).data('id_mutasi');
            var nama_pelanggan = $(this).data('nama_pelanggan');
            var alamat = $(this).data('alamat');
            $("#modal-verifikasi #id_mutasi").val(id_mutasi);
            $("#modal-verifikasi #nama_pelanggan").val(nama_pelanggan);
            $("#modal-verifikasi #alamat").val(alamat);
        })

        $(document).on("click", "#verifikasi", function() {
            var no_pengadaan = $(this).data('no_pengadaan');
            var nama_aset = $(this).data('nama_aset');
            $("#modal-verifikasi #no_pengadaan").val(no_pengadaan);
            $("#modal-verifikasi #nama_aset").val(nama_aset);
        })
        $(document).on("click", "#edit", function() {
            var no_perencanaan = $(this).data('no_perencanaan');
            var nama_aset = $(this).data('nama_aset');
            var merek = $(this).data('merek');
            var tipe = $(this).data('tipe');
            var spesifikasi = $(this).data('spesifikasi');
            var harga_satuan = $(this).data('harga_satuan');
            var jumlah = $(this).data('jumlah');
            var harga_total = $(this).data('harga_total');
            var keterangan = $(this).data('keterangan');
            $("#modal-edit #no_perencanaan2").val(no_perencanaan);
            $("#modal-edit #no_perencanaan").val(no_perencanaan);
            $("#modal-edit #nama_aset").val(nama_aset);
            $("#modal-edit #merek").val(merek);
            $("#modal-edit #tipe").val(tipe);
            $("#modal-edit #spesifikasi").val(spesifikasi);
            $("#modal-edit #harga_satuan").val(harga_satuan);
            $("#modal-edit #jumlah").val(jumlah);
            $("#modal-edit #harga_total").val(harga_total);
            $("#modal-edit #keterangan").val(keterangan);
        })
        $(document).on("click", "#edit2", function() {
            var no_perencanaan = $(this).data('no_perencanaan');
            var nama_aset = $(this).data('nama_aset');
            var merek = $(this).data('merek');
            var tipe = $(this).data('tipe');
            var spesifikasi = $(this).data('spesifikasi');
            var harga_satuan = $(this).data('harga_satuan');
            var jumlah = $(this).data('jumlah');
            var harga_total = $(this).data('harga_total');
            var keterangan = $(this).data('keterangan');
            $("#modal-edit2 #no_perencanaan2").val(no_perencanaan);
            $("#modal-edit2 #no_perencanaan").val(no_perencanaan);
            $("#modal-edit2 #nama_aset").val(nama_aset);
            $("#modal-edit2 #merek").val(merek);
            $("#modal-edit2 #tipe").val(tipe);
            $("#modal-edit2 #spesifikasi").val(spesifikasi);
            $("#modal-edit2 #harga_satuan").val(harga_satuan);
            $("#modal-edit2 #jumlah").val(jumlah);
            $("#modal-edit2 #harga_total").val(harga_total);
            $("#modal-edit2 #keterangan").val(keterangan);
        })


        $(document).on("click", "#hapus", function() {
            var no_perencanaan = $(this).data('no_perencanaan');
            $("#modal-hapus #no_perencanaan").val(no_perencanaan);
        })

        function sum() {
            var bil1 = document.getElementById('harga_satuan').value;
            var bil2 = document.getElementById('jumlah').value;
            var result = parseInt(bil1) * parseInt(bil2);
            if (!isNaN(result)) {
                document.getElementById('harga_total').value = result;
            }

        }

        function sum2() {
            var bil1 = document.getElementById('harga_satuan2').value;
            var bil2 = document.getElementById('jumlah2').value;
            var result = parseInt(bil1) * parseInt(bil2);
            if (!isNaN(result)) {
                document.getElementById('harga_total2').value = result;
            }

        }

        $(function() {
            $(document).on('click', '#detail', function(e) {
                e.preventDefault();
                $("#modal-detail").modal('show');
                $.post('<?= base_url() . 'Sekretaris/verify_id' ?>', {
                        id: $(this).attr('data-id_mutasi')
                    },
                    function(html) {
                        $(".verify_id").html(html);
                    }
                );
            });
        });

        $(function() {
            $("#dataTable-modal").dataTable({
                "ordering": false,
                "searching": false,
                "paging": false,
                "info": false
            });
        });
        $(function() {
            $("#dataTable2").dataTable();
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
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/dataTables.buttons.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/buttons.bootstrap4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/jszip.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/pdfmake.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/vfs_fonts.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/buttons.html5.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/buttons.print.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/buttons.colVis.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/dataTables.bootstrap4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/dataTables.responsive.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/responsive.bootstrap.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#dataTable1').DataTable({
                "columnDefs": [{
                    "orderable": false,
                    "targets": 8
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

        $(document).ready(function() {
            var table1 = $('#dataTable5').DataTable({
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

            table1.buttons().container()
                .appendTo('#dataTable5_wrapper .col-md-6:eq(0)');
        });
    </script>
    <!-- others plugins -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/plugins.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/scripts.js' ?>"></script>
</body>

</html>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blitzspot - Laporan Data Aset</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatable/css/buttons.bootstrap4.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatable/css/bootstrap.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatable/css/responsive.bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/datatable/css/responsive.jqueryui.min.css' ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/typography.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/default-css.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/styles.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/responsive.css' ?>">
    <!-- modernizr css -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/vendor/modernizr-2.8.3.min.js' ?>"></script>
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
                            <li>
                                <a href="<?php echo base_url() . 'direktur/persetujuan' ?>" aria-expanded="true"><i class="fa fa-legal"></i><span>Persetujuan</span></a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-receipt"></i><span>Laporan</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo base_url() . 'direktur/laporan_pengadaan' ?>">Pengadaan</a></li>
                                    <li><a href="<?php echo base_url() . 'direktur/laporan_mutasi' ?>">Mutasi</a></li>
                                    <li class="active"><a href="<?php echo base_url() . 'direktur/laporan_aset' ?>">Aset</a></li>
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
                            <h4 class="page-title pull-left">Aset</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Aset</a></li>
                                <li><span>Data Aset</span></li>
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
                                <?php if ($this->session->flashdata('aset')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Aset <strong>berhasil</strong> <?php echo $this->session->flashdata('aset'); ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <?php if ($this->session->flashdata('verifikasi')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Pengadaan <strong>berhasil</strong> <?php echo $this->session->flashdata('verifikasi'); ?> ke Data Aset
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <h4 class="header-title">
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            Data Aset
                                        </div>
                                        <div class="col-right">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-cetak">Cetak Laporan</button>
                                        </div>
                                    </div>
                                </h4>
                                <!-- Modal -->
                                <div class="modal fade" id="modal-cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url() . 'direktur/cetak_laporan' ?>" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Nama Aset</label>
                                                        <select class="form-control" name="nama_aset">
                                                            <option value="">-Pilih Aset-</option>
                                                            <?php foreach ($detail as $a) { ?>
                                                                <option value="<?= $a->nama_aset ?>"><?= $a->nama_aset ?></option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Lokasi</label>
                                                        <select class="form-control" name="lokasi">
                                                            <option value="">-Pilih Lokasi-</option>
                                                            <option value="Gudang">Gudang</option>
                                                            <option value="Customer">Customer</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Kondisi</label>
                                                        <select class="form-control" name="lokasi">
                                                            <option value="">-Pilih Kondisi-</option>
                                                            <option value="Gudang">Baru</option>
                                                            <option value="Customer">Baik</option>
                                                        </select>
                                                    </div>
                                                    <label for="example-email-input" class="col-form-label">Berdasarkan Tanggal</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input class="form-control" type="date" name="tanggal_awal" required>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input class="form-control" type="date" name="tanggal_akhir" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Cetak</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>



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
                                                        <th>No Aset</th>
                                                        <th>Merek</th>
                                                        <th>Tipe</th>
                                                        <th>Spesifikasi</th>
                                                        <th>Harga</th>
                                                        <th>Kondisi</th>
                                                        <th>Lokasi</th>
                                                        <th>Tanggal Masuk</th>
                                                        <th>Penyusutan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($tidak_habis_pakai as $a) {
                                                        ?>
                                                        <tr class="text-left">
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $a->nama_aset ?></td>
                                                            <td><?php echo $a->no_aset ?></td>
                                                            <td><?php echo $a->merek ?></td>
                                                            <td><?php echo $a->tipe ?></td>
                                                            <td><?php echo $a->spesifikasi ?></td>
                                                            <td><?php echo 'Rp.' . $a->nilai_aset ?></td>
                                                            <td><?php echo $a->kondisi ?></td>
                                                            <td><?php echo $a->lokasi ?></td>
                                                            <td><?php echo $a->tanggal_masuk ?></td>
                                                            <td class="text-center">
                                                                <a href="#" class="badge badge-info" id="penyusutan" data-toggle="modal" data-target="#modal-penyusutan" data-no_aset="<?= $a->no_aset ?>">
                                                                    detail
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                                <tfoot class="bg-light text-capitalize">
                                                    <td class="font-weight-bold" colspan="2"> Total Nilai Aset :</td>
                                                    <td colspan="2">
                                                        <?php foreach ($total as $total) :
                                                            echo 'Rp. ' . $total->akumulasi_nilai;
                                                        endforeach
                                                        ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="data-tables">
                                            <table id="dataTable5" class="text-center responsive" style="width=100%">
                                                <thead class="bg-light text-capitalize">
                                                    <tr class="text-left">
                                                        <th>No</th>
                                                        <th>Nama Aset</th>
                                                        <th>Jumlah</th>
                                                        <th>Harga</th>
                                                        <th>Tanggal Masuk</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($habis_pakai as $i) {
                                                        ?>
                                                        <tr class="text-left">
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $i->nama_aset ?></td>
                                                            <td><?php echo $i->jumlah ?></td>
                                                            <td><?php echo 'Rp.' . $i->harga ?></td>
                                                            <td><?php echo $i->tanggal_masuk ?></td>
                                                        </tr>
                                                    <?php
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
    <div class="modal fade" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="tmp">
                        <thead class="bg-light text-capitalize">
                            <td>No</td>
                            <td>No Aset</td>
                            <td>Nama Aset</td>
                            <td>Merek</td>
                            <td>Tipe</td>
                            <td>Spesifikasi</td>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($tmp as $z) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><span class="badge badge-info"><?= $z->no_aset ?></span></td>
                                    <td><?= $z->nama_aset ?></td>
                                    <td><?= $z->merek ?></td>
                                    <td><?= $z->tipe ?></td>
                                    <td><?= $z->spesifikasi ?></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal hapus-->
    <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() . 'aset/hapus_data_aset' ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" id="no_detail" name="no_detail">
                        <input type="hidden" id="no_aset" name="no_aset">
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
    <!--modal edit-->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="<?= base_url() . 'aset/ubah_data_aset' ?>" method="post">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Aset</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input class="form-control" type="hidden" id="no_aset" name="no_aset">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Aset</label>
                            <input class="form-control" type="text" id="nama_aset" name="nama_aset" placeholder="Nama Aset" required>
                        </div>
                        <div class="form-group">
                            <label for="example-tel-input" class="col-form-label">Jenis_aset</label>
                            <input class="form-control" type="text" id="jenis_aset" name="jenis_aset" value="Habis Pakai" required readonly>
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
                            <label for="example-tel-input" class="col-form-label">Harga</label>
                            <input class="form-control" type="text" id="harga" name="harga" placeholder="Harga" onkeyup="sum();" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Kondisi Barang</label>
                            <select class="custom-select" id="kondisi_barang" name="kondisi_barang">
                                <option selected="selected" value="Baru">Baru</option>
                                <option value="Bekas">Bekas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-url-input" class="col-form-label">Lokasi</label>
                            <input class="form-control" type="text" id="lokasi" name="lokasi" placeholder="Lokasi" readonly>
                        </div>
                        <div class="form-group">
                            <label for="example-url-input" class="col-form-label">Tanggal Masuk</label>
                            <input class="form-control" type="date" id="tanggal_masuk" name="tanggal_masuk" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--modal end-->

    <!--modal edit2-->
    <div class="modal fade" id="modal-edit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="<?= base_url() . 'aset/ubah_data_aset' ?>" method="post">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Aset</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input class="form-control" type="hidden" id="no_aset" name="no_aset">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Aset</label>
                            <input class="form-control" type="text" id="nama_aset" name="nama_aset" placeholder="Nama Aset" required>
                        </div>
                        <div class="form-group">
                            <label for="example-tel-input" class="col-form-label">Jenis_aset</label>
                            <input class="form-control" type="text" id="jenis_aset" name="jenis_aset" value="Habis Pakai" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="example-tel-input" class="col-form-label">Harga</label>
                            <input class="form-control" type="text" id="harga" name="harga" placeholder="Harga" onkeyup="sum();" required>
                        </div>
                        <div class="form-group">
                            <label for="example-url-input" class="col-form-label">Kadaluwarsa</label>
                            <input class="form-control" type="date" id="kadaluwarsa" name="kadaluwarsa" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <!--modal penyusutan-->
    <div class="modal fade bd-example-modal-lg" id="modal-penyusutan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Penyusutan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="data-penyusutan">
                        <table id="dataTable-modal" class="text-center responsive" style="width=100%">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Penggunaan</th>
                                    <th>No Aset</th>
                                    <th>Nama Aset</th>
                                    <th>Biaya Penyusutan</th>
                                    <th>Akumulasi Penyusutan</th>
                                    <th>Nilai Aset</th>
                                </tr>
                            </thead>
                            <tbody class="verify_id">

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
        $(document).on("click", "#edit", function() {
            var no_aset = $(this).data('no_aset');
            var nama_aset = $(this).data('nama_aset');
            var jenis_aset = $(this).data('jenis_aset');
            var merek = $(this).data('merek');
            var tipe = $(this).data('tipe');
            var spesifikasi = $(this).data('spesifikasi');
            var harga = $(this).data('harga');
            var lokasi = $(this).data('lokasi');
            var kondisi = $(this).data('kondisi');
            var tanggal_masuk = $(this).data('tanggal_masuk');
            $("#modal-edit #no_aset").val(no_aset);
            $("#modal-edit #nama_aset").val(nama_aset);
            $("#modal-edit #jenis_aset").val(jenis_aset);
            $("#modal-edit #merek").val(merek);
            $("#modal-edit #tipe").val(tipe);
            $("#modal-edit #spesifikasi").val(spesifikasi);
            $("#modal-edit #harga").val(harga);
            $("#modal-edit #lokasi").val(lokasi);
            $("#modal-edit #kondisi").val(kondisi);
            $("#modal-edit #tanggal_masuk").val(tanggal_masuk);
        })

        $(document).on("click", "#edit2", function() {
            var no_aset = $(this).data('no_aset');
            var nama_aset = $(this).data('nama_aset');
            var jenis_aset = $(this).data('jenis_aset');
            var harga = $(this).data('harga');
            var kadaluwarsa = $(this).data('kadaluwarsa');
            $("#modal-edit2 #no_aset").val(no_aset);
            $("#modal-edit2 #nama_aset").val(nama_aset);
            $("#modal-edit2 #jenis_aset").val(jenis_aset);
            $("#modal-edit2 #harga").val(harga);
            $("#modal-edit2 #kadaluwarsa").val(kadaluwarsa);
        })
        $(document).on("click", "#hapus", function() {
            var no_aset = $(this).data('no_aset');
            var no_detail = $(this).data('no_detail');
            $("#modal-hapus #no_aset").val(no_aset);
            $("#modal-hapus #no_detail").val(no_detail);
        })

        $(function() {
            $(document).on('click', '#penyusutan', function(e) {
                e.preventDefault();
                $("#modal-penyusutan").modal('show');
                $.post('<?= base_url() . 'Bendahara/verify_id' ?>', {
                        no_aset: $(this).attr('data-no_aset')
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
            $("#tmp").dataTable({
                "ordering": false,
                "searching": false,
                "paging": false,
                "info": false
            });
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
                buttons: ['copy', 'excel', 'pdf', 'colvis']
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
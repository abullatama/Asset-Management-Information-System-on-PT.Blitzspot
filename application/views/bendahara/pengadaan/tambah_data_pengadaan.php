<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blitzspot - Tambah Pengadaan</title>
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
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/typography.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/default-css.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/styles.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/template/css/responsive.css' ?>">
    <!-- modernizr css -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/vendor/modernizr-2.8.3.min.js' ?>"></script>
    <style>
        .new {
            display: none;
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
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li class="active">
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
                            <li>
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
                                <a href="maps.html"><i class="fa fa-thumb-tack"></i>
                                    <span>
                                        Pengaduan
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="maps.html"><i class="fa fa-refresh"></i>
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
        <div class="main-content">
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
                            <h4 class="page-title pull-left">Pengadaan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo base_url() . 'bendahara/pengadaan' ?>">Data Pengadaan</a></li>
                                <li><span>Tambah Data Pengadaan</span></li>
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
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row justify-content-center">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tambah Data Pengadaan</h4>
                                        <p class="text-muted font-14 mb-4">Data utama pada proses pengadaan</p>
                                        <?php if (validation_errors()) : ?>
                                            <div class="alert alert-danger" role="alert">
                                                <strong><?php echo validation_errors(); ?></strong>
                                            </div>
                                        <?php endif ?>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="1-tab" data-toggle="tab" href="#1" role="tab" aria-controls="1" aria-selected="true">Tidak Habis Pakai</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="2-tab" data-toggle="tab" href="#2" role="tab" aria-controls="2" aria-selected="false">Habis Pakai</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-3" id="myTabContent">
                                            <div class="tab-pane fade show active" id="1" role="tabpanel" aria-labelledby="1-tab">
                                                <form action="<?php echo base_url() . 'Pengadaan/tambah_data_pengadaan' ?>" method="POST">
                                                    <button type="button" class="btn btn-info">Info</button>
                                                    <div class="form-group" id="new">
                                                        <label for="exampleFormControlSelect1">Nama Aset</label>
                                                        <select class="form-control" id="exampleFormControlSelect1" name="new">
                                                            <?php foreach ($aset as $a) { ?>
                                                                <option><?= $a->nama_aset ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <a href="#" onclick="tambah()"><i class="fa fa-plus"></i> tambah data baru</a>
                                                    </div>
                                                    <span>
                                                        <div class="form-group new" id="old">
                                                            <label for="example-text-input" class="col-form-label">Nama Aset</label>
                                                            <input class="form-control" type="text" id="nama_aset" name="old" placeholder="Nama Aset">
                                                        </div>
                                                    </span>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Jenis Aset</label>
                                                        <input class="form-control" type="text" id="jenis_aset" name="jenis_aset" value="Tidak Habis Pakai" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-email-input" class="col-form-label">Merek</label>
                                                        <input class="form-control" type="text" id="merek" name="merek" placeholder="Merek">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-url-input" class="col-form-label">Tipe</label>
                                                        <input class="form-control" type="text" id="tipe" name="tipe" placeholder="Tipe">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-url-input" class="col-form-label">Spesifikasi</label>
                                                        <input class="form-control" type="text" id="spesifikasi" name="spesifikasi" placeholder="Spesifikasi" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-tel-input" class="col-form-label">Harga Satuan</label>
                                                        <input class="form-control" type="text" id="harga_satuan" name="harga_satuan" placeholder="Harga Satuan" onkeyup="sum();">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jumlah" class="">Jumlah</label>
                                                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" onkeyup="sum();">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-number-input" class="col-form-label">Harga Total</label>
                                                        <input class="form-control" type="text" id="harga_total" name="harga_total" placeholder="Harga Total">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Keterangan</label>
                                                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" rows="3" required></textarea>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <button type="submit" class="btn btn-primary btn-block mt-3 pr-4 pl-4">Tambah</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="profile-tab">
                                                <form action="<?php echo base_url() . 'Pengadaan/tambah_data_pengadaan_habis_pakai' ?>" method="POST">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Nama Aset</label>
                                                        <input class="form-control" type="text" id="nama_aset" name="nama_aset" placeholder="Nama Aset">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Jenis Aset</label>
                                                        <input class="form-control" type="text" id="jenis_aset" name="jenis_aset" value="Habis Pakai" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-tel-input" class="col-form-label">Harga Satuan</label>
                                                        <input class="form-control" type="text" id="harga_satuan2" name="harga_satuan" placeholder="Harga Satuan" onkeyup="sum2();">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jumlah" class="">Jumlah</label>
                                                        <input type="number" class="form-control" id="jumlah2" name="jumlah" placeholder="Jumlah Barang" onkeyup="sum2();">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-number-input" class="col-form-label">Harga Total</label>
                                                        <input class="form-control" type="text" id="harga_total2" name="harga_total" placeholder="Harga Total">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Keterangan</label>
                                                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" rows="3" required></textarea>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <button type="submit" class="btn btn-primary btn-block mt-3 pr-4 pl-4">Tambah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Textual inputs end -->
                        </div>
                    </div>
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

        function sum2() {
            var bil1 = document.getElementById('harga_satuan2').value;
            var bil2 = document.getElementById('jumlah2').value;
            var result = parseInt(bil1) * parseInt(bil2);
            if (!isNaN(result)) {
                document.getElementById('harga_total2').value = result;
            }

        }

        function tambah() {
            var form = document.getElementById("old");
            form.style.display = "block";
            document.getElementById("new").style.display = "none";
        }
    </script>
    <!-- jquery latest version -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/vendor/jquery-2.2.4.min.js' ?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/popper.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/metisMenu.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/jquery.slicknav.min.js' ?>"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/plugins.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/scripts.js' ?>"></script>
</body>

</html>
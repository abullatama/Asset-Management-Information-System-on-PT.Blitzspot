<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blitzspot - Data Pengguna</title>
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
                                <a href="<?php echo base_url() . 'admin_system' ?>" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-receipt"></i><span>Kelola Pengguna</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="<?php echo base_url() . 'admin_system/pengguna' ?>">Data Pengguna</a></li>
                                    <li><a href="<?php echo base_url() . 'admin_system/tambah_data_pengguna' ?>">Tambah Data Pengguna</a></li>
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
                            <h4 class="page-title pull-left">Pengguna</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Pengguna</a></li>
                                <li><span>Data Pengguna</span></li>
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
                                <?php if ($this->session->flashdata('flash')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Pengguna berhasil<strong> <?php echo $this->session->flashdata('flash'); ?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <?php if ($this->session->flashdata('tolak')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Pengajuan telah <?php echo $this->session->flashdata('tolak'); ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <h4 class="header-title">Data Pengguna</h4>
                                <!--cetak-->

                                <div class="data-tables">
                                    <table id="dataTable" class="text-center table-striped responsive">
                                        <thead class="bg-light text-capitalize">
                                            <tr class="text-left">
                                                <th>No</th>
                                                <th>Nama Pengguna</th>
                                                <th>Jabatan</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pengguna as $a) {
                                                ?>
                                                <tr class="text-left">
                                                    <td class="text-center"><?php echo $no++ ?></td>
                                                    <td><?php echo $a->nama ?></td>
                                                    <td><?php echo $a->level ?></td>
                                                    <td><span class="badge badge-pill badge-primary"><?php echo $a->username ?></span></td>
                                                    <td><span class="badge badge-pill badge-primary"><?php echo $a->password ?></span></td>
                                                    <td class="text-center border-left">
                                                        <a href="#" id="ubah" data-toggle="modal" data-target="#modal-verifikasi" data-id_pengguna="<?= $a->id_pengguna ?>" data-nama="<?= $a->nama ?>" data-username="<?= $a->username ?>" data-password="<?= $a->password ?>" data-level="<?= $a->level ?>">
                                                            <span class="badge badge-pill badge-warning"><i class="fa fa-pencil"></i></span>
                                                        </a>
                                                        <?php if ($a->level != 'Admin_System') {  ?>
                                                            <a href="#" id="hapus" data-toggle="modal" data-target="#modal-hapus" data-id_pengguna="<?= $a->id_pengguna ?>">
                                                                <span class="badge badge-pill badge-danger"><i class="fa fa-trash"></i></span>
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
    <!--modal verifikasi-->
    <div class="modal fade" id="modal-verifikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url() . 'pengguna/ubah_data_pengguna' ?>" method="post">
                    <div class="modal-body">
                        <input class="form-control" type="hidden" id="id_pengguna" name="id_pengguna">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Pengguna</label>
                            <input class="form-control" type="text" id="nama" name="nama_pengguna" placeholder="Nama Pengguna" required>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Username</label>
                            <input class="form-control" type="text" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Password</label>
                            <input class="form-control" type="text" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Jabatan</label>
                            <select class="custom-select" id="jabatan" name="jabatan">
                                <option selected="selected" value="Staff">Staff</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Bendahara">Bendahara</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url() . 'pengguna/hapus_data_pengguna' ?>" method="post">
                    <div class="modal-body">
                        <input class="form-control" type="hidden" id="id_pengguna" name="id_pengguna">
                        Anda yakin ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--modal verifikasi 2-->
    <div class="modal fade" id="modal-verifikasi2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="<?= base_url() . 'pengajuan/verifikasi_pengajuan2' ?>" method="post">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Verifikasi Pengadaan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input class="form-control" type="text" id="id_pengguna" name="id_pengguna">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Barang</label>
                            <input class="form-control" type="text" id="nama_barang" name="nama_barang" placeholder="Nama Barang" required>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Jenis Aset</label>
                            <input class="form-control" type="text" id="jenis_aset" name="jenis_aset" value="Habis Pakai" readonly>
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
                            <input class="form-control" type="text" id="harga_total" name="harga_total" placeholder="Harga Total">
                        </div>
                        <div class="form-group">
                            <label for="example-number-input" class="col-form-label">Kadaluwarsa</label>
                            <input class="form-control" type="date" id="kadaluwarsa" name="kadaluwarsa">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Verifikasi</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <!--modal end-->
    <!-- offset area end -->
    <script>
        function sum2() {
            var bil1 = document.getElementById('harga_satuan2').value;
            var bil2 = document.getElementById('jumlah2').value;
            var result = parseInt(bil1) * parseInt(bil2);
            if (!isNaN(result)) {
                document.getElementById('harga_total2').value = result;
            }
        }
    </script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/vendor/jquery-2.2.4.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).on("click", "#persetujuan", function() {
            var no_pengajuan = $(this).data('no_pengajuan');
            $("#modal-persetujuan-1 #no_pengajuan").val(no_pengajuan);
        })

        $(document).on("click", "#persetujuan2", function() {
            var no_pengajuan = $(this).data('no_pengajuan');
            $("#modal-persetujuan-2 #no_pengajuan2").val(no_pengajuan);
        })

        $(function() {
            $(document).on('click', '#persetujuan', function(e) {
                e.preventDefault();
                $("#modal-persetujuan-1").modal('show');
                $.post('<?= base_url() . 'direktur/detail_stok3' ?>', {
                        no_pengajuan: $(this).attr('data-no_pengajuan')
                    },
                    function(html) {
                        $(".detail-stok4").html(html);
                    }
                );
            });
        });

        $(function() {
            $(document).on('click', '#persetujuan2', function(e) {
                e.preventDefault();
                $("#modal-persetujuan-2").modal('show');
                $.post('<?= base_url() . 'direktur/detail_stok4' ?>', {
                        no_pengajuan: $(this).attr('data-no_pengajuan')
                    },
                    function(html) {
                        $(".detail-stok5").html(html);
                    }
                );
            });
        });

        $(document).on("click", "#verifikasi", function() {
            var no_pengajuan = $(this).data('no_pengajuan');
            var nama_barang = $(this).data('nama_barang');
            var jenis_aset = $(this).data('jenis_aset');
            var merek = $(this).data('merek');
            var tipe = $(this).data('tipe');
            var spesifikasi = $(this).data('spesifikasi');
            var harga_satuan = $(this).data('harga_satuan');
            var jumlah = $(this).data('jumlah');
            var harga_total = $(this).data('harga_total');
            $("#modal-verifikasi #no_pengajuan").val(no_pengajuan);
            $("#modal-verifikasi #nama_barang").val(nama_barang);
            $("#modal-verifikasi #jenis_aset").val(jenis_aset);
            $("#modal-verifikasi #merek").val(merek);
            $("#modal-verifikasi #tipe").val(tipe);
            $("#modal-verifikasi #spesifikasi").val(spesifikasi);
            $("#modal-verifikasi #harga_satuan").val(harga_satuan);
            $("#modal-verifikasi #jumlah").val(jumlah);
            $("#modal-verifikasi #harga_total").val(harga_total);
        })
        $(document).on("click", "#ubah", function() {
            var id_pengguna = $(this).data('id_pengguna');
            var nama = $(this).data('nama');
            var username = $(this).data('username');
            var password = $(this).data('password');
            var level = $(this).data('level');
            $("#modal-verifikasi #id_pengguna").val(id_pengguna);
            $("#modal-verifikasi #nama").val(nama);
            $("#modal-verifikasi #username").val(username);
            $("#modal-verifikasi #password").val(password);
            $("#modal-verifikasi #level").val(level);
        })
        $(document).on("click", "#hapus", function() {
            var id_pengguna = $(this).data('id_pengguna');
            $("#modal-hapus #id_pengguna").val(id_pengguna);
        })

        $(function() {
            $("#dataTable-modal").dataTable();
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

    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/dataTables.bootstrap4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/dataTables.responsive.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/datatable/js/responsive.bootstrap.min.js' ?>"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/plugins.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/vendor/template/js/scripts.js' ?>"></script>
</body>

</html>
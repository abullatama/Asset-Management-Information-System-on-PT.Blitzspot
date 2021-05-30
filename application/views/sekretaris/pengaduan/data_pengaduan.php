<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blitzspot - Data Pemeliharaan</title>
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
                                <a href="<?= base_url() . 'Sekretaris' ?>" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li>
                                <a href="<?= base_url() . 'Sekretaris/mutasi' ?>" aria-expanded="true"><i class="ti-layout-slider"></i>
                                    <span>
                                        Mutasi
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() . 'Sekretaris/pengajuan' ?>" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>
                                        Pengajuan
                                    </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url() . 'Sekretaris/pengaduan' ?>" aria-expanded="true"><i class="fa fa-hand-lizard-o"></i>
                                    <span>
                                        Pengaduan
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
                            <h4 class="page-title pull-left">Pengaduan</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Pengaduan</a></li>
                                <li><span>Data Pengaduan</span></li>
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
                                        Data Pemeliharaan <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <?php if ($this->session->flashdata('ubah')) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Mutasi <strong>berhasil</strong> <?php echo $this->session->flashdata('ubah'); ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                                <h4 class="header-title">Data Pengaduan</h4>
                                <!--cetak-->
                                <div class="data-tables">
                                    <table id="dataTable1" class="text-center table-striped responsive" style="width=100%">
                                        <thead class="bg-light text-capitalize">
                                            <tr class="text-left">
                                                <th>No</th>
                                                <th>Nama Pengguna</th>
                                                <th>No Aset</th>
                                                <th>Nama Aset</th>
                                                <th>Keterangan</th>
                                                <th>Info</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pengaduan as $a) {
                                                if ($a->id_pengguna == $this->session->userdata('id_pengguna')) {
                                                    ?>
                                                    <tr class="text-left">
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $a->nama ?></td>
                                                        <td><?php echo $a->no_aset ?></td>
                                                        <td><?php echo $a->nama_aset ?></td>
                                                        <td><?php echo $a->keterangan ?></td>
                                                        <td>
                                                            <?php if ($a->info != null) { ?>
                                                                <img src="<?= base_url('images/pengaduan/' . $a->info) ?>" style="width:100px">
                                                            <?php } ?>
                                                        </td>
                                                        <td><?php echo $a->tanggal ?></td>
                                                    </tr>
                                                <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="<?php echo base_url() . 'sekretaris/tambah_data_pengaduan' ?>">
                                    <button type="button" class="btn btn-success mb-3">Tambah Data Pengaduan</button>
                                </a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Detail Mutasi</h5>
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
                                    <th>Merek</th>
                                    <th>Tipe</th>
                                    <th>Spesifikasi</th>
                                    <th>Lokasi</th>
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



    <!--modal verifikasi mutasi-->
    <div class="modal fade bd-example-modal" tabindex="-1" id="modal-edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pemeliharaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() . 'pemeliharaan/ubah_data_pemeliharaan' ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" id="no_pemeliharaan" name="no_pemeliharaan">
                        <div class="form-group">
                            <label for="example-email-input" class="col-form-label">Perangkat</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#modal-aset">Pilih</button>
                                </div>
                                <div class="custom-file">
                                    <input class="form-control" type="text" id="no_aset" name="no_aset" placeholder="Pilih Perangkat" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Tanggal Pemeliharaan</label>
                            <input class="form-control" type="date" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kondisi</label>
                            <select class="form-control" id="kondisi" name="kondisi">
                                <option value="Rusak Ringan">Rusak Ringan</option>
                                <option value="Rusak Parah">Rusak Parah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Biaya</label>
                            <input class="form-control" type="text" id="biaya" name="biaya" required>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">OK</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--modal end-->
    <!-- offset area end -->
    <script src="<?php echo base_url() . 'assets/vendor/template/js/vendor/jquery-2.2.4.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).on("click", "#edit", function() {
            var no_pemeliharaan = $(this).data('no_pemeliharaan');
            var no_aset = $(this).data('no_aset');
            var tanggal_pemeliharaan = $(this).data('tanggal_pemeliharaan');
            var kondisi_pemeliharaan = $(this).data('kondisi_pemeliharaan');
            var biaya = $(this).data('biaya');
            var keterangan = $(this).data('keterangan');
            $("#modal-edit #no_pemeliharaan").val(no_pemeliharaan);
            $("#modal-edit #no_aset").val(no_aset);
            $("#modal-edit #tanggal").val(tanggal_pemeliharaan);
            $("#modal-edit #kondisi").val(kondisi_pemeliharaan);
            $("#modal-edit #biaya").val(biaya);
            $("#modal-edit #keterangan").val(keterangan);
        })

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
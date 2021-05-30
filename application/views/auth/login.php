<!-- verifikasi user login-->

<!-- end -->
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blitzspot - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url() . 'assets/vendor/template/images/icon/favicon.ico' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/font-awesome.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/themify-icons.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/metisMenu.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/owl.carousel.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/slicknav.min.css' ?>">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/typography.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/default-css.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/styles.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/template/css/responsive.css' ?>">
    <!-- modernizr css -->
    <script src="<?= base_url() . 'assets/vendor/template/js/vendor/modernizr-2.8.3.min.js' ?>"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-bg">
        <div class="container">
            <div class="login-box ptb--100">
                <form class="login100-form validate-form" action="<?php echo base_url() ?>auth/login" method="post">
                    <div class="login-form-head" style="padding:0; margin:0; height:200px; width:100%;">
                        <div style="width:100%; height:100%; padding:5px; margin:auto">
                            <img src="<?= base_url() . 'assets/brand/blitz.png' ?>" alt="logo" style="width:100%; padding:30px 30px">
                        </div>
                    </div>
                    <div class="login-form-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="form-gp">
                            <label>Username</label>
                            <input type="text" id="username" name="username" id="username" required oninvalid="this.setCustomValidity('Username tidak boleh kosong')" oninput="setCustomValidity('')">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" id="username" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="submit-btn-area">
                                    <button id="form_submit" type="submit">Login <i class="ti-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row rmber-area ">
                            <div class="col text-center">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?= base_url() . 'assets/vendor/template/js/vendor/jquery-2.2.4.min.js' ?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url() . 'assets/vendor/template/js/popper.min.js' ?>"></script>
    <script src="<?= base_url() . 'assets/vendor/template/js/bootstrap.min.js' ?>"></script>
    <script src="<?= base_url() . 'assets/vendor/template/js/owl.carousel.min.js' ?>"></script>
    <script src="<?= base_url() . 'assets/vendor/template/js/metisMenu.min.js' ?>"></script>
    <script src="<?= base_url() . 'assets/vendor/template/js/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?= base_url() . 'assets/vendor/template/js/jquery.slicknav.min.js' ?>"></script>

    <!-- others plugins -->
    <script src="<?= base_url() . 'assets/vendor/template/js/plugins.js' ?>"></script>
    <script src="<?= base_url() . 'assets/vendor/template/js/scripts.js' ?>"></script>
</body>

</html>
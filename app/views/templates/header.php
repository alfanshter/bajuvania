<!DOCTYPE html>
<html lang="en">
<?php
if (!empty($_SESSION['role'])) {
    $role = $_SESSION['role'];
} else {
    $role = $_SESSION['role'] = 0;
}


?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Bajuvania.com</title>
    <link href="<?= base_url; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url; ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url; ?>/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url; ?>/assets/css/price-range.css" rel="stylesheet">
    <link href="<?= base_url; ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?= base_url; ?>/assets/css/main.css" rel="stylesheet">
    <link href="<?= base_url; ?>/assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url; ?>/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url; ?>/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url; ?>/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url; ?>/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 085 646 727 371</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> bajuvania.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <?php
                                if ($role == '1') {
                                ?>
                                    <li><a href="<?= base_url; ?>/riwayat"><i class="fa fa-crosshairs"></i> Riwayat Transaksi</a></li>
                                    <li><a href="<?= base_url; ?>/transaksi"><i class="fa fa-crosshairs"></i> Transaksi</a></li>
                                    <li><a href="<?= base_url; ?>/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <li><a href="<?= base_url; ?>/login/logout"><i class="fa fa-lock"></i> Logout</a></li>
                                <?php
                                } else {
                                ?>
                                    <li><a href="<?= base_url; ?>/login"><i class="fa fa-lock"></i> Login</a></li>

                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="<?= base_url; ?>/home" class="active">Home</a></li>
                                <?php if ($role == '1') {
                                ?>
                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="<?= base_url; ?>/home">Produk</a></li>
                                            <li><a href="<?= base_url; ?>/transaksi">Transaksi</a></li>
                                            <li><a href="<?= base_url; ?>/riwayat">Riwayat Transaksi</a></li>
                                            <li><a href="<?= base_url; ?>/cart">Keranjang</a></li>
                                        </ul>
                                    </li>

                                <?php } ?>
                                <li><a href="<?= base_url; ?>/kontak">Kontak kami</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Mini-Medium Blog | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?= base_url('/public/assets/css/flexslider.min.css') ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url('/public/assets/css/line-icons.min.css') ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url('/public/assets/css/elegant-icons.min.css') ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url('/public/assets/css/lightbox.min.css') ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url('/public/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url('/public/assets/css/theme.css') ?>" rel="stylesheet" type="text/css" media="all"/>
    <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="<? = base_url('/public/assets/css/ie9.css') ?>" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="<?= base_url('/public/assets/js/modernizr-2.6.2-respond-1.1.0.min.js') ?>"></script>
</head>
<body>


<div class="nav-container">
    <nav class="top-bar overlay-bar">
        <div class="container">
            <div class="row nav-menu">
                <div class="col-sm-3 col-md-2 columns">
                    <a href="<?= base_url() ?>">
                        <img class="logo logo-light" alt="Logo" src="<?= base_url('/public/assets/img/logo-light.png') ?>">
                        <img class="logo logo-dark" alt="Logo" src="<?= base_url('/public/assets/img/logo-dark.png') ?>">
                    </a>
                </div>

                <div class="col-sm-9 col-md-10 columns">
                    <ul class="menu">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li><a  href="<?= base_url('products') ?>">Products</a></li>
						<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
							<!-- <?php if ($_SESSION['is_admin'] === true) : ?>
								<li><a href="<?= base_url('admin') ?>">Admin</a></li>
							<?php endif; ?> -->
							<li><a href="<?= base_url('user/' . $_SESSION['username']) ?>">Profile</a></li>
							<li><a href="<?= base_url('user/logout') ?>">Logout</a></li>
						<?php else : ?>
							<li><a href="<?= base_url('user/login') ?>">Login</a></li>
							<li><a href="<?= base_url('user/register') ?>">Signup</a></li>
						<?php endif; ?>
                        
                    </ul>

                    <ul class="social-icons text-right">

                        <li>
                            <a href="#">
                                <i class="icon social_twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end of row-->

            <div class="mobile-toggle">
                <i class="icon icon_menu"></i>
            </div>

        </div><!--end of container-->
    </nav>
</div>
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
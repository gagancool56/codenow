<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Digital Now - Online</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Digital Now Online">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/frontend/images/favicon.png') ?>">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/plugins/bootstrap/bootstrap.min.css') ?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/plugins/fontawesome/css/all.min.css') ?>">
    <!-- Animation -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/plugins/animate-css/animate.css') ?>">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/plugins/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/plugins/slick/slick-theme.css') ?>">
    <!-- Colorbox -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/plugins/colorbox/colorbox.css') ?>">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/style.css') ?>">

</head>

<body>
    <div class="body-inner">
        <!-- Header start -->
        <header id="header" class="header-one">
            <div class="site-navigation">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 logo text-center">
                            <a href="<?= base_url() ?>"><img src="<?= base_url('assets/frontend/images/logo.png') ?>" alt="Company Logo"></a>
                        </div>
                        <div class="col-lg-9">
                            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav mr-auto">
                                        <li class="nav-item dropdown">
                                            <a href="<?= base_url() ?>" class="nav-link">Home
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?= base_url('about') ?>">Our Company</a></li>
                                                <li><a href="<?= base_url('privacy') ?>">Privacy Policy</a></li>
                                                <li><a href="<?= base_url('terms') ?>">Terms & Conditions</a></li>
                                                <li><a href="<?= base_url('refund-policy') ?>">Cancellation/Refund Policy</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('products') ?>">Products</a></li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?= base_url('software-programming') ?>">Software Programming</a></li>
                                                <li><a href="<?= base_url('designing') ?>">Designing</a></li>
                                                <li><a href="<?= base_url('web-development') ?>">Web Development</a></li>
                                                <li><a href="<?= base_url('digital-marketing') ?>">Digital Marketing</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Pricing <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?= base_url('products/purchase/custom-payment') ?>">Make Payment</a></li>
                                                <li><a href="<?= base_url('pricing') ?>">Service Pricing</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('question') ?>">Q & A</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('blog') ?>">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('register') ?>">Register</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end -->
                </div>
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->
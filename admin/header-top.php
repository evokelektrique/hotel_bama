<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>هتل آرین - مدیریت </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
   ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

    <style type="text/css" media="print">
    .header-section,
    .side-header { 
        display: none; 
    }

    .content-body {
        width: 100%;
        margin: 0 auto;
    }
    </style>

</head>

<body dir="rtl">

<div class="main-wrapper">


    <!-- Header Section Start -->
    <div class="header-section">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">


                <div class="header-logo col-auto">
                    <a href="../index.php">
                        <img style="width: 80px!important;" src="assets/images/website1-min.png" alt="">
                    </a>
                </div>
                <!-- Header Right Start -->
                <div class="header-right flex-grow-1 col-auto">
                    <div class="row justify-content-between align-items-center">

                        <!-- Side Header Toggle & Search Start -->
                        <div class="col-auto">
                            <div class="row align-items-center">

                                <!--Side Header Toggle-->
                                <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                <!--Header Search-->

                            </div>
                        </div><!-- Side Header Toggle & Search End -->
                        <!-- Header Notifications Area Start -->
                        <div class="col-auto">

                            <ul class="header-notification-area">

                                <!--Language-->

                                <!--Mail-->

                                <!--Notification-->

                                <!--User-->
                                <li class="adomx-dropdown col-auto">
                                    <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <i class="fa fa-user-o"></i>
                                            <span class="status"></span>
                                            </span>
                                            <span class="name"><?php echo $_SESSION['admin_login'];?></span>
                                            </span>
                                    </a>

                                    <!-- Dropdown -->
                                    <div class="adomx-dropdown-menu dropdown-menu-user">
                                        <div class="head">
                                            <h5 class="name"><a href="#"><?php echo $_SESSION['admin_login'];?></a></h5>
                                        </div>
                                        <div class="body">

                                            <ul>
                                                <li><a href="../remove_seestion.php"><i class="zmdi zmdi-lock-open"></i>خروج</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="payment.php"><i class="zmdi zmdi-paypal"></i>پرداخت ها</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>
                            </ul>

                        </div><!-- Header Notifications Area End -->

                    </div>
                </div><!-- Header Right End -->

            </div>
        </div>
    </div><!-- Header Section End -->
    <?php require_once "../backend/function.php"?>
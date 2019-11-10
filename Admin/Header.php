<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>index</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">

                    <?php
                    include_once "../Company.php";
                    $company = new Company();
                    $company->setCompanyLicense($_SESSION['admin']);

                    if (!isset($_SESSION['admin'])) {
                        header('location:../index.php');
                    } else {
                        $r = $company->Search();

                        if ($rows = mysqli_fetch_assoc($r)) {
                            //echo("Welcome : ".$rows['CompanyName'] );


                            ?>
                            <div class="image img-cir img-120">
                                <img src="../assets/custom/images/Company/<?php echo $rows['CompanyID']; ?>.png" alt="Company Logo" />
                            </div>
                            <h4 class="name">Admin</h4>
                    <?php } else echo $r;
                    }  ?>


                    <a href="../LogoutCompany.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-home"></i>Home
                            </a>

                        </li>
                        <!-- <li>
                            <a href="inbox.html">
                                <i class="fas fa-envelope"></i>Inbox</a>
                            <span class="inbox-num">3</span>
                        </li> -->

                        <li>
                            <a href="CompanyOrder.php">
                                <i class="fas fa-shopping-cart"></i>Company Order</a>
                        </li>

                        <li>
                            <a href="CompanyList.php">
                                <i class="fas  fa-list"></i>Company List</a>
                        </li>

                        <li>
                            <a href="Delivery.php">
                                <i class="fas fa-shipping-fast"></i>Delivery List</a>
                        </li>

                        <li>
                            <a href="RDelivery.php">
                                <i class="fas fa-shipping-fast"></i>Request Delivery List</a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-bar-chart-o"></i>Statistic</a>
                        </li>


                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <?php
                                include_once "../OrderCompany.php";
                                $order = new OrderCompany();
                                //$order->setCompanyLicense($_SESSION['company']);
                                $o = $order->GetAllData();
                                $c = $order->GetCount();
                               
                                    ?>
                                    <div class="header-button-item js-item-menu">
                                        <?php
                                            
                                            $rs = mysqli_fetch_array($c);
                                            
                                            ?>

                                        <i class="zmdi zmdi-notifications"><sup><?php echo $rs[0]; ?></sup></i>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">

                                                <p>You have <?php echo $rs[0]; ?> Notifications</p>

                                            </div>
                                            <?php

                                                while ($rows = mysqli_fetch_assoc($o)) {

                                                    ?>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p><?php echo $rows['OrderStatus']; ?></p>
                                                        <span class="date"><?php echo $rows['OrderDate']; ?></span>
                                                        <span class="date"><a href="CompanyOrder.php">Details</a></span>
                                                    </div>
                                                </div>
                                        <?php }
                                         ?>
                                        <div class="notifi__footer">
                                            <a href="CompanyOrder.php">All notifications</a>
                                        </div>
                                        </div>

                                    </div>

                                    <!-- <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div> -->
                                    <!-- <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="Account.php">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- END HEADER DESKTOP-->
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
    <!--Maaaaaaap-->
    <script src="http://maps.google.com/maps/api/js?libraries=places&region=uk&language=en&sensor=true"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

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
                    include_once "../Delivery.php";
                    $D = new Delivery();
                    $D->setDeliveryPhone($_SESSION['delivery']);

                    if (!isset($_SESSION['delivery'])) {
                        header('location:../index.php');
                    } else {
                        $r = $D->SearchD();

                        if ($rows = mysqli_fetch_assoc($r)) {



                            ?>

                            <h4 class="name"><?php echo $rows['DeliveryName']; ?></h4>
                    <?php } else echo $r;
                    }  ?>


                    <a href="LogOut.php">Sign out</a>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.item1').click(function() {
                            $('.item1').addClass('active has-sub');
                            $('.item1 a').addClass('js-arrow');

                            $('.item2').removeClass('active has-sub');
                            $('.item2 a').removeClass('js-arrow');

                            $('.item3').removeClass('active has-sub');
                            $('.item3 a').removeClass('js-arrow');
                        });

                        $('.item2').click(function() {
                            $('.item2').addClass('active has-sub');
                            $('.item2 a').addClass('js-arrow');

                            $('.item1').removeClass('active has-sub');
                            $('.item1 a').removeClass('js-arrow');

                            $('.item3').removeClass('active has-sub');
                            $('.item3 a').removeClass('js-arrow');
                        });

                        $('.item3').click(function() {
                            $('.item3').addClass('active has-sub');
                            $('.item3 a').addClass('js-arrow');

                            $('.item2').removeClass('active has-sub');
                            $('.item2 a').removeClass('js-arrow');

                            $('.item1').removeClass('active has-sub');
                            $('.item1 a').removeClass('js-arrow');
                        });
                    });
                </script>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub" id="item1">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-home"></i>Pending Order
                            </a>

                        </li>

                        <li class="" id="item2">
                            <a href="ShippingOrder.php" class="">
                                <i class="fas fa-shopping-basket"></i>Shipping orders</a>
                        </li>

                        <li class="" id="item3">
                            <a href="ConfirmedOrders.php" class="">
                                <i class="fas fa-shopping-basket"></i>Confirmed Orders</a>
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
                                include_once "../Orders.php";
                                $Ord = new Orders();
                                $Ord->setDeliveryPhone($_SESSION['delivery']);
                                $Ord->setOrderStatus("Pending");
                                $o = $Ord->GetDataByDNo();
                                $co = $Ord->Count();


                                ?>

                                <div class="header-button-item js-item-menu">
                                    <?php
                                    $count =  mysqli_fetch_array($co);
                                    ?>
                                    <i class="zmdi zmdi-notifications"><sup><?php echo $count[0] ?></sup></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have <?php echo $count[0] ?> Notifications</p>
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
                                                    <span class="date"><a href="index.php">Details</a></span>
                                                </div>
                                            </div>
                                        <?php }
                                        ?>

                                        <div class="notifi__footer">
                                            <a href="index.php">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- END HEADER DESKTOP-->
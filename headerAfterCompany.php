<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">


    <?php
    session_start();

    ?>
    <!-- hover.css -->
    <link href="assets/custom/css/hover.css" rel="stylesheet">
    <!-- animate.css-->
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- OffCanvasMenu -->
    <link href="assets/vendor/OffCanvasMenuEffects/css/menu_sideslide.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- Video Background -->
    <link href="assets/vendor/video-background/video-background.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- RANGE SLIDER -->
    <link href="assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">


</head>
<style>
    .card {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
        border: 0;
        font-weight: 400;
    }

    .md-tabs-Login {
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
        border: 0;
        padding: .7rem;
        margin-left: 1rem;
        margin-right: 1rem;
        margin-bottom: -11px;

        z-index: 1;
        position: relative;
        border-radius: .25rem;
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .tab-content {
        padding: 1rem;
        padding-top: 2rem;
    }

    #nav-item-citizen {
        padding-left: 9px;
    }

    .fables-iconpen:before {
        content: "\270E";


    }

    .fables-iconloc:before {
        content: "\27A3";
    }
</style>

<body>

    <div class="search-section">
        <a class="close-search" href="#"></a>
        <div class="d-flex justify-content-center align-items-center h-100">
            <form method="post" action="#" class="w-50">
                <div class="row">
                    <div class="col-10">
                        <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." />
                    </div>
                    <div class="col-2 mt-3">
                        <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <!-- Start Top Header -->
    <div class="fables-forth-background-color fables-top-header-signin">
        <div class="container">
            <div class="row" id="top-row">
                <div class="col-12 col-sm-3 col-lg-5">
                    <a href="CompanyProfile.php" class="top-link top-link fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 d-inline-block border-left-0 float-left">
                        <span class="fables-iconuser"></span>
                        <?php
                        include_once "Company.php";
                        $company = new Company();
                        $company->setCompanyLicense($_SESSION['company']);

                        if (!isset($_SESSION['company'])) {
                            header('location:index.php');
                        } else {
                            $r = $company->Search();

                            if ($rows = mysqli_fetch_assoc($r)) {
                                echo ("Welcome : " . $rows['CompanyName']);
                            } else echo $r;
                        }  ?> </a>
                    <a href="#" class="open-search fables-third-text-color fables-second-hover-color top-header-link px-3 d-inline-block border-left-0 float-left">
                        <span class="fables-iconsearch-icon"></span>
                    </a>
                </div>
                <div class="col-12 col-sm-5 col-lg-4 text-left text-lg-right">
                    <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone : (888) 6000 6000 - (888) 6000 6000</p>
                </div>
                <div class="col-12 col-sm-4 col-lg-3 text-left text-lg-right">
                    <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span> Email: Design@domain.com</p>
                </div>

            </div>
        </div>
    </div>

    <!-- /End Top Header -->

    <!-- Start Fables Navigation -->
    <div class="fables-navigation fables-main-background-color py-3 py-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-9 pr-md-0">
                    <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
                        <a class="navbar-brand pl-0" href="index.php"><img src="assets/custom/images/fables-logo.png" alt="Fables Template" class="fables-logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fables-iconmenu-icon text-white font-16"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fablesNavDropdown">

                            <ul class="navbar-nav mx-auto fables-nav">
                                <li><a class="dropdown-item nav-link" href="index.php">Home</a></li>

                                <li><a class="dropdown-item nav-link" href="index.php">Our Services</a></li>

                                <li><a class="dropdown-item nav-link" href="index.php">Our Product</a></li>



                                <li><a class="dropdown-item nav-link" href="index.php">About Us</a></li>

                                <li><a class="dropdown-item nav-link" href="index.php">Latest News</a></li>

                                <li><a class="dropdown-item nav-link" href="LogoutCompany.php">Logout</a></li>


                            </ul>

                        </div>
                    </nav>
                </div>



                <div class="col-12 col-md-2 col-lg-3 pr-md-0 icons-header-mobile">

                    <div class="fables-header-icons">
                        <div class="dropdown">
                            <a href="#_" class="fables-third-text-color dropdown-toggle right px-3 px-md-2 px-lg-4 fables-second-hover-color top-header-link max-line-height position-relative" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fables-iconcart-icon font-20"></span>
                                <span class="fables-cart-number fables-second-background-color text-center">3</span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="p-3 cart-block">
                                    <p class="fables-second-text-color semi-font mb-4 font-17">(2) Items in my cart</p>
                                    <div class="row mx-0 mb-3">
                                        <div class="col-4 p-0">
                                            <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                        </div>
                                        <div class="col-8">
                                            <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                            <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                            <p class="fables-forth-text-color">QTY : 1</p>
                                        </div>
                                    </div>
                                    <div class="row mx-0 mb-3">
                                        <div class="col-4 p-0">
                                            <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                        </div>
                                        <div class="col-8">
                                            <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                            <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                            <p class="fables-forth-text-color">QTY : 1</p>
                                        </div>
                                    </div>
                                    <span class="font-16 semi-font fables-main-text-color">TOTAL</span>
                                    <span class="font-14 semi-font fables-second-text-color float-right">$200.00</span>
                                    <hr>
                                    <div class="text-center">
                                        <a href="#" class="fables-second-background-color fables-btn-rounded  text-center white-color py-2 px-3 font-14 bg-hover-transparent border fables-second-border-color fables-second-hover-color">View my cart</a>
                                        <a href="#" class="fables-second-text-color border fables-second-border-color fables-btn-rounded text-center white-color p-2 px-4 font-14 fables-second-hover-background-color">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <a href="CompanyProfile.php" class="fables-third-text-color  right px-3 px-md-2 px-lg-4 fables-second-hover-color top-header-link max-line-height position-relative" aria-haspopup="true" aria-expanded="false">
                                <span class="fables-iconuser"></span>
                            </a>


                        </div>




                    </div>
                </div>




            </div>
        </div>
    </div>

    <!-- /End Fables Navigation -->




    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="assets/vendor/popper/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="assets/custom/js/custom.js"></script>






</body>

</html>
<?php
include_once "Citizens.php";

session_start();
if (isset($_COOKIE['citizencookie'])) {
    header('location:indexCitizens.php');
}



if (isset($_POST['btnCitizenLogin'])) {
    $citizen = new Citizens();


    $citizen->setCitizenPassword($_POST['citizenPasswordLogin']);
    $citizen->setCitizenPhone($_POST['citizenEmailLogin']);
    $citizen->setCitizenEmail($_POST['citizenEmailLogin']);


    $r = $citizen->Login();

    if ($rows = mysqli_fetch_assoc($r)) {
        if (isset($_POST['rememberCitizen'])) {
            setcookie("citizencookie", $_POST['citizenEmailLogin'], time() + 60 * 60 * 24 * 365);
        }
        $_SESSION['citizens'] = $_POST['citizenEmailLogin'];

        header('location:indexCitizens.php');
    } else
        echo ("<h4 style='text-align:center'> Invaild</h4>");
}
if (!empty($_POST['btnCitizenLogin'])) {
    echo '<script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#myModal").prop("checked", true);
            });
        </script>';
}

?>

<!--Company-->
<?php
include_once "Company.php";
include_once "Delivery.php";
include_once "RDelivery.php";

if (isset($_COOKIE['admincookie'])) {
    header('location:Admin/index.php');
}

if (isset($_COOKIE['companycookie'])) {
    header('location:AdminCompany/index.php');
}

if (isset($_COOKIE['Deliverycookie'])) {
    header('location:AdminDelivery/index.php');
}

if (isset($_COOKIE['RDeliverycookie'])) {
    header('location:AdminRDelivery/index.php');
}


if (isset($_POST['btnCompanyLogin'])) {
    if ($_POST['companyPasswordLogin'] == "D12345") {
        $D = new Delivery();


        $D->setDeliveryPassword($_POST['companyPasswordLogin']);
        $D->setDeliveryPhone($_POST['companyLicenseLogin']);



        $Dr = $D->Login();

        if ($Drow = mysqli_fetch_assoc($Dr)) {
            if (isset($_POST['rememberCompany'])) {
                setcookie("Deliverycookie", $_POST['companyLicenseLogin'], time() + 60 * 60 * 24 * 365);
            }
            $_SESSION['delivery'] = $_POST['companyLicenseLogin'];

            header('location:AdminDelivery/index.php');
        } else
            echo ("<h4 style='text-align:center'> phone or password is incorrect</h4>");
    } else  if ($_POST['companyPasswordLogin'] == "RD12345") {
        $RD = new RDelivery();


        $RD->setDPassword($_POST['companyPasswordLogin']);
        $RD->setDPhone($_POST['companyLicenseLogin']);



        $RDr = $RD->Login();

        if ($RDrow = mysqli_fetch_assoc($RDr)) {
            if (isset($_POST['rememberCompany'])) {
                setcookie("RDeliverycookie", $_POST['companyLicenseLogin'], time() + 60 * 60 * 24 * 365);
            }
            $_SESSION['rdelivery'] = $_POST['companyLicenseLogin'];

            header('location:AdminRDelivery/index.php');
        } else
            echo ("<h4 style='text-align:center'> phone or password is incorrect</h4>");
    } elseif ((($_POST['companyPasswordLogin']) == ("Admin")) && (($_POST['companyLicenseLogin']) == ("Admin"))) {
        if (isset($_POST['rememberCompany'])) {
            setcookie("admincookie", $_POST['companyLicenseLogin'], time() + 60 * 60 * 24 * 365);
        }
        $_SESSION['admin'] = $_POST['companyLicenseLogin'];

        header('location:Admin/index.php');
    } else {
        $company = new Company();


        $company->setCompanyPassword($_POST['companyPasswordLogin']);
        $company->setCompanyLicense($_POST['companyLicenseLogin']);



        $r1 = $company->Login();

        if ($rows1 = mysqli_fetch_assoc($r1)) {
            if (isset($_POST['rememberCompany'])) {
                setcookie("companycookie", $_POST['companyLicenseLogin'], time() + 60 * 60 * 24 * 365);
            }
            $_SESSION['company'] = $_POST['companyLicenseLogin'];

            header('location:AdminCompany/index.php');
        } else
            echo ("<h4 style='text-align:center'> License or password is incorrect</h4>");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">


    <!-- hover.css -->
    <link href="assets/custom/css/hover.css" rel="stylesheet">
    <!-- animate.css-->
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
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
    /* .navigation-bar {
        width: 80%;
        /* font-size: 100px */
    }

    */ .card {
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
    <!-- <div class="fables-transparent header-fixed-height-large"> -->


    <!-- Start Fables Navigation -->
    <div class="fables-transparent py-3 py-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-12 pr-md-0">
                    <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
                        <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0 fables-nav" id="fablesNavDropdown">
                            <ul class="navbar-nav text-center mx-auto fables-nav">
                                <li class="float-right"><a class="dropdown-item nav-link hvr-underline-from-center font-weight-bold" href="index.php">Home</a></li>
                                <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="AboutUsBefore.php">About</a></li>
                                <li><a class="dropdown-item nav-link hvr-underline-from-center font-weight-bold" href="AllProductsBefore.php">Products</a></li>
                                <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="newsBefore.php">News</a></li>
                            </ul>
                        </div>
                        <div class="mx-auto my-2 order-0 order-md-1 position-relative fables-nav" id="fablesNavDropdown">
                            <a class="navbar-brand" href="index.php" style="margin-right: 0;">
                                <img src="assets/custom/images/fables-logo.png" alt="Fables Template" class="fables-logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2" id="fablesNavDropdown">
                            <ul class="navbar-nav text-center fables-nav mx-auto">

                                <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="ContactUsBefore.php">Contact</a></li>
                                <li>
                                    <a class=" nav-link hvr-underline-from-center font-weight-bold" href="#myModal" data-toggle="modal" data-target="#myModal" class="top-link fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 d-inline-block float-right" title=" Sign in"><i class="fas fa-user font-22"></i> Sign-in</a>
                                </li>
                                <li>
                                    <a class=" nav-link hvr-underline-from-center font-weight-bold" href="register.php" class="top-link top-link fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 d-inline-block border-left-0 float-right" title=" Register "><i class="fas fa-user-plus font-22"></i> Register</a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link hvr-underline-from-center open-search" href=="#">
                                        <!-- <span class="fables-iconsearch-icon font-weight-bold font-20"></span> -->
                                        <i class="fas fa-search font-22"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- <a class="navbar-brand pl-0" href="index.php">
                                <img src="assets/custom/images/fables-logo.png" alt="Fables Template" class="fables-logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="navbar-collapse collapse ml-5 col-12" id="fablesNavDropdown">

                                <ul class="navbar-nav mx-auto fables-nav pr-5">
                                    <li><a class="nav-link hvr-underline-from-center font-weight-bold" href="index.php">Home</a></li>

                                    <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="AboutUs.php">About Us</a></li>

                                    <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="index.php">Services</a></li>

                                    <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="AllProductsBefore.php">Products</a></li>

                                    <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="news.php">News</a></li>

                                    <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="ContactUs.php">Contact Us</a></li>

                                    <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="#myModal" data-toggle="modal" data-target="#myModal" class="top-link fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 d-inline-block float-right" title=" Sign in"><span class="fables-iconuser"></span></a>
                                    </li>
                                    <li><a class=" nav-link hvr-underline-from-center font-weight-bold" href="register.php" class="top-link top-link fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 d-inline-block border-left-0 float-right" title=" Register "><i class="fas fa-user-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class=" nav-link" href="#" class="open-search fables-third-text-color fables-second-hover-color top-header-link px-3 d-inline-block border-left-0 float-right">
                                            <span class="fables-iconsearch-icon"></span>
                                        </a>
                                    </li>

                                </ul>

                            </div> -->
                    </nav>
                </div>




                <!-- <div class="col-12 col-md-0 col-lg-3 pr-md-0 icons-header-mobile">

                        <div class="fables-header-icons">


                            <a href="Register.php" class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height d-block d-md-none">
                                <span class="fas fa-user-plus"></span> Register</a>
                            <a href="#myModal" data-toggle="modal" data-target="#myModal" class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height d-block d-md-none">
                                <span class="fables-iconuser"></span> Login</a>



                        </div>
                    </div> -->




            </div>
        </div>
    </div>

    <!-- /End Fables Navigation -->
    <!-- </div> -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row my-4 my-lg-5">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1 text-center">
                            <img src="assets/custom/images/signin-logo.png" alt="signin" class="img-fluid">
                            <p class="font-20 semi-font fables-main-text-color mt-3 mb-2">Login</p>


                            <ul class="nav  nav-justified md-tabs-Login indigo fables-fifth-background-color " id="myTabJustLogin" role="tablist">
                                <li class="nav-item" id="nav-item-citizen">
                                    <a class="nav-link active white-color white-color-hover " id="citizen-tab-just-Login" data-toggle="tab" href="#citizen-just-Login" role="tab" aria-controls="citizen-just" aria-selected="true">Citizen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link white-color white-color-hover  " id="company-tab-just-Login" data-toggle="tab" href="#company-just-Login" role="tab" aria-controls="company-just" aria-selected="false">Company</a>
                                </li>

                            </ul>

                            <div class="tab-content card pt-4" id="myTabContentJust">
                                <!-- Citizen Login -->
                                <div class="tab-pane fade show active" id="citizen-just-Login" role="tabpanel" aria-labelledby="citizen-tab-just">


                                    <form method="post" id="CitizenFormLogin">



                                        <!-- Email -->
                                        <div class="form-group">
                                            <div class="input-icon">
                                                <span class="fables-iconemail fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                                                <input type="email" name="citizenEmailLogin" value="<?php echo isset($_POST['citizenEmailLogin']) ? $_POST['citizenEmailLogin'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Email / Phone" required>
                                            </div>

                                        </div>


                                        <!-- password -->
                                        <div class="form-group">
                                            <div class="input-icon">
                                                <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                                                <input type="password" name="citizenPasswordLogin" minlength="5" value="<?php echo isset($_POST['citizenPasswordLogin']) ? $_POST['citizenPasswordLogin'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Password" required>
                                            </div>

                                        </div>


                                        <input type="submit" name="btnCitizenLogin" value="Login" id="btnCitizenLogin" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color 
                   font-16 semi-font py-3">

                                        <div class="form-group">
                                            <div class="input-icon float-left mt-3 ">

                                                <input type="checkbox" name="rememberCitizen" value="remember" class=""> Remember Me

                                                <a href="ForgetPasswordCitizen.php" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3
                           mb-3 mb-lg-5 d-block  ">Forgot Password ?</a>

                                            </div>
                                        </div>
                                    </form>


                                </div>


                                <!-- company Login -->
                                <div class="tab-pane fade" id="company-just-Login" role="tabpanel" aria-labelledby="company-tab-just">
                                    <form method="post" id="CompanyFormLogin">

                                        <!-- License -->
                                        <div class="form-group">
                                            <div class="input-icon">
                                                <span class="fables-iconpen fables-input-icon mt-1 font-15" style="color:#E54D42;"></span>
                                                <input type="text" name="companyLicenseLogin" value="<?php echo isset($_POST['companyLicenseLogin']) ? $_POST['companyLicenseLogin'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Company License" required>
                                            </div>

                                        </div>

                                        <!-- password -->
                                        <div class="form-group">
                                            <div class="input-icon">
                                                <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                                                <input type="password" name="companyPasswordLogin" minlength="5" value="<?php echo isset($_POST['companyPasswordLogin']) ? $_POST['companyPasswordLogin'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Password" required>
                                            </div>

                                        </div>



                                        <input type="submit" name="btnCompanyLogin" value="Login" id="btnCompanyLogin" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color 
                   font-16 semi-font py-3">

                                        <div class="form-group">
                                            <div class="input-icon float-left mt-3 ">

                                                <input type="checkbox" name="rememberCompany" value="remember" class=""> Remember Me

                                                <a href="ForgetPasswordCompany.php" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3
                           mb-3 mb-lg-5 d-block  ">Forgot Password ?</a>

                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/popper/popper.min.js"></script>
    <script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>

    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/custom/js/custom.js"></script>


    <script>
        $(document).ready(function() {


            $('#myTabJustLogin a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            });

            // store the currently selected tab in the hash value
            $("ul > li > a").on("show.bs.tab", function(e) {
                var id = $(e.target).attr("href").substr(1);
                window.location.hash = id;
            });

            // on load of the page: switch to the currently selected tab
            var hash = window.location.hash;
            $('#myTabJustLogin a[href="' + hash + '"]').tab('show');
            $('#myTabJustLogin a[href="' + hash + '"]').addClass('active')
        });
    </script>
    <script>
        $(document).ready(function() {



            $('#citizen-tab-just-Login').addClass('fables-second-background-color');
            $('#company-tab-just-Login').addClass('fables-main-hover-background-color ');
            $('#citizen-tab-just-Login').on('click', function() {
                $('#citizen-tab-just-Login').addClass('fables-second-background-color');
                $('#company-tab-just-Login').removeClass('fables-second-background-color');
                $('#citizen-tab-just-Login').removeClass('fables-main-hover-background-color ');
                $('#company-tab-just-Login').addClass('fables-main-hover-background-color ');
                $('#citizen-tab-just-Login').css('color', 'white');
            });

            if ($('#citizen-tab-just-Login').hasClass('active')) {
                $('#citizen-tab-just-Login').addClass('fables-second-background-color');
                $('#company-tab-just-Login').removeClass('fables-second-background-color');
                $('#citizen-tab-just-Login').removeClass('fables-main-hover-background-color ');
                $('#company-tab-just-Login').addClass('fables-main-hover-background-color ');
                $('#citizen-tab-just-Login').css('color', 'white');
            }

            $('#company-tab-just-Login').on('click', function() {
                $('#citizen-tab-just-Login').removeClass('fables-second-background-color');
                $('#company-tab-just-Login').addClass('fables-second-background-color');
                $('#citizen-tab-just-Login').addClass('fables-main-hover-background-color ');
                $('#company-tab-just-Login').removeClass('fables-main-hover-background-color ');
                $('#citizen-tab-just-Login').css('color', 'white');
            });

            if ($('#company-tab-just-Login').hasClass('active')) {
                $('#citizen-tab-just-Login').removeClass('fables-second-background-color');
                $('#company-tab-just-Login').addClass('fables-second-background-color');
                $('#citizen-tab-just-Login').addClass('fables-main-hover-background-color ');
                $('#company-tab-just-Login').removeClass('fables-main-hover-background-color ');
                $('#citizen-tab-just-Login').css('color', 'white');
            }


        });
    </script>


</body>

</html>
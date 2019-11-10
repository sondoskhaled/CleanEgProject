<?php
include 'headerBefore.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <title> Home </title>


</head>
<style>
    header {
        position: relative;
        height: 100vh;
        min-height: 25rem;
        width: 100%;
        overflow: hidden;
    }

    header video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: 0;
        -ms-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);

    }

    header .container {
        position: relative;
        z-index: 2;
    }

    header .overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        /* background-color: black; */
        /* opacity: 0.5; */
        /* background-color: rgba(0, 0, 0, 0.9); */
        background-image: linear-gradient(170deg, rgba(34, 34, 34, 0.3), rgba(42, 43, 48, 0.2));
        z-index: 1;
    }

    /* .service {
        height: 100vh;

    } */

    @media (pointer: coarse) and (hover: none) {
        header {
            background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
        }

        header video {
            display: none;
        }
    }

    @media (min-width: 1366) and (min-height: 768) {
        .service {
            height: 100vh;
        }
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

    <!-- Loading Screen   -->
    <div id="ju-loading-screen">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="assets/custom/images/Recycle!S2E18Trim.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="row d-flex h-100 pt-5 text-center align-items-end">
                <div class="w-100 text-white">
                    <h1 class="display-3"><strong>Save Your Planet</strong></h1>
                    <p class="lead mb-0"><strong>Save Your Money</strong></p>
                </div>
                <div class="w-100 animated infinite bounce slower">
                    <a class="text-white" href="#services" data-scroll>
                        <!-- <i class="fas fa-chevron-down fa-4x"></i> -->
                        <!-- <i class="far fa-arrow-alt-circle-down fa-3x"></i> -->
                        <!-- <i class="fas fa-arrow-alt-circle-down fa-4x"></i> -->
                        <!-- <i class="fas fa-arrow-circle-down fa-3x"></i> -->
                        <i class="fas fa-chevron-circle-down fa-3x"></i>
                        <!-- <i class="fas fa-angle-double-down fa-3x"></i> -->
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- <div class="fables-header fables-after-overlay overlay-lighter bg-rules" style="background-image: url(assets/custom/images/Recycle!S2E18Trim.mp4);">
    <div class="container overflow-hidden">  
        <div class="owl-carousel owl-theme default-carousel fables-sqr-nav dots-0 wow fadeInUpBig" data-wow-duration="2s">
              <div>
                  <h1 class="white-color bold-font mt-lg-5 mb-4">CONSULTING SERVICE FOR ALL <br> 
                     <span class="fables-second-text-color">KIND OF BUSINESSES</span>
                  </h1>  
                  <p class="fables-third-text-color mt-3 mb-5 light-font fables-header-slider-details">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  </p>
                  <a href="#" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-md-4 py-2 btn-bg-hover white-color-hover">Our Services</a>
                  <a href="#" class="btn fables-second-border-color white-color rounded-0 px-md-4 py-2 fables-second-hover-background-color">Learn More</a>  
              </div> 
              <div>
                  <h1 class="white-color bold-font mt-lg-5 mb-4">CONSULTING SERVICE FOR ALL <br> 
                     <span class="fables-second-text-color">KIND OF BUSINESSES</span>
                  </h1>  
                  <p class="fables-third-text-color mt-3 mb-5 light-font fables-header-slider-details">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  </p>
                  <a href="#" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-md-4 py-2 btn-bg-hover  white-color-hover">Our Services</a>
                  <a href="#" class="btn fables-second-border-color white-color rounded-0 px-md-4 py-2 fables-second-hover-background-color">Learn More</a>  
              </div> 
        </div>
    </div>
</div>     -->

    <!-- Start page content -->
    <div class="container justify-content-center service pt-3" id="services">
        <div class="row py-4  mt-5">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                <h2 class="font-35 font-weight-bold fables-second-text-color mb-4 pb-4">Our Services</h2>
                <p class="fables-forth-text-color font-30">
                    WE HELP YOU Recycle M <span class="fas fa-recycle fables-second-text-color fa-1x"></span> re
                </p>
            </div>
            <!-- <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay="1.6s" data-wow-duration="1.5s"> 
                    <div class="row text-center text-md-left">
                        <div class="col-12 col-md-3">
                            <span class="fas fa-recycle fables-second-text-color fa-3x"></span>
                        </div>
                        <div class="col-12 col-md-9 pl-md-0">
                            <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Free Updates & Support</h2>
                            <div class="font-15 fables-forth-text-color">
                                Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.  
                            </div>

                        </div>
                    </div> 
                </div> -->
            <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay=".4s" data-wow-duration="1.5s">
                <div class="row text-center text-md-left">
                    <div class="col-12 col-md-3">
                        <span class="fas fa-recycle fables-second-text-color fa-3x"></span>
                    </div>
                    <div class="col-12 col-md-9 pl-md-0">
                        <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Recycling</h2>
                        <div class="font-15 fables-forth-text-color">
                            We recycle traditional materials (such as paper, cardboard, plastic, and metal)
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay=".8s" data-wow-duration="1.5s">
                <div class="row text-center text-md-left">
                    <div class="col-12 col-md-3">
                        <span class="fas fa-recycle fables-second-text-color fa-3x"></span>
                    </div>
                    <div class="col-12 col-md-9 pl-md-0">
                        <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Organic</h2>
                        <div class="font-15 fables-forth-text-color">
                            We provide various landfill alternative options for organic and food waste items, including both loose and packaged materials.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay="1.2s" data-wow-duration="1.5s">
                <div class="row text-center text-md-left">
                    <div class="col-12 col-md-3">
                        <span class="fas fa-recycle fables-second-text-color fa-3x"></span>
                    </div>
                    <div class="col-12 col-md-9 pl-md-0">
                        <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Refuse</h2>
                        <div class="font-15 fables-forth-text-color">
                            We offer consolidated service for all refuse disposal needs, including hauling, equipment, waste to energy, and more.
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <h2 class="font-35 font-weight-bold text-center fables-second-text-color">Company</h2>
        <div class="row mt-3 mt-lg-5">
            <div class="col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden">
                <p class="fables-main-text-color font-25 mb-2 wow fadeInLeft">WHY</p>
                <h2 class="fables-second-text-color font-35 font-weight-bold wow fadeInLeft">CHOOSE <span class="fables-main-text-color">US</span></h2>
                <p class="fables-forth-text-color mt-4 mb-4">
                    We care, we take a personalized approach to each customer, and our management team is never more than a phone call or email away.
                </p>
                <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".3s">
                    <p class="fables-fifth-text-color fables-dots-text">
                        <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                        You can dispose of waste for points
                    </p>
                </div>
                <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".6s">
                    <p class="fables-fifth-text-color fables-dots-text">
                        <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                        You can use points to buy new products
                    </p>
                </div>
                <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".9s">
                    <p class="fables-fifth-text-color fables-dots-text">
                        <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>

                        Delivery is free
                    </p>
                </div>
                <div class="position-relative mb-3 wow bounceInDown" data-wow-delay="1.2s">
                    <p class="fables-fifth-text-color fables-dots-text">
                        <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>

                        By using our site you can help the environment
                    </p>
                </div>


            </div>
            <div class="col-12 col-lg-6">
                <div class="together-block " style=" background-image: url('assets/custom/images/645475-POPYUS-49.jpg');">
                    <div class=" p-4 p-lg-5 position-relative" style="height:380px">
                        <!-- <img src="assets/custom/images/rman.png" alt="" class="img-fluid together-abs-img wow fadeIn" style="height:380px"> -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="fables-testimonial fables-after-overlay py-4 py-md-5 my-4 my-lg-5 half-width-testimonial bg-rules">
        <div class="container z-index position-relative">
            <div class="row">
                <div class="col-12 col-md-6 wow fadeIn" data-wow-duration="2.5s" data-wow-delay=".4s">

                    <h2 class="fables-second-text-color font-35 font-weight-bold mb-3">RECYCLING</h2>
                    <!-- <p class="fables-third-text-color mt-4 mb-4">
                               We care, we take a personalized approach to each customer, and our management team is never more than a phone call or email away. 
                           </p>  -->
                    <div class="owl-carousel owl-theme dots-0 nav-default mt-5" id="fables-testimonial-carousel">
                        <?php
                        include_once "Tips.php";
                        $Tip = new Tips();
                        $rs = $Tip->GetData();
                        while ($row = mysqli_fetch_assoc($rs)) {

                            ?>
                            <div class="text-center">
                                <div>
                                    <div class="image-container shine-effect d-inline-block rounded-circle">
                                        <img src="assets/custom/images/Tips/<?php echo $row['TipsNo']; ?>.jpg" alt="Fables Template" class="fables-testimonial-carousel-img my-0 mx-auto rounded-circle" width="200" hight="200">
                                    </div>
                                    <h3 class="font-14 semi-font  white-color mt-3"><?php echo $row['TipsTitle']; ?></h3>
                                    <!-- <h3 class="font-13 font-italic white-color mt-2 mb-4">Chief Manager, Simba Co</h3> -->
                                </div>
                                <div class="fables-testimonial-carousel-item fables-rounded p-3 mt-4">
                                    <div class="fables-testimonial-detail font-15 font-italic white-color position-relative">
                                        <?php echo $row['TipsDetails']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-12 col-md-6 wow fadeIn mt-4 mt-md-5 mt-lg-0" data-wow-duration="2.5s" data-wow-delay=".4s" style="">
                    <div class="position-relative image-container zoomIn-effect fables-rounded" style="margin-top: 2.5vh; height: 65vh">
                        <img src="assets/custom/images/49455.jpg" alt="" class="img-fluid" style="height: 100%">
                        <div class="demo-gallery-poster fables-main-gradient">
                            <a data-fancybox href="https://www.youtube.com/watch?v=jAqVxsEgWIM">
                                <img src="assets/custom/images/play-button.png" alt="play button" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <h2 class="fables-main-text-color font-35 font-weight-bold text-center my-4 my-lg-5">Select <span class="fables-second-text-color">a Plan</span> Now </h2>
        <p class="fables-main-text-color text-center mb-4 mb-md-5 font-19">To Get More Points.</p>
        <div class="row overflow-hidden mb-lg-5">
            <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="table-block table-border-light py-5 fables-second-hover-border">
                    <h2 class="fables-second-text-color font-35 font-weight-bold position-relative"><span class="fas fa-file fables-second-text-color fa-1x"></span></h2>

                    <h2 class="fables-forth-text-color text-center font-weight-bold table-title fables-third-after position-relative font-17 mt-3">
                        1- Make a request</h2>
                    <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                        Make a request Now to buy your waste
                    </p>
                    <a href="register.php" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2  btn-bg-hover ">
                        <span class="white-color-hover">Get Started Now</span>
                    </a>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="table-block table-border-light py-5 fables-second-hover-border">
                    <h2 class="fables-second-text-color font-35 font-weight-bold position-relative"><span class="fas fa-phone fables-second-text-color fa-1x"></span></h2>

                    <h2 class="fables-forth-text-color text-center font-weight-bold table-title fables-third-after position-relative font-17 mt-3">2- Wait for Calling</h2>
                    <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                        Wait for our Delivery to Call you during 3 days
                    </p>
                    <a href="register.php" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2  btn-bg-hover ">
                        <span class="white-color-hover">Get Started Now</span>
                    </a>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="table-block table-border-light py-5 fables-second-hover-border">
                    <h2 class="fables-second-text-color font-35 font-weight-bold position-relative"><span class="fas fa-dollar-sign fables-second-text-color fa-1x"></span>
                    </h2>

                    <h2 class="fables-forth-text-color text-center font-weight-bold table-title fables-third-after position-relative font-17 mt-3">3- Get Points</h2>
                    <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                        Get Points for the waste items.
                    </p>
                    <a href="register.php" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2  btn-bg-hover ">
                        <span class="white-color-hover">Get Started Now</span>
                    </a>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="table-block table-border-light py-5 fables-second-hover-border">
                    <h2 class="fables-second-text-color font-35 font-weight-bold position-relative"><span class="fas fa-shopping-cart fables-second-text-color fa-1x"></span></h2>

                    <h2 class="fables-forth-text-color text-center font-weight-bold table-title fables-third-after position-relative font-17 mt-3">4- Use Points</h2>
                    <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                        Now you Can use this points to buy our recycled products.
                    </p>
                    <a href="register.php" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2  btn-bg-hover ">
                        <span class="white-color-hover">Get Started Now</span>
                    </a>
                </div>

            </div>

        </div>
    </div>



    <div class="fables-testimonial fables-after-overlay fables-about-caption py-5 bg-rules" style="background-image: url(assets/custom/images/645393-POPYN5-284.jpg);">
        <div class="container">
            <div class="row">
                <div class="position-relative z-index col-12 col-md-8 offset-md-2 text-center wow zoomIn" data-wow-duration="2s">
                    <h3 class=" white-color mb-3 font-25 font-weight-bold">We are the best business consulting company ever!!</h3>
                    <p class="font-weight-light fables-third-text-color">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium laoreet enim at, malesuada Class aptent taciti sociosqu.
                    </p>
                    <a href="register.php" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded  mt-4 py-2 px-5">Make a Request Now</a>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Make Request</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <form method="post">

                        <div class="form-group">
                            <div class="input-icon">
                                <span class="fables-iconloc fables-input-icon font-19 " style="color:#E54D42;margin-top:-3px; "></span>
                                <select name="City" class="form-control rounded-0 pl-5 font-13 sign-register-input" required id='city'>
                                    <option value="" hidden>Select your City</option>
                                    <?php
                                    include_once "Cities.php";
                                    $gov = new Cities();
                                    $g = $gov->GetData();

                                    while ($row = mysqli_fetch_assoc($g)) {
                                        ?>
                                        <option value="<?php echo $row['CityNo']; ?>" <?php if (isset($_POST['City']) && $_POST['City'] == $row['CityNo']) echo 'selected="selected"'; ?>>
                                            <?php echo $row['CityName']; ?></option>
                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-icon">
                                <span class="fables-iconloc fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                                <input type="text" name="Address" id='add' style="height=10px" value="<?php echo isset($_POST['Address']) ? $_POST['Address'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="complate Address">
                            </div>

                        </div>

                    </form>


                    <a id="info" class="btn  fables-second-text-color  font-13 p-2 px-4 mb-5"><span class="fables-btn-value">Get More info about Types and Points</span></a>
                    <div id="type">
                        <table class="table table-hover">
                            <thead>
                                <tr class="fables-second-text-color">
                                    <th>Type Name</th>
                                    <th>Points / Kg</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once "Types.php";
                                $Type = new Types();
                                $T = $Type->GetData();

                                while ($rowT = mysqli_fetch_assoc($T)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $rowT['TypeName']; ?></td>
                                        <td><?php echo $rowT['Point']; ?></td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <a id="Request" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-20 p-2 px-4 mb-5" data-dismiss="modal"><span class="fables-btn-value">Send Request</span></a>

                    <a href="" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-20 p-2 px-4 mb-5" data-dismiss="modal"><span class="fables-btn-value">close</span></a>

                </div>

                <script>
                    $(document).ready(function() {
                        $("#Request").on('click', function() {
                            address = $("#add").val();
                            city = $("#city").val();
                            window.location.href = "MakeRequest.php?add=" + address + "&city=" + city + "";
                        });

                        $('#type').hide();
                        $("#info").on('click', function() {
                            $('#type').toggle();
                        });
                    });
                </script>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="fables-team">
            <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-3 my-lg-5">Our partners</h2>
            <div class="row overflow-hidden">

                <?php
                include_once "Company.php";
                $com = new Company();
                $coms = $com->GetData();
                while ($row = mysqli_fetch_assoc($coms)) {
                    if (($row['CompanyLicense'] != 'Admin')) {

                        ?>
                        <div class="col-12 col-md-3 wow bounceInDown mb-3" data-wow-duration="2s" data-wow-delay=".4s">
                            <div class="card fables-team-block fables-second-hover-text-color">
                                <div class="image-container shine-effect">
                                    <a href="#"><img class="w-100" src="assets/custom/images/Company/<?php echo $row['CompanyID']; ?>.png" alt="Fables Template"></a>
                                </div>
                                <div class="card-body">
                                    <h5><a href="#" class="font-19 semi-font fables-main-text-color team-name"><?php echo $row['CompanyName']; ?></a></h5>
                                    <p class="font-13 fables-fifth-text-color italic my-2"><?php echo $row['AboutCompany']; ?></p>
                                    <ul class="nav fables-team-social-links">
                                        <li><a href="#" target="_blank"><span class="fables-iconlinkedin-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                        <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                        <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                <?php }
                } ?>

            </div>

        </div>
    </div>

    <div class="fables-index-products large-mb fables-after-overlay py-4 py-md-5 mt-md-5 bg-rules" style="background-image: url(assets/custom/images/645406-POPYNR-198.jpg);">
        <div class="container z-index position-relative overflow-hidden">
            <div class="row">
                <div class="col-12 col-md-7 wow fadeInLeft">
                    <h2 class="fables-second-text-color font-35 font-weight-bold">Our <span class="white-color">Products</span></h2>
                    <p class="fables-third-text-color mt-4 mb-md-5">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using
                    </p>
                </div>
                <div class="col-12 col-md-5 col-lg-3 text-right offset-lg-2 my-4 my-md-0 mt-md-5 mt-lg-0 text-center">
                    <a href="AllProductsBefore.php" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2">View all products</a>
                </div>
            </div>
            <div class="owl-carousel owl-theme dots-0 circle-nav carousel-items-4">

                <?php
                include_once "Products.php";
                $pro = new Products();
                $prows = $pro->GetViewData();
                while ($rs = mysqli_fetch_assoc($prows)) {

                    ?>
                    <div class="card rounded-0 mb-4 border-light wow fadeIn" data-wow-delay=".4s">
                        <div class="row">
                            <div class="fables-product-img col-12">
                                <img class="card-img-top w-100 rounded-0" src="assets/custom/images/products/<?php echo ($rs['ProductNo']);
                                                                                                                    echo ($rs['ColorNo']); ?>.jpg" alt="dress fashion">
                                <div class="fables-img-overlay">
                                    <ul class="nav fables-product-btns pr-3 mt-5 vertical-store-btns">
                                        <li><a href="ProductDetailsBefore.php?ProNo=<?php echo ($rs['ProductNo']); ?>&CatNo=<?php echo ($rs['CategoryNo']); ?>&CNo=<?php echo ($rs['ColorNo']); ?>" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                        <!-- <li><a href="" class="fables-product-btn"><span class="fables-iconcompare"></span></a></li> -->
                                        <li><button href="#myModal" data-toggle="modal" data-target="#myModal" class="fables-product-btn"><span class="fables-iconheart"></span></button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body col-12">
                                <div class="fables-forth-text-color fables-single-tags mt-3">
                                    <span class="fables-fifth-text-color fables-icontags"></span>
                                    <a href="#"><?php echo ($rs['CategoryName']); ?></a>
                                    <a href="#"><?php echo ($rs['ProductName']); ?></a>
                                </div>
                                <!-- <h5 class="card-title mx-3">
                                <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color"></a>
                            </h5> -->
                                <p class="card-text fables-fifth-text-color font-15 mx-3" title="<?php echo ($rs['ProductDetails']); ?>"><?php echo (substr($rs['ProductDetails'], 0, 50));  ?></p>
                                <p class="font-weight-bold fables-second-text-color my-2 mb-3 mx-3">$ <?php echo ($rs['ProductPrice']); ?></p>
                                <p class="fables-product-info"><a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                                        <span class="fables-iconcart"></span>
                                        <span class="fables-btn-value">ADD TO CART</span></a></p>
                            </div>
                        </div>
                    </div>


                <?php } ?>


            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="font-35 font-weight-bold fables-main-text-color my-4 my-lg-5 text-center">Latest News</h2>
            </div>

            <?php
            include_once 'news_class.php';
            $news = new news();
            $r = $news->Searchnews();
            while ($rs = mysqli_fetch_assoc($r)) {

                ?>
                <div class="col-12 col-md-4 mb-4 mb-md-5 wow fadeIn" data-wow-delay=".6s">
                    <div class="image-container zoomIn-effect">
                        <a href="#"><img src="assets/custom/images/magazine-2559842.jpg" alt=""></a>
                    </div>

                    <div class="above-date py-2 py-lg-3 fables-fifth-text-color float-left w-100 d-md-none d-lg-block">
                        <div class="float-left font-13">
                            <span class="fables-iconcalender"></span> <?php echo $rs['news_Date'] ?>
                        </div>
                        <div class="float-right font-13">
                            <span class="fables-iconnews"></span> Latest News
                        </div>
                    </div>
                    <h2 class="font-weight-bold font-20 my-2"><a href="#" class="fables-main-text-color fables-second-hover-color"><?php echo $rs['news_Title'] ?></a></h2>

                    <p class="fables-forth-text-color font-14">
                        <?php echo $rs['news_Content'] ?>

                    </p>
                    <a href="news.php" class="btn fables-main-text-color fables-second-hover-color p-0 mt-2">
                        <span class="underline">Read More</span>
                        <span class="fables-iconarrow-light ml-2"></span>
                    </a>
                </div>
            <?php } ?>

        </div>
    </div>

    <!-- /End page content -->


</body>

</html>

<?php
include_once "scripts.php";
include 'footerBefore.php';
?>
<?php
include_once 'headerAfterCitizen.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> News </title>


</head>
<style>
    header {
        position: relative;
        background-color: black;
        height: 75vh;
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
        background-color: black;
        opacity: 0.5;
        z-index: 1;
    }

    @media (pointer: coarse) and (hover: none) {
        header {
            background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
        }

        header video {
            display: none;
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

    <!-- Loading Screen -->
    <div id="ju-loading-screen">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>


    <!-- Start Header -->
    <div class="fables-header fables-after-overlay">
        <div class="container">
            <h2 class="fables-page-title fables-second-border-color">News</h2>
        </div>
    </div>
    <!-- /End Header -->

    <!-- Start Breadcrumbs -->
    <div class="fables-light-background-color">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->





    <div class="container ">
        <div class="row " style="margin-left:-5%">


            <div class="container">
                <h2 class="fables-main-text-color font-35 font-weight-bold text-center my-4 my-lg-5">Latest <span class="fables-second-text-color">News</span> </h2>

                <div class="row overflow-hidden mb-lg-5">

                    <?php
                    include_once "news_class.php";
                    $news = new news();
                    $rs = $news->Search();
                    while ($row = mysqli_fetch_assoc($rs)) {

                        ?>

                        <div class="col-12 col-sm-6 col-lg-4 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-duration="2s" data-wow-delay=".4s">
                            <div class="table-block table-border-dark fables-second-hover-border mb-5">
                                <img src="assets/custom/images/magazine-2559842.jpg" alt="">

                                <h2 class="fables-forth-text-color text-center font-weight-bold table-title fables-third-after position-relative font-17 mt-3">
                                    <?php echo $row['news_Title']; ?></h2>
                                <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                                    <?php echo $row['news_Content']; ?>
                                </p>
                                <a href="news.php" class="btn hoverable  px-5 py-2   ">
                                    <span class="white-color-hover"><?php echo $row['news_Date']; ?></span>
                                </a>
                            </div>

                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>



        </div>
    </div>








    <!-- /End page content -->




    <!-- <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="assets/vendor/video-background/jquery.mb.YTPlayer.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/custom/js/custom.js"></script>  
<script>
     $(".player").mb_YTPlayer();
    
</script> -->

</body>

</html>

<?php
include 'footerBefore.php';
?>
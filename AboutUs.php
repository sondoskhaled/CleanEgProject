<?php
include 'headerAfterCitizen.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> About Us </title>

    <style>
        tr {
            border: red 1px solid;
        }

        .card {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            border: 0;
            font-weight: 400;
        }

        .md-tabs-r {
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
            border: 0;
            padding: .7rem;
            margin-left: 1rem;
            margin-right: 1rem;
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
</head>

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
            <h2 class="fables-page-title fables-second-border-color">About Us</h2>
        </div>
    </div>
    <!-- /End Header -->

    <!-- Start Breadcrumbs -->
    <div class="fables-light-background-color">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->

    <!-- Start page content -->
    <?php
    include_once "AboutUs_class.php";
    $about = new about();
    $rs = $about->Search();
    if ($row = mysqli_fetch_assoc($rs)) {


        ?>
        <div class="container pb-5">
            <div class="row mt-4 my-md-5 overflow-hidden">
                <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".3s">
                    <div class="border p-4">
                        <div class="row text-center text-lg-left">
                            <div class="col-12 col-lg-3 mb-3 mb-md-0">
                                <span class="fables-iconlamp-icon fables-second-text-color fa-3x"></span>
                            </div>
                            <div class="col-12 col-lg-9">
                                <h2 class="fables-second-text-color font-20 semi-font my-2 mb-lg-3 about-block-heading">
                                    We’re Creative</h2>
                                <div class="font-15 fables-forth-text-color">
                                    Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".6s">
                    <div class="border p-4">
                        <div class="row text-center text-lg-left">
                            <div class="col-12 col-lg-3 mb-3 mb-md-0">
                                <span class="fables-icongears-icon fables-second-text-color fa-3x"></span>
                            </div>
                            <div class="col-12 col-lg-9">
                                <h2 class="fables-second-text-color font-20 semi-font my-2 mb-lg-3 about-block-heading">
                                    Highly Customizable</h2>
                                <div class="font-15 fables-forth-text-color">
                                    Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".9s">
                    <div class="border p-4">
                        <div class="row text-center text-lg-left">
                            <div class="col-12 col-lg-3 mb-3 mb-md-0">
                                <span class="fables-iconheadset-icon fables-second-text-color fa-3x"></span>
                            </div>
                            <div class="col-12 col-lg-9">
                                <h2 class="fables-second-text-color font-20 semi-font my-2 mb-lg-3 about-block-heading">
                                    Efficient 24/7 support</h2>
                                <div class="font-15 fables-forth-text-color">
                                    Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row overflow-hidden">
                <div class="col-12 col-md-6">
                    <div class="image-container translate-effect-right">
                        <img src="assets/custom/images/mission-img.jpg" alt="Fables Template" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <span class="fables-iconrocket-icon fables-second-text-color fa-3x"></span>
                    <h2 class="font-30 font-weight-bold fables-second-text-color my-4 d-inline-block d-lg-block wow fadeInRight" data-wow-duration="1.5s"><?php echo $row['title']; ?></h2>
                    <div class="fables-vision-detail fables-forth-text-color wow fadeInRight" data-wow-duration="1.5s">
                        <?php echo $row['content']; ?>
                    </div>
                </div>
            </div>

        </div>
    <?php
    }

    ?>




    <!-- /End page content -->


</body>

</html>

<?php
include_once "scripts.php";
include 'footerAfter.php';

?>
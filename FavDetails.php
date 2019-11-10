<?php
include 'headerAfterCitizen.php';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Favorite List Details</title>

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
            <h2 class="fables-page-title fables-second-border-color">Favorite List Details</h2>
        </div>
    </div>
    <!-- /End Header -->

    <!-- Start Breadcrumbs -->
    <div class="fables-light-gary-background">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Favorite List Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->
    <div class="container">
        <div class="row mb-0 mb-md-5">
            <div class="col-12">
                <h2 class="fables-forth-text-color fables-light-background-color my-3 my-md-5 py-3 text-center font-20 semi-font">Favorite List Details</h2>
            </div>
            <?php
            include_once "Fav.php";
            $V = new Fav();

            $r = $V->SearchAllByID($_SESSION['citizens']);
            while ($rows = mysqli_fetch_assoc($r)) {


                ?>
                <div class="col-12 tab-content card pt-4 mt-0" id="myTabContentJust">
                    <div class="tab-pane fade show active" id="citizen-just" role="tabpanel" aria-labelledby="citizen-tab-just">
                        <div class="col-12 col-sm-6 col-lg-4 fables-product-block">
                            <div class="card rounded-0 mb-4 mr-5 ml-5">
                                <div class="row">
                                    <div class="fables-product-img col-12">
                                        <img class="card-img-top rounded-0" src="assets/custom/images/products/<?php echo ($rows['ProductNo']);
                                                                                                                    echo ($rows['ColorNo']); ?>.jpg" alt="dress fashion">
                                        <div class="fables-img-overlay">
                                            <ul class="nav fables-product-btns">
                                                <li><a href="ProductDetailsAfter.php?ProNo=<?php echo ($rows['ProductNo']); ?>&CatNo=<?php echo ($rows['CategoryNo']); ?>&CNo=<?php echo ($rows['ColorNo']); ?>" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body col-12">
                                        <h5 class="card-title mx-3">
                                            <a href="#" class="fables-main-text-color font-16 semi-font fables-second-hover-color"><?php echo ($rows['CategoryName']); ?> / <?php echo ($rows['ProductName']); ?></a>
                                        </h5>
                                        <p class="font-15 font-weight-bold fables-fifth-text-color my-2 mx-3">$ <?php echo ($rows['ProductPrice']); ?></p>

                                        <p class="fables-product-info">
                                            <a href="DeleteFromFav.php?ONo=<?php echo $rows['FavNo']; ?>" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 p-2 px-4">
                                                <span class="fables-iconcart"></span>
                                                <span class="fables-btn-value">Remove From Fav List</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>






</body>

</html>

<?php
include 'footerBefore.php';
?>
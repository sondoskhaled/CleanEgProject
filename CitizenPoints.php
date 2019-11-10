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

    <title>My Points</title>

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
            <h2 class="fables-page-title fables-second-border-color">My Points</h2>
        </div>
    </div>
    <!-- /End Header -->

    <!-- Start Breadcrumbs -->
    <div class="fables-light-gary-background">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Points</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->
    <div class="container">
        <div class="row mb-0 mb-md-5 ml-5 mr-5">
            <div class="col-12">
                <h2 class="fables-forth-text-color fables-light-background-color my-3 my-md-5 py-3 text-center font-20 semi-font">My Points</h2>
            </div>
            <div class="tab-content card pt-4 mt-0 col-12" id="myTabContentJust">
                <div class="tab-pane fade show active" id="citizen-just" role="tabpanel" aria-labelledby="citizen-tab-just">
                    <div class="col-6 offset-3 text-center">
                        <?php
                        include_once "Reward.php";
                        $rewards = new Reward();
                        $rewards->setCitizenEmail($_SESSION['citizens']);
                        $re = $rewards->GetMoneyData();
                        if ($rows = mysqli_fetch_assoc($re)) {
                            ?>
                            <h1><?php echo $rows['Money'] ?>$</h1>
                        <?php } ?>
                        <br>
                        <img src="assets/custom/images/money-bag.png" class="fables-second-text-color img-fluid" width="250" height="250">
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>

<?php
include 'footerBefore.php';
?>
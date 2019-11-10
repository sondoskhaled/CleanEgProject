<?php
include 'headerBefore.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Store Single</title>
    
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
    <!-- portfolio filter gallery -->
    <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
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

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
    <script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/popper/popper.min.js"></script>
    <script src="assets/vendor/range-slider/range-slider.js"></script>
    <script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
    <!-- <script src="assets/custom/js/custom.js"></script>   -->
     
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
         <h2 class="fables-page-title fables-second-border-color">Viwe Single Product</h2>
    </div>
</div>  
<!-- /End Header -->

<!-- Start Breadcrumbs -->
<div class="fables-light-gary-background">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Viwe Single Product</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->

     
<!-- Start page content -->   
<div class="container"> 
     <div class="row my-4 my-md-5">
          <div class="col-12 col-lg-6">
                 <div class="fables-single-slider store-single-slider">

                 <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                      include_once "Products.php";
                      $pro=new Products();
                      $rs=$pro->SearchByID($_GET['ProNo']);
                      while($row=mysqli_fetch_assoc($rs))
                      {
                         
                          ?>

                        <div class="carousel-item <?php if($_GET['CNo']==$row['ColorNo']) echo 'active';?>">
                        <img class="d-block w-100" src="assets/custom/images/Products/<?php echo $row['ProductNo']; echo $row['ColorNo']?>.jpg" >
                        </div>
                        <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                      </div>
                    
                 </div>
          </div> 
          <div class="col-12 col-lg-6 col-12 col-lg-6 mt-3 mt-lg-0">
          <?php
                include_once "Products.php";
                $pro=new Products();
                $rs=$pro->SearchByID($_GET['ProNo']);
                if($row=mysqli_fetch_assoc($rs))
                {

                ?>

              <h2 class="fables-main-text-color font-20 semi-font">LUIS LEATHER DRIVING MOCCASINS FROM  DOUBLE OAK MILLS</h2>
          
              <div class="fables-forth-text-color fables-single-tags mt-3">
                  <span class="fables-fifth-text-color fables-icontags"></span> 
                  <a href="#"> <?php echo($row['CategoryName']); ?></a>
                  <a href="#"> <?php echo($row['ProductName']); ?></a>
              </div>
              
              <p class="fables-forth-text-color font-15 my-3">
              <?php echo($row['ProductDetails']); ?>
              </p>

              <?php } ?>
              
              <div class="row mb-5">
                  <div class="col-5 col-md-3">
                      <span class="fables-fifth-text-color"> COLORS : </span>
                  </div>                          
                  <div class="col-7 col-sm-6">                             
                      <ul class="nav">
                      <?php
                      include_once "Products.php";
                      $pro=new Products();
                      $rs=$pro->SearchByID($_GET['ProNo']);
                      while($row=mysqli_fetch_assoc($rs))
                      {
                           
                            include_once "Colors.php";
                            $Co=new Colors();
                            $rC=$Co->SearchByID($row['ColorNo']);
                            while($rows=mysqli_fetch_assoc($rC))
                            {

                            ?>
                         <li>
                             <label class="fable-product-color">
                                  <input type="radio" name='color' <?php if($_GET['CNo']==$row['ColorNo']) echo 'checked';?>>
                                  <span class="checkmark" style="background-color:<?php echo $rows['ColorName']; ?> ;" ></span>
                                  
                              </label> 
                         </li>
                            <?php }}?>
                        

                      </ul>
                  </div>
              </div> 

              
              <div class="row mb-5">
                  <div class="col-12 col-sm-7 text-center text-md-left"> 
                      <span class="fables-fifth-text-color"><span class="fables-iconprice"></span> Price :</span> 
                      <?php
                      include_once "Products.php";
                      $pro=new Products();
                      $rs=$pro->SearchByID($_GET['ProNo']);
                      if($row=mysqli_fetch_assoc($rs))
                      {
                      ?>
                      <span class="fables-second-text-color font-20 font-weight-bold">$ <?php echo($row['ProductPrice']); ?></span> 
                      <?php }?> 
                  </div>

                  <div class="col-9 col-md-4 col-lg-5 mt-3 mt-sm-0 mr-auto ml-auto mr-md-0 ml-md-auto">
                      <div class="fables-calc fables-light-background-color fables-btn-rouned">
                          <span  class="calc-btn minus fables-forth-text-color float-left calc-width mt-2">-</span> 
                          <span class="calc-width">
                              <input type="text" id="input-val" class="form-control d-inline-block border text-center form-circle-input rounded-circle"> 
                          </span>
                          <span  class="calc-btn plus fables-forth-text-color float-right calc-width mt-2">+</span>
                      </div>
                  </div>
              </div> 
            
              <div class="row mb-5">
                  <div class="col-6">
                        <a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2 semi-font">
                        <span class="fables-iconcart"></span> 
                        <span class="fables-btn-value">ADD TO CART</span></a>
                  </div>
                  <div class="col-6 text-right"> 
                         <!-- <a href="" class="btn fables-product-btn text-white fables-forth-background-color rounded-circle fables-second-hover-background-color p-0"><span class="fables-iconcompare"></span></a>  -->
                        <button href="#myModal" data-toggle="modal" data-target="#myModal" class="btn text-white fables-product-btn fables-forth-background-color rounded-circle fables-second-hover-background-color p-0"><span class="fables-iconheart"></span></button>
                       
                  </div>
              </div> 
                 
               <div class="row">
                  <div class="col-6 col-sm-4 col-lg-5 col-xl-4 text-left">
                      <a href="#" class="btn fables-forth-background-color fables-btn-rouned fables-second-hover-background-color white-color px-2 px-md-4 py-2 font-18">
                        <span class="fables-iconshare"></span> 
                        <span class="fables-btn-value">Share on </span></a>
                  </div>
                  <div class="col-6 col-sm-8 col-lg-7 col-xl-8 text-center mt-0 mt-sm-0 pl-0">
                      <ul class="nav fables-single-social mt-2 justify-content-end justify-content-lg-start">
                          <li><a href="#" target="_blank" class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class="fab fa-facebook-f fa-fw"></i></a></li>
                          <li><a href="#" target="_blank" class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class="fab fa-twitter fa-fw"></i></a></li>
                          <li><a href="#" target="_blank" class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class="fab fa-instagram fa-fw"></i></a></li>
                          <li><a href="#" target="_blank" class="fables-forth-text-color fables-single-link fables-second-hover-color"><i class="fab fa-linkedin fa-fw"></i></a></li>
                      </ul>
                  </div>
              </div> 
          </div> 
     </div>
               
 
     <div class="row mb-0 mb-md-5">
           <div class="col-12">
               <h2 class="fables-forth-text-color fables-light-background-color my-3 my-md-5 py-3 text-center font-20 semi-font">Related Products</h2>
           </div>
           <?php
                            include_once "Products.php";  
                            $pro=new Products();
                            $prows=$pro->GetViewData();
                            while($rs=mysqli_fetch_assoc($prows))
                            {
                                    if($rs['CategoryNo']==$_GET['CatNo']){
                            ?>
           <div class="col-12 col-sm-6 col-lg-3 fables-product-block">
               <div class="card rounded-0 mb-4">
                   <div class="row">
                       <div class="fables-product-img col-12">
                          <img class="card-img-top rounded-0" src="assets/custom/images/products/<?php echo($rs['ProductNo']); echo($rs['ColorNo']); ?>.jpg" alt="dress fashion">
                          <div class="fables-img-overlay">                                          
                              <ul class="nav fables-product-btns">
                                  <li><a href="ProductDetailsBefore.php?ProNo=<?php echo($rs['ProductNo']); ?>&CatNo=<?php echo($rs['CategoryNo']); ?>&CNo=<?php echo($rs['ColorNo']); ?>" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                  <li><button href="#myModal" data-toggle="modal" data-target="#myModal" class="fables-product-btn"><span class="fables-iconheart"></span></button></li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                            <a href="#" class="fables-main-text-color font-16 semi-font fables-second-hover-color"><?php echo($rs['ProductName']); ?></a>
                        </h5>
                        <p class="card-text fables-fifth-text-color font-15 mx-3" title="<?php echo($rs['ProductDetails']); ?>"><?php echo(substr($rs['ProductDetails'],0,50));  ?></p>
                        <p class="font-15 font-weight-bold fables-second-text-color my-2 mx-3">$ <?php echo($rs['ProductPrice']); ?></p>
                        <p class="fables-product-info"><a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 p-2 px-4">
                        <span class="fables-iconcart"></span> 
                        <span class="fables-btn-value">ADD TO CART</span></a></p>
                      </div>
                   </div>
                </div>
           </div>
                            <?php }}?>
          
     </div>

</div> 
<!-- /End page content -->

    
</body>
</html>

<?php
    include 'footerBefore.php';
?>
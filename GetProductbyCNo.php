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

    <title>All Product</title>
   
     
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
         <h2 class="fables-page-title fables-second-border-color">All Product</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-gary-background">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Product</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 
<div class="container">
     <div class="row my-4 my-md-5">
           <div class="col-12 col-md-4 col-lg-3">
               <div class="fables-store-search mb-4">
                   <form> 
                         <div class="input-icon">
                             <span class="fables-iconsearch-icon fables-input-icon"></span>
                             <input type="text" class="form-control rounded-0 form-control rounded-0 font-14 fables-store-input pl-5 py-2"  placeholder="Search Product">
                         </div>
 
                  </form>
               </div>
               <div class="rage-slider">
                    <h2 class="font-16 semi-font fables-forth-text-color fables-light-gary-background  p-3 mb-4">Filter by price</h2> 
                    <form> 
                         <div class="range-slider fables-forth-text-color" id="facet-price-range-slider" data-options='{"output":{"prefix":""},"maxSymbol":"+"}'>
                             <input name="range-1" value="0" min="0" max="10000" step="1" type="range">
                             <input name="range-2" value="10000" min="0" max="10000" step="1" type="range">
                         </div> 
                         <button type="submit" class="btn btn-block fables-second-background-color rounded-0 white-color white-color-hover p-2 font-15 mb-4">Filter</button>
                    </form>
               </div>
               <h2 class="font-16 semi-font fables-forth-text-color fables-light-gary-background  p-3 mb-4">Product Categories</h2>
               <ul class="nav fables-forth-text-color fables-forth-before fables-store-left-list">
               <?php
                                        include_once "Category.php";
                                        $cat=new Category();
                                        $c= $cat->GetData();
                                    
                                        while($row=mysqli_fetch_assoc($c))
                                        {
                                            ?>
                                        
                                                <li><a href="GetProductbyCNo.php?CNo=<?php echo $row['CategoryNo'];?>"><?php echo $row['CategoryName'];?></a></li>
                                    <?php } ?>
               </ul>

               <h2 class="font-16 semi-font fables-forth-text-color fables-light-gary-background  p-3 my-4">Top Rated Products</h2> 
               <div class="row mb-3">
                   <div class="col-4 pr-0">
                       <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                   </div>
                   <div class="col-8">
                       <a href="#" class="fables-main-text-color font-14 semi-font fables-second-hover-color store-card-text">LUIS LEATHER DRIVING MOCCASINS FROM ... </a>
                       <p class="font-weight-bold fables-second-text-color ">$ 98.00</p>
                   </div>
               </div> 
               
           </div>
           <div class="col-12 col-md-8 col-lg-9"> 
                   <div class="row mb-4">
                       <div class="col-12 col-lg-4">
                           <form> 
                              <div class="form-group mb-0"> 
                                <select class="form-control rounded-0" id="sort">
                                  <option value="" selected>default sorting</option>
                                  <option value="1">By Price High To Low</option>
                                  <option value="2">By Price Low To High</option>
                                  <option value="3">By Name High To Low</option>
                                  <option value="4">By Name High To Low</option>
                                </select>
                              </div> 
                            </form>
                       </div>
                       <div class="col-4 col-md-6 col-lg-2 offset-lg-6 text-center pl-0 d-none d-lg-block">
                           <span class="fables-iconlist fa-fw fables-view-btn fables-list-btn fables-third-border-color fables-third-text-color"></span>
                           <span class="fables-icongrid active fa-fw fables-view-btn fables-grid-btn fables-third-border-color fables-third-text-color"></span>
                       </div>
                   </div>
                   <div class="row">
                   <?php
                                        include_once "Products.php";
                                        $Pro=new Products();
                                        
                                        $P= $Pro->GetCatPro($_GET['CNo']);

                                    
                                        while($row=mysqli_fetch_assoc($P))
                                        {
                                            ?>
                       <div class="col-12 col-sm-6 col-lg-4 fables-product-block">
                           <div class="card rounded-0 mb-4">
                               <div class="row">
                                   <div class="fables-product-img col-12">
                                      <img class="card-img-top rounded-0" src="assets/custom/images/products/<?php echo($row['ProductNo']); echo($row['ColorNo']); ?>.jpg" alt="dress fashion">
                                      <div class="fables-img-overlay">                                          
                                          <ul class="nav fables-product-btns">
                                              <li><a href="ProductDetailsBefore.php?ProNo=<?php echo($row['ProductNo']); ?>&CatNo=<?php echo($row['CategoryNo']); ?>&CNo=<?php echo($row['ColorNo']); ?>" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                              <li><a  href="#myModal" data-toggle="modal" data-target="#myModal" class="fables-product-btn"><span class="fables-iconheart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="card-body col-12">
                                    <h5 class="card-title mx-xl-3">
                                        <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color"><?php echo $row["ProductName"]; ?></a>
                                    </h5>
                                    <p class="store-card-text fables-fifth-text-color font-15 mx-xl-3" title="<?php echo $row["ProductDetails"]; ?>"><?php echo(substr($row['ProductDetails'],0,50));  ?></p>
                                    <p class="font-15 font-weight-bold fables-second-text-color my-2 mx-xl-3">$ <?php echo $row["ProductPrice"]; ?></p>
                                    <p class="fables-product-info"><a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 p-2 px-2 px-xl-4">
                                    <span class="fables-iconcart"></span> 
                                    <span class="fables-btn-value">ADD TO CART</span></a></p>
                                  </div>
                               </div>
                            </div>
                       </div>
                                        <?php } ?>                              
                   </div> 
               <nav aria-label="Page navigation">
                      <ul class="pagination justify-content-center">                                 
                        <li class="page-item"><a class="page-link rounded-circle fables-forth-text-color fables-page-link fables-second-hover-background-color" href="#">1</a></li>
                        <li class="page-item"><a class="page-link rounded-circle fables-forth-text-color fables-page-link fables-second-hover-background-color" href="#">2</a></li>
                        <li class="page-item"><a class="page-link rounded-circle fables-forth-text-color fables-page-link fables-page-link fables-second-hover-background-color" href="#">3</a></li>  
                        <li><span class="fables-pagi-dots fables-forth-text-color"> .... </span></li>
                        <li class="page-item"><a class="page-link rounded-circle fables-forth-text-color fables-page-link fables-second-hover-background-color" href="#">20</a></li>                                
                      </ul>
                    </nav> 
           </div>
     </div>

</div> 
<!-- /End page content -->

<script src="assets/vendor/range-slider/range-slider.js"></script>
    
</body>
</html>


<?php
    include 'footerBefore.php';
?>
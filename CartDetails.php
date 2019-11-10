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

    <title> Cart Details</title>
   
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
         <h2 class="fables-page-title fables-second-border-color">Cart Details</h2>
    </div>
</div>  
<!-- /End Header -->

<!-- Start Breadcrumbs -->
<div class="fables-light-gary-background">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart Details</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->

<div class="row mb-0 mb-md-5">
           <div class="col-12">
               <h2 class="fables-forth-text-color fables-light-background-color my-3 my-md-5 py-3 text-center font-20 semi-font">Cart Details</h2>
           </div>
                   <?php
                            include_once "ViewCart.php";
                            $V=new ViewCart();
                            
                            $r= $V->SearchAllByID($_SESSION['citizens']);
                            while($rows=mysqli_fetch_assoc($r))
                            {
                                
                        
                                ?>

<div class="col-12 col-sm-6 col-lg-3 fables-product-block">
               <div class="card rounded-0 mb-4 mr-5 ml-5">
                   <div class="row">
                       <div class="fables-product-img col-12">
                          <img class="card-img-top rounded-0" src="assets/custom/images/products/<?php echo($rows['ProductNo']); echo($rows['ColorNo']); ?>.jpg" alt="dress fashion">
                          <div class="fables-img-overlay">                                          
                              <ul class="nav fables-product-btns">
                                  <li><a href="ProductDetailsAfter.php?ProNo=<?php echo($rows['ProductNo']); ?>&CatNo=<?php echo($rows['CategoryNo']); ?>&CNo=<?php echo($rows['ColorNo']); ?>" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                  <li><button href="" class="fables-product-btn"><span class="fables-iconheart"></span></button></li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                            <a href="#" class="fables-main-text-color font-16 semi-font fables-second-hover-color"><?php echo($rows['CategoryName']); ?> / <?php echo($rows['ProductName']); ?></a>
                        </h5>
                        <p class="font-15 font-weight-bold fables-fifth-text-color my-2 mx-3"><?php echo($rows['Quntity']); ?> x $ <?php echo($rows['ProductPrice']); ?></p>
                        <div class="fables-calc fables-light-background-color fables-btn-rouned mb-2 mt-2">
                      <form  method="post">
                        <a href="UpdateCart.php?ONo=<?php echo($rows['OrderTempNo']); ?>&Op=M">  <span  class="calc-btn minus fables-forth-text-color float-left calc-width mt-2">-</span> </a>
                          <span class="calc-width">
                              
                              <input type="text"  readonly value="<?php  echo($rows['Quntity']); ?>" name="" class="form-control d-inline-block border text-center form-circle-input rounded-circle"> 
                            
                            </span>
                            <a href="UpdateCart.php?ONo=<?php echo($rows['OrderTempNo']); ?>&Op=P">  <span  class="calc-btn plus fables-forth-text-color float-right calc-width mt-2">+</span></a>
                          </form>
                      </div>
                      
                        <p class="font-15 font-weight-bold fables-second-text-color my-2 mx-3">Sub Total : $ <?php echo($rows['SubTotal']); ?></p>
                        <p class="fables-product-info">
                            <a href="DeleteFromCart.php?ONo=<?php echo $rows['OrderTempNo']; ?>"  class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 p-2 px-4">
                        <span class="fables-iconcart"></span> 
                        <span class="fables-btn-value">Remove From CART</span></a></p>
                      </div>
                   </div>
                </div>
           </div>
           

                        <?php } ?>
                        </div>

                      

<div class="row ">
    <div class="col text-center">
            <a href="#modalCart" data-toggle="modal" data-target="#modalCart" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-30 p-2 px-4 mb-5">
            <span class="fables-iconcart"></span> 
            <span class="fables-btn-value">Checkout</span></a> 
            
                        
</div></div>

<div class="row">
<div class="col-6 offset-3 text-center">
<form method="post">
                                
                                <div class="form-group"> 
                                <div class="input-icon">
                                <span class="fables-iconloc fables-input-icon font-19 " style="color:#E54D42;margin-top:-3px; "></span>
                                <select name="City"  class="form-control rounded-0 pl-5 font-13 sign-register-input" required id='city'>
                                   <option value="" hidden>Select your City</option>
                                   <?php
                                        include_once "Cities.php";
                                        $gov=new Cities();
                                        $g= $gov->GetData();
                                    
                                        while($row=mysqli_fetch_assoc($g))
                                        {
                                            ?>
                                        <option  value="<?php echo $row['CityNo'];?>"
                                        <?php if (isset($_POST['City']) && $_POST['City']==$row['CityNo']) echo 'selected="selected"';?> >
                                        <?php echo $row['CityName'] ;?></option>
                                        <?php
                                        }
                                        
                                    ?>
                                   
                            </select>
                                </div>
                                </div>
                               
                                <div class="form-group"> 
                                    <div class="input-icon">
                                        <span class="fables-iconloc fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                                        <input type="text" name="Address" id='add' style="height=10px" required
                                        value="<?php echo isset($_POST['Address'])?$_POST['Address']:'' ?>"
                                        class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="complate Address">
                                    </div>
                                    
                                </div> 
                                <!--Maps-->
                                <div class="form-group"> 
                                <input  name="latitude" class="MapLat" value="30.0444" id="lat" type="text" placeholder="Latitude" style="width: 161px;" hidden >
                                <input   name="longitude" class="MapLon" value="31.2357" id="log" type="text" placeholder="Longitude" style="width: 161px;" hidden>
                                
                                <div id="map_canvas" style="height: 450px;width: 90%;margin: 0.6em;"></div>
                                    
                                </div> 

                                <div class="form-group"> 
                                    <div class="input-icon">
                                        <input type="checkbox" name="check" id='check' style="height=10px"
                                        value="yes"
                                        class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input d-inline" placeholder="complate Address">Use your Money
                                    </div>
                                    
                                </div>
                                <a id="order"  class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-30 p-2 px-4 mb-5">
            <span class="fables-iconcart"></span> 
            <span class="fables-btn-value">Order Now</span></a>
                                    </form>

                                    
            
</div></div>


<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Your cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr class="fables-second-text-color">
              
              <th>Product name</th>
              <th>Quntity</th>
              <th>Price</th>
              <th>Sub Total</th>
            </tr>
          </thead>
          <tbody>
                            <?php
                            include_once "ViewCart.php";
                            $V=new ViewCart();
                            
                            $r= $V->SearchAllByID($_SESSION['citizens']);
                            while($rows=mysqli_fetch_assoc($r))
                            {
                                
                        
                                ?>

                                <tr>
                                <td><?php echo $rows['ProductName']; ?></td>
                                <td><?php echo $rows['Quntity']; ?></td>
                                <td><?php echo $rows['ProductPrice']; ?>$</td>
                                <td><?php echo $rows['Quntity']*$rows['ProductPrice']; ?>$</td>
                                </tr>

                            <?php } ?>
                                <tr class="fables-second-text-color">
                                <td colspan="2">Total : </td>
                                <?php
                                    include_once "ViewCart.php";
                                    $V=new ViewCart();
                                    
                                    $r= $V->GetTotal($_SESSION['citizens']);
                                    if($rows=mysqli_fetch_assoc($r))
                                    {
                                        
                        
                                ?>

                                <td colspan="2"><?php echo $rows['sum(SubTotal)'] ?>$</td>
                                    <?php } ?>
                                </tr>
                               
                                
           
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
      <a  href="" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-20 p-2 px-4 mb-5" data-dismiss="modal"><span class="fables-btn-value">close</span></a> 
         
      </div>

    </div>
  </div>
</div>
<!-- Modal: modalCart -->

<!-- Maaap -->

<script src="http://maps.google.com/maps/api/js?libraries=places&region=uk&language=en&sensor=true"></script>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->

<script>
  
     $(function () {
        var lat , lng;
      
              function getLocation(mapfunc) {
                
              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
              } else { 
                //x.innerHTML = "Geolocation is not supported by this browser.";
              }

              setTimeout( mapfunc , 1000);
            }
            function showPosition(position) {
            //   $('#lat').val(position.coords.latitude);
            //   $('#log').val(position.coords.longitude);
            lat=position.coords.latitude;
            lng=position.coords.longitude;
            console.log(lat);
            console.log(lng);
            
            }
            getLocation(mapfunc);
            function mapfunc(){
            // lat=$('#lat').val();
            // lng=$('#log').val();

            console.log(lat);
            console.log(lng);
             latlng = new google.maps.LatLng(lat, lng),
             image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
         //zoomControl: true,
         //zoomControlOptions: google.maps.ZoomControlStyle.LARGE,
         var mapOptions = {
             center: new google.maps.LatLng(lat, lng),
             zoom: 13,
             mapTypeId: google.maps.MapTypeId.ROADMAP,
             panControl: true,
             panControlOptions: {
                 position: google.maps.ControlPosition.TOP_RIGHT
             },
             zoomControl: true,
             zoomControlOptions: {
                 style: google.maps.ZoomControlStyle.LARGE,
                 position: google.maps.ControlPosition.TOP_left
             }
         },
         map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions),
             marker = new google.maps.Marker({
                 position: latlng,
                 map: map,
                 icon: image
             });
         var input = document.getElementById('searchTextField');
         var autocomplete = new google.maps.places.Autocomplete(input, {
             types: ["geocode"]
         });
         autocomplete.bindTo('bounds', map);
         var infowindow = new google.maps.InfoWindow();
         google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
             infowindow.close();
             var place = autocomplete.getPlace();
             if (place.geometry.viewport) {
                 map.fitBounds(place.geometry.viewport);
             } else {
                 map.setCenter(place.geometry.location);
                 map.setZoom(17);
             }
             moveMarker(place.name, place.geometry.location);
             $('.MapLat').val(place.geometry.location.lat());
             $('.MapLon').val(place.geometry.location.lng());
             lat=place.geometry.location.lat();
             lng=place.geometry.location.lng();
         });


         google.maps.event.addListener(map, 'click', function (event) {
           
         
             $('.MapLat').val(event.latLng.lat());
             $('.MapLon').val(event.latLng.lng());
             lat=event.latLng.lat();
             lng=event.latLng.lng();
             
             infowindow.close();
                     var geocoder = new google.maps.Geocoder();
                     geocoder.geocode({
                         "latLng":event.latLng
                     }, function (results, status) {
                         console.log(results, status);
                         if (status == google.maps.GeocoderStatus.OK) {
                             console.log(results);
                             var lat = results[0].geometry.location.lat(),
                                 lng = results[0].geometry.location.lng(),
                                 placeName = results[0].address_components[0].long_name,
                                 
                                 latlng = new google.maps.LatLng(lat, lng);
                             moveMarker(placeName, latlng);
                             $("#searchTextField").val(results[0].formatted_address);
                         }
                     });

                     
         });
        
         function moveMarker(placeName, latlng) {
             marker.setIcon(image);
             marker.setPosition(latlng);
             infowindow.setContent(placeName);
             //infowindow.open(map, marker);
         }}
         $("#order").on('click',function(){
                                console.log(lat);
                                console.log(lng);
                                address=$("#add").val();
                                city=$("#city").val();
                                if($('#check').is(':checked')){v='yes';}
                                else{v='no';}
                                window.location.href="OrderNow.php?add="+address+"&city="+city+"&v="+v+"&lat="+lat+"&lng="+lng+"";
                        
                          
                          });
       
     });
</script>

<script>
                      $(document).ready(function(){
                        
                        //   $("#order").on('click',function(){
                        //         console.log(lat);
                        //         console.log(lng);
                        //         address=$("#add").val();
                        //         city=$("#city").val();
                        //         if($('#check').is(':checked')){v='yes';}
                        //         else{v='no';}
                        //         window.location.href="OrderNow.php?add="+address+"&city="+city+"&v="+v+"&lat="+lat+"&lng="+lng+"";
                        
                          
                        //   });
                      });
                  </script>
</body>
</html>

<?php
    include 'footerBefore.php';
?>
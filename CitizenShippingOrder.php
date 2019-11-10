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

    <title>My Orders</title>
   
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
         <h2 class="fables-page-title fables-second-border-color">My Orders</h2>
    </div>
</div>  
<!-- /End Header -->

<!-- Start Breadcrumbs -->
<div class="fables-light-gary-background">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Orders</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->

<div class="row mb-0 mb-md-5 ml-5 mr-5">
           <div class="col-12">
               <h2 class="fables-forth-text-color fables-light-background-color my-3 my-md-5 py-3 text-center font-20 semi-font">My Orders</h2>
           </div>
           <div class="col-12">
           <a href="AllProductsAfter.php"  class=" float-right btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-15 p-2 px-4 mb-5">
             
             <span class="fables-btn-value">Add New Order</span></a> 
           </div>
           <table class="table table-bordered">
            <thead>
                <tr class="fables-second-text-color">
                <th scope="col">Order Number</th>
                <th scope="col">Order Date</th>
                <th scope="col">Order Total</th>
                <th scope="col">Delivery Phone</th>
                <th scope="col">Order Address</th>
                <th scope="col">Order Status</th>
                <th scope="col">Order Details</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    include_once "Orders.php";
                    $Ord=new Orders();
                    $Ord->setCitizenEmail($_SESSION['citizens']);
                    $o= $Ord->GetDataShipping();
                
                    while($row=mysqli_fetch_assoc($o))
                    {
                        ?>
                <tr>
                <th scope="row"><?php echo $row['OrderNo']; ?></th>
                <td><?php echo $row['OrderDate']; ?></td>
                <td><?php echo $row['OrderTotal']; ?></td>
                <td><?php echo $row['DeliveryPhone']; ?></td>
                <td><?php echo $row['OrderAddress']; ?></td>
                <td><?php echo $row['OrderStatus']; ?></td>
                <td><a href="#modalCart<?php echo $row['OrderNo']; ?>" data-toggle="modal" data-target="#modalCart<?php echo $row['OrderNo']; ?>" id="<?php echo $row['OrderNo']; ?>" class="m btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-15 p-2 px-4 mb-5">
             
            <span class="fables-btn-value" id="<?php echo $row['DeliveryPhone']; ?>">View Details</span></a> 
                            <!-- Modal: modalOrder -->
<div class="modal fade" id="modalCart<?php echo $row['OrderNo']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Your Order</h4>
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
              <th>Color</th>
              <th>Quntity</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
          <?php
                    include_once "OrderDetails.php";
                    $Odetails=new OrderDetails();
                    $Odetails->setOrderNo($row['OrderNo']);
                    $od= $Odetails->GetData();
                
                    while($rows=mysqli_fetch_assoc($od))
                    {
                        ?>            
          
            <tr>
              
              <th><?php 
              
              include_once "Products.php";
                    $Pro=new Products();
                    
                    $Pro->setProductNo($rows['ProductNo']);
                    $P= $Pro->GetDataByNo();
                
                    if($rowP=mysqli_fetch_assoc($P))
                    {
              
                     echo $rowP['ProductName']; }?></th>

              <th><?php
              
              include_once "Colors.php";
                    $Co=new Colors();
                    
                    $Co->setColorNo($rows['ProductColorNo']);
                    $c= $Co->GetDataByNo();
                
                    if($rowc=mysqli_fetch_assoc($c))
                    {
              
                   echo $rowc['ColorName'];} ?></th> 
              <th><?php echo $rows['Quntity']; ?></th>
              <th><?php echo $rows['Price']; ?></th>
              <th><?php echo $rows['Total']; ?></th>
            </tr>        
                                
                    <?php } ?>
            <tr>
                <td colspan="5">
                    <h3>Follow your order<h3>
                    <!--Map-->
                    <div id="map_canvas<?php echo $row['OrderNo']; ?>" style="height: 450px;width: 90%;margin: 0.6em;"></div>
                         
                </td>
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
<!-- Modal: modalOrder -->
        
                </td>
                </tr>
                
                <?php 
                $DPhone=$row['DeliveryPhone'];
                $ORDER=$row['OrderNo'];
                } ?>    
            </tbody>
</table>

   
</div>



 
  <script>
     $(function () {
        var ORDER;
        var DPhone;
        $(".m").click(function() {
             ORDER = $(this).attr('id');
             DPhone = $('span',this).attr('id');
            var myVar = setInterval(getLocation, 5000);
      });
      
      function getLocation (){
        console.log(ORDER);
        console.log(DPhone);

        $.ajax({
          url: "OrderCurrentPosition.php",
          method: "POST",
          data: {ORDER:ORDER,DPhone:DPhone}
        }).done(function(d) {
          console.log(d);
          latlng = JSON.parse(d);
          console.log(latlng);
          latlng.forEach(function(result) {
          var lat =result.Lat,
             lng =result.Lng,
             
             latlng = new google.maps.LatLng(lat, lng),
             image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
             console.log(lat);
             console.log(lng);
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
         map = new google.maps.Map(document.getElementById('map_canvas'+result.OrderNo), mapOptions),
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
         });
         google.maps.event.addListener(map, 'click', function (event) {
             $('.MapLat').val(event.latLng.lat());
             $('.MapLon').val(event.latLng.lng());
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
         }
       
        })
        })
      }
        
     });
</script>
             
      
</body>
</html>

<?php
    include 'footerBefore.php';
?>
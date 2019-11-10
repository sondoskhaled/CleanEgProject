<?php include_once 'Header.php' ?>
<html>
    <head>
        <style>
@media (min-width:576px){.modal-dialog{
     max-width:660px; 
    margin:1.75rem auto}}
    </style>
    </head>
<body>    
            <div class="mb-5 mt-5">dddssddssdsdf</div>
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">Shipping Order</div>
            
            <div class="table-responsive table--no-card m-b-30" >
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Order Date</th>
                            <th>Order Total</th>
                            <th>Order City</th>
                            <th>Order Address</th>
                            <th>More Details</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       <?php 
                        include_once "../Orders.php";
                        $Ord=new Orders();
                        $Ord->setDeliveryPhone($_SESSION['delivery']);
                        $Ord->setOrderStatus("Shipping");
                        $o=$Ord->GetDataByDNo();
                        while($rows=mysqli_fetch_assoc($o)){
                       ?>
                        <tr class="text-center">
                            <td><?php echo $rows['OrderNo']; ?></td>
                            <td><?php echo $rows['OrderDate']; ?></td> 
                            <td><?php echo $rows['OrderTotal']; ?></td>
                            <td><?php echo $rows['CityName']; ?></td> 
                            <td><?php echo $rows['OrderAddress']; ?></td> 
                            <td><a href="#exampleModal<?php echo $rows['OrderNo']; ?>"  data-toggle="modal" data-target="#exampleModal<?php echo $rows['OrderNo']; ?>"> Order Details</a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $rows['OrderNo']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content"  style="width:729px;margin:auto;">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Order Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                   
                                    <div class="modal-body">
                                    <div>Citizen Email: <?php echo $rows['CitizenEmail']; ?>
                                         <br>
                                         <?php 
                                            include_once "../Citizens.php";
                                            $Citizen=new Citizens();
                                            $Citizen->setCitizenEmail($rows['CitizenEmail']);
                                            $c=$Citizen->Search();
                                            if($CitizenR=mysqli_fetch_assoc($c)){

                                          ?>
                                         Citizen Name: <?php echo $CitizenR["CitizenName"]; ?>
                                         <br>
                                         Citizen Phone: <?php echo $CitizenR["CitizenPhone"]; ?>
                                         
                                            <?php }?>
                                    </div>
                                    <div class="table-responsive table--no-card m-b-30">
                                    <table class="tabletable-borderless table-striped table-earning" >
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Color</th>
                                                <th>Quntity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                    include_once "../OrderDetails.php";
                    $Odetails=new OrderDetails();
                    $Odetails->setOrderNo($rows['OrderNo']);
                    $od= $Odetails->GetData();
                
                    while($row=mysqli_fetch_assoc($od))
                    {
                        ?>            
          
            <tr class="text-center">
              
              <th><?php 
              
              include_once "../Products.php";
                    $Pro=new Products();
                    
                    $Pro->setProductNo($row['ProductNo']);
                    $P= $Pro->GetDataByNo();
                
                    if($rowP=mysqli_fetch_assoc($P))
                    {
              
                     echo $rowP['ProductName']; }?></th>

              <th><?php
              
              include_once "../Colors.php";
                    $Co=new Colors();
                    
                    $Co->setColorNo($row['ProductColorNo']);
                    $c= $Co->GetDataByNo();
                
                    if($rowc=mysqli_fetch_assoc($c))
                    {
              
                   echo $rowc['ColorName'];} ?></th> 
              <th><?php echo $row['Quntity']; ?></th>
              <th><?php echo $row['Price']; ?></th>
              <th><?php echo $row['Total']; ?></th>
            </tr>  
                    <?php } ?>
                                        </tbody>
                                    </table>
                                    </div> 
                                    <!--Map-->
                        <div id="map_canvas<?php echo $rows['OrderNo']; ?>" style="height: 450px;width: 90%;margin: 0.6em;"></div>
                                      
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="UpdateStatus2.php?ONo=<?php echo $rows['OrderNo']; ?>"  class="btn btn-secondary">Done</a>
                                       
                                           
                                    </div>
                                    </div>
                                </div>
                                </div>
                        
                        </td>   
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        
        </div>

<?php         
 include_once "../Orders.php";
 $Ord=new Orders();
 $Ord->setDeliveryPhone($_SESSION['delivery']);
 $Ord->setOrderStatus("Shipping");
 $o=$Ord->GetDataByDNo();
 while($rows=mysqli_fetch_assoc($o)){
            $lat=$rows['Lat'];
            $lang=$rows['Lng'];
        
    ?>
  <script>
     $(function () {
         var lat = <?php  echo $rows['Lat']; ?>,
             lng = <?php  echo $rows['Lng']; ?>,
             latlng = new google.maps.LatLng(lat, lng),
             image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
             //console.log(lat);
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
         map = new google.maps.Map(document.getElementById('map_canvas<?php echo $rows['OrderNo'];?>'), mapOptions),
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
       
     });
</script>
             <?php } ?>  
 </body>
<html>
<?php include_once 'Footer.php' ?> 
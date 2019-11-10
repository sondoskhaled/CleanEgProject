<?php include_once 'Header.php' ?>
<html>
<body>    
            <div class="mb-5 mt-5"></div>
            <div class="col-lg-12  ">
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">Delivery List</div>
            <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                   </div>
                                    <div class="table-data__tool-right">
                                        <a href="#exampleModal"  data-toggle="modal" data-target="#exampleModal" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add Delivery</a>
                                        
                                    </div>

                                    <!--Model-->
                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header  text-center">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Delivery</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                               
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="DeliveryName" class=" form-control-label">Delivery Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="DeliveryName" name="DeliveryName" placeholder="Delivery Name" class="form-control" required>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="DeliveryPhone" class=" form-control-label">Delivery Phone</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="tel" id="DeliveryPhone"  maxlength="11"  minlength="11"   name="DeliveryPhone" placeholder="Delivery Phone" class="form-control" required>
                                                </div>
                                            </div>
                                            
                                            

                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="Ctiy" class=" form-control-label">City</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <select name="City" id="City" class="form-control" required>
                                                        <option value="">Select City Name</option>
                                                        <?php 
                                                            include_once "../Cities.php";
                                                            $cat=new Cities();
                                                            $c=$cat->GetData();
                                                            while($rc=mysqli_fetch_assoc($c)){
                                                        ?>
                                                        <option value="<?php echo $rc['CityNo']; ?>"><?php echo $rc['CityName']; ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           
                                   
                                </div>
                                <div class="modal-footer">
                                    <button class="au-btn au-btn-icon au-btn--blue au-btn--small" data-dismiss="modal">Close</button>
                                    <input value="Add" type="submit" name="Add" class="au-btn au-btn-icon au-btn--blue au-btn--small" >
                                </div>   
                                    </form>
                                    
                                            <?php

                                            if(isset($_POST['Add']))
                                            {
                                                include_once "../Delivery.php";
                                                
                                                $D=new Delivery();
                                                $D->setDeliveryName($_POST['DeliveryName']);
                                                $D->setDeliveryPhone($_POST['DeliveryPhone']);
                                                $D->setDeliveryCity($_POST['City']);
                                                $D->Add();
                                              
                                            }
                                            ?>
                                </div>
                                </div>
                            </div>
                            </div>



                                </div>


                            </div>
                            <!--Table-->
                                <div class="table-responsive m-b-40" >
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                
                                                <th>Delivery Name</th>
                                                <th>Delivery Phone</th>
                                                <th>Delivery Password</th>
                                                <th>Delivery City</th>
                                                <th>Delivery Status</th>
                                                <th>Delete Delivery</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                            include_once "../Delivery.php";
                                            $Comp=new Delivery();
                                            //$order->setCompanyLicense($_SESSION['company']);
                                            $o=$Comp->GetData();
                                            while($rows=mysqli_fetch_assoc($o)){
                                                
                                           ?>
                                            <tr>
                                                <td><?php echo $rows['DeliveryPhone']; ?></td>
                                                
                                                <td><?php echo $rows['DeliveryName']; ?></td> 
                                                
                                                <td><?php echo $rows['DeliveryPassword']; ?></td> 
                                                <td>
                                                    
                                                <?php
                                                
                                                include_once "../Cities.php";
                                                $C=new Cities();
                                                $C->setCityNo($rows['DeliveryCity']);
                                                $City=$C->Search();
                                                if($row=mysqli_fetch_assoc($City)){
                                                    echo $row['CityName']; 
                                                }
                                            
                                                ?>
                                            
                                            </td>
                                                
                                            <td><?php echo $rows['DeliveryStatus']; ?></td> 
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="DeleteDelivery.php?DNo=<?php echo $rows['DeliveryPhone'] ; ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                    

</body>
<html>
<?php include_once 'Footer.php' ?> 
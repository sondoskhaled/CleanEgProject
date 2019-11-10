<?php include_once 'Header.php' ?>
<html>
<body>    
            <div class="mb-5 mt-5">dddssddssdsdf</div>
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">Confirmed Requests</div>
            
            <div class="table-responsive table--no-card m-b-30" >
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Request Number</th>
                            <th>Request Date</th>
                            <th>Request Status</th>
                            <th>Request City</th>
                            <th>Request Address</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       <?php 
                        include_once "../Requests.php";
                        $Ord=new Requests();
                        $Ord->setRDeliveryPhone($_SESSION['rdelivery']);
                        $Ord->setRequestStatus("Done");
                        $o=$Ord->GetDataByDNo();
                        while($rows=mysqli_fetch_assoc($o)){
                       ?>
                        <tr class="text-center">
                            <td><?php echo $rows['RequestNo']; ?></td>
                            <td><?php echo $rows['RequestDate']; ?></td> 
                            <td><?php echo $rows['RequestStatus']; ?></td>
                            <td><?php echo $rows['CityName']; ?></td> 
                            <td><?php echo $rows['RequestAddress']; ?></td> 
                            <td><a href="#exampleModal<?php echo $rows['RequestNo']; ?>"  data-toggle="modal" data-target="#exampleModal<?php echo $rows['RequestNo']; ?>">Request Details</a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $rows['RequestNo']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Request Details</h5>
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
                                    </div>    
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          
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

 </body>
<html>
<?php include_once 'Footer.php' ?> 
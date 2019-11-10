<?php include_once 'Header.php' ?>
<html>
<body>    
            <div class="mb-5 mt-5">dddssddssdsdf</div>
            <div class="col-lg-6 offset-3 ">
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">Types</div>
            
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Type Name</th>
                                                <th>Price / KG</th>
                                                <th>Order</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                            include_once "../Types.php";
                                            $type=new Types();
                                            $t=$type->GetData();
                                            while($rows=mysqli_fetch_assoc($t)){
                                           ?>
                                            <tr>
                                                <td><?php echo $rows['TypeName']; ?></td>
                                                <td><?php echo $rows['Price']; ?></td> 
                                                <td><a href="#exampleModal<?php echo $rows['TypeNo']; ?>"  data-toggle="modal" data-target="#exampleModal<?php echo $rows['TypeNo']; ?>"> Order Type</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal<?php echo $rows['TypeNo']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-center" id="exampleModalLabel">Order <?php echo $rows['TypeName']; ?></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post">
                                                        <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                                <input type="number" max="<?php echo $rows['Quntitiy']; ?>" min="0" value="" id="Quntity" name="Quntity" placeholder="Quntity" class="form-control">
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            
                                                            <button type="submit" name="Order<?php echo $rows['TypeNo']; ?>" class="btn btn-primary">Order Now</button>
                                                            
                                                            </form> 
                                                                    <?php
                                                                        $ty=$rows['TypeNo'];
                                                                       
                                                                    if(isset($_POST['Order'.$ty]))
                                                                    {
                                                                        include_once "../OrderCompany.php";
                                                                        $c=new OrderCompany();
                                                                        $c->setCompanyLicense($_SESSION['company']); 
                                                                        $date = new DateTime("now", new DateTimeZone('Africa/Cairo'));
                                                                        $cd=$date->format('Y-m-d H:i:s');
                                                                        $c->setOrderDate($cd); 
                                                                        $c->setOrderQuntity($_POST['Quntity']); 
                                                                        $c->setTypeNo($rows['TypeNo']);
                                                                        $total=$rows['Price']*$_POST['Quntity'];
                                                                        $c->setOrderTotal($total);
                                                                        $c->setOrderStatus('Pending');

                                                                        if($_POST['Quntity']<=$rows['Quntitiy']) 
                                                                            echo($c->Add());

                                                                        else echo "Quntity not valid";

                                                                            
                                                                    }
                                                                    ?>
                                                               
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
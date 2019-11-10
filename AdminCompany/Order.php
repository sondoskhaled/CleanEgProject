<?php include_once 'Header.php' ?>
<html>
<body>    
            <div class="mb-5 mt-5"></div>
            <div class="col-lg-12  ">
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">My Orders</div>
            
                                <div class="table-responsive m-b-40" >
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Order Number</th>
                                                <th>Order Date</th>
                                                <th>Order Type</th>
                                                <th>Quntity</th>
                                                <th>Total</th>
                                                <th>Order Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                            include_once "../OrderCompany.php";
                                            $order=new OrderCompany();
                                            $order->setCompanyLicense($_SESSION['company']);
                                            $o=$order->GetData();
                                            while($rows=mysqli_fetch_assoc($o)){
                                           ?>
                                            <tr>
                                                <td><?php echo $rows['OrderNo']; ?></td>
                                                <td><?php echo $rows['OrderDate']; ?></td> 
                                                <td><?php 
                                                        include_once "../Types.php";
                                                        $type=new Types();
                                                        $type->setTypeNo($rows['TypeNo']);
                                                        $t=$type->GetDataByNo();
                                                        if($row=mysqli_fetch_assoc($t)){
                                                        echo $row['TypeName'];} ?></td>
                                                <td><?php echo $rows['OrderQuntity']; ?></td> 
                                                <td><?php echo $rows['OrderTotal']; ?></td>
                                                <td><?php echo $rows['OrderStatus']; ?></td> 

                                                  
                                            
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
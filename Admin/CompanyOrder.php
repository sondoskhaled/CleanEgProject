<?php include_once 'Header.php' ?>
<html>

<body>
    <div class="mb-5 mt-5"></div>
    <div class="col-lg-12  ">
        <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">Company Order</div>

        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Company Name</th>
                        <th>Order Date</th>
                        <th>Order Type</th>
                        <th>Quntity</th>
                        <th>Total</th>
                        <th>Order Status</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once "../OrderCompany.php";
                    $order = new OrderCompany();
                    //$order->setCompanyLicense($_SESSION['company']);
                    $o = $order->GetAllData();
                    while ($rows = mysqli_fetch_assoc($o)) {
                        ?>
                        <tr>
                            <td><?php echo $rows['OrderNo']; ?></td>
                            <td><?php
                                    include_once "../Company.php";
                                    $comp = new Company();
                                    $comp->setCompanyLicense($rows['CompanyLicense']);
                                    $c = $comp->GetSpacificData();
                                    if ($rcom = mysqli_fetch_assoc($c)) {

                                        echo $rcom['CompanyName'];
                                    } ?></td>
                            <td><?php echo $rows['OrderDate']; ?></td>
                            <td><?php
                                    include_once "../Types.php";
                                    $type = new Types();
                                    $type->setTypeNo($rows['TypeNo']);
                                    $t = $type->GetDataByNo();
                                    if ($row = mysqli_fetch_assoc($t)) {
                                        echo $row['TypeName'];
                                    } ?></td>
                            <td><?php echo $rows['OrderQuntity']; ?></td>
                            <td><?php echo $rows['OrderTotal']; ?></td>
                            <td><?php echo $rows['OrderStatus']; ?></td>
                            <td><a href="ConfirmOrder.php?O=<?php echo $rows['OrderNo']; ?>&T=<?php echo $rows['TypeNo']; ?>&Q=<?php echo $rows['OrderQuntity']; ?>">Confirm</a></td>
                            <td><a href="DeleteOrder.php?O=<?php echo $rows['OrderNo']; ?>">Cancel</a>
                            </td>


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
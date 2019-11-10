<?php include_once 'Header.php' ?>
<html>
<body>    
            <div class="mb-5 mt-5"></div>

            <div class="col-lg-6 offset-3 ">
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">My Account</div>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30"  style="Padding-top:50px;">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                <?php 
                                                        include_once '../Company.php';
                                                        
                                                        $c=new Company();
                                                        $c->setCompanyLicense($_SESSION['company']);   
                                                        $r=$c->CheckCompany();
                                                        if($rows=mysqli_fetch_assoc($r))
                                                            {
                                                            
                                                        
                                                    ?>
        
                                                    <tr>
                                                        <td>Company Name</td>
                                                        <td class="text-right"><?php echo $rows['CompanyName'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Company License</td>
                                                        <td class="text-right"><?php echo $rows['CompanyLicense'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Company Email</td>
                                                        <td class="text-right"><?php echo $rows['CompanyEmail'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Company Phone</td>
                                                        <td class="text-right"><?php echo $rows['CompanyPhone'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Company City</td>
                                                        <td class="text-right"><?php echo $rows['CityName'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Company Government</td>
                                                        <td class="text-right"><?php echo $rows['GovernmentName'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Company Address</td>
                                                        <td class="text-right"><?php echo $rows['CompanyAddress'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Company Password</td>
                                                        <td class="text-right"><?php echo $rows['CompanyPassword'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>About Company</td>
                                                        <td class="text-right"><?php echo $rows['AboutCompany'];?></td>
                                                    </tr>
                                                    

                                                            <?php }?>
                                                </tbody>
                                            </table>

                                         </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col">
                            <a href="EditProfile.php" class="btn au-card au-card--bg-blue au-card-top-countries m-b-30">
                                <span class="au-card-inner text-white">Edit Your Account Information </span></a>
                                </div>
                            </div>
            

</body>
<html>
<?php include_once 'Footer.php' ?> 
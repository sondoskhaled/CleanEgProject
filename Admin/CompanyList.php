<?php include_once 'Header.php' ?>
<html>
<body>    
            <div class="mb-5 mt-5"></div>
            <div class="col-lg-12  ">
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">Company List</div>
            
                                <div class="table-responsive m-b-40" >
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Company License</th>
                                                <th>Company Name</th>
                                                <th>Company Email</th>
                                                <th>Company Phone</th>
                                                <th>Company Address</th>
                                                <th>About Company</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                            include_once "../Company.php";
                                            $Comp=new Company();
                                            //$order->setCompanyLicense($_SESSION['company']);
                                            $o=$Comp->GetData();
                                            while($rows=mysqli_fetch_assoc($o)){
                                                if(($rows['CompanyLicense']!='Admin')){
                                           ?>
                                            <tr>
                                                <td><?php echo $rows['CompanyLicense']; ?></td>
                                                
                                                <td><?php echo $rows['CompanyName']; ?></td> 
                                                
                                                <td><?php echo $rows['CompanyEmail']; ?></td> 
                                                <td><?php echo $rows['CompanyPhone']; ?></td>
                                                <td><?php echo $rows['CompanyAddress']; ?></td> 
                                                <td><?php echo $rows['AboutCompany']; ?></td> 
                               </td> 
                                                  
                                            
                                            </td>   
                                            </tr>
                                            <?php }} ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                    

</body>
<html>
<?php include_once 'Footer.php' ?> 
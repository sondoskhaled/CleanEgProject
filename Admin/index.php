<?php include_once 'Header.php' ?>
<html>
<body>    
            <div class="mb-5 mt-5"></div>
            <div class="col-lg-12 ">
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">Pending Company</div>
            
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Company Name</th>
                                                <th>Company License</th>
                                                <th>Company Email</th>
                                                <th>Company Phone</th>
                                                <th>About Company</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                            include_once "../Company.php";
                                            $com=new Company();
                                            $t=$com->GetPendingData();
                                            while($rows=mysqli_fetch_assoc($t)){
                                                if($rows['CompanyLicense']!="Admin"){
                                           ?>
                                            <tr>
                                                <td><?php echo $rows['CompanyName']; ?></td>
                                                <td><?php echo $rows['CompanyLicense']; ?></td> 
                                                <td><?php echo $rows['CompanyEmail']; ?></td> 
                                                <td><?php echo $rows['CompanyPhone']; ?></td> 
                                                <td><?php echo $rows['AboutCompany']; ?></td> 
                                                <td><a href="Confirm.php?L=<?php echo $rows['CompanyLicense']; ?>">Confirm</a>
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
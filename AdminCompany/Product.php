<?php session_start(); ?>
<?php include_once 'Header.php' ?>
<html>
<body>    
            <div class="mb-5 mt-5"></div>
            <div class="col-lg-12  ">
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;">My Products</div>

            <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <!-- <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="#exampleModal"  data-toggle="modal" data-target="#exampleModal" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add Product</a>
                                        
                                    </div>

                                    <!--Model-->
                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header  text-center">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                               
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="ProductName" class=" form-control-label">Product Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="ProductName" name="ProductName" placeholder="Product Name" class="form-control" required>
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="Price" class=" form-control-label">Price</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="number" id="Price" name="Price" placeholder="Price" class="form-control" min="0" required>
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="Details" class=" form-control-label">Details</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <textarea name="Details" id="Details" rows="3" placeholder="Details" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="Category" class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <select name="Category" id="Category" class="form-control" required>
                                                        <option value="">Select Category Name</option>
                                                        <?php 
                                                            include_once "../Category.php";
                                                            $cat=new Category();
                                                            $c=$cat->GetData();
                                                            while($rc=mysqli_fetch_assoc($c)){
                                                        ?>
                                                        <option value="<?php echo $rc['CategoryNo']; ?>"><?php echo $rc['CategoryName']; ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="Color" class=" form-control-label">Color</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <select name="Color" id="Color" class="form-control" required>
                                                        <option value="">Select Color</option>
                                                        <?php 
                                                            include_once "../Colors.php";
                                                            $co=new Colors();
                                                            $c=$co->GetData();
                                                            while($rc=mysqli_fetch_assoc($c)){
                                                        ?>
                                                        <option value="<?php echo $rc['ColorNo']; ?>"><?php echo $rc['ColorName']; ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Color</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                    <?php 
                                                            include_once "../Colors.php";
                                                            $co=new Colors();
                                                            $c=$co->GetData();
                                                            while($rc=mysqli_fetch_assoc($c)){
                                                        ?>
                                                        <div class="checkbox">
                                                            <label for="checkbox1" class="form-check-label ">
                                                                <input type="checkbox" onchange='handleChange(this);' id="<?php echo $rc['ColorNo']; ?>" name="check_list[]" value="<?php echo $rc['ColorNo']; ?>" class="form-check-input"><?php echo $rc['ColorName']; ?>
                                                               
                                                            </label>
                                                           
                                                        </div>
                                                        <input type="number"  name="Quntity<?php echo $rc['ColorNo']; ?>" placeholder="<?php echo $rc['ColorName']; ?> Quntity"
                                                             class="form-control" id="Q<?php echo $rc['ColorNo']; ?>" style="display: inline-block;width: 50%">
                                                             <input type="file" name="file<?php echo $rc['ColorNo']; ?>" class="form-control-file" id="F<?php echo $rc['ColorNo']; ?>" style="display: inline-block;width: 45%">
                                                            
                                                        
                                                        
                                                        <?php } ?>
                                                    </div>
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
                                                include_once "../Products.php";
                                                include_once "../Company.php";
                                                include_once "../ProductHasColor.php";
                                                $comm=new Company();
                                                $proo=new Products();
                                                $PHC=new ProductHasColor();
                                                $comm->setCompanyLicense($_SESSION['company']);
                                                $coo=$comm->GetID();
                                                if($row=mysqli_fetch_assoc($coo)){
                                                    $ID=$row['CompanyID'];
                                                    $proo->setCompanyID($ID);
                                                }
                                                
                                                $proo->setProductName($_POST['ProductName']);
                                                $proo->setProductPrice($_POST['Price']);
                                                $proo->setProductDetails($_POST['Details']);
                                                $proo->setCategoryNo($_POST['Category']);
                                                $totalQYT=0;
                                                if(!empty($_POST['check_list'])){
                                                    // Loop to store and display values of individual checked checkbox.
                                                    foreach($_POST['check_list'] as $selected){
                                                      $totalQYT+=$_POST['Quntity'.$selected];
                                                    }
                                                 }
                                                 $proo->setProductQuntity($totalQYT);
                                                 $proo->Add();
                                                 $max=$proo->GetMaxNo();
                                                 if($m=mysqli_fetch_assoc($max)){
                                                    
                                                    $PHC->setProductNo($m['max(productNo)']);
                                                }
                                                $dir="../assets/custom/images/Products/";
                                                if(!empty($_POST['check_list'])){
                                                    // Loop to store and display values of individual checked checkbox.
                                                    foreach($_POST['check_list'] as $selected){
                                                        $PHC->setColorNo($selected);
                                                      $PHC->setProductQuntity($_POST['Quntity'.$selected]);

                                                      $image=$_FILES['file'.$selected]['name'];
                                                      $temp_name=$_FILES['file'.$selected]['tmp_name'];
                                                      $img=$PHC->getProductNo().$selected;
                                                      if($image!="")
                                                      {
                                                          $fdir= $dir.$img.".jpg";
                                                          move_uploaded_file($temp_name, $fdir);
                                                      }
                                                      echo $PHC->Add();
                                                    }
                                                 }

                                                 

                                               


                                            }
                                            ?>
                                </div>
                                </div>
                            </div>
                            </div>



                                </div>



                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Photo</th>
                                                <th>name</th>
                                                <th>Color</th>
                                                <th>Quntity</th>
                                                <th>Details</th>
                                                <th>Category</th> 
                                                <th>price</th>
                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                include_once "../Products.php";
                                                 include_once "../Company.php";
                                                $com=new Company();
                                                $pro=new Products();
                                                $com->setCompanyLicense($_SESSION['company']);
                                                $co=$com->GetID();
                                                if($row=mysqli_fetch_assoc($co)){
                                                    $ID=$row['CompanyID'];
                                                    $pro->setCompanyID($ID);
                                                }
                                                
                                                
                                                $p=$pro->GetViewDataByCompanyID();
                                                while($rows=mysqli_fetch_assoc($p)){ 
                                                   
                                               
                                            ?>
                                            <tr class="tr-shadow">
                                                
                                                <td><div class="image img-fluid img-120">
                                    <img src="../assets/custom/images/Products/<?php echo $rows['ProductNo'] ; ?><?php echo $rows['ColorNo'] ; ?>.jpg" alt="Pic" />
                                    </div></td>
                                                <td> <?php echo $rows['ProductName'] ; ?></td>
                                                <td><?php include_once "../Colors.php";
                                                            $co=new Colors();
                                                            $c=$co->SearchByID($rows["ColorNo"]);
                                                            if($rc=mysqli_fetch_assoc($c)){ echo $rc['ColorName'] ; }?></td>
                                                <td><?php echo $rows['Quntity'] ; ?></td>
                                                <td><?php echo $rows['ProductDetails'] ; ?></td>
                                                <td><?php echo $rows['CategoryName'] ; ?></td>
                                                <td>$<?php echo $rows['ProductPrice'] ; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                       
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" >
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button> -->
                                                        <a href="DeleteProduct.php?ProNo=<?php echo $rows['ProductNo'] ; ?>&CNo=<?php echo $rows['ColorNo'] ; ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                         </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                           <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

            </div>

                    <script>
                    function handleChange(checkbox) {
                        var d=checkbox.id;
                    if(checkbox.checked == true){
                        
                        document.getElementById("Q"+d).setAttribute("required", "required");
                        document.getElementById("F"+d).setAttribute("required", "required");
                    }else{
                        document.getElementById("Q"+d).setAttribute("required", "false");
                        document.getElementById("F"+d).setAttribute("required", "false");
                }
                }
                    
                    </script>

</body>
<html>
<?php include_once 'Footer.php' ?> 
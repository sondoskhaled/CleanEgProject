<!-- <form action="#" method="post">
<input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
<input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
<input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
<input type="submit" name="submit" value="Submit"/>
</form>-->
<?php
// if(isset($_POST['submit'])){//to run PHP script on submit
// if(!empty($_POST['check_list'])){
// // Loop to store and display values of individual checked checkbox.
// foreach($_POST['check_list'] as $selected){
// echo $selected."</br>";
// }
// }
// } 
session_start();
?>


<html>
<body>    
            <div class="mb-5 mt-5"></div>
            <div class="col-lg-12  ">
            <form method="post" enctype="multipart/form-data">
                             
                               
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
                                                    <input type="number" id="Price" name="Price" placeholder="Price" class="form-control" required>
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
                                                            include_once "Category.php";
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
                                                            include_once "Colors.php";
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
                                                            include_once "Colors.php";
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
                                           
                                            
                                           
                            
                              
                                
                                    <button class="au-btn au-btn-icon au-btn--blue au-btn--small" data-dismiss="modal">Close</button>
                                    <input value="Add" type="submit" name="Add" class="au-btn au-btn-icon au-btn--blue au-btn--small" >
                                  
                                    </form>
                                            <?php
                                            
                                            if(isset($_POST['Add']))
                                            {
                                                include_once "Products.php";
                                                include_once "Company.php";
                                                include_once "ProductHasColor.php";
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
                                                echo $proo->Add();
                                                 $max=$proo->GetMaxNo();
                                                 if($m=mysqli_fetch_assoc($max)){
                                                    
                                                    $PHC->setProductNo($m['max(productNo)']);
                                                }
                                                $dir="assets/custom/images/Products/";
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

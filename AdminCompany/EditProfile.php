<?php include_once 'Header.php' ?>
<html>
<body>    
            <div class="mb-5 mt-5"></div>

            <div class="col-lg-6 offset-3 ">
            <div class="mb-5 mt-5 font-40 font-weight-bold text-center" style="height:50px;Padding-top:50px;"></div>
            
                                <div class="card">
                                    <div class="card-header text-center">Edit Your Information</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                        <?php 
                                                        include_once '../Company.php';
                                                        
                                                        $c=new Company();
                                                        $c->setCompanyLicense($_SESSION['company']);   
                                                        $r=$c->CheckCompany();
                                                        if($rows=mysqli_fetch_assoc($r))
                                                            {
                                                            
                                                        
                                                    ?>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" value="<?php echo $rows['CompanyName']; ?>" id="Name" name="Name" placeholder="Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-credit-card"></i>
                                                    </div>
                                                    <input type="text" value="<?php echo $rows['CompanyLicense']; ?>" id="License" name="License" placeholder="License" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" value="<?php echo $rows['CompanyEmail']; ?>" id="Email" name="Email" placeholder="Email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <input type="phone" value="<?php echo $rows['CompanyPhone']; ?>" maxlength='11' id="Phone" name="Phone" placeholder="Phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="text" value="<?php echo $rows['CompanyPassword']; ?>" id="password" name="Password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa  fa-location-arrow"></i>
                                                    </div>
                                                    <input type="text" value="<?php echo $rows['CompanyAddress']; ?>" id="Address" name="Address" placeholder="Address" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa  fa-globe"></i>
                                                    </div>
                                                    <select name="CompanyGovernment"  class="form-control gov">
                                                        <option value="">Select your Government</option>
                                                        <?php
                                                                include_once "../Governments.php";
                                                                $gov=new Governments();
                                                                $g= $gov->GetData();
                                                            
                                                                while($row=mysqli_fetch_assoc($g))
                                                                {
                                                                    $gName=$row['GovernmentName'];
                                                                    ?>
                                                                <option  value="<?php echo $row['GovernmentNo']?>" <?php if ($rows['GovernmentName']==$gName) echo 'selected'?>>
                                                                    <?php echo $row['GovernmentName']?>
                                                                </option>
                                                            <?php
                                                                }
                                                                
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa  fa-globe"></i>
                                                    </div>
                                                    <select name="CompanyCity"  class="form-control city">
                                                    <?php
                                                            include_once "../Cities.php";
                                                            include_once "../Governments.php";
                                                            $gov=new Governments();
                                                            $City=new Cities();
                                                            $gov->setGovernmentName($rows['GovernmentName']);
                                                            $g=$gov->GetNo();
                                                            if($r=mysqli_fetch_assoc($g)){
                                                            
                                                            $City->setGovernmentNo($r['GovernmentNo']);
                                                            $C= $City->GetSpecificData();
                                                        
                                                            while($row=mysqli_fetch_assoc($C))
                                                            {
                                                                $CName=$row['CityName'];
                                                                ?>
                                                            <option  value="<?php echo $row['CityNo']?>" <?php if ($rows['CityName']==$CName) echo 'selected'?>>
                                                                <?php echo $row['CityName']?>
                                                            </option>
                                                        <?php
                                                            }}
                                                            
                                                        ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa  fa-info-circle"></i>
                                                    </div>
                                                    <input type="text" value="<?php echo $rows['AboutCompany']; ?>" id="About" name="About" placeholder="About" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group text-center">
                                                <button type="submit" name="submit" class="btn au-card--bg-blue text-white btn-sm">Submit</button>
                                            </div>
                                                            <?php }?>
                                        </form>
                                    </div>
                                </div>
                            </div>   
                            

                            <div class="row text-center">
                                <div class="col">
                                <p class="mt-3">Do you want to delete your account?
                      <a href="#exampleModal"  data-toggle="modal" data-target="#exampleModal">  Click Here</a></p> 
                   <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Delete Account</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   Are you Sure ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form method="post">
                                    <button type="submit" name="DeleteAccount" class="btn btn-primary">Yes I'm Sure</button>
                                    </form>
                                    
                                            <?php

                                            if(isset($_POST['DeleteAccount']))
                                            {
                                                $c=new Company();
                                                $c->setCompanyLicense($_SESSION['company']);   
                                                    
                                                    echo($c->Delete());

                                                    echo("<script> window.open('../index.php','_parent'); </script>");
                                            }
                                            ?>
                                </div>
                                </div>
                            </div>
                            </div>
                                </div>
                            </div>

        <?php
           
            include_once "../Errors.php";
            $message='';
            $c->setCompanyLicense($_SESSION['company']); 
            $ID=$c->GetID();

            if($rID=mysqli_fetch_assoc($ID)){

            
            if(isset($_POST['submit']))
            {
                $c=new Company();
                $c->setCompanyName($_POST['Name']);
                $c->setCompanyEmail($_POST['Email']);
                $c->setCompanyLicense($_POST['License']);
                $_SESSION['company']=$_POST['License'];
                $c->setCompanyPhone($_POST['Phone']);
                $c->setCompanyGovernment($_POST['CompanyGovernment']);
                $c->setCompanyCity($_POST['CompanyCity']);
                $c->setCompanyAddress($_POST['Address']);
                $c->setCompanyPassword($_POST['Password']);
                
                $msg=$c->UpdateID($rID['CompanyID']);

                $err=new Errors();
                
                echo $msg;
               // header('location:CitizenProfile.php');
               echo("<script> window.open('Account.php','_parent'); </script>");
               

            }
        }

                
?>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <script>
  
  $(document).ready(function(){

$(".gov").change(function() {
  var gov = $(".gov").val();
  $.ajax({
    url: "../ajexconnection.php",
    method: "POST",
    data: 'GovNo=' + gov
  }).done(function(city) {
    //console.log(city);
    if(city.length < 3){
      $('.city').html('');
      $('.city').append('<option disabled selected value="">there is no cities in this government</option>');
    }
    else{
      gov = JSON.parse(city);
     // console.log(gov);
      $('.city').html('');
      gov.forEach(function(city) {
          
          $('.city').append(`<option value='${city.CityNo}' >${city.CityName}</option>`);
        })
    }

    })

});
});
  </script>          

</body>
<html>
<?php include_once 'Footer.php' ?> 


<?php
include 'headerAfterCompany.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Edit Profile </title>
    
    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- Timeline -->
    <link rel="stylesheet" href="assets/vendor/timeline/timeline.css"> 
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet"> 
     
    <style>
    .card {
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    border: 0;
    font-weight: 400;
}
.md-tabs-r {
    box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
    border: 0;
    padding: .7rem;
    margin-left: 1rem;
    margin-right: 1rem;
    z-index: 1;
    position: relative;
    border-radius: .25rem;
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.tab-content {
    padding: 1rem;
    padding-top: 2rem;
}
#nav-item-citizen{
    padding-left: 9px;
}

.fables-iconpen:before{
  content: "\270E";


 }

 .fables-iconloc:before{
    content: "\27A3";}


</style>
</head>

<body>


<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." /> 
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
         
</div>
    
<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>

     
<!-- Start Header -->
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Edit Profile</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->   
<div class="container">
     <div class="row my-4 my-lg-5">
          <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3 text-center">
               <img src="assets/custom/images/signin-logo.png" alt="signin" class="img-fluid">
               <p class="font-20 semi-font fables-main-text-color mt-4 mb-5">Edit your Profile Information</p>


          
           
    

         <!-- company register -->
        <form method="post" id="CompanyForm" >
                   
                   <!-- Name -->
                   <div class="form-group"> 
                       <div class="input-icon">
                           <span class="fables-iconuser-register fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                           <input type="text" name="companyName" 
                           value="<?php echo isset($_POST['companyName'])?$_POST['companyName']:'' ?>"
                           class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Company Name" required> 
                       </div>
                     
                   </div>

                   <!-- License -->
                   <div class="form-group"> 
                       <div class="input-icon">
                           <span class="fables-iconpen fables-input-icon mt-1 font-15" style="color:#E54D42;"></span>
                           <input type="text" name="companyLicense"  
                           value="<?php echo isset($_POST['companyLicense'])?$_POST['companyLicense']:'' ?>"
                           class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Company License" required> 
                       </div>
                        
                   </div>

                   <!-- Email -->
                   <div class="form-group"> 
                       <div class="input-icon">
                           <span class="fables-iconemail fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                           <input type="email" name="companyEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
                           value="<?php echo isset($_POST['companyEmail'])?$_POST['companyEmail']:'' ?>"
                           class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Email" required> 
                       </div>
                        
                   </div>

                   <!-- password -->
                   <div class="form-group"> 
                       <div class="input-icon">
                          <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                          <input type="password" name="companyPassword" minlength="5"  id='passcompany'
                          value="<?php echo isset($_POST['companyPassword'])?$_POST['companyPassword']:'' ?>"
                          class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Password" required>
                       </div>
                     
                   </div> 

                    <!-- repeate password -->
                   <div class="form-group"> 
                       <div class="input-icon">
                          <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                          <input type="password" name="companyRepeatPassword" id="rpasscompany"
                          value="<?php echo isset($_POST['companyRepeatPassword'])?$_POST['companyRepeatPassword']:'' ?>"
                          class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Repeat Password" required>
                       </div>
                     
                   </div> 

                     <!--phone-->
                   <div class="form-group"> 
                       <div class="input-icon">
                          <span class="fables-iconphone fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                          <input type="text" name="companyPhone" pattern="^[0][1][0125][0-9]*?$" maxlength="11" 
                          value="<?php echo isset($_POST['companyPhone'])?$_POST['companyPhone']:'' ?>"
                          class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Phone">
                    </div>
                     
                   </div> 
                   
                   
                   <!--Total Address-->
                    <div class="form-row form-group">
                     <div class="col-12 col-md-6 mb-4 mb-md-0">

                     <!-- government -->
                     <div class="form-group"> 
                       <div class="input-icon">
                       <span class="fables-iconloc fables-input-icon font-19 " style="color:#E54D42;margin-top:-3px; "></span>
                          <select name="companyGovernment"  class="form-control rounded-0 pl-5 font-13 sign-register-input gov" >
                                   <option value="0" hidden>Select your government</option>
                                   <?php
                                        include_once "Governments.php";
                                        $gov=new Governments();
                                        $g= $gov->GetData();
                                    
                                        while($row=mysqli_fetch_assoc($g))
                                        {
                                        echo("<option value='".$row['GovernmentNo']."'>".$row['GovernmentName']."</option>");
                                        }
                                        
                                    ?>
                                   
                            </select>
  
                       </div>
                     
                     </div>
                     
                     </div>

                     
                     <div class="col-12 col-md-6">
                         <!-- city -->
                     <div class="form-group"> 
                       <div class="input-icon">
                       <span class="fables-iconloc fables-input-icon font-19 " style="color:#E54D42;margin-top:-3px; "></span>
                       <select name="companyCity"  class="form-control rounded-0 pl-5 font-13 sign-register-input city" >
                                   
                       </select>
  
                       </div>
                     
                     </div>
                     </div>
                   </div>

                   <!--Spacific Address-->
                   <div class="form-group"> 
                       <div class="input-icon">
                          <span class="fables-iconloc fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                          <input type="text" name="companyAddress" 
                          value="<?php echo isset($_POST['companyAddress'])?$_POST['companyAddress']:'' ?>"
                          class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="complate Address">
                       </div>
                     
                   </div> 
                    <!--About Compay-->
                   <div class="form-group"> 
                       <div class="input-icon">
                          <span class="fables-iconpen fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                          <textarea  name="AboutCompany" 
                          value="<?php echo isset($_POST['AboutCompany'])?$_POST['AboutCompany']:'' ?>"
                          class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="About Company"></textarea>
                       </div>
                     
                   </div>

                
                   <input type="submit" name="btnCompany" value="Save Edit"   id="btnCompany" 
                   class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color 
                   font-16 semi-font py-3" >

                   <p class="fables-forth-text-color mt-3">Do you want to delete your account?
                      <a href="CompanyDeleteAccount.php?company=<?php echo $_SESSION['company']; ?>" class="font-16 semi-font fables-second-text-color underline fables-main-hover-color ml-2">  Click Here</a></p> 
                  
                                      
                </form>
         

    </div>
              
    </div>
    </div>


      
<!-- /End page content -->
  


 
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/custom/js/custom.js"></script>  

<!--company-->



<script>

var passwordc = document.getElementById("passcompany")
  , confirm_passwordc = document.getElementById("rpasscompany");

function validatePassword(){
  if(passwordc.value != confirm_passwordc.value) {
    confirm_passwordc.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_passwordc.setCustomValidity('');
  }
}

passwordc.onchange = validatePassword;
confirm_passwordc.onkeyup = validatePassword;
</script>

<?php
            // include_once "Company.php";
            // include_once "Errors.php";
            // $message='';
            // if(isset($_POST['btnCompany']))
            // {
            //     $c=new Company();
            //     $c->setCompanyName($_POST['companyName']);
            //     $c->setCompanyLicense($_POST['companyLicense']);
            //     $c->setCompanyEmail($_POST['companyEmail']);
            //     $c->setCompanyPhone($_POST['companyPhone']);
            //     $c->setCompanyAbout($_POST['AboutCompany']);
            //     $c->setCompanyGovernment($_POST['companyGovernment']);
            //     $c->setCompanyCity($_POST['companyCity']);
            //     $c->setCompanyAddress($_POST['companyAddress']);
            //     $c->setCompanyPassword($_POST['companyPassword']);
                
            //     $msg=$c->Add();

            //     $err=new Errors();
                
            //     $message=$err->getErrorType($msg);
            //     if($message=='') echo '';
            //     else echo "<script>
            //     alert('$message');</script>";

               

            // }

                

    ?>





<!--General-->

<script>
     
$(document).ready(function(){


   finalres='<option value="0" hidden>Select your city</option>';
                    $('.city').html(finalres);
        $('.gov').on('change',function(){
            f=this.value;
          
          var xhttp =new XMLHttpRequest();
          xhttp.onreadystatechange=function(){
              if (this.readyState==4 && this.status==200){
                    result=this.responseText;
                    
                    
                    $('.city').html(finalres+result);
              }
          }
          
          xhttp.open("GET", "ajexconnection.php?q="+f, true);
          xhttp.send();
          
        
        
        });
        
   
});
</script> 

</body>
</html>

<?php
include 'footerBefore.php';

?>
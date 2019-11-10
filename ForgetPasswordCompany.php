
<?php
    include_once "Company.php";

    require_once "src/PHPMailer.php";
    require_once "src/Exception.php";
    require_once "src/SMTP.php";
    require_once "vendor/autoload.php";
    //session_start();
  if(isset($_POST['btnForgetPassCompany']))
  {
     $c=new Company();
      
     $c->setCompanyEmail($_POST['ForgetPassCompanyEmail']);   
     
      $us=$_POST['ForgetPassCompanyEmail'];
     
        $r= $c->SearchEmail();
      
        if($rows=mysqli_fetch_assoc($r))
           {
           // $phone=$rows['Phone']  ;
            $email=$rows['CompanyEmail']  ;
            $name=$rows['CompanyName']  ;
          //  $type= $_POST['forget'];
         
           
                $mail = new  PHPMailer\PHPMailer\PHPMailer();
	
                $mail->IsSMTP();
                //$mail->SMTPDebug = 1;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; // or 587
                $mail->IsHTML(true);

                $mail->Username = "cleanegnti@gmail.com";
                $mail->Password = "cleaneg12345";

                $mail->setFrom('cleanegnti@gmail.com', 'NTI');
                $mail->addAddress($email, $name);
            
                
                $mail->Subject = 'Forget Password Company';
                $mail->Body = 'visit this link http://localhost/CleanEgProjectn/updatePassCompany.php?Company='.$us;
                
                if(!$mail->send()) {
                    echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    
                    echo "Message has been sent";
                }
           

             
           }
        else
            echo("<h4 style='text-align:center'>Invalid Email / Phone</h4>");
 

  }
        

?>

<?php
include 'headerBefore.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Forget Password </title>
    
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
         <h2 class="fables-page-title fables-second-border-color">Forget Password</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Forget Password</li>
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
               <p class="font-20 semi-font fables-main-text-color mt-4 mb-5">Forget Password</p>


           
               <form method="post"  >
                  
                <!-- Email -->
                <div class="form-group"> 
                       <div class="input-icon">
                           <span class="fables-iconemail fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                           <input type="email" name="ForgetPassCompanyEmail" 
                           value="<?php echo isset($_POST['ForgetPassCompanyEmail'])?$_POST['ForgetPassCompanyEmail']:'' ?>"
                           class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Email" required> 
                       </div>
                        
                   </div>

                  
                  <input type="submit" name="btnForgetPassCompany" value="Send"  
                  class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color 
                  font-16 semi-font py-3" >
                                       
               </form>
    

             
                   
  

    </div>
              
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



</body>
</html>

<?php
include 'footerBefore.php';

?>
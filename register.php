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

  <title> Register </title>

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
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
      border: 0;
      font-weight: 400;
    }

    .md-tabs-r {
      box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
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
      border: 1px solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
    }

    .tab-content {
      padding: 1rem;
      padding-top: 2rem;
    }

    #nav-item-citizen {
      padding-left: 9px;
    }

    .fables-iconpen:before {
      content: "\270E";


    }

    .fables-iconloc:before {
      content: "\27A3";
    }
  </style>
</head>

<body>


  <!-- <div class="search-section">
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

  </div> -->

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
      <h2 class="fables-page-title fables-second-border-color">Register</h2>
    </div>
  </div>
  <!-- /End Header -->

  <!-- Start Breadcrumbs -->
  <div class="fables-light-background-color">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="fables-breadcrumb breadcrumb px-0 py-3">
          <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Register</li>
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
        <p class="font-20 semi-font fables-main-text-color mt-4 mb-5">Create a new account</p>


        <ul class="nav  nav-justified md-tabs-r indigo fables-fifth-background-color" id="myTabJust" style=" margin-bottom: -8px;" role="tablist">
          <li class="nav-item" id="nav-item-citizen">
            <a class="nav-link active white-color white-color-hover " id="citizen-tab-just" data-toggle="tab" href="#citizen-just" role="tab" aria-controls="citizen-just" aria-selected="true">Citizen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link white-color white-color-hover  " id="company-tab-just" data-toggle="tab" href="#company-just" role="tab" aria-controls="company-just" aria-selected="false">Company</a>
          </li>

        </ul>

        <div class="tab-content card pt-4 mt-0" id="myTabContentJust">
          <!-- Citizen register -->
          <div class="tab-pane fade show active" id="citizen-just" role="tabpanel" aria-labelledby="citizen-tab-just">


            <form method="post" id="CitizenForm">

              <!-- Name -->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconuser-register fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                  <input type="text" name="citizenName" value="<?php echo isset($_POST['citizenName']) ? $_POST['citizenName'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Name" required>
                </div>

              </div>

              <!-- Email -->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconemail fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                  <input type="email" name="citizenEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo isset($_POST['citizenEmail']) ? $_POST['citizenEmail'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Email" required>
                </div>

              </div>

              <!-- password -->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <input type="password" name="citizenPassword" minlength="5" id='pass' value="<?php echo isset($_POST['citizenPassword']) ? $_POST['citizenPassword'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Password" required>
                </div>

              </div>
              <!-- repeate password -->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <input type="password" name="citizenRepeatPassword" id="rpass" value="<?php echo isset($_POST['citizenRepeatPassword']) ? $_POST['citizenRepeatPassword'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Repeat Password" required>
                </div>

              </div>
              <!--phone-->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconphone fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <input type="text" name="citizenPhone" pattern="^[0][1][0125][0-9]*?$" maxlength="11" minlength="11" value="<?php echo isset($_POST['citizenPhone']) ? $_POST['citizenPhone'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Phone">
                </div>

              </div>
              <!--security questions-->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconpassword fables-input-icon font-19 " style="color:#E54D42;margin-top:-3px; "></span>

                  <select name="citizenQuestion" id='ques' class="form-control rounded-0 pl-5 font-13 sign-register-input" required>
                    <option value="" hidden>Select your security question</option>

                    <option <?php if (isset($_POST['citizenQuestion']) && $_POST['citizenQuestion'] == "first security question") echo 'selected="selected"'; ?> value="first security question">first security question</option>
                    <option <?php if (isset($_POST['citizenQuestion']) && $_POST['citizenQuestion'] == "Second your security question") echo 'selected="selected"'; ?> value="Second your security question">Second your security question</option>
                    <option <?php if (isset($_POST['citizenQuestion']) && $_POST['citizenQuestion'] == "third your security question") echo 'selected="selected"'; ?> value="third your security question">third your security question</option>
                  </select>

                </div>

              </div>
              <!--security Answer-->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconpen fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <input type="text" name="citizenAnswer" id='ans' value="<?php echo isset($_POST['citizenAnswer']) ? $_POST['citizenAnswer'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Security Answer" required>
                </div>

              </div>
              <!--Total Address-->
              <div class="form-row form-group">
                <div class="col-12 col-md-6 mb-4 mb-md-0">

                  <!-- government -->
                  <div class="form-group">
                    <div class="input-icon">
                      <span class="fables-iconloc fables-input-icon font-19 " style="color:#E54D42;margin-top:-3px; "></span>
                      <select name="citizenGovernment" class="form-control rounded-0 pl-5 font-13 sign-register-input gov" required>
                        <option value="" hidden>Select your government</option>
                        <?php
                        include_once "Governments.php";
                        $gov = new Governments();
                        $g = $gov->GetData();

                        while ($row = mysqli_fetch_assoc($g)) {
                          ?>
                          <option value="<?php echo $row['GovernmentNo']; ?>" <?php if (isset($_POST['citizenGovernment']) && $_POST['citizenGovernment'] == $row['GovernmentNo']) echo 'selected="selected"'; ?>>
                            <?php echo $row['GovernmentName']; ?></option>
                        <?php
                        }

                        ?>

                      </select>

                    </div>

                  </div>
                </div>

                <!-- city -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <div class="input-icon">
                      <span class="fables-iconloc fables-input-icon font-19 " style="color:#E54D42;margin-top:-3px; "></span>
                      <select name="citizenCity" class="form-control rounded-0 pl-5 font-13 sign-register-input city" required>

                        <option value="" hidden>Select your city</option>

                      </select>

                    </div>

                  </div>
                </div>
              </div>

              <!--Spacific Address-->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconloc fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <input type="text" name="citizenAddress" value="<?php echo isset($_POST['citizenAddress']) ? $_POST['citizenAddress'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="complate Address">
                </div>

              </div>

              <!--send verfication mail-->

              <!-- <div class="form-row form-group">
                     <div class="col-12 col-md-3 mb-4 mb-md-0">

                     
                     <div class="form-group"> 
                     <div class="input-icon">
                          <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                          <input type="text" id='tex' class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="code">
                       </div>
                     
                     </div>
                     </div>

                     
                     <div class="col-12 col-md-9">
                     <div class="form-group"> 
                       <div class="input-icon">
                       
                                <input type="button"  value="Send vrefication code to mail"   id="btn" 
                            class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color 
                            font-16 semi-font py-3" >
  
                       </div>
                     
                   </div>
                     </div>
                   </div> -->

              <input type="submit" name="btnCitizen" value="Register Now" id="btnCitizen" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color 
                   font-16 semi-font py-3">
              <!-- <a href="#" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3 mb-4 mb-lg-5 d-block">Forgot Password ?</a>
                   <p class="fables-forth-text-color">Already have an account ? 
                      <a href="signin.php" class="font-16 semi-font fables-second-text-color underline fables-main-hover-color ml-2">Login</a></p> -->

            </form>


          </div>


          <!-- company register -->
          <div class="tab-pane fade" id="company-just" role="tabpanel" aria-labelledby="company-tab-just">
            <form method="post" id="CompanyForm">

              <!-- Name -->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconuser-register fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                  <input type="text" name="companyName" value="<?php echo isset($_POST['companyName']) ? $_POST['companyName'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Company Name" required>
                </div>

              </div>

              <!-- License -->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconpen fables-input-icon mt-1 font-15" style="color:#E54D42;"></span>
                  <input type="text" name="companyLicense" value="<?php echo isset($_POST['companyLicense']) ? $_POST['companyLicense'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Company License" required>
                </div>

              </div>

              <!-- Email -->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconemail fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                  <input type="email" name="companyEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo isset($_POST['companyEmail']) ? $_POST['companyEmail'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Email" required>
                </div>

              </div>

              <!-- password -->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <input type="password" name="companyPassword" minlength="5" id='passcompany' value="<?php echo isset($_POST['companyPassword']) ? $_POST['companyPassword'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Password" required>
                </div>

              </div>

              <!-- repeate password -->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <input type="password" name="companyRepeatPassword" id="rpasscompany" value="<?php echo isset($_POST['companyRepeatPassword']) ? $_POST['companyRepeatPassword'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Repeat Password" required>
                </div>

              </div>

              <!--phone-->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconphone fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <input type="text" name="companyPhone" pattern="^[0][1][0125][0-9]*?$" maxlength="11" minlength="11" value="<?php echo isset($_POST['companyPhone']) ? $_POST['companyPhone'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Phone">
                </div>

              </div>


              <!--Total Address-->
              <div class="form-row form-group">
                <div class="col-12 col-md-6 mb-4 mb-md-0">

                  <!-- government -->
                  <div class="form-group">
                    <div class="input-icon">
                      <span class="fables-iconloc fables-input-icon font-19 " style="color:#E54D42;margin-top:-3px; "></span>
                      <select name="companyGovernment" class="form-control rounded-0 pl-5 font-13 sign-register-input govCompany" required>
                        <option value="" hidden>Select your government</option>
                        <?php
                        include_once "Governments.php";
                        $gov = new Governments();
                        $g = $gov->GetData();

                        while ($row = mysqli_fetch_assoc($g)) {
                          ?>
                          <option value="<?php echo $row['GovernmentNo']; ?>" <?php if (isset($_POST['companyGovernment']) && $_POST['companyGovernment'] == $row['GovernmentNo']) echo 'selected="selected"'; ?>>
                            <?php echo $row['GovernmentName']; ?></option>
                        <?php
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
                      <select name="companyCity" class="form-control rounded-0 pl-5 font-13 sign-register-input cityCompany" required>
                        <option value="" hidden>Select your city</option>
                      </select>

                    </div>

                  </div>
                </div>
              </div>

              <!--Spacific Address-->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconloc fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <input type="text" name="companyAddress" value="<?php echo isset($_POST['companyAddress']) ? $_POST['companyAddress'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="complate Address">
                </div>

              </div>
              <!--About Compay-->
              <div class="form-group">
                <div class="input-icon">
                  <span class="fables-iconpen fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                  <textarea name="AboutCompany" value="<?php echo isset($_POST['AboutCompany']) ? $_POST['AboutCompany'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="About Company"></textarea>
                </div>

              </div>


              <input type="submit" name="btnCompany" value="Register Now" id="btnCompany" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color 
                   font-16 semi-font py-3">
              <!-- <a href="#" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3 mb-4 mb-lg-5 d-block">Forgot Password ?</a>
                   <p class="fables-forth-text-color">Already have an account ?  
                     <a href="#myModal" class="font-16 semi-font fables-second-text-color underline fables-main-hover-color ml-2">Login</a></p> -->

            </form>
          </div>

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

  <!--company-->



  <script>
    var passwordc = document.getElementById("passcompany"),
      confirm_passwordc = document.getElementById("rpasscompany");

    function validatePassword() {
      if (passwordc.value != confirm_passwordc.value) {
        confirm_passwordc.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_passwordc.setCustomValidity('');
      }
    }

    passwordc.onchange = validatePassword;
    confirm_passwordc.onkeyup = validatePassword;
  </script>

  <?php
  include_once "Company.php";
  include_once "Errors.php";
  $message = '';
  if (isset($_POST['btnCompany'])) {
    $c = new Company();
    $c->setCompanyName($_POST['companyName']);
    $c->setCompanyLicense($_POST['companyLicense']);
    $c->setCompanyEmail($_POST['companyEmail']);
    $c->setCompanyPhone($_POST['companyPhone']);
    $c->setCompanyAbout($_POST['AboutCompany']);
    $c->setCompanyGovernment($_POST['companyGovernment']);
    $c->setCompanyCity($_POST['companyCity']);
    $c->setCompanyAddress($_POST['companyAddress']);
    $c->setCompanyPassword($_POST['companyPassword']);

    $msg = $c->Add();

    $err = new Errors();

    $message = $err->getErrorType($msg);
    if ($message == '') echo '';
    else echo "<script>
                alert('$message');</script>";
  }



  ?>


  <!--Citizen-->

  <script>
    var password = document.getElementById("pass"),
      confirm_password = document.getElementById("rpass");

    function validatePassword() {
      if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>

  <?php
  include_once "Citizens.php";
  include_once "Errors.php";
  $message = '';
  if (isset($_POST['btnCitizen'])) {
    $c = new Citizens();
    $c->setCitizenName($_POST['citizenName']);
    $c->setCitizenEmail($_POST['citizenEmail']);
    $c->setCitizenPhone($_POST['citizenPhone']);
    $c->setCitizenSecurityQuestion($_POST['citizenQuestion']);
    $c->setCitizenSecurityAnswer($_POST['citizenAnswer']);
    $c->setCitizenGovernment($_POST['citizenGovernment']);
    $c->setCitizenCity($_POST['citizenCity']);
    $c->setCitizenAddress($_POST['citizenAddress']);
    $c->setCitizenPassword($_POST['citizenPassword']);

    $msg = $c->Add();

    $err = new Errors();

    $message = $err->getErrorType($msg);
    if ($message == '') echo '';
    else echo "<script>
                alert('$message');</script>";
  }



  ?>

  <!--General-->

  <script>
    $(document).ready(function() {


      $('#myTabJust a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
      });

      // store the currently selected tab in the hash value
      $("ul > li > a").on("show.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
      });

      // on load of the page: switch to the currently selected tab
      var hash = window.location.hash;
      $('#myTabJust a[href="' + hash + '"]').tab('show');
      $('#myTabJust a[href="' + hash + '"]').addClass('active')
    });
  </script>
  <script>
    $(document).ready(function() {



      $('#citizen-tab-just').addClass('fables-second-background-color');
      $('#company-tab-just').addClass('fables-main-hover-background-color ');
      $('#citizen-tab-just').on('click', function() {
        $('#citizen-tab-just').addClass('fables-second-background-color');
        $('#company-tab-just').removeClass('fables-second-background-color');
        $('#citizen-tab-just').removeClass('fables-main-hover-background-color ');
        $('#company-tab-just').addClass('fables-main-hover-background-color ');
        $('#citizen-tab-just').css('color', 'white');
      });

      if ($('#citizen-tab-just').hasClass('active')) {
        $('#citizen-tab-just').addClass('fables-second-background-color');
        $('#company-tab-just').removeClass('fables-second-background-color');
        $('#citizen-tab-just').removeClass('fables-main-hover-background-color ');
        $('#company-tab-just').addClass('fables-main-hover-background-color ');
        $('#citizen-tab-just').css('color', 'white');
      }

      $('#company-tab-just').on('click', function() {
        $('#citizen-tab-just').removeClass('fables-second-background-color');
        $('#company-tab-just').addClass('fables-second-background-color');
        $('#citizen-tab-just').addClass('fables-main-hover-background-color ');
        $('#company-tab-just').removeClass('fables-main-hover-background-color ');
        $('#citizen-tab-just').css('color', 'white');
      });

      if ($('#company-tab-just').hasClass('active')) {
        $('#citizen-tab-just').removeClass('fables-second-background-color');
        $('#company-tab-just').addClass('fables-second-background-color');
        $('#citizen-tab-just').addClass('fables-main-hover-background-color ');
        $('#company-tab-just').removeClass('fables-main-hover-background-color ');
        $('#citizen-tab-just').css('color', 'white');
      }



      $(".gov").change(function() {
        var gov = $(".gov").val();
        $.ajax({
          url: "ajexconnection.php",
          method: "POST",
          data: 'GovNo=' + gov
        }).done(function(city) {
          //console.log(city);
          if (city.length < 3) {
            $('.city').html('');
            $('.city').append('<option disabled selected value="">there is no cities in this government</option>');
          } else {
            gov = JSON.parse(city);
            // console.log(gov);
            $('.city').html('');
            gov.forEach(function(city) {

              $('.city').append(`<option value='${city.CityNo}' >${city.CityName}</option>`);
            })
          }

        })

      });

      $(".govCompany").change(function() {
        var gover = $(".govCompany").val();
        $.ajax({
          url: "ajexconnection2.php",
          method: "POST",
          data: 'companyGovNo=' + gover
        }).done(function(cities) {
          console.log(cities);
          if (cities.length < 3) {
            $('.cityCompany').html('');
            $('.cityCompany').append('<option disabled selected value="">there is no cities in this government</option>');
          } else {
            gover = JSON.parse(cities);
            // console.log(gov);
            $('.cityCompany').html('');
            gover.forEach(function(cities) {

              $('.cityCompany').append(`<option value='${cities.CityNo}' >${cities.CityName}</option>`);
            })
          }

        })

      });


      //  finalres='<option value="" hidden>Select your city</option>';
      //                   $('.city').html(finalres);
      //       $('.gov').on('change',function(){
      //           f=this.value;

      //         var xhttp =new XMLHttpRequest();
      //         xhttp.onreadystatechange=function(){
      //             if (this.readyState==4 && this.status==200){
      //                   result=this.responseText;


      //                   $('.city').html(finalres+result);
      //             }
      //         }

      //         xhttp.open("GET", "ajexconnection.php?q="+f, true);
      //         xhttp.send();



      //       });


    });
  </script>

</body>

</html>

<?php
include 'footerBefore.php';

?>
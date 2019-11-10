<?php
include 'headerAfterCitizen.php'
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
            <h2 class="fables-page-title fables-second-border-color">Edit profile</h2>
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
                <!-- <img src="assets/custom/images/signin-logo.png" alt="signin" class="img-fluid"> -->
                <div class="col-12">
                    <h2 class="fables-forth-text-color fables-light-background-color my-3 my-md-5 py-3 text-center font-20 semi-font">Edit your Profile Information</h2>
                </div>



                <!-- Citizen Edit profile -->



                <?php
                include_once 'Citizens.php';

                $c = new Citizens();
                $c->setCitizenEmail($_SESSION['citizens']);
                $r = $c->CheckCitizen();
                if ($rows = mysqli_fetch_assoc($r)) {


                    ?>
                    <div class="tab-content card pt-4 mt-0" id="myTabContentJust">
                        <div class="tab-pane fade show active" id="citizen-just" role="tabpanel" aria-labelledby="citizen-tab-just">

                            <form method="post" id="CitizenForm">

                                <!-- Name -->
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="fables-iconuser-register fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                                        <input type="text" name="citizenName" value="<?php echo $rows['CitizenName']; ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Name" required>
                                    </div>

                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="fables-iconemail fables-input-icon mt-2 font-13" style="color:#E54D42;"></span>
                                        <input type="email" name="citizenEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $rows['CitizenEmail']; ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Email" required>
                                    </div>

                                </div>

                                <!-- password -->
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                                        <input type="password" name="citizenPassword" minlength="5" id='pass' value="<?php echo $rows['CitizenPassword']; ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Password" required>
                                    </div>

                                </div>
                                <!-- repeate password -->
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="fables-iconpassword fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                                        <input type="password" name="citizenRepeatPassword" id="rpass" value="<?php echo $rows['CitizenPassword']; ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Repeat Password" required>
                                    </div>

                                </div>
                                <!--phone-->
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="fables-iconphone fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                                        <input type="text" name="citizenPhone" pattern="^[0][1][0125][0-9]*?$" maxlength="11" value="<?php echo $rows['CitizenPhone']; ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Phone">
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
                                                            $gName = $row['GovernmentName'];
                                                            ?>
                                                        <option value="<?php echo $row['GovernmentNo'] ?>" <?php if ($rows['GovernmentName'] == $gName) echo 'selected' ?>>
                                                            <?php echo $row['GovernmentName'] ?>
                                                        </option>
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



                                                    <?php
                                                        include_once "Cities.php";
                                                        include_once "Governments.php";
                                                        $gov = new Governments();
                                                        $City = new Cities();
                                                        $gov->setGovernmentName($rows['GovernmentName']);
                                                        $g = $gov->GetNo();
                                                        if ($r = mysqli_fetch_assoc($g)) {

                                                            $City->setGovernmentNo($r['GovernmentNo']);
                                                            $C = $City->GetSpecificData();

                                                            while ($row = mysqli_fetch_assoc($C)) {
                                                                $CName = $row['CityName'];
                                                                ?>
                                                            <option value="<?php echo $row['CityNo'] ?>" <?php if ($rows['CityName'] == $CName) echo 'selected' ?>>
                                                                <?php echo $row['CityName'] ?>
                                                            </option>
                                                    <?php
                                                            }
                                                        }

                                                        ?>

                                                </select>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!--Spacific Address-->
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="fables-iconloc fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                                        <input type="text" name="citizenAddress" value="<?php echo $rows['CitizenAddress'] ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="complate Address">
                                    </div>

                                </div>



                                <input type="submit" name="btnEditCitizen" value="Save Edit" id="btnCitizen" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color 
                   font-16 semi-font py-3">
                                <p class="fables-forth-text-color mt-3">Do you want to delete your account?
                                    <a href="CitizenDeleteAccount.php?citizens=<?php echo $_SESSION['citizens']; ?>" class="font-16 semi-font fables-second-text-color underline fables-main-hover-color ml-2"> Click Here</a></p>

                            </form>
                        </div>
                    </div>


                <?php
                }

                ?>


            </div>



        </div>

    </div>




    <!-- /End page content -->


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
    // include_once "Citizens.php";
    include_once "Errors.php";
    $message = '';
    $c->setCitizenEmail($_SESSION['citizens']);
    $ID = $c->GetID();

    if ($rID = mysqli_fetch_assoc($ID)) {


        if (isset($_POST['btnEditCitizen'])) {
            $c = new Citizens();
            $c->setCitizenName($_POST['citizenName']);
            $c->setCitizenEmail($_POST['citizenEmail']);
            $_SESSION['citizens'] = $_POST['citizenEmail'];
            $c->setCitizenPhone($_POST['citizenPhone']);
            // $c->setCitizenSecurityQuestion($_POST['citizenQuestion']);
            // $c->setCitizenSecurityAnswer($_POST['citizenAnswer']);
            $c->setCitizenGovernment($_POST['citizenGovernment']);
            $c->setCitizenCity($_POST['citizenCity']);
            $c->setCitizenAddress($_POST['citizenAddress']);
            $c->setCitizenPassword($_POST['citizenPassword']);

            $msg = $c->UpdateID($rID['CitizenID']);

            $err = new Errors();

            echo $msg;
            // header('location:CitizenProfile.php');
            echo ("<script> window.open('CitizenProfile.php','_parent'); </script>");
        }
    }



    ?>

    <!--General-->


    <script>
        $(document).ready(function() {

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

            //    finalres='<option value="" hidden>Select your city</option>';
            //                     $('.city').html(finalres);
            //         $('.gov').on('change',function(){
            //             f=this.value;

            //           var xhttp =new XMLHttpRequest();
            //           xhttp.onreadystatechange=function(){
            //               if (this.readyState==4 && this.status==200){
            //                     result=this.responseText;
            //                     console.log(result);

            //                     $('.city').html(finalres+result);
            //               }
            //           }

            //           xhttp.open("GET", "ajexconnection.php?q="+f, true);
            //           xhttp.send();



            //         });


        });
    </script>

</body>

</html>

<?php
include 'footerBefore.php';

?>
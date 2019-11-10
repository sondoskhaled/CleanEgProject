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

    <title> Profile </title>

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
            <h2 class="fables-page-title fables-second-border-color">profile</h2>
        </div>
    </div>
    <!-- /End Header -->

    <!-- Start Breadcrumbs -->
    <div class="fables-light-background-color">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">profile</li>
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
                <h2 class="fables-forth-text-color fables-light-background-color my-3 my-md-5 py-3 text-center font-20 semi-font">My Profile</h2>




                <!-- Citizen profile -->


                <?php
                include_once 'Citizens.php';

                $c = new Citizens();
                $c->setCitizenEmail($_SESSION['citizens']);
                $r = $c->CheckCitizen();
                if ($rows = mysqli_fetch_assoc($r)) {


                    ?>
                    <div class="tab-content card pt-4 mt-0" id="myTabContentJust">
                        <div class="tab-pane fade show active" id="citizen-just" role="tabpanel" aria-labelledby="citizen-tab-just">
                            <table class="table table-striped">

                                <tr>
                                    <td>Your Name:</td>
                                    <td><?php echo $rows['CitizenName']; ?></td>
                                </tr>
                                <tr>
                                    <td>Your Email:</td>
                                    <td><?php echo $rows['CitizenEmail']; ?></td>
                                </tr>
                                <tr>
                                    <td>Your Phone:</td>
                                    <td><?php echo $rows['CitizenPhone']; ?></td>
                                </tr>
                                <tr>
                                    <td>Your Password:</td>
                                    <td><?php echo $rows['CitizenPassword']; ?></td>
                                </tr>
                                <tr>
                                    <td>Your Security Question:</td>
                                    <td><?php echo $rows['CitizenSecurityQuestion']; ?></td>
                                </tr>
                                <tr>
                                    <td>Your Security Answer:</td>
                                    <td><?php echo $rows['CitizenSecutityAnswer']; ?></td>
                                </tr>
                                <tr>
                                    <td>Your Government:</td>
                                    <td><?php echo $rows['GovernmentName']; ?></td>
                                </tr>
                                <tr>
                                    <td>Your City:</td>
                                    <td><?php echo $rows['CityName']; ?></td>
                                </tr>
                                <tr>
                                    <td>Your Adress:</td>
                                    <td><?php echo $rows['CitizenAddress']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan='2'> <a href="CitizenEditProfile.php" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color 
                   font-16 semi-font py-3"> Edit Profile </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>



                <?php
                }

                ?>



            </div>



        </div>

    </div>




    <!-- /End page content -->


</body>

</html>

<?php
include 'footerBefore.php';

?>
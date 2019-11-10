<?php
include 'headerBefore.php';
include_once "ContactUSClass.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Contact Us </title>

    <style>
        tr {
            border: red 1px solid;
        }

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
            <h2 class="fables-page-title fables-second-border-color">Contact Us</h2>
        </div>
    </div>
    <!-- /End Header -->

    <!-- Start Breadcrumbs -->
    <div class="fables-light-background-color">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->

    <!-- Start page content -->
    <div class="container">
        <div class="row overflow-hidden">
            <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".5s">
                <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span class="fables-iconmap-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Address Information</h2>
                    <p class="font-14 fables-forth-text-color">
                        level13, 2Elizabeth St, Melbourne,Victor 2000</p>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".8s">
                <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span class="fables-iconphone fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Mail & Phone number</h2>
                    <p class="font-14 fables-forth-text-color text-truncate">adminsupport@website.com</p>
                    <p class="font-14 fables-forth-text-color">+333 111 111 000</p>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay="1.1s">
                <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span class="fables-iconshare-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Stay In Touch</h2>
                    <ul class="nav fables-contact-social-links">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-0 mb-4 my-md-5 overflow-hidden">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="font-35 font-weight-bold fables-main-text-color mb-4 text-center">Contact Us</h3>
                <p class="fables-contact-text fables-forth-text-color text-center">It is a long established fact that a
                    reader will be distracted by the readable content of a page when looking at its layout. The point of
                    using Lorem Ipsum is that it has a more-or-less normal </p>
            </div>

        </div>
        <div class="row">
            <div class="col-12 wow fadeInLeft">
                <form class="fables-contact-form" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="contactName" class="form-control" placeholder="Name*" required>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="email" name="contactEmail" class="form-control" placeholder="E-mail*" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                        <textarea name="contactMessage" rows="5" class="form-control" placeholder="Message*" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 text-center">
                            <!-- <button type="submit" class="btn fables-second-background-color 
                         text-white fables-btn-rounded px-7 py-2 font-20">Send</button> -->
                         <input type="submit" class="btn fables-second-background-color 
                         text-white fables-btn-rounded px-7 py-2 font-20" name="btnMessage" value="Send">
                        </div>
                    </div>
                </form>


            </div>

        </div>
    </div>
    <!-- <div class="container">
        <div class="row my-4 my-lg-5">
            <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3 text-center">
                <form class="contact-form ajax-form" method="post">

                    <div class="row">

                        <div class="form-group col-md-6">
                            <input type="text" name="contactName" class="form-control" placeholder="Name*" required>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="email" name="contactEmail" class="form-control" placeholder="E-mail*" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <textarea name="contactMessage" rows="5" class="form-control" placeholder="Message*" required></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success pull-right" name="btnMessage" value="Send message">
                    </div>

                    <div class="clearfix"></div>

                </form>

            </div>

        </div>

    </div> -->




    <!-- /End page content -->


</body>
<?php
if (isset($_POST['btnMessage'])) {
    $contact = new ContactUsClass();
    $contact->setContactName($_POST['contactName']);
    $contact->setContactEmail($_POST['contactEmail']);
    $contact->setContactMessage($_POST['contactMessage']);

    $msg = $contact->Add();
    // if (strpos($msg, 'PRIMARY'))
    //     echo ("<h4 style='text-align:center'>This user is exist</h4>" . $msg);
    // else if (strpos($msg, 'Phone'))
    //     echo ("<h4 style='text-align:center'>This phone is exist</h4>" . $msg);
    // else if (strpos($msg, 'Email'))
    //     echo ("<h4 style='text-align:center'>This email is exist</h4>" . $msg);
    // else
    echo ("<h4 style='text-align:center'>" . $msg . "</h4>");
}
?>

</html>

<?php
include 'footerBefore.php';

?>
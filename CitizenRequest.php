<?php
include 'headerAfterCitizen.php';
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Fables">
  <meta name="author" content="Enterprise Development">
  <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

  <title>My Requests</title>

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
      <h2 class="fables-page-title fables-second-border-color">My Requests</h2>
    </div>
  </div>
  <!-- /End Header -->

  <!-- Start Breadcrumbs -->
  <div class="fables-light-gary-background">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="fables-breadcrumb breadcrumb px-0 py-3">
          <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">My Requests</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- /End Breadcrumbs -->
  <div class="container">
    <div class="row mb-0 mb-md-5 ml-5 mr-5">
      <div class="col-12">
        <h2 class="fables-forth-text-color fables-light-background-color my-3 my-md-5 py-3 text-center font-20 semi-font">My Requests</h2>
      </div>
      <div class="tab-content card pt-4 mt-0 col-12" id="myTabContentJust">
        <div class="tab-pane fade show active" id="citizen-just" role="tabpanel" aria-labelledby="citizen-tab-just">
          <div class="col-12">
            <a href="#modalCart" data-toggle="modal" data-target="#modalCart" class=" float-right btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-15 p-2 px-4 mb-5"><span class="fables-btn-value">Add new Request</span></a>
            <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <!--Header-->
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Make Request</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <!--Body-->
                  <div class="modal-body">
                    <form method="post">

                      <div class="form-group">
                        <div class="input-icon">
                          <span class="fables-iconloc fables-input-icon font-19 " style="color:#E54D42;margin-top:-3px; "></span>
                          <select name="City" class="form-control rounded-0 pl-5 font-13 sign-register-input" required id='city'>
                            <option value="" hidden>Select your City</option>
                            <?php
                            include_once "Cities.php";
                            $gov = new Cities();
                            $g = $gov->GetData();

                            while ($row = mysqli_fetch_assoc($g)) {
                              ?>
                              <option value="<?php echo $row['CityNo']; ?>" <?php if (isset($_POST['City']) && $_POST['City'] == $row['CityNo']) echo 'selected="selected"'; ?>>
                                <?php echo $row['CityName']; ?></option>
                            <?php
                            }

                            ?>

                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-icon">
                          <span class="fables-iconloc fables-input-icon font-19 mt-1" style="color:#E54D42;"></span>
                          <input type="text" name="Address" id='add' style="height=10px" value="<?php echo isset($_POST['Address']) ? $_POST['Address'] : '' ?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="complate Address">
                        </div>

                      </div>

                    </form>


                    <a id="info" class="btn  fables-second-text-color  font-13 p-2 px-4 mb-5"><span class="fables-btn-value">Get More info about Types and Points</span></a>
                    <div id="type">
                      <table class="table table-hover">
                        <thead>
                          <tr class="fables-second-text-color">
                            <th>Type Name</th>
                            <th>Points / Kg</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include_once "Types.php";
                          $Type = new Types();
                          $T = $Type->GetData();

                          while ($rowT = mysqli_fetch_assoc($T)) {
                            ?>
                            <tr>
                              <td><?php echo $rowT['TypeName']; ?></td>
                              <td><?php echo $rowT['Point']; ?></td>
                            </tr>

                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                    <a id="Request" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-20 p-2 px-4 mb-5" data-dismiss="modal"><span class="fables-btn-value">Send Request</span></a>

                    <a href="" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-20 p-2 px-4 mb-5" data-dismiss="modal"><span class="fables-btn-value">close</span></a>

                  </div>

                  <script>
                    $(document).ready(function() {
                      $("#Request").on('click', function() {
                        address = $("#add").val();
                        city = $("#city").val();
                        window.location.href = "MakeRequest.php?add=" + address + "&city=" + city + "";
                      });

                      $('#type').hide();
                      $("#info").on('click', function() {
                        $('#type').toggle();
                      });
                    });
                  </script>

                </div>
              </div>
            </div>

          </div>
          <table class="table table-bordered">
            <thead>
              <tr class="fables-second-text-color">
                <th scope="col">Request Number</th>
                <th scope="col">Request Date</th>
                <th scope="col">Delivery Phone</th>
                <th scope="col">Request Address</th>
                <th scope="col">Request Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include_once "Requests.php";
              $Req = new Requests();
              $Req->setCitizenEmail($_SESSION['citizens']);
              $R = $Req->GetData();

              while ($row = mysqli_fetch_assoc($R)) {
                ?>
                <tr>
                  <th scope="row"><?php echo $row['RequestNo']; ?></th>
                  <td><?php echo $row['RequestDate']; ?></td>
                  <td><?php echo $row['DeliveryPhone']; ?></td>
                  <td><?php echo $row['RequestAddress']; ?></td>
                  <td><?php echo $row['RequestStatus']; ?></td>

                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>




</body>

</html>

<?php
include 'footerBefore.php';
?>
<?php

include '../foothead/head.php';
$c = [$pdo, 'farmer'];
$access->retriving($c);


?>
<div class="container-fluid">

  <nav class="navbar navbar-light fixed-top text-white" style="background-color: #064E05;">
    <div class="px-4 py-3">
      <h3>E-Pass on</h3>
    </div>
    <div class="px-4">
      <button type="button" class="btn btn-default btn-lg">

        <img src="../../files/isiikoivan.jpg" class="img-circle" style="width:10%">
        <span class="text-white"><?= $_SESSION['dean']['farmer_first_name']; ?></span>
      </button>
    </div>

  </nav>


  <div class="py-5 mt-5">
    <div class="container-fluid " style="background-color:#E0F5DF">
      <div class="row">

        <div class="col-3 ">
          <?php
          echo $_SESSION['ivan']->farmer_phonenumber;
          echo $_SESSION['ivan']->farmer_last_name;

          ?>


          <div class="card mt-3 mb-3 px-3 py-2">
            <img class="card-img-top border-0 rounded mx-auto d-block " src="../../files/isiikoivan.jpg" alt="" style="width:150px">
            <div class="card-body">
              <div class="row"><button class="btn btn-sm btn-secondary btn-center">upload image</button></div>
              <div class="card-text  text-center" style="color:#064E05;" text-secondary><?= $_SESSION['farmer_first_name']; ?></div>
            </div>
          </div>
          <!-- profile btn -->
          <div class=" mt-2 mb-3 ">
            <button type="button" data-toggle="modal" name="profile" data-target="#profilemodal" class="btn btn-block btn-success" style=" background-color:#064E05; width: 100%;"> Profile</button>
          </div>
          <!-- profile modal -->
          <div class="modal fade col-8 col-md-6" id="profilemodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Profile</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <?php echo $_SESSION['dean
                  ']->farmer_first_name; ?>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>


          <!-- activity modal -->
          <div class=" mt-2 mb-3 ">
            <button type="button" data-toggle="modal" data-target="#activitymodal" class="btn btn-block btn-success" name="activity" style=" background-color:#064E05;width: 100%;">Activity</button>
          </div>
          <!-- activity modal -->
          <div class="modal fade" id="activitymodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Activity</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                    <?php include './usermodals/modal0.php'; ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Activity</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Animal details -->
          <div class=" mt-2 mb-3 ">
            <button type="button" name="animal" data-toggle="modal" data-target="#animalmodal" class="btn btn-block btn-success" style=" background-color:#064E05;width:100%;"> Animal Details</button>
          </div>

          <!-- animal modal -->
          <div class="modal fade" id="animalmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Animal Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php include './usermodals/modal10.php'; ?>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save Details</button>
                </div>
              </div>
            </div>
          </div>



          <!-- support -->
          <div class=" mt-2 mb-3 ">
            <button type="button" class="btn btn-block btn-success" name="support" data-toggle="modal" data-target="#supportmodal" style=" background-color:#064E05;width:100%;">Request/Support</button>
          </div>

          <!-- support modal -->
          <div class="modal fade" id="supportmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Support</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <?php include './usermodals/modal1.php'; ?>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send Request</button>
                </div>
              </div>
            </div>
          </div>



        </div>
        <div class="col-9">
          <?php


          print_r($_SESSION['dean']);
          //$array = json_decode(json_encode($_SESSION['ivan'][0],true));
          //  print_r($array);
          // echo $data;
          // print($_SESSION['farmer_phonenumber']);
          // echo $_SESSION['userdata']->farmer_last_name;

          ?>

          <div class="row mx-auto">
            <div class="container mt-3 ml-3 py-2" style="background-color:#ffffff">
              <button type="button" class="btn btn-primary text-white" style=" background-color:#064E05; width: 30%" ;>
                Animal cycle <span class="badge badge-light" style="background-color:#ffffff;color:#064E05">1</span>
              </button>





              <button type="button" class="btn  btn-success" name="support" data-toggle="modal" 33.|ta-target="#passmodal" style=" background-color:#064E05;width:30%;"> E-Pass 0n </button>


              <!-- support modal -->
              <div class="modal fade" id="passmodal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pass On</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <?php include './usermodals/modal10.php'; ?>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Pass-on</button>
                    </div>
                  </div>
                </div>
              </div>



              <a type="button" class="btn  btn-success " style=" background-color:#064E05; width: 30%;" href="logout.php">logout</a>


            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="card mt-3">
                <div class="card-header">

                  <ul class="nav nav-tabs card-header-tabs">

                    <li class="nav-item">
                      <a class="nav-link active" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="true">Member</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="progress-tab" data-toggle="tab" href="#progress" role="tab" aria-controls="progress" aria-selected="false">Progress</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="false">Market</a>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link" id="product-tab" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="false">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="relate-tab" data-toggle="tab" href="#relate" role="tab" aria-controls="relate" aria-selected="false">Relate</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" id="feedback-tab" data-toggle="tab" href="#feedback" role="tab" aria-controls="feedback" aria-selected="false">Feedback</a>
                    </li>


                  </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade  mb-3 show active" id="member" role="tabpanel" aria-labelledby="member-tab" style="width: 100%; height: 350px;">
                    <?php include 'usertabs/tab.php' ?>
                  </div>
                  <div class="tab-pane fade mb-3" id="progress" role="tabpanel" aria-labelledby="progress-tab" style="width: 100%; height: 350px;">
                    <?php include 'usertabs/tab1.php' ?>
                  </div>
                  <div class="tab-pane fade mb-3" id="market" role="tabpanel" aria-labelledby="market-tab" style="width: 100%; height: 350px;">
                    <?php include 'usertabs/tab2.php' ?>
                  </div>

                  <div class="tab-pane fade mb-3" id="product" role="tabpanel" aria-labelledby="product-tab" style="width: 100%; height: 350px;">
                    <?php include 'usertabs/tab3.php' ?>
                  </div>
                  <div class="tab-pane fade mb-3" id="relate" role="tabpanel" aria-labelledby="relate-tab" style="width: 100%; height: 350px;">
                    <?php include 'usertabs/tab4.php' ?>
                  </div>
                  <div class="tab-pane fade mb-3" id="feedback " role="tabpanel" aria-labelledby="feedback-tab" style="width: 100%; height: 350px;">
                    <?php include 'usertabs/tab5.php' ?>
                  </div>
                </div>



              </div>

            </div>

          </div>
        </div>


      </div>
    </div>
  </div>
</div>


</div>


</div>
<?php
include '../foothead/foot.php';
?>
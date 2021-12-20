<div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-1">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            District</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php 
                        $c = array($pdo,'district','district_id');
                        $access->conuntingdbvalues($c);
                        print_r($_SESSION['count']);
                        ?>
                        </div>

                    </div>
                    <div class="col">
                        <div class="small text-white"><i class="fas fa-users"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-1">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                        County </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $c = array($pdo,'county','county_id');
                        $access->conuntingdbvalues($c);
                        print_r($_SESSION['count']);
                        ?>
                        </div>

                    </div>
                    <div class="col">
                        <div class="small text-white"><i class="fas fa-tractor"></i></div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-1">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            
                    Sub county</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php 
                        $c = array($pdo,'sub_county','sub_county_id');
                        $access->conuntingdbvalues($c);
                        print_r($_SESSION['count']);
                        ?>
                        </div>

                    </div>
                    <div class="col">
                        <div class="small text-white"><i class="fas fa-users"></i></div>
                    </div>
                </div>
            </div>


        </div>

    </div>
  

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-1">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                         Parish </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php 
                        $c = array($pdo,'parish','parish_id');
                        $access->conuntingdbvalues($c);
                        print_r($_SESSION['count']);
                        ?>
                        </div>

                    </div>
                    <div class="col">
                        <div class="small text-white"><i class="fas fa-users"></i></div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-1">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                          Village</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php 
                        $c = array($pdo,'village','village_id');
                        $access->conuntingdbvalues($c);
                        print_r($_SESSION['count']);
                        ?>
                        </div>

                    </div>
                    <div class="col">
                        <div class="small text-white"><i ></i></div>
                    </div>
                </div>
            </div>


        </div>

    </div>


</div>
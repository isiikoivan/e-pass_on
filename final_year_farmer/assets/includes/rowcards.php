<div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-1">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            Farmers</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php 
                        $c = array($pdo,'farmer','farmer_id');
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
                        F.Groups </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $c = array($pdo,'farmer_group','group_id');
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
                            Inputs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php 
                        $c = array($pdo,'animal','animal_id');
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
                            Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php 
                        $c = array($pdo,'request','request_id');
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
    


</div>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" style="background-color: #064E05;" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-white">Admin</div>
                <a class="nav-link text-white" href="index.php">
                    <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt text-white"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading"><?= $_SESSION['dean']['admin_fname']; ?> <?= $_SESSION['dean']['admin_lname']; ?>
                    <?php if (empty($_SESSION['dean']['admin_others'])) {
                        
                    } else {
                        print_r($_SESSION['dean']['admin_others']);
                    } ?>
                </div>
                <hr class="sidebar-divider text-white">
         
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
          
                    </nav>
                </div>
                <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
                <a class="nav-link  text-white" href="index.php">
                    <div class="sb-nav-link-icon "><i class="fas fa-user text-white"></i></div>
                   Farmers
                </a>
                <a class="nav-link  text-white" href="farmergroups.php">
                    <div class="sb-nav-link-icon "><i class="fas fa-users text-white"></i></div>
                   Farmers Groups
                </a>
                <a class="nav-link text-white" href="locale.php">
                    <div class="sb-nav-link-icon "><i class="fas fa-globe text-white"></i></div>
                   Locale
                </a>
                <a class="nav-link  text-white" href="input.php">
                    <div class="sb-nav-link-icon "><i class="fas fa-table text-white"></i></div>
                    Input
                </a>
                <!-- <a class="nav-link  text-white" href="support.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-headset text-white"></i></div>
                    Support
                </a>
                <a class="nav-link  text-white" href="requests.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-envelope text-white"></i></div>
                   Requests
                </a> -->
                <!-- <a class="nav-link text-white" href="progress.php">
                    <div class="sb-nav-link-icon "><i class="fas fa-recycle text-white"></i></div>
                   Progress
                </a> -->

                <a class="nav-link text-white" href="administrators.php">
                    <div class="sb-nav-link-icon "><i class="fas fa-shield-alt text-white"></i></div>
                   Administrators
                </a>
            </div>
        </div>
       
    </nav>
</div>
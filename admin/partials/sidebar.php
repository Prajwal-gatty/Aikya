<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Aikya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         
            <div class="info">
                <a href="#" class="d-block">Welcome, <?= $_SESSION['username']?></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
                <li class="nav-item">
                    <a href="<?= BASE_URL .'/admin/catering.php' ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Catering Bookings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASE_URL .'/admin/hall-bookings.php' ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Hall Bookings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASE_URL .'/admin/pooja-bookings.php' ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pooja Bookings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASE_URL .'/admin/manage-users.php' ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASE_URL .'/admin/feedbacks.php' ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Feedbacks
                        </p>
                    </a>
                </li>
                
             
           
              
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
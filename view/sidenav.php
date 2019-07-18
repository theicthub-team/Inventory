<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-dark" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <div class="float-md-left" style="padding-top: 5%">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="assets/img/logo.png">
                </div>
                <div class="sidebar-brand-text mx-3 text-white font-weight-bold text-uppercase">Inventory Hub</div>
            </a>
        </div>

        <!-- User -->
        <ul class="nav align-items-center d-md-none">

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="">
              </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Activity</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">

                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-sm-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                           placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item  class=" active
                " ">
                <a class=" nav-link " href=" #"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="LayoutAllContact.php">
                        <i class="ni ni-single-02 text-yellow"></i> Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                       aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="ni ni-planet text-blue"></i> Inventory
                    </a>
                </li>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                     data-parent="#collapseUtilities">

                    <li class="nav-item"><a class="nav-link " href="LayoutItemList.php">Items</a></li>
                    <li class="nav-item"><a class="nav-link " href="LayoutGroupItemList.php">Group Item</a></li>
                    <li class="nav-item"><a class="nav-link " href="LayoutStockList.php">Stock</a></li>

                </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="LayoutAll_invoices.php">
                        <i class="ni ni-bullet-list-67 text-red"></i> Invoices
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LayoutAllSalesOrder.php">
                        <i class="ni ni-key-25 text-info"></i> Sales Order
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LayoutAllPurchaseOrderList.php">
                        <i class="ni ni-key-25 text-info"></i> Purchase Order
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LayoutWareHouseList.php">
                        <i class="ni ni-circle-08 text-pink"></i> Warehouse
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LayoutWareHouseList.php">
                        <i class="ni ni-circle-08 text-pink"></i> Return
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LayoutWareHouseList.php">
                        <i class="ni ni-circle-08 text-pink"></i> Shipping
                    </a>
                </li>
            </ul>



        </div>
    </div>
</nav>
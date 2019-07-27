<?php include 'header.php'; ?>
<body class="">
<?php include 'sidenav.php'; ?>
<div class="main-content">
    <?php include 'navbar.php'; ?>


    <div class="header pt-5">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->

            </div>
        </div>
    </div>

    <div class="container-fluid mt--7 pb-8 pt-5 pt-md-8">


        <div class="row box_container">
            <div class="col">
                <!-- main content here -->
                <div class="col-xl-20 mb-5 mb-xl-0">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Shipping</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="#" class="btn btn-sm btn-primary">Add New</a>
                                </div>
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light border-primary" href="LayoutAllSalesOrder.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Edit </a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Check</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-xl-4 col-lg-4 col-md-4  ">
                                <!-- card -->
                                <div class="card firstcard">
                                    <div class="card_header notshippedpackese">
                                        <span >Packages, Not Shipped</span >
                                        <div class="dropdown shipping">
                                            <a class="btn btn-sm btn-icon-only text-light border-primary " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v shippingmore"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Edit </a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                                <a class="dropdown-item" href="#">Check</a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-block">

                                        <div class="art text-center">
                                            <h4 class="card_content">No Records Found</h4>
                                        </div>
                                        <div class="card-text">

                                        </div>
                                    </div>
                                    <div class="card-footer text-center">

                                    </div>
                                </div>
                                <!-- card -->

                            </div>
                            <div class=" col-xl-4 col-lg-4 col-md-4  ">
                                <!-- card -->
                                <div class="card firstcard">
                                    <div class="card_header shippedpackese">
                                        <span > Shipping Packages</span >
                                        <div class="dropdown deliveredshipping">
                                            <a class="btn btn-sm btn-icon-only text-light border-primary " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v shippingmore"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Edit </a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                                <a class="dropdown-item" href="#">Check</a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-block">

                                        <div class="art text-center">
                                            <h4 class="card_content">No Records Found</h4>
                                        </div>
                                        <div class="card-text">

                                        </div>
                                    </div>
                                    <div class="card-footer text-center">

                                    </div>
                                </div>
                                <!-- card -->

                            </div>
                            <div class=" col-xl-4 col-lg-4 col-md-4  ">
                                <!-- card -->
                                <div class="card firstcard">
                                    <div class="card_header deliveredpackese">
                                        <span >Delivered Packages</span >
                                        <div class="dropdown deliveredshipping">
                                            <a class="btn btn-sm btn-icon-only text-light border-primary " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v shippingmore"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Edit </a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                                <a class="dropdown-item" href="#">Check</a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-block">

                                        <div class="art text-center">
                                            <h4 class="card_content">No Records Found</h4>
                                        </div>
                                        <div class="card-text">

                                        </div>
                                    </div>
                                    <div class="card-footer text-center">

                                    </div>
                                </div>
                                <!-- card -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- end of main content-->

        </div>
    </div>




</div>
<?php include 'footer.php'; ?>



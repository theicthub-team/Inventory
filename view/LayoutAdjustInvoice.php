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
                <div class="">
                    <div class="row">
                        <div class="col-md-4 com-right">
                            <div class="col-xl-20 mb-5 mb-xl-0">
                                <div class="card shadow">
                                    <div class="card-header border-0">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h3 class="mb-2">Invoice List</h3>
                                            </div>

                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light border-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <div class=" dropdown-header noti-title">
                                                        <h6 class="text-overflow m-0 text-uppercase text-muted">Sort By:</h6>
                                                    </div>
                                                    <a class="dropdown-item" href="#">Created Time</a>
                                                    <a class="dropdown-item" href="#">Last Modified Time</a>
                                                    <a class="dropdown-item" href="#">Date</a>
                                                    <a class="dropdown-item" href="#">Expected Shipment Date </a>
                                                    <a class="dropdown-item" href="#">Import Sales Order</a>
                                                    <a class="dropdown-item" href="#">Export Sales Order</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-warning" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <!-- Projects table -->
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Check</th>
                                                <th scope="col">Invoice Number<br> </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <th scope="row">
                                                    <a href="#">Samsung Galaxy Note 9</a><br>

                                                    CP094500
                                                </th>



                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2"></label>
                                                    </div>
                                                <th scope="row">
                                                    <a href="#">LG AC</a><br>
                                                    HA895003
                                                </th>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3"></label>
                                                    </div>
                                                </td>
                                                <th scope="row">
                                                    <a href="#">Sony LED TV</a><br>
                                                    HA6150004
                                                </th>


                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 com-left">
                            <div class="row box_container">
                                <div class="col">
                                    <!-- main content here -->
                                    <div class="card shadow">
                                        <div class="card-header border-0">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h3 class="mb-0">Invoice Preview</h3>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="LayoutNewItem.php" class="btn btn-sm btn-primary">Adjust Invoice</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light border-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item" href="#">Clone</a>
                                                        <a class="dropdown-item" href="#">Mark As Delivered</a>
                                                        <a class="dropdown-item" href="#">Adjust Payment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-body">

                                        <form>
                                            <!--                        New Stock Start -->

                                            <!--
                                                                    <hr class="my-4" />
                                                                    <h6 class="heading-small text-muted mb-4">User information</h6> -->
                                            <div class="pl-lg-4">

                                                <div class="row ">
                                                    <div class="col-lg-8 invoice">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-text">Company Name</label>
                                                            <input type="text" id="input-text" class="form-control form-control-alternative" placeholder="Company Name" value="Company Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-text">Customer Name</label>
                                                            <input type="text" id="input-text" class="form-control form-control-alternative" placeholder="Company Name" value="Company Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-number">Detail Cost</label>
                                                            <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Detail Cost" value="Detail Cost">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-number">Total Cost</label>
                                                            <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Total Cost" value="Total Cost">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-number">Due Cost</label>
                                                            <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Due Cost" value="Due Cost">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--                        <hr class="my-4" />-->
                                                <!-- Save -->
                                                <div class="col text-left invoicebutton">
                                                    <a href="#" class="btn btn-md btn-primary">Print Bill</a>
                                                </div>


                                        </form>
                                    </div>

                                    <!-- end of main content-->

                                </div>
                            </div>
                        </div>

                    </div>
                </div


                        <!-- end of main content-->

            </div>
        </div>


    </div>

    <?php include 'footer.php'; ?>







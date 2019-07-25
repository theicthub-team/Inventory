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
                                                <h3 class="mb-2">Sales Order List</h3>
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
                                                <th scope="col">Sales Order<br>Amount </th>


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
                                                    <a href="#">SO-093428</a><br>

                                                   4500
                                                </th>



                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2"></label>
                                                    </div>
                                                <th scope="row">
                                                    <a href="#">SO-450235</a><br>
                                                    5000
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
                                                    <a href="#">SO-684297</a><br>
                                                    15000
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
                                                    <h3 class="mb-0">Sales Order Preview</h3>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="LayoutNewSalesOrder.php" class="btn btn-sm btn-primary">Adjust Sales Order</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light border-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item" href="#">Clone</a>
                                                        <a class="dropdown-item" href="#">Cancel Order</a>
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
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Customer Name</label>
                                                            <input type="text" id="input-username"
                                                                   class="form-control form-control-alternative" placeholder="Customer Name"
                                                                   value="Customer Name">

                                                        </div>

                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Refrence</label>
                                                            <input type="text" id="input-username"
                                                                   class="form-control form-control-alternative" placeholder="Refrence"
                                                                   value="Refrence">

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-date">Sales Order Date</label>
                                                            <input type="date" id="input-username"
                                                                   class="form-control form-control-alternative" placeholder=Sales Order
                                                                   Date"
                                                            value="Starting Date">

                                                        </div>


                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Expected Shipment
                                                                Date</label>
                                                            <input type="date" id="input-date"
                                                                   class="form-control form-control-alternative" placeholder="Ending Date"
                                                                   value="Ending Date">

                                                        </div>


                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Order ID</label>
                                                            <input type="price" id="input-price"
                                                                   class="form-control form-control-alternative" placeholder="Order ID"
                                                                   value="Order ID">

                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Purchase Price</label>
                                                            <input type="price" id="input-price"
                                                                   class="form-control form-control-alternative"
                                                                   placeholder="Purchase Price"
                                                                   value="Purchase Price">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-username">Selling Price</label>
                                                            <input type="price" id="input-price"
                                                                   class="form-control form-control-alternative" placeholder="Selling Price"
                                                                   value="Selling Price">

                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="">
                                                    <!-- Projects table -->
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th>Item Name</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Amount</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        <tr>
                                                            <th scope="row">
                                                                <!--                                            /argon/-->
                                                                <div class="col-md-10">
                                                                    demo
                                                                </div>

                                                            </th>
                                                            <td>
                                                                <!--                                            <label class="form-control-label" for="input-number">Quantity</label>-->
                                                                <div class="col-md-6">
                                                                    <input type="number" id="input-username"
                                                                           class="form-control form-control-alternative" placeholder="12"
                                                                           value="Name">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-md-6">
                                                                    12
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <i class="fas fa-check-square"></i>
                                                                <i class="fas fa-times-circle">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <!--                                            /argon/-->
                                                                <div class="col-md-10">
                                                                    <input type="text" id="input-username"
                                                                           class="form-control form-control-alternative" placeholder="Name"
                                                                           value="Name">
                                                                </div>

                                                            </th>
                                                            <td>
                                                                <!--                                            <label class="form-control-label" for="input-number">Quantity</label>-->
                                                                <div class="col-md-6">
                                                                    <input type="number" id="input-number"
                                                                           class="form-control form-control-alternative"
                                                                           placeholder="Quantity" value="2">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="col-md-6">
                                                                    <input type="text" id="input-username"
                                                                           class="form-control form-control-alternative" placeholder="Price"
                                                                           value="670">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <i class="fas fa-check-square"></i>
                                                                <i class="fas fa-times-circle">

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-lg-6 add_cont">
                                                            <i class="fas fa-plus"></i>
                                                            <a href="#">Add another line</a>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Subtotal
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="form-group">
                                                                0.00
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">

                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Discount


                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <div class="form-group">
                                                                <input type="number" id="input-username"
                                                                       class="form-control form-control-alternative" placeholder="12">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Shipping
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <div class="form-group">
                                                                <input type="number" id="input-username"
                                                                       class="form-control form-control-alternative" placeholder="12">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <hr>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group total">
                                                                Total
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 total">
                                                            <div class="form-group">
                                                                0.00
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Payment
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <div class="form-group">
                                                                <input type="number" id="input-username"
                                                                       class="form-control form-control-alternative" placeholder="12">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                Due
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="form-group">
                                                                0.00
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- end of main content-->


                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <!-- Save -->
                                                    <div class="col text-left">
                                                        <a href="#" class="btn btn-md btn-primary sales_button">Save</a>
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







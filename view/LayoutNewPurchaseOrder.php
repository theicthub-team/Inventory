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

                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0 font-weight-bold text-uppercase">New Purchase Order</h3>
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
                                        <label class="form-control-label"  for="input-username">Vendor Name </label>
                                        <i class="fas fa-search"></i>
                                        <input type="text" id="input-username"
                                               class="form-control form-control-alternative" placeholder="Vendor Name"
                                               value="Vendor Name">


                                    </div>

                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group deliver">
                                        Deliver To <i class="far fa-dot-circle"><span class="text">Customer</span></i><i class="fas fa-dot-circle"><span class="text">Organization</span></i>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text-area">Warehouse Address</label>
                                        <input type="addres" id="input-username"
                                               class="form-control form-control-alternative" placeholder="Warehouse Address"
                                               value="Warehouse Address">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text-area"> New Warehouse Address</label>
                                        <input type="addres" id="input-username"
                                               class="form-control form-control-alternative" placeholder=" New Warehouse Address"
                                               value="New Warehouse Address">

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Refrence</label>
                                        <input type="text" id="input-text"
                                               class="form-control form-control-alternative" placeholder="Refrence"
                                               value="Refrence">

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Purchase Order</label>
                                        <input type="text" id="input-text"
                                               class="form-control form-control-alternative" placeholder="Purchase Order"
                                               value="Purchase Order">

                                    </div>

                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-date">Date</label>
                                        <input type="date" id="input-date"
                                               class="form-control form-control-alternative" placeholder="Date"
                                               value="Date">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-date">Expected Date</label>
                                        <input type="date" id="input-date"
                                               class="form-control form-control-alternative" placeholder="Expected Date"
                                               value="Expected Date">

                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-control-label"  for="input-username">Shipment Preferance </label>

                                        <input type="text" id="input-username"
                                               class="form-control form-control-alternative" placeholder="Shipment Preferance"
                                               value="Shipment Preferance">


                                    </div>

                                </div>



                            </div>



                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Item Details</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Tax</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
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
                                                       class="form-control form-control-alternative" placeholder="Tax"
                                                       value="670">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <input type="text" id="input-username"
                                                       class="form-control form-control-alternative" placeholder="Rate"
                                                       value="670">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <input type="text" id="input-username"
                                                       class="form-control form-control-alternative" placeholder="Amount"
                                                       value="670">
                                            </div>
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
                                                       class="form-control form-control-alternative" placeholder="Tax"
                                                       value="670">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <input type="text" id="input-username"
                                                       class="form-control form-control-alternative" placeholder="Rate"
                                                       value="670">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <input type="text" id="input-username"
                                                       class="form-control form-control-alternative" placeholder="Amount"
                                                       value="670">
                                            </div>
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
                                                       class="form-control form-control-alternative" placeholder="Tax"
                                                       value="670">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <input type="text" id="input-username"
                                                       class="form-control form-control-alternative" placeholder="Rate"
                                                       value="670">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <input type="text" id="input-username"
                                                       class="form-control form-control-alternative" placeholder="Amount"
                                                       value="670">
                                            </div>
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
                                                       class="form-control form-control-alternative" placeholder="Tax"
                                                       value="670">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <input type="text" id="input-username"
                                                       class="form-control form-control-alternative" placeholder="Rate"
                                                       value="670">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <input type="text" id="input-username"
                                                       class="form-control form-control-alternative" placeholder="Amount"
                                                       value="670">
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr>

                                <div class="row">
                                    <div class="col-lg-6 add_cont">
                                        <i class="fas fa-plus"></i>
                                        <a href="#">Add another line  |  <i class="fas fa-plus"></i>  <span class="plus_text">Add another bulk</span></a>
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
                                            Shipping
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            0.00
                                        </div>
                                    </div>
                                </div>
                                <hr>

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


                                <hr class="my-4"/>
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




    <?php include 'footer.php'; ?>







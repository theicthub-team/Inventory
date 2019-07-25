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
                                    <h3 class="mb-0">Stock List</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="LayoutNewStock.php" class="btn btn-sm btn-primary">Add New</a>
                                    <a href="LayoutAdjustStock.php" class="btn btn-sm btn-success">Preview</a>
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
                                    <th scope="col">Select</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">SKU</th>
                                    <th scope="col">Purchase Price(BDT)</th>
                                    <th scope="col">Selling Price(BDT)</th>
                                    <th scope="col">Reorder Level</th>
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
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" >
                                            <label class="custom-control-label" for="customCheck2"></label>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" >
                                            <label class="custom-control-label" for="customCheck3"></label>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4" >
                                            <label class="custom-control-label" for="customCheck4"></label>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5" >
                                            <label class="custom-control-label" for="customCheck5"></label>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6" >
                                            <label class="custom-control-label" for="customCheck6"></label>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7" >
                                            <label class="custom-control-label" for="customCheck7"></label>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8" >
                                            <label class="custom-control-label" for="customCheck8"></label>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9" >
                                            <label class="custom-control-label" for="customCheck9"></label>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10" >
                                            <label class="custom-control-label" for="customCheck10"></label>
                                        </div>
                                    </td>
                                    <th scope="row">
                                        Samsung Note 9
                                    </th>
                                    <td>
                                        M007FKU
                                    </td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        50000
                                    </td>
                                    <td>
                                        Highly
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end of main content-->

        </div>
    </div>


</div>




<?php include 'footer.php'; ?>





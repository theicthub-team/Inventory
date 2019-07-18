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
                        <h3 class="mb-0 font-weight-bold text-uppercase">New Invoice</h3>
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




    <?php include 'footer.php'; ?>








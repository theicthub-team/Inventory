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
                        <h3 class="mb-0 font-weight-bold text-uppercase">New Stock</h3>
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
                                        <label class="form-control-label" for="input-username">Product Name</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Product Name" value="Product Name">

                                    </div>

                                </div>
                                <div class="col-lg-4 square">
                                    <div class="form-group">
                                        <div class="more">
                                            <i class="fas fa-plus-square"></i>
                                        </div>

                                    </div>

                                </div>



                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Location</label>
                                        <input type="text" id="input-text" class="form-control form-control-alternative" placeholder="Location" value="Location">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">

                                        <div class="stock_uploader text-center">
                                            <!--  <img src="assets/img/stockpic.jpg" alt="layoutNewStock"> -->
                                            <i class="fas fa-link"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">SKU</label>
                                        <input type="text" id="input-text" class="form-control form-control-alternative" placeholder="SKU" value="SKU">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">Quantity</label>
                                        <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Quantity" value="Quantity">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Unit</label>
                                        <input type="text" id="input-text" class="form-control form-control-alternative" placeholder="Unit" value="Unit">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">Purchase Price</label>
                                        <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Purchase Price" value="Purchase Price">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">Selling Price</label>
                                        <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Selling Price" value="Selling Price">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Re-Order Point</label>
                                        <input type="text" id="input-text" class="form-control form-control-alternative" placeholder="Re-Order Point" value="Re-Order Point">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Attribute</h6>
                        <div class="pl-lg-4">


                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">Height</label>
                                        <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Height" value="Height">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">Weight</label>
                                        <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Weight" value="Weight">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-text">Color</label>
                                        <input type="text" id="input-text" class="form-control form-control-alternative" placeholder="Color" value="Color">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">Size</label>
                                        <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Size" value="Size">
                                    </div>

                                </div>

                            </div>

                        </div>
                        <hr class="my-4" />
                        <!-- Save -->
                        <div class="col text-left">
                            <a href="#" class="btn btn-md btn-primary">Save</a>
                            <a href="#" class="btn btn-md btn-primary">Cancel</a>

                        </div>


                    </form>
                </div>

                <!-- end of main content-->

            </div>
        </div>


    </div>




    <?php include 'footer.php'; ?>








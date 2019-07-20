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
                        <h3 class="mb-0 font-weight-bold text-uppercase">New Item</h3>
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
                                        <label class="form-control-label" for="input-username">Item Name</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Product Name" value="Item Name">

                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Category</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Product Name" value="Item Name">

                                    </div>

                                </div>

                            </div>



                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Category</label>
                                        <div class="input-group-text">Category<i class="fas fa-chevron-down"></i></div>

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">

                                        <div class="category ">
                                            <!--  <img src="assets/img/stockpic.jpg" alt="layoutNewStock"> -->
                                            <i class="fas fa-plus-square"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Brand</label>
                                        <div class="input-group-text">Brand<i class="fas fa-chevron-down brand"></i></div>

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">

                                        <div class="category ">
                                            <!--  <img src="assets/img/stockpic.jpg" alt="layoutNewStock"> -->
                                            <i class="fas fa-plus-square"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <hr class="my-4" />
                            <!-- Save -->
                            <div class="col text-left">
                                <a href="#" class="btn btn-md btn-primary">Save</a>
                                <a href="#" class="btn btn-md btn-info">Cancel</a>
                            </div>


                    </form>
                </div>
            </div>



            </form>
        </div>


        <!-- end of main content-->

    </div>
</div>


</div>


<?php include 'footer.php'; ?>







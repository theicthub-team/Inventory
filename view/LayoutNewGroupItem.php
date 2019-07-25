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
                        <h3 class="mb-0 font-weight-bold text-uppercase">New Group Item</h3>
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
                                        <label class="form-control-label" for="input-username">Item Group Name</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Product Name" value="Product Name">

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-date">Starting Date</label>
                                        <input type="date" id="input-date" class="form-control form-control-alternative" placeholder="Starting Date" value="Starting Date">

                                    </div>

                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-date">Ending Date</label>
                                        <input type="date" id="input-date" class="form-control form-control-alternative" placeholder="Ending Date" value="Ending Date">

                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Price</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Price" value="Price">

                                    </div>

                                </div>

                            </div>

                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            /argon/

                                        </th>
                                        <td>
                                            2
                                        <td>
                                            16000
                                        </td>
                                        <td>
                                            <i class="fas fa-check-square"></i>
                                            <i class="fas fa-times-circle">

                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            /argon/

                                        </th>
                                        <td>
                                            2
                                        <td>
                                            16000
                                        </td>
                                        <td>
                                            <i class="fas fa-check-square"></i>
                                            <i class="fas fa-times-circle">

                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            /argon/

                                        </th>
                                        <td>
                                            2
                                        <td>
                                            16000
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
                                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Name" value="Name">
                                            </div>

                                        </th>
                                        <td>
                                            <!--                                            <label class="form-control-label" for="input-number">Quantity</label>-->
                                            <div class="col-md-6">
                                                <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="Quantity" value="2">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-6">
                                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Price" value="670">
                                            </div>
                                        </td>
                                        <td>
                                            <i class="fas fa-check-square"></i>
                                            <i class="fas fa-times-circle">

                                        </td>
                                    </tr>




                                    </tbody>
                                </table>


                            </div>
                        </div>



                        <!-- end of main content-->
                        <div class="col-lg-6 add_cont">
                            <i class="fas fa-plus"></i>
                            <a href="#">Add another line</a>
                        </div>



                        <hr class="my-4" />
                        <!-- Save -->
                        <div class="col text-left">
                        <a href="#" class="btn btn-md btn-primary save_button">Save</a>
                        <a href="#" class="btn btn-md btn-info cancel_button">Cancel</a>

                </div>




                </form>
                </div>

                <!-- end of main content-->

            </div>
        </div>


    </div>




    <?php include 'footer.php'; ?>







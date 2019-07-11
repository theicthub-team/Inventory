<?php include 'header.php'; ?>
<body class="">
<?php include 'sidenav.php'; ?>
<div class="main-content">
    <?php include 'navbar.php'; ?>

    <!-- main content here -->

<!--    <div class="header pt-5">-->
<!--        <div class="container-fluid">-->
<!--            <div class="header-body">-->
<!--                <!-- Card stats -->-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="container-fluid mt--7 pb-8 pt-5 pt-md-8">
        <!-- main content here -->

        <div class="row box_container">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0 font-weight-bold text-uppercase">New Contact</h3>
                    </div>
                </div>

                <div class="card-body">

                    <form>
<!--                        Contact Type-->
                        <h6 class="heading-small text-muted mb-4 ">Contact Type</h6>

                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Full Name</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="First name + Last Name" value="First name + Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email address</label>
                                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="user@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Company Name</label>
                                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Company Name" value="Company Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Contact Display Name</label>
                                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Contact Display Name" value="Contact Display Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Contact information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Address</label>
                                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">City</label>
                                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Country</label>
                                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Postal code</label>
                                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Contact Phone</label>
                                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="+8801XXXXXXXXX" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Save -->
                        <div class="col text-right">
                            <a href="#" class="btn btn-md btn-primary">Add Contact</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>

        <!-- end of main content-->
    </div>



    <!-- end of main content-->


</div>
<?php include 'footer.php'; ?>



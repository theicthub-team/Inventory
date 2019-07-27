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
                        <!--                        Contact Type-->




                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                        <label class="form-control-label" for="input-text">Item Name</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Item Name" value="Item Name">
                                        </div>

                                        <label class="form-control-label" for="input-username">Category</label>
                                        <select  class="form-control form-control-alternative ">
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                        <i class="far fa-plus-square square_item"></i>

                                        <label class="form-control-label" for="input-username">Brand</label>
                                        <div class="input-group-text vendor">Brand<i class="fas fa-chevron-down down_brand "></i> <i class="far fa-plus-square square_brand"></i></div>
                                        <label class="form-control-label " for="input-text">Tax</label>
                                        <input type="text" id="input-text" class="form-control form-control-alternative " placeholder="Tax">


                                    </div>
                                </div>


                                <div class="col-lg-6 ">
                                    <div class="form-group category_and_brand">

                                        <label class="form-control-label " for="input-text">Category
                                            <a href="#" class="btn btn-md btn-primary addnew_cate"><i class="fas fa-plus cat_new"></i>New</a></label>

                                        <input type="text" id="input-text" class="form-control form-control-alternative category_item" placeholder="">

                                        <label class="form-control-label " for="input-text">Brand
                                            <a href="#" class="btn btn-md btn-primary addnew_brand"><i class="fas fa-plus cat_new"></i>New</a></label>
                                        <input type="text" id="input-text" class="form-control form-control-alternative category_item" placeholder="">


                                    </div>
                                </div>
                            </div>

                            <!--                            <div class="row">-->
                            <!---->
                            <!--                                <div class="col-lg-6">-->
                            <!--                                    <div class="form-group text-right">-->
                            <!--                                        <label class="form-control-label" for="input-last-name">Brand</label>-->
                            <!--                                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Contact Display Name" value="Contact Display Name">-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
<!--                        <h6 class="heading-small text-muted mb-4">Contact information</h6>-->
                        <div class="pl-lg-4">

                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-number">UPC(if any) </label>
                                            <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="UPC " value="UPC ">
                                            </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">MPN(if any) </label>
                                        <input type="number" id="input-number" class="form-control form-control-alternative" placeholder="MPN " value="MPN ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">EAN(if any)</label>
                                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="EAN">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">ISBN(if any)</label>
                                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="ISBN">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">Selling Price</label>
                                        <input id="input-number" class="form-control form-control-alternative" placeholder="Selling Price" value="Selling Price" type="number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-number">Purchase Price</label>
                                        <input id="input-number" class="form-control form-control-alternative" placeholder="Purchase Price" value="Purchase Price" type="number">
                                    </div>
                                </div>
                            </div>
                        </div>

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







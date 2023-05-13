<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Input Masks | Velzon - Admin & Dashboard Template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>

    </head>

    <?php include 'layouts/body.php'; ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include 'layouts/menu.php'; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Input Masks</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Input Masks</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Examples</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <form action="#">
                                            <div>
                                                <h5 class="fs-14 mb-3 text-muted">Date Formatting</h5>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="cleave-date" class="form-label">Date</label>
                                                            <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="cleave-date">
                                                        </div>
                                                        
                                                    </div><!-- end col -->
    
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="cleave-date-format" class="form-label">Date Formatting</label>
                                                            <input type="text" class="form-control" placeholder="MM/YY" id="cleave-date-format">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div>

                                            <div class="border mt-3 border-dashed"></div>

                                            <div class="mt-4">
                                                <h6 class="mb-3 fs-14 text-muted">Time Formatting</h6>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="cleave-time" class="form-label">Time</label>
                                                            <input type="text" class="form-control" placeholder="hh:mm:ss" id="cleave-time">
                                                        </div>
                                                        
                                                    </div><!-- end col -->
    
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="cleave-time-format" class="form-label">Time Formatting</label>
                                                            <input type="text" class="form-control" placeholder="hh:mm" id="cleave-time-format">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div>

                                            <div class="border mt-3 border-dashed"></div>

                                            <div class="mt-4">
                                                <h5 class="fs-14 mb-3 text-muted">Custom Options</h5>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="cleave-ccard" class="form-label">Credit Card</label>
                                                            <input type="text" class="form-control" id="cleave-ccard" placeholder="xxxx xxxx xxxx xxxx">
                                                        </div>
                                                        
                                                    </div><!-- end col -->
    
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="cleave-delimiter" class="form-label">Delimiter</label>
                                                            <input type="text" class="form-control" id="cleave-delimiter" placeholder="xxx·xxx·xxx">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->

                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="cleave-delimiters" class="form-label">Delimiters</label>
                                                            <input type="text" class="form-control" id="cleave-delimiters" placeholder="xxx.xxx.xxx-xx">
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="cleave-prefix" class="form-label">Prefix</label>
                                                            <input type="text" class="form-control" id="cleave-prefix">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->

                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3 mb-xl-0">
                                                            <label for="cleave-phone" class="form-label">Phone</label>
                                                            <input type="text" class="form-control" id="cleave-phone" placeholder="(xxx)xxx-xxxx">
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-xl-6">
                                                        <div class="mb-0">
                                                            <label for="cleave-numeral" class="form-label">Numeral Formatting</label>
                                                            <input type="text" class="form-control" placeholder="Enter numeral" id="cleave-numeral">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row -->

                                            </div>
                                        </form><!-- end form -->
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- @@include("partials/right-sidebar.php") -->

        

        <?php include 'layouts/customizer.php'; ?>

        <?php include 'layouts/vendor-scripts.php'; ?>

        <!-- cleave.js -->
        <script src="assets/libs/cleave.js/cleave.min.js"></script>
        <!-- form masks init -->
        <script src="assets/js/pages/form-masks.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>

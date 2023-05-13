<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Leaflet Maps | Velzon - Admin & Dashboard Template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <!-- leaflet Css -->
        <link href="assets/libs/leaflet/leaflet.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-sm-0">Leaflet</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                            <li class="breadcrumb-item active">Leaflet</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Example</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="leaflet-map" class="leaflet-map"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Markers, Circles and Polygons</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="leaflet-map-marker" class="leaflet-map"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Working with Popups</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="leaflet-map-popup" class="leaflet-map"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Markers with Custom Icons</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Interactive Choropleth Map</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="leaflet-map-interactive-map" class="leaflet-map"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Layer Groups and Layers Control</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="leaflet-map-group-control" class="leaflet-map"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <?php include 'layouts/customizer.php'; ?>

        <?php include 'layouts/vendor-scripts.php'; ?>

        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>

        <!-- leaflet plugin -->
        <script src="assets/libs/leaflet/leaflet.js"></script>

        <!-- leaflet map.init -->
        <script src="assets/js/pages/leaflet-us-states.js"></script>
        <script src="assets/js/pages/leaflet-map.init.js"></script>        
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>
<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Range Slider | Velzon - Admin & Dashboard Template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <!-- nouisliderribute css -->
        <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">

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
                                    <h4 class="mb-sm-0">Range Slider</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Advance UI</a></li>
                                            <li class="breadcrumb-item active">Range Slider</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Examples</h4>
                                        <div class="flex-shrink-0">
                                            <div class="form-check form-switch form-switch-right form-switch-md">
                                                <label for="example-showcode" class="form-label text-muted">Show Code</label>
                                                <input class="form-check-input code-switcher" type="checkbox" id="example-showcode">
                                            </div>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">

                                        <p class="text-muted mb-4">noUiSlider is a lightweight JavaScript range slider</p>

                                        <div class="live-preview">
                                            <div>
                                                <div class="mb-5">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-3">
                                                            <h5 class="fs-14">Basic Example</h5>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-9">
                                                            <div id="slider"></div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div>
    
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h5 class="fs-14">Colorpicker</h5>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-9">
                                                            <div class="sliders" id="red"></div>
                                                            <div class="sliders" id="green"></div>
                                                            <div class="sliders" id="blue"></div>
                                                
                                                            <div id="result"></div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div>
    
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h5 class="fs-14">Using HTML5 Input Elements</h5>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-9">
                                                            <div id="html5"></div>
                                                            <div class="d-flex flex-wrap">
                                                                <select id="input-select" class="form-select shadow-none"></select>
                                                                <input type="number" class="form-control shadow-none" min="-20" max="40" step="1" id="input-number">
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div>
    
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h5 class="fs-14">Non linear slider</h5>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-9">
                                                            <div id="nonlinear"></div>
                                                            <span class="example-val" id="lower-value"></span>
                                                            <span class="example-val" id="upper-value"></span>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div>
    
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h5 class="fs-14">Locking sliders together</h5>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-9">
                                                            <div class="slider" id="slider1"></div>
                                                            <span class="example-val mt-2" id="slider1-span"></span>
                
                                                            <div class="slider" id="slider2"></div>
                                                            <span class="example-val mt-2" id="slider2-span"></span>
                
                                                            <button id="lockbutton" class="btn btn-primary" style="float: right; margin: 20px 0 0;">Lock</button>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div>
    
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h5 class="fs-14">Only showing tooltips when sliding handle</h5>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-9">
                                                            <div class="slider" id="slider-hide"></div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row-->
                                                </div>
    
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h5 class="fs-14">Colored Connect Elements</h5>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-9">
                                                            <div class="slider" id="slider-color"></div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div>
    
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h5 class="fs-14">Creating a toggle</h5>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-9">
                                                            <div id="slider-toggle"></div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div>
    
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h5 class="fs-14">Soft limits</h5>
                                                        </div><!-- end col -->
                                                        <div class="col-lg-9">
                                                            <div id="soft"></div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-none code-view">
                                            <pre>
<code class="language-markup">
&lt;!-- With Icon Box --&gt;
&lt;div class=&quot;alert alert-success alert-dismissible alert-solid alert-label-icon fade show&quot; role=&quot;alert&quot;&gt;
    &lt;i class=&quot;mdi mdi-check-all label-icon&quot;&gt;&lt;/i&gt;&lt;strong&gt;Success&lt;/strong&gt; - Label icon alert
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                        </div>
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

        <!-- nouisliderribute js -->
        <script src="assets/libs/nouislider/nouislider.min.js"></script>
        <script src="assets/libs/wnumb/wNumb.min.js"></script>
        <!-- range slider init -->
        <script src="assets/js/pages/range-sliders.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>
<?php include 'layouts/session.php';
include 'layouts/head-main.php';


if (isset($_POST['username'])) {
    $ADMIN_NAME = $_POST['name'];
    $ADMIN_USERNAME = $_POST['username'];
    $ADMIN_PASS = $_POST['Password'];


    $sql = mysqli_query($pdo, "UPDATE admin SET ADMIN_NAME = '$ADMIN_NAME', ADMIN_USER = '$ADMIN_USERNAME',
        ADMIN_PASS = '$ADMIN_PASS' WHERE ADMIN_ID = '$user_id' ") ;

    $desired_dir="../assets/img/admin/$user_id";

    if (is_dir($desired_dir)==false) {
        mkdir("$desired_dir");		// Create directory if it does not exist
    }

    if ($_FILES['fileField']['tmp_name'] != "") {
        $newname = "1.jpg";
        move_uploaded_file($_FILES['fileField']['tmp_name'], "$desired_dir/$newname");
    }
}

?> 



 <style>
.glow {
 background-image: url("./assets/images/admin/move.gif");
  font-size: 35px;
  color: #fff;
  text-align: center;
  background-size: cover;
  color: transparent;
  -moz-background-clip: text;
  -webkit-background-clip: text;
  text-transform: uppercase;
 font-family: 'Comic Neue', cursive;
  margin: 5px 0;

}

.glow1 {
	 background-image: url("./assets/images/admin/move.gif");
  font-size: 55px;
  color: #fff;
  text-align: center;
  background-size: cover;
  color: transparent;
  -moz-background-clip: text;
  -webkit-background-clip: text;
  text-transform: uppercase;
  font-family: 'Allerta Stencil';
  margin: 5px 0;

}

.glow2 {
 background-image: url("./assets/images/admin/move.gif");
  font-size: 56px;
  color: #fff;
  text-align: center;
  background-size: cover;
  color: transparent;
  -moz-background-clip: text;
  -webkit-background-clip: text;
  text-transform: uppercase;
  font-family:  'Kanit', sans-serif;
  margin: 5px 0;

}
.info-box1 {
    background-color: #000000;
}
</style>
    <head>
	<div id="layout-wrapper">
        
        <title>Paneelbord</title>
        <?php include 'layouts/title-meta.php'; ?>

        <!-- jsvectormap css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

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
                                <h4 class="mb-sm-0">Paneelbord</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paneelbord</a></li>
                                        <li class="breadcrumb-item active">Paneelbord</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Jesus Leef <span style="font-weight:700; color: #26c126;"><?php echo $admin_name; ?></span> !</h4>
                                                <p class="text-muted mb-0">Welkom hier vandag</p>
                                            </div>
                                            
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
									<div class="contentpanel">
										<center>
											<div >
												<img src="./assets/images/admin/vis.png" width="250px" height="140px">
												<img src="./assets/images/admin/pry.jpg" width="140px" height="140px">
												<img src="./assets/images/admin/pry1.png" width="140px" height="140px" color="lime">
												<img src="./assets/images/admin/3bid.png" width="140px" height="140px">
												<img src="./assets/images/admin/faith.png" width="140px" height="140px">
												<img src="./assets/images/admin/hope.png" width="140px" height="140px">
												<img src="./assets/images/admin/love.png" width="140px" height="140px">
												<img src="./assets/images/admin/hart.png" width="140px" height="140px">
												<img src="./assets/images/admin/vis.png" width="250px" height="140px">
												<img src="./assets/images/admin/bybel.png" width="140px" height="140px">
										</div>		 
												<br><br><br><br> 
										<div class="glow">
											<h1 class="glow">1 Joh 1:1. In die begin was die Woord, en die Word was by God, en die Word was God.</h1>
										</div>
											<br><br>
										<div class="glow1">
											<h1 class="glow1">Jesus Christ is Lord Not a swear word</h1>
										</div>
										<div class="glow2">
											<h2 class="glow2">He is the truth the way and the life</h2>
										</div> 
									</div><!-- contentpanel -->
							</div><!-- mainpanel -->


                        </div> <!-- end .h-100-->

                    </div> <!-- end col -->


                </div>

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

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
        
        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
		
		
		
		<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="jassets/s/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/js/retina.min.js"></script>
        <script src="assets/js/jquery.cookies.js"></script>
        
        <script src="assets/js/flot/jquery.flot.min.js"></script>
        <script src="assets/js/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/js/flot/jquery.flot.spline.min.js"></script>
        <script src="assets/js/jquery.sparkline.min.js"></script>
        <script src="assets/js/morris.min.js"></script>
        <script src="assets/js/raphael-2.1.0.min.js"></script>
        <script src="assets/js/bootstrap-wizard.min.js"></script>
        <script src="assets/js/select2.min.js"></script>

        <script src="assets/js/custom.js"></script>
        <script src="assets/js/dashboard.js"></script>
    </body>

</html>
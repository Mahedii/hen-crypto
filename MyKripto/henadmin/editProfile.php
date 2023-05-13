<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php
    if(isset($_POST['update_admin'])){
    
        $ADMIN_NAME = $_POST['admin_name'];
        $ADMIN_USERNAME = $_POST['admin_user'];
        $ADMIN_PASS = $_POST['admin_pass'];
        
        // exit;
        $sql = mysqli_query($pdo,"UPDATE admin SET admin_name = '$ADMIN_NAME', admin_user = '$ADMIN_USERNAME',
        admin_pass = '$ADMIN_PASS' WHERE admin_id = '$adminID' ") ;

        $desired_dir="assets/images/admin/$adminID";
            
        if(is_dir($desired_dir)==false){
            mkdir("$desired_dir");		// Create directory if it does not exist
        }
        
        if ($_FILES['fileField']['tmp_name'] != ""){

            $newname = "1.jpg";
            move_uploaded_file($_FILES['fileField']['tmp_name'], "$desired_dir/$newname");

        } 

        header("location: adminSetup.php");
        
        
    }
    
?>

<head>

    <title>Admin Dashboard</title>
    <?php include 'layouts/title-meta.php'; ?>

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

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
                            <h4 class="mb-sm-0">Admin Setup</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                    <li class="breadcrumb-item active">Update Admin</li>
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
                                <h5 class="card-title mb-0">Wysig persoonlike inligting</h5>
                            </div>
                            <div class="card-body">
                                <form action="editProfile.php" method="post" name="testform" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Naam</label>
                                        <input type="text" name="admin_name" class="form-control" value="<?php echo $admin_name ?>" placeholder="Tik jou naam hier in..." required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gebruiker Naam</label>
                                        <input type="text" name="admin_user" class="form-control" value="<?php echo $ADMIN_USER ?>" placeholder="Tik jou gebruiker Naam hier in..." required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Wagwoord</label>
                                        <input type="password" name="admin_pass" class="form-control" value="<?php echo $ADMIN_PASS ?>" placeholder="Tik jou wagwoord hier in..." required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Prent</label>
                                        <input type="file" name="fileField" class="form-control" />
                                        <img src="assets/images/admin/<?php echo $user_id ?>/1.jpg" height="180" width="180" />
                                    </div>
                                    
                                    <div class="text-end">
                                        <button type="submit" name="update_admin" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="assets/js/pages/datatables.init.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>
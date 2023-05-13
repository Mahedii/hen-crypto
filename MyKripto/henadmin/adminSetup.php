<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php

    $mes = "";
    
    if (isset($_GET['mes'])) {

        $mes = $_GET["mes"];
    }

?>




<?php
    if (isset($_GET['yes'])) {



            echo $id_to_delete = $_GET['yes'];
            $sql = mysqli_query($pdo, " DELETE FROM admin WHERE admin_id ='$id_to_delete' LIMIT 1 ") or die(mysqli_error($pdo));

            $sporttodelete = ("assets/images/admin/$id_to_delete/1.jpg");
            if (file_exists($sporttodelete)) {
                unlink($sporttodelete);
            }

            header("location: adminSetup.php");
        
    }


    if (isset($_POST['admin_user'])) {

        $admin_user =$_POST['admin_user'];

        $admin_name = $_POST['admin_name'];
        
        $admin_pass = $_POST['admin_pass'];


        $sqlt = mysqli_query($pdo, " SELECT * FROM  admin where admin_user='$admin_user' ");
        $productCountt = mysqli_num_rows($sqlt);

        if ($productCountt > 0) {
            $mes = 3;
        } 
        else {
            
                $sql = mysqli_query($pdo, " INSERT INTO admin (admin_name, admin_user, admin_pass) 
                    VALUES('$admin_name', '$admin_user', '$admin_pass')") or die(mysqli_error($pdo));

                $pid = mysqli_insert_id($pdo);
                // $newname = "$pid.jpg";

                if (!file_exists('assets/images/admin/'.$pid)) {
                    mkdir('assets/images/admin/'.$pid, 0777, true);
                }

                move_uploaded_file($_FILES['fileField']['tmp_name'], "assets/images/admin/$pid/1.jpg");

                header("location: adminSetup.php?mes=1");
            
        }
    }


    function do_alert($msg)
    {
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }


    if ($mes == 1) {
        do_alert("Suksesvol bygevoeg");
    }


    if ($mes == 3) {
        do_alert("Reeds bygevoeg");
    }


    if ($mes == 5) {
        do_alert("Jy is nie gemagtig vir hierdie taak nie");
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
                                    <li class="breadcrumb-item active">Create Admin</li>
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
                                <h5 class="card-title mb-0">Skep 'n nuwe admin</h5>
                            </div>
                            <div class="card-body">
                                <form action="adminSetup.php" method="post" name="testform" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Naam</label>
                                        <input type="text" name="admin_name" class="form-control" placeholder="Tik jou naam hier in..." required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gebruiker Naam</label>
                                        <input type="text" name="admin_user" class="form-control" placeholder="Tik jou gebruiker Naam hier in..." required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Wagwoord</label>
                                        <input type="password" name="admin_pass" class="form-control" placeholder="Tik jou wagwoord hier in..." required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Prent</label>
                                        <input type="file" name="fileField" class="form-control" required />
                                    </div>
                                    
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Dien in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Admin Lys</h5>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Naam</th>
                                            <th>Gebruiker Naam</th>
                                            <th>Wagwoord</th>
                                            <th>Aksie</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $result = mysqli_query($pdo, " SELECT * FROM admin ORDER BY admin_id ");
                                            $row = mysqli_fetch_array($result);

                                            do { ?> 

                                                <tr>
                                                    <td><?php echo $row["admin_name"]; ?></td>
                                                    <td><?php echo $row["admin_user"]; ?></td>
                                                    <td><?php echo $row["admin_pass"]; ?></td>
                                                    <td>
                                                        <a href="adminSetup.php?yes=<?php echo $row["admin_id"]; ?>" onclick="return confirm('Is jy seker jy wil dit skrap?')" data-toggle="tooltip" title="Delete" class="delete-row tooltips">
                                                            <i class="ri-delete-bin-fill align-bottom me-2"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <?php 

                                            } while ($row = mysqli_fetch_array($result));
                                            
                                        ?>

                                    </tbody>
                                </table>
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
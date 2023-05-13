<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

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
                            <h4 class="mb-sm-0">Coins</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Coingecko</a></li>
                                    <li class="breadcrumb-item active">All Coins</li>
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
                                <h5 class="card-title mb-0">Beskikbare Coingecko munte lys</h5>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Munt No</th>
                                            <th>Munt ID</th>
                                            <th>Munt Simbool</th>
                                            <th>Munt Naam</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $result = mysqli_query($pdo, " SELECT * FROM cgo_munt_lys ORDER BY ID ASC ");
                                            $row = mysqli_fetch_array($result);
                                            $i = 1;

                                            do { ?> 

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row["COINGECKO_ID"]; ?></td>
                                                    <td><?php echo $row["SYMBOL"]; ?></td>
                                                    <td><?php echo $row["NAME"]; ?></td>
                                                </tr>

                                                <?php 

                                                $i++;

                                            } while ($row = mysqli_fetch_array($result));
                                            
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Geldeenheid Kodes</h5>
                            </div>
                            <div class="card-body">
                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Geldeenheid No</th>
                                            <th>Geldeenheid Kode</th>
                                            <th>Land</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $result1 = mysqli_query($pdo, " SELECT * FROM currency_codes ORDER BY ID ASC ");
                                            $row1 = mysqli_fetch_array($result1);
                                            $j = 1;

                                            do { ?> 

                                                <tr>
                                                    <td><?php echo $j; ?></td>
                                                    <td><?php echo $row1["CODE"]; ?></td>
                                                    <td><?php echo $row1["COUNTRY"]; ?></td>
                                                    
                                                </tr>

                                                <?php 

                                                $j++;

                                            } while ($row1 = mysqli_fetch_array($result1)); 
                                        ?>

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
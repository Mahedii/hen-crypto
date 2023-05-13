<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php

    if (isset($_GET['DELETE_COIN_SYMBOL'])) {

        $COIN_SYMBOL = $_GET['DELETE_COIN_SYMBOL'];

        $deleteSql = mysqli_query($pdo,"DELETE FROM cmc_my_munte WHERE COIN_SYMBOL = '$COIN_SYMBOL' "); 
        $deleteSql = mysqli_query($pdo,"DELETE FROM cmc_kry_my_munte WHERE COIN_SYMBOL = '$COIN_SYMBOL' "); 

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
                            <h4 class="mb-sm-0">Coins</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">CoinMarketCap</a></li>
                                    <li class="breadcrumb-item active">Change New Informations</li>
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
                                <h5 class="card-title mb-0">Beskikbare CoinMarketCap munte lys</h5>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>MUNT ID</th>
                                            <th>TOTALE MUNTE</th>
                                            <th>ADRES</th>
                                            <th>GRAFIEK</th>
                                            <th>BESTAAN MUNT NOG</th>
                                            <th>SKAKEL</th>
                                            <th>MUNT SKAKEL</th>
                                            <th>BLOKKETTING</th>
                                            <th>WAAR</th>
                                            <th>BEURSIE_NO</th>
                                            <th>BEURSIE</th>
                                            <th>GEVERIFIEER</th>
                                            <th>DATUM GEKOOP</th>
                                            <th>AKSIE</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $result = mysqli_query($pdo, " SELECT * FROM cmc_my_munte ORDER BY ID DESC ");
                                            $row = mysqli_fetch_array($result);
                                            $rowCount = mysqli_num_rows($result);
                                            $i = 1;

                                            if($rowCount>0){
                                                do { ?> 

                                                    <tr>
                                                        <td><?php echo $row["COIN_SYMBOL"]; ?></td>
                                                        <td><?php echo $row["TOTAL_COIN"]; ?></td>
                                                        <td><?php echo $row["ADDRESS"]; ?></td>
                                                        <td><?php echo $row["CHART"]; ?></td>
                                                        <td><?php echo $row["DEAD1"]; ?></td>
                                                        <td><?php echo $row["LINK"]; ?></td>
                                                        <td><?php echo $row["SITE"]; ?></td>
                                                        <td><?php echo $row["BLOCKCHAIN"]; ?></td>
                                                        <td><?php echo $row["WHERE_NOW"]; ?></td>
                                                        <td><?php echo $row["WALLET_NO"]; ?></td>
                                                        <td><?php echo $row["WALLET"]; ?></td>
                                                        <td><?php echo $row["VERIFIED"]; ?></td>
                                                        <td><?php echo $row["CREATED_AT"]; ?></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <!-- <li>
                                                                        <a target="_blank" href="" class="dropdown-item">
                                                                            <i class="ri-eye-fill align-bottom me-2 text-muted"></i>View
                                                                        </a>
                                                                    </li> -->
                                                                    <li>
                                                                        <a href="CMCverander.php?COIN_SYMBOL=<?php echo $row["COIN_SYMBOL"];?>" class="dropdown-item edit-item-btn">
                                                                            <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn delete-row tooltips" href="CMCinligting.php?DELETE_COIN_SYMBOL=<?php echo $row["COIN_SYMBOL"];?>" onclick="return confirm('Is jy seker jy wil <?php echo $row['COIN_SYMBOL'];?> munt verwyder?')" data-toggle="tooltip" title="Delete">
                                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <?php 

                                                    $i++;

                                                } while ($row = mysqli_fetch_array($result)); 
                                            }
                                            
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
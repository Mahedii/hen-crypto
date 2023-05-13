<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php

    if (isset($_GET['DELETE_COIN_ID'])) {

        $id = $_GET['DELETE_COIN_ID'];

        $deleteSql = mysqli_query($pdo,"DELETE FROM live_chart_coin_list_1 WHERE id = '$id' "); 

        header("location: LiveChartCoinList.php?status=Deleted");

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
                            <h4 class="mb-sm-0">Live chart coin list</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">LCCL</a></li>
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
                                      
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        
                                        <a href="lcclAdd.php" class="btn btn-success">
                                            <i class="ri-add-line align-bottom me-1"></i>Add New Coin
                                        </a>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Coin Name</th>
                                            <th>Platform</th>
                                            <th>Slug</th>
                                            <th>Symbol</th>
                                            <th>Tradingview Symbol</th>
                                            <th>Base Asset</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Jquery-->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <!--datatable js-->
                <!-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->
                <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

                <script>
                    $(document).ready(function() {
                        $('#example').DataTable({
                            "processing": true, // Enable processing indicator
                            "serverSide": true, // Enable server-side processing
                            "order": [[0, "desc"]],
                            "ajax": {
                                "url": "fetch_data.php?token=LiveChartCoinList_data", // Endpoint to fetch data from server
                                "type": "GET",
                                "data": function(d) {
                                    // Custom parameters to send with the request
                                    d.start = d.start || 0; // Starting index of the records for the current page
                                    d.length = d.length || 10; // Number of records to display per page
                                    d.search = d.search || {}; // Search object for searching/filtering
                                    d.search.value = d.search.value || ''; // Search keyword
                                    d.order = d.order || []; // Order array for sorting
                                    d.columns = d.columns || []; // Columns array for ordering
                                }
                            },
                            "columns": [
                                { "data": "id" },
                                { "data": "coin_name" },
                                { "data": "platform" },
                                { "data": "slug" },
                                { "data": "symbol" },
                                { "data": "tradingview_symbol" },
                                { "data": "baseAsset" },
                                {
                                    "data": null,
                                    "render": function(data, type, row) {
                                        // Render the action buttons
                                        return '<div class="dropdown d-inline-block">' +
                                                '<button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">' +
                                                '<i class="ri-more-fill align-middle"></i>' +
                                                '</button>' +
                                                '<ul class="dropdown-menu dropdown-menu-end">' +
                                                '<li>' +
                                                '<a target="_blank" class="dropdown-item edit-item-btn" href="lcclEdit.php?lccl_id=' + data.id + '">' +
                                                '<i class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit' +
                                                '</a>' +
                                                '</li>' +
                                                '<li>' +
                                                '<a class="dropdown-item remove-item-btn delete-row tooltips" href="LiveChartCoinList.php?DELETE_COIN_ID=' + data.id + '" onclick="return confirm(\'Do you want to delete this ' + data.id + ' coin permanently?\')" data-toggle="tooltip" title="Delete">' +
                                                '<i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete' +
                                                '</a>' +
                                                '</li>' +
                                                '</ul>' +
                                                '</div>';
                                    }
                                }
                            ]
                        });
                    });


                </script>


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
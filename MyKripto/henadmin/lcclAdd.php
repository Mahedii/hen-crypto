<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php
    if(isset($_POST['insert_coin'])){

        $id = $_POST['id'];
        $coin_name = $_POST['coin_name']; 
        $slug = $_POST['slug'];
        $symbol = $_POST['symbol'];	
        $platform = $_POST['platform'];		
        $tradingview_symbol = $_POST['tradingview_symbol'];  
        $baseAsset = $_POST['baseAsset']; 
        $quoteAsset = $_POST['quoteAsset'];  

        $sql = mysqli_query($pdo, " INSERT INTO live_chart_coin_list_1 (coin_name, slug, symbol, platform, tradingview_symbol, baseAsset, quoteAsset) 
                    VALUES('$coin_name', '$slug', '$symbol', '$platform', '$tradingview_symbol', '$baseAsset', '$quoteAsset')") or die(mysqli_error($pdo));
        
        $sql1 = mysqli_query($pdo, " INSERT INTO live_chart_coin_list (coin_name, slug, symbol, platform, tradingview_symbol, baseAsset, quoteAsset) 
                    VALUES('$coin_name', '$slug', '$symbol', '$platform', '$tradingview_symbol', '$baseAsset', '$quoteAsset')") or die(mysqli_error($pdo));

        header("location: LiveChartCoinList.php?status=Coin-Added");
        
        
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
                            <h4 class="mb-sm-0">LCCL Insert</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">LCCL</a></li>
                                    <li class="breadcrumb-item active">Insert LCCL</li>
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
                                <h5 class="card-title mb-0">Add Coin Information</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" name="testform" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Coin Name</label>
                                        <input type="text" name="coin_name" class="form-control"  />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control"  />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Simbool</label>
                                        <input type="text" name="symbol" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Platform</label>
                                        <input type="text" name="platform" class="form-control"  />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Tradingview Simbool</label>
                                        <input type="text" name="tradingview_symbol" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Base Asset</label>
                                        <input type="text" name="baseAsset" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Quote Asset</label>
                                        <input type="text" name="quoteAsset" class="form-control" />
                                    </div>
                                    
                                    <div class="text-end">
                                        <button type="submit" name="insert_coin" class="btn btn-primary">Add</button>
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
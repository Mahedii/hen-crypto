<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php 

    $mes="";
        
    if(isset($_GET['mes'])){
        
        $mes=$_GET["mes"];
    }


    $sql = mysqli_query($pdo,"SELECT * FROM api_currency ");

    $row = mysqli_fetch_array($sql);

    do{

        $NOMICS_API  = $row['NOMICS_API'];  
        $COINGECKO_API  = $row['COINGECKO_API'];
        $COINMARKETCAP_API  = $row['COINMARKETCAP_API'];
        $CURRENCY_API  = $row['CURRENCY_API'];
        $CONVERT_TO  = $row['CONVERT_TO'];

    }while($row = mysqli_fetch_array($sql));

 
    // Parse the form data and add inventory item to the system
    if (isset($_POST['update_api_Currency'])) {
        
        $NOMICS_API  = $_POST['NOMICS_API'];
        $COINGECKO_API  = $_POST['COINGECKO_API'];
        $COINMARKETCAP_API  = $_POST['COINMARKETCAP_API'];
        $CURRENCY_API  = $_POST['CURRENCY_API'];
        $CONVERT_TO  = $_POST['CONVERT_TO']; 




        $sql = mysqli_query($pdo,"UPDATE api_currency SET NOMICS_API ='$NOMICS_API', COINGECKO_API ='$COINGECKO_API',
        COINMARKETCAP_API ='$COINMARKETCAP_API', CURRENCY_API ='$CURRENCY_API', CONVERT_TO ='$CONVERT_TO' WHERE ID = '1' ");
    
        header("location: api&currency.php?mes=2");



    
    }

	
    function do_alert($msg){
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }


    if($mes==2){
        do_alert("Suksesvol bygevoeg");
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
                            <h4 class="mb-sm-0">API & Currency Setup</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">API & Currency</a></li>
                                    <li class="breadcrumb-item active">Setup</li>
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
                                <h5 class="card-title mb-0">API & Geldeenheid Opstelling</h5>
                            </div>
                            <div class="card-body">
                                <form action="api&currency.php" method="post" name="testform" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nomics API:</label>
                                        <input type="text" name="NOMICS_API" class="form-control" value="<?php echo $NOMICS_API; ?>" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Coingrecko API:</label>
                                        <input type="text" name="COINGECKO_API" class="form-control" value="<?php echo $COINGECKO_API; ?>" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">CoinMarketCap API:</label>
                                        <input type="text" name="COINMARKETCAP_API" class="form-control" value="<?php echo $COINMARKETCAP_API; ?>" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">ExchangeRate API(Geldeenheid):</label>
                                        <input type="text" name="CURRENCY_API" class="form-control" value="<?php echo $CURRENCY_API; ?>" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Skakel om na:</label>
                                        <input type="text" name="CONVERT_TO" class="form-control" value="<?php echo $CONVERT_TO; ?>" required />
                                    </div>
                                    
                                    <div class="text-end">
                                        <button type="submit" name="update_api_Currency" class="btn btn-primary">Update</button>
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
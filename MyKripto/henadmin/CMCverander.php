<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php

    if (isset($_GET['COIN_SYMBOL'])) {

        $COIN_SYMBOL = $_GET['COIN_SYMBOL'];

        $sql = mysqli_query($pdo,"SELECT * FROM cmc_my_munte WHERE COIN_SYMBOL = '$COIN_SYMBOL' ");
        $row = mysqli_fetch_array($sql);

        do{

            $COIN_SYMBOL = $row['COIN_SYMBOL'];
			$TOTAL_COIN = $row['TOTAL_COIN']; 
			$ADDRESS = $row['ADDRESS'];
			$CHART = $row['CHART'];
			$DEAD1 = $row['DEAD1'];			
            $LINK = $row['LINK'];  
			$SITE = $row['SITE']; 
            $BLOCKCHAIN = $row['BLOCKCHAIN'];  
			$WHERE_NOW = $row['WHERE_NOW'];  
			$WALLET_NO = $row['WALLET_NO'];  
			$WALLET = $row['WALLET'];
			$VERIFIED = $row['VERIFIED'];
			$CREATED_AT = $row['CREATED_AT'];
			
        }while($row = mysqli_fetch_array($sql));

    }

?>


<?php

    if (isset($_POST['update'])) {

        echo $COIN_SYMBOL = $_POST['COIN_SYMBOL'];
        
        echo $TOTAL_COIN = $_POST['TOTAL_COIN'];
        
        echo $ADDRESS = $_POST['ADDRESS'];
        
        echo $CHART = $_POST['CHART'];

        echo $DEAD1 = $_POST['DEAD1'];

        echo $LINK = $_POST['LINK'];
        
        echo $SITE = $_POST['SITE'];
        
        echo $BLOCKCHAIN = $_POST['BLOCKCHAIN'];
        
        echo $WHERE_NOW = $_POST['WHERE_NOW'];
        
        echo $WALLET_NO = $_POST['WALLET_NO'];
        
        echo $WALLET = $_POST['WALLET'];
        
        echo $VERIFIED = $_POST['VERIFIED'];
        
        echo $CREATED_AT = $_POST['CREATED_AT'];
		


        $updateSql = mysqli_query($pdo,"UPDATE cmc_my_munte SET TOTAL_COIN = '$TOTAL_COIN', LINK = '$LINK', CHART = '$CHART', ADDRESS = '$ADDRESS', SITE = '$SITE', DEAD1 = '$DEAD1', BLOCKCHAIN = '$BLOCKCHAIN', WHERE_NOW = '$WHERE_NOW', CREATED_AT = '$CREATED_AT', WALLET_NO = '$WALLET_NO', WALLET = '$WALLET', VERIFIED = '$VERIFIED' WHERE COIN_SYMBOL = '$COIN_SYMBOL' ");
        

        header("location: CMCverander.php?COIN_SYMBOL=$COIN_SYMBOL&status=updated");
            
       
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $COIN_SYMBOL; ?></a></li>
                                    <li class="breadcrumb-item active">Update Informations</li>
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
                                <h5 class="card-title mb-0">Wysig CoinMarketCap munt inligting</h5>
                            </div>
                            <div class="card-body">
                                <form action="CMCverander.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Munt ID</label>
                                        <input type="text" name="" class="form-control" value="<?php echo $COIN_SYMBOL; ?>" disabled />
                                        <input type="hidden" name="COIN_SYMBOL" class="form-control" value="<?php echo $COIN_SYMBOL; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Totale Munte</label>
                                        <input type="number" name="TOTAL_COIN" step="any" class="form-control" value="<?php echo $TOTAL_COIN; ?>" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Adres</label>
                                        <input type="text" name="ADDRESS" class="form-control" value="<?php echo $ADDRESS; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Grafiek</label>
                                        <input type="text" name="CHART" class="form-control" value="<?php echo $CHART; ?>" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Bestaan Munt nog</label>
                                        <input type="text" name="DEAD1" class="form-control" value="<?php echo $DEAD1; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Skakel</label>
                                        <input type="text" name="LINK" class="form-control" value="<?php echo $LINK; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Munt Skakel</label>
                                        <input type="text" name="SITE" class="form-control" value="<?php echo $SITE; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blok ketting</label>
                                        <input type="text" name="BLOCKCHAIN" class="form-control" value="<?php echo $BLOCKCHAIN; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Waar</label>
                                        <input type="text" name="WHERE_NOW" class="form-control" value="<?php echo $WHERE_NOW; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Beursie_nommer</label>
                                        <input type="text" name="WALLET_NO" class="form-control" value="<?php echo $WALLET_NO; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Beursie</label>
                                        <input type="text" name="WALLET" class="form-control" value="<?php echo $WALLET; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Geverifieer</label>
                                        <input type="text" name="VERIFIED" class="form-control" value="<?php echo $VERIFIED; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Datum gekoop</label>
                                        <input type="text" name="CREATED_AT" class="form-control" value="<?php echo $CREATED_AT; ?>" />
                                    </div>
                                    
                                    <div class="text-end">
                                        <button type="submit" name="update" class="btn btn-primary">Bywerking</button>
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
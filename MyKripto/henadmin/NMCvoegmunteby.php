<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php 

    $mes="";
        
    if(isset($_GET['mes'])){
        
        $mes=$_GET["mes"];
    }



    $sql = mysqli_query($pdo,"SELECT * FROM nmc_kry_my_munte ");

    $row = mysqli_fetch_array($sql);

    do{

        $COIN_IDS  = $row['COIN_IDS'];    


    }while($row = mysqli_fetch_array($sql));

    $COIN_IDS = str_ireplace (' ', '', $COIN_IDS);
    $TABLE_COIN_IDS  = $COIN_IDS;
	

    // Parse the form data and add inventory item to the system
    if (isset($_POST['submit'])) {
        
        $COIN_IDS  = strtoupper($_POST['COIN_IDS']);

        if($COIN_IDS != ""){

            $COIN_IDS = str_ireplace (' ', '', $COIN_IDS);
            

            $COIN_ID_ARRAY = explode (",", $COIN_IDS);
            $flag = 0;

            for($i=0; $i<count($COIN_ID_ARRAY); $i++){

                echo $COIN_ID = strtoupper($COIN_ID_ARRAY[$i]);
            
                $checkSql = mysqli_query($pdo,"SELECT * FROM nmc_munt_lys WHERE COIN_ID = '$COIN_ID' ORDER BY `ID` ASC");
                $checkSqlCount = mysqli_num_rows($checkSql);

                if($checkSqlCount != 1){

                    $flag = 1;
                    
                }
            }

            if($flag == 1){

                // header("location: VoegNMCmunteby.php?mes=1");

                // $insertSql = mysqli_query($pdo, "INSERT INTO nmc_kry_my_munte (COIN_IDS) VALUES('$COIN_IDS')");
                $sql = mysqli_query($pdo,"UPDATE nmc_kry_my_munte SET COIN_IDS ='$COIN_IDS' WHERE ID = '1' ");
            
                header("location: NMCvoegmunteby.php?mes=2");

            }
            else{

                $sql = mysqli_query($pdo,"UPDATE nmc_kry_my_munte SET COIN_IDS ='$COIN_IDS' WHERE ID = '1' ");
            
                header("location: NMCvoegmunteby.php?mes=2");

            }

        }
        else{

            $sql = mysqli_query($pdo,"UPDATE nmc_kry_my_munte SET COIN_IDS ='$COIN_IDS' WHERE ID = '1' ");
        
            header("location: NMCvoegmunteby.php?mes=1");

        }

    
    }

	
    function do_alert($msg){
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }


	if($mes==1){
        do_alert("Jy het munt-ID's ingevoer wat nie in nomics-api bestaan ​​nie, kyk asseblief na die beskikbare munt-ID's");
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Nomics</a></li>
                                    <li class="breadcrumb-item active">Add New Coins</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <input type="hidden" id="ckmm_id" value="">
                <input type="hidden" id="db_table_name" value="">
                <input type="hidden" id="" value="">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Voeg Nomics muntopstelling by</h5>
                            </div>
                            <div class="card-body">
                                <form action="NMCvoegmunteby.php" method="post" name="testform" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Voeg Nomics muntopstelling by [Byvoorbeeld (moet in hoofletters wees): BTC,SHIB,ELOINU...]</label>
                                        <textarea name="COIN_IDS" class="form-control" rows="10" cols="70" ><?php echo trim($COIN_IDS); ?></textarea>
                                    </div>
                                    
                                    <div class="text-end">
                                        <button type="submit" name="update_admin" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="msg" class="alert"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Purchased Nomics Coin List</h5>
                            </div>
                            <div class="card-body">
                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <!-- <th>Name</th>
                                            <th>Logo</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $COIN_ID_ARRAY = explode (",", $TABLE_COIN_IDS);

                                            for($i=0; $i<count($COIN_ID_ARRAY); $i++){

                                                $COIN_ID = strtoupper($COIN_ID_ARRAY[$i]); ?>

                                                <tr>
                                                    <td><?php echo $COIN_ID; ?></td>
                                                    
                                                    <td>
                                                        <!-- <a href="CMCinligting.php?DELETE_COIN_SYMBOL=<?php echo $row["COIN_ID"]; ?>" class="delete-row tooltips">
                                                            <img src="css/bincmc.png">
                                                        </a>
                                                        
                                                        <a href="CMCinligting.php?COIN_SYMBOL=<?php echo $row["COIN_ID"]; ?>" >
                                                            <img src="css/editcmc.png">
                                                        </a> -->
                                                    </td>
                                                </tr>

                                                <?php

                                                $checkSql = mysqli_query($pdo,"SELECT * FROM nmc_my_munte WHERE COIN_ID = '$COIN_ID' ORDER BY `ID` ASC");
                                                $checkSqlCount = mysqli_num_rows($checkSql);
                                                $row = mysqli_fetch_array($checkSql);

                                                do { ?> 
                                                    <!-- <tr>
                                                        <td><?php echo $row["COIN_ID"]; ?></td>
                                                        <td><?php echo $row["COIN_NAME"]; ?></td>
                                                        <td><img src="<?php echo $row["COIN_LOGO"]; ?>" height="20px" alt=""></td>
                                                        <td>
                                                            <a href="CMCinligting.php?DELETE_COIN_SYMBOL=<?php echo $row["COIN_ID"]; ?>" class="delete-row tooltips">
                                                                <img src="css/bincmc.png">
                                                            </a>
                                                            
                                                            <a href="CMCinligting.php?COIN_SYMBOL=<?php echo $row["COIN_ID"]; ?>" >
                                                                <img src="css/editcmc.png">
                                                            </a>
                                                        </td>
                                                    </tr> -->

                                                    <?php 

                                                } while ($row = mysqli_fetch_array($checkSql)); 
                                            }
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
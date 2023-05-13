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
                            <h4 class="mb-sm-0">Database</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Database</a></li>
                                    <li class="breadcrumb-item active">Update</li>
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
                                <h5 class="card-title mb-0">Werk databasisse by</h5>
                            </div>
                            <div class="card-body">
                                <p>
                                    <button class="btn btn-success btn-lg" id="coingeckoDB">Coingecko DB</button>&nbsp;
                                    <span id="coingeckoUpdate"></span>  
                                    <span id="loaders1" style="display:none;">
                                        <img alt="" src="assets/images/loader/loader11.gif">                   
                                    </span>
                                </p>

                                <p>
                                    <button class="btn btn-success btn-lg" id="coinMarketCapDB">CoinMarketCap DB</button>&nbsp;
                                    <span id="coinMarketCapUpdate"></span>  
                                    <span id="loaders2" style="display:none;">
                                        <img alt="" src="assets/images/loader/loader11.gif">                   
                                    </span>
                                    
                                </p>
                                
                                <p>
                                    <button class="btn btn-success btn-lg" id="LiveCoinWatchDB">LiveCoinWatch DB</button>&nbsp;
                                    <span id="LiveCoinWatchUpdate"></span>  
                                    <span id="loaders3" style="display:none;">
                                        <img alt="" src="assets/images/loader/loader11.gif">   
                                
                                    </span>
                                    
                                </p>
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


<script>

    $(document).ready(function(){

        $('#coingeckoDB').on('click', function() {


            $.ajax({
                type:'POST',
                url:'updateDatabase/db.php',
                // dataType: 'json',
                data:{db:"coingeckoDB"},
                beforeSend: function(){
                    $("#loaders1").show();
                },
                complete: function(){
                    $("#loaders1").hide();
                },
                success:function(data) {
                    
                    $("#coingeckoUpdate").html("Databasis Opgedateer");
                    
                },
                error: function (error) {
                    $("#coingeckoUpdate").html(error);
                }
            });

        });


        $('#coinMarketCapDB').on('click', function() {


            $.ajax({
                type:'POST',
                url:'updateDatabase/db.php',
                // dataType: 'json',
                data:{db:"coinMarketCapDB"},
                beforeSend: function(){
                    $("#loaders2").show();
                },
                complete: function(){
                    $("#loaders2").hide();
                },
                success:function(data) {
                    
                    $("#coinMarketCapUpdate").html("Databasis Opgedateer");
                    
                },
                error: function (error) {
                    $("#coinMarketCapUpdate").html(error);
                }
            });

        });


            $('#LiveCoinWatchDB').on('click', function() {


            $.ajax({
                type:'POST',
                url:'updateDatabase/db.php',
                // dataType: 'json',
                data:{db:"LiveCoinWatchDB"},
                beforeSend: function(){
                    $("#loaders3").show();
                },
                complete: function(){
                    $("#loaders3").hide();
                },
                success:function(data) {
                    
                    $("#LiveCoinWatchUpdate").html("Databasis Opgedateer");
                    
                },
                error: function (error) {
                    $("#LiveCoinWatchUpdate").html(error);
                }
            });

        });

    });

</script>



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
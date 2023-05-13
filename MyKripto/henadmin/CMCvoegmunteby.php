<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php

    if (isset($_GET['DELETE_COIN_SYMBOL'])) {

        $COIN_SYMBOL = $_GET['DELETE_COIN_SYMBOL'];

        $deleteSql = mysqli_query($pdo,"DELETE FROM cmc_kry_my_munte WHERE COIN_SYMBOL = '$COIN_SYMBOL' "); 

         header("location: CMCvoegmunteby.php?status=Deleted");

    }

?>




<style>



 </style>
<head>


<title>Admin Dashboard</title>
    <?php include 'layouts/title-meta.php'; ?>
<link href="./assets/css/loader.css" rel="stylesheet" />
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <?php include 'layouts/head-css.php'; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
</head>
<body>

<div class="loader">
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
  <i></i><i></i><i></i><i></i><i></i><i></i>
</div>


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
                                <h5 class="card-title mb-0">Hierdie CoinMarketCap munte is alreeds bygevoeg</h5>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <!-- <th>Munt No</th> -->
                                            <th>Munt SIMBOOL</th>
                                            <th>Munt ID</th>
                                            <th>Add Coin Details</th>
                                            <th>Aksie</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $result1 = mysqli_query($pdo, " SELECT * FROM cmc_kry_my_munte ORDER BY ID ASC ");
                                            $row1 = mysqli_fetch_array($result1);
                                            $row1Count = mysqli_num_rows($result1);
                                            $j = 1;

                                            if($row1Count > 0){

                                                do { ?> 

                                                    <tr data-row-id="<?php echo $row1['ID']; ?>">
                                                       <!-- <td><?php echo $j; ?></td> -->
                                                        <td><?php echo $row1["COIN_SYMBOL"]; ?></td>
                                                        <td><?php echo $row1["COINMARKETCAP_ID"]; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-primary exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: none;">Open Modal</button>
                                                        </td>

                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li>
                                                                          <a target="_blank" href="coinDetails.php?COINMARKETCAP_ID=<?php echo $row1["COINMARKETCAP_ID"]; ?>&COIN_SYMBOL=<?php echo $row1["COIN_SYMBOL"]; ?>&lccl_id=<?php echo $row1["lccl_id"]; ?>" class="dropdown-item">
                                                                            <i class="ri-eye-fill align-bottom me-2 text-muted"></i>View
                                                                        </a>
                                                                    </li>
                                                                    <!-- <li>
                                                                        <a class="dropdown-item edit-item-btn">
                                                                            <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit
                                                                        </a>
                                                                    </li> -->
                                                                    <li>
                                                                         <a class="dropdown-item remove-item-btn delete-row tooltips" href="CMCvoegmunteby.php?DELETE_COIN_SYMBOL=<?php echo $row1["COIN_SYMBOL"];?>" onclick="return confirm('Is jy seker jy wil <?php echo $row1['COIN_SYMBOL'];?> munt verwyder?')" data-toggle="tooltip" title="Delete">
                                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>

                                                    <?php 

                                                    $j++;

                                                } while ($row1 = mysqli_fetch_array($result1)); 

                                            }
                                            
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="msg" class="alert"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Voeg CoinMarketCap munte hieronder by</h5>
                            </div>
                            <div class="card-body">
                                <table id="buttons-datatables" class="voeg_coinMarketCap_munte_table display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Munt No</th>
                                            <th>Munt ID</th>
                                            <th>Munt Simbool</th>
                                            <th>Munt Naam</th>
                                            <th>Aksie</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <table id="alternative-pagination" class="table lccl_table_data nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Platform</th>
                                            <th>Slug</th>
                                            <th>Symbol</th>
                                            <th>Tradingview Symbol</th>
                                            <th>Base Asset</th>
                                            <th>View</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                    
                                </table>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade exampleModalPriceBtn" id="exampleModalPrice" tabindex="-1" role="dialog" aria-labelledby="exampleModalPriceLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Price</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <!-- Crypto Converter ⚡ Widget -->
                                <crypto-converter-widget shadow symbol live background-color="#383a59" border-radius="0.60rem" fiat="united-states-dollar" crypto="solana" amount="1" decimal-places="7"></crypto-converter-widget>
                                <a href="https://currencyrate.today/" target="_blank" rel="noopener">CurrencyRate.Today</a>
                                <script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script>
                                <!-- /Crypto Converter ⚡ Widget -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary exampleModalPriceBtn" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade exampleModalChartBtn" id="exampleModalChart" tabindex="-1" role="dialog" aria-labelledby="exampleModalChartLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Chart</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                <div id="tradingview_8131e"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/DOGEUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">DOGEUSDT chart</span></a> by TradingView</div>
                                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                <script type="text/javascript">
                                    function widget(platform,baseAsset){
                                        new TradingView.widget({
                                            "width": "100%", 
                                            "height" : 1000,
                                            "symbol": platform+":"+baseAsset,
                                            "interval": "D",
                                            "timezone": "Etc/UTC",
                                            "theme": "light",
                                            "style": "1",
                                            "locale": "en",
                                            "toolbar_bg": "#f1f3f6",
                                            "enable_publishing": false,
                                            "allow_symbol_change": true,
                                            "container_id": "tradingview_8131e"
                                        });
                                    }
                                </script>
                                </div>
                                <!-- TradingView Widget END -->


                                

                            </div>
                            <div class="modal-footer">
                               <button type="button" class="btn btn-secondary exampleModalChartBtn" data-bs-dismiss="modal">Close</button>
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
                        $('.voeg_coinMarketCap_munte_table').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "ajax": {
                                "url": "fetch_data.php?token=CMCvoegmunteby_cml_data",
                                "type": "GET",
                                "data": function(d) {
                                    d.start = d.start || 0;
                                    d.length = d.length || 10;
                                    d.search = d.search || {};
                                    d.search.value = d.search.value || '';
                                    d.order = d.order || [];
                                    d.columns = d.columns || [];
                                }
                            },
                            "columns": [
                                { "data": null },
                                { "data": "COINMARKETCAP_ID" },
                                { "data": "SYMBOL" },
                                { "data": "COIN_NAME" },
                                {
                                    "data": null,
                                    "render": function(data, type, row) {
                                        return '<button type="button" class="btn btn-sm btn-warning add" data-id="' + row.SYMBOL + '" style="float: none;">Voeg by</button>';
                                    }
                                }
                            ],
                            "columnDefs": [
                                {
                                    "targets": 0,
                                    "render": function(data, type, row, meta) {
                                        return meta.row + 1;
                                    }
                                }
                            ],
                            "createdRow": function(row, data, dataIndex) {
                                $(row).attr("data-row-id", data.SYMBOL);
                                $(row).attr("data-cmc-id", data.ID);
                            }
                        });

                        $('.lccl_table_data').DataTable({
                            "processing": true, // Enable processing indicator
                            "serverSide": true, // Enable server-side processing
                            "pagingType": "simple_numbers",
                            "lengthMenu": [10, 25, 50, 75, 100],
                            "pageLength": 10,
                            "order": [[0, "desc"]],
                            "ajax": {
                                "url": "fetch_data.php?token=CMCvoegmunteby_lccl_data", // Endpoint to fetch data from server
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
                                { "data": "platform" },
                                { "data": "slug" },
                                { "data": "symbol" },
                                { "data": "tradingview_symbol" },
                                { "data": "baseAsset" },
                                { "data": null,
                                    "render": function(data, type, row) {
                                        return '<button type="button" class="btn btn-sm btn-primary exampleModalPrice" data-bs-toggle="modal" data-bs-target="#exampleModalPrice" data-slug="' + row.slug + '" style="float: none;">Price</button>' +
                                                '<button type="button" class="btn btn-sm btn-primary exampleModalChart" data-bs-toggle="modal" data-bs-target="#exampleModalChart" data-platform="' + row.platform + '" data-baseAsset="' + row.tradingview_symbol + '" style="float: none;">Chart</button>';
                                    }
                                },
                                { "data": null,
                                    "render": function(data, type, row) {
                                        return '<button type="button" class="btn btn-sm btn-warning addCoinDetail" data-id="' + row.id + '" style="float: none;">Add</button>';
                                    }
                                }
                            ],
                            "columnDefs": [
                                { "targets": [5, 6], "orderable": false }
                            ]
                        });


                        // $(".exampleModalPriceBtn").on('click', function() {
                        $(".exampleModalPriceBtn").click(function() {
                            $("#exampleModalPrice").modal("hide");
                            $("#exampleModal").modal("show");
                        });

                        $(".exampleModalChartBtn").click(function() {
                            $("#exampleModalChart").modal("hide");
                            $("#exampleModal").modal("show");
                        });

                        $('#buttons-datatables').on('click', '.add', function() {

                            var trObj = $(this).closest("tr");
                            var symbol = $(this).closest("tr").attr('data-row-id');
                            var cmcID = $(this).closest("tr").attr('data-cmc-id');
                            // var symbol = $(this).attr('data-id');
                            // alert(cmcID);


                            $.ajax({
                                type:'POST',
                                url:'addCoins.php',
                                // contentType: "application/json",
                                // dataType: 'json',
                                data:{symbol:symbol,cmcID:cmcID,action:"addCoinMarketCapCoin"},
                                success:function(data) {

                                    trObj.remove();
                                    $("#msg").removeClass('alert-danger');
                                    $("#msg").addClass('alert-success').html("Coin " +symbol+" has been added successfully.");

                                    var jsonData = JSON.parse(data);

                                    if (jsonData.status == "error"){
                                        // alert("E");
                                        $("#msg").removeClass('alert-success');
                                        $("#msg").addClass('alert-danger').html("Coin " +symbol+" already in the list.");     
                                    }
                                    
                                    
                                }
                            });

                        });

                        $('#example').on('click', '.exampleModal', function() {

                            var ID = $(this).closest("tr").attr('data-row-id');
                            var table = "cmc_kry_my_munte";

                            $("#ckmm_id").val(ID);
                            $("#db_table_name").val(table);

                        });

                        $('#alternative-pagination').on('click', '.exampleModalPrice', function() {

                            var slug = $(this).attr('data-slug');
                            // alert(slug);
                            $("crypto-converter-widget").attr('crypto',slug);

                        });

                        $('#alternative-pagination').on('click', '.exampleModalChart', function() {

                            var platform = $(this).attr('data-platform');
                            var baseAsset = $(this).attr('data-baseAsset');
                            // alert(baseAsset);

                            widget(platform,baseAsset);
                        });

                        $('#alternative-pagination').on('click', '.addCoinDetail', function() {

                            var trObj = $(this).closest("tr");
                            var id = $(this).closest("tr").attr('data-row-id');
                            var ckmm_id = $("#ckmm_id").val();
                            // var symbol = $(this).attr('data-id');
                            // alert(id);


                            $.ajax({
                                type:'POST',
                                url:'addCoinDetails.php',
                                // dataType: 'json',
                                data:{id:id,ckmm_id:ckmm_id,action:"addcmcCoinDetail"},
                                success:function(data) {

                                    var jsonData = JSON.parse(data);
                                    if(jsonData.status == "ok"){
                                        
                                        // trObj.remove();
                                        // $("#msg").removeClass('alert-danger');
                                        // $("#msg").addClass('alert-success').html("Coin " +id+" Details has been added successfully.");  

                                        // table = $('#example').DataTable();
                                        // table.clear();
                                        // table.empty();
                                        // $("#example").dataTable().fnDestroy();

                                        // var rows = showData(jsonData);
                                        // reloadTableData();

                                        swal.fire({
                                            title:"Success",
                                            html:"Coin " +id+" Details has been added successfully.",
                                            icon:"success",
                                            button:"Aww yiss!"
                                        });

                                    }
                                    
                                },
                                error: function (jqXhr, status, error) {
                                    // alert(xhr.status);
                                    alert(error);
                                }
                            });

                        });

                        function reloadTableData(){
                            $("#example").dataTable().fnDestroy();
                            $('#example').DataTable({
                                'processing': true,
                                'serverSide': true,
                                'serverMethod': 'post',
                                'ajax': {
                                    'url':'datatable.php'
                                },
                                'columns': [
                                    { data: 'coin_id' },
                                    { data: 'coin_COINMARKETCAP_ID' },
                                    { data: 'coin_lccl_id' },
                                    { data: 'coin_symbol' }
                                ]
                            });
                        }

                        function showData(data){

                            var table = $('#example').DataTable();

                            $.each(data, function( index, value ) {

                                table.row.add([value.coin_id, value.coin_COINMARKETCAP_ID, value.coin_lccl_id, value.coin_symbol]).draw(false);

                            });
                            
                        }

                        // $('#basicTable').on('click', '.add', function() {
                        //     // var $tr = $(this).closest("tr"),
                        //     // symbol = $tr.data('row-id');
                        //     var symbol = $(this).closest("tr").attr('data-row-id');
                        //     $.post('addCoins.php', {
                        //         symbol: symbol,
                        //         action: "addCoinMarketCapCoin"
                        //     }).done(function (data) {
                        //         $tr.remove();
                        //         $("#msg")
                        //             .removeClass('alert-danger')
                        //             .addClass('alert-success')
                        //             .text("Coin " + symbol + " is suksesvol bygevoeg.");  
                        //     }).fail(function (jqXhr, status, error) {
                        //         $("#msg")
                        //             .removeClass('alert-success')
                        //             .addClass('alert-danger')
                        //             .text("Failed to add coin " + symbol);
                        //         console.log(error);
                        //     });
                        // });

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

<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<!-- <script src="assets/js/pages/datatables.init.js"></script> -->
<!-- App js -->
<script src="assets/js/app.js"></script>

<script>
  document.onreadystatechange = function() {
  if (document.readyState !== "complete") {
    document.querySelector("body").style.visibility = "hidden";
    document.querySelector(".loader").style.visibility = "visible";
  } else {
    document.querySelector(".loader").style.display = "none";
    document.querySelector("body").style.visibility = "visible";
  }
};
  </script>
</body>

</html>
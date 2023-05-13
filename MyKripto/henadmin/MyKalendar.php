<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>



<!-- Begin page -->
<head>
<?php include 'layouts/title-meta.php'; ?>
<div id="layout-wrapper">

   

 <!--datatable css--><!--datatable css--   add this from 12-27-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <?php include 'layouts/head-css.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>>

<?php include 'layouts/body.php'; ?>
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
                            <h4 class="mb-sm-0">My Kalender</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Verskaf asseblief Vereiste veld (*)</a></li>
                                    <li class="breadcrumb-item active">My Kalender</li>
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
                                <h5 class="card-title mb-0">Kripto</h5>
                            </div>
								<div class="card-body"> 
 
 
 
 
 
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            
                            
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    <div class="contentpanel">
                        
                        <div class="row">

                                        
                                    </div><!-- panel-heading -->
                                    <div class="panel-body">
									<h3>
				<a href="kalendar.php">
					<span style="color:#00FF00">V</span>
					<span style="color:#F433FF">o</span>
					<span style="color:#FFF700">e</span>
					<span style="color:#FF3855">g</span>
					<span style="color:#FF9966">&nbsp; </span>
					<span style="color:#87FF2A">n</span>
					<span style="color:#E936A7">u</span>
					<span style="color:#C46210">w</span>
					<span style="color:#8FD400">e</span>
					<span style="color:#FFCCCC">&nbsp; </span>
					<span style="color:#85754E">g</span>
					<span style="color:#00FF00">e</span>
					<span style="color:#F433FF">b</span>
					<span style="color:#FFF700">e</span>
					<span style="color:#FF3855">u</span>
					<span style="color:#87FF2A">r</span>
					<span style="color:#E936A7">t</span>
					<span style="color:#C46210">n</span>
					<span style="color:#8FD400">i</span>	
					<span style="color:#85754E">s</span>
					<span style="color:#FF9966">&nbsp; </span>
					<span style="color:#F433FF">b</span>
					<span style="color:#FFF700">y</span>
					<span style="color:#66CC66">&nbsp; </span>
					<span style="color:#FFF700">K</span>
					<span style="color:#FF3855">a</span>
					<span style="color:#87FF2A">l</span>
					<span style="color:#E936A7">e</span>
					<span style="color:#C46210">n</span>
					<span style="color:#8FD400">d</span>
					<span style="color:#85754E">e</span>
					<span style="color::#00FF00">r</span>
				</a>
			</h3>
                                        
										<!--<div class="responsiveCal">
                                           <iframe src="https://calendar.google.com/calendar/embed?height=777&wkst=1&bgcolor=%23c550dd&ctz=Africa%2FJohannesburg&hl=af&title=Kalender&showTitle=1&src=aGVuZHJpa2JlekBnbWFpbC5jb20&src=ZmFtaWx5MDA5MDQyMDYwMjI3ODYzNjg3OTRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%238E24AA&color=%23D50000" style="border:solid 1px #777" width="1757" height="777" frameborder="0" scrolling="no"></iframe>
										  </div>-->
                                        <p>
											<iframe src="https://embed.styledcalendar.com/#hBDYJWUGQlnEN6XCCpHC" title="Styled Calendar" class="styled-calendar-container" style="width: 100%; border: none;" data-cy="calendar-embed-iframe"></iframe>
											<script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>
                                        </p>
                                        
                                    </div><!-- btn-body -->
                                </div><!-- panel -->
                            </div><!-- col-sm-6 -->
   
                        </div><!-- row -->
                        
                        
                    </div><!-- contentpanel -->
                </div>
</div>
</div>
</div>
</div>
</div>
</div>


         
        </section>
<?php include 'layouts/customizer.php'; ?>  <!--add this also 107-108 before script-->
<?php include 'layouts/vendor-scripts.php'; ?>
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
                            
                            $("#coinMarketCapUpdate").html("Database Updated");
                            
                        },
                        error: function (error) {
                            $("#coinMarketCapUpdate").html(error);
                        }
                    });

                });

            });

        </script>

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/jquery.cookies.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="http://cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        <script src="http://cdn.datatables.net/responsive/1.0.1/js/dataTables.responsive.js"></script>
        <script src="js/select2.min.js"></script>
		<script src="js/custom.js"></script>
        <script>
            jQuery(document).ready(function(){
                
                jQuery('#basicTable').DataTable({
                    responsive: true
                });
                
                var shTable = jQuery('#shTable').DataTable({
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#shTable_paginate ul').addClass('pagination-active-dark');
                    },
                    responsive: true
                });
                
                // Show/Hide Columns Dropdown
                jQuery('#shCol').click(function(event){
                    event.stopPropagation();
                });
                
                jQuery('#shCol input').on('click', function() {

                    // Get the column API object
                    var column = shTable.column($(this).val());
 
                    // Toggle the visibility
                    if ($(this).is(':checked'))
                        column.visible(true);
                    else
                        column.visible(false);
                });
                
                var exRowTable = jQuery('#exRowTable').DataTable({
                    responsive: true,
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#exRowTable_paginate ul').addClass('pagination-active-success');
                    },
                    "ajax": "ajax/objects.txt",
                    "columns": [
                        {
                            "class":          'details-control',
                            "orderable":      false,
                            "data":           null,
                            "defaultContent": ''
                        },
                        { "data": "name" },
                        { "data": "position" },
                        { "data": "office" },
                        { "data": "salary" }
                    ],
                    "order": [[1, 'asc']] 
                });
                
                // Add event listener for opening and closing details
                jQuery('#exRowTable tbody').on('click', 'td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = exRowTable.row( tr );
             
                    if ( row.child.isShown() ) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');
                    }
                    else {
                        // Open this row
                        row.child( format(row.data()) ).show();
                        tr.addClass('shown');
                    }
                });
               
                
                // DataTables Length to Select2
                jQuery('div.dataTables_length select').removeClass('form-control input-sm');
                jQuery('div.dataTables_length select').css({width: '60px'});
                jQuery('div.dataTables_length select').select2({
                    minimumResultsForSearch: -1
                });
    
            });
            
            function format (d) {
                // `d` is the original data object for the row
                return '<table class="table table-bordered nomargin">'+
                    '<tr>'+
                        '<td>Full name:</td>'+
                        '<td>'+d.name+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extension number:</td>'+
                        '<td>'+d.extn+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extra info:</td>'+
                        '<td>And any further details here (images etc)...</td>'+
                    '</tr>'+
                '</table>';
            }
        </script>
        
        
        <script src="js/jquery.validate.min.js"></script>

        
        
        <script>
            jQuery(document).ready(function(){
              
                // Basic Form
                jQuery("#basicForm").validate({
                    highlight: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    success: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-error');
                    }
                });
              
                // Error Message In One Container
                jQuery("#basicForm2").validate({
                    errorLabelContainer: jQuery("#basicForm2 div.errorForm")
                });
              
                // With Checkboxes and Radio Buttons
                
                jQuery('#genderError').attr('for','gender');
                jQuery('#intError').attr('for','int[]');
                
                jQuery("#basicForm3").validate({
                    highlight: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    success: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-error');
                    }
                });
                
                jQuery("#basicForm4").validate({
                    highlight: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    success: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-error');
                    },
                    ignore: null
                });
                
                // Validation with select boxes
                jQuery("#flowers, #fruits").select2({
                    minimumResultsForSearch: -1
                });
              
            });
        </script>

    </body>
</html>

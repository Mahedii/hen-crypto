<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php 

    $mes="";
        
    if(isset($_GET['mes'])){
        
        $mes=$_GET["mes"];
    }

?>

<?php

    $sql = mysqli_query($pdo,"SELECT * FROM api_currency ");

    $row = mysqli_fetch_array($sql);

    do{

       	$GOOGLE_API  = $row['GOOGLE_API'];
		$GOOGLE_CLIENT_ID  = $row['GOOGLE_CLIENT_ID'];
		$GOOGLE_PROJECT_ID  = $row['GOOGLE_PROJECT_ID'];
		$GOOGLE_OAUTH_SCOPE  = $row['GOOGLE_OAUTH_SCOPE'];
		$REDIRECT_URI  = $row['REDIRECT_URI'];
		$GOOGLE_AUTH_URI  = $row['GOOGLE_AUTH_URI'];
		$GOOGLE_TOKEN_URI  = $row['GOOGLE_TOKEN_URI'];
		$GOOGLE_CLIENT_SECRET  = $row['GOOGLE_CLIENT_SECRET'];
		$GOOGLE_AUTH_PROVIDER_URL  = $row['GOOGLE_AUTH_PROVIDER_URL'];
				

    }while($row = mysqli_fetch_array($sql));

     // Parse the form data and add inventory item to the system
    if (isset($_POST['submit'])) {
        
            
        
		$GOOGLE_API  = $_POST['GOOGLE_API'];
		$GOOGLE_CLIENT_ID  = $_POST['GOOGLE_CLIENT_ID'];
		$GOOGLE_PROJECT_ID  = $_POST['GOOGLE_PROJECT_ID'];
		$GOOGLE_OAUTH_SCOPE  = $_POST['GOOGLE_OAUTH_SCOPE'];
		$REDIRECT_URI  = $_POST['REDIRECT_URI'];
		$GOOGLE_AUTH_URI  = $_POST['GOOGLE_AUTH_URI'];
		$GOOGLE_TOKEN_URI  = $_POST['GOOGLE_TOKEN_URI'];
		$GOOGLE_CLIENT_SECRET  = $_POST['GOOGLE_CLIENT_SECRET'];
		$GOOGLE_AUTH_PROVIDER_URL  = $_POST['GOOGLE_AUTH_PROVIDER_URL'];

        $sql = mysqli_query($pdo,"UPDATE api_currency SET 
		
		GOOGLE_API ='$GOOGLE_API',
		GOOGLE_CLIENT_ID ='$GOOGLE_CLIENT_ID',
		GOOGLE_PROJECT_ID ='$GOOGLE_PROJECT_ID',
		GOOGLE_OAUTH_SCOPE ='$GOOGLE_OAUTH_SCOPE',
		REDIRECT_URI ='$REDIRECT_URI',
		GOOGLE_AUTH_URI ='$GOOGLE_AUTH_URI',
		GOOGLE_TOKEN_URI = '$GOOGLE_TOKEN_URI',
		GOOGLE_CLIENT_SECRET ='$GOOGLE_CLIENT_SECRET',
		GOOGLE_AUTH_PROVIDER_URL ='$GOOGLE_AUTH_PROVIDER_URL'
	
		WHERE ID = '1' ");
    
        header("location: GoogleApi.php?mes=2");
    
    }
 
    function do_alert($msg){
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }


    if($mes==2){
        do_alert("Suksesvol bygevoeg");
    }

    
?>


<!-- Begin page -->
<head>

<?php include 'layouts/body.php'; ?>
<div id="layout-wrapper">
<?php include 'layouts/menu.php'; ?>

<link href="./assets/css/googleapi.css" rel="stylesheet" />
 <!--datatable css--   add this from 80-95-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <?php include 'layouts/head-css.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>>

<?php include 'layouts/body.php'; ?>
<!-- Begin page --><div id="layout-wrapper">
<?php include 'layouts/menu.php'; ?>



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("spinner").style.display = "block";
  });

  window.addEventListener("load", function() {
    document.getElementById("spinner").style.display = "none";
  });
</script>
	<div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Google Api's</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Verskaf asseblief Vereiste veld (*)</a></li>
                                    <li class="breadcrumb-item active">Google APi</li>
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
                                <h5 class="card-title mb-0">Google Api</h5>
                            </div>
								<div class="card-body">
									<form action="GoogleApi.php" method="post" name="testform" enctype="multipart/form-data">
										<div class="container">
											<div class="box">
												<div class="input-container">
													<label>Google API</label>
														<input type="text" id="myInput" name="GOOGLE_API" title="Google API=" value="<?php echo $GOOGLE_API; ?>" required />
												</div>
											</div>	
											<div class="box">
												<div class="input-container">			
													<label>Google Client Id</label>
														<input type="text" id="myInput" name="GOOGLE_CLIENT_ID" title="Google Client Id" value="<?php echo $GOOGLE_CLIENT_ID; ?>" required />
												</div>
											</div>
											<div class="box">
												<div class="input-container">			
													<label>Google Client secret</label>
														<input type="text" id="myInput" name="GOOGLE_CLIENT_SECRET" title="Google Client secret" value="<?php echo $GOOGLE_CLIENT_SECRET; ?>" required />
												</div>
											</div>
											<div class="box">
												<div class="input-container">			
													<label>Google Project Id</label>
														<input type="text" id="myInput" name="GOOGLE_PROJECT_ID""  title="Google Project Id" value="<?php echo $GOOGLE_PROJECT_ID; ?>" required />
												</div>
											</div>
											<div class="box">
												<div class="input-container">			
													<label>Google Oauth Scope</label>
														<input type="text" id="myInput" name="GOOGLE_OAUTH_SCOPE" title="Google Oauth Scope" value="<?php echo $GOOGLE_OAUTH_SCOPE; ?>" required />
												</div>	
											</div>
											<div class="box">
												<div class="input-container">			
													<label>Google Redirect URI</label>
															<input type="text" id="myInput" name="REDIRECT_URI" title="Google Redirect URI" value="<?php echo $REDIRECT_URI; ?>" required />
												</div>
											</div>
											<div class="box">
												<div class="input-container">				
													<label>Google Authority URI</label>
															<input type="text" id="myInput" name="GOOGLE_AUTH_URI" title="Google Authority URI" value="<?php echo $GOOGLE_AUTH_URI; ?>" required />	
												</div>
											</div>
											<div class="box">
												<div class="input-container">				
													<label>Google Token URI</label>
														<input type="text" id="myInput" name="GOOGLE_TOKEN_URI" title="Google Token URI" value="<?php echo $GOOGLE_TOKEN_URI; ?>" required />	
												</div>
											</div>
											<div class="box">
												<div class="input-container">					
													<label>Google Auth Provider X509 Certificate Url</label>
															<input type="text" name="GOOGLE_AUTH_PROVIDER_URL" title="Google Auth Provider X509 Certificate Url" value="<?php echo $GOOGLE_AUTH_PROVIDER_URL; ?>" required />	
												</div>				
											</div>
															
													<div style="display: flex; justify-content: center; align-items: center; height: 7vh;">
															<button class="btn-danger" name=" submit" >Dien in</button>
															<button class="btn-dark" type="reset">Herstel</button>
													</div>
											
										</div>
									</form>	
								</div>
						</div>
					</div>
				</div>
			</div>
               <?php include 'layouts/footer.php'; ?>
		</div>
	</div> 
</div>

 <?php include 'layouts/customizer.php'; ?>  <!--add this also 153-154 before script-->
<?php include 'layouts/vendor-scripts.php'; ?>									
	                     
                    								
										
	
    

        <script src="js/jquery-1.11.1.min.js?<?php echo time(); ?>" /></script>
        <script src="js/jquery-migrate-1.2.1.min.js?<?php echo time(); ?>" /></script>
        <script src="js/bootstrap.min.js?<?php echo time(); ?>" /></script>
        <script src="js/modernizr.min.js?<?php echo time(); ?>" /></script>
        <script src="js/pace.min.js?<?php echo time(); ?>" /></script>
        <script src="js/retina.min.js?<?php echo time(); ?>" /></script>
        <script src="js/jquery.cookies.js?<?php echo time(); ?>" /></script>
        
        <script src="js/jquery.dataTables.min.js?<?php echo time(); ?>" /></script>
        <script src="http://cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.js?<?php echo time(); ?>" /></script>
        <script src="http://cdn.datatables.net/responsive/1.0.1/js/dataTables.responsive.js?<?php echo time(); ?>" /></script>
        <script src="js/select2.min.js?<?php echo time(); ?>" /></script>

        <script src="js/custom.js?<?php echo time(); ?>" /></script>
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
        
        
        <script src="js/jquery.validate.min.js?<?php echo time(); ?>" /></script>

        
        
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

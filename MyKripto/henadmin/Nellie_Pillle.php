<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php

    $mes="";

if (isset($_GET['mes'])) {
    $mes=$_GET["mes"];
}

?>

<?php

    $sql = mysqli_query($pdo, "SELECT * FROM api_currency ");

$row = mysqli_fetch_array($sql);

do {
    $PURICOS_O = $row['PURICOS_O'];
    $PHARMAPRESS_O = $row['PHARMAPRESS_O'];
    $MYOPRIN_O = $row['MYOPRIN_O'];
    $LASIX_O = $row['LASIX_O'];
    $SPIRACTIN_O = $row['SPIRACTIN_O'];
    $CIPALAT_RETARD_O = $row['CIPALAT_RETARD_O'];
    $CARLOC_O = $row['CARLOC_O'];
    $CIPLA_SIMVASTATIN_A = $row['CIPLA_SIMVASTATIN_A'];
    $ALLERWAY_A = $row['ALLERWAY_A'];
    $CALCIEFROL_A = $row['CALCIEFROL_A'];
    $CIPALAT_RETARD_A = $row['CIPALAT_RETARD_A'];
    $CARLOC_A = $row['CARLOC_A'];
} while ($row = mysqli_fetch_array($sql));

// Parse the form data and add inventory item to the system
if (isset($_POST['submit'])) {
    $PURICOS_O = $_POST['PURICOS_O'];
    $PHARMAPRESS_O = $_POST['PHARMAPRESS_O'];
    $MYOPRIN_O = $_POST['MYOPRIN_O'];
    $LASIX_O = $_POST['LASIX_O'];
    $SPIRACTIN_O = $_POST['SPIRACTIN_O'];
    $CIPALAT_RETARD_O = $_POST['CIPALAT_RETARD_O'];
    $CARLOC_O = $_POST['CARLOC_O'];
    $CIPLA_SIMVASTATIN_A = $_POST['CIPLA_SIMVASTATIN_A'];
    $ALLERWAY_A = $_POST['ALLERWAY_A'];
    $CALCIEFROL_A = $_POST['CALCIEFROL_A'];
    $CIPALAT_RETARD_A = $_POST['CIPALAT_RETARD_A'];
    $CARLOC_A = $_POST['CARLOC_A'];

    $sql = mysqli_query($pdo, "UPDATE api_currency SET 
	
		PURICOS_O = '$PURICOS_O', 
		PHARMAPRESS_O = '$PHARMAPRESS_O',
		MYOPRIN_O = '$MYOPRIN_O', 
		LASIX_O = '$LASIX_O',
		SPIRACTIN_O = '$SPIRACTIN_O',
		CIPALAT_RETARD_O = '$CIPALAT_RETARD_O',
		CARLOC_O = '$CARLOC_O',
		CIPLA_SIMVASTATIN_A = '$CIPLA_SIMVASTATIN_A',
		ALLERWAY_A = '$ALLERWAY_A', 
		CALCIEFROL_A = '$CALCIEFROL_A',
		CIPALAT_RETARD_A = '$CIPALAT_RETARD_A',
		CARLOC_A = '$CARLOC_A'
		WHERE ID = '1' ");


    if (!$sql) {
        // Query failed, show error message with reason
        do_alert("Error: " . mysqli_error($pdo));
    } else {
        // Query succeeded, redirect to the success page
        header("location: Nellie_Pille.php?mes=2");
    }

    if ($result === false) {
        echo mysqli_error($conn);
    }
    function do_alert($msg)
    {
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }


    if ($mes==2) {
        do_alert("Suksesvol bygevoeg");
    }
}

?>


<!-- Begin page -->
<head>

<?php include 'layouts/body.php'; ?>
<div id="layout-wrapper">
<?php include 'layouts/menu.php'; ?>

<link href="./assets/css/nellie.css" rel="stylesheet" />
 <!--datatable css--   add this from 80-95-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <?php include 'layouts/head-css.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

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
                            <h4 class="mb-sm-0">Nellie_Pille</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Verskaf asseblief Vereiste veld (*)</a></li>
                                    <li class="breadcrumb-item active">Nellie Pille</li>
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
                                <h5 class="card-title mb-0">Nellie Pille</h5>
                            </div>
								<div class="card-body">
									<form action="Nellie_Pille.php" method="post" name="testform" enctype="multipart/form-data">
										<div class="container">
											<div class="box">
												<div class="input-container">
													<label >Puricos(Oggend)</label>
														<input class="text" id="myInput" type="text" name="PURICOS_O" title="Puricos(Oggend)" value="<?php echo $PURICOS_O; ?>" required />
												</div>
											</div>	
											
											<div class="box">
												<div class="input-container">										
													<label>Pharmapress(Oggend)</label>
														<input class="text" id="myInput" type="text" name="PHARMAPRESS_O" title="Pharmapress(Ogend)" value="<?php echo $PHARMAPRESS_O; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Myoprin (Oggend)</label>
														<input class="text" id="myInput" type="text" name="MYOPRIN_O" title="Myoprin (Oggend)" value="<?php echo $MYOPRIN_O; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Lasix(Oggend)</label>
														<input class="text" id="myInput" type="text" name="LASIX_O" title="Lasix (Oggend)" value="<?php echo $LASIX_O; ?>" required />
												</div>	
											</div>
											
											<div class="box">
												<div class="input-container">
													<label>Spiractin (Oggend)</label>
														<input class="text" id="myInput" type="text" name="SPIRACTIN_O" title="Spiractin (Oggend)" value="<?php echo $SPIRACTIN_O; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">
													<label>Cipalat Retard (Oggend)</label>
														<input class="text" id="myInput" type="text" name="CIPALAT_RETARD_O" title="Cipalat Retard (Oggend)" value="<?php echo $CIPALAT_RETARD_O; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Carloc (Ogend)</label>
														<input class="text" id="myInput" type="text" name="CARLOC_O" title="Carloc (Ogend)" value="<?php echo $CARLOC_O; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Cipla Simvastatin (Aand)</label>
														<input class="text" id="myInput" type="text" name="CIPLA_SIMVASTATIN_A" title="Cipla Simvastatin (Aand)" value="<?php echo $CIPLA_SIMVASTATIN_A; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Allerway (Aand)</label>
													<input class="text" id="myInput" type="text" name="ALLERWAY_A"  title="Allerway (Aand)" value="<?php echo $ALLERWAY_A; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Calfiefrol (Aand)</label>
														<input class="text" id="myInput" type="text" name="CALCIEFROL_A" title="Calfiefrol(Aand)" value="<?php echo $CALCIEFROL_A; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Cipalat Retard (Aand)</label>
														<input class="text" id="myInput" type="text" name="CIPALAT_RETARD_A" title="Cipalat Retard (Aand)" value="<?php echo $CIPALAT_RETARD_A; ?>" required />
												</div>	
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Carloc (Aand)</label>
														<input class="text" id="myInput" type="text" name="CARLOC_A" title="Carloc(Aand)" value="<?php echo $CARLOC_A; ?>" required />
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

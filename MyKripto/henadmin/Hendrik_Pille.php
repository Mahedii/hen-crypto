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

		$PONTACID_O = $row['PONTACID_O'];  
        $BIOPREKUIM_O = $row['BIOPREKUIM_O']; 
        $PURICOS_A = $row['PURICOS_A']; 
        $QUININE_A = $row['QUININE_A']; 
        $UROMAX_A = $row['UROMAX_A'];
        $OXPOLA_1_A = $row['OXPOLA_1_A'];
        $OXPOLA_2_A = $row['OXPOLA_2_A'];
        
		
    }while($row = mysqli_fetch_array($sql));

     // Parse the form data and add inventory item to the system
    if (isset($_POST['submit'])) {
        
            
        
		$PONTACID_O = $_POST['PONTACID_O'];
        $BIOPREKUIM_O = $_POST['BIOPREKUIM_O'];
        $PURICOS_A = $_POST['PURICOS_A'];
        $QUININE_A = $_POST['QUININE_A'];
        $UROMAX_A = $_POST['UROMAX_A'];
        $OXPOLA_1_A = $_POST['OXPOLA_1_A'];
        $OXPOLA_2_A = $_POST['OXPOLA_2_A'];
        
		
        $sql = mysqli_query($pdo,"UPDATE api_currency SET 
		
	PONTACID_O = '$PONTACID_O', 
		BIOPREKUIM_O = '$BIOPREKUIM_O',
		PURICOS_A = '$PURICOS_A', 
		QUININE_A = '$QUININE_A',
		UROMAX_A = '$UROMAX_A',
		OXPOLA_1_A = '$OXPOLA_1_A',
		OXPOLA_2_A = '$OXPOLA_2_A'
		
		WHERE ID = '1' ");
		
	    
        header("location: Hendrik_Pille.php?mes=2");
    
    }
 
    function do_alert($msg){
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }
	
// Check for errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

    if($mes==2){
        do_alert("Suksesvol bygevoeg");
    }

    
?>


<!-- Begin page -->


<?php include 'layouts/body.php'; ?>
<div id="layout-wrapper">
<?php include 'layouts/menu.php'; ?>

<link href="./assets/css/Hendrik.css" rel="stylesheet" />
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
                            <h4 class="mb-sm-0">Hendrik Pille</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Verskaf asseblief Vereiste veld (*)</a></li>
                                    <li class="breadcrumb-item active">Hendrik Pille</li>
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
                                <h5 class="card-title mb-0">Hendrik Pille</h5>
                            </div>
								<div class="card-body">
									<form action="Hendrik_Pille.php" method="post" name="testform" enctype="multipart/form-data">
										<div class="container">
											<div class="box">
												<div class="input-container">
													<label >Pontacid (Oggend)</label>
														<input class="text" id="myInput" type="text" name="PONTACID_O" title="Puricos (Oggend)" value="<?php echo $PONTACID_O; ?>" required />
												</div>
											</div>	
											
											<div class="box">
												<div class="input-container">										
													<label>Bioprekuim (Oggend)</label>
														<input class="text" id="myInput" type="text" name="BIOPREKUIM_O" title="Bioprekuim (Oggend)" value="<?php echo $BIOPREKUIM_O; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Puricos (Aand)</label>
														<input class="text" id="myInput" type="text" name="PURICOS_A" title="Puricos (Aand)" value="<?php echo $PURICOS_A; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Quinine (Aand)</label>
														<input class="text" id="myInput" type="text" name="QUININE_A" title="Quinine (Aand)" value="<?php echo $QUININE_A; ?>" required />
												</div>	
											</div>
											
											<div class="box">
												<div class="input-container">
													<label>Uromax (Aand)</label>
														<input class="text" id="myInput" type="text" name="UROMAX_A" title="Uromax (Aand)" value="<?php echo $UROMAX_A; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">
													<label>Oxpola 1 (Aand)</label>
														<input class="text" id="myInput" type="text" name="OXPOLA_1_A" title="Oxpola 1 (Aand)" value="<?php echo $OXPOLA_1_A; ?>" required />
												</div>
											</div>
											
											<div class="box">
												<div class="input-container">	
													<label>Oxpola 2 (Aand)</label>
														<input class="text" id="myInput" type="text" name="OXPOLA_2_A" title="Oxpola 2 (Aand)" value="<?php echo $OXPOLA_2_A; ?>" required />
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

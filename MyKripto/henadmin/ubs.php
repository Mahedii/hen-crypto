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
	do	
	{
		$EEN1 = $row['EEN1'];  
        $TWEE1 = $row['TWEE1'];
        $DRIE1 = $row['DRIE1'];
		$VIER1 = $row['VIER1'];  
        $VYF1 = $row['VYF1'];
        $SES1 = $row['SES1'];
        $SEWE1 = $row['SEWE1'];
    }
		while($row = mysqli_fetch_array($sql));

	if (isset($_POST['submit'])) 
	{
		$EEN1 = $_POST['EEN1'];
        $TWEE1 = $_POST['TWEE1'];
        $DRIE1 = $_POST['DRIE1'];
		$VIER1 = $_POST['VIER1'];
        $VYF1 = $_POST['VYF1'];
        $SES1 = $_POST['SES1'];
        $SEWE1 = $_POST['SEWE1'];
        
		$sql = mysqli_query($pdo,"UPDATE api_currency SET 
		EEN1 ='$EEN1', 
		TWEE1 ='$TWEE1',
        DRIE1 ='$DRIE1', 
		VIER1 ='$VIER1', 
		VYF1 ='$VYF1',
        SES1 ='$SES1', 
		SEWE1 ='$SEWE1' 
		
		
		WHERE ID = '1' ");
    
        header("location: ubs.php?mes=2");
	}
     
	function do_alert($msg)
	{
        echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
    }

	if($mes==2)
	{
        do_alert("Suksesvol bygevoeg");
    }
?>

<!-- Begin page -->
<head>

<?php include 'layouts/title-meta.php'; ?>
<div id="layout-wrapper">

   
<link href="./assets/css/ubs.css" rel="stylesheet" />
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
</script


<div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Ubs</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Verskaf asseblief Vereiste veld (*)</a></li>
                                    <li class="breadcrumb-item active">Ubs</li>
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
                                <h5 class="card-title mb-0">Ubs</h5>
                            </div>
								<div class="card-body">
									<form action="ubs.php" method="post" name="testform" enctype="multipart/form-data">
										<div class="container">
											<div class="input-container">
												<label>Een</label>
													<input class="text" id="myInput" type="text" name="EEN1" title="Een1" value="<?php echo $EEN1; ?>" required />
													
											</div>
											<div class="input-container">				
												<label>Twee</label>
													<input class="text" id="myInput" type="text" name="TWEE1" title="Twee1" value="<?php echo $TWEE1; ?>" required />
											</div>	
											<div class="input-container">	
												<label>Drie</label>
													<input class="text" id="myInput" type="text" name="DRIE1" title="Drie1" value="<?php echo $DRIE1; ?>" required />
											</div>	
											<div class="input-container">	
												<label>VIER</label>
													<input class="text" id="myInput" type="text" name="VIER1" title="Vier1" value="<?php echo $VIER1; ?>" required />
											</div>	
											<div class="input-container">	
												<label>VYF</label>
													<input class="text" id="myInput" type="text" name="VYF1" title="Vyf1" value="<?php echo $VYF1; ?>" required />
											</div>	
											<div class="input-container">	
												<label>SES</label>
													<input class="text" id="myInput" type="text" name="SES1" title="Ses1" value="<?php echo $SES1; ?>" required />
											</div>	
											<div class="input-container">	
												<label>SEWE</label>
													<input class="text" id="myInput" type="text" name="SEWE1"  title="Sewe1" value="<?php echo $SEWE1; ?>" required />
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
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

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

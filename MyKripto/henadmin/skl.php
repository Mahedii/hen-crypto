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
		$EEN = $row['EEN'];  
        $TWEE = $row['TWEE'];
        $DRIE = $row['DRIE'];
		$VIER = $row['VIER'];  
        $VYF = $row['VYF'];
        $SES = $row['SES'];
        $SEWE = $row['SEWE'];
        $AGT = $row['AGT'];
	}
		while($row = mysqli_fetch_array($sql));

	if (isset($_POST['submit'])) 
	{
		$EEN = $_POST['EEN'];
        $TWEE = $_POST['TWEE'];
        $DRIE = $_POST['DRIE'];
		$VIER = $_POST['VIER'];
        $VYF = $_POST['VYF'];
        $SES = $_POST['SES'];
        $SEWE = $_POST['SEWE'];
        $AGT = $_POST['AGT'];

		$sql = mysqli_query($pdo,"UPDATE api_currency SET 
		EEN ='$EEN', 
		TWEE='$TWEE',
        DRIE ='$DRIE', 
		VIER ='$VIER', 
		VYF ='$VYF',
        SES ='$SES', 
		SEWE ='$SEWE', 
		AGT ='$AGT'
		
		WHERE ID = '1' ");
    
        header("location: skl.php?mes=2");
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

   
<link href="./assets/css/skl.css" rel="stylesheet" />
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
                            <h4 class="mb-sm-0">Skl</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Verskaf asseblief Vereiste veld (*)</a></li>
                                    <li class="breadcrumb-item active">Skl</li>
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
                                <h5 class="card-title mb-0">Skl</h5>
                            </div>
								<div class="card-body">
									<form action="skl.php" method="post" name="testform" enctype="multipart/form-data">
										<div class="container">
											<div class="input-container">
												<label>Een</label>
													<input class="text" id="myInput" type="text" name="EEN" title="Een" value="<?php echo $EEN; ?>" required />
											</div>
											<div class="input-container">				
												<label>Twee</label>
													<input class="text" id="myInput" type="text" name="TWEE" title="Twee" value="<?php echo $TWEE; ?>" required />
											</div>	
											<div class="input-container">	
												<label>Drie</label>
													<input class="text" id="myInput" type="text" name="DRIE" title="Drie" value="<?php echo $DRIE; ?>" required />
											</div>	
											<div class="input-container">	
												<label>VIER</label>
													<input class="text" id="myInput" type="text" name="VIER" title="Vier" value="<?php echo $VIER; ?>" required />
											</div>	
											<div class="input-container">	
												<label>VYF</label>
													<input class="text" id="myInput" type="text" name="VYF" title="Vyf" value="<?php echo $VYF; ?>" required />
											</div>	
											<div class="input-container">	
												<label>SES</label>
													<input class="text" id="myInput" type="text" name="SES" title="Ses" value="<?php echo $SES; ?>" required />
											</div>	
											<div class="input-container">	
												<label>SEWE</label>
													<input class="text" id="myInput" type="text" name="SEWE"  title="Sewe" value="<?php echo $SEWE; ?>" required />
											</div>	
											<div class="input-container">	
												<label>AGT</label>
													<input class="text" id="myInput" type="text" name="AGT" title="Agt" value="<?php echo $AGT; ?>" required />	
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
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
$(function(){
    $(".ajaxForm").submit(function(e){
        e.preventDefault();
        var href = $(this).attr("action");
        $.ajax({
            type: "POST",
            dataType: "json",
            url: href,
            data: $(this).serialize(),
            success: function(response){
                if(response.status == "success"){
                    alert("We received your submission, thank you!");
                }else{
                    alert("An error occured: " + response.message);
                }
            }
        });
    });
});
</script>

    </body>
</html>

<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php 

    $mes="";
        
    if(isset($_GET['mes'])){
        
        $mes=$_GET["mes"];
    }

    $sql = mysqli_query($pdo,"SELECT * FROM lisensie ");
    $row = mysqli_fetch_array($sql);
    do
    {

        $O2021HR = $row['O2021HR'];  
		$O2021L = $row['O2021L']; 
		$O2021NL = $row['O2021NL']; 
		$O2021RL = $row['O2021RL']; 
		$HOWTO = $row['HOWTO'];
		$HOWTO1 = $row['HOWTO1'];
        $W11H = $row['W11H'];
		$W11N = $row['W11N'];
        $MALWAREBYTES = $row['MALWAREBYTES'];
		$EASEUS = $row['EASEUS'];
        $REVO = $row['REVO'];
	}
        while($row = mysqli_fetch_array($sql));

    if (isset($_POST['submit'])) 
    {
        
        $O2021HR  = $_POST['O2021HR'];
		$O2021L  = $_POST['O2021L'];
		$O2021NL  = $_POST['O2021NL'];
		$O2021RL  = $_POST['O2021RL'];
		$HOWTO  = $_POST['HOWTO'];
		$HOWTO1  = $_POST['HOWTO1'];
        $W11H = $_POST['W11H'];
		$W11N = $_POST['W11N'];
        $MALWAREBYTES = $_POST['MALWAREBYTES'];
		$EASEUS = $_POST['EASEUS'];
        $REVO = $_POST['REVO'];
	
        $sql = mysqli_query($pdo,"UPDATE lisensie SET 
		O2021HR ='$O2021HR', 
		O2021L ='$O2021L',
		O2021NL ='$O2021NL', 
		O2021RL ='$O2021RL',
		HOWTO ='$HOWTO',
		HOWTO1 ='$HOWTO1',
		W11H ='$W11H',
		W11N ='$W11N',
        MALWAREBYTES ='$MALWAREBYTES', 
		EASEUS ='$EASEUS',
		REVO ='$REVO'
		
		WHERE ID = '1' ");
    
        header("location: lisensie.php?mes=2");
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

   
<link href="./assets/css/Lisensie.css" rel="stylesheet" />

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
                            <h4 class="mb-sm-0">Lisensies</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Verskaf asseblief Vereiste veld (*)</a></li>
                                    <li class="breadcrumb-item active">Lisensies</li>
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
                                <h5 class="card-title mb-0">Lisensies</h5>
                            </div>
								<div class="card-body">
									<form action="lisensie.php" method="post" name="testform" enctype="multipart/form-data">
									<div class="container">
										<div class="input-container">
											<label >Office 2021 Rekenaar</label>
												  <input class="text" id="myInput" type="text" name="O2021HR" title="Office 2021 on pc" value="<?php echo $O2021HR; ?>" required />
										</div>
										
										<div class="input-container">										
											<label>Office 2021 Laptop</label>
												 <input class="text" id="myInput" type="text" name="O2021L" title="Office 2021 Laptop" value="<?php echo $O2021L; ?>" required />
										</div>
										<div class="input-container">	
											<label>Office 2021 Nellie Laptop</label>
												 <input class="text" id="myInput" type="text" name="O2021NL" title="Office 2021 Nellie Laptop" value="<?php echo $O2021NL; ?>" required />
										</div>
										<div class="input-container">	
											<label>Office 2021 Ruben Scheepers Laptop</label>
												 <input class="text" id="myInput" type="text" name="O2021RL" title="Office 2021 Ryben Scheepers Laptop" value="<?php echo $O2021RL; ?>" required />
										</div>
										<div class="input-container">
										   <label>Hoe om offcie 2021 se lisensie te gebruik 1</label>
										   <a href="https://pixelcodes.com/microsoft-phone-activation/" target="_blank">
											  <input class="text" id="myInput" type="text" name="HOWTO" title="Hoe om offcie 2021 se lisensie te gebruik 1" value="<?php echo $HOWTO; ?>" required />
										   </a>
										</div>
										<div class="input-container">
										   <label>Hoe om offcie 2021 se lisensie te gebruik 2</label>
										   <a href="https://getcid.info/" target="_blank">
											  <input class="text" id="myInput" type="text" name="HOWTO1" title="Hoe om offcie 2021 se lisensie te gebruik 2" value="<?php echo $HOWTO1; ?>" required />
										   </a>
										</div>
										
										
										
										<div class="input-container">	
											<label>Windows 11 Hendrik</label>
												 <input class="text" id="myInput" type="text" name="W11H" title="Windows 11 Hendrik" value="<?php echo $W11H; ?>" required />
										</div>
										<div class="input-container">	
											<label>Windows 11 Nellie</label>
												 <input class="text" id="myInput" type="text" name="W11N" title="Windows 11 Nellie" value="<?php echo $W11N; ?>" required />
												
										</div>
										<div class="input-container">	
											<label>Malewarebytes</label>
												 <input class="text" id="myInput" type="text" name="MALWAREBYTES"  title="Malewarebytes" value="<?php echo $MALWAREBYTES; ?>" required />
										</div>
										<div class="input-container">	
											<label>EaseUS Todo PCTrans Professional</label>
												 <input class="text" id="myInput" type="text" name="EASEUS" title="EaseUS Todo PCTrans Professional" value="<?php echo $EASEUS; ?>" required />
										</div>
										<div class="input-container">	
											<label>Revo Unistaller Pro</label>
												 <input class="text" id="myInput" type="text" name="REVO" title="Revo Unistaller Pro" value="<?php echo $REVO; ?>" required />
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

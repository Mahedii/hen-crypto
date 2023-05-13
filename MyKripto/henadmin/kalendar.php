<?php
	include 'layouts/session.php';
	include 'layouts/head-main.php';
	include_once 'config.php';

	$status = $statusMsg = ''; 
		if(!empty($_SESSION['status_response']))
		{ 
			$status_response = $_SESSION['status_response']; 
			$status = $status_response['status']; 
			$statusMsg = $status_response['status_msg']; 
		} 

	$postData = ''; 
		if(!empty($_SESSION['postData']))
		{ 
			$postData = $_SESSION['postData']; 
			unset($_SESSION['postData']); 
		}
?>
<!-- Begin page -->


<?php include 'layouts/title-meta.php'; ?>
<div id="layout-wrapper">
<?php include 'layouts/body.php'; ?>
<!-- Begin page --><div id="layout-wrapper">
<?php include 'layouts/menu.php'; ?>
<head>
   
<link href="./assets/css/gkalender.css" rel="stylesheet" />

 <!--datatable css--   add this from 80-95-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <?php include 'layouts/head-css.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>>
<body>




    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
 <form id="basicForm" action="addEvent.php" method="post" enctype="multipart/form-data" name="basicForm">
	<div class="main-content">
		<div class="page-content">
            <div class="container-fluid">
				<div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">My Kalender Byvoeging</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Verskaf asseblief Vereiste veld (*)</a></li>
                                    <li class="breadcrumb-item active">My Kalender Byvoeging</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->	
				<?php if(!empty($statusMsg)){ 
				?>
					<div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
						<?php } 
						?>
								<div class="panel-body">
									<div class="container">
										  <div class="brand-logo"></div>
										  <div class="brand-title">My Kalender Byvoeging</div>
										
												<label>Gebeurtenis  Titel</label>
													<input type="text" name="title" placeholder="Naam van Gebeurtenis" value="<?php echo !empty($postData['title'])?$postData['title']:''; ?>" required="">
												<label>Gebeurtenis Inligting</label>
													<input type="text" name="location" placeholder="Gebeurtenis Inligting" value="<?php echo !empty($postData['location'])?$postData['location']:''; ?>">
												<label>Datum</label>
													<input type="date" name="date" placeholder=".rounded-0" value="<?php echo !empty($postData['date'])?$postData['date']:''; ?>" required="">
												<label>Begin Tyd</label>
													<input type="time" name="time_from" value="<?php echo !empty($postData['time_from'])?$postData['time_from']:''; ?>">
												<label>Eindig van Tyd</label>
													<input type="time" name="time_to" value="<?php echo !empty($postData['time_to'])?$postData['time_to']:''; ?>">
														
														<div class="col-sm-9 col-sm-offset-3">
															<button type="submit" name="submit" value="Add Event"/>Voeg By</button>
														</div>
													
									</div>
										
									</div><!-- panel-footer -->  
								</div>
				
	
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
	</div>
		</form>
    <!-- end main content-->
</body>	
</html>
      


<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<?php

    if (isset($_GET['COIN_SYMBOL'])) {

        $COIN_SYMBOL = $_GET['COIN_SYMBOL'];
        $lccl_id = $_GET['lccl_id'];

        $fetchSql = mysqli_query($pdo,"SELECT cmm.TOTAL_COIN, ckmm.lccl_id, lccl.slug, lccl.platform, lccl.baseAsset, 
        lccl.tradingview_symbol, lccl.symbol FROM cmc_my_munte cmm INNER JOIN cmc_kry_my_munte ckmm 
        ON ckmm.COIN_SYMBOL = cmm.COIN_SYMBOL INNER JOIN live_chart_coin_list_1 lccl ON lccl.id = ckmm.lccl_id
        WHERE cmm.COIN_SYMBOL =  '$COIN_SYMBOL' AND lccl.id='$lccl_id' "); 
		
        $fetchRow = mysqli_fetch_array($fetchSql);

        $rowCount = mysqli_num_rows($fetchSql);

        if($rowCount > 0){

            do{

                $TOTAL_COIN = $fetchRow['TOTAL_COIN'];
                $slug = $fetchRow['slug'];
                $symbol = $fetchRow['symbol'];
                $platform = $fetchRow['platform'];
                $baseAsset = $fetchRow['tradingview_symbol'];

            }while($fetchRow = mysqli_fetch_array($fetchSql));

        }

    }

?>

    <head>
        
        <title>Admin Dashboard</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>

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
                                    <h4 class="mb-sm-0">Munt Besonderhede</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">MUNT</a></li>
                                            <li class="breadcrumb-item active"><?php echo $COIN_SYMBOL; ?></li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
						
						<div style="display: flex;">
							<div class="card" style="flex: 1; margin-right: 180px;">
								<div class="card-header" style="display: flex; align-items: center; justify-content: center;">
									<h5 class="card-title mb-0" style="font-size: 30px; font-weight: bold; color: blue; font-family: Arial, sans-serif;"> Ticker Widget </h5>
								</div>


								<div class="card-body">
									<script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script>
										<div class="livecoinwatch-widget-1" lcw-coin="<?php echo $symbol; ?>" lcw-base="USD" lcw-digits="9" lcw-period="d" lcw-color-tx="#00FF00" lcw-color-pr="#58c7c5" lcw-color-bg="#202334" 		lcw-border-w="1">
										</div>
								</div>
							</div>

							<div class="card" style="flex: 1; margin-right: 180px;">
								<div class="card-header" style="display: flex; align-items: center; justify-content: center;">
									<h5 class="card-title mb-0" style="font-size: 30px; font-weight: bold; font-family: Arial, sans-serif; background: linear-gradient(to right, #8E2DE2, #4A00E0, #00A2FF); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo ucfirst($slug);?></h5>

								</div>
								<div class="card-body">
									<!-- Crypto Converter ⚡ Widget -->
										<crypto-converter-widget shadow symbol live background-color="#00FF00" font-family="cursive" border-radius="0.69rem" fiat="united-states-dollar" crypto="<?php echo $slug; ?>" amount="<?php echo $TOTAL_COIN; ?>" decimal-places="7"></crypto-converter-widget>
											<script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script>
									<!-- /Crypto Converter ⚡ Widget -->
								</div>
							</div>

							<div class="card" style="flex: 1;">
								<div class="card-header" style="display: flex; align-items: center; justify-content: center;">
									<h5 class="card-title mb-0" style="font-size: 30px; font-weight: bold; font-family: Arial, sans-serif; background: linear-gradient(to right, #FFC300, #FF5733, #C70039, #900C3F, #581845); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo ucfirst($slug);?></h5>
								</div>
														
										
								<div class="card-body">
										<crypto-converter-widget shadow symbol live background-color="#5F00BA" font-family="cursive" border-radius="0.69rem" fiat="south-african-rand" crypto="<?php echo $slug; ?>" amount="<?php echo $TOTAL_COIN; ?>" decimal-places="7"></crypto-converter-widget>
											<script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script>
									<!-- /Crypto Converter ⚡ Widget -->
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-12">
						
							<div class="card-body">
								<!-- Crypto Converter ⚡ Widget -->
								<div class="card-header" style="display: flex; align-items: center; justify-content: center;">
									<h5 class="card-title mb-0" style="font-size: 30px; font-weight: bold; font-family: Arial, sans-serif; background: linear-gradient(to right, blue, green, red); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo ucfirst($slug);?></h5>
								</div>
							</div>
							<div class="card-body">
								<!-- TradingView Widget BEGIN -->
								<div class="tradingview-widget-container">
									<div id="hendrikbez" style="height: 680px;"></div>
									
									<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
									<script type="text/javascript">
										new TradingView.widget({
											"autosize": true,
											"container_id": "hendrikbez",
											"symbol": "<?php echo $platform; ?>:<?php echo $baseAsset; ?>",
											"interval": "1",
											"timezone": "Africa/Johannesburg",
											"theme": "dark",
											"style": "1",
											"locale": "en",
											"toolbar_bg": "#f1f3f6",
											"enable_publishing": false,
											"allow_symbol_change": true,
											"show_popup_button": true,
											"withdateranges": true,
											"popup_width": "1000",
											"popup_height": "650",
											"details": true,
											"hotlist": true,
											"Alerts": true,
											"show_latest_news": true,
											"hide_side_toolbar": false,
											"calendar": true,
											"news": [
												"headlines",
												"summary",
												"stocktwits",
												"seekingalpha",
												"benzinga",
												"cnbc",
												"marketwatch",
												"investing",
												"bloomberg",
												"businessinsider",
												"wsj",
												"thehill",
												"reuters",
												"marketbeat",
												"fly"
											],
											"studies": [
												{
												"id": "Candles",
												"params": {
													"color.up": "ffff00",
													"color.down": "#ff0000"
												}
												},
												{
												"id": "Volume@tv-basicstudies",
												"title": "Volume",
												"type": "volume"
												}
											],
											"overrides": {
												"mainSeriesProperties.candleStyle.upColor": "#BF40BF",
												"mainSeriesProperties.candleStyle.downColor": "#FFFF00",
												"mainSeriesProperties.candleStyle.drawWick": true,
												"mainSeriesProperties.candleStyle.drawBorder": true,
												"mainSeriesProperties.candleStyle.borderColor": "grey",
												"mainSeriesProperties.candleStyle.threed": true,
												"mainSeriesProperties.candleStyle.upWickColor": "#BF40BF",
												"mainSeriesProperties.candleStyle.downWickColor": "#FFFF00"
											},
											"indicators_file_name": "indicators.json",
											"custom_css_url": "style.css",
											"favorites": {
												"intervals": [
												"1",
												"5",
												"15",
												"30",
												"60",
												"D",
												"W",
												"M"
												],
												"chartTypes": [
												"Area",
												"Line",
												"Bars",
												"Candles",
												"Hollow Candles",
												"Heiken Ashi",
												"Renko",
												"Kagi",
												"Point & Figure"
												],
												"themes": [
												"Light",
												"Dark"
												]
											},
											"no_referral_id": true,
											client_id: "hendrikbez",
											"alerts": [
												{
												"condition": "last > 50",
												"message": "Price is above 50"
												}
											]
										});
									</script>
									<div class="tradingview-widget-footer">
										<div class="tradingview-widget-name"></div>
										<div class="tradingview-widget-attribution"></div>
									</div>
								</div>
								<!-- TradingView Widget END -->

									
							</div>
						</div>
                	</div>
            		</div>
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <script>
                    $(document).ready(function(){

                        var slug = '<?php echo $slug; ?>';
                        
                        var TOTAL_COIN = '<?php echo $TOTAL_COIN; ?>';

                    });
                </script>

                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <?php include 'layouts/customizer.php'; ?>

        <?php include 'layouts/vendor-scripts.php'; ?>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>
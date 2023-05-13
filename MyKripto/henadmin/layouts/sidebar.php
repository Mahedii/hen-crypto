<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">KRIPTO</span>
            <span class="logo-lg">KRIPTO</span>
            <!-- <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span> -->
        </a>
        <!-- Light Logo-->
        <a href="index.php" class="logo logo-light">
            <span class="logo-sm" style="font-weight: 800;font-size: 14px; color: Lime;">KRIPTO</span>
            <span class="logo-lg" style="font-weight: 800;font-size: 28px; color: Lime;">KRIPTO</span>
            <!-- <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span> -->
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            
            <div id="two-column-menu">
            </div>
			
			
            <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title"><i class="ri-more-fill"></i> <span >Backup/Restore</span></li>
					<li class="nav-item">
						<a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
							aria-expanded="false" aria-controls="sidebarLayouts">
								<i class="fa-solid fa-tape"></i><span>Backup/Restore</span>
						</a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="Backup_eenhede_table.php" class="nav-link" >&nbsp;Backup</a></li>
                            <li class="nav-item"><a href="Restore_eenhede_table.php" class="nav-link" >&nbsp;Restore</a></li>
                        </ul>
                    </div>
                </li> <!-- end Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUtileg" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarUtileg">
                        <i class="mdi mdi-sticker-text-outline"></i> <span >My Kripto Uitleg</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUtileg">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="http://localhost/mykripto/henadmin/coinDetails.php?COINMARKETCAP_ID=15&COIN_SYMBOL=SHIB&lccl_id=8695" class="nav-link" >Shiba Inu</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/mykripto/henadmin/coinDetails.php?COINMARKETCAP_ID=11&COIN_SYMBOL=DOGE&lccl_id=7772" class="nav-link" >Doge coin</a>
                            </li>
                             <li class="nav-item">
                                <a href="http://localhost/mykripto/henadmin/coinDetails.php?COINMARKETCAP_ID=8&COIN_SYMBOL=XRP&lccl_id=7509" class="nav-link" >XRP</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/mykripto/henadmin/coinDetails.php?COINMARKETCAP_ID=2972&COIN_SYMBOL=VOLT&lccl_id=23653" class="nav-link" >Volt 2</a>
                            </li>
							 <li class="nav-item">
                                <a href="http://localhost/mykripto/henadmin/coinDetails.php?COINMARKETCAP_ID=3310&COIN_SYMBOL=FEG&lccl_id=2849" class="nav-link" >FEG</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://localhost/mykripto/henadmin/coinDetails.php?COINMARKETCAP_ID=2900&COIN_SYMBOL=BabyDoge&lccl_id=23656" class="nav-link">BabyDogecoin</a>
                            </li>
							 <li class="nav-item">
                                <a href="http://localhost/mykripto/henadmin/coinDetails.php?COINMARKETCAP_ID=20836&COIN_SYMBOL=DADDYDOGE&lccl_id=23647" class="nav-link">DaddyDoge</a>
                            </li>
                        </ul>
                    </div>
                </li>	
				
				<li class="menu-title"><i class="ri-more-fill"></i> <span >API'S</span></li>
					<li class="nav-item">
						<a class="nav-link menu-link" href="#sidebarLayoutsApi" data-bs-toggle="collapse" role="button"
							aria-expanded="false" aria-controls="sidebarLayoutsApi">
								<i class="fa-solid fa-tape"></i><span>My API'S</span>
						</a>
                    <div class="collapse menu-dropdown" id="sidebarLayoutsApi">
                        <ul class="nav nav-sm flex-column">
							<li class="nav-item"><a href="Nellie_Pille.php" class="nav-link" >&nbsp;Nellie Pille</a></li>
							<li class="nav-item"><a href="Hendrik_Pille.php" class="nav-link" >&nbsp;Hendrik Pille</a></li>
                            <li class="nav-item"><a href="lisensie.php" class="nav-link" >&nbsp;lisensies</a></li>
							<li class="nav-item"><a href="Sim.php" class="nav-link" >&nbsp;Sim</a></li>
							<li class="nav-item"><a href="KriptoApi.php" class="nav-link" >&nbsp;Kripyto</a></li>
							<li class="nav-item"><a href="Privaat.php" class="nav-link" >&nbsp;Privaat</a></li>
							<li class="nav-item"><a href="GoogleApi.php" class="nav-link" >&nbsp;Google API'S</a></li>
							<li class="nav-item"><a href="TwitterApi.php" class="nav-link" >&nbsp;Twitter API'S</a></li>
							<li class="nav-item"><a href="OpenIA.php" class="nav-link" >&nbsp;OpenIA API</a></li>
							<li class="nav-item"><a href="skl.php" class="nav-link" >&nbsp;Skl</a></li>
							<li class="nav-item"><a href="ubs.php" class="nav-link" >&nbsp;Ubs</a></li>
						        </ul>
                    </div>
                </li> <!-- end Menu -->


				<li class="menu-title"><i class="ri-more-fill"></i> <span >Fotos</span></li>
					<li class="nav-item">
						<a class="nav-link menu-link" href="#sidebarLayoutsFotos" data-bs-toggle="collapse" role="button"
							aria-expanded="false" aria-controls="sidebarLayoutsFotos">
								<i class="fa-solid fa-tape"></i><span>Fotos</span>
						</a>
                    <div class="collapse menu-dropdown" id="sidebarLayoutsFotos">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item"><a href="Inhoud_laai.php" class="nav-link" >&nbsp;Laai Huis Inhoud  op SQL</a></li>
						<li class="nav-item"><a href="Inhoud.php" class="nav-link" >&nbsp;Huis Inhoud</a></li>
                        <li class="nav-item"><a href="woonstel_foute_laai.php" class="nav-link" >&nbsp;Laai Woonstel Foute op SQL</a></li>
						<li class="nav-item"><a href="woonstel.php" class="nav-link" >&nbsp;Woonstel Foute</a></li>	
						        </ul>
                    </div>
                </li> <!-- end Menu -->




                <li class="menu-title"><i class="ri-more-fill"></i> <span >Coins</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayoutsNomicCoins" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayoutsNomicCoins">
                        <i class="mdi mdi-view-carousel-outline"></i> <span >Nomics Munte</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayoutsNomicCoins">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a href="NMCallemunte.php" class="nav-link" >Alle beskikbare munte vir Nomics</a></li>
                            <li class="nav-item"><a href="NMCvoegmunteby.php" class="nav-link" >Voeg jou nuwe Nomics munte by</a></li>
                            <li class="nav-item"><a href="NMCinligting.php" class="nav-link" >Verander Nomics munt inligting</a></li>
                        </ul>
                    </div>
                </li> <!-- end Menu -->





                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCoingecko" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCoingecko">
                        <i class="mdi mdi-account-circle-outline"></i> <span >Coingecko Munte</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCoingecko">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="CGOallemunte.php" class="nav-link" >Alle beskikbare munte vir Coingecko</a>
                            </li>
                            <li class="nav-item">
                                <a href="CGOvoegmunteby.php" class="nav-link" >Voeg jou nuwe Coingecko munte by</a>
                            </li>
                            <li class="nav-item">
                                <a href="CGOinligting.php" class="nav-link" >Verander Coingecko munt inligting</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCoinMarketCap" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCoinMarketCap">
                        <i class="mdi mdi-sticker-text-outline"></i> <span >CoinMarketCap Munte</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCoinMarketCap">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="CMCallemunte.php" class="nav-link" >Alle beskikbare munte vir CoinMarketCap</a>
                            </li>
                            <li class="nav-item">
                                <a href="CMCvoegmunteby.php" class="nav-link" >Voeg jou nuweCoinMarketCap munte by</a>
                            </li>
                            <li class="nav-item">
                                <a href="CMCinligting.php" class="nav-link" >Verander CoinMarketCap Munt inligting</a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                
                <li class="menu-title"><i class="ri-more-fill"></i> <span >Components</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Profiel Opstelling </span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="adminSetup.php" class="nav-link" data-key="t-one-page"> Skep Nuwe Profiel </a>
                            </li>
                            <li class="nav-item">
                                <a href="editProfile.php" class="nav-link" data-key="t-nft-landing"> Wysig Profiel</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarUI">
                        <i class="mdi mdi-cube-outline"></i> <span >Dateer Databasis op</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="updateDatabase.php" class="nav-link" data-key="t-one-page"> Databasis </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="LiveChartCoinList.php">
                        <i class="mdi mdi-form-select"></i> <span >Live Chart Coins</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="krag.php">
                        <i class="mdi mdi-layers-triple-outline"></i> <span >Krag</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.html">
                        <i class="mdi mdi-layers-triple-outline"></i> <span >Hoof Blad</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.php">
                        <i class="mdi mdi-puzzle-outline"></i> <span >Kripto</span>
                    </a>
                </li>

				<li class="nav-item">
                    <a class="nav-link menu-link" href="mykalendar.php">
                        <i class="mdi mdi-form-select"></i> <span >Kalendar</span>
                    </a>
                </li>
					
				
					
					
					
					
				 <li class="nav-item">
                    <a class="nav-link menu-link" href="logout.php">
                        <i class="mdi mdi-form-select"></i> <span >Teken uit</span>
                    </a>
                </li>			
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
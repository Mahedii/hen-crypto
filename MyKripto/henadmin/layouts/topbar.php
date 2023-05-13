<?php
// define $admin_name variable
$admin_name = ""; // or assign a default value

// retrieve $admin_name from session or database
if (isset($_SESSION['admin_name'])) {
    $admin_name = $_SESSION['admin_name'];
} else {
    // query database to get admin name
    $admin_name = "John Doe"; // example value
}
?>
<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
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

                    <a href="index.php" class="logo logo-light">
                        <span class="logo-sm">KRIPTO</span>
                        <span class="logo-lg">KRIPTO</span>
                        <!-- <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span> -->
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>


            </div>

            <div class="d-flex align-items-center">

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="assets/images/admin/<?php echo $adminID; ?>/1.jpg"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <!-- use $admin_name in HTML code -->
<span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $admin_name; ?></span>
                               
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Admin</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome!</h6>
                        <!-- <a class="dropdown-item" href="#">
                            <i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> 
                            <span class="align-middle">Profile</span>
                        </a> -->
                        
                        <a class="dropdown-item" href="logout.php">
                            <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> 
                            <span class="align-middle" >Sign Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

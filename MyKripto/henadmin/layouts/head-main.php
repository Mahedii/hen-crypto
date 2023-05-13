<?php
    $isScssconverted = false;

    require_once ("scssphp/scss.inc.php");

    use ScssPhp\ScssPhp\Compiler;

    if($isScssconverted){

        global $compiler;
        $compiler = new Compiler();

        $compine_css = "assets/css/app.min.css";

        $source_scss = "assets/scss/config/material/app.scss";

        $scssContents = file_get_contents($source_scss);

        $import_path = "assets/scss/config/material";
        $compiler->addImportPath($import_path);
        $target_css = $compine_css;

        $css = $compiler->compile($scssContents);

        if (!empty($css) && is_string($css)) {
            file_put_contents($target_css, $css);
        }
    }
    // include language configuration file based on selected language
    $lng = "en";
    if (isset($_GET['lang'])) {
    $lng = $_GET['lang'];
        $_SESSION['lang'] = $lng;
    }
    if( isset( $_SESSION['lang'] ) ) {
        $lng = $_SESSION['lang'];
    }else {
        $lng = "en";
    }
    require_once ("./assets/lang/" . $lng . ".php");
?>

<?php

    require_once ("layouts/connection.php");

    if (@$_SESSION['user_name_ecom']) {
        @$myusername = $_SESSION['user_name_ecom'];
        @$user_id = $_SESSION['user_id'];
    } else {
        header("location: index.php");
    }

    if ($_SESSION['user_id']) 
	{
        $user_id = $_SESSION['user_id'];
        $loggedin_state = 1;
        $_SESSION['loggedin_state'] = 1;
        $a_unique_id = 181050300;
        $_SESSION['a_unique_id'] = $a_unique_id;
		
    } else 
	{
        session_destroy();
        header("location: index.php");
    }

?>

<?php

    $sql119 = mysqli_query($pdo, "SELECT * FROM  admin where admin_id  ='$user_id'  ");
    $productCount119 = mysqli_num_rows($sql119); // count the output amount
    if ($productCount119 > 0)
	{
        while ($row = mysqli_fetch_array($sql119)) 
		{
            $admin_name = $row["admin_name"];
            $ADMIN_USER = $row["admin_user"];
            $ADMIN_PASS = $row["admin_pass"];
            $adminID = $row["admin_id"];
        }
    }


?>

<!DOCTYPE html>
<html lang="<?=$lng?>"  data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
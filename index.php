<?php  ob_start(); ?>

<?php
    session_start();
$msg="";
?>

<?php

if (@$_SESSION['user_name_ecom']) {
    header("location: dashbord.php");
}

?>

<?php

        if (isset($_GET['Verkeerd'])) {
            $wrong=$_GET["Verkeerd"];
            if ($wrong="Ja") {
                $msg="Verkeerde gebruikers naam of wagwoord";
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
	
	<title>Teken in</title>
	<link rel="stylesheet" href="./assets/css/inteken.css">
</head>
<body>
	
	<section>
		<div class="container">
			<form action="checkLogin.php" method="post" class="form">
				<div id="scene">
					<div class="layer" data-depth-x="-0.5" data-depth-y="0.25"><img src="./assets/images/moon.png" class="moon"></div>
					<div class="layer" data-depth-x="0.15"><img src="./assets/images/mountains02.png"></div>
					<div class="layer" data-depth-x="0.25"><img src="./assets/images/mountains01.png"></div>
					<div class="layer" data-depth-x="-0.25"><img src="./assets/images/road.png"></div>
				</div>
		</div>
		<div class="login" data-depth-x="-0.25">
			<h2>Teken aan na jou rekening</h2>
			<div class="inputBox">
   <input type="text" name="username" placeholder="Gebruiker Naam" required />
</div>
<div class="inputBox">
   <input type="password" name="password" placeholder="Wagwoord" required />
</div>
			<div class="inputBox">
				
				<button type="submit" id="btn">Meld aan</button>	
			</div>
			
		</div>
		</form>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script>
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
	</script>
	<script>
function show_hide_password(target){
	var input = document.getElementById('password-input');
	if (input.getAttribute('type') == 'password') {
		target.classList.add('view');
		input.setAttribute('type', 'text');
	} else {
		target.classList.remove('view');
		input.setAttribute('type', 'password');
	}
	return false;
}

</script>
</body>
</html>
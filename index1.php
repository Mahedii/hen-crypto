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
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Teken in</title>
  	<link rel="stylesheet" href="./assets/css/inteken1.css">
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

        <div class="square">
		    <i style="--clr:#00ff0a;"></i>
		    <i style="--clr:#ff0057;"></i>
		    <i style="--clr:#fffd44;"></i>
		        <div class="login">
			        <h2>Teken in</h2>
			    	<div class="inputBx">
                		<input type="text" name="username" placeholder="Gebruiker Naam" required />
			    	</div>
			    	<div class="inputBx">
                		<input type="password" name="password" placeholder="Wagwoord" required />
			    	</div>
			    	<div class="inputBx">
					<input type="submit" name="submit" value="Melt aan" style="--clr:#fff;border-color:#fff;color:#fff;">
			    	</div>
			    </div>
			</form>	
		</div>
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
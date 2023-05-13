<?php 
    session_start();
    include_once ('layouts/connection.php');
?>

<?php 

    // if (@$_SESSION['user_name_ecom'])
    //     @$myusername = $_SESSION['user_name_ecom'];
    // else
    //     header("location: index.php");

?>


<?php

if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Vul asseblief beide die gebruikersnaam en wagwoord velde in!');
}

//Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $pdo->prepare('SELECT ADMIN_ID,ADMIN_USER,ADMIN_NAME,ADMIN_PASS FROM admin WHERE ADMIN_USER = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $admin_user, $admin_name, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if ($_POST['password'] == $password) {

            $_SESSION['user_name_ecom'] = $admin_user;
            $_SESSION['user_id'] = $user_id; 
            

            header("location: dashbord.php");
            
            
            
        } else {
            // Incorrect password
            header("location: index.php?wrong=yes");
            //echo 'Incorrect username and/or password!';
        }
    } else {
        // Incorrect username
        header("location: index.php?wrong=yes");
        //echo 'Incorrect username and/or password!';
    }


	$stmt->close();
}
?>

 

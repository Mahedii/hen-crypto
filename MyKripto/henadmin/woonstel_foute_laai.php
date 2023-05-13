<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kripto";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle the uploaded image
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $name = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $location = "./assets/images/woonstel/";
        if (move_uploaded_file($temp_name, $location.$name)) {
            // Get the current max value from the database
            $query = "SELECT MAX(description) as max_value FROM woonstel_foute";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $value = $row['max_value'];

            // Insert the details into the database
            $description = $_POST['description'];
            $query = "INSERT INTO woonstel_foute (name, date_created, image_location, description) 
        VALUES ('$name', NOW(), '$location$name', '$description')";


            if ($conn->query($query) === true) {
                echo "Image uploaded successfully";
                // Redirect to the page Huis_inhoud.php
                header("Location: woonstel.php");
                exit();
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        } else {
            echo "Error: Failed to move uploaded file.";
        }
    } else {
        echo "Error: File upload field is missing or null.";
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Upload Files</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
/* Resets default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Sets global styles */
body {
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #050505;
}

/* Styles the form container */
form {
    position: fixed;
   
    margin: 0 auto; /* centers the form */
    max-width: 500px;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    border: 5px solid #800080; /* dark purple */
    z-index: 50; /* bring the form container in front of the island */
    pointer-events: all; /* enable click events */
}

/* Styles the labels for form inputs */
label {
    display: block;
    margin: 10px 0;
    text-align: left;
    font-size: 20px;
    color: #333333; /* dark gray */
}

/* Styles the file input */
input[type="file"] {
    background-color: #FF69B4; /* pink */
    color: white;
    font-size: 20px;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    margin: 30px 0;
}

/* Styles the submit button */
input[type="submit"] {
    background-color: #FF69B4; /* pink */
    color: white;
    font-size: 20px;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    margin-top: 20px;
}

/* Styles the text input */
input[type="text"] {
    font-size: 20px;
    padding: 10px;
    border-radius: 20px;
    border: 2px solid #ccc; /* light gray */
    width: 100%;
    box-sizing: border-box;
    outline: none;
}

/* Styles the label for the "description" input */
label[for="description"] {
    color: #023020; /* dark green */
}

/* Styles the label for the "value" input */
label[for="value"] {
    color: #00FFFF; /* light blue */
}

.pyramid 
{
	width: 300px;
	height: 300px;
	transform-style: preserve-3d;
	animation: animate 8s linear infinite;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

}
@keyframes animate 
{
	0%
	{
		transform: rotateX(-30deg) rotateY(0deg);
	}
	100%
	{
		transform: rotateX(-30deg) rotateY(360deg);
	}
}

.container
{
  position: relative;
  top: 0;
  margin: 0 auto; /* centers the form */
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  gap: 100px;
}
.container .box 
{
  position: relative;
  width: 580px;
  height: 470px;
  background: linear-gradient(45deg,#00f376 10%,transparent 10%,transparent 50%,#00f376 50%,#00f376 60%,transparent 60%,transparent 100%);
  background-size: 15px 15px;
  box-shadow: 0 0 0 10px #000, 0 0 0 14px #00f376;
  filter: hue-rotate(calc(var(--i) * 90deg));
  animation: animate 0.5s linear infinite;
}
@keyframes animate 
{
  0% 
  {
    background-position: 0;
  }
  100% 
  {
    background-position: 15px;
  }
}
.container .box::before 
{
  content: '';
  position: absolute;
  inset: 20px;
  background: #000;
}
.container .box::after 
{
  content: '';
  position: absolute;
  inset: 30px;
  border: 3px dashed #00f376;
}
</style>
<div class="pyramid">
		
</div>    
   
<div class="container">
<div class="box" style="--i:3;"></div>



      <form method="post" enctype="multipart/form-data" action="woonstel_foute_laai.php">
     
        <label for="image">Kies 'n prent om te laai vir Woonstel Foute</label>
        <input type="file" name="image">
        <label for="description">Beskrywing:</label>
        <input type="text" name="description">
        <input type="submit" name="submit" value="Upload">
      </form>
    </div>

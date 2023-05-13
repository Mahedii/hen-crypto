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

    // Handle the image uploads
    if ($_FILES['image']['error'] == 0 && isset($_FILES['image2']) && $_FILES['image2']['error'] == 0 && !empty($_FILES['image2']['name'])) {
        // Upload the images
        $name = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $location = "./assets/images/versekering/";

        $name2 = $_FILES['image2']['name'];
        $temp_name2 = $_FILES['image2']['tmp_name'];
        $location2 = "./assets/images/versekering/";

        if (move_uploaded_file($temp_name, $location.$name) && move_uploaded_file($temp_name2, $location2.$name2)) {
            // Insert the details into the database
            $description = $_POST['description'];
            $value = $_POST['value'];
            $query = "INSERT INTO versekering_images (name, name1, date_created, image_location, second_image_location, description, value) VALUES (?, ?, NOW(), ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            if ($stmt !== false) {
                $image_path = $location.$name;
                $second_image_path = $location2.$name2;
                $stmt->bind_param("sssssi", $name, $name2, $image_path, $second_image_path, $description, $value);
                if ($stmt->execute() === true) {
                    echo "Images uploaded successfully";
                } else {
                    echo "Error: " . $stmt->error;
                }
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Error: Failed to move uploaded files.";
        }
    } else {
        echo "Error: Failed to upload one or both images.";
    }

    // Close the database connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Laai Prent</title>
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
    text-shadow: 1px 1px 2px #ccc; /* light gray text shadow */
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
    position: relative;
    z-index: 1;
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
    text-shadow: 1px 1px 2px #ccffcc; /* light green text shadow */
}

/* Styles the label for the "value" input */
label[for="value"] {
    color: #00FFFF; /* light blue */
    text-shadow: 1px 1px 2px #ccffff; /* light blue text shadow */
}

.pyramid 
{
	width: 300px;
	height: 300px;
    left: 0;
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
.pyramid div 
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	transform-style: preserve-3d;
}
.pyramid div span 
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	transform-origin: bottom;
	background: linear-gradient(180deg,#151515,#F433FF);
	clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
	transform: rotateY(calc(90deg * var(--i))) translateZ(150px)  rotateX(30deg); /* 300 / 2 = 150*/;
}
.shadow {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 300px;
  height: 300px;
  background: #F433FF; /* Change background color to bright purple */
  transform: rotateX(90deg) translateZ(-250px);
  filter: blur(20px);
  box-shadow: 0 0 120px rgba(244,51,255,0.2),
              0 0 200px rgba(244,51,255,0.4),
              0 0 300px rgba(244,51,255,0.6),
              0 0 400px rgba(244,51,255,0.8),
              0 0 500px rgba(244,51,255,1);
}
.container
{
  position: relative; /* Sets the position of the container element to be relative to its normal position in the document flow. */
  top: 0; /*  Sets the distance between the top edge of the container and its parent element to 0 */
  margin: 0 auto; /* Sets the margin of the container element to 0 on the top and bottom, and automatically centers it horizontally in 
                  its parent element. */
  display: flex; /* Sets the container element to use the flex layout mode */
  justify-content: center; /* Centers the child elements horizontally along the main axis of the flex container. */
  align-items: center; /* Centers the child elements vertically along the cross axis of the flex container. */
  width: 100%; /* Sets the width of the container element to be 100% of its parent element. */
  gap: 100px; /* Sets the gap between child elements to be 100 pixels. */
}
.container .box 
{
  position: relative; /* sets the position of the element relative to its normal position. */
  width: 580px; /* sets the width of the element to 580 pixels */
  height: 750px; /* sets the height of the element to 670 pixels */
  background: linear-gradient(45deg,#00f376 10%,transparent 10%,transparent 50%,#00f376 50%,#00f376 60%,transparent 60%,transparent 100%); /* creates a gradient background with the specified colors and percentages. */

/* The background: linear-gradient() property sets the background of an element to a linear gradient.

The syntax for a linear gradient is: linear-gradient(direction, color-stop1, color-stop2, ...);

In this specific code, the gradient has a 45 degree angle (45deg) and has 7 color stops (#00f376, transparent, #00f376, #00f376, transparent, transparent, and transparent).

#00f376 10% indicates that the color #00f376 starts at 10% of the gradient's length.
transparent 10% indicates that the color transparent starts at the same point as the previous color, i.e. also at 10% of the gradient's length.
transparent 50% indicates that the color transparent starts at 50% of the gradient's length.
#00f376 50% indicates that the color #00f376 starts at the same point as the previous color, i.e. also at 50% of the gradient's length.
#00f376 60% indicates that the color #00f376 starts at 60% of the gradient's length.
transparent 60% indicates that the color transparent starts at the same point as the previous color, i.e. also at 60% of the gradient's length.
transparent 100% indicates that the color transparent starts at 100% of the gradient's length */

  background-size: 15px 15px; /* sets the size of the background pattern  */
  box-shadow: 0 0 0 10px #000, 0 0 0 14px #00f376; /* creates a shadow effect on the element with the specified dimensions and colors. */
  filter: hue-rotate(calc(var(--i) * 90deg)); /* applies a hue-rotate filter to the element based on a variable called "--i" that is 
                                              calculated by the "calc" function. */
  animation: animate 0.5s linear infinite; /* applies an animation called "animate" to the element with the specified duration, timing 
                                           function, and iteration count. */
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
</head>
<div class="pyramid">
		
</div>

<div class="container">
    <div class="box" style="--i:0;"></div>

    <form method="post" enctype="multipart/form-data" action="Inhoud_Laai.php">
    

        <label for="image">Kies 'n prent om te laai vir Huis Inhoud:</label>
        <input type="file" name="image">
        <label for="description">Beskrywing:</label>
        <input type="text" name="description">
        <label for="value">Waarde:</label>
    <input type="text" name="value" value="R ">
    <br>
    <label for="image2">Image 2:</label>
<input type="file" name="image2" id="image2" accept="image/*">




    <input type="submit" name="submit" value="Upload">
</form>
</div>






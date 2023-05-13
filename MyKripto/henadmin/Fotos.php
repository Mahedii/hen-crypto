<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Versekering</title>
	<style>
	.hidden {
  display: none;
}
	table {
		font-family: 'Comic Sans MS', cursive, sans-serif;
		border-collapse: collapse;
		width: 50%;
		margin: auto;
	}

	td, th {
		border: 1px solid #ddd;
		padding: 8px;
		text-align: left;
	}

	th {
		background-color: #4CAF50;
		color: white;
	}

	tr:nth-child(even) {
		background-color: #f2f2f2;
	}

	tr:nth-child(odd) {
		background-color: #e6e6ff;
	}

	input[type="text"] {
		padding: 8px;
		border-radius: 4px;
		border: 1px solid #ddd;
		width: 80px;
		margin-right: 8px;
	}

	input[type="submit"] {
		background-color: #4CAF50;
		color: white;
		padding: 8px 16px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	img {
		max-width: 100px;
		max-height: 100px;
	}
</style>


</head>
<body>

<?php

// Set the directory where the images are stored
$dir = "./assets/images/versekering/";

// Get a list of files in the directory
$files = scandir($dir);

// Remove "." and ".." from the list of files
$files = array_diff($files, array(".", ".."));

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kripto";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table to store image info
$sql = "CREATE TABLE IF NOT EXISTS versekering_images (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        value VARCHAR(30) NOT NULL,
        date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

if (mysqli_query($conn, $sql)) {
    echo "Table versekering_images created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data and insert into database
    $name = $_POST["name"];
    $value = $_POST["value"];

    $sql = "INSERT INTO versekering_images (name, value) VALUES ('$name', '$value') ON DUPLICATE KEY UPDATE value='$value'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if (mysqli_query($conn, $sql)) {
    echo "<div class='success'>Record updated successfully</div><br>";
} else {
    echo "<div class='error'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div><br>";
}

// Output the data in a table
echo "<table>";
echo "<tr><th>Naam</th><th>Waarde</th><th>Datum</th><th>Image Location</th></tr>";
foreach ($files as $filename) {
    // Construct the full file path
    $file_path = $dir . $filename;

    // Get the file's metadata (e.g. creation date)
    $file_info = stat($file_path);
    $date = date("Y-m-d", $file_info['ctime']);

    // Check if value exists in database
    $sql = "SELECT value FROM versekering_images WHERE name = '$filename'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $value = $row["value"];
    } else {
        $value = "";
    }

    // Output the row in the table
   echo "<tr><form method='POST'><td>" . $filename . "</td><td><input type='text' name='value' value='".(strpos($value, 'R') !== false ? $value : "R ".$value)."'></td><td>" . $date . "</td><td><img src='" . $file_path . "'/></td><td><input type='hidden' name='name' value='$filename'><input type='submit' value='Save'></td></form></tr>";

}

echo "</table>";

// Close the database connection
mysqli_close($conn);

?>
// Add this JavaScript code to the end of your PHP file, just before the closing PHP tag (?>)

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process form data and insert into database
  $name = $_POST["name"];
  $value = $_POST["value"];

  $sql = "INSERT INTO versekering_images (name, value) VALUES ('$name', '$value') ON DUPLICATE KEY UPDATE value='$value'";

  if (mysqli_query($conn, $sql)) {
    // Show success message in popup window
    window.alert('Record updated successfully');
  } else {
    // Show error message in popup window
    window.alert('Error: ' . mysqli_error($conn));
  }
}
</script>
</body>
</html>
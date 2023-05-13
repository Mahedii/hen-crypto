<?php

// MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "kripto";

// Prompt user to enter backup file name/path
$backup_file = readline("Enter backup file name/path: ");

// Connect to MySQL database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Drop database if it already exists
$query = "DROP DATABASE IF EXISTS $dbname";

if (mysqli_query($conn, $query)) {
    echo "Database dropped successfully!\n";
} else {
    echo "Error dropping database: " . mysqli_error($conn) . "\n";
}

// Create database
$query = "CREATE DATABASE $dbname";

if (mysqli_query($conn, $query)) {
    echo "Database created successfully!\n";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "\n";
}

// Restore backup file
$query = "mysql -u $username -p$password $dbname < $backup_file";

// Execute restore query using shell_exec() function
$output = shell_exec($query);

if (empty($output)) {
    echo "Database restored successfully!\n";
} else {
    echo "Error restoring database: " . $output . "\n";
}

// Close MySQL connection
mysqli_close($conn);
?>
<?php include 'layouts/body.php'; ?>
<div id="layout-wrapper">
<?php include 'layouts/menu.php'; ?>
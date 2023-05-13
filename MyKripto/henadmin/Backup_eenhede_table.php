<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kripto";

// Connect to MySQL database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Backup file name
$backupfile = "C:/mylinks/mykripto/henadmin/backup/kripto" . date("Y-m-d") . ".sql";




// Create backup query
$query = "C:/xampp/mysql/bin/mysqldump -u $username -p$password $dbname > $backupfile";

// Output backup query
echo "Query: $query";

// Execute backup query using shell_exec() function
$output = shell_exec($query);

if (empty($output)) {
    echo "Backup created successfully!";
} else {
    echo "Error creating backup: " . $output;
}

// Close MySQL connection
mysqli_close($conn);

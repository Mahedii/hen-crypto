<?php

// Establish connection to database
$conn = mysqli_connect('localhost', 'root', '');

// Select database
mysqli_select_db($conn, 'kripto');

// Get current date
$date = date('Y-m-d');

// Set backup file name and path
$backup_file = "C:/Mylinks/MyKripto/henadmin " . $date . ".sql";

// SQL query to create backup
$backup_query = "mysqldump -u username -p password dbname > " . $backup_file;

// Execute backup query
exec($backup_query);

// Close database connection
mysqli_close($conn);

?>



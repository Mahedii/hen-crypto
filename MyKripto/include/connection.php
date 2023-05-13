<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kripto1";

// Create connection
$pdo= mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (!$pdo) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected Successfully.";
?>
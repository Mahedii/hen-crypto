<?php 
// Include configuration file 
require_once 'config.php'; 
// Create database connection 
$db = new mysqli('localhost', 'root','','kripto'); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?>
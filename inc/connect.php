<?php
// Establish a MySQL database connection
$host = 'localhost';
$username = 'root';
$password = 'Nivashbose';
$database = 'loginform';

$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
else{
    echo "Database connected";
}
// Close the database connection

?>
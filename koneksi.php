<?php
$servername = "localhost"; // Server name (usually localhost)
$database = "library"; // Replace with your database name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// Close the connection
mysqli_close($conn);
?>
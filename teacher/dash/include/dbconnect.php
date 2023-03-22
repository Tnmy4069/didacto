<?php
// Connecting to the Database
$servername = "localhost";
$username = "u312563940_apex2";
$password = "aE40idd#IN#8";
$database = "u312563940_apex2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
echo "";
}

?>
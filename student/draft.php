

<?php
// Connecting to the Database
$servername = "localhost";
$username = "u312563940_apex2";
$password = "aE40idd#IN#8";
$database = "u312563940_apex2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
	echo "Database connected";
}


	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$state = $_POST["state"];
	$city = $_POST["city"];
	$pincode = $_POST["pincode"];
	$area = $_POST["area"];
	$class = $_POST["class"];
	$board = $_POST["board"];
    $ref = $_POST['ref'];



$sql = "INSERT INTO `students` (`name`, `phone`, `email`, `state`, `city`, `pincode`, `area`, `class`, `board`,`ref`, `password`) VALUES ('$name', '$phone', '$email', '$state', '$city', '$pincode', '$area', '$class', '$board', '$ref', '$password')";

if ($conn->query($sql) === TRUE) {
	$user = true;
	echo "Your Registration is Successfull Completed";
	header( "Location: login.php?user=$user" );

  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>
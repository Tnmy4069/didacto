<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
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
	
	$exists = false;
	if (($password == $cpassword)) {
		$sql = "INSERT INTO `students` (`name`, `phone`, `email`, `state`, `city`, `pincode`, `area`, `class`, `board`, `password`) VALUES ('$name', '$phone', '$email', '$state', '$city', '$pincode', '$area', '$class', '$board', '$password')";
		$result = mysqli_query($db, $sql);
		if ($result) {
			$showAlert = "Your Account is Successfully Created";
            header("Location: http://google.com");
		}
	} else {
		$showError = "Passwords do not match";
        header("Location: http://amazon.in");
	}
}

?>
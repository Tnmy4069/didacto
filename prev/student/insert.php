

<?php
// Connecting to the Database
$servername = "sql300.epizy.com";
$username = "epiz_28562269";
$password = "IO11s3frJF9Ij6S";
$database = "epiz_28562269_didact";

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



$sql = "INSERT INTO `students` (`name`, `phone`, `email`, `state`, `city`, `pincode`, `area`, `class`, `board`, `password`) VALUES ('$name', '$phone', '$email', '$state', '$city', '$pincode', '$area', '$class', '$board', '$password')";

if ($conn->query($sql) === TRUE){
	$user = true;
   
	echo "Your Registration is Successfull Completed";
    
	$msg="";
    $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;



	$html="New <b>Student</b> Enrollment $id <hr>id : DIDACTS10$last_id <br>Name : $name <br> phone : $phone <br> Email : $email <br> State : $state <br> City : $city <br> Pincode : $pincode <br> Area : $area <br> Class : $class <br> Board : $board <br> ";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="didactology2021@gmail.com";
	$mail->Password="Apex@2020";
	$mail->SetFrom("didactology2021@gmail.com");
	$mail->addAddress("apexlearninghub2020@gmail.com","$email");
	$mail->IsHTML(true);
	$mail->Subject="New Student Registration DIDACTS10$last_id";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo $id;
		echo "Mail send";
	}else{
		echo "Error occur";
	}
	echo $msg;

	
	header( "Location: login.php?user=$user" );

  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>
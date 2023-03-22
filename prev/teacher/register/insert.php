

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


	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$state = $_POST["state"];
	$city = $_POST["city"];
	$pincode = $_POST["pincode"];
	$area = $_POST["area"];
	$checkbox1=$_POST['class'];  
$chk=""; 
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
	$board = $_POST["board"];
	$qualification = $_POST["qualification"];
	$password = $_POST["password"];


$sql = "INSERT INTO `teacher` (`fname`, `lname`, `phone`, `email`, `state`, `city`, `pincode`, `area`, `class`, `board`, `qualification`, `password`) VALUES ('$fname', '$lname', '$phone', '$email', '$state', '$city', '$pincode', '$area', '$checkbox1', '$board', '$qualification', '$password')";



if ($conn->query($sql) === TRUE ){
	$user = true;
   
	echo "Your Registration is Successfull Completed";
    
    echo'<script>alert("Inserted Successfully")</script>';

	$msg="";

    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    
    

	$html="New <b>Teacher</b> Enrollment <hr>id : DIDACTE10$last_id  <br> First Name : $fname <br> Last Name : $lname <br> phone : $phone <br> Email : $email <br> State : $state <br> City : $city <br> Pincode : $pincode <br> Area : $area <br> Class : $class <br> Board : $board <br> Qualification : $qualification";
	
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
	$mail->addAddress("$email");
	$mail->IsHTML(true);
	$mail->Subject="New Teacher Registration DIDACTS10$last_id ";
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

	
	header( "Location: ../login.php?user=$user" );

  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>
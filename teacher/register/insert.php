

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
	echo "Database connected <HR>";
}


	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$state = $_POST["state"];
	$city = $_POST["city"];
	$pincode = $_POST["pincode"];
	$area = $_POST["area"];
	$class = $_POST["class"];
	$board = $_POST["board"];
    $subject = $_POST['subject'];
	$qualification = $_POST["qualification"];
	$password = $_POST["password"];


$sql = "INSERT INTO `teacher` (`fname`, `lname`, `phone`, `email`, `state`, `city`, `pincode`, `area`, `class`, `board`, `qualification`,`subject`, `password`) VALUES ('$fname', '$lname', '$phone', '$email', '$state', '$city', '$pincode', '$area', '$class' , '$board', '$qualification', '$subject','$password')";



if ($conn->query($sql) === TRUE ){
	$user = true;
   
	echo "Your Registration is Successfull Completed";
    
    echo "<script>alert('Inserted Successfully')</script>";

	$msg="";

    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    $userid = "DIDACTE".$last_id;
    
    $sql = "UPDATE `teacher` SET `userid` = '$userid' WHERE `teacher`.`id` = $last_id";
    $conn->query($sql);




	
	include('smtp/PHPMailerAutoload.php');
$html="New <b>Teacher</b> Enrollment <hr>id : DIDACTS10$last_id  <br> First Name : $fname <br> Last Name : $lname <br> phone : $phone <br> Email : $email <br> State : $state <br> City : $city <br> Pincode : $pincode <br> Area : $area <br> Class : $class <br> Board : $board <br> Qualification : $qualification";
echo smtp_mailer('user_email_id','subject',$html);
function smtp_mailer($email,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "didactology2021@gmail.com";
	$mail->Password = "Apex@2020";
	$mail->SetFrom("didactology2021@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$html;
	$mail->AddAddress($email);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>
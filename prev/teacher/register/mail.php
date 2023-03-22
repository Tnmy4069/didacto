<?php

$msg="";

	$html="New Teacher Aala";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="hirodkarparth07@gmail.com";
	$mail->Password="MSDhoni@7";
	$mail->SetFrom("hirodkarparth07@gmail.com");
	$mail->addAddress("apexlearninghub2020@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Teacher Registration";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "Mail send";
	}else{
		echo "Error occur";
	}
	echo $msg;
}
?>
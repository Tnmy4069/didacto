<h1>THANK YOU PAYMENT SUCCESSFULL </h1>
<h2> We will Contact You Soon </h2>

<?php

$sphone =  $_GET['sphone'];
$cid = $_GET['cid'];
$cname = $_GET["cname"];
$tid = $_GET["tid"];
$tname = $_GET["tname"];
$payment = $_GET['razorpay_payment_id'];


// Create connection
$conn = new mysqli("sql300.epizy.com", "epiz_28562269", "IO11s3frJF9Ij6S", "epiz_28562269_didact");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `transaction` ( `sphone`, `cid`, `cname`, `tid`, `tname`, `payment`, `time`) VALUES ( '$sphone', '$cid', '$cname', '$tid', '$tname', '$payment', CURRENT_TIMESTAMP())";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
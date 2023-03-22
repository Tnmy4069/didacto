<?php



$tid = $_GET['tid'];

$tname = $_GET['tfname'];

$tphone = $_GET['phone'];

$bank = $_GET['bank'];

$name = $_GET['name'];

$acno = $_GET['acno'];

$ifsc = $_GET['ifsc'];

$upi = $_GET['upi'];



echo "$bank has a account with <br> Name : $name  <br> A/C no: $acno  <br>IFSC : $ifsc <br>UPI id :  $upi <br> $tid <br> $tname <br> $tphone";



include '../../include/dbconnect.php';



$sql = "INSERT INTO payment (`tid`, `tname`, `tphone`, `bank`, `name` ,`acno`, `ifsc`, `upi`) VALUES ('$tid', '$tname', '$tphone', '$bank', '$name' ,'$acno', '$ifsc', '$upi')";



if (mysqli_query($conn, $sql)) {

  echo '<script> alert("Bank Account Added Successfully") </script>';

} else {

  echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

header("location:https://didactology.in/teacher/dash/cources/");



?>
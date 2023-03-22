

<?php
require "../include/dpconnect.php";


	$trid = $_GET["trid"];
	$trname = $_GET["trname"];
	$trboard = $_GET["trboard"];
	$trclass = $_GET["trclass"];
	$cid = $_GET["cid"];
	$cname = $_GET["cname"];
	$cname = str_replace(' ', '_', $cname);
	$csubject = $_GET["csubject"];
	$csubject = str_replace(' ', '_', $csubject);
	$cdesc = $_GET["cdesc"];
	$cdesc = str_replace(array("\r\n","\n"),'<br>', $cdesc);
	$cdesc = str_replace(' ', '_', $cdesc);
	$cduration = $_GET["cduration"];
	$cduration = str_replace(' ', '_', $cduration);
	$camt = $_GET["camt"];


    echo "$trid - $trname -  $trboard  - $trclass -  $cid  - $cname -  $csubject -  $cdesc -  $cduration -  $camt <hr>";

	


$sql = "INSERT INTO `courses` (`truid`, `trname`, `trclass`, `trboard`, `cid`, `cname`, `csubject`, `cdesc`, `cduration`, `camt`) VALUES ('$trid', '$trname', '$trclass',' $trboard', '$cid', '$cname', '$csubject' , '$cdesc', '$cduration', '$camt');";

if ($conn->query($sql) === TRUE){
	$user = true;
	echo "Cource Added :)";
    
	$msg="";
}else{
	echo "Database Error: " . mysqli_error($conn) . "<hr> <h1>ALL SET, LITTLE WORK REMAINING </h1>";
}

?>


<?php
    include '../include/dbconnect.php';


	$trid = $_GET["trid"];
	$trname = $_GET["trname"];
	$trboard = $_GET["trboard"];
	$trclass = $_GET["trclass"];
    $tphone = $_GET["phone"];
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
    $tutortime = $_GET["time"];
    $link1 = $_GET["link1"];
    $link2 = $_GET["link2"];
    $link3 = $_GET["link3"];
	$camt = $_GET["camt"];


    echo "$trid - $trname -  $trboard  - $trclass -  $cid  - $cname -  $csubject -  $cdesc -  $cduration -  $camt <hr>";
    echo "$tphone - $tutortime - $link1 , $link2  $link3";

	

$sql = "INSERT INTO `courses` (`truid`, `trname`, `tphone`, `trclass`, `trboard`, `cid`, `cname`, `csubject`, `cdesc`, `cduration`, `time`, `yt1`, `yt2`, `yt3`, `camt`) VALUES ('$trid', '$trname', '$tphone', '$trclass', '$trboard', '$cid', '$cname', '$csubject', '$cdesc', '$cduration', '$tutortime', '$link1', '$link2', '$link3', '$camt');";

if ($conn->query($sql) === TRUE){
	$user = true;
	echo "Cource Added :)";
    header('location: index.php/?cource=1');
	$msg="";
}else{
	echo "Database Error: " . mysqli_error($conn) . "<hr> <h1>ALL SET, LITTLE WORK REMAINING </h1>";
}

?>
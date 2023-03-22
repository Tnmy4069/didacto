<?php 



$sql = "SELECT * FROM teacher WHERE phone=$phone";

$result = $conn->query($sql);





if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

    $tid = $row["id"];

    $tfname = $row["fname"];

    $tlname = $row["lname"];

    $temail = $row["email"];

    $tstate = $row["state"];

    $tcity = $row["city"];

    $tarea = $row["area"];

    $tclass = $row["class"];

    $tboard = $row["board"];

    $tqualification = $row["qualification"];

    $tuid = $row['userid'];

  }

} else {

 header("Location : https://didactology.in/student/dist/");

}







?>
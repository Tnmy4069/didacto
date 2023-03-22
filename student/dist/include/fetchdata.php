
<?php 
$phone = $_COOKIE['phone'];
$sql = "SELECT * FROM students WHERE phone=$phone";
$result = $db->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $sid = $row["id"];
    $sname = $row["name"];
    $semail = $row["email"];
    $sstate = $row["state"];
    $scity = $row["city"];
    $sarea = $row["area"];
    $sclass = $row["class"];
    $sboard = $row["board"];
    $sphone = $row["phone"]
    

  }
} else {
  echo "Plz Login Again, there might be some Error";
}



?>
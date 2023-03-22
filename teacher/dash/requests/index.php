<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student Requests!</title>
  </head>
  <body>

    <?php
    include '../include/navbar.php';
    echo ' <div class="container">';
    include '../include/dbconnect.php';
    $phone = $_COOKIE['phone'];
    include '../include/fetchdata.php';
    $db = $conn;

    $sql = "SELECT * FROM `transaction` WHERE `tid` = '$tuid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
   echo '<h3>You have Request for some couses<h3>';

  while($row = $result->fetch_assoc()) {
      
   
    $id =  $row["id"];
    $sphone=  $row["sphone"];
$payment =  $row["payment"];
    $cname = $row['cname'];
    
// wejiojrirwriojwrijiwejr
$ssql = "SELECT * FROM students WHERE phone=$sphone";
$result2 = $db->query($ssql);


if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    $sname = $row["name"];
    $sclass = $row["class"];
    $sboard = $row["board"];
    

  }
} else {
  echo "Plz Login Again, there might be some Error";
}
// asjkdwajkfjaejakejakdjawkje

    
    
echo "<br>";
echo "$sname for $cname";
echo '<a href="classroom.php"> <button class="btn btn-primary" type="button">Classroom</button></a>';
echo ' <button class="btn btn-success" type="button">Chat</button>';
echo ' <button class="btn btn-secondary" type="button">Student Info</button>';

    echo '<hr>';

    
  }
} else {
  echo '<h1>No Requests till now, have you made any Course??</h1> <br> <a href="../cources">CREATE COURSE NOW </a>';
}
    ?>
  
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
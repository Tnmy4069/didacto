<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../login.php");
    exit;
}
?>


<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php

    require 'include/dbconnect.php';
    require 'include/navbar.php';
    $phone = $_SESSION['username'];
    
     setcookie("phone", "$phone", time()+ 600000000,'/'); // expires after 60 seconds

    include 'include/fetchdata.php';

    ?>

    <div class="container">

    <h2>Hello Didactor </h2>

    <?php

        
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " <h3>You have added some courses in your profile</h3>";
echo 'By Course ID : <b>'. $row["cid"] . ' </b> <br>';
echo "By Course Title : <b> ".$row['cname']." </b> <br>";
    echo "By Course Subject : <b>". $row['csubject'] ."</b> <br>";
     echo "By Course Amount : <b>" .$row['camt']." </b> <br>";
  }
} else {
  echo "Sorry No Course by your ID Found";
}


    ?>



    <hr>

    <h2>There is no Request by student to you till now!</h2>
    <h4>Once Any student enrolled we will notify you on This Dashboard as well as on your Registered MailID</h4>

    <hr>
    This Page is Under Fronted work 

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
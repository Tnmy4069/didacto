<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <title>Add Payment Details</title>
  </head>
  <body>

    <!----Navbar-->


<!-- NAvbar ---->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="https://i.ibb.co/qDWFhYh/imageonline-co-whitebackgroundremoved.png" alt="" width="35" height="35"> &nbsp;Didactology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://didactology.in/teacher/dash/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://didactology.in/teacher/dash/cprofile.php"><b> Account </b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://didactology.in/teacher/dash/stureq">Student Request</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://didactology.in/teacher/dash/cources/">Courses</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-------NAVBAR END------>


<?php

include '../../include/dbconnect.php';
$phone = $_COOKIE['phone'];    
include '../../include/fetchdata.php';

  
$sql = "SELECT * FROM payment WHERE tphone=$phone";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $aid = $row["id"];
    $tid = $row["tid"];
    $bank = $row["bank"];
    $name = $row["name"];
    $acno = $row["acno"];
    $ifsc = $row["ifsc"];
    $upi = $row["upi"];
  
  echo '<script>alert("You have Already add Bank Account to change it kindly Call on 8928772435 from your registered phone number \n kindy Create courses");</script>';
  }
} else {
     $aid = "";
    $tid = "";
    $bank = "";
    $name = "";
    $acno = "";
    $ifsc =  "";
    $upi =  "";
}

 
?>

    <div class="container">

    <h1>Add Bank Account</h1>

    <form method="GET" action="update.php">
        <input  value="<?php echo $tid;?>" name="tid" type="hidden" class="form-control" required="required">
        <input  value="<?php echo $tfname;?>" name="tfname" type="hidden" class="form-control" required="required">
       <input   value="<?php echo $phone;?>"  name="phone" type="hidden" class="form-control" required="required">


  <div class="form-group row">
    <label for="bank" class="col-4 col-form-label">Bank Name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-bank"></i>
          </div>
        </div> 
        <input id="bank" name="bank" type="text" value="<?php echo $bank;?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Your Banking Name</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="name" name="name" value="<?php echo $name;?>" placeholder="Name on your Passbook/Debit Card" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ac/no" class="col-4 col-form-label">Account Number</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-sort-numeric-asc"></i>
          </div>
        </div> 
        <input id="acno" name="acno" type="number" value="<?php echo $acno;?>"  aria-describedby="ac/noHelpBlock" class="form-control">
      </div> 
      <span id="ac/noHelpBlock" class="form-text text-muted">Please Cross Check Properly</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="ifsc" class="col-4 col-form-label">IFSC Code</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-bank"></i>
          </div>
        </div> 
        <input id="ifsc" name="ifsc" value="<?php echo $ifsc;?>" placeholder="ABCD0001234" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="upi" class="col-4 col-form-label">UPI ID</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-bank"></i>
          </div>
        </div> 
        <input id="upi" name="upi"  value="<?php echo $upi;?>" placeholder="999999999@upi" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Create Course</button>
    </div>
  </div>
</form>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
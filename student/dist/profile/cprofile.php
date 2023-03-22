<!doctype html>
<html lang="en">

<head>
    <title>Didactology Teacher Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="../include/css/stylecp.css">
    
     <!-- <link rel="stylesheet" href="style.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>


    <?php
// Connecting to the Database
$servername = "localhost";
$username = "u312563940_apex2";
$password = "aE40idd#IN#8";
$database = "u312563940_apex2";

// Create connection
$db = new mysqli($servername, $username, $password, $database);


if($db){

    echo '';

}else{

    echo "database madhe maati khalali";

}



$showAlert = false;

$showError = false;


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
    $sphone = $row["phone"];
    

  }
} else {
  echo "Plz Login Again, there might be some Error";
}

    ?>




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
          <a class="nav-link active" aria-current="page" href="https://didactology.in/student/dash/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://didactology.in/student/dash/cprofile.php"><b> Account </b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://didactology.in/student/dash/searchT">Search Teacher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://didactology.in/student/dash/cources/">Enrolled Cources</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-------NAVBAR END------>


    <div class="container">
        <div class="row gutters mt-4">
        <!-- <h2 class="h2">Update Profile</h2> -->
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://i.ibb.co/p4qLpgJ/png-transparent-student-cartoon-estudante-college-college-student-avatar-child-face-heroes-removebg.png" alt="Maxwell Admin">
                                </div>
                                <h5 class="user-name"><?php echo $sname; ?></h5>
                                <h6 class="user-email"><?php echo $semail;?></h6>
                            </div>
                            <div class="about">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h5 class="mb-2 text-danger">Update Profile</h5>
                            <hr>                        
                                <h6 class="mb-2 text-primary">Personal Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Enter full name" value="<?php echo $sname; ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" class="form-control" id="eMail" placeholder="Enter email ID" value="<?php echo $semail; ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter phone number" value="<?php echo $phone; ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Didact ID</label>
                                    <input type="text" class="form-control" id="website"  value="<?php echo "DIDACTS1".$sid; ?>">
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mt-3 mb-2 text-primary">Didactor Profile</h6>
                        <figcaption class="figure-caption text-left">* For Class 11th and 12th A,S & C stands for Arts Science and Commerce.(ex. 11S is 11th Science)</figcaption>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <br>
                                <div class="form-group">
                                    <label for="Street">State</label>
                                    <input type="name" class="form-control" id="Street" placeholder="Enter Street" value="<?php echo $sstate; ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="ciTy">City</label>
                                    <input type="name" class="form-control" id="ciTy" placeholder="Enter City" value="<?php echo $scity; ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="sTate">Class</label>
                                    <input type="text" class="form-control" id="sTate" placeholder="Enter State" value="<?php echo $sclass; ?>">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="zIp">Board</label>
                                    <input type="text" class="form-control" id="zIp" placeholder="Zip Code" value="<?php echo $sboard; ?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                <a href="index.php">    <button  type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> </a>
                                  <a href="next.php">   <button type="button" id="submit" name="submit" class="btn btn-primary">Next</button> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
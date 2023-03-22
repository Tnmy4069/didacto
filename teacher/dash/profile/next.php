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
  require '../include/dbconnect.php';
$phone = $_COOKIE['phone'];
  require '../include/fetchdata.php';	
$showAlert = false;

$showError = false;


    $phone = $_COOKIE['phone'];
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
                                    <img align="center" src="https://i.ibb.co/p4qLpgJ/png-transparent-student-cartoon-estudante-college-college-student-avatar-child-face-heroes-removebg.png" alt="Maxwell Admin" width="90" height="90">
                                </div>
                                <h5 class="user-name" align="center"><?php echo "$tfname $tlname"; ?></h5>
                                <h6 class="user-email"><?php echo $temail;?></h6>
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
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h5 class="mb-2 text-danger">Update Profile</h5>
                            <hr>                        
                                <h6 class="mb-2 text-primary">Personal Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Profile Picture</label>
                                    <input type="file" accept="image/png, image/gif, image/jpeg , image/jpg"  class="form-control" id="fullName" name="file" placeholder="Enter full name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="eMail" placeholder="Previous Year Percentage" name="phone" value="<?php echo $phone; ?>">
                                </div>
                              
                            </div>
                        </div>

                        <hr>
                      
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                <a href="index.php">    <button  type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> </a>
                                   <input type="submit" id="submit" name="submit" class="btn btn-primary">  </form>
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
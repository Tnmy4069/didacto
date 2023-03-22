

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

 <?php 
 //   echo $_GET["DIDACTE"];
    $pid =  $_GET["DIDACTE"];
    

  include '../include/dbconnect.php';
  
  
$sql = "SELECT * FROM teacher WHERE id=$pid";
$result = $db->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $tid = $row["id"];
    $tuserid = $row["userid"];
    $tfname = $row["fname"];
    $tlname = $row["lname"];
    $temail = $row["email"];
    $tstate = $row["state"];
    $tcity = $row["city"];
    $tarea = $row["area"];
    $tclass = $row["class"];
    $tboard = $row["board"];
    $tphone = $row["phone"];
    $tsubject = $row["subject"];
    $tqualification = $row["qualification"];

//   echo $tfname . $tcity . $tid ; 

  }
} else {
  echo "Plz Login Again, there might be some Error";
}

 
?>

<div class="container">
    <div class="main-body">
   

    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">Teacher</a></li>
              <li class="breadcrumb-item active" aria-current="page">Teacher Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo "$tfname $tlname";?></h4>
                      <p class="text-secondary mb-1"><?php echo $tboard; ?></p>
                      <p class="text-muted font-size-sm"><?php echo $tclass; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Qualification</h6>
                    <span class="text-secondary"><?php echo $tqualification; ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Teacher Userid</h6>
                    <span class="text-secondary"><?php echo $tuserid; ?></span>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "$tfname $tlname";?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Board</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo "$tboard";?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Prefferd Subject</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <b> <?php echo "$tsubject";?> </b> - You can ask for your different subject also
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">DIDACTOR ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      DIDACTE<?php echo "$pid";?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Area</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo "$tarea";?>,<?php echo "$tcity";?>,<?php echo "$tstate";?>
                    </div>
                  </div>
                  <hr>
                  
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">

                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Courses</i></h6><hr>

                         <?php 
   
 
$sql = "SELECT * FROM `courses` WHERE `truid` = '$tuserid'";
$result = $db->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $cid = $row["id"];
    echo "<h5> $row[cname] </h5>";
echo "<h6> $row[cdesc]</h6>";
echo '<a name="course1" id="course1" class="btn btn-primary" href="course.php?C='.$row[id].'" role="button">Course info</a>';
echo "<hr>";
  

  }
} else {
  echo "Sorry, No Course offered till now";
}

 
?>               
                    </div>
                  </div>
                </div>
                
              </div>



            </div>
          </div>

        </div>
    </div>

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>
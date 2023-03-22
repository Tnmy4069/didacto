

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

 <?php 
 //   echo $_GET["DIDACTE"];
    $pid =  $_GET["C"];
    

  include '../include/dbconnect.php';
  



  
 
$sql = "SELECT * FROM `courses` WHERE `id` = '$pid'";
$result = $db->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $cid = $row["id"];
    $tuserid = $row["truid"];
    $tname = $row["trname"];
    $tclass = $row["trclass"];
    $tboard = $row["trboard"];
    $cname = $row["cname"];
    $cname = str_replace('_', ' ', $cname);
    $csubject = $row["csubject"];
    $cdesc = $row["cdesc"];
    $time = $row["time"];
    $yt1 = $row["yt1"];
    $yt2 = $row["yt2"];
    $yt3 = $row["yt3"];
    $camt = $row["camt"];


  }
} else {
  echo "Course not found";
}

 


  

$sql = "SELECT * FROM `teacher` WHERE `userid` = '$tuserid'";
$result = $db->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $tqualification = $row['qualification'];
      $tsubject = $row['subject'];
      $tarea = $row['area'];
      $tcity = $row['city'];
      $tstate = $row['state'];
     

  }
} else {
  echo "Sorry, No Course offered till now";
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
              <li class="breadcrumb-item active" aria-current="page">Course Info</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                   <img class="responsive-iframe" src="https://img.freepik.com/free-vector/cute-boy-study-with-laptop-cartoon-icon-illustration-education-technology-icon-concept-isolated-flat-cartoon-style_138676-2107.jpg?size=338&ext=jpg" alt="Admin" class="rounded-circle" width="150" height="150"></iframe>
                    <div class="mt-3">
                      <h4><?php echo "$cname";?></h4>
                      <p class="text-secondary mb-1"><?php echo $csubject; ?></p>
                      <p class="text-muted font-size-sm"><?php echo $tclass; ?></p>



                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                    <form method="GET" action="paynet/payscript.php">
                    <div class="paynet/payscript.php">
                        <input type="hidden" class="love" name="sphone" value="<?php echo $_COOKIE['phone'];?>""/>
                        <input type="hidden" class="love" name="name" value="<?php echo $tuserid."C".$cid?>" />
                        <input type="hidden" class="love" name="cid" value="<?php echo $cid ; ?>" />
                        <input type="hidden" class="love" name="cname" value="<?php echo $cname ; ?>" />
                        <input type="hidden" class="love" name="tid" value="<?php echo $tuserid ; ?>" />
                        <input type="hidden" class="love" name="tname" value="<?php echo $tname ; ?>" />
                        <input type="hidden" class="love" name="amt" value="<?php echo $camt ; ?>" />
                        <input type="submit" role="button" value="Pay Now"/>
                    </div>
                        
                    <style>
                        .love{
                            display :none;
                            visibility: hidden;
                        }
                    </style>

                     


  </form>







                    
                    
                    
                    
                    
                    
                    
                    
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
                      <?php echo "$tname";?>
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
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">DEMO LECTURE</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     
<div id="carouselExampleSlidesOnly" class="carousel slide" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <iframe class="responsive-iframe" src="<?php echo $yt1; ?>" width="70%" height="140"></iframe>
    </div>
    <div class="carousel-item">
  <iframe class="responsive-iframe" src="<?php echo $yt1; ?>" width="70%"></iframe>
      </div>
    <div class="carousel-item">
  <iframe class="responsive-iframe" src="<?php echo $yt1; ?>" width="70%"></iframe>
      </div>
  </div>
</div>
                 


  
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">

                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Similar Courses</i></h6><hr>

                         <?php 
   
 
$sql = "SELECT * FROM `courses` WHERE `truid` = '$tuserid'";
$result = $db->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $cid = $row["id"];

    $cname = $row["cname"];
    $cname = str_replace('_', ' ', $cname);

    $cdesc = $row["cdesc"];
      $cdesc = str_replace('_', ' ', $cdesc);
    echo "<h5> $cname </h5>";
echo "<h6> $cdesc</h6>";
echo '<a name="course1" id="course1" class="btn btn-primary" href="https://didactology.in/student/dist/searchT/course.php?C='.$row['id'].'" role="button">Course info</a>';
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
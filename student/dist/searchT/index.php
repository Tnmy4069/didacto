<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>People  List</title>
  
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


</head>
<body>
<header>

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
<hr>
</header>





<div class="container">


<?php 
  include '../include/dbconnect.php';
 
$sql = "SELECT * FROM teacher";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){
         

echo '<div class="nearby-user">';
echo '<div class="row">';
echo '<div class="col-md-2 col-sm-2">';
echo '<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="profile-photo-lg">';
echo '</div>';
echo '<div class="col-md-7 col-sm-7">';
echo '<h5><a href="#" class="profile-link">'. $row['fname'] .' ' .$row['lname'].'</a></h5>';
echo '<p>'. $row['class'] .'</p>';
echo '<p class="text-muted">'. $row['userid'] .'</p>';
echo '<p class="text-muted">'. $row['subject'] .'</p>';
echo '</div>';
echo '<div class="col-md-3 col-sm-3">';
echo '<a href="profile.php?DIDACTE='.$row['id'].'"><button  class="btn btn-primary pull-right">View Profile</button></a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<hr>';

           
        }
        
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
?>

 

<style type="text/css">
body{
    margin-top:20px;
    background:#FAFAFA;    
}
/*==================================================
  Nearby People CSS
  ==================================================*/

.people-nearby .google-maps{
  background: #f8f8f8;
  border-radius: 4px;
  border: 1px solid #f1f2f2;
  padding: 20px;
  margin-bottom: 20px;
}

.people-nearby .google-maps .map{
  height: 300px;
  width: 100%;
  border: none;
}

.people-nearby .nearby-user{
  padding: 20px 0;
  border-top: 1px solid #f1f2f2;
  border-bottom: 1px solid #f1f2f2;
  margin-bottom: 20px;
}

img.profile-photo-lg{
  height: 80px;
  width: 80px;
  border-radius: 50%;
}

p{
    margin : 0;
}

</style>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

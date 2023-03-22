<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../login.php");
    exit;
}

require 'include/dbconnect.php';
    $phone = $_SESSION['username'];
    
     setcookie("phone", "$phone", time()+ 600000000,'/'); // expires after 60 seconds

    include 'include/fetchdata.php';
?>


<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome <?php echo $tfname;?></title>

      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>



  
      <input type="checkbox" id="active">
      <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
      <div class="wrapper">
         <ul>
            <li><a href="cprofile.php">Account</a></li>
            <li><a href="#">Request</a></li>
            <li><a href="cources">course</a></li>
            <li><a href="https://didactology.in/new/ndidact/contact.html">Contact Us</a></li>
            <li><a href="https://bit.ly/DidactFeedback">Feedback</a></li>
         </ul>
      </div>
      <div class="content">
         <div class="title">
            Welcome to Didactology Teachers Panel
         </div>
         <p>
            click on menu button to go ahed
            <hr>

        
         </p>
      </div>
   </body>
</html>



    <!-- Optional JavaScript -->
    
</body>

</html>
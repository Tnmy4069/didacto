<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../login.php");
    exit;
}

require 'include/dbconnect.php';
    $phone = $_SESSION['username'];
    
     setcookie("phone", "$phone", time()+ 600000000,'/'); // expires after 60 seconds

    include 'include/fathed.php';

?>


<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome <?php echo $sname;?></title>

     <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60ddb07c65b7290ac638e417/1f9gviqoc';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->

      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>



  
      <input type="checkbox" id="active">
      <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
      <div class="wrapper">
         <ul>
            <li><a href="profile/profile.php">My Profile</a></li>
            <li><a href="requests">Request</a></li>
            <li><a href="cources">Courses</a></li>
            <li><a href="refer">Refer & Earn</a></li>
            <li><a href="https://bit.ly/DidactFeedback">Feedback</a></li>
             <li><a href="../logout.php">Logout</a></li>
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
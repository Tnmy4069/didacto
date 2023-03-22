<?php


 $phone = $_COOKIE['phone'];
 echo '<!-- <script> alert("'. $phone . '");</script> -->';
 $cookie_name = "phone";
 setcookie($cookie_name, $phone, time() + 8640000000, "/"); // 86400 = 1 day
 
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Didactology Student Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>
<body>




<!-- partial:index.partial.html -->
	<a href="#" class="logo" target="_blank">
	<h2>Didactology<h2>
	</a>

  	<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  	<label for="menu-icon"></label>
  	<nav class="nav"> 		
  		<ul class="pt-5">
  			<li><a href="profile/cprofile.php"> My Account </a></li>
  			<li><a href="searchT">Search Teacher</a></li>
  			<li><a href="classes">My Classes</a></li>
  			<li><a href="refer">Refer and Learn</a></li>
  			<li><a href="contact">Contact</a></li>
            <li><a href="../logout.php">Logout</a></li>
  		</ul>
  	</nav>

  	<div class="section-center">
  		<h3 class="mb-0">Welcome to Didactology Student Panel</h3>
      <p class="mt-3">
        Here's are some of our best Didactors
        
      </p>
  	</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>

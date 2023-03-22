<!DOCTYPE html>
<html lang="en">
<?php

if (empty($_GET)) {
    $ref = "0";
}else{
    $ref = $_GET['ref'];
    echo '<script> alert("Refferd link");</script>';
}


?>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Didactology &mdash; Student Registration</title>

	<link rel="stylesheet" type="text/css" href="css/my-login.css">

    	<link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css" />
	<script src="../compo/cities.js"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		img {
			border-width: 0;
		}

		* {
			font-family: 'Lucida Grande', sans-serif;
		}
	</style>

    

	<script src="compo/cities.js"></script>	

</head>
<body>
<style>


</style>
<header class="header_area white-header">
<div class="main_menu">
<div class="search_input" id="search_input_box" style="display: none;">
<div class="container">
<form class="" method="" action="">
<input type="text" class="form-control" id="search_input" placeholder="Search Here">
<button type="submit" class="btn"></button>
<span class="ti-close" id="close_search" title="Close Search"></span>
</form>
</div>
</div>
</div>
</header>

<section class="center">
	<div class="">
		<div class="row ">
			<div class="">
				<div class="brand">

					
                    
<nav class="navbar navbar-expand-lg  bg-dark navbar-dark">
<div class="container">

<a class="navbar-brand logo_h" href="index.html">
<h4 class="h4 lologo"><img src="../img/logo.png" height="53" width="53" alt="ALH" border="0"><font color="white"> &nbsp; Didactology </h4></font><font color="white" size="3"> The Way of Learning </font>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
<span class="icon-bar"></span> <span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<div class="navbar-collapse offset collapse show" id="navbarSupportedContent" style="">
<ul class="nav navbar-nav menu_nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="index.html">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about-us.html">About</a>
</li>

<li class="nav-item">
<a class="nav-link" href="teacher/login.php">Teacher Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="student/login.php">Student Login</a>
</li>
</div>
</div>
</nav>
				</div>
                
				<div class="card fat">
					<div class="card-body">

						<h4 class="card-title">Diactology Student Registration </h4>
						

						<form method="POST" class="my-login-validation" novalidate="" action="draft.php">
							<div class="form-group">
								<label for="name">Name</label>
								<input  class="single-input"  id="name" type="text" class="form-control" name="name" required autofocus>
								<div class="invalid-feedback">
									What's your name?
								</div>
							</div>

							<div class="form-group">
								<label for="name">Phone</label>
								<input  class="single-input"  id="name" type="number" class="form-control" name="phone" max="9999999999" required autofocus>
								<div class="invalid-feedback">
									10 Digit Mobile Number
								</div>
							</div>

							<div class="form-group">
								<label for="email">E-Mail Address</label>
								<input class="single-input"  id="email" type="email" class="form-control" name="email" required>
								<div class="invalid-feedback">
									Your email is invalid
								</div>
							</div>

							<div class="form-group">
								<div class="form-group">
									<label for="class">Class</label>
									<div class="select">
										<select required class="single-input"  class="form-control"  onchange='CheckColors(this.value)'; name="class">
											<option selected>Select Class</option>
											<option value="10">Class 10</option>
											<option value="9">Class 9</option>
											<option value="8">Class 8</option>
											<option value="7">Class 7</option>
											<option value="6">Class 6</option>
											<option value="5">Class 5</option>
											<option value="4">Class 4</option>
											<option value="3">Class 3</option>
											<option value="2">Class 2</option>
											<option value="11A">Class 11 Arts</option>
											<option value="11S">Class 11 Science</option>
											<option value="11C">Class 11 Commerce</option>
											<option value="12A">Class 12 Arts</option>
											<option value="11S">Class 12 Science</option>
											<option value="11C">Class 12 Commerce</option>
                                            <option id="othercolor" value="other">Other</option>
										</select>

                                        <input type="text" name="othercolor" id="othercolor"  style='display:none;'/>

									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="board">Board</label>
								<div class="select">
									<select  class="single-input" class="form-control" name="board" required id="board">
										<option>State Board</option>
										<option>CBSE</option>
										<option>ICSE</option>
									</select>
								</div>
							</div>

							<div class=" form-group">
								<div class="form-group">
									<label for="state">State</label>
									<select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="single-input"  class="form-control" required></select>
									<select id="state" name="city" class="single-input" class="form-control" required></select>
									<script language="javascript">
										print_state("sts");
									</script>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Area PINCODE</label>
								<input  class="single-input" id="pincode" type="number" class="form-control" name="pincode" max="999999" required autofocus>
								<div class="invalid-feedback">
									Enter Valid Pincode(You may find on Electricty Bill or Water Bill)
								</div>
							</div>
							<p id="city"></p>
							<div class="form-group">
								<label for="name">Area Name</label>
								<input id="name" class="single-input"  type="text" placeholder="Saraswati Nagar" class="form-control" name="area" max="999999" required autofocus>
								<div class="invalid-feedback">
									Enter Area/Colony Name
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input id="password" class="single-input"  type="password" class="form-control" name="password" required data-eye>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<div class="form-group">
								<label for="password">Confirm Password</label>
								<input id="password" class="single-input"  type="password" class="form-control" name="cpassword" required data-eye>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<div class="form-group">
								<div class="custom-checkbox custom-control">
									<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
									<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
									<div class="invalid-feedback">
										You must agree with our Terms and Conditions
									</div>
								</div>
							</div>

                             <input type="hidden" id="" name="ref" value="<?php echo $ref;?>">

							<div class="form-group m-0">
								<button type="submit" class="btn btn-primary btn-block">
									Register
								</button>
							</div>
							<div class="mt-4 text-center">
								Already have an account? <a href="index.html">Login</a>
							</div>
						</form>
					</div>
				</div>
				<div class="footer">
					Copyright &copy; 2021 &mdash; Powered by Apex Learning Hub
				</div>
			</div>
		</div>
	</div>
</section>

<script src="js/my-login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<hr>
</body>

</html>
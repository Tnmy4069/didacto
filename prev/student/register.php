<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Didactology&mdash; Student Registration</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">

    	<link rel="stylesheet" href="../../css/flaticon.css" />
    <link rel="stylesheet" href="../../css/themify-icons.css" />
    <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../../css/style.css" />
	<script src="../compo/cities.js"></script>
	

	<style type="text/css">
		img {
			border-width: 0;
		}

		* {
			font-family: 'Lucida Grande', sans-serif;
		}
	</style>

    <script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('othercolor');
 if(val=='other')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="compo/cities.js"></script>	

</head>
   <div class="main_menu header_area">
			 <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html">
              <img class="logo-2" src="img/logo2.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">About</a>
                </li>
                <li class="nav-item submenu dropdown active">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Pages</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="courses.html">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="course-details.html"
                        >Course Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="elements.html">Elements</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Blog</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
	  </div>



<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-md-center h-100">
			<div class="card-wrapper">
				<div class="brand">
					
					
				</div>
				<div class="card fat">
					<div class="card-body">

						<h4 class="card-title">Diactology Student Registration </h4>
						

						<form method="POST" class="my-login-validation" novalidate="" action="insert.php">
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
										<select  class="single-input"  class="form-control"  onchange='CheckColors(this.value)'; name="class">
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

                                        <input type="text" name="othercolor" id="othercolor" style='display:none;'/>

									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="board">Board</label>
								<div class="select">
									<select  class="single-input" class="form-control" name="board" id="board">
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
									<select id="state" name="city" class="form-control" required></select>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<hr>
</body>

</html>
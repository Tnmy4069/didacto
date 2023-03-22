<!doctype html>
<html lang="en">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="compo/cities.js"></script>	
</head>

<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Didactology</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Apex Learning hub</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Teacher</a>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="teacher/login.php">Log In</a>
						<a class="dropdown-item" href="teacher/register.php">Register</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a name="login-btn" id="login-btn" class="btn btn-outline-primary m-2 my-sm-0" href="student/login.php" role="button">Log In</a>

				<a name="register-btn" id="register-btn" class="btn btn-success m-2 my-sm-0" href="student/login.php" role="button">Log In</a>

		</div>
	</nav>


	<div class="container">
		<div class="card">

			<h5 class="card-header info-color white-text text-center py-4">
				<strong>Didactology Teacher Registration</strong>
			</h5>

			<div class="card-body px-lg-5 pt-0">

				<form class="my-login-validation" method="POST" action="insert.php">
					<label for="materialRegisterFormFirstName">First name</label>
					<input type="text" name="fname" id="materialRegisterFormFirstName" class="form-control" required>

					<label for="materialRegisterFormLastName">Last name</label>
					<input type="text" name="lname"  id="materialRegisterFormLastName" class="form-control">

					<label for="materialRegisterFormPhone">Phone number</label>
					<input type="number"  name="phone"  maxlength="10" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">

					<label for="materialRegisterFormEmail">E-mail</label>
					<input type="email"  name="email"  id="materialRegisterFormEmail" class="form-control">

					<div class=" form-group">
								<div class="form-group">
									<label for="state">State</label>
									<select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="form-control" required></select>
									<select id="state" name="city" class="form-control" required></select>
									<script language="javascript">
										print_state("sts");
									</script>
									</select>
								</div>
							</div>

					<label for="input">Area Pincode</label>
					<input type="text" id="input"  name="pincode"  class="form-control" placeholder="">

					<small id="helper" class="form-text text-muted mb-4">Area Pincode you prefer to teach offline</small>

					<label for="input">Area Name(Saraswati Nagar)</label>
					<input type="text" id="input"  name="area"  class="form-control" placeholder="">

					<label for="input">Qualification</label>
					<input type="text" id="input"name="qualification"  class="form-control" placeholder="">

					<label for="input">Class and Board You Prefer</label>
					<div class="form-group">
								<div class="form-group">
									<div class="select">
										<select class="form-control" name="class" id="class">
											<option selected>Select Class</option>
											<option value="10">Class 10</option>
											<option value="9">Class 9</option>
											<option value="8">Class 8</option>
											<option value="7">Class 7</option>
											<option value="6">Class 6</option>
											<option value="11A">Class 11 Arts</option>
											<option value="11S">Class 11 Science</option>
											<option value="11C">Class 11 Commerce</option>
											<option value="12A">Class 12 Arts</option>
											<option value="11S">Class 12 Science</option>
											<option value="11C">Class 12 Commerce</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="select">
									<select class="form-control" name="board" id="board">
										<option value="state">State Board</option>
										<option value="cbse">CBSE</option>
										<option value="icse">ICSE</option>
										<option value="oth">Other or Multiple Board</option>
									</select>
								</div>
							</div>

					<label for="materialRegisterFormPassword">Password</label>
					<input type="password" name="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">

					<label for="materialRegisterFormPassword">Confirm Password</label>
					<input type="cpassword" name="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">


					<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
						At least 8 characters and 1 digit
					</small>

					<div class="form-check mb-4">
						<input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
						<label class="form-check-label"  name="cpassword" for="materialRegisterFormNewsletter">You agree our Terms and Condition</label>
					</div>


					<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>

					<div class="text-center">
						<p>or sign up with:</p>

						<a type="button" class="btn-floating btn-fb btn-sm">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a type="button" class="btn-floating btn-tw btn-sm">
							<i class="fab fa-twitter"></i>
						</a>
						<a type="button" class="btn-floating btn-li btn-sm">
							<i class="fab fa-linkedin-in"></i>
						</a>
						<a type="button" class="btn-floating btn-git btn-sm">
							<i class="fab fa-github"></i>
						</a>

						<hr>

						<p>By clicking
							<em>Sign up</em> you agree to our
							<a href="" target="_blank">terms of service</a> and
							<a href="" target="_blank">Privacy Policy</a>.
						</p>
					</div>

				</form>
			</div>
		</div>
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
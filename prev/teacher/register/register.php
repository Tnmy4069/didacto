<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Didactology&mdash; Student Registration</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<script src="../compo/cities.js"></script>

	


	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
	<script src="compo/cities.js"></script>

</head>



<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-md-center h-100">
			<div class="card-wrapper">
				<div class="brand">


				</div>
				<div class="card fat">
					<div class="card-body">
						<h4 class="card-title">Diactology Teacher Registration </h4>


						<form method="POST" class="my-login-validation" action="insert.php">
							<div class="form-group">
								<label for="name">First Name</label>
								<input id="name" type="text" class="form-control" name="fname" required autofocus />
								<div class="invalid-feedback">
									What's your first name?
								</div>
							</div>

							<div class="form-group">
								<label for="name">Last Name</label>
								<input id="name" type="text" class="form-control" name="lname" required autofocus />
								<div class="invalid-feedback">
									What's your surname?
								</div>
							</div>

							<div class="form-group">
								<label for="name">Phone</label>
								<input id="name" type="number" class="form-control" name="phone" maxlength="10" required autofocus />
								<div class="invalid-feedback">
									10 Digit Mobile Number
								</div>
							</div>

							<div class="form-group">
								<label for="email">E-Mail Address</label>
								<input id="email" type="email" class="form-control" name="email" required>
								<div class="invalid-feedback">
									Your email is invalid
								</div>
							</div>

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


							<div class="form-group">
								<!--	<div class="form-group">
									<label for="class">Select Class and Board Your Prefer to Teacher</label>
									<div class="select">
										<select class="form-control"  onchange='CheckColors(this.value)'; name="class">
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
                                            <option value="other">Other</option>
										</select>
									</div>
								</div> -->
								<hr>
								<div class="form-group">
									<h5>
										<label for="class"><b>Select Class and Board Your Prefer to Teacher</b></label><br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox1" value="10">
											<label class="form-check-label" for="inlineCheckbox1">Class 10</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox2" value="9">
											<label class="form-check-label" for="inlineCheckbox2">Class 9</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="8">
											<label class="form-check-label" for="inlineCheckbox3">Class 8</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="7">
											<label class="form-check-label" for="inlineCheckbox3">Class 7</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="6">
											<label class="form-check-label" for="inlineCheckbox3">Class 6</label>
										</div>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="5">
											<label class="form-check-label" for="inlineCheckbox3">Class 5</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="4">
											<label class="form-check-label" for="inlineCheckbox3">Class 4</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="3">
											<label class="form-check-label" for="inlineCheckbox3">Class 3</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="2">
											<label class="form-check-label" for="inlineCheckbox3">Class 2</label>
										</div>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="11A">
											<label class="form-check-label" for="inlineCheckbox3">Class 11 Arts</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="11S">
											<label class="form-check-label" for="inlineCheckbox3">Class 11 Science</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="11C">
											<label class="form-check-label" for="inlineCheckbox3">Class 11 Commerce</label>
										</div>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="12A">
											<label class="form-check-label" for="inlineCheckbox3">Class 12 Arts</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="12S">
											<label class="form-check-label" for="inlineCheckbox3">Class 12 Science</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="12C">
											<label class="form-check-label" for="inlineCheckbox3">Class 12 Commerce</label>
										</div>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" name="class[]" type="checkbox" id="inlineCheckbox3" value="other">
											<label class="form-check-label" for="inlineCheckbox3">Other</label>
										</div>
									</h5>



								</div>

							</div>
							<div class="form-group">

								<div class="select">
									<select class="form-control" name="board" id="board">
										<option>State Board</option>
										<option>CBSE</option>
										<option>ICSE</option>
										<option>Other or Multiple</option>
									</select>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Area PINCODE</label>
								<input id="pincode" type="number" class="form-control" minlength="5" name="pincode" max="999999" required autofocus>
								<div class="invalid-feedback">
									Enter Valid Pincode(You may find on Electricty Bill or Water Bill)
								</div>
							</div>
							<p id="city"></p>
							<div class="form-group">
								<label for="name">Area Name</label>
								<input id="name" type="text" placeholder="Saraswati Nagar" class="form-control" name="area" required autofocus>
								<div class="invalid-feedback">
									Enter Area/Colony Name
								</div>
							</div>

							<div class="form-group">
								<label for="name">Qualificaion</label>
								<input id="name" type="text" placeholder="" class="form-control" name="qualification" required autofocus>
								<div class="invalid-feedback">
									Enter qualification
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input id="password" type="password" class="form-control" minlength="6" name="password" required data-eye>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<div class="form-group">
								<label for="password">Confirm Password</label>
								<input id="password" type="password" class="form-control" minlength="6" name="cpassword" required data-eye>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<div class="form-group">
								<div class="custom-checkbox custom-control">
									<input type="checkbox" name="agree" id="agree" class="custom-control-input" required>
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

</body>

</html>
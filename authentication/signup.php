<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title>Register</title>
		<link href="../css/signup.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/3c5d2d689a.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<!-- <div class="navbar-container">
			<nav class="navbar navbar-expand-lg mt-4 mb-2">
				<div class="logo-container">
					<a class="navbar-brand" href="#"><img src="../images/URLOGO.png" class="img-thumbnail bg-none border-0 bg-0" alt="logo"/></a>
				</div>
				<div class="nav-link">
					<a class="nav-item nav-link active text-white m-3 mt-0 mb-0" href="../index.html">Home</a>
					<a href="../read.php"><button class="btn">View List</button></a>
				</div>	
			</nav>
		</div>
 -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 mt-4 mb-4">
					<div class="card p-4 pb-0 shadow-lg  ml-3">
						<div class="card-body">
							<h2 class="text-center">SIGN UP</h2> 
								<?php require_once('operations.php') ?>
								<?php if($error):?>
									<div class="alert alert-danger mb-3">
										<?php echo$error?>
									</div>
								<?php endif;?>
							<form class="row" method="POST"> 
								<div class="col-lg-12 ">
									<label><strong>Registration number</strong></label>
									<input type="number" class="form-control" name="registration_number">
								</div>
								<div class="col-lg-12 ">
									<label><strong>First Name</strong></label>
									<input type="text" class="form-control" name="fname">
								</div>
								<div class="col-lg-12 mt-3">
									<label><strong>Last Name</strong></label>
									<input type="text" class="form-control" name="lname">
								</div>
								<div class="col-lg-12 mt-3">
									<label><strong>Email</strong></label>
									<input type="email" class="form-control" name="email">
								</div>
								<div class="col-lg-12 mt-3">
									<label><strong>Nationality</strong></label>
									<input type="text" class="form-control" name="nationality">
								</div>
								<div class="col-lg-12 ">
									<label><strong>College</strong></label>
									<input type="text" class="form-control" name="college">
								</div>
								<div class="col-lg-12 ">
									<label><strong>School</strong></label>
									<input type="text" class="form-control" name="school">
								</div>
								<div class="col-lg-12 ">
									<label><strong>Department</strong></label>
									<input type="text" class="form-control" name="department">
								</div>
								<div class="col-lg-12 mt-3">
									<label><strong>Password</strong></label>
									<input type="password" class="form-control" name="password">
								</div>
								<div class="col-lg-12 mt-3">
									<label class=""><strong>Confirm Password</strong></label>
									<input type="password" class="form-control" name="c_password" >
								</div>
								<div class="col-lg-12 mt-3">
									<div class="row card-bottom">
										<div class="col-lg-12 mt-3">
											<button type="submit" name="Signup" class="btn btn-sm p-2 pe-0 ps-0">Sign up</button>
										</div>
										<div class="col-lg-12 mt-3">
											<strong>Already have an account?</strong>	
										</div>
										<div class="col-lg-12 mt-3 mb-3">
											<a href="login.php" class="btn btn-block btn-sm p-2 pe-0 ps-0">Sign in </a>
										</div>
									</div> 
								</div>
							</form>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>

	<!-- <footer class="footer">
        <div class="footer-content pt-2">
            
            <p>&copy;2022 Heroes Evolved. All rights reserved</p>
        </div>
    </footer> -->
</html>
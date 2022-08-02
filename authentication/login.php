
<?php 
session_start();
if (isset($_SESSION['Logged_user'])) { 
	// if($_SESSION['Logged_user']){
    //     header('Location:../list_hereos.php');
    // }else{
	// 	header('Location:../read.php');
	// }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="../css/login.css" rel="stylesheet">
		<title>Login </title>
		<script src="https://kit.fontawesome.com/3c5d2d689a.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<!-- <div class="navbar-container">
			<nav class="navbar navbar-expand-lg mt-5">
				<div class="logo-container">
					<a class="navbar-brand" href="#"><img src="../images/logo.png" class="img-thumbnail bg-none border-0 bg-0" alt="logo"/></a>
				</div>
				<div class="nav-link">
					<a class="nav-item nav-link active text-white m-3 mt-0 mb-0" href="../index.html">Home</a>
					<a href="../read.php"><button class="btn">View List</button></a>
				</div>	
			</nav>
		</div> -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 mt-1 mb-5"> 
					<div class="card mt-5 shadow-lg rounded">
						<div class="card-body p-5">
							<h2 class="text-center mb-2">Login into your account</h2>
							<?php require_once('operations.php') ?> 
							<?php if($error):?>
							<div class="alert alert-danger mb-3">
								<?php echo$error?>
							</div>
							<?php endif?>
							<form class="row" method="POST">  
								<div class="col-lg-12"> 
								<div class="col-lg-12 mt-3">
									<label><strong>UR Email</strong></label>
									<input type="text" class="form-control m-2 me-0 ms-0" name="email">
								</div> 
								<div class="col-lg-12 mt-3">
									<label><strong>Password</strong></label>
									<input type="password" class="form-control m-2 me-0 ms-0" name="password">
								</div> 
								<div class="col-lg-12 card-bottom text-center">
									<div class="row">
										<div class="col-lg-12 mt-3">
											<button type="submit" name="Login" class="btn btn-sm p-2">Sign in </button>
										</div>
										<div class="col-lg-12 mt-3">
											<strong>Don’t have an account yet?</strong>	
										</div>
										<div class="col-lg-12 mt-3"> 
											<a href="signup.php" class="btn btn-block btn-sm p-2">Sign up  </a> 
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
	
	<!-- <footer class="footer">
        <div class="footer-content pt-3 ">
            <p>&copy;2022 Heroes Evolved. All rights reserved</p>
        </div>
    </footer> -->
	</body>

</html>
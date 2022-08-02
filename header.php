
<?php 
session_start();
if (!isset($_SESSION['Logged_user'])) {
	header('Location:authentication/login.php') ;
}
include "conn.php";

//logout
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location:authentication/login.php");
}

?> 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title></title>
		<link href="styles.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/3c5d2d689a.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<nav class=" bg-light shadow-sm d-flex flex-row p-2 gap-4">
		  <div class="container-fluid flex-grow-1">
		    <a class="navbar-brand" href="#">UR</a> 
		  </div>
          <div class="">
            <a href="index.php">Home</a>
          </div>
          <div class="">
            <a href="apply.php" class="link">Apply</a>
          </div>
          <form class="" method="POST">
            <button href="apply.php" class="btn btn-sm btn-danger" name="logout">Logout</button>
          </form>
		</nav>
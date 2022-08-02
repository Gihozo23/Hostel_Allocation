<?php 
 
	$error="";
	$conn=mysqli_connect("localhost","root","","ur_hostel_allocation");
	if ($conn) {
		//signup
		if (isset($_POST['Signup'])) {
			$registration_number = $_POST['registration_number'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email']; 
			$nationality = $_POST['nationality']; 
			$college = $_POST['college']; 
			$school = $_POST['school']; 
			$department = $_POST['department']; 
			$password = $_POST['password'];
			$c_password = $_POST['c_password']; 
			
			// $mail_provider = ""
			
			if (!empty($registration_number)) {
				if (!empty($fname)) {
					if (!empty($lname)) {
						if (!empty($email)) {
							if(strpos($email, "@stud.ur.ac.rw") && strpos($email, "_") && strpos($email, $registration_number)) {								
								if (!empty($nationality)) {
									if (!empty($college)) {
										if (!empty($school)) {
											if (!empty($department)) {
												if (!empty($password)) {
														if (strlen($password) >= 4 && strlen($password) <= 10) { 
															if (!empty($c_password)) { 
																if ($password == $c_password) { 
																$password=hash('sha1',$c_password);

																$sqlSelect=mysqli_query($conn, "SELECT * from student where email='$email'");
																	if ($sqlSelect) {
																		// echo(mysqli_num_rows($sqlSelect));
																		if (mysqli_num_rows($sqlSelect) <= 0) { 
																			$create=mysqli_query($conn, "
																				INSERT INTO student (std_Regno,std_Fname,std_Lname, std_URemail,std_nationality,std_college,
																				std_school, std_department,std_password) VALUES ('$registration_number','$fname','$lname','$email',
																				'$nationality', '$college', '$school', $department,'$password')");
																			if ($create) {
																				header("Location:login.php");
																			}else{
																				$error="error creating user";
																			}

																		}else{
																			$error="User already exists";
																		}
																	}else{
																		$error="error creating user";
																		}
																}
																else{
																	$error="Two password are not equal";
																}
														}else{
															$error="Passwords confirmation must match";
														}
													}else{
														$error="Password must be at least 4-10 characters";
													} 
												}else{
													$error="Password field must not be empty";
												}
											}else{
												$error="Department field must not be empty";
											}
										}else{
											$error="School field must not be empty";
										} 
									}else{
										$error="College field must not be empty";
									} 
								}else{
									$error="Nationality field must not be empty";
								} 								
							}else{
								$error="Invalid email";
							}
						}else{
							$error="Email field must not be empty";
						}
					}else{
						$error="Last name field must not be empty";
					} 
				}else{
					$error="First name field must not be empty";
				} 	 
			}else{
				$error="Registration number field must not be empty";
			}
		}


		//login
		else if (isset($_POST['Login'])) { 
			$email = $_POST['email'];
			$password = $_POST['password']; 
			if (!empty($email)) { 
					if (!empty($password)) {  
						// $password=hash('sha1',$password);
						$sqlSelect=mysqli_query($conn, "SELECT * from student where std_URemail='$email'");
							if ($sqlSelect) {
								if (mysqli_num_rows($sqlSelect) > 0) {  
									if($mysqli_fect_user=mysqli_fetch_array($sqlSelect)){
										if ($mysqli_fect_user['std_password'] == $password) {
											$_SESSION['Logged_user']=$mysqli_fect_user['std_Regno'];
											header("Location:../index.php");
											// if ($mysqli_fect_user['role']== "admin"){
											// 	header("Location:../list_hereos.php");
											// } else {
											// 	header("Location:../read.php");
											// }
										}else{
											$error="User password doesn't match";
										}
									}
								}else{
									$error="User doesn't exists";
								}
							}else{
								$error="error searching for user";
								} 
					}else{
						$error="Password field must not be empty";
					} 
			}else{
				$error="Email field must not be empty";
			}  
		}


		//logout
		if (isset($_POST["logout"])) {
			session_destroy();
			header("Location:authentication/login.php");
		}

	}else{
		$error="error".$conn->error();
	}
?>
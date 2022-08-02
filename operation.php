<?php 
	$error=$message="";
	$conn=mysqli_connect("localhost","root","","ur_hostel_allocation"); 
	if($conn){ 

			$user_identity=$_SESSION['Logged_user']; 

			$user=mysqli_query($conn, "SELECT * from student where std_Regno='$user_identity'")or die("error occured");

			if(mysqli_num_rows(	$user) > 0){
					
			if (isset($_POST['Apply'])) {
				$std_specialneeds=$_POST['std_specialneeds'];
				$std_level=$_POST['std_level'];
				$std_campus=$_POST['std_campus'];
				$std_category=$_POST['std_category'];
				// $std_Regno = $_POST['std_Regno'];

				if(!empty($std_level)){
					if(!empty($std_campus)){
						if(!empty($std_category)){ 
								$updated_student=mysqli_query($conn, "SELECT * FROM updated_student where std_Regno='$user_identity'")or die("error occured");
							
								if(mysqli_num_rows($updated_student)<=0){ 
									$updated_student=mysqli_query($conn, "INSERT INTO updated_student (std_Regno,std_specialneeds,std_level,std_campus,std_category) VALUES ('$user_identity', '$std_specialneeds','$std_level','$std_campus','$std_category')")or die("error occured");
									
									if($updated_student){
										$message="done";
									}else{
										$error="error, Application was not submitted";
									}
								}else{
									$error="error, Application was submitted";
								}
							

						}else{
							$error="error, Category required";
						}
					}else{
						$error="error, Campus name required";
					} 
				}else{
					$error="error, Student Level can't be empty";
				}

			} 
			}else{
				$error="user does't exits";
			} 
		
	}else{
		$error="error".$conn->error();
	}


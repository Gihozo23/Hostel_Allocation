<?php require"header.php"?>

	<div class="container mt-5">
        <?php 
        
			$user_identity=$_SESSION['Logged_user'];  
			$user=mysqli_query($conn, "SELECT * from student where std_Regno='$user_identity'")or die("error occured");
            if(mysqli_num_rows($user) > 0):
                $FetchUser=mysqli_fetch_array($user);
                if($FetchUser):

        ?>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-lg-12">
                                            <img src="images/URlogo.jpg" width="200"/>
                                        </div>
                                        <div class="col-lg-12">
                                            <p>Registration N<sup>o</sup>: <?php echo$FetchUser['std_Regno']?></p>
                                            <h3><?php echo$FetchUser['std_Fname']; echo" "; echo$FetchUser['std_Lname']?></h3>
                                            <p><?php echo$FetchUser['std_URemail']?></p> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                    <?php
                    $user_identity=$FetchUser['std_Regno'];                    
                    $studentApplications=mysqli_query($conn, "SELECT * FROM updated_student where std_Regno='$user_identity'")or die("error occured");
					if($studentApplications):
                    ?>
                        <div class="col-lg-12 mt-4">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    Applications
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <?php
                                    if(mysqli_num_rows($studentApplications) > 0):
                                    ?>
                                    <div class="col-lg-12">
                                        <?php echo$FetchUser['std_Fname']?> You have Applied for Hostel <span class="bg-warning">Pending </span>
                                    </div>
                                    <?php
                                    else:
                                     ?>
                                        <h5>No Applications Found</h5>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>

                    </div>
                  
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                            <div class="card-header">
                                    Student Details
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <strong>Nationality</strong>
                                                </div>
                                                <div class="col-lg-12">
                                                <?php echo$FetchUser['std_nationality'];?> 
                                                </div>
                                            </div> 
                                        </div> 

                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <strong>College</strong>
                                                </div>
                                                <div class="col-lg-12">
                                                <?php echo$FetchUser['std_college'];?> 
                                                </div>
                                            </div> 
                                        </div> 

                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <strong>First Name</strong>
                                                </div>
                                                <div class="col-lg-12">
                                                <?php echo$FetchUser['std_school'];?> 
                                                </div>
                                            </div> 
                                        </div> 

                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <strong>Department</strong>
                                                </div>
                                                <div class="col-lg-12">
                                                <?php echo$FetchUser['std_department'];?> 
                                                </div>
                                            </div> 
                                        </div>                                  
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-12 mt-4">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    Settings
                                </div>
                                <div class="card-body ">
                                    <div class="row gap-3">
                                        <strong>Change password</strong>
                                        <form class="col-lg-12">
                                            <input class="form-control" placeholder="Old password" name="oldPassword">
                                        </form>
                                        <form class="col-lg-12">
                                            <input class="form-control" placeholder="new password" name="newPassword">
                                        </form>
                                        <form class="col-lg-12">
                                            <button class="btn btn-sm btn-primary">Change</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        <?php
            endif;
        endif;
        ?>
    </div>
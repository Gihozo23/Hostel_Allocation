<?php require"header.php"?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6">
				<?php include('operation.php')?>
				<?php if($error):?>
					<div class="alert alert-danger">
						<?php echo$error;?>
					</div>
					<?php endif?>
					<?php if($message):?>
					<div class="alert alert-success">
						<?php echo$message;?>
					</div>
					<?php endif?>
					
				<div class="card">
					<div class="card-body">
						<h2>Application form</h2>
							<hr>
							<form class="row gap-3" method="POST">
								<!-- <div class="col-lg-12">
									<label>std_Regno</label>
									<input type="text" name="std_Regno" value="<?php echo$_SESSION['Logged_user']?>" class="form-control">
								</div> -->
								<div class="col-lg-12">
									<label>std_specialneeds</label>
									<textarea type="text" name="std_specialneeds" class="form-control"></textarea>
								</div>
								<div class="col-lg-12">
									<label>std_level</label>
									<input type="number" name="std_level" class="form-control">
								</div>
								<div class="col-lg-12">
									<label>std_campus</label>
									<input type="text" name="std_campus" class="form-control">
								</div>
								<div class="col-lg-12">
									<label>std_category</label>
									<input type="text" name="std_category" class="form-control">
								</div>	
								<div class="col-lg-12">
									<button type="submit" class="btn btn-sm btn-primary" name="Apply">Send Request</button>
								</div>					
							</form> 
					</div>
				
			</div>
		</div>
		<div class="col-lg-4">
			Apply for UR hostel fill the form bellow to proceed.
		</div>
	</div>
</body>
</html>
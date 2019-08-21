<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row" style="margin-top: 4%;">
			<div class="col-md-4"></div>
			<div class="col-md-4 well">
				<h1 class="text-center">Register Here</h1>
					<form action="registration.php" method="post" name="reg">
						<div class="form-group">
							<label>First Name:</label>
							<input class="form-control" type="text" name="firstname" id="firstname" autocomplete="off" required="" />
						</div>
						<div class="form-group">
		                    <div id="registration-form">
			                    <label>Last Name:</label> 
			                    <input class="form-control" type="text" name="lastname" autocomplete="off" id="lastname" required="" />
		                    </div>
						</div>
						<div class="form-group">
							<label>Email:</label>
							<input class="form-control" type="email" name="email" id="email" autocomplete="off" required="" />
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input class="form-control" type="password" name="password" id="password" autocomplete="off" required="" />
						</div>
						<div class="form-group">
							<label>DOB:</label>
							<input class="form-control" type="date" name="dob" id="dob" autocomplete="off" required="" />
						</div>
						<button class="btn btn-primary" type="submit" name="register">Register</button>
						<a href="login.php">Already registered! Click Here!</a></td>
					</form>
					<br>
					<?php 
						if(isset($_SESSION['msg'])) {
							echo $_SESSION['msg'];
							session_unset($_SESSION['msg']);
						}
					?>
				</div>
			<div class="col-md-4"></div>
			</div>
		</div>
	</body>
</html>

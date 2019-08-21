<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
		<div style="margin-top: 4%;"></div>
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 well">
		<h2 class="text-center">Login Here</h2>
			<form action="login.php" method="post" name="login">
			<div class="form-group">
			<label>Email:</label>
			<input class="form-control" type="text" autocomplete="off" name="email" required="" />
			</div>
			<div class="form-group">
			<label>Password:</label>
			<input class="form-control" type="password" name="password" required="" />
			</div>
			<input class="btn btn-primary" type="submit" name="login" value="Login" />
			<a href="register.php">Register new user</a>
			</form>
		<br>
		<?php 
			if(isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				$_SESSION['msg'] = '';
			}
		?>
		</div>
		<div class="col-sm-4"></div>
		</div>
		</div>
	</body>
</html>

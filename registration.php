<?php 
	session_start(); 
	include 'user-class.php';
	$user = new User();
	if (isset($_REQUEST['register'])){
		extract($_REQUEST);
		$register = $user->registerUser($firstname, $lastname, $email, $password, $dob);
		if ($register) {
			$_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success</strong>! Registration successful.
			</div>';
				header("location: welcome.php");
				exit();
		} else {
			$_SESSION['msg'] = '<div class="alert alert-danger alert-dismissable">
			<strong>Registration failed</strong>! Email already exists.
			</div>';
				header("location: register.php");
				exit();
		}
	}
?>

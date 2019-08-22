<?php 
	session_start(); 
	spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
	});
	$user = new User();
	if (isset($_REQUEST['register'])){
		extract($_REQUEST);
		$register = $user->registerUser($firstname, $lastname, $email, $password, $dob);
		if ($register) {
			$_SESSION['msg'] = 1;
			header("location: welcome.php");
			exit();
		} else {
			$_SESSION['msg'] = 2;
			header("location: register.php");
			exit();
		}
	}
?>

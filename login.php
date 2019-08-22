<?php 
	session_start(); 
	spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
	});
	if (isset($_REQUEST['login'])) {
		$user = new User();
		extract($_REQUEST);
		$login = $user->login($email, $password);
		if ($login) { 
			header("location: welcome.php");
			exit();
		} else { 
			$_SESSION['msg'] = 3;
			header("location: index.php");
			exit();
		}
	}
?>
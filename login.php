<?php 
	session_start(); 
	include 'user-class.php';
	if (isset($_REQUEST['login'])) {
		$user = new User();
		extract($_REQUEST);
		$login = $user->login($email, $password);
		if ($login) { 
			header("location: welcome.php");
			exit();
		} else { 
			$_SESSION['msg'] = '<div class="alert alert-danger alert-dismissable">
			<strong>Unable to login</strong>! Wrong email or password.
			</div>';
			header("location: index.php");
			exit();
		}
	}
?>
<?php  
	session_start();
	include 'user-class.php';
	$user = new User();
	$firstname = $_SESSION['uid'];
	$session = $user->getSession();
	if (empty($session)){ 
		header("location:index.php");
		exit();
	}
	if (isset($_GET['q'])){
		$user->userLogout();
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<br>
	<?php 
		if(isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			$_SESSION['msg'] = '';
		}
	?>
	<div class="jumbotron text-center">
		<h2>Hello <small><?php echo $firstname; ?>!</small></h2>
		<a class="btn btn-primary btn-md" href="welcome.php?q=logout">LOGOUT</a>

	</div>
</body>
</html>

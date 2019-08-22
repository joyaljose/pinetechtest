<?php  
	$msg = 0;
	session_start();
	spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
	});
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
	<?php include 'header.php';?>
</head>
<body>
	<br>
	<?php 
		if(isset($_SESSION['msg'])) {
			$msg = $_SESSION['msg'];
			$_SESSION['msg'] = '';
		}
		if($msg == 1){ ?>
			<div class="alert alert-success alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Success</strong>! Registration successful.
			</div>
		<?php }else if($msg == 2){ ?>
			<div class="alert alert-danger alert-dismissable">
			<strong>Registration failed</strong>! Email already exists.
			</div>
		<?php } 
	?>
	<div class="jumbotron text-center">
		<h2>Hello <small><?php echo $firstname; ?>!</small></h2>
		<a class="btn btn-primary btn-md" href="welcome.php?q=logout">LOGOUT</a>

	</div>
</body>
<?php include 'footer.php';?>
</html>

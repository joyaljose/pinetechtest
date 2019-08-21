<?php  
include 'connection.php';
class User
{
	public $db;
	public function registerUser($firstname, $lastname, $email, $password, $dob)
	{
		try{
			session_start();
			$conn     = db();
			$password = md5($password);
			$sql="SELECT * FROM users WHERE c_email='$email'";
			$check     = $conn->query($sql);
			$count_row = $check->num_rows;
			if ($count_row == 0){
				$sql="INSERT INTO users SET c_firstname='$firstname', c_lastname='$lastname', c_email='$email', c_password='$password',d_dob = '$dob';";
				$result = $conn->query($sql);
				$_SESSION['login'] = true;
				$_SESSION['uid']   = $firstname;
				return $result;
			} else { 
				return false;
			}
		}catch(Exception $e) {
		  echo 'Message: ' .$e->getMessage();
		}
	}
	public function login($email, $password)
	{
		session_start();
		$conn = db();
		$password = md5($password);
		$sql="SELECT c_firstname from users WHERE c_email='$email'and c_password='$password'";
		$result    = $conn->query($sql);
		$user_data = $result->fetch_assoc();
		$count_row = $result->num_rows;
		if ($count_row == 1) {
			$_SESSION['login'] = true;
			$_SESSION['uid']   = $user_data['c_firstname'];
			return true;
		} else {
			return false;
		}
	}
	public function get_fullname($uid)
	{
		$conn      = db();
		$sql       = "SELECT fullname FROM users WHERE uid = $uid";
		$result    = $conn->query($sql);
		$user_data = $result->fetch_assoc();
		echo $user_data['fullname'];
	}
	public function getSession()
	{	
		return $_SESSION['uid'];
	}
	public function userLogout()
	{
		$_SESSION['login'] = FALSE;
		$_SESSION['uid'] = [];
		session_destroy();
	}
}

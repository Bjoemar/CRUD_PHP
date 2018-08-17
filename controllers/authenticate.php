<?php 

session_start();
require "../connection.php";

$username = $_POST['username'];
$password = sha1($_POST['password']);


$sql = " SELECT * FROM users WHERE 
		username = '$username' AND 
		password = '$password'";

	$result = mysqli_query($conn , $sql);

	if(mysqli_num_rows($result) > 0) {
		$_SESSION['log_in_user'] = $username;
		echo "1";
	} else {
		$_SESSION['error_message'] = 'Login FAILED';
		echo "2";
	}

	// header('location: ../index.php');

 ?>
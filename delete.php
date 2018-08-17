<?php 

	require "connection.php";

	$data = $_POST['id'];

	$sql = " DELETE FROM artists WHERE id='$data'";

		mysqli_query($conn , $sql);
		header('location: artist.php');


 ?>
<?php 

	require "connection.php";

	$name = $_POST['name'];

	$sql = "INSERT INTO artists(name) VALUES ('$name')";

	mysqli_query($conn,$sql);

	header('location: artist.php');

 ?>
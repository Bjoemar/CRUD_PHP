<?php 

require "connection.php";

$ups = $_POST['to_update'];
$ups2 = $_GET['update_id'];

$sql = "UPDATE artists SET name = '$ups' WHERE id = '$ups2' ";
mysqli_query($conn,$sql);

header('location: artist.php');

 ?>
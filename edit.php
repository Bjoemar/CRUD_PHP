<?php 
require "connection.php";

$id = $_GET['id'];
$sql = "SELECT * FROM artists WHERE id = $id";
$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($result);
 ?>

<form method="POST" action="update_endpoint.php?update_id= <?php echo $result['id']?>">
	Artist Name : <input 
	type="text" 
	name="to_update"
	value="<?php echo $result['name']; ?> ">

	 <button>Update</button>


</form>

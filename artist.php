<?php require_once "templates.php" ?>


<?php function getTitle(){
	echo "Artist";
} ?>

<?php function getContent() { ?>
<?php 

require "connection.php";

$sql = "SELECT * FROM artists";
$result = mysqli_query($conn, $sql);
echo "<table><thead>";
echo "<th>ID</th>";
echo "<th>Name</th><thead><tbody>";
while($row =  mysqli_fetch_assoc($result)) {
	echo "<tr><td>" .$row['id']."</td>";
	echo "<td>" .$row['name']."</td> ";
	echo "<td> <a href='edit.php?id=".$row['id']."'>
	<button>Edit</button></a> 
		<form method='POST' action='delete.php'>
		<input type='hidden' name='id'
		value='".$row['id']."'> 
		<button>Delete</button> </form>
			</td>
			</tr>
			";
}	
echo "</tbody></table>";
// echo mysqli_num_rows($result);

 ?>


 <h3>Add Artist</h3>

 	<form action="add_artist.php" method="POST" >
 	<span>ARTIST NAME : </span> <input type="text" name="name"> <button>Add artist</button>
 	</form>


<?php } ?>
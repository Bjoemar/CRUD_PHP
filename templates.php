<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title> <?php getTitle(); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0, maximum-scale=1.0 , shrink-to-fit=no">

<?php require_once "partials/header.php" ?>

</head>
<body>
	
	<?php require_once "partials/nav.php" ?>

<div class="container">


	<?php getContent();

	 ?>


</div>

</body>
</html>
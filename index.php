
<?php require_once "templates.php" ?>


<?php function getTitle(){
	echo "Login ";
} ?>


<?php function getContent() { ?>

<?php if (isset($_SESSION['log_in_user'])){ ?>
		<h1>WELCOME</h1>
	


	<?php } else { ?>





<h1>Login</h1>

<form action="controllers/authenticate.php" method="POST">
	<label>Username</label>
	<input class="form-control" type="text" name="username" id="username">
	<span></span> <br>
	<label>Password</label>
	<input class="form-control" type="password" name="password" id="password">
	<span></span> <br>

	<button id="loginbtn" class="btn btn-primary" type="button">Login</button> 
	<p></p>
</form>


<?php } ?>

<script type="text/javascript">


	$('#loginbtn').click(()=> {
		const username = $('#username').val();
		const password = $('#password').val();
		let errorFlag = false;
	

			if(username.length == 0 ) {
				$('#username').next().html('Please a provide a username ');
				$('#username').next().css('color','red');

				errorFlag = true;
			} 
			 

			if(password.length == 0){
				$('#password').next().html('Please a provide a password ');
				$('#password').next().css('color','red');
				

				errorFlag = true;
			}


			
		
			if(errorFlag == false) {
				$('form').submit();
			}




	})


</script>





<?php } ?>
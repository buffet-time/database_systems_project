<?php
    session_start();
?>

<html>
	<body>
		<div style="background-color:#CCD1D1;">
			<h1>Create Account</h1>
			
			<div class="container">
				<form method="POST" action="employeeconfirm.php">
					<div class="form-group"> <span class="glyphicon glyphicon-user"></span>
						<label for="usr">Username:</label>
							<input type="text" class="form-control" id="usr" name="username" required>
					</div>
					<br>
								
					<div class="form-group"> <span class="glyphicon glyphicon-lock"></span>
						<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="pwd" name="pass" required>
					</div>
					<br>		  
					
					<button type="submit" name="submit" class="btn btn-primary active">Submit</button>
					
					<p align="center"><a href="register.php">Create Account</a></p>
				</form>
			</div>
			
			<div class="row">
			</div>
			
		</div>
			<div class="container">
			</div>
	</body>
</html>

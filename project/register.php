<html>
	<body style="background-color:#AAAAAA;">
		<form action="employeeaccountconfirm.php" method="POST" style="width:60%; padding-left:200px; background-color:#CCD1D1;">

			<h1>Create Account</h1>
			
			<div class="form-group">
				<label>First Name:</label>
					<input class="form-control" type="text" name="firstName" placeholder="First Name" required>
			</div>			
			
			<div class="form-group">
				<label>Last Name:</label>
					<input class="form-control" type="text" name="lastName" placeholder="Last Name" required>
			</div>

			
			<div class="form-group">
				<label>Address:</label>
					<input class="form-control" type="email" name="address" placeholder="1 Normal Avenue" required>
			</div>	
			
						
			<div class="form-group">
				<label>Email:</label>
					<input class="form-control" type="text" name="email" placeholder="example@gmail.com" required>
			</div>
			<br>
		 
			<div class="form-group">
				<label>Username:</label>
					<input class="form-control" type="text" name="username" placeholder="User Name" required>
			</div>	
		  
			<div class="form-group">
				<label>Password:</label>
					<input class="form-control" name="pass" required="required" type="password" id="password" placeholder="Password">
			</div>
			
			<div class="form-group">
				<label>Confirm Password:</label>
					<input class="form-control" name="passConfirm" required="required" type="password" id="password_confirm" oninput="check(this)" placeholder="Confirm Password">
						<script language='javascript' type='text/javascript'>
							function check(input) {
								if (input.value != document.getElementById('password').value) {
									input.setCustomValidity('Password Must be Matching.');
								} else {
									// input is valid -- reset the error message
									input.setCustomValidity('');
								}
							}
						</script>
			</div>		
			
			<div class="form-group">
				<label>Authentication:</label>
					<input class="form-control" type="text" name="authentication" placeholder="Authentication Code" required>
			</div>			
			<br>
			
			<button type="submit" class="btn btn-primary" name="submit">Register</button>
			
			<a href="login.php">Login</a>
			
		</form>
		
	</body>
	
</html>

<?php
    include_once('nav.php');
    if(isset($_SESSION['id']) && $_SESSION['manage'] == 1 && $_SESSION['loggedin'] == true)
    {
?>

<html>
    <head>
		<meta charset = "utf-8"> <!--Allows for use of full Unicode-->
    		<title>Employee Register</title> <!--Title of the Tab-->
	</head>
	<body style="background-color:#AAAAAA;">
	    <!-- calls for registerConfirm.php to be ran when Register is pressed -->	
		<form action="employeeRegisterConfirm.php" method="POST" style="width:60%; padding-left:200px; background-color:#CCD1D1;">

			<h1>Create Employee Account</h1>
			
			<!-- Input field for First Name -->
			<div>
				<input class="form-control" type="text" name="firstName" placeholder="First Name" required>
			</div>			
			
			<!-- Input field for Last Name -->
			<div>
				<input class="form-control" type="text" name="lastName" placeholder="Last Name" required>
			</div>

			<!-- Input field for Address -->
			<div>
				<input class="form-control" type="text" name="address" placeholder="1 Normal Avenue" required>
			</div>	
			
			<!-- Input field for Phone -->
			<div>
				<input class="form-control" type="tel" name="phone" placeholder="(123) 456-7890" required>
			</div>
		 
		    <!-- Input field for Employee Number -->
			<div>
				<input class="form-control" type="text" name="empnum" placeholder="Employee Number" required>
			</div>	
		 
		    <!-- Input field for Password -->
			<div>
				<input class="form-control" name="pass" required="required" type="password" id="password" placeholder="Password">
			</div>
			
			<!-- Input field for confirming your Password -->
			<div>
				<input class="form-control" name="passConfirm" required="required" type="password" id="password_confirm" oninput="check(this)" placeholder="Confirm Password">
					<!-- Javascript to make sure both passwords match -->
						<script language='javascript' type='text/javascript'>
							function check(input)
							    {
								if (input.value != document.getElementById('password').value)
								    {
								    // Passwords do not match, so it warns the user to fix it.
									input.setCustomValidity('Password Must be Matching.');
								    } 
								
								else
								    {
									// Passwords do match, so it resets the warning.
									input.setCustomValidity('');
								    }
							    }
						</script>
			</div>	
			
			<!-- Manager check box -->
			<input type="checkbox" name="manager" value="1"> Manager<br>
			<br>
			
			<!-- Button when pressed it runs registerConfirm.php -->
			<button type="submit" class="btn btn-primary" name="submit">Register</button>
			
			
			<!-- when pressed brings you to login -->
			<a href="home.php">Back to Homepage</a>
		</form>
	</body>
	<?php
        }
        else
        {
            header("location:home.php");
        }
	?>
    <footer>
<?php
    include_once('footer.php');
?>
    </footer>
</html>
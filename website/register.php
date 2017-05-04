<?php
session_start();
include 'databaseConnect.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
    {
          include_once('nav.php');  
    }
?>

<html>
    <head>
		<meta charset = "utf-8"> <!--Allows for use of full Unicode-->
    		<title>Register</title> <!--Title of the Tab-->
	</head>
	<body style="background-color:#AAAAAA;">
	    <!-- calls for registerConfirm.php to be ran when Register is pressed -->	
		<form action="registerConfirm.php" method="POST" style="width:60%; padding-left:200px; background-color:#CCD1D1;">

			<h1>Create Account</h1>
			
			<!-- Input field for First Name -->
			<div class="form-group">
				<input class="form-control" type="text" name="firstName" placeholder="First Name" required>
			</div>			
			
			<!-- Input field for Last Name -->
			<div class="form-group">
				<input class="form-control" type="text" name="lastName" placeholder="Last Name" required>
			</div>

			<!-- Input field for Address -->
			<div class="form-group">
				<input class="form-control" type="text" name="address" placeholder="1 Normal Avenue" required>
			</div>	
			
			<!-- Input field for Email -->
			<div class="form-group">
				<input class="form-control" type="email" name="email" placeholder="example@gmail.com" required>
			</div>
			<br>
		 
		    <!-- Input field for Username -->
			<div class="form-group">
				<input class="form-control" type="text" name="username" placeholder="User Name" required>
			</div>	
		  
		    <!-- Input field for Password -->
			<div class="form-group">
				<input class="form-control" name="pass" required="required" type="password" id="password" placeholder="Password">
			</div>
			
			<!-- Input field for confirming your Password -->
			<div class="form-group">
				<input class="form-control" name="passConfirm" required="required" type="password" id="password_confirm" oninput="check(this)" placeholder="Confirm Password">
					<!-- Javascript to make sure both passwords match -->
						<script language='javascript' type='text/javascript'>
							function check(input)
							    {
								if (input.value != document.getElementById('password').value)
								    {
								    // Passwords don't match, so it warns the user to fix it.
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
			<?php if(!isset($_SESSION['loggedin'])){ ?>
			    <!-- Input field for the Authentication code. disallows people to make accounts who didn't work on the project. -->
			    <div class="form-group">
				    <input class="form-control" type="text" name="authentication" placeholder="Authentication Code" required>
			    </div>			
			    <br>
			<?php
			}?>
			<!-- Button when pressed it runs registerConfirm.php -->
			<button type="submit" class="btn btn-primary" name="submit">Register</button>
			
			<!-- when pressed brings you to login -->
			<a href="login.php">Back to Login</a>
		</form>
	</body>
	<?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
    	<footer>
            <?php include_once('footer.php');?>
    	    <!--LLC HL3 Corb.-->
    	</footer>
	<?php   }?>
</html>

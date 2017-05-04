<?php
    //connects to the database
    session_start();
    include 'databaseConnect.php';
?>

<html>
    <head>
		<meta charset = "utf-8"> <!--Allows for use of full Unicode-->
    		<title>Employee Login</title> <!--Title of the Tab-->
	</head>
	<body>
	    <!-- calls for loginConfirm.php to be ran when Submit is pressed -->
	    <form action="employeeLoginConfirm.php" method="POST" style="width:60%; padding-left:200px; background-color:#CCD1D1;">
    		<div style="background-color:#CCD1D1;">
    			<h1>Employee Login</h1>
    			    <div class="container">
        				<form method="POST" action="home.php">
        				    
        				    <!-- Input field for Username  -->
        					<div class="form-group"> <span class="glyphicon glyphicon-user"></span>
        					    <input type="text" class="form-control" id="empid" placeholder="Employee ID" name="id" required>
        					</div>
        					<br>
        					
        					<!-- Input field for Password -->	
        					<div class="form-group"> <span class="glyphicon glyphicon-lock"></span>
        						<input type="password" class="form-control" id="pwd" placeholder="Password" name="pass" required>
        					</div>
        					<br>		  
        					
        					<!-- Button that when pushed will have loginConfirm.php ran -->	
        					<button type="submit" name="submit" class="btn btn-primary active">Submit</button>
        					
        					<!-- When clicked brings you to login.php -->
        					<a href="login.php">User Login</a>
        					
        					<!-- When clicked brings you to register.php -->	
        				    <a href="register.php">Create Account</a>
        			
        				</form>
    			    </div>
    			
    			<div class="row">
    			</div>
    			
    		</div>
		<div class="container">
        </div>
	</body>
</html>
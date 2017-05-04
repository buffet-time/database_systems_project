<?php
    session_start();
    include 'databaseConnect.php';
?>

<html>
    <head>
		<meta charset = "utf-8"> <!--Allows for use of full Unicode-->
    		<title>Owner Login</title> <!--Title of the Tab-->
	</head>
	<body>
	    <!-- calls for ownerLoginConfirm.php to be ran when Submit is pressed -->
	    <form action="ownerLoginConfirm.php" method="POST" style="width:60%; padding-left:200px; background-color:#CCD1D1;">
    		<div style="background-color:#CCD1D1;">
    			<h1>Owner Login</h1>
    			    <div class="container">
        				<form method="POST" action="home.php">
        				    
        				    <!-- Input field for Owner ID  -->
        					<div class="form-group"> <span class="glyphicon glyphicon-user"></span>
        						<input type="text" class="form-control" id="id" name="id" required>
        					</div>
        					<br>
        					
        					<!-- Button that when pushed will have ownerLoginConfirm.php ran -->	
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
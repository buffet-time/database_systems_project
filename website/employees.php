<?php 
    include_once('nav.php');
    if(isset($_SESSION['id']) && $_SESSION['manage'] == 1 && $_SESSION['loggedin'] == true)
        {
?>
<html>
	<head>
	    <title>Employees</title>
	</head>
	<body>
	    <table>
	        <thead>
	            <tr>
	                <td>| Employee ID |</td>
	                <td>| Address |</td>
	                <td>| First Name |</td>
	                <td>| Last Name |</td>
	                <td>| Manager |</td>
	                <td>| Remove Employee |</td>
	            </tr>
	        </thead>
	        <tbody>
	            <form method =  'POST' action ='deleteEmployee.php'>
    	            <?php 
    	            $results = mysqli_query($db, "SELECT * FROM Employee");
                    while($row = mysqli_fetch_array($results)) 
                        {
                        ?>
                            <tr>
                                <td><?php echo $row['Employee_number']?></td>
                                <td><?php echo $row['Address']?></td>
                                <td><?php echo $row['FName']?></td>
                                <td><?php echo $row['LName']?></td>
                                <td><?php echo $row['Manager']?></td>
                                <td><input type="checkbox" name=employee id='employee' value=<?php echo $row['Employee_number']?>> </td>
                            </tr>
                <?php   } ?>
                      <input type="submit" name ='Delete' value='Delete Employee'id='DELETE' class="btn btn-primary active">
                </form>
                <form action = 'employeeRegister.php'>
        		    <input type = "submit" value ="Employee Register"></button>
        		</form>
	        </tbody>
	    </table>
	</body>
<?php
        }
    else
        {
            header("location:home.php");
        }
	?>
	<footer>
	    <?php include_once('footer.php'); ?>
	</footer>
</html>
<?php 
    include_once('nav.php');
    $username = $_SESSION['username'];
?>

<html>
	<head>
	    <title>Receipt</title>
	</head>
	<body>
	    <table>
	        <thead>
	            <tr>
	                <td>| Order Number |</td>
	                <td>| Address Sent To |</td>
	                <td>| Order Time |</td>
	                <td>| Total Cost |</td>
	            </tr>
	        </thead>
	        <tbody>
	            <?php 
	            $results = mysqli_query($db, "SELECT * FROM Receipt WHERE Username = '$username'");
                while($row = mysqli_fetch_array($results)) 
                    {
                ?>
                <tr>
                    <td><?php echo $row['Order_number']?></td>
                    <td><?php echo $row['Address_sent']?></td>
                    <td><?php echo $row['Time_Stamp']?></td>
                    <td><?php echo $row['Total']?></td>
                </tr>
            <?php   }   ?>
	        </tbody>
	    </table>
	</body>
	<footer>
	    <?php include_once('footer.php');?>
	</footer>
</html>
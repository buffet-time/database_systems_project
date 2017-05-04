<?php 
    include_once('nav.php');
    
    if(isset($_SESSION['id']) && $_SESSION['owner'] == 1 && $_SESSION['manage'] == 1 && $_SESSION['loggedin'] == true)
        {
?>

<html>
	<head>
	    <title>Add Stock</title>
	</head>
	<body>
	    <table>
	        <thead>
	            <tr>
	                <td>| Stock |</td>
	                <td>| Product Name |</td>
	                <td>| Product Number |</td>
	                <td>| Update |</td>
	            </tr>
	        </thead>
	        <tbody>
            <?php 
	            $results = mysqli_query($db, "SELECT * FROM Products");
                while($row = mysqli_fetch_array($results)) 
                    {
            ?>
                    <tr>
                        <form method="POST" action="setStock.php">
                            <td><?php echo $row['Stock']?></td>
                            <td><?php echo $row['Name']?></td>
                            <td><?php echo $row['Product_number']?></td>
                			<td><input type="text" class="form-control" id="qty" name="quantity" required></td>
                			<input type="hidden" name="product_id" value="<?php echo $row['Product_number']?>"/>
                			<td><button type="submit" name="submit" class="btn btn-primary active">Submit</button></td>
            			</form>
                    </tr>
                <?php
                    }
                ?>
	        </tbody>
	    </table>
	 </body>
	 <?php
        }
	 ?>
	 <footer>
	     <?php
	         include_once('footer.php');
	     ?>
	 </footer>
</html>
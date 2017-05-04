<?php 
    include_once('nav.php');
?>

<html>
	<head>
	    <title>All</title>
	</head>
	<body>
	    <div>
	    <table>
	        <thead>
	            <tr>
	                <td>| Stock |</td>
	                <td>| Product Name |</td>
	                <td>| Product Number |</td>
	                <td>| Product Type |</td>
	                <td>| Price |</td>
	                <td> </td>
	                <td>| Add to cart |</td>
	            </tr>
	        </thead>
	        <tbody>
	            <?php 
	            $results = mysqli_query($db, "SELECT * FROM Products");
                while($row = mysqli_fetch_array($results)) {
                ?>
                <tr>
                    <form method="POST" action="shoppingCart.php">
                        <td><?php echo $row['Stock']?></td>
                        <td><?php echo $row['Name']?></td>
                        <td><?php echo $row['Product_number']?></td>
                        <td><?php echo $row['product_type']?></td>
                        <td><?php echo $row['price']?></td>
                        <td><img src=<?php echo $row['Image']?> width="120" height="100"></td>
                        <td><input type="text" class="form-control" id="qty" name="quantity" required></td>
                        <input type="hidden" name="product_id" value="<?php echo $row['Product_number']?>"/>
                        <input type="hidden" name="product_name" value="<?php echo $row['Name']?>"/>
                        <input type="hidden" name="price" value="<?php echo $row['price']?>"/>
                        <input type="hidden" name="action" value="add"/>
                        <td><button type="submit" name="submit" class="btn btn-primary active">Add to Cart</button></td>
                    </form>
                </tr>
                <?php
                }
                ?>
	        </tbody>
	    </table>
	    </div>
	    <div style="clear:both"></div>
        <h2>My Cart</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="40%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price Details</th>
                    <th width="15%">Order Total</th>
                    <th width="5%">Action</th>
                </tr>
                </thead>
            <?php
    	    if(!empty($_SESSION["cart"]))
        	    {
        		    $total = 0;
        		    foreach($_SESSION["cart"] as $keys => $values)
            		    { ?>
                		    <tbody>
                                <tr>
                                    <form method="POST" action="shoppingCart.php">
                                        <td><?php echo $values["item_name"]; ?></td>
                                        <td><?php echo $values["item_quantity"] ?></td>
                                        <td><?php echo $values["product_price"]; ?></td>
                                        <td><?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
                                        <input type="hidden" name="product_id" value="<?php echo $values['product_id']?>"/>
                                        <input type="hidden" name="action" value="delete"/>
                                        <td><button type="submit" name="submit" class="btn btn-primary active">Remove</button></td>
                                    </form>
                                </tr>
                                <?php 
                    			$total = $total + ($values["item_quantity"] * $values["product_price"]);
                    	} ?>
                                <tr>
                                <td colspan="3" align="right">Total</td>
                                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                                <td></td>
                                </tr>
                            </tbody>
                <?php
        	    }
    	    mysqli_close($db);
            ?>
            </table>
        </div>
	</body>
	<footer>
	    <?php include_once('footer.php');?>
	</footer>
</html>
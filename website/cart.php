<?php
    include_once('nav.php');
?>

<html>
    <head>
        <title>Cart</title>
    </head>
    <body>
        <div style="clear:both"></div>
        <h1>My Cart</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price Details</th>
                        <th>Order Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <?php
        	    if(!empty($_SESSION["cart"]))
        	        {
                	    $total = 0;
                	    foreach($_SESSION["cart"] as $keys => $values)
                		    { 
                		    ?>
                    		    <tbody>
                                    <tr>
                                            <form method="POST" action="shoppingCart.php">
                                                <td><?php echo $values["item_name"]; ?></td>
                                                <td><?php echo $values['item_quantity'] ?></td>
                                                <td><?php echo $values["product_price"]; ?></td>
                                                <td><?php echo number_format($values['item_quantity'] * $values["product_price"], 2); ?></td>
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
                                <form method="POST" action="checkout.php">
                                    <input type="hidden" name="address" value="<?php echo $_SESSION['address']?>"/>
                                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']?>"/>
                                    <input type="hidden" name="total" value="<?php echo $total?>"/>
                                    <button type="submit" name="submit" class="btn btn-primary active">Check Out</button>
                                </form>
                <?php 
        	        } 
                mysqli_close($db);?>
            </table>
        </div>
	</body>
	<footer>
	    <?php include_once('footer.php'); ?>
	</footer>
</html>
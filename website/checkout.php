<?php
    include_once('nav.php');
    include_once('footer.php');
    
    $cost = mysqli_real_escape_string($db, $_POST['total']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    
    foreach($_SESSION["cart"] as $keys => $values)
        { 
            $quantity = $values['item_quantity'];
            $id = $values['product_id'];
            $query=mysqli_query($db, "UPDATE Products SET Stock = Stock - '$quantity' WHERE Product_number = '$id'");
        }
        
        mysqli_query($db, "INSERT INTO `Receipt` (Address_sent, Username, Total) 
                    VALUES ('$address', '$username', '$cost')");
                    
    unset($_SESSION['cart']);
    
    print '<script>alert("Successfully checked out!");</script>';
    print '<script>window.location.assign("receipt.php");</script>';
?>
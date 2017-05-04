<?php
    session_start();
    include 'databaseConnect.php';

    $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
    $id = mysqli_real_escape_string($db, $_POST['product_id']);
    $query=mysqli_query($db, "UPDATE Products SET Stock = Stock + '$quantity' WHERE Product_number = '$id'");
    header("location:stock.php");
?>
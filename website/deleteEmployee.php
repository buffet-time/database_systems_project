<?php
    session_start();
    include 'databaseConnect.php';

    $employee = mysqli_real_escape_string($db, $_POST['employee']);
    $query=mysqli_query($db, "DELETE FROM Employee WHERE Employee_number='$employee'");
    header("location:employees.php");
?>
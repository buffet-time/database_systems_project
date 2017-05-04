<?php
    //Connects to the database via MySQL
    $db = mysqli_connect("localhost", [DEPRECATED]);
    
    // If the database doesn't exist, it throws an error and ends connection attempt
    if(!$db) 
        {
            die("Connection failed: ".mysqli_connect_error());
        }
?>

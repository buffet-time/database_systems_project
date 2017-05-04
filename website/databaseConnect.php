<?php
    //Connects to the database via MySQL
    $db = mysqli_connect("localhost", "turcichd1", "halfLife3Confirmed", "turcichd_companyDatabase");
    
    // If the database doesn't exist, it throws an error and ends connection attempt
    if(!$db) 
        {
            die("Connection failed: ".mysqli_connect_error());
        }
?>
<?php
    session_start();
    include 'databaseConnect.php';
    global $db;
    
    $ownerID = mysqli_real_escape_string($db, $_POST['id']);
    $query = mysqli_query($db, "SELECT * FROM Owner"); //check the owner table
    $exist = mysqli_num_rows($query);
    $table_id = "";
    
    if($exist > 0)
        {
            while($row = mysqli_fetch_assoc($query))
                {
                    // the first username row is passed on to $table_username and so on until the query is finished
                    $table_id = $row['ID'];
                    $table_name = $row['FName'];
                    $table_address = $row['Address'];
                }
                
            // If the owner id matches the id in the database then the user is logged in with manager and owner privilleges
            $owner = password_verify($ownerID, $table_id);
            if($owner) 
                {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $ownerID;
                    $_SESSION['address'] = $table_address;
                    $_SESSION['id'] = $ownerID;
                    $_SESSION['manage'] = 1;
                    $_SESSION['owner'] = 1;
                    $_SESSION['name'] = $table_name;
                    print '<script>window.location.assign("home.php");</script>'; //redirects to home.php aka the main page
                }
                
            // if the owner id does not match then it prompts the user and redirects them to ownerLogin.php   
            else
                {
                    print '<script>alert("Password Verify Failed");</script>';
                    print '<script>window.location.assign("ownerLogin.php");</script>'; //redirects to ownerLogin.php 
                }
           
        }
    
    // if their is nothing in the database/ the username doesn't exist then it prompts the user that there is an incorrect username and refreshes thepage.
    else
        {
            print '<script>alert("Incorrect Credentials!");</script>';
            print '<script>window.location.assign("ownerLogin.php");</script>'; //redirects to ownerLogin.php
        }
?>
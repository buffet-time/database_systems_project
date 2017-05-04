<?php
    // connects to the database
    session_start();
    include 'databaseConnect.php';
    global $db;
    
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $password = mysqli_real_escape_string($db, $_POST['pass']);
    $query = mysqli_query($db, "SELECT * FROM Employee WHERE Employee_number ='$id'"); //check the employee table
    $exist = mysqli_num_rows($query);
    $table_ids = "";
    $table_password = "";
    
    if($exist > 0)
        {
            while($row = mysqli_fetch_assoc($query))
                {
                    // the first username row is passed on to $table_username and so on until the query is finished
                    $table_ids = $row['Employee_number'];
                    $table_password = $row['Password'];
                    $table_manager = $row['Manager'];
                    $table_name = $row['FName'];
                    $table_address = $row['Address'];
                }
                
            // If this is true then bring the employee to the Homepage
            if($id == $table_ids) 
                {
                    // checks to see if the password entered in the field becomes the hashed password in the database
                    $password = password_verify($password, $table_password);
                    
                    // id and Pass are correct!
                    if($password)
                        {
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $id;
                            $_SESSION['address'] = $table_address;
                            $_SESSION['id'] = $id;
                            $_SESSION['manage'] = $table_manager;
                            $_SESSION['name'] = $table_name;
                            print '<script>window.location.assign("home.php");</script>'; //redirects to home.php aka the main page
                        }
                    
                    //password does not match id
                    else
                        {
                            print '<script>alert("Incorrect Password!");</script>';
                            print '<script>window.location.assign("employeeLogin.php");</script>'; //redirects to employeeLogin.php 
                        }
                }
                
            else
                {
                    print '<script>alert("Incorrect ID!");</script>';
                    print '<script>window.location.assign("employeeLogin.php");</script>'; //redirects to employeeLogin.php 
                }
           
        }
    
    // if their is nothing in the database/ the username doesn't exist then it prompts the user that there is an incorrect username and refreshes thepage.
    else
        {
            print '<script>alert("Incorrect ID!");</script>';
            print '<script>window.location.assign("employeeLogin.php");</script>'; //redirects to employeeLogin.php
        }
?>